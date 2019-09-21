<?php
   $day = strftime('%A');
   setlocale(LC_ALL, 'turkmen');
    $day = iconv('windows-1250','utf-8',$day);
  $wekday = "";
  switch($day){
  	 case 'Monday':
  	 $wekday = "1-nji gün";break;
  	 case 'Tuesday':
  	 $wekday = "2-nji gün";break;
  	 case 'Wednesday':
  	 $wekday = "3-nji gün";break;
  	 case 'Thursday':
  	 $wekday = "4-nji gün";break;
  	 case 'Friday':
  	 $wekday = "5-nji gün";break;
  	 case 'Saturday':
  	 $wekday = "6-nji gün";break;
      deafult : $wekday = "Dynch Gun!";
  }
  $gun = strftime("%d");
  $mon = strftime('%m');
  $year= strftime('%Y');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Spaklaryn Sanawy</title>
</head>
<style type="text/css">
	 *{padding:0;
	 	margin:0;
	 	text-align:center;
      font-family: 'Bookman Old Style';
	 }
	 #wrapper {
	 	 width:450px;
	 	 height:200px;
	 	 
	 	 margin:auto;
	     min-width:50px;
	 }
	 i {
	 	margin-left:5px;
	  float:right;
	  font-size:0.7em;
	   }
	 .type{
	 	 
	 	text-align:left;
	    color:;
	    background-color:;
	   
	 }
	body {
	background-color: #aa1;	 
	color:#000;
	} 
	#plus {color:red;}
	#footer {
	    font-size:0.8em;
	    color:#eee;
	   margin-top:300px;
    }
   div#yandex { 
     float:left;
	 border:1px solid #000;
	 width: 350px;
	 color:#fff;
	 background-color:#000;
    margin-top:100px;
   }
</style>
<body>
   <div id  = 'yandex'>
    <p style='color:#0aa;text-align:center;'> У кого есть <b>яндекс.денги</b> <br/>можете переводит!</p>
   <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">  
   <input type="hidden" name="receiver" value="410016740166972">  
   <input type="hidden" name="formcomment" value="Проект «Железный человек»: реактор холодного ядерного синтеза">  
   <input type="hidden" name="short-dest" value="Проект «Железный человек»: реактор холодного ядерного синтеза"> 
   <input type="hidden" name="label" value="$order_id">   
   <input type="hidden" name="quickpay-form" value="donate"> 
   <input type="hidden" name="targets" value="транзакция {order_id}">  
   <input type="hidden" name="sum" value="4568.25" data-type="number"><input type="hidden" name="comment" value="Хотелось бы получить дистанционное управление.">  
   <input type="hidden" name="need-fio" value="true">   
   <input type="hidden" name="need-email" value="true">   
   <input type="hidden" name="need-phone" value="false">   
   <input type="hidden" name="need-address" value="false"> 
   <label><input type="radio" name="paymentType" value="PC">Яндекс.Деньгами</label> 
   <label><input type="radio" name="paymentType" value="AC">Банковской картой</label> 
   <input type="submit" value="Перевести"></form>
   </div>
  <div id="wrapper">
 <div id="head">
   <h2 id="groupNum">Sapaklaryn Sanawy</h2>
     Bu gun: <h5><?= $wekday?></h5>   
 </div>
 <div id="plus"></div>
