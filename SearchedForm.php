<!DOCTYPE html>
<html lang="en">

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

    <Div style="margin-left: 30%;">
        <h2>
            <b>Input Book ID for Search:</b>
        </h2>
        <form action="Search.php" method="GET">
            <input type="text" name="id" placeholder="Enter Book Id for Search">
            <input type="submit" value="submit">
        </form>
    </Div>
</body>

</html>