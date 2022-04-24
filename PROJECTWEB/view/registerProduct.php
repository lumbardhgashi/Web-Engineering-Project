
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="registerProduct.css">
    <form method="post">
        <div class="container">
          <h1>Add product</h1>
          <p>Please fill in this form to add an product.</p>
          <hr>
      
          <label for="photo1"><b>Photo 1 About Product</b></label>
          <input type="file" placeholder="Photo" name="photo1" id="photo1" multiple >
          <label for="photo2"><b>Photo 2 About Product</b></label>
          <input type="file" placeholder="Photo" name="photo2" id="photo2" multiple >
          <label for="photo2"><b>Photo 3 About Product</b></label>
          <input type="file" placeholder="Photo" name="photo3" id="photo3" multiple >
      
          <label for="sip"><b>Sip</b></label>
          <input type="number" min="30" max="2000" placeholder="sip" name="sip" id="sip" required>
      
          <label for="rooms"><b>Rooms</b></label>
          <input type="number" min="0" max="30" placeholder="Rooms" name="room" id="room" required>

          <label for="bathroom"><b>Bathroom</b></label>
          <input type="number" min="0" max="30" placeholder="bathroom" name="bathroom" id="bathroom" required>
      
          <label for="salon"><b>Salon</b></label>
          <input type="number" min="0" max="30"  placeholder="Salon" name="salon" id="salon" required>
          
          <label for="price"><b>Price</b></label>
          <input type="number"   placeholder="Price" name="price" id="price" required>

          <hr>

      
          
          <button type="submit" name="registerbtn" class="registerbtn">Register</button>
        </div>

        <?php
        include_once('../controllers/registerProductController.php');
        ?>
      </form>
</body>
</html>