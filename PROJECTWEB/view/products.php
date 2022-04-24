<?php 

include_once('header.php');


if( $_SESSION['is_logged_in'] == true){


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
    <link rel="stylesheet" href="products.css">
<div id="BigOne">
      <div id="BigOne01">
        <div id="BigOne0101">
        
            <img name="mySlide" id="slideshow" style="width: 100%; height: 280px;" />
            </header>
           
            <script>
            var i = 0;
            var imgArray = [
            "../images/P1.jpg",
            "../images/P2.jpg",
            "../images/P3.jpg"
            ];

            function ndrroImg(){

                document.getElementById('slideshow').src = imgArray[i];
                if (i < imgArray.length - 1) {
                    i++;
                }else{
                    i = 0;
                }
                //Ne rast se na duhet me ndrru sipas kohes psh per cdo 10 sekonda ndrro foton 
                // setTimeout("ndrroImg()", 10000);
            }
            document.body.addEventListener('load', ndrroImg());
            </script>

        </div>
        <div id="BigOne0102">
          <p style="margin-top: 20px;">OWNER: <b>Ramiz Hoxha</b></p>
          <p style="margin-top: 20px;">ADRESS:<b>Lagjia Kalabria,</p><p>Prishtine, Kosove</b></a>
            <p style="margin-top: 20px;">CONTAINS: <b>3BR, 1K, 2BTH, 1LR</b></p>
            <p style="margin-top: 20px;">SQUARE AREA: <b>280 SQUARE METERS </b></p>
            <p style="margin-top: 20px;">PRICE: <b>339000 $</b></p>
          </div>
          <div id="BigOne0103"> 
            <button id="nextBtn" onclick="ndrroImg()" style=" width: 150px; height: 40px; margin-top: 10px;" >Next Photo</button>

            <img src="https://us.123rf.com/450wm/roxanabalint/roxanabalint1712/roxanabalint171200111/91315171-for-sale-grunge-rubber-stamp-on-white-background-vector-illustration.jpg?ver=6" alt="" style="width: 80px; float: right; margin-right: 100px;">
          </div>
        </div>
        <div id="BigOne02">
          <div id="BigOne0201">
            <img name="mySlide1" id="slideshow1" style="width: 100%; height: 280px;" />
            
           
            <script>
            var i = 0;
            var imgArray1 = [
            "../images/Photo1.jpg",
            "../images/Photo2.jpg",
            "../images/Photo3.jpg"
            ];

            function ndrroImg1(){

                document.getElementById('slideshow1').src = imgArray1[i];
                if (i < imgArray1.length - 1) {
                    i++;
                }else{
                    i = 0;
                }
                //Ne rast se na duhet me ndrru sipas kohes psh per cdo 10 sekonda ndrro foton 
                // setTimeout("ndrroImg1()", 10000);
            }
            document.body.addEventListener('load', ndrroImg1());
            </script>

          </div>
          <div id="BigOne0202">
            <p style="margin-top: 20px;">OWNER: <b>Elton Boshnjaku</b></p>
            <p style="margin-top: 20px;">ADRESS:<b>Lagjia Dardania,</p><p>Prishtine, Kosove</b></a>
              <p style="margin-top: 20px;">CONTAINS: <b>2BR, 2K, 2BTH, 1LR</b></p>
              <p style="margin-top: 20px;">SQUARE AREA: <b>260 SQUARE METERS </b></p>

              <p style="margin-top: 20px;">PRICE: <b>315000 $</b></p>
            </div>
            <div id="BigOne0203">
            <button id="nextBtn" onclick="ndrroImg1()" style=" width: 150px; height: 40px; margin-top: 10px;" >Next Photo</button>

              <img src="https://us.123rf.com/450wm/roxanabalint/roxanabalint1712/roxanabalint171200111/91315171-for-sale-grunge-rubber-stamp-on-white-background-vector-illustration.jpg?ver=6" alt="" style="width: 80px; float: right; margin-right: 100px;">
            </div>
          </div>
          <div id="BigOne03">
            <div id="BigOne0301">
            <img name="mySlide2" id="slideshow2" style="width: 100%; height: 280px;" />
            
           
            <script>
            var i = 0;
            var imgArray2 = [
            "../images/P13.jpg",
            "../images/P23.jpg",
            "../images/P33.jpg"
            ];

            function ndrroImg2(){

                document.getElementById('slideshow2').src = imgArray2[i];
                if (i < imgArray2.length - 1) {
                    i++;
                }else{
                    i = 0;
                }
                //Ne rast se na duhet me ndrru sipas kohes psh per cdo 10 sekonda ndrro foton 
                // setTimeout("ndrroImg2()", 10000);
            }
            document.body.addEventListener('load', ndrroImg2());
            </script>
            </div>
            <div id="BigOne0302">
              <p style="margin-top: 20px;">OWNER: <b>Lumbardh Gashi</b></p>

              <p style="margin-top: 20px;">ADRESS:<b>Lagjia Uitikon</p><p>Zurich, Switzerland</b></a>
                <p style="margin-top: 20px;">CONTAINS: <b>8BR, 3K, 4BTH, 3LR</b></p>
                <p style="margin-top: 20px;">SQUARE AREA: <b>900 SQUARE METERS </b></p>
                <p style="margin-top: 20px;">PRICE: <b>5990000 $</b></p>
              </div>
              <div id="BigOne0303">
              <button id="nextBtn" onclick="ndrroImg2()" style=" width: 150px; height: 40px; margin-top: 10px;" >Next Photo</button>

                <img src="https://us.123rf.com/450wm/roxanabalint/roxanabalint1712/roxanabalint171200111/91315171-for-sale-grunge-rubber-stamp-on-white-background-vector-illustration.jpg?ver=6" alt="" style="width: 80px; float: right; margin-right: 100px;">
              </div>
            </div>
            <div id="BigOne04" >
              <div id="BigOne0401">
              <img name="mySlide3" id="slideshow3" style="width: 100%; height: 280px;" />
            
           
            <script>
            var i = 0;
            var imgArray3 = [
            "../images/P14.jpg",
            "../images/P24.jpg",
            "../images/P34.jpg"
            ];

            function ndrroImg3(){

                document.getElementById('slideshow3').src = imgArray3[i];
                if (i < imgArray3.length - 1) {
                    i++;
                }else{
                    i = 0;
                }
                //Ne rast se na duhet me ndrru sipas kohes psh per cdo 10 sekonda ndrro foton 
                // setTimeout("ndrroImg3()", 10000);
            }
            document.body.addEventListener('load', ndrroImg3());
            </script>
              </div>
              <div id="BigOne0402">
                <p style="margin-top: 20px;">OWNER: <b>Egzon Pajaziti</b></p>
                <p style="margin-top: 20px;">ADRESS:<b>Lagjia Passau</p><p>Munich, Germany</b></a>
                  <p style="margin-top: 20px;">CONTAINS: <b>4BR, 2K, 3BTH, 2LR</b></p>
                  <p style="margin-top: 20px;">SQUARE AREA: <b>650 SQUARE METERS </b></p>
                  <p style="margin-top: 20px;">PRICE: <b>3587000 $</b></p>
                </div>
                <div id="BigOne0403">
                <button id="nextBtn" onclick="ndrroImg3()" style=" width: 150px; height: 40px; margin-top: 10px;" >Next Photo</button>

                  <img src="https://us.123rf.com/450wm/roxanabalint/roxanabalint1712/roxanabalint171200111/91315171-for-sale-grunge-rubber-stamp-on-white-background-vector-illustration.jpg?ver=6" alt="" style="width: 80px; float: right; margin-right: 100px;">
                </div>
              </div>
            </div>
    
</body>
<?php
}else{
      
     header('location:login.php');
    
      
    }
    
?>

<footer>
    <?php
    

    include_once('footer.php');
    session_destroy();
    ?>
</footer>
</html>