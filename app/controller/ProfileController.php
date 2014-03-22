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
        $query = 'INSERT INTO Friendship(User_idUser, User_idUser1,date) VALUES(\''.$currentUserId.'\',\''.$requestUserId.'\', now());';
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
        $query = " SELECT User_idUser1 FROM (SELECT * FROM Friendship WHERE User_idUser = {$currentUserId}) AS T WHERE T.User_idUser1 IN (SELECT User_idUser1 FROM Friendship WHERE Friendship.User_idUser = {$requestUserId})";
        $results = mysqli_query($con, $query);
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
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
    
        $query = "SELECT DISTINCT
            idTo AS User_idUser1, firstNameTo, surnameTo, T2.picture_url
FROM
Friendship AS re,
Friendship AS adder
INNER join
(SELECT 
User.idUser AS idFrom,
User.firstName AS firstNameFrom,
User.surname AS surnameFrom
    FROM
        User
    WHERE
        User.idUser = {$requestUserId}) AS T ON adder.User_idUser = T.idFrom,
    Friendship AS addee
        INNER JOIN
    (SELECT DISTINCT
        User.idUser AS idTo,
            User.firstName AS firstNameTo,
            User.surname AS surnameTo,
            User.picture_url
    FROM
        User
    WHERE
        User.idUser <> {$requestUserId}) AS T2 ON T2.idTo = addee.User_idUser1
WHERE
    T.idFrom = re.User_idUser
        AND T2.idTo = re.User_idUser1";
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

    public function getNamesByIds($ids) {
        $array = json_decode($ids);
        $names = array();
        foreach ($array as $id) {
            array_push($names, $this->getNameById($id));
        }
        echo json_encode($names);
    }
    public function getNameById($id) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = "SELECT idUser, firstName, surname FROM User WHERE idUser = {$id}";
        $results = mysqli_query($con, $query);
        return mysqli_fetch_assoc($results);
    }

    public function getAllActivities() {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query= "SELECT Friendship.date, Adder.firstName AS firstNameFrom, Adder.surname AS surnameFrom, Addee.firstName AS firstNameTo, Addee.surname AS surnameTo FROM Friendship, User AS Adder, User AS Addee WHERE (Adder.idUser = Friendship.User_idUser) AND (Addee.idUser = Friendship.User_idUser1)";
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

    public function getXML() {
        $id = $_SESSION['id'];
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = "SELECT * FROM User WHERE idUser = {$id}";
        $results = mysqli_query($con, $query);
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }

        $array = array_flip($array[0]);

        $xml = new SimpleXMLElement("<profile/>");
        array_walk_recursive($array, array ($xml, 'addChild'));
        $content = $xml->asXML();
        $file = $_SERVER['DOCUMENT_ROOT']."/profile/profile.xml";
        file_put_contents($file, $content);
    }
}
