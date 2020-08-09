<html>
<title>home</title>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="7.css" />
    <?php
    session_start();
    
if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    
    die();
}
    
function setMovieSelected($mov){
    $_SESSION['movsel']=$mov;
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

<body style="background-image:url(6.jpg)">
    <div class="topnav">

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
        <a href="bookings.php">Bookings</a>
        <div><a href="logout.php" target="_self">Logout</a></div>
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,hi,kn,ml,mr,ne,ta,te',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }

        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>
    <br>
    <!--<div id="movie_lang_selection" style="height:10px;">
        <b>
            <font face="impact" color="white">Movies</font>
        </b> <input type="checkbox" name="all">
        <font face="calibri" color="white">All</font> <input type="checkbox" name="en">
        <font face="calibri" color="white">Telugu</font> <input type="checkbox" name="hi">
        <font face="calibri" color="white">Tamil</font>

    </div> -->
    <div class="card">
        <div style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSSeARRJQ-HK4DoEeT_jAZn7nb66Rx7IyjOhw&usqp=CAU)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book%20movie.php?movie=Darbar" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt9635540/" class="bk_inf">
                        About
                    </a></div>
            </div>
        </div>


        <div class="container">
            <h4><b>Darbar | Tamil</b>
                <input</h4> </div> </div> <div class="card">
                    <div style="background-image: url(data:image/jpeg;base64,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)" ; class="image">
                        <div class="overlay">
                            <div class="btn1">
                                <a href="book%20movie.php?movie=Ala%20Vaikunthapurramuloo" class="bk_inf">
                                    Book

                                </a>
                            </div>
                            <div class="btn2"><a href="https://www.imdb.com/title/tt9537292/" class="bk_inf">
                                    About
                                </a></div>
                        </div>
                    </div>

                    <div class="container">

                        <h4><b>Ala Vaikunthapurramuloo | Telugu</b></h4>
                    </div>
        </div>


        <div class="card">
            <div style="background-image: url(https://www.filmibeat.com/img/190x100x237/popcorn/movie_posters/petta-20181022112636-16938.jpg) ;" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Petta" class="bk_inf">
                            Book

                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt8959820/?ref_=nv_sr_srsg_7" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>

            <div class="container">
                <h4><b>Petta | Tamil</b></h4>
            </div>
        </div>


        <div class="card">
            <div style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgREvo0nM3fAzygl2FM3UF5gUfk3js3XCZ8g&usqp=CAU) ;" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Bigil" class="bk_inf">
                            Book

                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt9260636/" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>

            <div class="container">
                <h4><b>Bigil | Tamil</b></h4>
            </div>
        </div>


        <div class="card">
            <div style="background-image: url(https://i.pinimg.com/originals/64/cc/b9/64ccb9e60f7b488701de2156f2a37c0d.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Maharshi" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt8333978/" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Maharshi | Telugu</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSoGwvoIJA9H3PhefqXI4VVgATcQycdqNzI_A&usqp=CAU)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=2.O" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt5080556/" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>2.O | Tamil</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(https://files.prokerala.com/movies/pics/800/dj-movie-posters-70232.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=DJ" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://en.wikipedia.org/wiki/Duvvada_Jagannadham" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>DJ | Telugu</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGBkbGBgYGR0eHxseHRgaIhsYHRsfHSggGx0lHRgdITEiJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGy8mICYvLS0vLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAQQAwgMBEQACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAEBQIDBgcBAAj/xABDEAACAQIEAwYCBwUHAwUBAAABAhEAAwQSITEFQVEGEyJhcYEykRRCUqGxwdEHFSPh8FNicoKi0vEWJDNDY3OS07L/xAAaAQACAwEBAAAAAAAAAAAAAAADBAECBQAG/8QANhEAAgIBBAEDAwMDAwMEAwAAAQIAAxEEEiExQRMiUQUUYTJxoUKBkSOxwdHw8TNSouEGFWL/2gAMAwEAAhEDEQA/AMpY4Fde2LyC2UJeNpJTMWtgR8QCzHpW61tattI/iIBX25jXEdisQjKrLZDOQqDmxIJj4fDABJmNtJrhqaT0P4gzTbjv+ZC72PxAtNdyWSgR3zAjUKuYaFQZYfCOcHaKqdTTnGOf2lq6bP6j/MW8V4Ddw9i3fcIUukBCsGSVnXTQR+FA0+tS19u35mhqvpvpgutmcYyMY7/OYntyTyj/AAj9KcwDM21ggwO/3jLAYFnUsLZZQRqEmNY1gdSBU+wd4gV3nnJhVzgtwamw/iMCLe53gabxUhqj8Sx3j5kRwW4Q2WyzFIzDu9Rz103jWoLVj4k5fHE+scGutth3MgEfw9wdiNKgGsZ5EGvqbTnMX4iyVIDqqgcoAYkHXSJrto/EZRgR5zKcx3FsRJiQP01ip2+MS/GZSlzXWNjuB09KoB+JLYxxCcPaGTOxG07Db5c6lVHeIva5NgRYQtjPbzJaJMAnKsgfdpUHaO5ZMl8S2zwq6AA9hw7EwDb1MbgCOXOrJsIzkS9mc8Sk8NxGv/bOBE/+Lpvy2qu+vd4xOashcjOZ8MHcEE2GKk/2f3bVfNY+IvixuQTCTw64B3n0Ziusju/DA35bjnUj0hwSJVHsY4GYKcFeJj6M4PId0donp01oZes9YjgR1HzIIAPCyAMNwygH8KKgQjqLsWLYzieaT8K/IfpVyi/AlAz7scypiJ2AHoP0qoQfEK5P6QeYLisUEEkCPQfpS99q1DOO41VTu8xl+674t3Lr2gi2WtrczFAym4AbfhiTmDAiKVp+o024KDIPn+Jz6Vh/VIBR0HyH6Vq+mvxESzfMMwi2izi61xUyXCmQnS5HgJAOxOh8t6FchIyvf/EPRZjgwoX8OASXxOrWAQGcyvh70kzqV8WUHyigenYPA8//AFD5QnI7lnfYM3GLXsQbRzwZYk7ZZEzJBff+7OhNRtt25wJRnBbbiLce6OloW3uEBJuK8wr9E5RHSoo0qoxbGD/xGtT9RusTY7ZHH8QBR4aYEyLMsxMc8M45ew4yW2XKSGgidcscvnHWhvUrnmSLGUYEYYftZiEaLYRAcxMIdSd9ydySdI3qBpUJ5l/uSOpF+0V7MXhMzFTt9lSumukgmaIdMmMQYvckySdsL4hf4axyIOnIHfeNPah/bIP3jFVjMeepDCdqLltcim1lBJAgbkkkAzMSxqfSQmMl8DAEacPxGNxCd5bS0UYOuclYGUKGAWZA8I15mTQ3FKcEmQruecS9rvEB3U27ILsFA0OZmkgbwB1HLaqf6RJxnErazAYA5nmIPFJTJbsMAMxJyR4gQAZOoAM6eXSq/wCjyMmRWtg5OMym5d4lZQMLal7lqDkUOQokSY5EMdfOKlRS/B8QZNiPkxVjOKY7DhO9sBQuZFZ0IEuIYAzvlBE9CaIEr6B7hgSfcZHGdpMVkBXIvUqNRqCRqT9kD0ojaVB1ApqSWw3mV8O7U4jM7BlzFhc1X6wJIYeebkdKqtCHiWusKYJllrtXdV+8Xu+9lvHlOaWJJMTH1jy50Q0VNxFhbegz47l3/VmK8ZLLL5gfDsGWCB0kfjXfZ19S9eofuZzFlmdn3LGWnmauK9vCw5Ib9X+ZVM7fI7/zqwPiUJZR8yEzpXEyqLt5MlYwytcUOVhZaGMBiBos8pPPyrK+rMVrGPmPaQ7iZtO03H8Pc4WLaljibn0bvS0TNtidSNGgGARrEVgfTqmo1LVqPYSGH4PkftG7gWTMxoFe4zPPGfNnk+p6dap74dXqUT6X/qK47pItrPmVhCSdNapgmENigZzDsLhmZ0t2wWZoAUbsW5CiZCrkxZiXfiFXuy3EERrlzC3bdtFLMzBYAGpJ8XSlRfWeAwjhq287YT2d7MYi61m6+ExNywzAuyACV5lZIJ/qKq9yKDhhmSKyfHEd8W7MnubhsYPGi8cQBZNxPD3WmhE6HffXbWKpXqXLDcwx5lWprA4UzP3uAY5bqWnwl3vHDFFAEsFiTodAJEkxvTI1KYJ3DEEdOpPUn/0VxFjLYK8JMbKfwbQeZoYvqJyWl3SxeFEkvYbGGYw1/wAJgygGvPdhPqJFSbaf/cJUG34kLFvErhwiPdGFW6FdraglWdttPGxlpCjqKh0rDZzziSju4wRx+IZ2p4c2FW0y/T0kkf8AcLA0GjqykhSfsGCJoVVm8kHH9pa2knBWLeHLiLykWUxThYDd3nYDoDBgDpRGNannAgvRs/pOZZeTG22Re6xCM2iZs4LeSjdvQVZShBxjEr6bD9ZOfgR2nDbxwtwYzD4972e2toBHZQmYBhrpmy5onyil3YhvYVxDVqhxkNmQ4l2fIuuuEweM7jQLntvmBA131ievnTFNwCDewzAXIWckKZncNwHE3JfDWbrgEg5EJg81mI9qs5rU/qEtXYzLixTIns7jgSfomIkGCe7bc7DaqCxQchhGOCuCOJVjeF4uyA16zdtAmAbi5QT0E7mrrbnpoPZUPEY8E4Kz3XtYlMWrKqkWrNrNcOYmXadEVRB1+KdNqFZe6jKkf3MKoQ95/wARTxCxkuugLMFYgFkKMfVDqp8jRwSwBMrlRkCVKsA9dqKiwFr5HE8uJOkA+tVdQx5EvW2FzICwoOw9hVPSQHqF9RiODCFOgosATCSxEj1ouBENxk7aFv1qDxIHJkgSp1AkV3c4e05jbs9whLovYm7ce3Zw+UsbQzXCzMAgQctYluXzhXU3emAoGSfnqNaareS2cATYccbB4i1avXb+LRb02ZRT42XXNct6jQTtvNZ1QetyuB8/+DNFyroDkzzG4nFJaxa3LksuKwdvNbkDuTl0C/UBB1qgFZZSB85z8y3uAIzLLWMv/vjGoXud0LN2Fk5QBbXKQNhqTB9auVX7YHzmUBb1seMRX2h45es4tEVmi9hcKrMJLKCTmymfDmJ1PkKvTUrVknwTIdmDCOu1eJvra4pke4IfCqkEgqhUZojZTJ1HnQqgu5M/mTaSFbH4hfB7l1sJh+8dy5wV3NJMn+KoBPnGk+dQ4G84+ZyMSo/Yy7hfcYW5ipyWrFvF24n4VnDIf/6P31z7nC+Tj/mSpC5/eYixi7t3h3EzddnXMjLnJMEudROxiNqbsRVtr2wVLMVbMO7HLb4f3TYjFlHxdtD9GVGYFX0tsXA8L6jUbffQNQTbkqv6fMLUNnBPcu4gHtNjXwuPe/isJaug276mbSkeJrdyILqBvziqdhQy4B+PMJjnIjXi/GMQi43Jecd3w7DOkawzFwz+bGBrVa0UlcjyZLZwcQbsnxjEXLfCS964xfE4hGJOrotu4VDdQIGpqtyqGcCSuSBFPAe0982MeltsgwuEu93l+13jfxD1fTej2UorL+e4JWYg5/Ec47i+IXinDbS3n7t0tBkmQwa25YnrsNaGK0+3LecztzetjxiQu2RieG32vk3GtPxBrZZj4TbYhPkNAKGWKMQvnEKFDYJgfbrjDWMPdFm93V979svlYC4UGGXKeuTMPSaNpKdxJYcYMDqbNuNp5zEP7RGLXcPcYS74W0zmIJbXU+dO/T//AEyPzFdaBvmUYzAin8RTJJli245D1qphVyJS/ptU4lWbHEsU6VaDzGWKsTtVFMh04yJDDgipMogOcyGIuzpUgYkOxMO4LxO5hmL23KkrDaSsdCCINBurSwYaGoZ6zkRva7X4tsrC4JXNlhF0zASQI6DelvtKvP8AvGzqLPEWYTjWKsXbl5LrZrn/AJGYSH/xAiKYOnqdQmOop69yMWl2O7X427be3cvHK0hoUKWH2SwG1UTS0A8f7y9mpuIkjZvYsDEvicMpCBGDvkZUT4QUy+LNyyz5xQy1dWVVT8wqix+WI+ITg+3OMUKpvMVBAMopYqOUxrptNCbTVnnzJN1wOMcR6nbnAh7lx0xrPcQW5bJIUGcqKG0E84oH21gAGRGVdTyQYsxfbW6b1+5hpS3edWC3LYLSLarqNR9XlTKaZNg3+PgwD2WBiV8xNxvtDisTbNu9c8AMlFUKJHWBrTFenqQ7l7ir6i1uCOJ7w/tpirNpbQNt1QAJ3lsOVHIA7gdKHZpK2O75jFWpfojqSv8AarEX7V60xULcJNw20AL5jME7lZ0y1VNLWpzDta5h+C7Z4u1YCIyHIoAzoGbIPqSd1jrUNo6ycyBqGBxA8R24xpYstxVz2yqZbYGQakm2Pqlp1PkK46Ope5FeosYHiAYI4jAdziLdy2DdUxDZ5UxKXVjSTyPPnUH07/b8S5zWd003CP2gu5uDFM1vwgW2w9lC6bhgC3wiIj1NDfR4xs/kzvWP9X8Qy1x/h9rBvhbX0ohrd8TcQSWvbszTpr060M6Sx3y2P8y33KKuBmJf+vMZoGt4ckADMbIJgDqd6b+yqx2f8xb7mzPUW47v8VavY65cQ93cW0ykw50EZE2yjNoOcE8qtU9aP6SgybEcrvJiG1FOGJjuXlhNUh8eZXft86sDBsPMiqaVaDh30uq7ZYNgSt8UTVgsGSTKC1cepKryJ0PjvaS/h8X3IANoixlBtqQwYCdY1BM1jUUpYjEnkZ8zWusZGUDqfYHhrYXiGIxCPh8PhlulFF5oV5RWe2g19Z5EVVbRZT6ZyT+JLpts3jAEa8Zwt25fRRiMPft5lvWsLcIR7kTChwpBE7HnGtUqZVU5BB+fiTYrEjBGPiJ+L9pH+iYK/ftLcBxV8vZgIP4Zbu1JAOiH5xREo3WlUPgcyGswm5hGXZ3tHeu4a1eud2XuY8WoyL4LRWcq6Tyiai2gI5X4Gf7zlsDrkfMNwfFHGvhm5xRrLHIvwC2IG2nwjWhFB/8AHP8AMuCef3/4g2A7T3bj8SU91/At3GtxbXwlWIHrtzq7UAKh+ZVbCWYfED7U9qjh3QW7ai/esYZjehTlUzKhIgSSTPnRaNN6ikk8AniUutCHA7MY9sONOtriapkizas5SFWSbiy5J5kzFCpqBZM+cwjHORMxxK2LP0ThVlFVcSlg3r5XM7m7uQTsF6e1MISwa9ucdCDIAIrHmM+w+AFk37M5+74hZt5iN8rETHKY2oGrYkq3yuZekdj4Mlxbi5wVqybCoGxGIvG4WQNm/jlcuuywYgVauv1QxY/pHEhm2FQPMHbglyxxXEYiwcPZsWXCjv2y2yXRS9pRB3mZ5GN9qg2h6QhyT+JYJtckdRj204ViMSe6s4zCGzfyvastlW45BkKjqviWRofnVKLET3EHPz4lrFLcCJOwPDr+FvfSrrWLFlibTpiGys4VjmNsQYKtsTodRtBo2rtS39Gcj46g6KzWuDH/ABbBYg4kFrmGxaWM163hZW3dbwQrMMsMFmY2MCgq1ZUdrns+JbDAnoyPDe0D3G4cbrW1bEYW+wlVUG8SoQeWkgA0HYRk+AcQpI6/Ey3abHX1wdjGXktrjcPirtssFWCEQlQwHhbf76bpVXLoCcYyIFzt2tjk8GDdvEtriwyoF7yxauEKNMzA5iBymKb0LM1XPzFNSqrZMwz+KRTe0we8YlrXx51IUwZIkQRVoPb+ZebY13FB9bnqOHQ+3IM8NroZ9quLQTiBfTMgyTKSavA8RoeP4g2VsPdLWlZCEMfUYMozfEBKilzpai27HMONTYBjxGl/th3jXO+wtm9be53i27hP8NsgU5WAkggcxzNAXQhMFWIPzDHWFuCOJfc7Yt3i3Rg8OtxEVLTEs3dBQYKjmfF91V+zAyN5we5ddQX4VeopxnEWuYezYcCLT3bmcEyxuklswiBqeVGrqVbN6/GMRe61tuxu85gXCcWbN63eAzd24fKTAMcp5Ue1QyFfmBqYqd0cWO2dy33w7q2y3LxvoGJmzdP1lMeLloYnymlDo1YDnoY/eNpqTk8dy+525H8TLgcOjXo79gzTdEyU28Ibnvuap9n17jx1+IT7jHiJeO8UfF3jdcKpyqqovwoqjwoP186cprWpNoMUsZ7WyBCOHcQa3h8RYyBhfyS5YyuU9IOafUVSxVaxXz1LKzrWQfMacP7Stbt2rd7D2sSbBBssxKtbg6AMNwI50B9MGYlWIB7l69SRwRnEtu9vShzrgrKu15LzlLreNlM6jKYnrQ20Q8uT4jddpP8ATiXWO2FrGPaw13A4a2uZ3Fy7fbLb1zO3wSTOoHXpVLNM1Skqx5/ElHDnrqDcb7ZWrmIxKnD2sXhXuh0W7KkMqBSykA6GOn40WvRMFBBIaBfVANgjiFDjGGIs467atIcKvd4TCI5aWnS7ckAoi8vn0FBGmfd6S9eTCeuuN57+Iot9qmdAmMwljGZXdkdyUZc5zMBAPhnbyo/2WM7WIEoNVnscxviuP2lY8Ry2zjbtsW7NlHzDDplhrtwwDnI0Cx5dTSyVFjsP6R/MZwRk+TMvxHiPfWcNaIj6NbKBpkvJBzEfVOmwmndOi1bvOYtdW9mPGJbwvjvc2nw97D28VZZ+8C3CwKuRBKsNSCIkHz61z6MM25WxmCXUFRtYZxA+O8WfFXjeuALoFVV2VVHhUeQpimkVJtEBbYbGyYDFFgZJLROoFcWA7k4JOBLFtacqp6iwn29nxC3t66eZ6/hSZBzNgOoQftK1OxB32NdkicFDDM9NvNqQdOf60RbiIrZpqi3JwZ4tochPmak3E9SV0SAe6SOGEjMSF0kDeJ1j2q3r8fmB+z93HUbW7OEIYBMSZHhLOm/KAPbelWd854hNla4A4IjI47AEgNgm2WYI3G8+LY9d6Ggs8NIJQknbArnEcApIGELLB1kDUtIkzrA8Pz60f07j/XK4UD9M+uccwoDBcIRNsqJCkKSSdNdtTr51H29nZbzIW2vOAJbguP4BQQcKwAQLspJEyRPKSTr0qjU2+GhN6eRLV4zgWC2xhHNtGYoIUDUyRvJnnJMV3pWjktKG1B4hC3MPdtjLg3ZEcZ8hG5Etl1n4QPL0qmHU8tLY3DO3M+tYbDWsPbN7B3SQAczRN3POUEzEQQQPQc6gu7MQGlxtT3FZHGRdt4i0uBuozrmzKqeEifGddSCNgeRqoyCDujRA8ynhYtzdL8PuGxc7ohMqx4BDAzrq2vhPPWiEE49/MCWC8ASi/i8LZusv0JrbrAkRmTwmdJjxTGvLarD1CP1ZlfTRvHMnwni2FSzbD4TM1uPHC/F9bc+KfPr5VFm9mOG7lCqVKMjJlaY3BtfzHCvk7oIEkSrZgcwg9NBPU6VbFuzG7zJxWrboRjeK4EmGwjeFsx+ETvIOs6yOZ+EVT0bB/VDJapGTE/HsZZuuvc2u6VEjJAHOZ033oiKyD3HMsrK0XBZ0gmiLaRK20Vke7j8zzuADsZ6Har/cGCTQqTkHiTGDJE7ef8q5b/8A3SLdEP6J7ZwjT4Tz1PT250O24HqcunWv/wBSF/RD0T/7UEXriDIXw0HRnBOT4m8PrOmvnrvTDBezHgg2g/ie4PCNmII8AnUcyNNOoNDsdSAYtdf6f6Oz4l2IcnTMAOQFUXuU09a/qOSfky3DWNJ2n5x5nl6CKtnwIRiW7MHxGLzHRfDsB+YPI/dRyoIla1Kcgz7DJDEAknaDv5n15e9BI4zLWMHAWGYgyoA5mD5Dn+lCp9jEf4gHbYCZTfw5ywF35DcDrREtyeTB0q2dzGCXsMYgggH5UwHB6MMa1Y5HcZYXtBiVGX+Gwy5fFaU6RAkiNhsaE1SnnmcXdRJrx3EWrYRLgABJHgSZO5251ZdOjNkxL7hwZRg+0uLt5rgdSGIkMggkLAMCDoOhqr01s22albEiUv2gxF1HV7pZWKkiByMjlpBAqrUouCBCA+7EOs9pcUWBN0zmBnKu4kjl1P30L0UweJNvGIRi+P4nKW70yokaLG+ukRzqa6kzjEGCciI8RcuXbmdye8aPFtoBA5REUyAqrgSHKFSx8Qq8MigkTl5gaZjzIpdGDNxFMs5yJZbuBVZhGgkRzJ2+/wDCrLktzCJWBwPMWshMHX15g9aMY2FBknsXWYPElhI9BpJ6A1TeuCvxKOVUcnEPe1kEAgdSd6V355iiH133Pk/AE84dgi5MmY1JOsTsANiYE67aVxcKJpMcDanAhHFMQLI7tZzEBix105KRtB10ij0nevMF6OWznqEW1t27Y722ozQxYychjRUBO3k06nnWQ1z23lEPE1TWtdO9+4yGOb+xj/Mv/wCdNhcDuZDIhJO0TN4VIYNsFdQfU8vzp24+0j8S2/2gfiXYy4wyWrejPAPpO3l1NBoQMDa/QmbUSDnyYLfsAMUU6efPr6T5UwuXQMY16it+kwi5f/hkRDbDp6z6VVKzu5nF/mV2LqkBW5bdR6H8qs9TKdw/8ygt/OZZj7Me5JkelU0/vyD4gmt2ux/aXYRCQM0HfX0Ij7qFcAvU5yCQDK1wxMs75Z2A3ipNgGFrXPyYdHyOZQtokEA6cp5xTGRnJ7kb8dT0oUmRy/5ogGeYvZbu4E8xtoQD1kipqJ5zAMAORBb6gQIkKICzA8yTvvQQG5x5mtTllguH8L+JYUyI3A6fIxVyOJZwRyIZatkbqcwOs8utB8YkXK7cqeI7TBTKGTmBU6daEGIORA7XH9UGWwHca6pM+sbEcqh7GQHIgVrZcr/S0vxNpQFziR08+cxQ6N53Bf8AP4hEZtoCjmQuYS0ULKArDaNj5R1qyWWpZtbnMJU2TgjBg6YYkhRuxgetNlwOTDk4EOUhLec6woHqZIHtuaz8G2/0s/8AiI3n/U3HoDj94G6FUW9cbxvJ/wAvLTn6bbUypVrGqQcL/vGUdSoDnBjDh2NCDxjwndlHXqOXTSg20sTxDKjL+YBhr5e9cY6K8mDtlXSIOhI+dC1xVEA8jr5jemrLuOePP5ltzEqwaZIAkRrtPsJrM0xf1AF7Mb14rZBvOADn9/xAVxQjS2v+r9a9CNG+OXmG2rTJwkaDDJ3WSWUyGzEGM3U+VRkhjkcRYW4xzK7ts94lyOR9iAaHWMVNUfmKu2x8jqecPwYGp1uESeZUeQ51eywu2B+kcfvC1Dav5luJwYI6z0q9V4OfkSLtxAAgicO1IEQJny028zRDfyBJWs4kbtzwBSZg6Hy5g+YqFxvJHmUwd3Mvww19DPsdD8jHzodo3AiHYYlOU5216j9KMq4rAEDW49Qk9SSJAGUbTPmJ39to9KgYzgyuoBHKniesS+Yk6RGu9EGF6ij2noQK8kBddJGv5V2/PEY09fO4wcksSIzGdOtVHAmlXYAcSGEQ3DlAPvtUM6qMmNWOiDJjUkpCuqHYBt8q9IkZv63oW4MNyxdG3LlScRtg7OVAQ+YEeFjoPUnc0H1AP1cQVrBRyeILxHCOCLiiWHxMvPzI6+dXq1Fbe08iDLhxtU4l2Hv94odTDLo3TXqDodtjQdoos2Z4PI/6S9a7s7uxBbj6+KBJkAbe1NDuHAwfzCODuoPesrndVhTEcz5z5cqVuZieOhLbc9mfXMKDauIrZgDmU84+yw5EH8aB6uzUpaejwf3gdXWDXuXxKGtLcdWceC2qADYMxGgJ5DmT6VJuNamus+52JJ+APMiqvc+5uuh+8Y3cLmEnwpEEARH90frS33gqUqoyfknM3KdMTy8R8ZY3Mlu14cp8Kpy+e+m5qNPUXzdb5/mTfYEUVpxKsPhntMysQQQMwHmPiHp+VapFbhSoxjqYOqY+ZEMBoRtWhuiW4fMIuX30yFvYaelUKV592Iu9xJ5lmDxk+F9J5xHzH5il7qRgtX4hP6cmWlyLjHNljQHntuKtWgNQGJK2SRxIIVAwJ1iJ9z6RQvTCuX8x5CSBgQzBkAR0OmYaw2snz/Sl7G5zDqhHBglzhzSwkROo8p3HnTI1CqPcP7xa6veOD1L7NnbUTqAY3obOpGZVTkftAsTZIZjOkn/mmaWOwCK2jyJLh6AAsZ8jB6b/AJVR290uxZkCiTdQsE/CNz/XSrBjgxd6QGgOIthvGokDafre1DRjnmaoA2hVlljCl2WCJ3YaSDO39dK4uAvJlwQM8eIVjcSASAuhJ+FRANDTStZ7n/xEwELbnbn4gVrh/eFchJk6kR7yDtRXDINomqHBTco4gXG+0jC5lt5MtsBAYzL4dys+fOsu87x6fiWFKMPcIPwjHY7FXcmH72488jCqOrfVAoACoMQ3oq4/SMTV3Euo2S+DauIv8RBGWRqHEaMGjf1FNUqti/8A9Z/gzM1Iatx8RNiGlWzQefnPLXrWmyKvAjOncuh3deJdfxt2FgmVULCjp5DSoFVYX34x+YHU2hPZL+G3L7XFU22Y7gssQOZzdPI6UrqF0vpkhgP2lNMrWttQf9/maLDYRVOsHWYG0/0KwS7Mcz0Gm0ddCjyfn/pF3aDi4UZNJPyA6noKZ0umNrZP6RLXXhOM8xVw5SrgtILiDI0E6rB6mDPqOlado3cDxMliSd0KxljMVIcDcT94o9DbF6zFLAzZHzAzhD0+8U4NQn/YMzDUwPYinE4xiY1gaR6VIqUc+YSilR7jyZffXKswQDoRmM/L8xQlVie/4jIRW4xKcTZLeIbEDU8z+tXrbHtlasg7WEssksROkadP6HlUtgcmF9Mgx3gsL3b97Ea685B0M68h+FJmytjgHmQ+SuBCLeMCozMBoT4tzStoLP3x8eBO9XnYomYx3aW4phIUbeIT91CLfEaXSr23cM4ZxRLxAuCGiRB8Le3I+VGW+xhgHmAv04T3Dkf7RniLqqAAwkbKIk+1MUod25osqPYciAYnGqSs7jXlv06SaZUDuUvpdl47im697E3EsWt2IVeUkncxsB5dKy9TdyQvQmxo9OQNzfqP8R32h/ZnisPaFxD3+US+WQVgawNyPOlBZ8xwqDM/wLj0lVcBxoFzk6eUjU+9O1ah2wjMQPkdzOv0VZPqIBn/AHmpv4kXLb92qBkVhGUBtj4lYbgedDtpaq0bmY56OeD+CIaq5duzGCPE5Ybpga7Cgw87B2N7R4fA2LdokBnhuhJMasdyTOgpZcsSTGrCqKBiay5czF7uIFl7FxcqN0P9k3QltjzJFXSxlII/zAtTvJz18Tm5thiMoMZoAkli0bbSYFbgZgPccmZ/qKvAHU11rsjiys5BatjLLNGYg8wo/OstnBJezn4HiLV6RtRbmw4Bmi4Zw2xhUI5n4mYyT6k0lY+45bE9BXUqDbUMCZfjnGbeZksACPiqa6SxBbgSuo1YoGO2/wC+5iburEZgzN8R8v60r0FagKFUYEzN5sOT57h+G4WGgtJ5iW19d5qHvprOGksvGAIxXEE5c0HKsHkJUkTHWIqbT7RtP+Ik9gpHyZU2NWfiHyqwpbHX8xYvYf6RM6XhpP2h9xpxpeoErJcX4yghU8XMmef51nWasLwkeqoPZgycbzDIwyjqDpVatWN+XH95x05XkHMa2zIKBsq6Zm8ug9adZuARz8RdrGBwO4VfvsFCWz8UgiQdInblQdoc+7sS9S5OGi3HX28KEwNCR/lpbVECsAeTzCUVj1SfgQrs1wOxftXL98sVGaFXVgBzC7t61kWWkNia9VIK58wHjPA0Wx9LwhuPZUjPnSInZlPPzoiXEEStlPtJEr4bxFbgRdMzeFjzA5EfhWnRaDkmZr1kZ+IbxK6tpG8IEL4RG/Kfn1piy4Co4i9TGy0behE3B+Ivav2ntp3jo0hNdYHONhWK/wCnmbKZzxOzvf4pdfDXEuWrdq5bVihbKQ27AkavHQGOs0EMRCsic48Tkfb7BLZ4hiFEDxBoXYFhLR011olZJXmDdQG4nvDsXmy6nUQ0cxzHoYrcrsW2oA9iYz0smoLfMJ4/wcXwtxVGc/FrGn5kUhfWd5xLabUKLWS08HqGYftWMOe6uIjsoC54B5aHbQxyrLNJM3t6jGf8wvg9y1l76/cS6JHjZ4W2FJMLbJnP7GiD4xLHBGSZ2LsrbtjC2XtW1t5rYYjKAZO5J3zHczTOS3cymG04l3HcYbWGvuQfChJ9eXrvvVH/AEmWqGXAnGuM9pO9zKr67ZhtPMD9arp9Pzus/wARrUarb7av8xLh7uTNBIYLuTqSdgOtP2f6hAYcZ6mSC+7cZZgLTKob6zmFH5+lPgryD47lrbdixthsOJg3AWAJLFh8h1oZYtwRgHx/1lK7bOM9fzBr8lbjH4iyT01BnTbWB8qLUoXCiX1AAORKu8PlTG2Km6JuNMUUkiDMD3pfV2bKzj9ofTgHEzjNWKJoRqez+I+ifTCkWMwWTvr9aPszpNQWGcS2w4zC+H5hZBJXIZKwddNCpHI8/Sn9FqBk1nuJ6nTk4cHAPcOwl4RHdyDzAM+pP506x+IEVgDaDFfaPEHvJClBooB32/OsnUt78fEPp12+2MewvFsPYYXWQveRgAp2ymZP4DWkLQ2fxNWraVxnmaXtbxy7es3AsGxkLOEgor/2auAA8D4omNKptIIMICNp4/vOX4K8yFWXcU6pxM8jIxHeKsXb+HS7aBYZ2R13IYQ2nlBoTaxy5qf9xLJQBysF7PY17N4uGySGQsfqk9enrVLeRxD0nDTq/D+HX8TYCXGu6ruwHd2wvNHPOOe9A9pGI4SF54/5M5N2gxIfFOwOZdAG+1lEZp5gxTFIwmIpqGy8rweMKMG0PkedM12ms5EWesMMGaPB8ZWArBkJ2zAj3BMTTZuWzrgzNv0TH3CdBwfYrCcSTvRda2QoQoFQxA9JIO8nXWkra23c9xvTakbMY68GU4b9jjWrguJct3lGozAqfLqDQGVvmNpdX5E1VnG4jDPbtlJtscrh/qltFcMJkZoBHnPKpqyDtMjUBWUus0Vvidpz3TgW3YRlf4WB0IVtm9N/KmGrYc9iZ63KTjozh/7SOxBwFwXbSk4W40L/AO0x2tn+6fqn26Uelg/B7hWOPEQ4BAYz5hHWYpsKR+nBiz2lehNGqaJAMwQOmpGvyqEZdzbvwf8AEUtsyVIlC2VBJkEjyP6U1uBhktVRnzKuItACwdYYwD0hQfbX3rk4OZce9SSYu7w9KPxFjW3zD+O4Fb1mBIbSOYnkTypS5RYpWXqsFZDTL8L4MO8H0otbRSJUCWbnAH2SOdYxqtJKgczVXUUhd7HidF4zjsS3dW7llbGAhSs/C6H7R29V5VNdKFMs3M62+0WAIuQfiL+P27K4lrNgr3ZyuoXUAsIaDyGsxQaLzW28c+I1dQbV9PrzDbXZQuhHfQdMgZTr5AjczyiKbT6oPKf4mXqK/RsADDPmZDtThltfwrh/jIxkQdoENm266edLC31HZscGRpFcFmbzMqtwqwZTDDY1JAM0ASORGmM7TX7to2TABADHUkgH4QT8I6gb0PYAcwzXM67TFYbSI6UTMBibL9neLVlu4ZmCszLctk7FlBBWeUiszXqyuto66MPp2APM1WM4Et1GOVZMzET7xXKx7BjmBOd4jiGLtP8ARBdusitlW1mMEE6KB08qdAVl3RQs1b4ENxXCmOly2VKsFIGpQnYMOU8jsaGuQfbDuobub39mPZ21auNebKzgZRmghTPiHqI3pnocyjVADidM4zwvD46ybWItq6nY/WU9VO4NdFWQrMV+zzsrfwGKvJdYNbnLYYv8Q3zZBzI0M8wYomTjmCZeMzoqYRcwYaHYkEj+R9DVSYKeYiwpEDcAkR0irocGDsXIgN/CJiLOVgDmGoOx5UcMUeLFRYkQ8CtG7au4O7L2doYyQrbanWVcafyq+prXhh5kaS0nKnxMBxHgl7C3HtuZK6qY0ZeTf1sQaFWiN4l7SQcEyzD3ly6FFBGs9evr6Ud6zxz1BEBeZ9hXIBgNHMj8CKZFqn95njepPHEGw/1sikn50yxB8wfqEHGJScI32D99Tn8w+5vierd2mdBp/wAUvYrAwiWCxeDPmxeWWVUz5YUtr6aUNxYF9ncJSlRbDniUYHjDNZVMdcustrMqWlUxLCA2g8R10zELrzrDYEMQRzPS17Su4HiJbTqmKy22zoMqDWfMieZG1VP6eZLPtyw8Cdqw7K42EKAMvTT+tKURs8xfT0Bh6j8kzk37SMIUu3CBp4fbcmmqTxiM3IMZAmDujU0xFofwHAG/eFtfiIMeooGptFSbz1L1j3QrtDwi5h7oW5bKZ1lZG+sGPf8AGo02oruXKHOJNq4biKipERNMHBg404PxLEI4yXXHOCSQQPimfyoNirjqER2U9zUWXu/SVxJw7+EFDcQBgGMDMIkkQdwOdLKfZgGN7gXDYjni9pzbRhoFuWy/XKHE/LUxXVHDcwzDI4jnhtq5ZuFWEAucsTqCT98j76btPUvVzmbLgeL5edSpgNTXC+JXwLipzYGD5jxCD7GiA84igT2ZjS3dDKGAMkbg/j/MV0TYYMputFwaHUE+4Ounv99dK4mePEzZud2BvecAdFAk/iK0Vq9Rc/iZD2mpyv5k+CXu6OdgTbuL4iN1y3Gho56Pr5UO8FuPiE0pCHcfMl244N9KsN3et6147cR40I1T35eYFL1vsOY89YcTluCw4YzlI9QB+E0wbQIsaz5haW4aFOs6n8t9a7cNsVs25kMcPGDJWdCRuTy+7cmj03bVxFrKNx3T04dvtH/7Gji0ymz9/wDJgBZoDBSVHxaeWutXcjftJ5kVo23eAcS1mtnUCJqnMPkTRWMFh7+Fti4qsQuk9ddPQnlXmda7Le89DuK6Sth/3+JmMP2eTv8AwLBnRRoB1iljc2OY3qAracsnmdA4Rg+5QhiCRGg2nnXLxGUXaiqPEyvajDWyXknxKQxJnQ8hOwmPkKsGOeJcqMczmHG8GLVzwmRTtbFhzErU2niHdhcaLONtsQSNZgSRpuBzpfXUG+koJSs+6dE7cY3C4hFkGUR8rsCUIdRInSNVBDDUEba1mfT9DZp85bvHX4jbVZBzOZ8GxCBwlzVSInmp61sagHblYovfMjcGocrK+JSTtJkA+pGtQD4zz3JxN32U4q+GZVd//LADaaMB8I9gJ86TVwxO3xGaz4M1fEL4V7TNrbuE27kxAzDwk++nvRBzDdQPGDu8RatMSXBAQmTmQbBjOjCYnnApgNlfzDUmaPhSMp101/rTlV1lrjuEF7Z8UKXky693kJgidZkAczl1gVYnHMX06B0K+Zq+z2IQ2e8YqEMEOSAIPnRCfMy7Qd2IdiMTa8LCWhtG5CdDr0iqbxKitpz/ALd3zbxzEf2YPudz81Ue9bWh5pnn/qIxcPzHPC8WMipzTf8A0z+NUtTnM6qwYxNBwrVFAMMo8P8AhP1faKRtGG/E1KXyuIp4v2GsXs5Uvad5MqfDJ55T59KGGwcwj1hxgzmF673F10vEG5bJR8vkfDPnz9KbI3rxMxatrHPQleMx+aQgU+ZPL5dasleOTL2MMYga2LpE56aGMRYmNLfGLVoozZ8qoyd1AK3VPxePk08jXn77He0ue8/7T12nqrSkVgcY/wB4uuEH4JYHUHyPIxpIrc02p9ZM+fM81rNGdPZt7B6jjhGBN620PDJqU5MNwD0IPMbVkfVasWBx5/3ml9Ob1qGpbjB4i7A3899XD5HRmW4DsRHh980bcgazWG1TmUDW6bNTc88TWcTxLqIbQzJ9apmeiXB5mQ7ROWA1IzMBO+g8qKkW1lxqXIEQ8Q4dntm3bKsc0s53ED4Rz9aKtm08zKF7E+6ZzDC9YuZkBDDmBTOQR3DrYvYM2+H46VtM2JtF86kBZGVSfhLcxHKBzM0BWBO0RhdUjHPmYvD4dycwUsFkeHXTXUHY70R2UcEwY5nQOA8JsvhyD3gyAF1uBVLE75RMt91YWqvtFo24Ofj/AJjCgYxKuL8LCWu8eVVRFlGOqg/mT8tK0KQVHu7PcLsAEz2JxuLe1lu5iNCPbaRyooavPBgi7eZuuHW7WMwQxGYjEYeGzTqApBZQBvttzrgcHEYrxkEef95tswmRsdR70yIfsTAdqeIK+MvFrawhRQ+uaVXlsAASdzTtK5GAJhau70m3Z66/eZ9+0bi5bTMe6SciTKgk79CfwoWqowODO+n63e/vGM+TOtdk+Li/byEzNIKfE070/qET9s1LXrYI1FtUnr/FH4CvQ/S2zUfwZ5D60hW5SPIhHAyWa4f/AGyfc3F/IUxf0P3ilGcn9ppsLcQoqsWlkI8PxAhjDDpE0hYpyTNGtwAB+IbgOJd2gS9iA7ycvghioiCwEgnnIjcUBqiT7VjCXqow7ZM4r+0jDPY4hcuRC3/4qNG4MAr5kEa+opuk+3HxL8MMmLUuA54nRFOvXNMf11ozdiK2KeDK3wrSYZY5a0YddRf1kk1CWWBuse5LeKNTB3AXefurD1WmNd+AMg+f956DR6r1NOc4DgYA/PiaC3xjDOv0a3paGq3ANSTus7kDeTU3WihgKvH8wWn07ahS2o/Ueh8SxGuYYTbAaRBbkenofOh6rUrfWM8EGF0ehfT2nnKnzMlYJXFWrh/tVkLrIzajzpTjbiOvWGIyJ0DjPGFuP5Clo0q7RMxjsVba8A2YwIEQBruXY7L6a1YBscTK+oklgB4l1vB+EwFJ+rk2B5ydS4I9Naoe+ZlM4HYhOF4XZNkHIy4hZm2QStwT8Yb/ANMxuDppRHIbhTzJ42ZECOFk5UAZmJARlgNpJAJ6Dn5VVAQcmVTUAnEF7N4N1uvZtqXUw4I0ADTIJ6giq6ms24I7mvpmLjibrBcLW0O8eXcfCNCR0A8/Oq11rShd/wC8ewBAr/Djdu95e1P1UGw8gu5PmYrKv+os/wCngSCcws8BzgjIZ6aE/wCY7L6ClF1bKc5lTiZa/iU4diFLsuVzD2wZPk5HQc9Oleg0FjXDOOB5kJaEODNFb7TIbBuMSMg8UkaxyB6nQec1qYycRtXUJvJ/8znGPxrXGzOCSxLQdpJ++K0qFwJ5TWOzt8CWnhpZdYB566/8U56WRzMr7kK3Ef8AYziv0RwHaVMAmdbZOxI+yevWsHV07LDieu+n3+vpwT+06LxtO+tAgAsvjSPrafDPnv7UfQagV289HiJ/VNGbqfb2vIgnZeyUa4Tr/CUR1JafyFbGpIO39553S5Bb9o5RVUOrH6hzRuPIfhSzknBEZQAZBnnDS7XXzR4iCCNlQKBH3fOq2lUQH/vMmgM7mN+PcCsY2wbF5fD9Rh8SHkynkfxrPS0q24TVAGMTinajsficAZc57JMLdXYidA4+qfKSK2NNbXb+8T1AZRkRQLzeVO7REcxjdw8jUKeuoMUIsp4MMCeIsxGGAOa2YYnYbHz8j6UnqPp62+5eD/Ec0+ssoOG5X+RG3D+Pm0Ml5DHXl/KsW7TW1H3CbdGsqu/SeZO7icMzLcQrnQ5ln30+RpcRrg8wLE3iTmn096jGTgQhbAyYQ+DVGgsQ/MxKkRr5gg6aedEspcDiZ9n07WWJ6oXvxnnEIt4AggW7yW5MSdVJMRsZDR186VOenEx7qmz7wQfzxGWFfIct4sSfiZComJ0ETAJ3PpUEZHtErWrvwAT+0p4hjLOYBXUKwAYeKZG6jd3nrIE8qsu7H6YQ6O8H2Vn88GNeG422jOBA1AJgKMxAhRGjEDxOeWnnRgCRkjE3KKzXWARiB47tbhLbgXrjmRnGRSZBJCklSIkCY6EGldXpNRem2rGPOZFlyqcQW/8AtKwdsEWcPeuHlOW0vuZZzSdf/wCO3sc2OB/MA2pHgTPcX/aFjsQpRWXD2j9SyIMebnxH2it7S/RNNSASNx/MVe5jMXfBJJJJJ3JMk+pNOvWF6kqcwjBqxGUuQm5102oEYVcqZr+FcPe4EdxAA8I6DqfWtrTUcbmnkPqOuG81pHi4ZYjSBJJ2Ggkx10501Mgs2ceTMSLgbFoxGlxmDD+6QdPuB9qzPqCe3M9z9MTbsQftOq9l8Q9hzhL0Bgqsh5MpAIK+R+6DWEQVODNjIsXI8TRYeEuOeTZYj3/Otui31agPInl9ZR6F5I6PUvd2I8Kz0A1Jbl+tFwB3F8k8CMeG4FrPmG1efqt1HlyjrrWXqLTY2fE0qKhWuPMlY4opvFQZA0018XQeg3PnS4cboYCNL9pLqNbuKGRhDKdQQeVGViDkTiMjBnOcR+zDDZ2y376jMYXwmBOgkiTHnWqPqFuOhEDpK8zmdwqX8Ph661ogHHukesFAzLDaiDPPT15VZYvdYGU4nveSNeWkVYrnuKIdrCB3cIghgDPQGB6zyrH1P08Mx9Pj8T0Wg1rkf6nI+fMecC4YzgXLiwg1VSZn+8fLpWclBRvd3PVaOsMA5/t/1lvHABqOXL+tqKw4mzVnEhZtDffp5e9cAD3LOqv2Af7T29hcozglTy1rtijoQdaIpwgA/tFZfJJnXfNznrVfEizbsIPUWtx5oNtVIUDKPFsG1ut/jfaeQ2q9WnR+Z4/WahxYQMY6H4EU8Sum5cZ2AGaAANlAACqPIAAUx6QTgdRP1C3Jgsbf1qN6gTobh10ppBkQDnmDYtYoFwhazHfZLALfiR8JE+eugPypfS0+rYAehzI+o60aXSEj9R4E6GVRdD4m5Ku/vyA8zW6WJ6nhUqHbGK+0uJKYfWA17wgDZUGpA9dBPnUDvHxNDQ1b7N2OupkOEqGxdgHqxPsjVnfUW9s9j9PXFqzrHbW2DwfDY1R/EsCyc43CMwR1PUSQY5RNZRQMOYT1DVa37yvs/wAeF+2CT4uf61Si40Wc/wB4bV6VdVThe+x+82XZa2SGd4LbAA7D7RHU07qdQth2p1MTT6R6cm0cxnxDCd6pUswBEHKY9wetJsu4YjWZlODILTPacQyGD59CeoIgx50mBsbEt3NThMTIj5Uyj5nSjEXPG3qfxp5ehAHufnwNqRzP9D2r0IODM+2rem4eJIAz0j+pq5IzEsYH7yi40T5mqM+OISqrd7jGnZ3hf0i5mb/xJGb+8eS/qaS1F2wYHZno/pmk9Z9x/SP5mkx+NAkAGB/XKswz2tVUyvEsSWknSqOeI5jaIw7NHPaGuxK/LX33qtR4iyvxGfFSFAmiyaecmYvjeK35eQ/M9aEYprrgqGJsAsj3NP6VfbPGal8tmTxSTRbFg6zAo3+fy3paHh+G2puvqLvB8eKBeOISozoHYfhmTDIytIeWadIPTrtTGkQJX+TPM/VrXuvK+Fj61aV5CjLbHxtzb+7PSmiSO+5noFIyOphu0vEO9vMR8K+FekD+dT0s9FoKdiZMW9nWzYgvyRGj1PhH4mvP6u3e34nqNBXhszttiwMTwC7aG/cXVH+JJK/eBQUORF9WuLmE4l2U4w1t1UsQrfCeh+yf7p+41N1e4ZEvprdhwejOt8PuPee2tm6LTgy0icylTAGu+aNaUWPXHauSMzoHCrl1rY74AONCV2bzHSmAciY9gTPs6mT/AGj2rlhVx9rXuoXEJHxW50f/ABIT8j5CqPUH/eVBxPuz3aG1iE7y04Y8xOo9vypY7qzhpbEYX+JDM225/H0rQSz2iAI5nCrerExprXpzwZn5Irk3uk9dd53qe4uaiuCZfhcN3zi2IBbSTsoj4valLX9PLGPaWoWbUXzNzcC2bQt2tQoieZPM+prLZi7bjPc6HTpWgVepm8VekTqfc/yqpM2F4mc4ldbpQtjO2BFNdqfRrLNNrwXA9zZSWVRlE6EksdTGup8quF28QVTf6YGOe4r45imZzPhA2TSfVunpUExlRtXuYrit2WiqgTzn1K7nbPuHHQ+taWm4WYN3MnijzmPvHv8ArV7TjkTqxxzB7ca+fL+fMUFSDmEMvwZ8I+VGqPtg7O5DFWC5CDdiB8zvVLl3HaPMqHFaFj4nWMLh0S0BmyIAB05bDzp4+04AnjuXy7HuB8Y4jlw7uvgUeG2OZY6Zj6CTXKMHnuMaev1rAo/SJznGsSpj3/Sg6hiUOJ6ulAuAYx7JYMlXbkWC/LX86865notGnBM1GL7b3+Grcwti1bYXYfNck5cy5WAURMxO/tTFVeUzENeP9b+05oEiBrRsRTmafg3H7ha2ne91czaXT8M8iRyP3UpZQQdwjaav24Pc7j2bx98yMRdVzpGVcvq3UT0++gq0BYUP6RiaK8i3EZHAZWBVlOxBGoooMBPzb2t4De4VjSltmVD4rFwfWT7J5ErsQfI86cULauGGZGccwy325xcCchMCdD+tXXRVgeYIvzBLwGsaDoK2FJHcRSoOeTKGb9KvL2DPEacLxQRm0+JQPYHWOlZ/1FCVBHUZ+mHYxVu/EctfU22KHKev6zofesHeyniejptdOVMzl3ihbNIhhzGzDr5elaKU2vjjEYH1usId/wCofzBMHNy6iknxMB99OGkVIcTEfUWa7Urv6zwPgToPELhEBfjIhY+ovMjoT1pGewrX/H+8yvGciW/CRv4m6n151QztTYETJ4Ex7asTFXCGeO1F3qOWnhYjYRTAynmL4zPluH18jvU7yeuZG2UlhmBEjyP5UPcu4Y4hMHHMJwraUxWcCDYcxlwVc2It+s/dRq+XEQ+oHZpXnS0tBwMwED5n9B6Uyx2meVrAcDMxv7QOIfxbeHTQIMzRyJ/OPxpd7DnaPM9L9Jo2obCIpw+HDIR5UxtGzEadytgM2HZzBBcJh9PiGY+pM15Vhg4nsdPxXxEPb1P+6H/xp+dPUJlJi/UW/wBbH4mUdaZ2YEUBkXtSKqU4lc4M3fYTtYVC2Lz+JTFtz9nkpPMg6ehrO1FBU7hCqZ2fhWPzAT70FGkERX+1JcN+7rrYhQxA/gz8Xe/VyHcHr5b6U1TncMSuJ+frew9BWwItiMBdPiE8yfvpxhzFODtzPhUicxOcCWWWKsD50O9N9ZH4ha7MOpmkw1rMCp2NeTfuemQzMcSsZHZa9BobfUpHyOJiaunZcT4PUL7K2pxIP2VZvyH41bUnCR/6NXv1IPwCZq+J3kCy5JBMC2vxXD0J5KKzTxPXgMOFExvGxeut4goynRAICabfL8aEXK8mZf1JGavDGLL+EK6lhPlXDUMZhnTL5gNy+dRoQdNh93Sresx4Mp6KjqDsRz9j/XOr7ge5XEg241J9ahjzJEttuRpRkfbxBsuZpexOuNtCJ8L6b/VpupsPMv6mM6Y/uJ0djkljlCKCzR0ApskETzSVsXAGOZzbtDZYt9J3LH+J5Zjp7DalrENb7x1PXaewbBV5Ejwy7Jgc6crYMOIPUrgZnSOC2M+EtZdcnhYDkQdPuNed1NRSwgz0/wBM1K21DHeJie2UvjWCiW8CADUkxsPPWn9KuKcmZf1E5uIgH/TmLk/9re0bKfBsYmPWDNX3p8xMZA6lQ4FiSFYYe6Q6lkIWcyqAWYdQAQZ86sSmcEzg2eCJ6nZvFNBGFumQGEJuDsQN9ZHzFVJr6JEnnxNt2Y7T38FhH+kYW+5tsFtNBAOYDKjseYzDXXRgN6zNTQobch4h68twYt4r+8cXce7i7NwEKQEykJaUiYXlqBJO5gztACCQQR4jtYQLjPczAsH7NegV0IBzMR0cMRPnOp9T+NNxNAWOZ4TVhJIOZZnrsSWcgcTU8GxIOUnnp7xXlNZV6dpE9LpLPUrBiztRa8QaPKmfpVmLCvzA/UV9gb4izh2MazcDqY5HzHnWrqKjYmB34iel1LUWB1P7y7H8bckxv1g1isLQcET0Q+rkrgYi44h211/Co+3tY9GI3a3ecsZQ2HdzTCaCw98RV9Ss+HDgNCZPQUwNEi/rMCb2PUJbhKxtRvtqwMASqWlu4Hd4UuTMCZkgjpWXqh6Nm3wZo0Ueqm4HqA5dx6AURDnqKOpU4M9DsDmVirDYgwR6EVdiSJTaDwRNRe4/fewEZ+8zqpZo8SwdifrTzp6m5mUE9RD/APXUrb6q9/HiXcPxIdCrCZEEHmDT3DCBuUowIiG4hsXSn1d1Pl/Lak0Jqfb4j6kWpHi4lmttkdkJADZWImNpg600yLYASOojWzUvgGC8PypcR3OVVdSTEwAwJMcyN6DYpKkASWv3PtWdm49gcPh1s37+LcC5dDW2FhCe8a3GYgLpKCJPKsdAWJAE0CcDkyqxwxLfELWFt4nKWwp7pktW5yq/itaCFSADHOTVuShbHmRnnEnYwWGbFHBrjnW9ZXbukXKAVOj5eWkCdKg7tu7bxJyIFwDhy46xfuXcXcD2b1wXCttJXu7gdcjZTIIRLhifET6VNq7CAB2JIMJxHD+94e2JweLz2LisSptqqlS7d4AAAQxcuTPMmlXBEPUVLAETIfuojTLV1J2iEfG4zDXNz6n8a9NMRep5UypMmgrpU9Rjwy7Gk+Y9ayvqdG5RYPE0vpt2G9Mxjx2Wthum9ZehfZepM0NYm+hgJmzPSvTEzAQ7RPSh5io4Mv8AkQnA2wC0/Z+8zQiGDSxZWxmWYHBZgSSQJjSg2uQcQ7LziH38PbtgAaNAnrNTWoPMlaWbuBG9rzJ6DU0UkDuG2qoxJC3Nt/CBry1157aVjfVCDtImp9K7dcQfCdnmv2yUhW8TKWMAgaGfI660HSFicCA15UNMwDTIMUml4FYFzDn+4zT1E8+kVavUFGCHz/iBsFgO5Rn8SlQbbAwcp+E9R5dR51rVtg4gGHqJg9xjjMEt9NwrDUMeXr5V19e4AiL0WemSpibA4gqYO40P9dKrTYR7TGr6t4yO4ZibJcDICxbwgDck7D1O1MEgcmLVjJx5nde27rawGHa7gPpaplLof/Si0ZuHpG3vWBUC1mA2I8eBOdfsis5uKh7drKgW6zZRogcHID5ch6VoawbaNpPPECi+/M1/a/hOK4hfxGDXBWrVuVZcW6HxZcpgEDUnbfYGk6XWsByc/iFZcyX7JME9nBYwd3P8a4E8Jy3MiBDl6jMpX2Iqda4Z1x8SlSlQQYW6XMRwV2xNj6CbYd1tocgAQyuZdIBO6n86VuVdxCnMYqYqQZzOz2jJUHMdQPwqqqdojDY3GZl9z6n8a9JnmYgIxPKsJUz0GrQeTmXLcgg8wZFCsUOpX5ha2ZGDTSOme0CNiK8pYpqf9jPTKRYv7zNvYIO1epTFiBgexPMNd6TlWHU+Fwjn/XpXCrB7ktqwy8rzJpdXzBO/MRygVcp5Bglt+RGWGxSKfjgsSSQCVHIKVIDAwJJHXnStmmazJPca+9AbriS4jb07xnRi+sI2i9JJhm+QAq1SeG8Tr9ecYSLC3sOg2/nRLKFbowen+oNXwwz+fML4ZftglbucId8u+nLXr1rKv0Vl2APE3E+q00gurZzLcRxINKhSqaAKG+qNhtRKqTplywgA66lxsfnuZnjFhFYFBCkTBM68z6eVBJB5EJbUayATnML7N4hVW6DObwlROnQmNiRpvtRaVLEhe4FnrT3WHiH3nLqVJJnXXXXrUq5Qx5qq7FyP7ESvA4iJRvStRG3CYN9eDuWVYrh6wcuYOIynkeqn9aTtba35j1KtYm4GR4diipGuUgjf6pB0PsdaarYOpETvTawYTt1rA4S3hUOP4o15b6/E98IjgjUKoiV9fesU7i+EXGI14irtd2RGAsNjOG3ntLC96FacyToynyJmOhpim8WsEuGfiAtV1G6swnsrhHGAOPx+OxHdlS4VXYBEGx8PiZjvHpQr9vqbK1hKi23LGWWuF2sTw9r/AAnF4i1lNwhS7QWBJdWVgSpJJMjmZqMlbMWiWPI9swmN4/YxGHy37uLZ+7HhLuyG74pDDRSuiNO0sRypo6dlbgDH/EEtoxyeZj0s6DU1P2aeDO+7M8uNBPqfxpj1RmAFbYn2eiC0SPSYyQbpXeqJPoHzLEsudgaobVl1RhNLwbw2sr6anz0rF1pVrMrNjSB1TDRa+CuO3gyzzkx/zTOj1WyvafEztfpNz7wO5Te4TcUeIqCTAgltehgae9GOuI7i40Y8Sl+G3QJgEbaGdeekTVhrA046TE9t8JvnZAf835cq5dS2fdKnTL4hf7gxQGY2vky/rVzrExzKHRtmfPwe+BJsuT6rp9+tLNrLN3t6hF0a+Z9Z4DiXMJbzGJIBEj5mmV1qY9xxBNo3HUHu8PvoSGstp10HzqH1SN7fEtXp7UO8cGAcRwVxwCLbachrSpFY6M0vuLbSPUHUXcKzd4CiltxA/reoqtCPnMrqKvUrIj8Lc/sm9Ip/1kYZmV6Fi8AnEGu2XJByN02PtXfcIDyY1pqnAK4jVOA32stcyjwie7nxkczlG0DWDqdaXt1VDuADkxta76kYgdxFfB+ODI3MHX1o5sXOQYnSGHtIyDOj9hv2cPilTEYzNasAeC3Piddzv/40O8bmSdOYr9aq8V9/MuNPk+48Q/8Aab26sfR2wGDUusBblxVORFX6imPETESNBrqTSmmXL7mMYdeMTSdln/d/CA/EXBt5QQmWciv8NnnnMmPeOU1S9g9pKTkXaMQu1irWN4ZdHCbiWh4lAyFcp3ZCuhViDvr8QOtUHD++SRxxPzw90AkaiDEHkRpFa5sBi4pwMGTS+IFWDiCNQzNpwfs3h7tq0buM7q9iGdbFvuyykqxAzsB4ZPUj3rJdyGMeUe0TN2L6HmB+Hzrt5l9sYph2KhwuYHaAKG1uJdKlbs4kvo90DS2R6kCgvY7DHUdqTTVnLHJi7GDEg+FUj/GJqEVQOZ2o1O9vb1I2RfzK125ZtohzEZxJjy5miAqOoqxLdyx+0yAqLbFQSZheR2mdzM1OYPEuHG5Ojo0f3RNTOxCLHFgOSzzgAVE6E/vgEfCnoQfyNdOxItxWfrlR0XWfmdvKunTxuMxtcj2ioIBkiDtxGd7k/OhhtpwZYjPIlZxo6x1/4okrPnClQQ1tSNTqR7jw+L2oOOY4P04xPFxGYwksfKfz296MDFGXB5mh4NhcgzufERsDIA/WguS3ENXhefMvucXtWD3jlVO2mrHyA5moVfiWZvBiLDY1buJW4VKWjcDFSCTlBE+EdRyo+SBAYBOJ1Dif7QuE3rfdPcvFCdVS1eEx9VgFmPI712MiB5UwPG9vOEWsK9lGdM6OEDWbmpI6lep51w44nHJOTFHAv2m8Pv4MYTialSFVWbIzo8DRhkBZW02j0JqeQcySstuftF4VgcM1nhaF2YkiEdVDEQXdnALEADQSdAKk5J5kbTOQveWZIkkkzA1J1Jq+8y20SaXVgeHl5UYOcQJUZm27JcNt3LRZ7IuEXLwG0n+GSApO58pEb70B/wBZ/eEX9I/YTEYW2pVeZgc/LeohDGWCwjsGCFoRcxAciBIHXqR86kV7gWlS+OIxbsfjSYNu6R/8o/3VTiW3TxOwd9tfo5M8+8X5zmmunboJc7J3F7zNZC93lLhmGgb4Yiu74zLqjOCR4lg7FYhgYtKTOgLqNgDBM9DUspU4MErhhkT0dg8aBJtW11iTdTfpvUZlsiet2LxqKzmygAnUXVO2/PkK6dkRIjA10mH4TAvcRriAFVYKZOuY7ACef61bYSN0oXAYLDbXZ7FH/wBA8vrJrImR4tqrLZkLvA7yAM1oqrMqiSolmMAaEn3qrDIlkOTgQq72WvZmUKsqYMuAJAGkmOvSqrkDBlrV2Ngz1uzmLgJltgDmbiaT5zUlZwuIGIy/dl/4e6tTptetx096jaZHqwfF2b6QhQIWVmBR0mEEtJBIGnLnRK6mbOJR3Uyn/p++fGLNomAZa+pOu2nKoBIlSFPeZ43B8cASPo6joLiz8s1cRnuWVgowIEeAY4jRrY0J8LINtT9aZrtonbhM8STqWzeZq2JMquCAToa6ROgdqOwGHw2CtX0xJzkpmuOR3VzMJOQLLLB0G+xnrUZlQeZirnD0E/8AcWTAnQtr/dGm9TLSq2ggegow6gT3HT8PiYu3QCSYDADXfSOmlGahSSYJb2AA4lZ4Qv2n/wBP+2uOnX8zvuGlg4Yo2dx6EfpU/br8md67fAk/3cI+O58/5VX7dfzO+4afLw8DZ3+Y/SuOmX8yRqG/EkMANfG+u+u8bTprUfbJ3J+4cT48PB3d/mP0rvtl+TIGob4ErbhKH6z9Ykb9dqj7dfky33Dfie/u4Aki5cG3MRt0iu+3X8yDe3wJ6cGI1JPqF/Jak6dfzJFzGSbg1s6y49D/ACqfQXHmQb2EGThK/af5j9K70FkfcNJLwtRqHffqP0qDp1neu0t/d4O9y4Z1MkGT1Mjeq/aJnzJ+6f8AE+/di/ab7v0on2yfmQb2kTwpftN936V326/mR9w08HDF+0/zH6Vw06/Jk+s2J4eEJ9pvu/SuGnWQdQ0qbgqfaf8A0/7aj7dZ33DT4cET7T/6f9td6CzjqXnn7lT7b/6f9tT6CyPuG/E8PBU+2/8Ap/21326yfuG/E9bhAIVTdulV+FSwIXrAiB7V326zvuG+BI/uNPtv/p/21326yPuG/EtXg6AfE/3f7auKlxBm9sz/2Q==)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Kannum%20Kannum%20Kollaiyadithaal" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://timesofindia.indiatimes.com/entertainment/tamil/movie-reviews/kannum-kannum-kollaiyadithaal/movie-review/74381799.cms" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Kannum Kannum Kollaiyadithaal| Tamil</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(https://upload.wikimedia.org/wikipedia/en/2/29/Super_30_The_Film.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Super%2030" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://en.wikipedia.org/wiki/Super_30" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Super 30 | Hindi</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(https://cloudflare-ipfs.com/ipfs/QmXoypizjW3WknFiJnKLwHCnL72vedxjQkDDP1mXWo6uco/I/m/Sivaji_The_Boss.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Sivaji" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://en.wikipedia.org/wiki/Sivaji:_The_Boss" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Sivaji (2007) | Tamil</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(https://www.filmibeat.com/img/190x100x237/popcorn/movie_posters/24-20160502145124-15027.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=24" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt4981966/" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>24 | Tamil</b></h4>
            </div>
        </div>

        <div class="card">
            <div style="background-image: url(https://images.cinemaexpress.com/uploads/user/imagelibrary/2019/5/26/original/Comali_1.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Comali" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://en.wikipedia.org/wiki/Comali" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Comali | Tamil</b></h4>
            </div>
        </div>

        <div class="card">
            <div style="background-image: url(https://upload.wikimedia.org/wikipedia/en/thumb/b/bb/VIP_movie_poster.jpg/220px-VIP_movie_poster.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Velaiyilla%20Pattathari" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://en.wikipedia.org/wiki/Velaiilla_Pattadhari" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Velaiyilla Pattathari | Tamil</b></h4>
            </div>
        </div>

        <div class="card">
            <div style="background-image: url(https://static.moviecrow.com/gallery/20141013/47600-Bz0oFYyCIAA5l2n.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Kaththi" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://en.wikipedia.org/wiki/Kaththi" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Kaththi | Tamil</b></h4>
            </div>
        </div>
     <b>


<div class="th">
<p class="blink"> Developed by<a href="https://github.com/hemanth-07-11" target=_blank><b><font color="yellow"> HEMANTH N </font></b></a></p>
</div>
</b>


</body>

</html>
