<html>
<title>login</title>

<head>
    <link rel="stylesheet" href="1.css" />

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
<body align="center">
    <p id="logo">CinemaPetta</p>
    <form name="myform" action="logger.php" class="login_form_style" method="post" style="align:center;margin-top: -190px;">
        <fieldset style="width: 250px;">
            <legend>Sign in</legend>
            <input type="email" name="userid" value="" placeholder="enter username" id="text1" required /><br><br>
            <input type="password" name="pass" value="" placeholder="*******" id="text2" required />
            <br><br>
            <input type="submit" value="Login" id="b1">&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.html"><input type="button" value="Cancel" id="b2" name="cancel"></a><br><br>
            <div class="lass" style="margin-left:5px;">
                <a href="signup.html"> Sign up</a>
            </div>
            <div class="lass">
                <a href="fp.html"> Forgot password ? </a>
            </div>

        </fieldset>
    </form>
     <b>


<div class="th">
<p class="blink"> Developed by<a href="https://github.com/hemanth-07-11" target=_blank><b><font color="yellow"> HEMANTH N </font></b></a></p>
</div>
</b>
</body>

</html>
