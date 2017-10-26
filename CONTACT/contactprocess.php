
            <!-- php var_dump($_POST);  ?>-->
            
            <!-- STPE1: connect to a database-->
            <?php $connection = mysqli_connect('localhost','root','','contactform');
            
            //STEP2:test our connection
            //var_dump($connection); 
            
            //STEP3: get all our records
                
             $fname =  $_POST['fname'];
             $email  =  $_POST['email'];
             $subject  =  $_POST['subject'];
             $message  =  $_POST['message'];
         
           
            
            //STEP4: insert records into database
             $sql = "INSERT INTO users (fname,email,subject,message)
            VALUES('$fname','$email','$subject','$message')";
            
           
            //STEP5 check for database connection
            if( !mysqli_query($connection,$sql)){
           
                echo "Error:".sql. "<br>" . mysqli_error($connection);
            }else{
              echo "Your form has been successfully submitted";
                        
            }
    ?>
          
       