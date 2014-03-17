<?php

class SettingsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	*/

    private function setField($userObj, $property) {
        $userObj->__set($property, Input::get($property));
    }

    public function updateUserDetailsFromPost() {
        $fields = array('email', 'password', 'firstName', 'surname', 'otherName', 'dateOfBirth', 'relStatus', 
            'gender', 'school', 'currentLocation');
        $user = new User();
        /* Set all post fields */
        foreach ($fields as $field) {
            $this->setField($user, $field);
        }
        return $this->updateUserDetails($user, $fields);
    }

    public function updateUserDetails($userDetails, $fields) {
        //TODO: Set the correct query for updating 
        $returns = '';
        foreach ($fields as $field) {
            $returned = $this->updateRow($field, $userDetails->__get($field), $userDetails->__get('email'));
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
