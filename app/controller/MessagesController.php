
<?php

class MessagesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| 
	|--------------------------------------------------------------------------
	*/

    /**
     * Add new messages between two user IDs.
     */
    public function sendMessage($message, $fromId, $toId) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        //TODO: Add message type and current date
        $query = 'INSERT INTO Message(message, idUserFrom, idUserTo) VALUES(\''.$message.
            '\',\''.$fromId.'\',\''.$toId.'\');';
        $results = mysqli_query($con, $query);
        return var_dump($results);
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

    //TODO: Refactor this into a Helper class/Find Php premade
    private function getResultAsJson($results) {
        $result = array();
        while ($row = mysqli_fetch_assoc($results)){
            $result[] = $row;
        }
        return json_encode($result);
    }
}
