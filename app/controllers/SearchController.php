<?php

class SearchController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| 
	|--------------------------------------------------------------------------
	*/

    public function fuzzySearchName($name) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $query = 'SELECT * FROM User WHERE firstName LIKE \'%'.$name.'%\';';
        $results = mysqli_query($con, $query);
        if ($results) {
            return $this->getResultAsJson($results);
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
