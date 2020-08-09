<html>
<title>Book</title>
<?php
    session_start();
    
$_SESSION['movsel']=$_GET['movie'];
    if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
    function getMovieName(){
        if($_SESSION['movsel']){ echo $_SESSION['movsel'];}
        else{
            echo "Unknown";
        }
    }
    function getTrailer()
    {   $tr= $_SESSION['movsel'];
        
        include 'connection.php';
    
        $sql = "SELECT trailer_link FROM moviedb WHERE      title='".$tr."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) { 
            echo "https://www.youtube.com/embed/j8SOfg2pxXk";
            }
        else{
            while($row = $result->fetch_assoc()) {
               $link=$row["trailer_link"];
                             }
                             echo $link;
            }
    
    }
    function getName(){
        $id=$_SESSION['user_id'];
        include 'connection.php';
    
        $sql = "SELECT name FROM login WHERE username='".$id."'";
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
    <script>
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        var queries = queryString.split("=");
        queryString = queries[1];

    </script>

    <base target="_self" />
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="3.css" />
    <link rel="stylesheet" href="7.css" />
</head>
<style>
.th {
  position: absolute;
transition: transform .2s; 
  bottom: 10px;
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

<body style="background-image:url(4.jpg)">

    <div class="topnav" style="margin-bottom: 10px;">

        <a class="active" href="home.php">Home</a>
        <div class="dropdown">
            <a class="dropbtn" href="">
                <?php getName(); ?>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="fp22.php?idx=<?php echo $idh; ?>">change password</a>
                <a href="profile.php">edit profile</a>
            </div>
        </div>
        <a href="">Bookings</a>
        <div><a href="logout.php">Logout</a></div>
    </div>
    <div>
        <p class="movie_title">
            <?php getMovieName(); ?>
        </p>
    </div>
    <div>
        <iframe id="video" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="600px" height="300px" src="<?php getTrailer(); ?>">
        </iframe></div>
    <div>
        <p style="background-color:transparent;text-align:center;font-size:25px;color:#d3e6d8;width:1500px;font-family:Times new roman;">SHOW TIMINGS</p>


        <div class="timings">

            <label class="hall">Sathyam Cinemas</label>
            <a href="booking.php?time=10:30%20am&movie=<?php getMovieName(); ?>&theatre=Sathyam Cinemas"><button class="btnq"><span>10:30 am </span></button></a>
            <a href="booking.php?time=01:15%20pm&movie=<?php getMovieName(); ?>&theatre=Sathyam Cinemas"><button class="btn"><span>01:15 pm </span></button></a>
            <a href="booking.php?time=04:30%20pm&movie=<?php getMovieName(); ?>&theatre=Sathyam Cinemas"><button class="btn"><span>04:30 pm </span></button></a>
            <a href="booking.php?time=07:00%20pm&movie=<?php getMovieName(); ?>&theatre=Sathyam Cinemas"><button class="btn"><span>07:00 pm </span></button></a>
        </div>
        <div class="timings">
            <label class="hall">Palazzo Cinemas, Vadapalani</label>
            <a href="booking.php?time=10:30%20am&movie=<?php getMovieName(); ?>&theatre=Palazzo Cinemas"><button class="btnq"><span>10:30 am </span></button></a>
            <a href="booking.php?time=01:15%20pm&movie=<?php getMovieName(); ?>&theatre=Palazzo Cinemas"><button class="btn"><span>01:15 pm </span></button></a>
            
        </div>
        <div class="timings">
            <label class="hall">PVR Skywalk</label>
            <a href="booking.php?time=04:30%20pm&movie=<?php getMovieName(); ?>&theatre=PVR Skywalk"><button class="btnq"><span>04:30 pm </span></button></a>
            <a href="booking.php?time=07:00%20pm&movie=<?php getMovieName(); ?>&theatre=PVR Skywalk"><button class="btn"><span>07:00 pm </span></button></a>
        </div>
        <div class="timings">
            <label class="hall">Inox Chennai</label>

            <a href="booking.php?time=01:15%20pm&movie=<?php getMovieName(); ?>&theatre=Inox Chennai"><button class="btnq"><span>01:15 pm </span></button></a>
           


        </div>
    </div>

    </div>.
  <b>


<div class="th">
<p class="blink"> Developed by<a href="https://github.com/hemanth-07-11" target=_blank><b><font color="yellow"> HEMANTH N </font></b></a></p>
</div>
</b>
</body>

</html>
