<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Буxоро давлат университети ректори А.А. Тулагановнинг виртуал кабулхонаси</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css" /> 
   <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery.validVal.js"></script>
		<script type="text/javascript" src="js/jquery.validVal-customValidations.js"></script>
		<script type="text/javascript" src="js/jquery.validVal-debugger.js"></script>
		<script type="text/javascript" src="js/jquery.mask.js"></script>
		
		<script type="text/javascript">
			$(function() {
				$('form[name="data-sendform"]').validVal().validValDebug();
			});
		</script>

	
	<script>
		
	    
		
		
            $(document).ready(function(){
            	
            
            $(".mycapcheck").text(Math.round(Math.random(1,9)*100000));

            $(".yuborish").click(function(){
				
	            $("#yuborish").ajaxForm(options);
	 
	 				   //fio textbox
            
            //hudud textbox
            if ($('#hudud option:selected').text()=="" || $('#hudud option:selected').text()=="Вилоятни танланг ...")
            {
                $("#hudud").css("border", "2px solid #FF0000");
            }
            else
            {
                $("#hudud").css("border", "1px solid #ccc");
            }
            //tuman textbox
            if ($('#tuman option:selected').text()=="")
            {
                $("#tuman").css("border", "2px solid #FF0000");
            }
            else
            {
                $("#tuman").css("border", "1px solid #ccc");
            }
            


           
                var myData = 'login='+ $("#fname").val()+'&hudud='+ $('#hudud option:selected').text()+'&tuman='+ $('#tuman option:selected').text()+'&manzil='+ $("#manzil").val()+'&telefon='+ $("#telefon").val()+'&yil='+ $("#yil").val()+'&matn='+ $("#matn").val()+'&mazmun='+ $('input[name=ariza]:checked').val()+'&ip='+ myip+'&jinsi='+ $('#jinsi option:selected').text()+'&email='+ $("#email").val(); //build a post data structure
                jQuery.ajax({
			    type: "POST", // HTTP method POST or GET
			    url: "data-send.php", //Where to make Ajax calls
                scriptCharset: "utf-8" ,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                dataType:"text", // Data type, HTML, json etc.
			    data:myData, //Form variables
			    success:function(data){
                    window.location.replace("data-send.php");
			    },
			    error:function (xhr, ajaxOptions, thrownError){
				//$("#loginbutton").show(); //show submit button

				    alert(thrownError);
			    }
			    });
            
			
			


            });

           



            $("#hudud").change(function()
            {
                var selectedValue = parseInt(jQuery(this).val());

                //Depend on Value i.e. 0 or 1 respective function gets called.
                switch(selectedValue){
                case 0:
                    $("#tuman").html("");
                    break;
                case 1:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Олтинкўл тумани</option>');
                    $("#tuman").append('<option>Андижон тумани</option>');
                    $("#tuman").append('<option>Асака тумани</option>');
                    $("#tuman").append('<option>Балиқчи тумани</option>');
                    $("#tuman").append('<option>Бўз тумани</option>');
                    $("#tuman").append('<option>Булоқбоши тумани</option>');
                    $("#tuman").append('<option>Жалолқудуқ тумани</option>');
                    $("#tuman").append('<option>Избоскан тумани</option>');
                    $("#tuman").append('<option>Қўрғонтепа тумани</option>');
                    $("#tuman").append('<option>Марҳамат тумани</option>');
                    $("#tuman").append('<option>Пахтаобод тумани</option>');
                    $("#tuman").append('<option>Улуғнор тумани</option>');
                    $("#tuman").append('<option>Хўжаобод тумани</option>');
                    $("#tuman").append('<option>Шахрихон тумани</option>');
                    $("#tuman").append('<option>Андижон шаҳар</option>');
                    $("#tuman").append('<option>Хонобод шаҳар</option>');
                    break;
                case 2:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Олот тумани</option>');
                    $("#tuman").append('<option>Бухоро тумани</option>');
                    $("#tuman").append('<option>Вобкент тумани</option>');
                    $("#tuman").append('<option>Ғиждувон тумани</option>');
                    $("#tuman").append('<option>Жондор тумани</option>');
                    $("#tuman").append('<option>Когон тумани</option>');
                    $("#tuman").append('<option>Қоракўл тумани</option>');
                    $("#tuman").append('<option>Қоровулбозор тумани</option>');
                    $("#tuman").append('<option>Пешку тумани</option>');
                    $("#tuman").append('<option>Ромитан тумани</option>');
                    $("#tuman").append('<option>Шофиркон тумани</option>');
                    $("#tuman").append('<option>Бухоро шаҳар</option>');
                    break;
                case 3:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Арнасой тумани</option>');
                    $("#tuman").append('<option>Бахмал тумани</option>');
                    $("#tuman").append('<option>Ғаллаорол тумани</option>');
                    $("#tuman").append('<option>Жиззах тумани</option>');
                    $("#tuman").append('<option>Дўстлик тумани</option>');
                    $("#tuman").append('<option>Зомин тумани</option>');
                    $("#tuman").append('<option>Зарбдор тумани</option>');
                    $("#tuman").append('<option>Зафаробод тумани</option>');
                    $("#tuman").append('<option>Мирзачўл тумани</option>');
                    $("#tuman").append('<option>Пахтакор тумани</option>');
                    $("#tuman").append('<option>Фориш тумани</option>');
                    $("#tuman").append('<option>Янгиобод тумани</option>');
                    $("#tuman").append('<option>Жиззах шаҳар</option>');
                    break;
                case 4:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Ғузор тумани</option>');
                    $("#tuman").append('<option>Деҳқонобод тумани</option>');
                    $("#tuman").append('<option>Қамаши тумани</option>');
                    $("#tuman").append('<option>Қарши тумани</option>');
                    $("#tuman").append('<option>Косон тумани</option>');
                    $("#tuman").append('<option>Касби тумани</option>');
                    $("#tuman").append('<option>Китоб тумани</option>');
                    $("#tuman").append('<option>Миришкор тумани</option>');
                    $("#tuman").append('<option>Муборак тумани</option>');
                    $("#tuman").append('<option>Нишон тумани</option>');
                    $("#tuman").append('<option>Чироқчи тумани</option>');
                    $("#tuman").append('<option>Шахрисабз тумани</option>');
                    $("#tuman").append('<option>Яккабоғ тумани</option>');
                    $("#tuman").append('<option>Қарши шаҳар</option>');
                    break;
                case 5:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Конимех тумани</option>');
                    $("#tuman").append('<option>Кармана тумани</option>');
                    $("#tuman").append('<option>Қизилтепа тумани</option>');
                    $("#tuman").append('<option>Навбаҳор тумани</option>');
                    $("#tuman").append('<option>Нурота тумани</option>');
                    $("#tuman").append('<option>Томди тумани</option>');
                    $("#tuman").append('<option>Учқудуқ тумани</option>');
                    $("#tuman").append('<option>Хатирчи тумани</option>');
                    $("#tuman").append('<option>Зарафшон шаҳар</option>');
                    $("#tuman").append('<option>Навоий шаҳар</option>');
                    break;
                case 6:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Косонсой тумани</option>');
                    $("#tuman").append('<option>Мингбулоқ тумани</option>');
                    $("#tuman").append('<option>Наманган тумани</option>');
                    $("#tuman").append('<option>Норин тумани</option>');
                    $("#tuman").append('<option>Поп тумани</option>');
                    $("#tuman").append('<option>Тўрақўрғон тумани</option>');
                    $("#tuman").append('<option>Уйчи тумани</option>');
                    $("#tuman").append('<option>Учқўрғон тумани</option>');
                    $("#tuman").append('<option>Чортоқ тумани</option>');
                    $("#tuman").append('<option>Чуст тумани</option>');
                    $("#tuman").append('<option>Янгиқўрғон тумани</option>');
                    $("#tuman").append('<option>Наманган шаҳар</option>');
                    break;
                case 7:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Оқдарё тумани</option>');
                    $("#tuman").append('<option>Булунғур тумани</option>');
                    $("#tuman").append('<option>Жомбой тумани</option>');
                    $("#tuman").append('<option>Иштихон тумани</option>');
                    $("#tuman").append('<option>Каттақўрғон тумани</option>');
                    $("#tuman").append('<option>Қўшработ тумани</option>');
                    $("#tuman").append('<option>Нарпай тумани</option>');
                    $("#tuman").append('<option>Нуробод тумани</option>');
                    $("#tuman").append('<option>Пайариқ тумани</option>');
                    $("#tuman").append('<option>Пастдарғом тумани</option>');
                    $("#tuman").append('<option>Пахтачи тумани</option>');
                    $("#tuman").append('<option>Самарқанд тумани</option>');
                    $("#tuman").append('<option>Тайлоқ тумани</option>');
                    $("#tuman").append('<option>Ургут тумани</option>');
                    $("#tuman").append('<option>Каттақўрғон шаҳар</option>');
                    $("#tuman").append('<option>Самарқанд шаҳар</option>');
                    break;
                case 8:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Олтинсой тумани</option>');
                    $("#tuman").append('<option>Ангор тумани</option>');
                    $("#tuman").append('<option>Бойсун тумани</option>');
                    $("#tuman").append('<option>Денов тумани</option>');
                    $("#tuman").append('<option>Жарқўрғон тумани</option>');
                    $("#tuman").append('<option>Қизириқ тумани</option>');
                    $("#tuman").append('<option>Қумқўрғон тумани</option>');
                    $("#tuman").append('<option>Музработ тумани</option>');
                    $("#tuman").append('<option>Сариосиё тумани</option>');
                    $("#tuman").append('<option>Термиз тумани</option>');
                    $("#tuman").append('<option>Узун тумани</option>');
                    $("#tuman").append('<option>Шеробод тумани</option>');
                    $("#tuman").append('<option>Шўрчи тумани</option>');
                    $("#tuman").append('<option>Термиз шаҳар</option>');
                    break;
                case 9:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Оқолтин тумани</option>');
                    $("#tuman").append('<option>Боёвут тумани</option>');
                    $("#tuman").append('<option>Гулистон тумани</option>');
                    $("#tuman").append('<option>Мирзаобод тумани</option>');
                    $("#tuman").append('<option>Сайхунобод тумани</option>');
                    $("#tuman").append('<option>Сардоба тумани</option>');
                    $("#tuman").append('<option>Сирдарё тумани</option>');
                    $("#tuman").append('<option>Ховос тумани</option>');
                    $("#tuman").append('<option>Гулистон шаҳар</option>');
                    $("#tuman").append('<option>Ширин шаҳар</option>');
                    $("#tuman").append('<option>Янгиер шаҳар</option>');
                    break;
                case 10:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Оққўрғон тумани</option>');
                    $("#tuman").append('<option>Оҳангарон тумани</option>');
                    $("#tuman").append('<option>Бекобод тумани</option>');
                    $("#tuman").append('<option>Бўстонлиқ тумани</option>');
                    $("#tuman").append('<option>Бўка тумани</option>');
                    $("#tuman").append('<option>Зангиота тумани</option>');
                    $("#tuman").append('<option>Қибрай тумани</option>');
                    $("#tuman").append('<option>Қуйичирчиқ тумани</option>');
                    $("#tuman").append('<option>Паркент тумани</option>');
                    $("#tuman").append('<option>Пискент тумани</option>');
                    $("#tuman").append('<option>Ўртачирчиқ тумани</option>');
                    $("#tuman").append('<option>Чиноз тумани</option>');
                    $("#tuman").append('<option>Юқоричирчиқ тумани</option>');
                    $("#tuman").append('<option>Янгийўл тумани</option>');
                    $("#tuman").append('<option>Олмалиқ шаҳар</option>');
                    $("#tuman").append('<option>Ангрен шаҳар</option>');
                    $("#tuman").append('<option>Бекобод шаҳар</option>');
                    $("#tuman").append('<option>Чирчиқ шаҳар</option>');
                    break;
                case 11:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Олтиариқ тумани</option>');
                    $("#tuman").append('<option>Боғдод тумани</option>');
                    $("#tuman").append('<option>Бешариқ тумани</option>');
                    $("#tuman").append('<option>Бувайда тумани</option>');
                    $("#tuman").append('<option>Данғара тумани</option>');
                    $("#tuman").append('<option>Қува тумани</option>');
                    $("#tuman").append('<option>Қўштепа тумани</option>');
                    $("#tuman").append('<option>Риштон тумани</option>');
                    $("#tuman").append('<option>Сўх тумани</option>');
                    $("#tuman").append('<option>Тошлоқ тумани</option>');
                    $("#tuman").append('<option>Ўзбекистон тумани</option>');
                    $("#tuman").append('<option>Учкўприк тумани</option>');
                    $("#tuman").append('<option>Фарғона тумани</option>');
                    $("#tuman").append('<option>Фурқат тумани</option>');
                    $("#tuman").append('<option>Ёзёвон тумани</option>');
                    $("#tuman").append('<option>Қўқон шаҳар</option>');
                    $("#tuman").append('<option>Қувасой шаҳар</option>');
                    $("#tuman").append('<option>Марғилон шаҳар</option>');
                    $("#tuman").append('<option>Фарғона шаҳар</option>');
                    break;
                case 12:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Боғот тумани</option>');
                    $("#tuman").append('<option>Гурлан тумани</option>');
                    $("#tuman").append('<option>Қўшкўпир тумани</option>');
                    $("#tuman").append('<option>Урганч тумани</option>');
                    $("#tuman").append('<option>Хазорасп тумани</option>');
                    $("#tuman").append('<option>Хонқа тумани</option>');
                    $("#tuman").append('<option>Хива тумани</option>');
                    $("#tuman").append('<option>Шовот тумани</option>');
                    $("#tuman").append('<option>Янгибозор тумани</option>');
                    $("#tuman").append('<option>Янгиариқ тумани</option>');
                    $("#tuman").append('<option>Урганч шаҳар</option>');
                    break;
                case 13:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Амударё тумани</option>');
                    $("#tuman").append('<option>Беруний тумани</option>');
                    $("#tuman").append('<option>Қораўзак тумани</option>');
                    $("#tuman").append('<option>Кегейли тумани</option>');
                    $("#tuman").append('<option>Қўнғирот тумани</option>');
                    $("#tuman").append('<option>Қонликўл тумани</option>');
                    $("#tuman").append('<option>Мўйноқ тумани</option>');
                    $("#tuman").append('<option>Нукус тумани</option>');
                    $("#tuman").append('<option>Тахтакўпир тумани</option>');
                    $("#tuman").append('<option>Тўрткўл тумани</option>');
                    $("#tuman").append('<option>Хўжайли тумани</option>');
                    $("#tuman").append('<option>Чимбой тумани</option>');
                    $("#tuman").append('<option>Шуманай тумани</option>');
                    $("#tuman").append('<option>Элликқалъа тумани</option>');
                    $("#tuman").append('<option>Нукус шаҳар</option>');
                    break;
                case 14:
                    $("#tuman").html("");
                    $("#tuman").append('<option>Олмазор тумани</option>');
                    $("#tuman").append('<option>Бектемир тумани</option>');
                    $("#tuman").append('<option>Миробод тумани</option>');
                    $("#tuman").append('<option>Мирзо-Улуғбек тумани</option>');
                    $("#tuman").append('<option>Сирғали тумани</option>');
                    $("#tuman").append('<option>Учтепа тумани</option>');
                    $("#tuman").append('<option>Яшнобод тумани</option>');
                    $("#tuman").append('<option>Чилонзор тумани</option>');
                    $("#tuman").append('<option>Шайхонтохур тумани</option>');
                    $("#tuman").append('<option>Юнусобод тумани</option>');
                    $("#tuman").append('<option>Яккасарой тумани</option>');
                    break;

                }
            });

    });

    </script>  

