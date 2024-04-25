<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiVantageService;

class CalendarController extends Controller
{
    protected $apiVantageService;

    public function __construct(ApiVantageService $apiVantageService)
    {
        $this->apiVantageService = $apiVantageService;
    }

    public function fetchDataFromApi($fiiTicker)
    {
        // Use o método getDividendData do ApiYahooFinanceService para obter os dados do FII
        $fiiData = $this->apiVantageService->getDividendData($fiiTicker);

        // Faça o que quiser com os dados do FII
        return $fiiData;
    }

    public function index()
    {
         // Defina a sigla do FII que você deseja consultar
         $fiiTicker = 'MXRF11.SA'; // Por exemplo, XPML11

         // Use o método fetchDataFromApi para obter os dados do FII
         $fiiData = $this->fetchDataFromApi($fiiTicker);

         // Faça o que quiser com os dados do FII
         dd($fiiData);
        // Faça o que quiser com os dados da API
        return view('calendar', compact('apiData'));
    }
}
