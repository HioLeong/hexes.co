<?php

class ProfileController extends baseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

    public function index() {
        $this->registry->template->show('profile');
    }

    public function getUserDetails($id) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM User WHERE idUser=\''.$id.'\'';
        $results = mysqli_query($con, $query);
        echo $this->getResultAsJson($results);
    }

    public function getSchoolNameByUserId() {
        $userId = $_POST['id'];
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = ' SELECT schoolName FROM School, UserSchool WHERE UserSchool.User_idUser ='.$userId.' AND School.idSchool = UserSchool.School_idSchool';
        $result = mysqli_query($con, $query);
        echo $result->fetch_row()[0];
    }

    private function getResultAsJson($results) {
        $result = array();
        $row = mysqli_fetch_assoc($results);
        return json_encode($row);
    }
}
