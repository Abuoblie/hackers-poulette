<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/style.css">
        <link rel="stylesheet" href="../Assets/script.js">
        <title></title>
</head>

<body>
        <?php 
           require_once "phpHeader.php"; 
        ?>


        <main>
                <form action="Assets/formHandle.php" method='POST'>
                        <fieldset>
                                <legend>contact form</legend>
                                <p><input type="text" name="firstName" placeholder="firstName" required="required"
                                                class="mod"></p>
                                <?php if(isset($_GET['name'])){echo "invalid name";}?>
                                <p><input type="text" name="lastName" placeholder="lastName" required="required"
                                                class="mod"></p>
                                <?php if(isset($_GET['lname'])){echo "invalid last name";}?>
                                <p><input type="text" name="country" placeholder="country" required="required"
                                                class="mod"></p>
                                <?php if(isset($_GET['country'])){echo "invalid country name";}?>
                                <p><input type="email" name="email" id="email" placeholder="email" required="required"
                                                class="mod"></p>
                                <?php if(isset($_GET['email'])){echo "invalid email";}?>

                                <p><label for="gender">gender</label><input type="radio" required="required"
                                                name="gender" id="gender" value="m">m
                                        <input type="radio" name="gender" id="gender" value="f">f

                                        <label for="subject">subject</label><select name="subject" id="subject">
                                                <option value="service">After sales service</option>
                                                <option value="enquiry">product enquiry</option>
                                                <option value="other" selected="selected">other</option>
                                        </select>

                                </p>
                                <textarea name="message" id="" cols="30" rows="10" placeholder="message"
                                        required="required"></textarea>
                                <?php if(isset($_GET['name'])){echo "invalid name";}?>
                                <p><input type="submit" value="submit" name="submit" class='submit'></p>

                        </fieldset>
                </form>

        </main>

        <?php 
           require_once "phpFooter.php";
        ?>


</body>

</html>