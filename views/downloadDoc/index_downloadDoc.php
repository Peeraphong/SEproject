<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Download Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- Head Bar -->
<div class="topnav">
  <a href="#home">Login</a>
</div>

<!-- partial:index.partial.html -->
<section class="app">
  <aside class="sidebar">
         <header>
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTR7A6FocrFnrsfomJyBtrL0rf10unbdI3y5IZlEeRFZXLPB5cmPGJzxfiBl5PcKOK8I6I&usqp=CAU" width = "50"/>
      </header>
    <nav class="sidebar-nav">
 
      <ul>
        <li>
          <a href="http://localhost/SEproject/views/pages/index_page.php"><i class="ion-ios-paper-outline"></i> <span>ประกาศ</span></a>
          
          
        </li>
        <li>
          <a href="http://localhost/SEproject/views/company/index_company.php"><i class="ion-ios-briefcase-outline"></i> <span class="">สถานประกอบการ</span></a>
          
          
        </li>
        <li>
          <a href="http://localhost/SEproject/views/submitDoc/index_submitDoc.php"><i class="ion-ios-filing-outline"></i> <span class="">ยื่นเอกสาร</span></a>


        </li>
        <li>
          <a href=""><i class="ion-ios-download-outline"></i> <span class="">ดาวน์โหลดเอกสาร</span></a>
          

        </li>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <li>
          <a href="http://localhost/SEproject/views/contact/index_contact.php"><i class="ion-ios-chatboxes-outline"></i> <span class="">Contact Us</span></a>
        </li>
      </ul>
    </nav>
  </aside>
</section>
<!-- partial -->
  
</body>

<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600);
body {
  font-family: "Lato";
  font-size: 100%;
  overflow-y: scroll;
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  background-color: #fefefe;
}

a {
  text-decoration: none;
  -webkit-transition: all 0.6s ease;
  -moz-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
a:hover {
  -webkit-transition: all 0.6s ease;
  -moz-transition: all 0.6s ease;
  transition: all 0.6s ease;
}

.app {
  height: 100vh;
}

/* -------------
Sidebar
----------------*/
.sidebar {
  position: fixed;
  width: 17em;
  height: 100%;
  top: 0;
  overflow: hidden;
  background-color: #19222a;
  -webkit-transform: translateZ(0);
  visibility: visible;
  -webkit-backface-visibility: hidden;
}
.sidebar header {
  background-color: #0080FE;
  width: 100%;
  display: block;
  padding: 0.75em 1em;
}

/* -------------
Sidebar Nav
----------------*/
.sidebar-nav {
  position: fixed;
  background-color: #0080FE;
  height: 100%;
  font-weight: 400;
  font-size: 1.2em;
  overflow: auto;
  padding-bottom: 6em;
  z-index: 9;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  /* -------------
  Chev elements
  ----------------*/
  /* -------------
  Nav-Flyout
  ----------------*/
  /* -------------
  Hover
  ----------------*/
}
.sidebar-nav ul {
  list-style: none;
  display: block;
  padding: 0;
  margin: 0;
}
.sidebar-nav ul li {
  margin-left: 0;
  padding-left: 0;
  display: inline-block;
  width: 100%;
  /* -------------
  Sidebar: icons
  ----------------*/
}
.sidebar-nav ul li a {
  color: rgba(255, 255, 255, 0.9);
  font-size: 0.75em;
  padding: 1.05em 1em;
  position: relative;
  display: block;
}
.sidebar-nav ul li a:hover {
  background-color: rgba(0, 0, 0, 0.9);
  -webkit-transition: all 0.6s ease;
  -moz-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
.sidebar-nav ul li i {
  font-size: 1.8em;
  padding-right: 0.5em;
  width: 9em;
  display: inline;
  vertical-align: middle;
}
.sidebar-nav > ul > li > a:after {
  content: "";
  font-family: ionicons;
  font-size: 0.5em;
  width: 10px;
  color: #fff;
  position: absolute;
  right: 0.75em;
  top: 45%;
}
.sidebar-nav .nav-flyout {
  position: absolute;
  background-color: #080D11;
  z-index: 9;
  left: 2.5em;
  top: 0;
  height: 100vh;
  -webkit-transform: translateX(100%);
  -moz-transform: translateX(100%);
  -ms-transform: translateX(100%);
  -o-transform: translateX(100%);
  transform: translateX(100%);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.sidebar-nav .nav-flyout a:hover {
  background-color: rgba(255, 255, 255, 0.05);
}
.sidebar-nav ul > li:hover .nav-flyout {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #3DB2FF;
}

.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 29px 30px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: black;
}
</style>
</html>
