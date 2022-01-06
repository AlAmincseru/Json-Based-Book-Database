<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $books = '';
    if (file_exists('books.json')) {
        $bookconten = file_get_contents('books.json');
        $books = json_decode($bookconten, true);
    } else {
        $books = array();
    }

    if ((int)$id - 1 < count($books)) {
        array_splice($books, $id - 1, 1);
        $str = json_encode($books);
        file_put_contents('books.json', $str);
        header('Location: index.php');
    } else {
        echo 'Sorry!Book not found';
    }
}
