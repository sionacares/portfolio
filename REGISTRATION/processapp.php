
            <!-- php var_dump($_POST);  ?>-->
            
            <!-- STPE1: connect to a database-->
            <?php $connection = mysqli_connect('localhost','root','','application');
            
            //STEP2:test our connection
            //var_dump($connection); 
    
            //STEP3: get all our records
                
             $surname          =  $_POST['surname'];
             $other_names      =  $_POST['other_names'];
             $email            =  $_POST['email'];
             $telephone        =  $_POST['telephone'];

             $date              =  $_POST['date'];
             $month              =  $_POST['month'];
             $year              =  $_POST['year'];
             $state            =  $_POST['state'];
             $msex               =  $_POST['msex'];
             $fsex              =  $_POST['fsex'];
             $address          =  $_POST['address'];

             $qualification    =  $_POST['qualification'];
             $course            =  $_POST['course'];
             $advert           =  $_POST['advert'];
             $kin_name         =  $_POST['kin_name'];
             $kin_email        =  $_POST['kin_email'];
 

             $kin_number       =  $_POST['kin_number'];
             $kin_office       =  $_POST['kin_office'];
     
            
         
            
            //STEP4: insert records into database
             $sql = "INSERT INTO users (surname,other_names,email,telephone,date,month,year,state,msex,fsex,address,qualification,advert,kin_name,kin_email,kin_number,kin_office)
            VALUES('$surname','$other_names','$email','$telephone','$date','$month','$year','$state','$msex','$fsex','$address','$qualification','$course','$advert','$kin_name','$kin_email','$kin_number','$kin_office')";
            
            
           
            //STEP5 check for database connection
            if( !mysqli_query($connection,$sql)){
                echo "Error:".sql. "<br>" . mysqli_error($connection);
            }else{
                echo "YOUR APPLICATION HAS BEEN SUCCESSFULLY SUBMITTED";
            } 
            
 ?> 
    
            
            
         