<style type="text/css" media="all">
			* {
				color: #000;
			}


			input[type='text'],
			input[type='password'],
			input[type='number'],
			input[type='email'],
			textarea, select
			{ 
				background-color: #fff; 
				border: solid 1px #999;
				width: 97%;
				padding: 12px 10px;
				float: left;
			}
			textarea
			{
				height: 150px; 
				width: 370px
			}
			select
			{ 
				width: 70%;
        padding: 12px 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
       -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        border-radius: 5px;
			}

			input[maxlength='3'] {	width: 30px;	}
			input[maxlength='4'] {	width: 40px;	}
			input[maxlength='5'] {	width: 45px;	}

			input[type='text'].focus,
			input[type='password'].focus,
			input[type='number'].focus,
			input[type='email'].focus,
			textarea.focus,
			select.focus
			{ 
				border-color: #000; 
			}
			input[type='text'].inactive,
			input[type='number'].inactive,
			input[type='email'].inactive,
			textarea.inactive,
			select.inactive,
			option.inactive
			{
				color: #999;
				font-style: italic;
			}
			input[type='text'].invalid,
			input[type='password'].invalid,
			input[type='number'].invalid,
			input[type='email'].invalid,
			textarea.invalid, select.invalid
			{
				border-color: red;
			}
			
			span.checkbox-container
			{
				border: 1px solid transparent;
				display: block;
				width: 145px;
				padding: 2px 5px;
				float: left;
			}
			span.checkbox-container.invalid
			{
				border-color: red;
			}

			select.inactive option
			{
				color: #000;
				font-style: normal;
			}
			select option.inactive,
			select.inactive option.inactive
			{
				color: #999;
				font-style: italic;
			}
			
			input[type='submit'] 
			{
				margin: 0 20px 0 90px;
			}


			body, p, input
			{
				font-family: Arial, Helvetica, sans-serif;
		
				
			}
			h2 
			{
				color: #999;
			}
			body > div 
			{
				width: 740px;
				margin: 50px auto 0 auto;
				overflow: hidden;
			}
			.column
			{
				padding: 30px 0 50px 0;
				margin: 20px 0;
				width: 350px;
				float: left;
			}
			.column.right
			{
				float: right;
			}
			.column.left
			{
				border-right: 1px solid #ccc;
			}
			.column div
			{
				padding: 2px 0;
			}
			.column div:after
			{
				content: '';
				display: block;
				clear: both;
			}
			label
			{
				width: 150px;
				padding: 5px 0 0 15px;
				display: block;
				float: left;
			}
		</style>
		
		
		
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
        <div class="mainform">
            
			<form action="data-send.php"  method="POST" name="data-sendform" id="data-sendform" role="form" class="form-inline"  enctype="multipart/form-data" >
			<div class="formatitle">Мурожаатни юборинг</div>
            <div class="mform" >
                Юлдузча (*) билан белгиланган сатрлар толдирилиши мажбурий  <br/><br/>
                <table align="center" width="100%">
                    <tr>
                        <td width="30%" align="right" height="50"><b>Ф.И.Ш.*</b></td><td width="50%" height="50"><input class="required" type="text" id="fname" name="fname"></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Ҳудуд*</b></td><td width="50%" height="50">
                            <select class="required placeholder" id="hudud" name="hudud"  onchange="document.getElementById('hudud_text').value=this.options[this.selectedIndex].text">
                                <option value="0">Вилоятни танланг ...</option>
                                <option value="1">Андижон вилояти</option>
                                <option value="2">Бухоро вилояти</option>
                                <option value="3">Жиззах вилояти</option>
                                <option value="4">Қашқадарё вилояти</option>
                                <option value="5">Навоий вилояти</option>
                                <option value="6">Наманган вилояти</option>
                                <option value="7">Самарқанд вилояти</option>
                                <option value="8">Сурхондарё вилояти</option>
                                <option value="9">Сирдарё вилояти</option>
                                <option value="10">Тошкент вилояти</option>
                                <option value="11">Фарғона вилояти</option>
                                <option value="12">Хоразм вилояти</option>
                                <option value="13">Қорақалпоғистон Республикаси</option>
                                <option value="14">Тошкент шаҳри</option>
                            </select>
							
							<input id="hudud_text" type = "hidden" name = "hudud_text" value = "" />

							
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Туман (шаҳар)*</b></td><td width="50%" height="50">
                        <select class="required placeholder" id="tuman" name="tuman">

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Манзил*</b></td><td width="50%" height="50"><input class="required" type="text" id="manzil" name="manzil"></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Электрон почта</b></td><td width="50%" height="50"><input id="i3" name="email" type="text" value="" class="required email" size="24" /></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Телефон*</b></td><td width="50%" height="50"><input type="text" class="required" name="phone" id="phone" placeholder="+998XX XXXXXXX"></td>
                    </tr>																																												
                    <tr>
                        <td width="30%" align="right" height="50"><b>Жинс*</b></td><td width="50%" height="50">
                        <select class="forminput" id="jinsi" name="jinsi">
                                <option value="0">Эркак</option>
                                <option value="1">Аёл</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Туғилган йилингиз*</b></td><td width="50%" height="50">
                        	<select id="byear" name="byear" class="required placeholder">
                        		 <option value="0">Тугилган йилингиз ...</option>
                        	<script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                             for(var i = 1900; i < year+1; i++){
	                           document.write('<option value="'+i+'">'+i+'</option>');
                              }
                          </script>
                          </select>
                          </td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Мурожаат мазмуни*</b></td><td width="50%" height="50">
                          <input type="radio" name="ariza" value="ariza"> Ариза &nbsp;&nbsp;&nbsp;
                          <input type="radio" name="ariza" value="shikoyat"> Шикоят &nbsp;&nbsp;&nbsp;
                          <input type="radio" name="ariza" value="taklif"> Таклиф
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" align="justify" height="50" colspan="2">Мурожаатингиз тезкор равишда ҳал этилишини истасангиз, ҳар бир масала бўйича алоҳида мурожаат йўллашингизни ҳамда мазкур мурожаатни лўнда, оддий ва равон тилда баён этишингизни сўраймиз! </td>
                    </tr>
                    <tr>
                        <td width="30%" valign="top" align="right" height="50"><b>Мурожаат матни*</b></td><td width="50%" height="50"><textarea class="required" id="message" name="message" cols="40" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Файлни танланг</b></td><td width="50%" height="50"><input type="file" id="uploadfile" name="uploadfile" multiple="multiple" /></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Расмдаги сонларни киритинг*</b></td><td width="50%" height="50" align="left"><div class="mycapcheck" id="mycapcheck">32145</div></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"></td><td width="50%" height="50" align="left"><input class="required" type="text" id="mycapcheck" name="mycapcheck"></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right" height="50"><b>Оммавий оферта билан танишдим*</b></td><td width="50%" height="50" align="left"><input type="checkbox" name="oferta" value="oferta"  class="requiredgroup:cbx"></td>
                    </tr>
                </table> 
                   <input class="btn-info"  type="submit" name="submit" id="submit" value="Жўнатиш"/>
                
				    <!-- <div class="yuborish" id="yuborish" name="yuborish"><b>Жўнатиш</b></div> -->
            </div>

    </form>


            <div class="malumot">
                <p align="center"><b>Оммавий оферта </b></p>
                <p align="justify">
                        &nbsp;Ҳурматли фойдаланувчи! <br />
           Сизга Бухоро давлат университети ректорига бевосита электрон тарзда мурожаатларни юбориш имконияти тақдим этилмоқда. Шу билан бирга, Сизнинг юбораётган мурожаатингиз расмий мақомга эга эканлигини ҳам эслатиб қўймоқчимиз.
           <br /> Шу сабабли, Сиздан қуйидагиларни унутмаслигингизни сўраймиз: <br />
            1. Жисмоний шахс сифатида мурожаат йўлласангиз фамилиянгиз (исмингиз, отангизнинг исми), яшаш жойингиз тўғрисидаги маълумотлар кўрсатилган ва мурожаатингиз моҳияти баён этилган бўлиши шарт. Юридик шахс сифатида мурожаат йўлласангиз юридик шахснинг тўлиқ номи, унинг жойлашган жойи (почта манзили) тўғрисидаги маълумотлар кўрсатилган ва мурожаатнинг моҳияти баён этилиши талаб этилади.<br />
            2. Алоҳида эътибор беринг! Туҳмат, ҳақорат сўзлар ишлатилган ва ёлғон хабар берувчи мурожаатларни тақдим этиш мумкин эмас.<br />
  3. Шунингдек, қуйидаги ҳолатларда мурожаатларингиз рад этилиши мумкинлигини эслатиб ўтмоқчимиз:<br />
- одобсизлик мазмунидаги мурожаатлар (уятсиз ёхуд ҳақоратли иборалар, таҳдидлар, мантиқ ва маъноси бўлмаган таклифлар ва шунга ўхшаш мурожаатлар);<br />
- мурожаат матнида тушунарсиз қисқартиришлар ёки реклама материаллари мавжуд бўлган, таркибида аниқ аризалар, шикоятлар ёки таклифлар бўлмаган мурожаатлар;<br />
            4. Шунингдек, фойдаланувчининг бир неча бор битта масала бўйича жавоб берилган мурожаатини қайта юборилганда агар унда янги важлар ёки ҳолатлар келтирилмаган бўлса, кўриб чиқилмайди.<br />
            Мазкур шартларнинг барчаси Ўзбекистон Республикасининг амалдаги қонунчилигидан келиб чиққан ҳолда белгиланган.
                </p>
                

           </div>
            <input class="btn-info"  type="submit" name="submit" id="submitcheck" value="Мурожаат натижасини текшириш"/>
            


        </div>
        <div class="bottom">
            © 2016 – Бухоро давлат университети <a href="http://atm.buxdu.uz">"Ахборот технологиялари"</a> маркази
        </div>
    </div>
</body>

</html>