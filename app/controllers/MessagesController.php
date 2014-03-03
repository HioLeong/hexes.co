
<?php

class MessagesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| 
	|--------------------------------------------------------------------------
	*/

    public function sendMessage($message, $fromId, $toId) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'INSERT INTO Message(message, idUserFrom, idUserTo) VALUES(\''.$message.
            '\',\''.$fromId.'\',\''.$toId.'\');';
        $results = mysqli_query($con, $query);
        return var_dump($results);
    }

    public function getMessages($fromId, $toId) {

        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM Message WHERE idUserFrom=\''.$fromId.'\' AND idUserTo=\''
            .$toId.'\';';
        $results = mysqli_query($con, $query);
        if ($results) {
            return getResultAsJson($results);
        } else {
            return json_encode(null);
        }
    }

    private function getResultAsJson($results) {
        $result = array();
        while ($row = mysqli_fetch_assoc($results)){
            $result[] = $row;
        }
        return json_encode($result);
    }
}
