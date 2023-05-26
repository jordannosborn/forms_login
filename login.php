<?php
require("authorDetails.php");
function doLogin(){
    include_once("connectToDB")
    }
    
    //following command is for debugging purposes only, comment this out when it works 
    //echo "Connected to $dbName";

    //the command we want to run 
    //SELECT * FROM userdetails where userName='tafe' and password = '1234granville567/'; 

    $username = $_POST['userName']; 
    $pass = $_POST['password'];

    $username

function displayAuthorDetails(){
    $dbName = "henry_shubha";
    $serverName = "localhost";
    $serverUser = "root";
    $serverPassword = "";
    $conn = new mysqli($serverName, $serverUser, $serverPassword, $dbName);
    if($conn -> connect_error){
        die("Connection error to $dbName, " . $conn->connect_error);
    }    
    $authorSqlStmt = "SELECT AUTHOR_FIRST, AUTHOR_LAST, title, publisher_name from author a, 
     book b, publisher c, wrote d where a.author_num = d.author_num 
     and b.book_code = d.book_code and c.publisher_code = b.publisher_code
     order by author_last, b.publisher_code;";
    $startTable = "<table border='1'>
        <tr>
            <th>Author name</th>
            <th>Book title</th>
            <th>Publisher</th>
        </tr>";
    $endTable = "</table>";
    
    //if connected to db - run sql statement
    $result = $conn->query($authorSqlStmt);
    if($result->num_rows > 0){
        echo $startTable;
        while($record = $result->fetch_array())
        {
            echo "<tr><td>". $record[0] . " " . $record[1]. "</td>\n";
            echo "<td>" .$record[2] . "</td>\n";
            echo "<td>" .$record[3] . "</td>\n</tr>\n";
        }
        echo $endTable;
    }
    else
        echo "no results";
    }
?>