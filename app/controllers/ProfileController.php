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

    public function GetUserDetails($id) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM User WHERE idUser=\''.$id.'\'';
        $results = mysqli_query($con, $query);
        return $this->getResultAsJson($results);
    }

    private function getResultAsJson($results) {
        $result = array();
        $row = mysqli_fetch_assoc($results);
        return json_encode($row);
    }
}
