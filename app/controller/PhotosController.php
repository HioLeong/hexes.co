<?php

class PhotosController extends baseController {

        public function index() {
        }

        public function getAllPhotosOfId($id) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = "SELECT * FROM (SELECT * FROM PhotoAlbum INNER JOIN (SELECT * FROM Photo) AS P ON PhotoAlbum.idalbum = P.PhotoAlbum_idalbum) AS P WHERE P.User_idUser1 = {$id}";
            $results = mysqli_query($con, $query);
            $array = array();
            while ($row = mysqli_fetch_assoc($results)) {
                array_push($array, $row);
            }
            echo json_encode($array);
        }

        public function uploadPhoto() {
            $output_dir = $_SERVER['DOCUMENT_ROOT'].'/upload/';
            if (isset($_FILES['file'])) {
                $ret = array();

                $error =$_FILES["file"]["error"];
                if(!is_array($_FILES["file"]["name"])) //single file
                {
                    $fileName = $_FILES["file"]["name"];
                    $UrlToFile = 'upload/'.$fileName;
                    move_uploaded_file($_FILES["file"]["tmp_name"],$UrlToFile);
                    echo $this->updateDatabase($UrlToFile);
                    $ret[]= $fileName;
                }
                else  //Multiple files, file[]
                {
                    $fileCount = count($_FILES["file"]["name"]);
                    for($i=0; $i < $fileCount; $i++)
                    {
                        $fileName = $_FILES["file"]["name"][$i];
                        move_uploaded_file($_FILES["file"]["tmp_name"][$i],$output_dir.$fileName);
                        $ret[]= $fileName;
                    }

                }
                echo json_encode($ret);
            }
        }

        public function uploadProfilePicture() {
            $output_dir = $_SERVER['DOCUMENT_ROOT'].'/upload/';
            if (isset($_FILES['file'])) {
                $ret = array();

                $error =$_FILES["file"]["error"];
                if(!is_array($_FILES["file"]["name"])) //single file
                {
                    $fileName = $_FILES["file"]["name"];
                    $UrlToFile = 'profile/'.$fileName;
                    move_uploaded_file($_FILES["file"]["tmp_name"],$UrlToFile);
                    echo $this->updateProfilePicture($UrlToFile);
                    $ret[]= $fileName;
                }
                else  //Multiple files, file[]
                {
                }
                echo json_encode($ret);
            }
        }


        private function updateProfilePicture($UrlToFile) {
            $id = $_SESSION['id'];
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = "UPDATE User SET picture_url='{$UrlToFile}' WHERE idUser = {$id}";
            $results = mysqli_query($con, $query);
            return var_dump($results);
        }

        private function updateDatabase($UrlToFile) {
            $albumid = $this->getAlbumId();
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = "INSERT INTO Photo(createdDate, url, PhotoAlbum_idalbum) VALUES(now(),'{$UrlToFile}',{$albumid})";
            echo $query;
            $results = mysqli_query($con, $query);
            echo var_dump($results);
        }

        public function createAlbum($id) {
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = "INSERT INTO PhotoAlbum(dateCreated, User_idUser1) VALUES(now(), {$id});";
            $results = mysqli_query($con, $query);
            echo $query;
            $query = "SELECT idalbum FROM PhotoAlbum WHERE User_idUser1 = {$id}";
            $results = mysqli_query($con, $query);
            $returnedId = mysqli_fetch_array($results)[0];
            return $returnedId;
        }

        private function getAlbumId() {
            $userId = $_SESSION['id'];
            $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
            $query = "SELECT idalbum FROM PhotoAlbum WHERE User_idUser1 = {$userId}";
            $results = mysqli_query($con, $query);
            $row = mysqli_fetch_array($results);
            if (empty($row)) {
                return $this->createAlbum($userId);
            } else {
                return $row['idalbum'];
            }
        }

}
