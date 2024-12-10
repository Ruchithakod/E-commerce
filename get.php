<html>
    <body>
        <?php
          if (isset($_GET["name"]) && isset($_GET["email"]))
          {
           $name= $_GET["name"];
           $email= $_GET["email"];
           if (!empty($name) && !empty($email))
           {
           echo "Welcome". $name . "<br>";
           echo "Your email address is: " . $email;
           }
          else 
          {
           echo "Please provide your name and email.";
          }
          }
        ?>
    </body>
</html>
