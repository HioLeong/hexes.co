
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

}
