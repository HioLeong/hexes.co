<?php

class SettingsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	*/

    public function index() {
    }

    private function setField($userObj, $property) {
        $userObj->__set($property, Input::get($property));
    }

    public function updateUserDetailsFromPost() {
        $fields = array('email', 'password', 'firstName', 'surname', 'otherName', 'dateOfBirth', 'relStatus', 
            'gender', 'school', 'currentLocation');
        /* Set all post fields */
        ini_set('memory_limit', '-1');
        $userObj = json_decode($_POST['data']);
        echo $this->getSchoolIdByName('whitgift');
        return;
        return $this->updateUserDetails($userObj, $fields);
    }

    public function updateUserDetails($userDetails, $fields) {
        //TODO: Set the correct query for updating 
        $returns = '';
        foreach ($fields as $field) {
            $returned = $this->updateRow($field, $userDetails->$field, $userDetails->email);
            $returns = $returns.$returned;
        }
        return $returns;
    }

    private function updateRow($property, $value, $email) {
        if ($property == 'school') {
            $con = mysqli('localhost', 'root', 'root', 'HexDatabase');
        }

        if (($property != NULL) && ($value != NULL)) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = 'UPDATE User SET '.$property.'=\''.$value.'\' WHERE email=\''.$email.'\';';
            $result = mysqli_query($con, $query); 
            return var_dump($result);
        } else {
            return '';
        }
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
