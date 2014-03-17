<?php

class HomeController extends baseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

    public function index() {
        $this->registry->template->show('home');
    }

}
