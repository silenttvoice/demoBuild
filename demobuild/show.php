<!DOCTYPE html>
<html>
    <head>
        <style>
            /*
            Styling the page
            */
            #content_area 
            {
                width: 500px;
                margin: 0 auto;
            }
            
            div a
            {
               width: 800px;
               margin: 0 auto; 
               text-align: center;
            }
            
            table 
            {
                border-collapse: collapse;
                width: 100%;
            }
            
            th 
            {
                background-color: #4CAF50;
                color: white;
            }
            
            tr:nth-child(even)
            {
                background-color: #f2f2f2
            }
            
            table, td, th 
            {
                border: 1px solid black;
                text-align: left;
                padding: 8px;
            }
        </style>
        
        <title>Details</title> <!--title of the page-->
    </head>
    <body>
        <div id="content_area">
        
        <h2>Members in the Selected School</h2> <!--heading of the page-->
        <table>
            <thead> <!--heading of the table-->
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                         
        <?php 
            session_start();
        ?>
                
        <?php
            include ('connection.php'); //including connection of the database from connection.php page
   
            $members = "SELECT * FROM member where sid =".$_SESSION['list'].""; //SQL query to select the name of the members from the database using the school chosen from the dropdownlist
            $run = mysql_query($members); //execute query
    
            while($row=mysql_fetch_array($run)) //retrieve a row of data as an array
                    
        {
        ?>
        <tr> <!--Rows of the table-->
            <td><?php echo $row['m_name']?></td>
            <td><?php echo $row['m_email']?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
                <a href="index.php">Get back to index page</a>

</div>
</body>
</html>