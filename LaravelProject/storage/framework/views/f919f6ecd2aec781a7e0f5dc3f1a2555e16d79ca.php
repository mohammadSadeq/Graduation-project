<?php
require __DIR__.'connection.blade.php';
require __DIR__.'library.blade.php';
?>
<?php
    if(chkLogin()){
        header("Location: home.blade.php");
    }
?>
<?php

    if(isset($_POST['login'])){
//        print_r($_POST);
      
        
        $user = $_POST['username'];
        $upass = $_POST['password'];
        $criteria = array("User"=> $user);
        $query = $collection->findOne($criteria);
        //var_dump($query);
        if(empty($query)){
            echo "User name is not registered.";   }
        else{
            
                $pass = $query["Password"];
                if(password_verify($upass,$pass)){
                    $var = setsession($user);
//                    echo"<pre>";   
//                    print_r($_SESSION);
                  
                    
                    if($var){
                        
                    header("Location: home.blade.php");
                    }
                    else{
                        echo "Some error";
                    }
                }
                else{
                    echo "You have entered a wrong password";   }
                
            
        
        }
    }
    

?>