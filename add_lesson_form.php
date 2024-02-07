<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lesson</title>
</head>
<body>
    <div>
    <h2>Add Lesson</h2>
    <form action="add_lesson.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" style="margin-left:50px;border-radius:5px;" required></textarea><br><br>

        <label for="date">Date:</label><br>
        <input type="date" name="date" required><br><br>

        <label for="time">Time:</label><br>
        <input type="time" name="time" required><br><br>

        <input type="submit" value="Add Lesson" style="margin-left:250px; background-color:orange;">
    </form>
</div>
</body>
<style>
    body{
        background-color:lightseagreen;
    }
    div{
        border: 1px solid black;
        margin-left: 350px;
        margin-top:80px;
        margin-right:400px;
        margin-bottom:00px;
        padding-left: 50px;
        padding-top:35px;
        padding-bottom:35px;
        box-shadow:0 0 20px grey;
        background-color:teal;
    }
    label{
        font-size: large;
        font-family: TimesNewRoman;
    }
    input{
        width:150px;
        height:35px;
        border-radius:5px;
        font-size: large;
        font-family: TimesNewRoman;
        margin-left:50px;
    }
    input:hover{
        background-color: orange;
    }
</style>
</html>
