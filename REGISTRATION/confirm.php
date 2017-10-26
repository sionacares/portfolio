
            <!-- php var_dump($_POST);  ?>-->
            
            <!-- STPE1: connect to a database-->
            <?php 
session_start();
$connection = mysqli_connect('localhost','root','','registration');
            
            //STEP2:test our connection
            //var_dump($connection); 
    
            //STEP3: get all our records
               if(isset($_POST['login']))
                   
               {
          
             $username  =  $_POST['username'];
             $password  =  $_POST['password'];
            
            $pass_encrypt = hash('ripemd128',$password);
            
           
            //SELECT * FROM `users` WHERE username ="Amy" && password ="amy1234
            // STEP5 login in authentication
          
           
            
           $get_user=mysqli_query($connection,"SELECT * FROM users WHERE username='$username' AND password = '$pass_encrypt'");
                   $num=mysqli_fetch_array($get_user);
                   if($num>0)
                   {
                   $_SESSION['id'] = $num['id'];
                   $_SESSION['name']=$num['username'];
                       header ("location:success.php");
                        
     
        }
        else{
           echo "invalid username or password";

        }
    }
    ?>
            
            
         