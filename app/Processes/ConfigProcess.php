<?php

namespace App\Processes;

class ConfigProcess
{
    public $tpAmb = 2;
    public $razaosocial;
    public $siglaUF;
    public $cnpj;
    public $schemes;
    public $versao;
    public $tokenIBPT;
    public $CSC;
    public $CSCid;
    public $aProxyConf = [
        'proxyIp' => '',
        'proxyPort' => '',
        'proxyUser' => '',
        'proxyPass' => ''
    ];
    
    public function __construct(
        $razaosocial,
        $siglaUF,
        $cnpj,
        $tpAmb = 2,
        $schemes = 'PL_008i2',
        $versao = '3.10',
        $tokenIBPT = '',
        $CSC = '',
        $CSCid = '',
        $aProxyConf = [
            "proxyIp" => "",
            "proxyPort" => "",
            "proxyUser" => "",
            "proxyPass" => ""
        ]
    ) {
        $this->tpAmb = $tpAmb;
        $this->razaosocial = $razaosocial;
        $this->siglaUF = $siglaUF;
        $this->cnpj = $cnpj;
        $this->versao = $versao;
        if ($versao == '3.10') {
            $schemes = 'PL_008i2';
        } else {
            $schemes = 'PL_009_V4';
        }
        $this->schemes = $schemes;
        $this->tokenIBPT = $tokenIBPT;
        $this->CSC = $CSC;
        $this->CSCid = $CSCid;
        $this->aProxyConf = $aProxyConf;
    }
    
    public function __toString()
    {
        $conf = [
            'atualizacao' => date('Y-=m-d H:i:s'),
            'tpAmb' => $this->tpAmb,
            'razaosocial' => $this->razaosocial,
            'siglaUF' => $this->siglaUF,
            'cnpj' => $this->cnpj,
            'schemes' => $this->schemes,
            'versao' => $this->versao,
            'tokenIBPT' => $this->tokenIBPT,
            'CSC' => $this->CSC,
            'CSCid' => $this->CSCid,
            'aProxyConf' => $this->aProxyConf
        ];
        return json_encode($conf);
    }
}