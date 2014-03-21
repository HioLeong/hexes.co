<?php

class MessagesController extends BaseController {

    public function index() {
    }

    public function sendMessageByPost() {
        $data = json_decode($_POST['data']);
        echo $this->sendMessage($data->message, $data->fromId, $data->toId);
    }

    /**
     * Add new messages between two user IDs.
     */
    public function sendMessage($message, $fromId, $toId) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        //TODO: Add message type and current date
        $query = 'INSERT INTO Message(message, idUserFrom, idUserTo, date) VALUES(\''.$message.
            '\',\''.$fromId.'\',\''.$toId.'\', NOW());';
        $results = mysqli_query($con, $query);
        return var_dump($results);
    }

    public function getMessagesFromGet() {
        $currentUserId = $_GET['currentUserId'];
        $requestUserId = $_GET['requestUserId'];
        $messagesFromCurrent = $this->getMessages($currentUserId, $requestUserId);
        $messagesFromTo = $this->getMessages($requestUserId, $currentUserId);
        $array = array();
        array_push($array, $messagesFromCurrent);
        array_push($array, $messagesFromTo);
        echo json_encode($array);
    }

    /**
     * Get all message messages from $fromId to $toId.
     */
    public function getMessages($fromId, $toId) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM Message WHERE idUserFrom=\''.$fromId.'\' AND idUserTo=\''
            .$toId.'\';';
        $results = mysqli_query($con, $query);
        return $this->getResultAsJson($results);
    }

    public function getConversation() {
        $currentUserId = $_SESSION['id'];
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = "SELECT DISTINCT idUserTo, idUserFrom FROM Message
            WHERE (idUserFrom = {$currentUserId}) OR (idUserTo={$currentUserId})";
        $results = mysqli_query($con, $query);
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
    }

    //TODO: Refactor this into a Helper class/Find Php premade
    private function getResultAsJson($results) {
        $result = array();
        while ($row = mysqli_fetch_assoc($results)){
            $result[] = $row;
        }
        return json_encode($result);
    }
}
