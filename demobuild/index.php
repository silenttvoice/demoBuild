<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> School Form</title> <!--title of the page-->
    </head>
    <style>
        /* 
        Styling the page 
        */
        #content_area 
        {
            width: 800px;
            margin: 0 auto;
        }
        
        h3
        {
            width: 800px;
            margin: 0 auto;
            font-family: arial, sans-serif;
        }
        
        div
        {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        input[type=text], select 
        {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type=submit] 
        {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover 
        {
            background-color: #45a049;
        }   
    </style>
    <body>
        
        <h3>Please Enter Details to Add A Member</h3> <!--heading of the page-->
        
        <?php 
          session_start(); 
        ?>
	<div id="content_area">
            <form action="addMember.php" method="POST">
                <label for="name">Name</label><br> <!--label for name-->
                <input type="text" name="m_name"><br> <!--text box of the label name-->
                
                <label for="email">Email Address</label><br> <!--label for email-->
                <input type="text" name="m_email"><br> <!--text box of the label name-->
                
                <label for="school">School</label>
                    <?php
                    include('connection.php'); //including connection of the database from connection.php page
                    
                    $sql = "SELECT * FROM school"; //SQL query to select the name of schools from the database
                    $result = mysql_query($sql); //execute query
                    
                    echo "<select name='list' value=''>"; //dropdownlist 
                    while ($row = mysql_fetch_array($result)) //retrieve a row of data as an array
                    {
                        echo "<option value='" . $row['sid'] ."'>" . $row['s_name'] ."</option>"; //school name into the option from database
                    }
                    echo "</select>";
                    ?>
            <br><input type="submit" value="Add A Member"><br> <!--submit button-->
            </form>
            
	</div>
    </body>
</html>