<div class = "group" id="k531">
<div class = 'type' id="Monday">
		1.<b>Marketing Nazaryeti.umumy</b><i>(mug:Atayew.C a:5103)</i><br/>
		2.<b>Onumleri Ondurmegin Yk.amaly</b><i>(mug:Yegenow.K a:5209)</i><br/>
		3.<b>Statistika.tejribe</b><i>(mug:Yazlyyew.M a:5209)</i>
	</div>
	<div class ="type" id="Tuesday">
	    1.<b>Kadalashdyrysh.amaly</b><i>(mug:Akmyradowa.M a:5209)</i><br/>
	    2.<b><u>Jandarlardan.O.O.E.M.amaly</u></b><i>(mug:Kakalyyewa.G a:5107)</i><br/>
	    |m|:Sosiologiya.amaly<i>|Durdygylyjowa.A a:5209|</i><br/>
	    3.<b>Statistika.umumy</b><i>(mug:Yazlyyew.M a:5219)</i>
	</div>
	<div class ="type" id="Wednesday">
		1.<b><u>Marketing Nazaryeti.umumy</u></b><i>|Atayew.C a:5103|</i><br/>
		|m|:Kadalashdyrysh.umumy<i>|Tachmuhammedow.G a:5219|</i><br/>
        2.<b>Ahtimallyk Nazaryeti.amaly</b><i>|mug:Garryyew.A a:5109|</i><br/>
        3.<b>Menejment.amaly</b><i>|mug:Durdyyewa.J a:5109|</i><br/>
        4.<b>Halypa Sagady.</b><i>(a:5219)</i>	
  	</div>
	<div class ="type" id="Thursday">
	    1.<b>Ahtimallyk Nazaryeti.umumy</b><i>(mug:Garryyew.A a:5218)</i><br/>
		2.<b>Soliologiya.umumy</b><i>(mug:Germanowa.T a:5218)</i><br/>
        3.<b>Onumleri Ondurmegin Yk.umumy</b><i>(mug:Mollayew.M a:5103)</i>
	</div>
	<div class ="type" id="Friday">
		1.<b>MikroYkdysadyyet.umumy</b><i>(mug:Saryyewa.M a:5220)</i><br/>
		2.<b>Menejment.umumy</b><i>(mug:Nabatowa.A a:5220)</i><br/>
		3.<b>MikroYkdysadyyet.amaly</b><i>(mug:Bekiyewa.A a:5209)</i><br/>
	</div>
	<div class ="type" id="Saturday">
		1.<b>Jandarlardan.O.O.E.M.amaly</b><i>(mug:Kakalyyewa.G a:5107)</i><br/>
		2.<b>Jandarlardan.O.O.E.M.amaly</b><i>(mug:Kakalyyewa.G a:5107)</i><br/>
	    3.<b>Marketing Nazaryeti.amaly</b><i>(mug:Guljanow.P a:5109)</i>
	</div>

</div>
 <div class = "group" id="k532">
<div class = 'type' id="Monday">
		1.<b>Marketing Nazaryeti.umumy</b><i>(mug:Atayew.C a:5103)</i><br/>
		2.<b>Menejment.amaly</b><i>|mug:Durdyyewa.J a:5201|</i><br/>
		3.<b>MikroYkdysadyyet.amaly</b><i>(mug:Bekiyewa.A a:5201)</i>
	</div>
	<div class ="type" id="Tuesday">
	    1.<b><u>Marketing Nazaryeti.amaly</u></b><i>(mug:Guljanow.P a:5201)</i><br/>
	    |m|:Sosiologiya.amaly<i>|Durdygylyjowa.A a:5201|</i><br/>
	    2.<b>Dokma O.A.O.E.amaly</b><i>(mug:Atayew.C a:5106)</i><br/>
	    3.<b>Marketing Nazaryeti.amaly</b><i>(mug:Guljanow.P a:5201)</i>
	</div>
	<div class ="type" id="Wednesday">
		1.<b><u>Marketing Nazaryeti.umumy</u></b><i>|Atayew.C a:5103|</i><br/>
		|m|:Kadalashdyrysh.umumy<i>|Tachmuhammedow.G a:5219|</i><br/>
        2.<b><u>Dokma O.A.O.E.amaly</u></b><i>(mug:Atayew.C a:5106)</i><br/>
        3.<b>Statistika.amaly</b><i>(mug:Atayewa.A a:5201)</i><br/>
        4.<b>Halypa Sagady.</b><i>(a:5201)</i>	
  	</div>
	<div class ="type" id="Thursday">
	    1.<b>Ahtimallyk Teoriasy.umumy</b><i>(mug:Garryyew.A a:5218)</i><br/>
		2.<b>Soliologiya.umumy</b><i>(mug:Germanowa.T a:5218)</i><br/>
        3.<b>Onumleri Ondurmegin Yk.umumy</b><i>(mug:Mollayew.M a:5103)</i>
	</div>
	<div class ="type" id="Friday">
		1.<b>MikroYkdysadyyet.umumy</b><i>(mug:Saryyewa.M a:5220)</i><br/>
		2.<b>Menejment.umumy</b><i>(mug:Nabatowa.A a:5220)</i><br/>
		3.<b><u>Dokma O.A.O.E.amaly</u></b><i>(mug:Allanazarowa.C a:5206)</i><br/>
	</div>
	<div class ="type" id="Saturday">
		1.<b>Kadalashdyrysh.amaly</b><i>(mug:Akmyradowa.M a:5201)</i><br/>
		2.<b>Ahtimallyk Teoriasy.amaly</b><i>(mug:Garryyew.A a:5201)</i><br/>
	    3.<b>Onumleri Ondurmegin Yk.amaly</b><i>(mug:Yegenow.K a:5201)</i>
	</div>
