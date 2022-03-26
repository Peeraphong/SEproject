<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Submit Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
    
    <form class="container" method= "get" action="">
      <h3>ฟอร์มยื่นคำร้องขอฝึกงาน/สหกิจศึกษา</h3><br>
    <div class="title" ><b>หมายเหตุ :</b> การฝึกงาน หลักสูตรนี้กำหนดให้นิสิตที่จะฝึกงานได้จะต้องเรียนให้ผ่านในรายวิชา 02204XXX รวมแล้วไม่ต่ำกว่า 35 หน่วยกิต 
      หรือให้อยู่ในดุลพินิจของคณาจารย์ประจำหลักสูตร นิสิตจะฝึกงานกับหน่วยงานที่รับนิสิตเข้าฝึกงาน ไม่ว่าจะเป็นหน่วยงานของรัฐ เอกชน หรือรัฐวิสาหกิจ 
      ทั้งภายในและภายนอกประเทศ ซึ่งนิสิตจะต้องเข้ารับการฝึกงานอย่างน้อย 240 ชั่วโมง และไม่น้อยกว่า 30 วันทำการ เมื่อเสร็จสิ้นการฝึกงาน
      นิสิตจะต้องส่งรายงานฝึกงานและแบบประเมินผลจากหน่วยงานเสนอต่อหน่วยงานฝึกงานภาควิชาวิศวกรรมคอมพิวเตอร์และคณะวิศวกรรมศาสตร์ กำแพงแสน<br><br>
    </div>
    <div class="grid">
      <label>ร้องขอฝึกงาน หรือ สหกิจศึกษา<br><br>
      <input type="radio" required name="intern_coop" value="ฝึกงาน">ฝึกงาน&emsp;&emsp;<br><br>
      <input type="radio" name="intern_coop" value="สหกิจศึกษา">สหกิจศึกษา<br><br>

      <label for="petition">วันที่เขียนคำร้อง :</label>
      <input type="date" name="petition">&emsp;&emsp;&emsp;&emsp;<br><br>

      <label for="nisit_no">&emsp;รหัสนิสิต :</label>
      <input type="text" name="nisit_no">&emsp;&emsp;<br><br>

      <label>ชื่อ-นามสกุล :
      <input class="long" type= "text" name= "name_surname" />&emsp;&emsp;&ensp;<br><br>

      <label for="telephone_no">เบอร์โทรศัพท์มือถือ :</label>
      <input type="text" name="telephone_no">&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br>

      <label>ชื่อ Facebook :
      <input class="long" type= "text" name= "facebook_name" />&nbsp;&emsp;&emsp;&ensp;<br><br>

      <label>ตำเเหน่งที่ไปฝึกงาน :
      <input class="long" type= "text" name= "intern_position" />&emsp;&emsp;&emsp;&emsp;&emsp;<br><br>

      <label>ชื่อของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน/สหกิจ :
      <input class="long" type= "text" name= "person1_name" />&emsp;&emsp;<br><br>

      <label>ตำแหน่งของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน/สหกิจ :
      <input  type= "text" name= "pos_ps1" />&emsp;&emsp;&emsp;&emsp;<br><br>

      <label>&nbsp;ชื่อสถานประกอบการ :
      <input class="long" type= "text" name= "company_name" />&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<br><br>
      <label>สถานที่ตั้งเลขที่ :
      <input type= "text" name= "house_number" />
      <label>&emsp;&emsp;&emsp;&emsp;ถนน :
      <input type= "text" name= "street" /><br><br>
      &ensp;&ensp;&ensp;<label>ตำบล/แขวง :
      <input type= "text" name= "districts" />
      <label>&ensp;&emsp;อำเภอ/เขต :
      <input type= "text" name= "amphures" /><br><br>
      &ensp;<label>จังหวัด :
      <input type= "text" name= "provinces" /><br><br>
      &emsp;<label>รหัสไปรษณีย์ :
      <input type= "text" name= "postcode" />&emsp;&emsp;&emsp;<br><br>
      
      
      <label>ชื่อผู้ประสานงาน :
      <input class="long" type= "text" name= "HR_name" />&emsp;&emsp;&emsp;&nbsp;<br><br>
      &emsp;<label>เบอร์โทรศัพท์ :
      <input type= "text" name= "HR_number" />&emsp;&emsp;&emsp;<br><br>
      &emsp;&emsp;&emsp;<label>อีเมล :
      <input class="long" type= "text" name= "email" />&emsp;&nbsp;<br><br>

      <label for="start_intern">ระยะฝึกงานตั้งเเต่วันที่ :</label>
      <input type="date" name="start_intern">&emsp;
      <label for="end_intern">ถึงวันที่ :</label>
      <input type="date" name="end_intern">&emsp;&emsp;&emsp;&emsp;&emsp;<br><br>
      <label>จำนวนค่าตอบแทน (บาท/วัน หรือ บาท/เดือน) (หรือ ไม่มีค่าตอบแทน) :
      <input type= "text" name= "salary" />&emsp;&emsp;<br><br>

      <label>มีที่พักให้หรือไม่<br><br>
      <input type="radio" required name="room" value="มี"> มี&emsp;<br><br>
      <input type="radio" name="room" value="ไม่มี"> ไม่มี<br><br>

      <p>
        <input type="hidden" name="controller" value="submitDoc" />
        <button class="bt1"type= "submit" name= "action"  value= "add" >Send</button>
        &emsp;<button class="bt2"type= "reset" name= "action"  value= "reset" >Cancel</button>
      </p>
    </form>
  </div>


</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');



.container {
  height: 1600px;
  width: 1100px;
  margin-left: 30em;
  margin-right: auto;
  text-align: center;
  font-size: 20px;
  background-image: linear-gradient(#c5e3ec, white);
  border-style: solid;
  border-width: 1px;
  border-color: grey;
  border-radius: 30px;
  font-family: 'K2D', sans-serif;
}

input {
  font-family: 'K2D', sans-serif;
  border-radius: 10px;
  width: 250px;
  text-align: center;
}


.title {
  font-size: 18px;
  text-align: left;
  margin-left: 2em;
  margin-right: 2em;
}


.grid {
  display: grid;
  grid-template-columns: 1100px 4000px;
  grid-gap: 10px;

}

h3 {
  font-size: 28px;
  color: #34a0a4;
  text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px;
}

button.bt1 {
  font-family: 'K2D', sans-serif;
  color: white;
  font-weight: bold;
  padding: 22px;
  background-image: linear-gradient(to right, #168aad, #76c893);
  border: none;
  border-radius: 30px;
  font-weight: 600;
  margin-top: 20px;
  width: 100px;
}

button.bt2 {
  font-family: 'K2D', sans-serif;
  color: white;
  font-weight: bold;
  padding: 1em;
  background-image: linear-gradient(to right, #FF2400, #FF9900);
  border: none;
  border-radius: 30px;
  font-weight: 600;
  margin-top: 20px;
  width: ;
}

button:hover {
  background-color: #76c893;
}

</style>
</html>
