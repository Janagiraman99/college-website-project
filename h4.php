<html>
<head><title>ALLOTMENT</title>
</head>
<body>

    <div>
    <form method='POST'>
        <label>DATE</label>
        <input type='Date' name='date' style=' margin-left:50px;'><br><br>
        <label>HOUR</label>
        <select name='hour'>
        <option> </option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option></select><br><br>
        <label>YEAR</label>
        <select name='year'>
        <option> </option>
        <option>1</option>
        <option>2</option>
        <option>3</option></select><br><br>
        <label>SUBJECT NAME</label>
        <select name='hour'>
        <option> </option>
        <option>Technical English</option>
        <option>Python</option>
        <option>C</option>
        <option>CSS</option>
        <option>HTML</option>
        <option>JAVASCRIPT</option>
        <option>C++</option>
        <option>Ruby</option>
        <option>SQL</option>
        <option>MY SQL</option>
        <option>Node JS</option>
        <option>REACT JS</option>
        <option>ORACLE</option></select><br><br>
        <label>TOPIC</label><br>
        <input type='textarea' name='topic' style='height:75px;'><br><br>
        <input type='submit' name='submit' style=' width:100px; margin-left:80px;'>
    </form>
    </div>
</body>
<style>
    body{
        background-color: teal;
    }
    div{
        border: 1px solid black;
        border-radius: 10px;
        margin: 100px 500px 200px 500px;
        padding: 15px 30px ;
        background-color: lightblue;
    }
    div:hover{
        box-shadow: 0 0 15px silver;
    }
    input{
        width: 200px;
        height: 35px;
        border-radius: 10px;
        margin-left: 30px;
    }
    input:hover{
        box-shadow: 0 0 15px silver;
    }
    select{
        width: 50px;
        height: 25px;
        border-radius: 10px;
        margin-left: 30px;
        font-family: TimesNewRoman;
    }
    select:hover{
        box-shadow: 0 0 15px silver;
    }
</style>
</html>