

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google recpatcha with php coderpk.com</title>
  </head>

  <body>
 <div style="width:80%; margin:0 auto;">
 <h1>Google recpatcha with php coderpk.com</h1>
    <form  action="submit" method="post">
 
      <label for="name">Name:</label>
      <input name="name" required><br /><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 <br />
   <div class="g-recaptcha" data-sitekey="6Le39yYTAAAAALau2dzlGpUErMUCd2rl--uMXQN9"></div>
 <br />
      <input type="submit" value="Submit" />
 
    </form>
	</div>
 
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>