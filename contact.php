<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
if(isset($_POST['submit']))
{//data submitted
  /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
*/


    $to = 'msherm06@seattlecentral.edu';
    $message ='test';
    $replyTo = $_POST['Email'];
    $subject = 'Test from contact form';


    safeEmail($to, $subject, $reply, $replyTo);


}else{//show form
    echo '
    <form method="post" action="' . THIS_PAGE . '">
First Name: <input type="text" name="firstName" required="required" /></br>
Last Name: <input type="text" name="lastName" required="required" /></br>
Email: <input type="email" name="Email" required="required" /></br>
<p style="margin-bottom:0px">What are you contacting us in regards to?<strong style="color:red">(select all that apply)</strong></p>
<label><input type="checkbox" id="question" name="box-option[]" value="question"/>Question</label></br>
<label><input type="checkbox" id="comment" name="box-option[]" value="comment"/>Comment</label></br>
<label><input type="checkbox" id="concern" name="box-option[]" value="comment"/>Concern</label></br>
<p style="margin-bottom:0px">Please elaborate:</p>
<textarea rows="4" cols="50"></textarea>
<p style="margin-bottom:0px;">Would you like to subscribe to our email list?</p>
<label><input type="radio" id="email-subscription-yes" name="email-subscription" value="yes"/>Yes</label></br>
<label><input type="radio" id="email-subscription-no" name="email-subscription" value="no"/>No</label></br>
    <input type="submit" value="Send" name="submit" />
    </form>
    ';

}



?>


<?php include 'includes/footer.php';?>
