
        <?php 
           require_once "Assets/phpHeader.php"; 
        ?>


        <main>

                <form action="Assets/formHandle.php" method='POST'>
                        <fieldset>
                                <legend>contact form</legend>
                                <p id="fname"><input type="text" name="firstName" placeholder="firstName"
                                                required="required" class="mod"></p>
                                <?php if(isset($_GET['fname'])){echo "invalid name please check the characters";}?>
                                <p id="Lname"><input type="text" name="lastName" placeholder="lastName"
                                                required="required" class="mod"></p>
                                <?php if(isset($_GET['lname'])){echo "invalid input";}?>
                                <p id="country"><input type="text" name="country" placeholder="country"
                                                required="required" class="mod"></p>
                                <?php if(isset($_GET['country'])){echo "the country name contains an invalid character";}?>
                                <p><input type="email" name="email" id="email" placeholder="email" required="required"
                                                class="mod1"></p>
                                <?php if(isset($_GET['email'])){echo "the email entered is not valid ";}?>

                                <p><label for="gender">gender</label><input type="radio" required="required"
                                                name="gender" id="gender" value="m">m
                                        <input type="radio" name="gender" id="gender" value="f">f

                                        <label for="subject">subject</label><select name="subject" id="subject">
                                                <option value="service">After sales service</option>
                                                <option value="enquiry">product enquiry</option>
                                                <option value="other" selected="selected">other</option>
                                        </select>

                                </p>
                                <textarea name="message" id="msg" cols="30" rows="10" placeholder="message"
                                        required="required"></textarea>
                                <input id="website" name="website" type="text" value="" style="display: none;">
                                <p><input type="submit" value="submit" name="submit" class='submit' id="submit"></p>
                                <?php 
                                   if (empty($_GET['fname']) && empty($_GET['lname']) && empty($_GET['country']) && empty($_GET['email'])) {
                                           echo " message successfully sent";
                                   }
                                   else {
                                        echo " message was not sent please correct the mistakes and resubmit";
                                   }
                                ?>

                        </fieldset>
                </form>

        </main>

        <?php 
           require_once "Assets/phpFooter.php";
        ?>

  
