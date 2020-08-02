<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        .form{
            display:block;
            border: 5px solid red;
            border-radius: 20px;
            padding: 40px;
            width: fit-content;
            margin: 100px;
            margin-left: 500px;
            margin-top: 15px;
        }
        input{
            border: 1px solid black;
            padding: 8px;
            border-radius: 10px;
            margin: 10px;

        }
        #btn{
            margin-left: 100px;
        }
        #btn:hover{
            background-color: grey;
            color: black;
            font-weight: bolder;
            cursor: pointer;
        }
        label{
            margin-left: 5px;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(87, 80, 80);
            text-align: center;
            margin-left: 10px;

        }
        textarea{
            border: 1px solid black;
            padding: 8px;
            border-radius: 10px;
            margin: 10px;
 
        }
    </style>
</head>
<body>

<div class="form">
    <form action="mail.php" method="post">
<label for="email">Email: </label><br>
<input type="email" placeholder="Enter The Name" required name="email" id="email"><br>
<label for="subject">Subject: </label><br>
<input type="text" placeholder="Enter The Name" required name="subject" id="subject"><br>
<label for="mess">About Project: </label><br>
<textarea type="text" placeholder="About Project" cols="30" rows="5" required name="mess" id="mess"></textarea><br><br>
<input type="submit" value="Submit" id="btn" name="submit">
    </form>
</div>
    <?php
if(isset($_POST['submit'])){
    $to="ksudhanshu394@gmail.com";
    $subject=$_POST['subject'];
    $message=$_POST['mess'];
    $from=$_POST['email'];
$headers="From : $from";

mail($to, $subject, $message, $headers);

echo "Message Sent SuccessFully......";
}
?>
  
</body>
</html>