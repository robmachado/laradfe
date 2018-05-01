<?php

namespace App\Processes;

use NFePHP\NFe\Common\Standardize;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

class NFe
{
    public $filesystem;
    
    public function __construct($path = null)
    {
        if (empty($path)) {
            $path = env['NFE_PATH'];
        }
        $adapter = new Local($path);
        $this->filesystem = new Filesystem($adapter);
    }
    
    public function listFiles($subpath = null)
    {
        $this->filesystem->listContents()
    }
}
