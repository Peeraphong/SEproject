<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link href="https://icons8.com/icon/20FjgTazh8FG/download"></link>
</head>
<body>

<div class="title" >
    <b>ประกาศ</b>
  </div>
<br><br>

<div class="container">
  <table width="1000" height="84" border="1">
    <tr>
    <!--<td width="2000"><div align="center" >เรื่อง</div></td>-->
      <td width="2000" height="42"><div align="center">ข่าวประชาสัมพันธ์</div></td>
      <td width="160" height="42"><div align="center">วันที่</div></td>
      <td width="150" height="42"><div align="center">รายละเอียด</div></td>
      <!--<td><div align="center">ลบ/แก้ไข</div></td>-->
    </tr>
    <?php 
      foreach($annouceList as $annouceList)
      {
        echo"<tr>
        <td><b>$annouceList->name</b> <br><br>&nbsp;$annouceList->detail</td> 
        <td>$annouceList->date</td>
        <td><a href=$annouceList->link>รายละเอียด</a></td>
        </tr>"; 
      }
        echo "</table>";
    ?>
    
    
  </table>
  <br><br><br><br><br><br>

  
                  
  <!--<table width="576" height="390" border="1">
    <tr>
      <td height="40" colspan="2"><div align="center">ข้อมูลข่าวสาร</div></td>
    </tr>
    <tr>
      <td width="114" height="42"><div align="right">ข่าวสาร :</div></td>
      <td width="446"><input type="text" name="new_update" id="new_update" /></td>
    </tr>
    <tr>
      <td height="252"><div align="right">เนื้อหา :</div></td>
      <td><form id="form1" method="post" action="">
        <p>
          <label for="news"></label>
          <textarea name="news" id="news" cols="60" rows="13"></textarea>
        </p>
      </form></td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td><input type="submit" name="up_news" id="up_news" value="เพิ่มข่าวสาร" /></td>
    </tr>
  </table>-->
</div>
</body>

<style>
  .container {
    margin-left: 37em;
  }

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
