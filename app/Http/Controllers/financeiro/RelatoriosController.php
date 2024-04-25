<?php

namespace App\Http\Controllers\financeiro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    public $teste = false;
    public function getData()
    {
        $data = [
            ['action' => 'teste1', 'qtd' => 4, 'valor' => 478, 'div' => 10],
            ['action' => 'teste2', 'qtd' => 5, 'valor' => 500, 'div' => 12]
        ];

        return $data;
    }
    public function index()
    {
        $data = $this->getData();
        return view('financeiro.relatorios.historico', compact('data'));
    }
}
