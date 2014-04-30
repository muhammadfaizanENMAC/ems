<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="admin-bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
</head>

<body>
<h1>Registeration</h1>
    <form class="form-horizontal" style="margin-top:50px" action="eventregisteration.php" method="post" enctype="multipart/form-data">
    <div class="control-group">
    <label class="control-label" for="inputEmail">username</label>
    <div class="controls">
    <input type="text" id="inputEmail" name="username" placeholder="username">
    </div>
    </div>
    
     <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
    <input type="text" id="inputEmail" name="email" placeholder="email">
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputEmail">contact number</label>
    <div class="controls">
    <input type="text" id="inputEmail" name="contactnumber" placeholder="contactnumber">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Event type</label>
   
    <div class="controls">
     
    
    <select name="eventtype">
    <option value="">Select</option>
    <?php 
	
	require('db.php');
	$sql = 'SELECT * FROM eventcategories';
	$retval = mysql_query($sql);
	
	if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{?>
	
<option id="inputEmail" name="eventtype" placeholder="event type" value="<?php echo $row['categories'] ?>"><?php echo $row['categories'] ?></option>
	
<?php }?>
    
    
    
    
    
    </select>
    
    
     </div>
    </div>
    
 
    
    
 <div class="control-group">
    <label class="control-label" for="inputEmail">Date</label>
    <div class="controls">
    <input type="text" id="datepicker" name="date" placeholder="Date">
    </div>
    </div>
   
     <div class="control-group">
    <label class="control-label" for="inputEmail">Captcha</label>
    <div class="controls">
   <img alt="Captcha" id="captcha" src="captcha/captcha.php"><br/>
 <input type="text" class="captchatext" id="captchatext" name="captchavalue" placeholder="enter captcha" /><br>
   <a onclick="document.getElementById('captcha').src = 'captcha/captcha.php?' + Math.random(); return false" href="#" >Reload Captcha</a>
  
    </div>
    </div>
    
    
    
    
    
    
    <div class="control-group">
    <div class="controls">
    <label class="checkbox">
    <input type="checkbox"> Remember me
    </label>
    <button type="submit" class="btn" name="submit">Sign in</button>
    </div>
    </div>
    </form>

</body>
</html>