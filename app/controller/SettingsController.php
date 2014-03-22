<?php

class SettingsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	*/

    public function index() {
    }

    public function updateUserDetailsFromPost() {
        $fields = array('email', 'password', 'firstName', 'surname', 'otherName', 'dateOfBirth', 'relStatus', 
            'gender', 'school', 'currentLocation'); 
        /* Set all post fields */
        ini_set('memory_limit', '-1');
        $userObj = json_decode($_POST['data']);
        return $this->updateUserDetails($userObj, $fields);
    }

    public function updateUserDetails($userDetails, $fields) {
        $returns = '';
        $this->createUserIfNoteExist($userDetails->email);
        foreach ($fields as $field) {
            $returned = $this->updateRow($field, $userDetails->$field, $userDetails->email);
            $returns = $returns.$returned;
        }
        return $returns;
    }

    private function createUserIfNoteExist($email) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = "SELECT * FROM User WHERE email='{$email}'";
            $results = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($results);
            if (empty($row)) {
                $query = "INSERT User(email) VALUES('{$email}');";
                $results = mysqli_query($con, $query);
                echo var_dump($results);
            } else {
                echo 'nope';
            }
    }

    private function updateRow($property, $value, $email) {
        if (strcmp($property, 'school') == 0) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $schoolId = $this->getSchoolIdByName($value);
            $userId = $this->getUserIdByEmail($email);
            $query = 'INSERT INTO UserSchool(User_idUser, School_idSchool) VALUES(\''.$userId.'\',\''.$schoolId.'\');';
            echo $query;
            $result = mysqli_query($con, $query); 
            return var_dump($result);
        }

        if (($property != NULL) && ($value != NULL)) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = 'UPDATE User SET '.$property.'=\''.$value.'\' WHERE email=\''.$email.'\';';
            echo $query;
            $result = mysqli_query($con, $query); 
            return var_dump($result);
        } else {
            return '';
        }
    }

    private function getUserIdByEmail($email) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = 'SELECT idUser FROM User WHERE email=\''.$email.'\';';
            $result = mysqli_query($con, $query);
            return $result->fetch_row()[0];
    }

    private function getSchoolIdByName($schoolName) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = 'SELECT * FROM School WHERE schoolName = \''.$schoolName.'\';';
            $result = mysqli_query($con, $query);

            $row = $result->fetch_row()[0];
            //If school does not exist, insert into table
            if ($row == "") {
                $query = 'INSERT INTO School(schoolName) VALUES(\''.$schoolName.'\');';
                mysqli_query($con, $query);
                $query = 'SELECT * FROM School WHERE schoolName = \''.$schoolName.'\';';
                $result = mysqli_query($con, $query);
                $row = $result->fetch_row()[0];
            }

            return $row;
    }
}
