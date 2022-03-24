<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Company</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>

  <div class="title" >
    <b>สถานประกอบการที่เคยรับนิสิตฝึกงาน</b>
  </div>
<br><br>

    
  <div class="container">
    <form  method="get" action="">
            <input type="text" class="form__input" name="key" placeholder="search">
            <input type="hidden" name="controller" value="company">
            <button type="submit" class="button" name="action" value="search">
            🍳</button> 
    </form>
    <table border = 1>
    <tr>
    <th width="270px" height="50px">ชื่อบริษัท</th>
    <th width="450px" height="50px">ตำเเหน่ง</th>
    <th width="250px" height="50px">ช่องทางติดต่อ</th>
    <th width="100px" height="50px">เบอร์โทรศัพท์</th>
    <th width="100px" height="50px">ค่าตอบเเทน</th>
    </tr>
    
    <?php 
      foreach($comList as $comList)
      {
        echo"<tr>
        <td>$comList->name</td> 
        <td>$comList->detail</td>
        <td>$comList->contact</td>
        <td>$comList->com_no</td>
        <td>$comList->salary</td>
        </tr>"; 
      }
        echo "</table>";
    ?>

    <?php 
      if($comList == null){
        echo '<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
        echo '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
        echo "------  Not Found  ------";
      }
    ?>

  </div>

</body>

<style>



  .form__input {
            color: #333;
            font-size: 15px;
            margin-left: 58em;
  }

  .search-box {
    margin: 30em;
  }

  @import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');


.window {
  margin-right: 16em;
  margin-left: 38em;
  
}

.container {
  margin-left: 30em;
  
}

th {
    padding: 8px;
    text-align: center;
    border-style: solid;
    border-width: 2px;
    border-color: #4D77FF;
    background-image: linear-gradient(#4D77FF, #5EE6EB);
    color: white;
    font-size: 18px;
    text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    font-family: 'K2D', sans-serif;


}

td {
  padding: 8px;
  text-align: left;
  border-style: solid;
  border-width: 2px;
  background-color: #CAF0F8;
  font-family: 'K2D', sans-serif;
}

td:hover {
  background-color: #90E0EF;
}



.title {
  margin-left: 11em;
  text-align: center;
  font-size: 30px;
  color: #84DFFF;
  text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
  font-family: 'K2D', sans-serif;
}

</style>
</html>
