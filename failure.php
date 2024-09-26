<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Failed</title>
    <link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* White background */
            color: #333; /* Dark text color */
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #000; /* Black heading */
        }
        p {
            font-size: 18px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff0000; /* Red button color */
            color: #fff; /* White text color */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #cc0000; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <h1>Oops! Something went wrong.</h1>
    <p>We apologize for the inconvenience. Please try again later or contact us directly.</p>
    <a href="home" class="btn">Go Back to Home</a>
    <!-- Replace "index.html" with the actual URL of your home page -->
      <script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>
</body>
</html>
