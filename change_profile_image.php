<?php
session_start();


include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");
include("classes/post.php");


$login = new Login();
$user_data = $login->check_login($_SESSION['mybook_userid']);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Change profile image | My Book</title>   
</head>

<style type="text/css">
    #blue_bar{
        height: 50px;
        background-color: #405d9b;
        color: #d9dfeb;
    }
    #search_box{
        width: 400px;
        height: 20px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        font-size: 14px;
        background-image: url(search.png);
        background-repeat: no-repeat;
        background-position: right;
    }

   

    

       #post_button{
        float: right;
        background-color:#405d9b;
        border: none;
        color: white;
        padding: 4px;
        font-size: 14px;
        border-radius: 2px;
        width: 50px;

       }

       #post_bar{
        marging-top: 20px;
        background-color: white;
        padding: 10px;
        }

        #post{
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }

</style>

<body style="font-family: tahoma; background-color:#d0d8e4;">
    <br>
    <?php include("header.php"); ?>
    

    <!---cover area ---> 
    
    <div style="width: 800; margin: auto; min-height: 400px;">
        
    
    <!---below cover area --->
    <div style="display: flex;">
     
         <!---posts area --->
        <div style="min-height: 400px;flex:2.5; padding: 20px; padding-right: 0px;">
        <form method="post" enctype="multipart/form-data">
        <div style="border: solid thin #aaa; padding: 10px; background-color:white;">
     

            <input type="file" name="file">
            <input id="post_button" type="submit" value="Post" >
            <br>
        </div>
        </form> 
</body>
</html>