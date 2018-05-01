<?php

namespace App\Processes;

use NFePHP\NFe\Common\Standardize;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use App\Models\Issued;
use Carbon\Carbon;

class ImportNFeFiles
{
    public $filesystem;
    
    public function __construct($path = null)
    {
        if (empty($path)) {
            $path = env('NFE_PATH');
        }
        $adapter = new Local($path);
        $this->filesystem = new Filesystem($adapter);
    }
    public function importRecieved($subpath)
    {
        
    }
    
    public function importIssued($subpath)
    {
        $nfes = $this->listFiles($subpath);
        $s = new Standardize();
        foreach ($nfes as $nfepath) {
            $xml = $this->filesystem->read($nfepath);
            $s = new Standardize($xml);
            $std = $s->toStd();
            $dEmi = !empty($std->NFe->infNFe->ide->dEmi) 
                ? $std->NFe->infNFe->ide->dEmi
                : '';
            $dhEmi = !empty($std->NFe->infNFe->ide->dhEmi) 
                ? $std->NFe->infNFe->ide->dhEmi
                : '';
            if (!empty($dEmi)) {
                $issuedate= $dEmi;
            } else {
                $dt = Carbon::createFromFormat('Y-m-d\TH:i:sP', $dhEmi);
                $issuedate = $dt->format('Y-m-d');
            }
            
            $key = $std->NFe->infNFe->attributes->Id;
            $key = preg_replace("/[^0-9]/", "", $key);
            //$issued = Issued::where('key', '=', $key)->firstOrFail();
            //if (!empty($issued)) {
            //    continue;
            //}
            $issued = new Issued();
            $issued->id = 0;
            $issued->key = $key;
            $issued->number = $std->NFe->infNFe->ide->nNF;
            $issued->serie = $std->NFe->infNFe->ide->serie;
            $issued->version = $std->NFe->infNFe->attributes->versao;
            $issued->model = $std->NFe->infNFe->ide->mod;
            $issued->issuedate = $issuedate;
            $issued->recipient = $std->NFe->infNFe->dest->xNome;
            $issued->amount = $std->NFe->infNFe->total->ICMSTot->vNF;
            $issued->billed = !empty($std->NFe->infNFe->cobr->fat->vFat)
                ? $std->NFe->infNFe->cobr->fat->vFat
                : null;
            $issued->weight = !empty($std->NFe->infNFe->transp->vol->pesoL)
                ? $std->NFe->infNFe->transp->vol->pesoL
                : null;
            $issued->status = !empty($std->NFe->protNFe->infProt->cStat)
                ? $std->NFe->protNFe->infProt->cStat
                : null;
            $issued->xmlcontent = base64_encode(gzencode($xml));
            $issued->save();
        }
    }
    
    public function getStd($path)
    {
        $xml = $this->filesystem->read($path);
        $s = new Standardize($xml);
        $std = $s->toStd();
        return $std;
    }
    
    public function listFiles($subpath)
    {
        $contents = $this->filesystem->listContents($subpath, true);
        $resp = [];
        foreach($contents as $content) {
            if ($content['type'] != 'file') {
                continue;
            }
            if ($content['extension'] === 'xml') {
                $resp[] = $content['path'];
            }
        }
        return $resp;
    }
}
