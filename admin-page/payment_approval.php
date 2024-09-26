
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $method=$_POST['method'];
    $payment_id=$_POST['payment_id'];
    $amount=$_POST['amount'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div class="container">
        <h2>Upload Product</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title"> Name:</label>
                <input type="text" name="title" id="name" required>
            </div>
            <div class="form-group">
                <label for="price">Email:</label>
                <input type="text"  id="price" name="email"  required>
            </div>
            <div class="form-group">
                <label for="dprice">Method</label>
                <input type="text"  id="dprice" name="method" required  >
            </div>
            <div class="form-group">
                <label for="dprice">Payment id</label>
                <input type="text"  id="dprice" name="payment_id" required  >
            </div>
            <div class="form-group">
                <label for="dprice">amount</label>
                <input type="text"  id="dprice" name="amount" required  >
            </div>
           
   
            <input type="submit"   value="Upload Product" name="submit">
        </form>
    </div>
</body>
</html>