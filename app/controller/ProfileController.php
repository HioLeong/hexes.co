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

    public function addFriend() {
        $currentUserId = $_GET['currentUserId'];
        $requestUserId = $_GET['requestUserId'];

        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'INSERT INTO Friendship(User_idUser, User_idUser1) VALUES(\''.$currentUserId.'\',\''.$requestUserId.'\');';
        $result = mysqli_query($con, $query);
        mysqli_close($con);
        return var_dump($result);
    }

    public function isFriends() {
        $currentUserId = $_GET['currentUserId'];
        $requestUserId = $_GET['requestUserId'];
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM Friendship WHERE User_idUser=\''.$currentUserId.'\' AND User_idUser1=\''.$requestUserId.'\';';
        $result = mysqli_query($con, $query);
        $row = $result->fetch_row();
        if ($row == NULL ) {
            echo 'not friends';
        } else {
            echo 'friends';
        }
    }

    public function getFriendsOfFriend() {
        $currentUserId = $_GET['currentUserId'];
        $requestUserId = $_GET['requestUserId'];

        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = ' SELECT * FROM (SELECT * FROM Friendship WHERE User_idUser = '.$requestUserId.') AS T WHERE NOT EXISTS( SELECT * FROM Friendship WHERE Friendship.User_idUser1 = T.User_idUser1 AND Friendship.User_idUser = '.$currentUserId.'  );';
        $results = mysqli_query($con, $query);
        $row = $results->fetch_row();
        echo json_encode($row);
    }

    public function getAllUsers() {
        $currentUserId = $_SESSION['id'];
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = "SELECT * FROM (SELECT User . *, UserSchool.School_idSchool FROM User LEFT JOIN UserSchool ON User.idUser = UserSchool.User_idUser) AS T LEFT JOIN School ON School.idSchool = T.School_idSchool WHERE T.idUser <> {$currentUserId}";
        $results = mysqli_query($con, $query);
        
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
    }

    public function getFriends() {
        $requestUserId = $_GET['requestUserId'];
        $query = 'SELECT * FROM Friendship WHERE User_idUser='.$requestUserId.';';
        $results = $this->getQueryResults($query);
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
    }


    public function getNotifications() {
        $currentUserId = $_SESSION['id'];
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = "SELECT Friendship.* FROM Friendship WHERE Friendship.User_idUser1 = {$currentUserId} AND Friendship.User_idUser NOT IN (SELECT DISTINCT Friendship.User_idUser1 FROM Friendship WHERE Friendship.User_idUser = {$currentUserId})";
        $results = mysqli_query($con, $query);
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
    }

    private function getQueryResults($query) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $results = mysqli_query($con, $query);
        return $results;
    }


    private function getResultAsJson($results) {
        $result = array(); 
        $row = mysqli_fetch_assoc($results);
        return json_encode($row);
    }
}
