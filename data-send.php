<?php 
require "db.php" ;

$fio=$_POST['fname'];
$hudud=$_POST['hudud_text'];
$tuman=$_POST['tuman'];
$manzil = $_POST['manzil'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$jinsi = $_POST['jinsi'];
$byear = $_POST['byear'];
$mturi = $_POST['ariza'];
$subject="Kontrakt qimmaat";
$message=$_POST['message'];

$uplstatus=null;
$data=null;



$uploaddir = 'uploads/';

//$name=$fio.'_'.$subject.'_'.$uploadfile;
@mkdir("uploads", 0777);
// Копируем файл из каталога для временного хранения файлов:
if (!empty($_FILES['uploadfile']['name']))  {
	
$uploadfile = $uploaddir.$fio.'_'.$subject.'_'.date("_Y-m-d_").basename($_FILES['uploadfile']['name']);
@copy($_FILES[uploadfile] [tmp_name], $_FILES[uploadfile] [name]);
} 

// Выводим информацию о загруженном файле:
/* echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";

*/


$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
$max=10; 
$size=StrLen($chars)-1; 
$password=null; 
 while($max--) 
    $password.=$chars[rand(0,$size)]; 

$dbstatus=null;
$sql11 = "INSERT INTO zayavka(fio,hudud,tuman,manzil,email,telefon,jinsi,byear,mturi,subject,message,date,fileurl,check_id) VALUES  ('$fio','$hudud','$tuman','$manzil','$email','$telefon','$jinsi','$byear','$mturi','$subject','$message',NOW(),'$uploadfile',' $password')";

$res11 = mysqli_query($conn,$sql11) or die("Error: ".mysqli_error($conn)) ;

$dbstatus='<h4>Ma`lumotlar bazaga saqlandi</h4><br>';

?>


<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Буxоро давлат университети ректори А.А. Тулагановнинг виртуал кабулхонаси</title>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script src="js/jquery.js"></script>
<script src="jquery-latest.js"></script>


</head>

<body>


<div class="top-head">
<div class="testrejim">
<span class="test">Диққат ! Портал тест режимида ишламоқда !</span>
</div>
<div class="headban">
<div class="row1"><img class="row1" src="images/buxduloguz.png" alt="Buxoro davlat universiteti" /></div>
<div class="banner1"><img  height="120px" src="images/uz-banner.png" alt="" />  </div>
<div class="res-title">
<p class="title-sec">Бухоро давлат университети ректори</p> <p style="text-align: center; color: #000000; font-size: 20px;">Тулаганов Абдукабил Абдунабиевичнинг</p><p style="text-align: center; color:#2F6EB1; font-weight: bolder; font-size: 18px;"> виртуал қабулхонаси</p>
</div>


 



</div>
<div class="simp">
Сизда ҳал этилмаган масалалар/муаммолар, ариза, шикоят ёки таклифлар борми? У ҳолда мурожаатингизни тўғридан-тўғри Бухоро давлат университети ректорига юборишингиз мумкин. 
</div>
<div class="buxdubuild">
<div class="buxdubuild1"><img class="buxdubuild1" height="150px" src="images/buxdu.jpg" alt="Buxoro davlat universiteti" /></div>
<div class="buxdutext">Бухоро давлат университети ректорига ариза, таклиф ва шикоятларни<br> 0 (365) 221-27-64 рақамига қўнғироқ қилган ҳолда юбориш мумкин  </div>
</div>


<div class="mainformcheck">
            <div class="formatitlecheck">Диққат!!! Қуйидаги маълумотларни сақлаб олинг</div><div class="forma">   
            	 <table align="center" width="100%">        
            	 	<tr>    <td width="30%" align="right" height="50"><b>Мурожаат рақами:</b></td>
            	 		<td width="50%" height="50">2-r/2016</td>  
            	 		 </tr>       
            	 			 <tr>            
            	 			 	<td width="30%" align="right" height="50"><b>Холатни текшириш коди:</b></td>
            	 			 	<td width="50%" height="50"><?php echo $password; ?></td>        
            	 			 	</tr>       
            	 			 		 <tr>   <td width="30%" align="right" height="50"><b>Мурожаат ҳолати:</b></td>
            	 			 		 	<td width="50%" height="50">Мурожаатингиз қабул қилинди</td> 
            	 			 		 	<tr>
            	 			 		 		<td>  
            	 				 		
            	 				 		<?php             	 				 		
            	 				 		 
            	 				 		   echo $dbstatus;            	 				 		
            	 				 		  ?>
            	 			 		 		  </td>
            	 			 		 		  <tr/>
            	 			 		 	 </tr>   
                  		 </table>  <div class="backindex"> <input type="button"  class="btn-info" value="Ортга" onclick="goindex()" /></div></div>  
                  		 	<div class="statuscheck"><b>Мурожаат натижасини текшириш</b></div>     
         	 </div>






      <script>
           function goindex(){
            window.location.href='index.php';
        }
            
   
    </script>



<div class="bottom">
© 2016 – Бухоро давлат университети <a href="http://atm.buxdu.uz">"Ахборот технологиялари"</a> маркази
</div>
</div>





</body>

</html>