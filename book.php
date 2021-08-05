<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAILWAY TICKET SYSTEM</title>
    <style>
        .header 
        {
        background-color: #4b67f1a4;
        font-family: 'Times New Roman', Times, serif;
        font-size: 14px;
        color:white;
        padding: 2px;
        text-align: center;
        }

        .footer 
        {
        background-color: #4b67f1a4;
        font-family: 'Times New Roman', Times, serif;
        position: fixed;
        bottom: 0;
        width: 100%
        font-size: 14px;
        padding: 2px;
        color:white;
        }
        /* Style the footer */
        .footer 
        {
        background-color: #4b67f1a4;
        font-family: 'Times New Roman', Times, serif;
        font-size: 14px;
        position: fixed;
        padding: 0.5px;
        left: 0;
        bottom: 0;
        width: 100%;
        color:white;
        text-align: center;
        }

        *
        {
        box-sizing: border-box}
        body 
        {
            font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;
        }

        .posic
        {
            padding-left: 0px;
        }
        .center 
        {
        margin-left: auto;
        margin-right: auto;
        }
        td{
            font-size:32px;
            color:#fcee60;
                }
                
        .book
        {
            box-sizing: content-box;  
            top: 50%;
            width: 500px;
            height: 650px;
            padding: 30px;  
            margin: auto ;
            position: center;
            border-color:#333k;
            border: 3px solid ;
        }
    </style>
</head>
<body>
<script>
    function data()
    {   
        var ac1=10;
        var ac2=10;
        var ac3=10;
        var nac=10;
        var ecc=10;
        var nacc=10; 
        var f=document.getElementById("from").value;
        var t=document.getElementById("to").value;
        if(f==t)alert("choose different destination");
        var d=document.getElementById("date").value;
        var a=document.getElementById("adults").value;
        var c=document.getElementById("children").value;
        var class=document.getElementById("class").value;
        if(class="ac1")
            {ac1=ac1-1;}
        else if(class="ac2")
            {ac2=ac2-1;}
        else if (class="ac3")
            {ac3=ac3-1;}
        else if(class="nac")
            {nac=nac-1;}
        else if(class="ecc")
            {ecc=ecc-1;}
        else if(class="nacc")
            {nacc=nacc-1;}

    }

</script>
    <div class="header">
        <table  align="center" class="center">
        <tr>
        <td align="center" ><img style="float: left; margin: 0px 0px 0px 0px;" src="train.png" height="45" width="45" ></td><td>&nbsp; </td>
        <td  align="center" rowspan="2">INDIAN RAILWAYS</td>
        <tr><td></td></tr>
        <!--<td align="center"><img src="https://vtop.vit.ac.in/vtop/assets/img/vitlogo.png" height="120px" width="370px"></td>-->
        </tr><br>
        </table><br>
    </div>
    <br><br><br>
    <center>
        <div class="book">
        <h2 style="color:#273478">TICKET BOOKING</h2> 
    
        <form name="book.php" method="POST">
        
            <label for="from">From:</label>
            <select id="from" name="from" form="from">
            <option value="select">Choose from</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Madurai">Madurai</option>
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Kolkata">Kolkata</option>
            </select><br><br>

            <label for="to">To:</label>
            <select id="to" name="to" form="to">
            <option value="select">Choose to</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Madurai">Madurai</option>
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Kolkata">Kolkata</option>
            </select><br><br>
            
            <p>Travel Date</p>
            <input type="date" id="date" name="date" placeholder="dd-mm-yyyy"><br><br>
            
            <label for="number">Number of adults (abv 13yrs): &nbsp;&nbsp;</label>
            <input type="number" id="adults" name="number" required></br><br>

            <!--<label for="number">Number of children: &nbsp;&nbsp;</label>
            <input type="number" id="children" name="number" required></br><br>

             <p>Round trip:</p>
            <input type="radio" id="yes" name="round" value="yes">
            <label for="yes">Yes</label>&nbsp;
            <input type="radio" id="no" name="round" value="no">
            <label for="no">No</label>&nbsp;
            <br><br> -->
            
            <label for="class">Class:</label>
            <select id="class" name="class" form="to">
            <option value="class">Choose class</option>
            <option value="AC1">AC 1st class</option>
            <option value="AC2">AC 2nd class</option>
            <option value="AC3">AC 3rd class</option>
            <option value="NAC">Sleeper</option>
            <option value="ecc">Exec. AC Chair car</option>
            <option value="nacc">Non AC Chair car</option>
            </select><br><br>

            <input type="submit" name="Submit" id="Submit" onclick="data()" value="Find trains">
        
        </form>
    </div>
</center>

<div class="footer">
    <p>&#169; INDIAN RAILWAYS <span style="font-size: 15px;">--Chennai, Pune, Madurai, Delhi, Mumbai, Kolkata <b>Contact: 044 3993 1555</b></span> </p>       
</div>

</body>
</html>
