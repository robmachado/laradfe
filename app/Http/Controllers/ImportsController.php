<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processes\ImportNFeFiles;

class ImportsController extends Controller
{
    public function index()
    {
        $imp = new ImportNFeFiles();
        $imp->importIssued('enviadas/aprovadas/200909');
        $imp->importRecieved('recebidas/201401');
        return 'AQUI !!!!!';
    }
}