</div>
<div class = "group" id="k533">
  <div class = 'type' id="Monday">
		1.<b>Hojalyk H.O.E.amaly</b><i>(mug:Kadyrow.K a:5202)</i><br/>
		2.<b>Iymit O.S.amaly</b><i>(mug:Turapow.S a:5202)</i><br/>
		3.<b>Menejment.amaly</b><i>(mug:Durdyyewa.J a:5202)</i>
	</div>
	<div class ="type" id="Tuesday">
	    1.<b><u>Iymit O.S.amaly</u></b><i>(mug:Turapow.S a:5202)</i><br/>
	    |m|:Dokma O.E.M<i>|Hojamgulyyewa.B a:5202|</i><br/>  
	    2.<b>Dokma O.E.M</b><i>|Hojamgulyyewa.B a:5202|</i><br/>
	    3.<b>Statistika.umumy</b><i>(mug:Yazlyyew.M a:5219)</i>
	</div>
	<div class ="type" id="Wednesday">
		1.<b><u>Hojalyk H.O.E.amaly</u></b><i>(mug:Kadyrow.K a:5202)</i><br/>
		|m|:Kadalashdyrysh.umumy<i>|Tachmuhammedow.G a:5219|</i><br/>
        2.<b>Hojalyk H.O.E.amaly</b><i>(mug:Kadyrow.K a:5202)</i><br/>
        3.<b>MikroYkdysadyyet.amaly</b><i>(mug:Bekiyewa.A a:5202)</i><br/>
        4.<b>Halypa Sagady.</b><i>(a:5219)</i>	
  	</div>
	<div class ="type" id="Thursday">
	    1.<b>Ahtimallyk Nazaryeti.umumy</b><i>(mug:Garayew.A a:5218)</i><br/>
		2.<b>Soliologiya.umumy</b><i>(mug:Germanowa.T a:5218)</i><br/>
        3.<b>Kadalashdyrysh.amaly</b><i>(mug:Kazygulyyew.A a:5201)</i>
	</div>
	<div class ="type" id="Friday">
		1.<b>MikroYkdysadyyet.umumy</b><i>(mug:Saryyewa.M a:5220)</i><br/>
		2.<b>Menejment.umumy</b><i>(mug:Nabatowa.A a:5220)</i><br/>
		3.<b>Ahtimallyk Nazaryeti.amaly</b><i>(mug:Owezowa.B a:5201)</i>
	</div>
	<div class ="type" id="Saturday">
		1.<b>Statistika.amaly</b><i>(mug:Shukurow.A a:5202)</i><br/>
		2.<b><u>Dokma H.O.E.amaly</u></b><i>(mug:Hojamgulyyewa.B a:5202)</i><br/>
	    |m|:Sosiologiya.amaly<i>|Durdygylyjowa.A a:5202|</i><br/>
	    3.<b>Iymit O.S.amaly</b><i>(mug:Turapow.S a:5202)</i>
	</div>
