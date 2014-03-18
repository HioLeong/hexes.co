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
        if (($property != NULL) && ($value != NULL)) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = 'UPDATE User SET '.$property.'=\''.$value.'\' WHERE email=\''.$email.'\';';
            $result = mysqli_query($con, $query); 
            return var_dump($result);
        } else {
            return '';
        }
    }
}
