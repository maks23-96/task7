<html>

<head>
  <title>%TITLE%</title>
  <link href="css/bootstrap.css" rel="stylesheet"></link>
</head>
<body>
<div><h2>Contact Form</h2>
<form action="index.php" method="POST">

    <input type="text" class="form-control" name="fullname" placeholder="Full Name">
<br>

 <select class="form-control" name="subject">
  <option>Please,select</option>
  <option selected>Subject 1</option>
  <option>Subject 2</option>
  <option>Subject 3</option>
</select>
<br>

  <input type="text" class="form-control" name="email"  placeholder="E-mail">
<br> 

    <textarea class="form-control" name="message" rows="3" placeholder="Your message"></textarea>
<br>
 
    <input class="btn btn-default" type="submit" value="Send">
 <br>
</form>
</div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>
</body>
</html>
