<?php 
    $con = mysqli_connect("localhost","root","","chats");

      $user = "select * from user";

      $run_user = mysqli_query($con, $user);

      while($row_user = mysqli_fetch_array($run_user)){

      	  $user_id = $row_user['user_id'];
      	  $user_name = $row_user['user_name'];
      	  $login = $row_user['log_in'];

      	  echo"
             <li>
                <div class='chat-left'>
                <p><a href='home.php?user_name=$user_name'>$user_name</p>";

                if($login == "online"){
                	echo"<span><i class='fa fa-circle' aria-hidden='true'></i></span>";
                }
                else{
                	echo"<span><i class='fa fa-circle-o' aria-hidden='true'></i></span>";
                }
                "

                </div>
             </li>

             
      	  ";
      }
?>