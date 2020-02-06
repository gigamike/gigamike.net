<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Interfaces\PortfolioRepositoryInterface;

class PortfolioController extends Controller
{
    private $_portfolioRepository;

    public function __construct(PortfolioRepositoryInterface $portfolioRepository)
    {
        $this->_portfolioRepository = $portfolioRepository;
    }

    public function index(){
        $portfolios = $this->_portfolioRepository->orderBy('created_at', 'DESC')->get();

        return view('portfolio', compact('portfolios'));
    }
}
