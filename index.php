
<?php

//require_once('config.php');
/*
if ( ! empty($_POST)) {
    //connect and escape
    $mysql = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
    $data = array_map( array( $mysql, "real_escape_string"), $_POST );
    echo "1working"
    //convert to variables
    extract( $$data );
    echo "2working";
    //submit to database
    $query = "INSERT INTO user (name, email) VALUES ('$name','$email')";
    $insert = $mysql->query( $query );
    
    echo "3working";
}

*/
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit to Database</title>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">    

<link rel = "stylesheet" href = "style.css">



</head>
<body>
    <?php if ( isset ( $insert )) : ?>
        <div class = "message">
           <?php if ( $insert == true) : ?>
               <p class="success">Data was successfully inserted.</p>
            <?php else : ?>
                <p class-"error">There was an error with the submission.</p>
            <?php endif; ?>
        </div>

    <?php endif; ?>
    
      <div class = "container">
          
          <div class = "row">
              
              <div class = "col-md-6 col md-offset-3 emailform">
   
   
       
       
   <h1>My email form</h1> 
   <?php
    echo $result;
   ?>
   
   <p class="lead">Please get in touch.  I'll get back to you as soon as I can!</p>
   
       <form action = "" method = "post">
           
           <div class = "form-group">
               
               <label for="name">Your Name</label>
               <input type="text" name="name" class="form-control" placeholder = "Enter your name" reauired/>
           </div>
           
        
        <div class = "form-group">
               
               <label for="email">Your Email</label>
               <input type="email" name="email" class="form-control" placeholder = "Enter your email" required />
           </div>
           
           
           <input type ="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
                
       </form>
   
               </div>
               
            </div>
            
        </div>
   
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        </div>

</body>

</html>