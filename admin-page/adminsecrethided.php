<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="number"], input[type="file"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


<?php
include 'connection.php';


if(isset($_POST['submit'])){
    $title=!empty($_POST['title']) ? $_POST['title'] : 'Not specifeid';
    $price=!empty($_POST['price']) ? $_POST['price'] :'not specified';
    $dprice=!empty($_POST['dprice']) ? $_POST['dprice'] : '';
    $dprecentage=!empty($_POST['dprecentage']) ? $_POST['dprecentage']:'';
    $category=!empty($_POST['category']) ? $_POST['category']:'';
    $details=!empty($_POST['details']) ? $_POST['details']:'';
    $more_details=!empty($_POST['more_details']) ? $_POST['more_details']:'';
    $description =!empty($_POST['description']) ?$_POST['description']:'';
    $link =!empty($_POST['link']) ?$_POST['link']:'';
  if($_FILES['image']['error'] === UPLOAD_ERR_OK){
    $image_real_file_name=$_FILES['image']['name'];
    $image_extension=pathinfo($image_real_file_name,PATHINFO_EXTENSION);
    $image_name='file_'.uniqid().'.'. $image_extension;
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $image_folder="image-folder/".$image_name;
    move_uploaded_file($image_tmp, $image_folder);
  }
}
try{
    $StmtselectProduct=$pdo->prepare("SELECT  title FROM  `products` WHERE title=? ");
    $StmtselectProduct->bindParam(1,$title);
    $StmtselectProduct->execute();

        $insertProduct=$pdo->prepare('INSERT INTO `products`(title,price,discount_price,discount_precentage,category,details,more_details,description,product_image,offer_link) VALUE(?,?,?,?,?,?,?,?,?,?)');
        $insertProduct->bindParam(1,$title,PDO::PARAM_STR);
        $insertProduct->bindParam(2,$price);
        $insertProduct->bindParam(3,$dprice);
        $insertProduct->bindParam(4,$dprecentage,PDO::PARAM_STR);
        $insertProduct->bindParam(5,$category,PDO::PARAM_STR);
        $insertProduct->bindParam(6,$details,PDO::PARAM_STR);
        $insertProduct->bindParam(7,$more_details,PDO::PARAM_STR);
        $insertProduct->bindParam(8,$description,PDO::PARAM_STR);
        $insertProduct->bindParam(9,$image_name,PDO::PARAM_STR);
        $insertProduct->bindParam(10,$link);
        $insertProduct->execute();




}catch(PDOException $e){
    echo "error".$e->getMessage();

}

?>
    <div class="container">
        <h2>Upload Product</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Product Name:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text"  id="price" name="price"  >
            </div>
            <div class="form-group">
                <label for="dprice">Discount price:</label>
                <input type="text"  id="dprice" name="dprice"  >
            </div>
            <div class="form-group">
                <label for="dprecentage">Disconut prcenatge:</label>
                <textarea id="dprecentage" name="dprecentage" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <textarea id="category" name="category" required></textarea>
</div>
<div class="form-group">
                <label for="details">details:</label>
                <textarea id="details" name="details" required></textarea>
            </div>
<div class="form-group">
                <label for="details">More details:</label>
                <textarea id="more_details" name="more_details" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
           
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="link">Upload offer link:</label>
                <input type="text" id="link" name="link"  required>
            </div>
            <input type="submit"  value="Upload Product" name="submit">
        </form>
    </div>


    <div class="container">
        <h2>Upload Product</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Product Name:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text"  id="price" name="price"  >
            </div>
            <div class="form-group">
                <label for="dprice">Discount price:</label>
                <input type="text"  id="dprice" name="dprice"  >
            </div>
            <div class="form-group">
                <label for="dprecentage">Disconut prcenatge:</label>
                <textarea id="dprecentage" name="dprecentage" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <textarea id="category" name="category" required></textarea>
</div>
<div class="form-group">
                <label for="details">details:</label>
                <textarea id="details" name="details" required></textarea>
            </div>
<div class="form-group">
                <label for="details">More details:</label>
                <textarea id="more_details" name="more_details" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
           
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="link">Upload offer link:</label>
                <input type="text" id="link" name="link"  required>
            </div>
            <input type="submit"  value="Upload Product" name="submit">
        </form>
    </div>
</body>



</script>
</html>
