<?php

class Reporting extends Controller
{
    function index(){
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        if(Auth::access('Supervisor')){
            $this->view('reporting');
        }
        else{
            $this->view('404');
        }
    }
}