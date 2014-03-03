<?php

class ProfileController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

    public function showPage() {
        return View::make('profile');
    }
}
