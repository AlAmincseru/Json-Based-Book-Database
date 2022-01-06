<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $books = '';
    if (file_exists('books.json')) {
        $bookConten = file_get_contents('books.json');
        $books = json_decode($bookConten, true);
    } else {
        $books = array();
    }

    $data = array(
        'id' => $_POST['id'],
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'pages' => $_POST['pages'],
        'available' => $_POST['available'],
        'isbn' => $_POST['isbn']
    );
    array_push($books, $data);
    $db_string = json_encode($books);
    file_put_contents('books.json', $db_string);
    header('Location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    input[type=text],
    select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }


    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div style="margin-left: 30%;">
        <h1 style="text-emphasis-color:red ;">For adding touple: </h1><br>
        <form action="" method="post">
            <label for=""><b>BOOK ID</b>:</label><br>
            <input type="text" name="id" placeholder="Enter the Book ID..." required>
            <br>
            <label for=""><b>Title</b>:</label><br>
            <input type="text" name="title" placeholder="Enter the Book Title..." required>
            <br>
            <label for=""><b>Author</b>:</label><br>
            <input type="text" name="author" placeholder="Enter the Author Name..." required>
            <br>
            <label for=""><b>Available?</b></label><br>
            <input type="text" name="available" placeholder="True or False" required>
            <br>
            <label for=""><b>Pages Number</b></label><br>
            <input type="text" name="pages" placeholder="Enter page Number" required>
            <br>
            <label for=""><b>ISBN</b></label><br>
            <input type="text" name="isbn" placeholder="Like: 5780061120084" required>

            <input style="margin-bottom: 10px;" style="width: 100px;margin-top: 10px;" type="submit" value="Submit" required>
        </form>
    </div>
</body>

</html>