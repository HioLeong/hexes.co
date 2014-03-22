<?php

class BlogController extends baseController {
    public function index() {

    }

    public function addBlog() {
        $data = json_decode($_POST['data']);
        $title = $data->title;
        $content = $data->content;
        $id = $_SESSION['id'];
        $query = "INSERT Blog(title, content, dateCreated, User_idUser) VALUES('{$title}', '{$content}', now(), {$id})";
        $results = $this->query($query);
        return var_dump($results);
    }

    public function getAllBlogs() {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM Blog WHERE User_idUser={$id}";
        $results = $this->query($query);
        $array = array();
        while ($row = mysqli_fetch_assoc($results)) {
            array_push($array, $row);
        }
        echo json_encode($array);
    }

    public function query($query) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $results = mysqli_query($con, $query);
        return $results;
    }

}
