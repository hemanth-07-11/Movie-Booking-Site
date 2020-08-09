<html>

<title>bookings</title>
<?php
    session_start();
    if (isset( $_SESSION['user_id'])) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
    $loc="";
   function getPosterLoc($name){
        include 'connection.php';
        $sql = "SELECT posterLoc FROM moviedb WHERE      title='".$name."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) { 
            $GLOBALS['loc']="movieIMG/unavailable.jpg";
            }
        else{
            while($row = $result->fetch_assoc()) {
                if($row["posterLoc"]==""){
                    $GLOBALS['loc']="";
                }
                else{
                  $GLOBALS['loc']=$row["posterLoc"];  
                }
               
                             }
            }
    
   }
    function getName(){
        $id=$_SESSION['user_id'];
        include 'connection.php';
    
        $sql = "SELECT name FROM login WHERE      username='".$id."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) { 
            echo $id;
            }
        else{
            while($row = $result->fetch_assoc()) {
               $name=$row["name"];
                             }
            $_SESSION['idname']=$name;
                             echo $name;
            }
    
    }
    ?>

<head>
    <base target="_self" />
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="3.css" />
    <link rel="stylesheet" href="6.css" />
    <link rel="stylesheet" href="7.css" />
    <script>
        function cancellor() {
            if (confirm("Are you sure?")) {
                var name = event.target.id;
                window.location.replace('cancelTicket.php?ticketid='.concat(name));
            }
        }

    </script>
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

<body style="background-image:url(11.jpg)">

    <div class="topnav" style="margin-bottom: 10px;">

        <a class="active" href="home.php">Home</a>
        <div class="dropdown">
            <a class="dropbtn" href="">
                <?php getName(); ?>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="fp22.php?idx=<?php echo $idh; ?>">Change password</a>
                <a href="profile.php">Edit profile</a>
            </div>
        </div>
        <a href="">Bookings</a>
        <div><a href="logout.php">Logout</a></div>

    </div>

    <p style="background-color:transparent;text-align:center;font-size:40px;color:#f5e4e6;width:1500px;font-family:TIMES NEW ROMAN;margin-top:5px;margin-bottom:10px;">Your tickets</p>


    <?php
        include 'connection.php';
    $sql = "SELECT * FROM bookings WHERE      userid='".$_SESSION['user_id']."' and cancel_status=1";
    $result = $conn->query($sql);
    $numtks = $result->num_rows;
    if($numtks==0){
        echo '<div id="no_bk">No bookings yet !!</div>';
    }
    else{
        while($row=$result->fetch_assoc())
        {
            getPosterLoc($row["movieName"]);
            $out = strlen(ucfirst($row["movieName"])) > 19 ? substr(ucfirst($row["movieName"]),0,19)."..." : ucfirst($row["movieName"]);
        echo ' 
    <div class="frame">
        <div class="card">
            <div style="background-image: url('.$loc.')" class="image">
    <div class="overlay">
        <div class="btn2" ><a href="https://www.imdb.com/" class="bk_inf">
                About
            </a></div>
    </div>
    </div>
    <button class="cancelbtn" id="'.$row["ticketID"].'" onclick="cancellor();">Cancel Ticket</button><br>
    <span id="ticketid">Ticket id : '.$row["ticketID"].'
    </div>
    <div class="tk_details"><span class="movname">Movie : '.$out.'</span><br><br>Theatre : '.ucfirst($row["hall"]).'<br><br>Date : '.$row["dob"].'<br><br>Show Time : '.$row["showTime"].'<br><br>seats : '.$row["numSeats"].'<br><br>Amount : ₹'.$row["amount"].'</div>
    </div>';

    }
        
    }
    ?>

<b>


<div class="th">
<p class="blink"> Developed by<a href="https://github.com/hemanth-07-11" target=_blank><b><font color="yellow"> HEMANTH N </font></b></a></p>
</div>
</b>
</body>

</html>
