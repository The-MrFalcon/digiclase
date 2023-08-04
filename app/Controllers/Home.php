<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Estrutura Header
        return view('template/header/headerhtml')
            . view('template/header/widgettrader')
            . view('template/header/header')
            . view('page/bannersection')
            // . view('page/transitionheader')
            // Estrutura Page
            . view('page/about')
            . view('page/services')
            // Estrutura Modal Serviços
            . view('modal/financeiro')
            . view('modal/marketing')
            . view('modal/redesociais')
            . view('modal/trafegopago')
            . view('modal/web')
            . view('page/mvv')
            // Estrutura Footer
            . view('template/footer/footer')
            . view('template/footer/footerhtml')
            . view('template/footer/socialmedia');
            
    }
}
