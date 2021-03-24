<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/style.css">
        <title>hackers-poulette</title>
</head>

<body>
        <?php 
           require_once "phpHeader.php"; 
        ?>
        <?php 
    $regex = "/^[a-zA-Z\s]+$/";
    $regex2 = "/^[a-zA-Z\s\d\.]+$/";
    
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    if (preg_match($regex,$_POST['firstName'])) {
        $firstName =trim(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING));
    }
    else{
        header("Location: ../index.php? fname= invalid");
        exit();
    }
    if (preg_match($regex,$_POST['lastName'])) {
        $lastName = trim(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING));
    }
    else{
        header("Location: ../index.php?lname= invalid");
        exit();
    }
   
    if (preg_match($regex,$_POST['country'])) {
        $country = trim(filter_var($_POST['country'], FILTER_SANITIZE_STRING));
    }
    else{
        header("Location: ../index.php?country= invalid");
        exit();
    }
    
    
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));  
    }
    else{
        header("Location: ../index.php?email= invalid");
        exit();
    }
    
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
    $message = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));
    $message = escapeshellarg($message);
    
    if(isset($firstName) &&  isset($lastName) && isset($country) && isset($message) && isset($email)){
          
                $headers = array(
                  'From' => 'abu.oblie@gmail.com',
                  'Reply-To' => 'abu.oblie@gmail.com',
                );
                $msg = "dear customer\r\n"."we have receive your message and we will get back to Asap";
              
              mail($email, $subject, $msg, $headers); 
    }
    
}
    
?>
        <?php 
           require_once "phpFooter.php";
        ?>

        <script src="script.js"></script>
</body>

</html>