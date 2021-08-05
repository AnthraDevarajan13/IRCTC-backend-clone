<html>
    <head>
            <title>INDIAN RAILWAYS</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <noscript>Sorry but your browser don't support this document</noscript>
            <link rel="stylesheet" type="text/css" href="css_style_sheet.css">
    </head>
    <style>
    .column
    {
        box-sizing: content-box;  
        top: 50%;
        width: 370px;
        height: 300px;
        padding: 30px;  
        margin: auto ;
        position: center;
        border-color:#333k;
        border: 5px solid ;
        text-align: center;
    }
    input[type=submit]
    {
        background-color: #00cccc;
        border: none;
        color: #333k;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
    <body>
    <script>
    function validate()
    {var x=document.getElementById("1").innerHTML;
    var y=document.getElementById("2").innerHTML;
    if (x == "" || y == "") {
    alert("Username/password incorrect");
    if (!y.checkValidity()) {
    document.getElementById("2").innerHTML = y.validationMessage;
    return false;
    }
    </script>
    <div class="header">
            <table class="center">
            <tr>
            <td><img class="s" src="Images/icon.png" ></td>
            <td><h1>RESERVATION</h1></td>
            </tr>
            </table>
        </div>
        <div class="topnav">
        </div>
        <br>
        <br>
        <div class="column">
            <h1 style="color: #00cccc;">SIGN IN</h1>
            <form onsubmit="return validate()">
            <label for="userid">USER ID:</label><br>
            <input type="text" id="1" name="userid" placeholder="Enter your user id" required>
            <br>
            <br>
            <label for="password">Password:</label><br>
            <input type="password" id="2" min="8" max="20" name="password" placeholder="Enter your password" required>
            <br>
            <br>
            <input type="Submit" name="Submit" id="Submit" onclick="validate()" value="Submit">
            </form>   
        </div>
       <div class="footer">
            <p style="color:white;">&#169; 14,XYZ, Chennai Central, Chennai- INDIAN RAILWAYS </p>
        </div>
    </body>
</html>