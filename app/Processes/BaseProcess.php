<?php

namespace App\Processes;

use App\Process\ConfigProcess;
use NFePHP\NFe\Tools;
use NFePHP\Common\Certificate;
use NFePHP\Common\Soap\SoapCurl;
use NFePHP\Common\Certificate\CertificationChain;
use stdClass;

class BaseProcess
{
    /**
     * @var stdClass
     */
    protected $cad;
    /**
     * @var string
     */
    protected $config;
    /**
     * @var NFePHP\NFe\Tools
     */
    protected $tools;
    /**
     * @var Monolog
     */
    protected $logger;
    /**
     * @var string
     */
    protected $storage;
    
    public function __construct(stdClass $cad, $pathlog)
    {
        $this->cad = $cad;
        $config = new Config(
            $cad->fantasia,
            $cad->uf,
            $cad->cnpj,
            $cad->tpAmb
        );
        $this->config = "{$config}";
        $this->storage = realpath(__DIR__ .'/../../storage');
        $this->logger = new Logger('DFe');
        $this->logger->pushHandler(
            new StreamHandler($this->storage . '/' . $pathlog, Logger::WARNING)
        );
        $this->loadTools();
    }
    
    protected function loadTools()
    {
        //carrega o certificado
        $certificate = Certificate::readPfx(
            base64_decode($this->cad->crtpfx),
            $this->cad->crtpass
        );
        $certificate->chainKeys = new CertificationChain(
            $this->cad->crtchain
        );
        //carrega a classe de comunicação
        $this->tools = new Tools($this->config, $certificate);
        $this->tools->model('55');
        $this->tools->soap->disableSecurity(true);
        $this->tools->soap->setDebugMode(false);
    }
}