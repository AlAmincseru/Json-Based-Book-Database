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
        <h2><b>Input BookID for Delete a specific Row:</b></h2>
        <form action="Delete.php" method="get">
            <input type="text" name="id" placeholder="Enter Book ID like 1 ... ">
            <input type="submit" name="Submit ID" onclick="return confirm('Are you sure?') ">
        </form>

    </div>

</body>

</html>