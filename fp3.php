<html>

<head>
    <title>AnsCHECK</title>
    <?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    echo $idh;
} else {
    header("Location:login.php");
}
    
    function error(){
        echo"<script type='text/javascript'> alert('Wrong Answer!!');window.location.replace('login.php');</script>";
        die();
    }
    ?>
</head>
<style>
.th {
  position: absolute;
transition: transform .2s; 
  top: 10px;
font-family:Segoe Print;
  right:125px;

 color:yellow;
 -ms-transform: rotate(278deg); /* IE 9 */
  transform: rotate(0deg);
  text-shadow: 1px 3px #8CF7F2;
  font-size: 20px;
   -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;

}
.th:hover{

transform: scale(1.1);
 -ms-transform: rotate(278deg); /* IE 9 */
  transform: rotate(0deg);
font-size: 40px
}

.blink {
      animation: blinker 1s linear infinite;
      color:yellow;
      font-size: 26px;
      font-weight: bold;
    
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #F4F967, 0 0 20px #F4F967 , 0 0 30px #F4F967, 0 0 40px #F4F967, 0 0 50px red, 0 0 60px white, 0 0 70px 0C0A0A;
  }
  
  to {
    text-shadow: 0 0 20px red, 0 0 30px #ff4da6, 0 0 40px #EEE972, 0 0 50px red, 0 0 60px #EEE972, 0 0 70px red, 0 0 80px #F4F967;
  }}



</style>

<body>

    <?php
     include 'connection.php';
     
            $answer=$_POST['answer'];
            $sql = "SELECT answer FROM login where username='$idh'";
            $result = $conn->query($sql);
            
             while($row = $result->fetch_assoc()) {
               $ans=$row["answer"];
            
             }
    
            if(strcmp($answer,$ans)==0)
            {
                 echo "<script type='text/javascript'>  window.location.replace('changePass.php');</script>";
            }
            else{
                session_unset();
                session_destroy();
                error();

            }
                $conn->close();

        ?>

  

</body>

</html>
