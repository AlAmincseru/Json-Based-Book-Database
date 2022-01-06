<?php
$books = "";
if (file_exists('books.json')) {
    $BooksContents = file_get_contents('books.json');
    $books = json_decode($BooksContents, true);
} else {
    $books = array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleFont.css">
    <title></title>
</head>

<body>
    <div>
        <button class="button1 b1">Book Store Information</button>
        <button class="button2 b2">Home Page</button>

    </div>


    <div>
        <table style="margin-top:10% ; margin-left:20%" ; border='4' ;>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Available</th>
                <th>Pages</th>
                <th>Isbn</th>
            </tr>
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td> <?php echo ($book['id']); ?> </td>
                    <td> <?php echo ($book['title']); ?> </td>
                    <td> <?php echo ($book['author']); ?> </td>
                    <td> <?php echo ($book['available']); ?> </td>
                    <td> <?php echo ($book['pages']); ?> </td>
                    <td> <?php echo ($book['isbn']); ?> </td>

                </tr>
            <?php endforeach; ?>
        </table>
        <h3>
            <b>To perform the following operation &darr;click the Button.</b>
        </h3>
    </div>
    <div style="margin-left:100px" ;>
        <button class="searchButton"> <a href="SearchedForm.php"> &#9989;Search</a></button><br><br>
        <button class="deleteButton"><a href="DeleteRow.php">&#9989; Delete</a></button><br><br>
        <button class="addButton"> <a href="AddedBookForm.php">&#9989; Add</a></button>
    </div>


</body>

</html>