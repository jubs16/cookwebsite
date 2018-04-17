
<html>
<body>

<?php

// THE BELOW LINE STATES THAT IF THE SUBMIT BUTTON
// WAS PUSHED, EXECUTE THE PHP CODE BELOW TO SEND THE 
// MAIL. IF THE BUTTON WAS NOT PRESSED, SKIP TO THE CODE
// BELOW THE "else" STATEMENT (WHICH SHOWS THE FORM INSTEAD).
if ( isset ( $_POST [ 'buttonPressed' ] )){

// REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
$to = 'contact@chezami.fr' ;
$subject = 'Please reserve table for me' ;

// NOT SUGGESTED TO CHANGE THESE VALUES
$message = 'Mr/Mrs: ' . $_POST[ "name" ] . ' Request table reservation time-> ' . $_POST[ "time" ]. '. His contact number-> ' . $_POST[ "contact" ]  . ' Email-id: '. $_POST[ "from" ] . ' Mr/Mrs: ' . $_POST[ "name" ] . ' Has following message for you: ' . $_POST [ "message" ] ;
$headers = 'Table Reservation Nom: ' . $_POST[ "name" ] . ' Time: ' . $_POST[ "time" ] . ' Email-id: '. $_POST[ "from" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;

// THE TEXT IN QUOTES BELOW IS WHAT WILL BE 
// DISPLAYED TO USERS AFTER SUBMITTING THE FORM.
echo "Your reservation has been placed";
echo "<br>";
echo "votre réservation est réservée";
echo "<br>";
echo "Merci  " . $_POST[ "name" ];
echo "<br>";

?><button onclick="location.href=''">Back to Home/Acceuil</button> <?php
}

//$val = $_POST["thenumbers"];
//echo "the Value selected is ".$val;

else{
?>
<div class="col-md-4">
<form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" />
  <div class="form-group">
    <label for="yourname">Name</label>
    <input type="text" name= "name" class="form-control" placeholder="Votre Nom">
  </div>
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" name= "from" class="form-control" placeholder="Votre adresse Email">
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="tel" name= "contact" class="form-control"  placeholder="Numero téléphone">
  </div>  
  <div class="form-group">
    <label for="message">Time/Un Horaire</label>
  <select class="form-control" name= "time">
  <option>12:00</option>
  <option>12:30</option>
  <option>13:00</option>
  <option>13:30</option>
  <option>14:00</option>
  <option>14:30</option>
  <option>18:30</option>
  <option>19:00</option>
  <option>19:30</option>
  <option>20:00</option>
  <option>20:30</option>
  <option>21:00</option>
  <option>21:30</option>
  <option>22:00</option>
  <option>22:30</option>
</select>
 </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" name= "message" rows="4" placeholder="Demandes Particuliéres"></textarea>
  </div>

  <button type="submit" name= "buttonPressed" class="btn btn-default">Réserve</button>

</form>
</div>
<?php } ?>




  <!--table>
    <tr>
      <td>Name: </td>
      <td><input name= "name" type= "text"/></td>
    </tr>
    <tr>
     <-11:45 to 14:45 again 18:30 to 22:30->
      <td>Time: </td>
      <td><input name= "time" type= "text"/></td>
    </tr> 
    <tr>

    <label for="select_1">Select list:</label>
<select class="form-control" id="select_1" name="thenumbers">
    <option value="one">One</option>
    <option value="two">Two</option>
    <option value="three">Three</option>
    <option value="four">Four</option>
</select>

      <td>Contact numero: </td>
      <td><input name= "contact" type= "text"/></td>
    </tr>       
    <tr>
      <td>Your e-mail address: </td>
      <td><input name= "from" type= "text"/></td>
    </tr>
    <tr>
      <td>Your message: </td>
      <td><textarea name= "message" cols= "20" rows= "6"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input name= "buttonPressed" type= "submit" value= "Send E-mail!" /></td>
    </tr>
 </table-->


</body>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head></html>
