<html>
<head>
<style>
#welc{
     color: red;
     font-size: 30;
     text-align: center;
     font-style: italic;
     
   
}
#col{
    color:green;
    font-size:15;
    
}
#marq{       color: red;
             font-size: 20;
             font-style: italic;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

#footer {
    background-color:black;
    color:red;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
#section {
    width:400px;
    float:left;
    padding:10px;	 	 
}
#auth{
     width:250px;
     float:left;
     padding:70px;
     font-size:16px;
     color:red;
}
.head{
      hight:200px;
      align:center;
     }

#section2 {
    width:400px;
    float:right;
    padding:10px 0px;	 	 
}


.clearfix:after {
    display:block;
    clear:both;
}
 
.menu-wrap {
    width:100%;
    background:#3e3436;
}
 
.menu {
    width:1000px;
    margin:0px auto;
}
 
.menu li {
    margin:0px;
    list-style:none;
    
}
 
.menu a {
    transition:all linear 0.15s;
    color:#919191;
}
 
.menu li:hover > a, .menu .current-item > a {
    text-decoration:none;
}
 
.menu .arrow {
    font-size:11px;
    line-height:0%;
}
 
.menu > ul > li {
    float:left;
    display:inline-block;
    position:relative;
    font-size:19px;
}
 
.menu > ul > li > a {
    padding:10px 40px;
    display:inline-block;
    
}
 

 
.menu li:hover .sub-menu {
    z-index:1;
    opacity:1;
}
 
.sub-menu {
    width:160%;
    padding:5px 0px;
    left:0px;

}
 
.sub-menu li {
    display:block;
    font-size:16px;
}
 
.sub-menu li a {
    padding:10px 30px;
    display:block;
}


</style>
<?php

session_start();
   // $name=$_SESSION['username'];  
//echo'welcome :'. $_SESSION['username'].'<br>'. $firstname.'<br>';
         echo'<a href="signout.php">Signout</a>';
?>
<h1 id="welc">
<img src="indexx.jpeg" width="60" height="40" >
 CHILLY FLAKES<sub id="col"><i>hot & spicy!!!<i></sub>
</h1>

<i><marquee id="marq"> <i><span style="color:black">ONE CANNOT</span></i> <b>THINK WELL, LOVE WELL, SLEEP WELL</b>
<i> <span style="color:black">IF ONE HASN'T </span> </i><b>DINED WELL!!!</b>  </marquee></i>
</head>
<body background="bg1.jpeg">

	<div class="menu-wrap">
			<nav class="menu">
				<ul class="clearfix">
					<li><a href="website.html">Home</a></li>
					<li>
						<a href="final.php">Register<span class="arrow"></span></a>
					</li>
					<li><a href="#">about us</a></li>
					<li class="current-item"><a href="#">help</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</nav>
		</div>
<img src="pic.jpg" width="1285" height="150" >

<div id="section">
<img src="chinese.jpg" width="400" height="300" >
</div>


<div id="auth">
<p><center>Login for Reservation<center></p>
<p>Username: <input type="text"></p>
<p>Password: <input type="text"></p>
<p><center><input type="button" value="login"></center></p>
</div>

<div id="section2">
<img src="italian.jpeg" width="400" height="300" >
</div>

<div id="footer">
<img src="images.png" width="40" height="30" >
Thank you!!! Visit us Again...
<img src="index1.jpeg" width="40" height="30" >
</div>

<div> 

</div>

</body>
</html>
