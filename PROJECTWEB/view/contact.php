<?php 

include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="contact.css">
<div id="d02">
        <p  style="padding-left: 5%; padding-top: 7%; font-size: 50px;"><b><u>LGEP'</b><em> REAL ESTATE</u></em></p>
      
        <div id="d03">

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe 
                width="1080" 
                height="500" 
                id="gmap_canvas" 
                src="https://maps.google.com/maps?q=ubt&t=&z=7&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0">
            </iframe>
            <a href="https://123movies-org.net">123movies</a><br>
            <style>.mapouter
            {
                position:relative;
                text-align:right;
                height:500px;
                width:1080px;
                }
            </style>
            <a href="https://www.embedgooglemap.net">google map in html</a>
            <style>.gmap_canvas 
            {
                overflow:hidden;
                background:none!important;
                height:500px;
                width:1080px;
                }
            </style>
            </div>
        </div>
           
        </div>
        
    </div>  
    
    <div id="d04">

        <div id="d0401">
            <hr>

            <?php 
            
            if($_SESSION['is_logged_in'] == true){
                
            
            ?>
            <p style="font-size: larger; padding-left: 45%; padding-top: 20px;  "><b><em><u>CONTACT US</u></b></em></p>

            <form method="POST">
            <input type="text" name="name" id="contact_name" size="50"  style="margin-left: 80px; margin-right: 30px; margin-top: 25px; height: 30px; background-color: rgb(184, 184, 184);"
            value="<?= $_SESSION['name'] ?>">

            <input type="text" name="surname" id="contact_name" size="50"  style="margin-left: 80px; margin-right: 30px; height: 30px; background-color: rgb(184, 184, 184);"
            value="<?= $_SESSION['surname'] ?>">

            <input type="text" name="email" id="contact_name" size="50"  style="margin-left: 80px; margin-right: 30px; height: 30px; background-color: rgb(184, 184, 184);"
            value="<?= $_SESSION['email'] ?>">

            <textarea name="comments"  cols="80" rows="10" style="margin-left: 30%; margin-top: 35px; background-color: rgb(184, 184, 184);" placeholder="Type here..."></textarea><br>

            <input class="a" type="submit"  name="send" value="SEND "  style="margin-top: 30px; margin-left: 40%; border: solid 2px black; background-color: bisque; width: 300px; height: 30px;">

            <?php
            
            }
            if($_SESSION['is_logged_in'] == false){
            ?>
            <p style="font-size: larger; padding-left: 45%; padding-top: 20px;  "><b><em><u>CONTACT US</u></b></em></p>

            <form method="POST">
            <input type="text" name="name" id="contact_name" size="50"  style="margin-left: 80px; margin-right: 30px; margin-top: 25px; height: 30px; background-color: rgb(184, 184, 184);"
            placeholder="NAME">

            <input type="text" name="surname" id="contact_name" size="50"  style="margin-left: 80px; margin-right: 30px; height: 30px; background-color: rgb(184, 184, 184);"
            placeholder="SURNAME">

            <input type="text" name="email" id="contact_name" size="50"  style="margin-left: 80px; margin-right: 30px; height: 30px; background-color: rgb(184, 184, 184);"
            placeholder="EMAIL">

            <textarea name="comments"  cols="80" rows="10" style="margin-left: 30%; margin-top: 35px; background-color: rgb(184, 184, 184);">Type here...</textarea><br>

            <input class="a" type="submit"  name="send" value="SEND "  style="margin-top: 30px; margin-left: 40%; border: solid 2px black; background-color: bisque; width: 300px; height: 30px;">
           
           <?php
            }
           include_once('../controllers/contactController.php');
           ?>
        </form>
        </div>

        <div id="d0402">
            <div id="d040201">
            <p style="color: snow; padding-left: 25px; padding-top: 25px;" ><b><em>Contact Us by Email :</em></b></p>
            <ol>
                <li style="color: snow; padding-left: 25px; padding-top: 25px;">
                    Egzon Pajaziti: ep52768@ubt-uni.net
                </li>

                <li style="color: snow; padding-left: 25px; padding-top: 25px;">
                    Lumbardh Gashi: lg52753@ubt-uni.net
                </li>
            </ol>

            </div>

            <div id="d040202">
                <p style="color: snow; padding-left: 25px; padding-top: 25px;" ><b><em>Contact Us by Tel. :</em></b></p>
            <ul type="square">
                <li style="color: snow; padding-left: 25px; padding-top: 25px;">
                    Egzon Pajaziti:<b> +383(0) 45-677-401</b>
                </li>
                <li style="color: snow; padding-left: 25px; padding-top: 25px;">
                    Lumbardh Gashi:<b> +383(0) 49-449-116</b>
                </li>
            </ul>

            </div>

            <div id="d040203">
                <p style="color: snow; padding-left: 25px; padding-top: 25px;" ><b><em>You can find us at these addresses :</em></b></p>
                <ul type="square">
                    <li style="color: snow; padding-left: 25px; padding-top: 25px;">
                        Prishtine : <em> Lagjia "Kalabria" , 1000 Prishtine ,Republika E Kosoves</em>
                    </li>
                    <li style="color: snow; padding-left: 25px; padding-top: 25px;">
                        Lipjan : <em> Magjistralja Prishtine - Ferizaj - Rrethi te QMI </em>
                    </li>


            </div>


        </div>

    </div>



</body>

<footer>
    <?php
    include_once('footer.php');
    ?>
</footer>
</html>