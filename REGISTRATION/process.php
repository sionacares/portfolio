
            <!-- php var_dump($_POST);  ?>-->
            
            <!-- STPE1: connect to a database-->
            <?php $connection = mysqli_connect('localhost','root','','registration');
            
            //STEP2:test our connection
            //var_dump($connection); 
    
            //STEP3: get all our records
                
             $firstname =  $_POST['firstname'];
             $lastname  =  $_POST['lastname'];
             $username  =  $_POST['username'];
             $password  =  $_POST['password'];
            
            $pass_encrypt = hash('ripemd128',$password);
            
            //STEP4: insert records into database
             $sql = "INSERT INTO users (firstname,lastname,username,password)
            VALUES('$firstname','$lastname','$username','$pass_encrypt')";
            
           
            //STEP5 check for database connection
            if( !mysqli_query($connection,$sql)){
                echo "There was an error creating your account";
            }else{
           
                header ("location:account.php");
             }
       
       
    ?>
            
            
         