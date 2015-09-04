<!DOCTYPE html>
<?php 
if(isset($_POST['submit'])){
    $to = "shibum123@gmail.com"; // this is your Email address
    $from = "shibum123@yahoo.com";//$_POST['email']; // this is the sender's Email address
    $first_name = "shibu";//$_POST['first_name'];
    $last_name = "manoharan";//$_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

echo "reached ";
?>
<div class="alert alert-info fade in">
<form name="contactForm" action="" method="post" novalidate>
  <fieldset>
    <legend><span class="tab">Contact Us</span></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 col-lg-offset-2 control-label">Email</label>
      <div class="col-lg-6 col-rg-offset-2">
        <input type="email" name="email" ng-model="email" placeholder="E-mail" class="form-control" required>
		<span style="color:red" ng-show="contactForm.inputEmail.$invalid && contactForm.inputEmail.$dirty">
		<span ng-show="contactForm.inputEmail.$error.required">This field is required</span>
		<span ng-show="contactForm.inputEmail.$error.email">Not a valid email</span>
      </div>
    </div> 
	<BR><BR>
	<div class="form-group">
      <label for="inputMobile" class="col-lg-2 col-lg-offset-2 control-label">Mobile Number</label>
      <div class="col-lg-6 col-rg-offset-2">
        <input type="text" name="mobile" ng-model="mobile" placeholder="Mobile Number" class="form-control" required>
      </div>
    </div> 	
	<BR><BR>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 col-lg-offset-2 control-label"></label>
      <div class="col-lg-6 col-rg-offset-2">
        <textarea class="form-control" rows="3" id="textArea" placeholder="Please fill the project details / your enquiry"></textarea>
      </div>
    </div>
	<BR><BR>
    <div class="form-group">
      <div class="col-lg-4 col-lg-offset-5 col-rg-offset-3"><BR><BR>
        <button type="reset" class="btn btn-default">Reset</button><span class="tab">
        <button type="submit" class="btn btn-primary" value="Submit">Submit</button></span>
      </div>
    </div>
  </fieldset>
</form>
<BR><BR>
	<BR><BR>
</div>