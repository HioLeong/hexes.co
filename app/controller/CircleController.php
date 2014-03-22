<?php

class CircleController extends baseController {

    public function index() {
    }

    public function addToCircle() {
        $requestUserId = $_GET['id'];
        $circleName = $_GET['circleName'];
        $this->addCircleIfNotExist();
        $id = $_SESSION['id'];
        $circleId = $this->getCircleId($circleName, $id );
        echo $circleId;
        echo $this->addUserToCircle($requestUserId, $circleId);
    }

    public function getAllCircles($id) {
        $query = " SELECT * FROM (SELECT * FROM CircleUser INNER JOIN (SELECT * FROM Circle WHERE idUserCreated = {$id}) AS C ON CircleUser.Circle_idCircle = C.idCircle) AS Ci INNER JOIN (SELECT * FROM User) As U WHERE U.idUser = Ci.User_idUser"; 
        $results = $this->query($query);
        $array = array(); 
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
    }

    public function addCircleIfNotExist() {
        $circleName = $_GET['circleName'];
        $id = $_SESSION['id'];
        if ($this->circleExists($circleName, $id) == false) {
            $this->insertCircle($circleName, $id);
        }
    }

    private function addUserToCircle($requestUserId, $circleId) {
        $query = "INSERT INTO CircleUser(User_idUser, Circle_idCircle, dateAdded) VALUES({$requestUserId}, {$circleId}, now())";
        echo $query;
        $results = $this->query($query);
        echo var_dump($results);
    }

    private function circleExists($circleName, $id) {
        $query = "SELECT * FROM Circle WHERE circleName='{$circleName}' AND idUserCreated={$id}";
        $results = $this->query($query);
        $row = mysqli_fetch_assoc($results);
        if (empty($row)) {
            return false;
        } else {
            return true;
        }
    }

    private function getCircleId($circleName, $id) {
        $query = "SELECT * FROM Circle WHERE circleName='{$circleName}' AND idUserCreated={$id}";
        $results = $this->query($query);
        $row = mysqli_fetch_assoc($results);
        return $row['idCircle'];
    }

    private function insertCircle($circleName, $id) {
        $query = "INSERT Circle(circleName, dateCreated, idUserCreated) VALUES ('{$circleName}', now(), {$id})";
        $results = $this->query($query);
        return var_dump($results);
    }

    private function query($query) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $results = mysqli_query($con, $query);
        return $results;
    }

}
