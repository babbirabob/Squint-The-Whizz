
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Design Your Website With Background Video</title>
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
a{
    font-size: 25px;
    color: antiquewhite;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.40),rgba(0,0,0,0.40));
    background-position: center;
    background-size: center;
}
.navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
}
.Login-box {
    position:relative;
    width: 100px;
    height: 100px;
    background:rgba(63, 62, 62, 0.527);
    border: 2px solid rgba(63, 62, 62, 0.411);
    border-radius: 20px;
    display:flex;
    justify-content:center;
    align-items:center;
    backdrop-filter: blur(15px);
  }
  .Login-box .a{
    justify-content: center;
    align-items: center;
    display: flex;
  }
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}
.navbar ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    font-weight: 600;
    padding: 15px;
}
li a:hover{
    background: white;
    transition: 0.6s;
}
.navbar a:hover{
    color: black;
}
.content{
    width: 100%;
    position: absolute;
    color: white;
    top: 60%;
    /*transform: translateY(-50%);*/
    text-align: center;
}
/*.content h1{
    margin-top: 80px;
    font-size: 90px;
    font-weight: 800;
}*/
h1{
    font-family: 'Times New Roman', Times, serif;
}
button{
    width: 200px;
    padding: 15px;
    margin: 20px 5px;
    text-align: center;
    border-radius: 25px;
    color: black;
    border: 2px;
    font-size: 20px;
    cursor: pointer;
    font-weight: 600;
    font-family: 'Times New Roman', Times, serif;
}
button:hover{
    background: rgb(0, 192, 226);
    transition: 0.5s;
}
button:hover{
    color: white;
}
.banner video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
.row contact_form{
    align-items: center;
    justify-content: center;
    display: flex;
}
@media(min-aspect-ratio: 16/9){
    .banner video{
        width: 100%;
        height: auto;
    }
}
        </style>
    </head>
    <body>
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="123.mp4"  type="video/mp4">
            </video>
            <!--<div class="navbar">
                <img class="logo" src="logo.png">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>-->
            <div class="content">
                
       
                <h1>Beyond Boundaries: A Tapestry of Stories and Insights</h1>
                <form class="row contact_form" action="index.php" method="post" id="contactForm">
                
                    <a href="index.php"><button">Explore</button></a>
                
                </form>
            </div>
        </div>
    </body>
</html>