</div>	
<div class = "group" id="k534">
	<div class = 'type' id="Monday">
		1.<b>Tajirchlik Hukugy.umumy</b><i>(mug:Gutlyyew.M a:5219)</i><br/>
		2.<b>Tajirchlik Hukugy.amaly</b><i>(mug:Gutlyyew.M a:5219)</i><br/>
		3.<b>Tajirchlik Hukugy.tejribe</b><i>(mug:Gutlyyew.M a:5219)</i>
	</div>
	<div class ="type" id="Tuesday">
	    1.<b>Ahtimallyk Teoria.amaly</b><i>(mug:Owezowa.B a:5104)</i><br/>
	    2.<b>Kadalashdyrysh.amaly</b><i>(mug:Kazygulyyew.A a:5104)</i><br/>
	    3.<b>Statistika.umumy</b><i>(mug:Yazlyyew.M a:5219)</i>
	</div>
	<div class ="type" id="Wednesday">
		1.<b><u>Soliologiya.amaly</u></b><i>|Durygylyjowa.A a:5108|</i><br/>
		|m|:Kadalashdyrysh.umumy<i>|Tachmuhammedow.G a:5219|</i><br/>
        2.<b>Haryt Owrenish.umumy</b><i>|mug:Atajanowa.B a:5104|</i><br/>
        3.<b>Statistika.amaly</b><i>|mug:Shukurow.A a:5104|</i><br/>
        4.<b>Halypa Sagady.</b><i>(a:5219)</i>	
  	</div>
	<div class ="type" id="Thursday">
	    1.<b>Ahtimallyk Teoriasy.umumy</b><i>(mug:Garayew.A a:5218)</i><br/>
		2.<b>Soliologiya.umumy</b><i>(mug:Germanowa.T a:5218)</i><br/>
        3.<b>Ishjen Resminamalar.umumy</b><i>(mug:Mamyshew.D a:5101)</i>
	</div>
	<div class ="type" id="Friday">
		1.<b>MikroYkdysadyyet.umumy</b><i>(mug:Saryyewa.M a:5220)</i><br/>
		2.<b>Menejment.umumy</b><i>(mug:Nabatowa.A a:5220)</i><br/>
		3.<b>Menejment.amaly</b><i>(mug:Durdyyewa.J a:5104)</i>
	</div>
	<div class ="type" id="Saturday">
		1.<b>Haryt Owrenish.amaly</b><i>(mug:Atajanowa.B a:5106)</i><br/>
		2.<b>MikroYkdysadyyet.amaly</b><i>(mug:Bekiyewa.A a:5104)</i><br/>
	    3.<b>Ishjen Resminamalar.amaly</b><i>(mug:Hudayarow.D a:5104)</i>
	</div>
  </div>
 <p id='sene'>Sene: <?=$gun,'.',$mon,'.',$year?></p>
 </div>
 <script type="text/javascript">
 	(function(){
	var  groupNum = prompt("Haysy Topar? Dine (531,532,533,534 Toparlar!!!)");
 	var number = document.getElementById("groupNum");
    var k531 = document.getElementById('k531');
    var k532 = document.getElementById('k532'); 
    var k533 = document.getElementById('k533'); 
    var k534 = document.getElementById('k534');
    var day = "<?=$day?>";
    var plus = document.getElementById('plus');
    var grtype = document.getElementsByClassName('type');
    number.innerHTML = groupNum + "-nji toparyn Sapak Sanawy";
   if(groupNum !== '531'){k531.style.display ='none'}else var g=k531;
   if(groupNum !== '532'){k532.style.display ='none'}else var g=k531;
   if(groupNum !== '533'){k533.style.display ='none'}else var g=k531;
   if(groupNum !== '534'){k534.style.display ='none'}else var g=k531;
  if(!g){alert("Toparyny dogry Yaz!"); return false;}
  if(day ==="Sunday"){ plus.innerHTML = "Bu gun:<b>Dynch gun!</b>";}
   function call(){
   	 for(var i=0;i<28;i++){
   	 	if(grtype[i].id !== day){
   	 	    grtype[i].style.display="none";
   	 	}
   	 }
   }
   call();
})();
  </script>
<div id="footer">
  <hr/>
	&copy;Powered by - G.Hojamov <?=$year?>ý
	</div>
</body>
</html>