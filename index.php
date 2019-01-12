<?php



$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
    
$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;
 
$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;
/*
echo 'USD Alış: '.$usd_buying.'<br>USD Satış: '.$usd_selling.'<br>';
echo 'EUR Alış: '.$euro_buying.'<br>EUR Satış: '.$euro_selling; */

 
?>
<!DOCTYPE html>
<html>
<title>dolarbugunneoldu.com</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="Dolar bugun ne oldu">
<meta name="description" content="dolardaki iniş çıkışları takip edebileceğiniz goy goy içerikli tracker sitesidir.1 dolar kaç tl ilk sorumuzdur.euro da gösteriyoruz. btc ve ltc kabulumuz">
<meta name="keywords" content="dolar,bugun,kac,tl,ne,oldu,btc,euro,dolar,trump,erdogan,damat,1 dolar,1000 dolar,5000 dolar,20 dolar,ekonomi,1 btc kaç dolar,rekor kirdi mi">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Turkish">
<meta name="revisit-after" content="1 days">
<meta name="author" content="n717">
<meta name="google-site-verification" content="google898b160167208837">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Menüyü Kapat</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Dolar</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Hakkımızda</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">Dolar</div>
    <div class="w3-center w3-padding-16">Dolar'da Bugün</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="https://img-s1.onedio.com/id-582a0ab674ecc0e213d94116/rev-0/w-635/f-jpg-webp/s-f3a3b2dcb2d4da9d75a88b14014308e8d616d8fb.webp" alt="Sandwich" style="width:100%">
      <h3>Dolar Alış</h3>
      <p><?php echo 'USD Alış : '.$usd_buying; ?></p>
    </div>
    <div class="w3-quarter">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShhnx9aHs5n7VGs9Eb6-yXcThjsipoAQOkCtaxEJMjKAxXw8o4aw" alt="Steak" style="width:100%">
      <h3>Dolar Satış</h3>
      <p><?php echo 'USD Satış : '.$usd_selling; ?></p>
    </div>
    <div class="w3-quarter">
     <blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Yıllar önce bayramda türk lirası olmadığı için harçlık olarak 1$ ve 5€ vermişlerdi.Ben de mal gibi onları kaybettim.Şuan elimde olsalardı hayatımı yeniden şekillendirebilirdim.<a href="https://twitter.com/hashtag/Dolar6?src=hash&amp;ref_src=twsrc%5Etfw">#Dolar6</a> <a href="https://twitter.com/hashtag/euro7?src=hash&amp;ref_src=twsrc%5Etfw">#euro7</a></p>&mdash; Rana (@kremsantimsi) <a href="https://twitter.com/kremsantimsi/status/1027897528644239363?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

      <h3>EURO Alış</h3>
      <p><?php echo 'USD Satış : '.$euro_buying; ?></p>
       
    </div>
    <div class="w3-quarter">
      <img src="http://www.dolarbugunneoldu.com/c3.png"" alt="Pasta and Wine" style="width:100%">
      <h3>EURO Satış</h3>
      <p><?php echo 'USD Satış : '.$euro_buying; ?></p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="http://dolarbugunneoldu.com/a1.png" alt="Popsicle" style="width:100%">
      <h3>Yav he he </h3>
      <p>Bunlar hep dis guclerın oyunu</p>
    </div>
    <div class="w3-quarter">
    	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Dolar 6<br>Dolar 7<br>Dolar bir ülkeyi 7<br>DOLARIN YÜKSELME NEDENİ... <a href="https://t.co/VR48ORdDtD">pic.twitter.com/VR48ORdDtD</a></p>&mdash; Melike Das (@MelikeeDas) <a href="https://twitter.com/MelikeeDas/status/1027929813988913153?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	
	<div class="w3-quarter">
		
		<blockquote class="twitter-tweet" data-lang="tr"><p lang="en" dir="ltr">I have just authorized a doubling of Tariffs on Steel and Aluminum with respect to Turkey as their currency, the Turkish Lira, slides rapidly downward against our very strong Dollar! Aluminum will now be 20% and Steel 50%. Our relations with Turkey are not good at this time!</p>&mdash; Donald J. Trump (@realDonaldTrump) <a href="https://twitter.com/realDonaldTrump/status/1027899286586109955?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>
    	
    </div>


    <div class="w3-quarter">
    	
    	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Dolar 7 ve bir klasik olarak Ararun reis <a href="https://t.co/YB8EqffDpr">pic.twitter.com/YB8EqffDpr</a></p>&mdash; Tuncay Akgün (@tuncayakgun_) <a href="https://twitter.com/tuncayakgun_/status/1027935021984870400?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
    <div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Damat papazı tokatlamaya gitti 😁😁😁</p>&mdash; Fatih Mehmet Maçoğlu (@KomunisttBaskan) <a href="https://twitter.com/KomunisttBaskan/status/1027909847126298625?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>

    <div class="w3-quarter">
    	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr"><a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a>  “Çalışmadan, yorulmadan ve üretmeden, rahat yaşamak isteyen toplumlar; evvela haysiyetlerini, sonra hürriyetlerini daha sonra da istiklal ve istikballerini kaybetmeye mahkumdurlar”<br><br>Mustafa Kemal ATATÜRK. <a href="https://t.co/n4jpnBvylO">pic.twitter.com/n4jpnBvylO</a></p>&mdash; Oğuzhan Sefer METE (@osefermete) <a href="https://twitter.com/osefermete/status/1028160923809275905?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>


    <div class="w3-quarter">
      <img src="http://www.dolarbugunneoldu.com/b1.png"   style="width:100%">
      <h3>Dolarsa bizimdir.Dolmazsa bi yerden kaçırıyordur</h3>
      <p>annemle almanya'dan havale yapınca 2-3 gün sürdüğü için sinirleniyorduk. şuan sorun etmiyoruz, yolda değeri artıyor.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://pbs.twimg.com/media/DkPanIIX4AAnfMn.jpg:large" alt="Sandwich" style="width:100%">
      <h3>Çok fazla dini mesele içerir.</h3>
      <p>Bizim Allah'ımız var ... Rahip ... Rahibe</p>
    </div>

    <div class="w3-quarter">
    <blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">İstanbul&#39;un çıkardığı vekil sayısı ; 98<br>İstanbul&#39;un nüfusu ; 16.000.000<br>Acaba,kaç kişi vekillerinin adını bilir?<br>Acaba 98 vekil İstanbul için hangi faydayı yaratıyor?<br>-Arazi ol,kaldır elini/indir elini,kıyak emekliliği bekle,<br>sallayın başınızı Deve yapın  <a href="https://twitter.com/hashtag/Milletvekilimaa%C5%9Flar%C4%B1?src=hash&amp;ref_src=twsrc%5Etfw">#Milletvekilimaaşları</a> nı</p>&mdash; Barbaros Berber (@1956Barbaros) <a href="https://twitter.com/1956Barbaros/status/1028208193158242305?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	

	<div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Zaman birlik ve beraberlim zamanı.<br>   Zaman ekonomi için israf-şaşa- şatafattan  vazgeçme zamanı.<br>   Hadi tosunlar sıra siz de☺️<br>İşçinin 75 TL Kurban yardımına  %25 vergi uygulayıp 48.14 TL eline veren Devlet<a href="https://twitter.com/hashtag/Milletvekilimaa%C5%9Flar%C4%B1?src=hash&amp;ref_src=twsrc%5Etfw">#Milletvekilimaaşları</a> nı düşürsün ❗️<br>Makam araçları azaltılsın👍 <a href="https://t.co/ZwfFEzQ9wS">pic.twitter.com/ZwfFEzQ9wS</a></p>&mdash; Onur (@OnurGuney) <a href="https://twitter.com/OnurGuney/status/1028199776377085952?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

		
	</div>
    	
    </div>

    <div class="w3-quarter">
    <blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Bir ay da bunlarla idare ederiz. Eylüle Allah kerim. <a href="https://t.co/IylWU6LmBP">pic.twitter.com/IylWU6LmBP</a></p>&mdash; Lagrima  Bundeskanzleramt (@lagrimacanta) <a href="https://twitter.com/lagrimacanta/status/1027981932443914240?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	<div class="w3-quarter">
	 
		<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">“Çalışmadan, yorulmadan ve üretmeden, rahat yaşamak isteyen toplumlar; evvela haysiyetlerini, sonra hürriyetlerini daha sonra da istiklal ve istikballerini kaybetmeye mahkumdurlar”<br><br>Mustafa Kemal ATATÜRK.<a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a></p>&mdash; Yusuf İlker Ekim (@ilkeretto) <a href="https://twitter.com/ilkeretto/status/1028141902313545733?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	<label alt="Çalışmadan, yorulmadan ve üretmeden, rahat yaşamak isteyen toplumlar; evvela haysiyetlerini, sonra hürriyetlerini daha sonra da istiklal ve istikballerini kaybetmeye mahkumdurlar"></label>
	</div>
    	
    </div>

    <div class="w3-quarter">
      <img src="https://pbs.twimg.com/media/DkO3n1QXoAA0X2c.jpg" alt="Croissant" style="width:100%">
      <h3>Ödeme şekli</h3>
      <p>Tam da Blockchain'i konuşurken...</p>
    </div>
  	<div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Doları en iyi açıklayan adam sjjsj <a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a> <a href="https://twitter.com/hashtag/Cumartesi?src=hash&amp;ref_src=twsrc%5Etfw">#Cumartesi</a> <a href="https://t.co/pR8mACZSdQ">pic.twitter.com/pR8mACZSdQ</a></p>&mdash; Jamiryo (@jamiryoeu) <a href="https://twitter.com/jamiryoeu/status/1028164784049610752?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>

      <div class="w3-quarter">
       <blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Olum naptınız hz. İsa&#39;yı mı tutukladınız ? Dolar 6.02 oldu lan!</p>&mdash; Fatih Mehmet Maçoğlu (@KomunisttBaskan) <a href="https://twitter.com/KomunisttBaskan/status/1027806779164557312?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
    <div class="w3-quarter">
    	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Yeni Ekonomi Modeli açıklandı. <a href="https://t.co/PdCQw5knn8">pic.twitter.com/PdCQw5knn8</a></p>&mdash; Ayberk Olgay (@ayberkolgay) <a href="https://twitter.com/ayberkolgay/status/1027900408759504898?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>

    <div class="w3-quarter">
    	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Dolar 7 <a href="https://t.co/UBhbTN3TFB">pic.twitter.com/UBhbTN3TFB</a></p>&mdash; Sırat K (@SRT7007) <a href="https://twitter.com/SRT7007/status/1027995966392213504?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


    </div>
    	<div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr"><a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a> Mustafa Kemal&#39;in din ve devlet işlerini birbirine karıştırmama sebebi tam olarak buydu.<br>Dolar 5,70 olduğunda ekonomik bir açıklama yapmak yerine &quot;bizim de Allah&#39;ımız var &quot; denmesin diye.<br>Laiklik dinsizlik değildir,dinle devleti yönetmeye kalkmamaktır.<br>Yoksa sonuç bu olur!</p>&mdash; 🇹🇷 Samet Korkmazgöz 🇹🇷 (@SametKGZ) <a href="https://twitter.com/SametKGZ/status/1028048517338738691?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>

    <div class="w3-quarter">
    	
    	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Eyyy ABD ayağını denk al,<br>Bu daha başlangıç...<br><br>Dolar 7 <a href="https://t.co/eoSDdoOGPv">pic.twitter.com/eoSDdoOGPv</a></p>&mdash; @izmir kızıⓂ (@kaderimkader) <a href="https://twitter.com/kaderimkader/status/1027985026678435844?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>


		<div class="w3-quarter">
			<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Bizde papaz var yenerik sandık, adamda 2 as 2 vale varmış:))) <a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a></p>&mdash; oğuz binici (@oguzbnc) <a href="https://twitter.com/oguzbnc/status/1028134566412931073?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

		</div>
	


	<div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Şeker fabrikalarını satıp Abd&#39;li glikozcu Cargill&#39;i ülkeye sok, yerli tohumu yasakla, kar eden kamu kurumlarını sat, çiftçi ve besicinin sorunlarını çözmek yerine ithal ederim bak diyip üretimi baltala sonra aynı gemideyiz diye bizden destek bekle. Çok beklersin. <a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a></p>&mdash; ayhan aydın (@Ayhan__AYDIN) <a href="https://twitter.com/Ayhan__AYDIN/status/1028110433897668613?ref_src=twsrc%5Etfw">11 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>


	<div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Bir kız babası olarak düşünüyorum.. damadım ciddi bir konuda böyle gevşek gevşek konuşsa ne yapardım acaba? <a href="https://twitter.com/hashtag/Dolar6?src=hash&amp;ref_src=twsrc%5Etfw">#Dolar6</a> <a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a> <a href="https://twitter.com/hashtag/Dolar8?src=hash&amp;ref_src=twsrc%5Etfw">#Dolar8</a> <a href="https://twitter.com/hashtag/dolar9?src=hash&amp;ref_src=twsrc%5Etfw">#dolar9</a> <a href="https://twitter.com/hashtag/dolar10?src=hash&amp;ref_src=twsrc%5Etfw">#dolar10</a> <a href="https://t.co/rRzuOGRLp9">pic.twitter.com/rRzuOGRLp9</a></p>&mdash; Cemil (@Cemiloff) <a href="https://twitter.com/Cemiloff/status/1027939735661109250?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>



<br>
	<div class="w3-quarter">
	<blockquote class="twitter-tweet" data-lang="tr"><p lang="tr" dir="ltr">Hayat kısa, Dolar uçuyo<a href="https://twitter.com/hashtag/dolar7?src=hash&amp;ref_src=twsrc%5Etfw">#dolar7</a></p>&mdash; Salime🌛 (@litost_mixerlii) <a href="https://twitter.com/litost_mixerlii/status/1027996485248593920?ref_src=twsrc%5Etfw">10 Ağustos 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	</div>




    </div>



  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Me, The Fuckir Man</h3><br>
    <img src="https://www.w3schools.com/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>I am not Dis gucler</i></h6>
      <p>Valla biz dis gucler falan degiliz verileri de tcmb'den cekiyoruz. hicbir elestiri yoktur.Zaten elestiren de kalmamistir.Keske param olsaydi da dolar alsadim diyenlerdenseniz biz de onlardaniz. Cunku cok Fuck'iriz.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Her hakkı saklıdır.Her şey hayal ürünüdür.Veriler tcmb'den çekilmektedir.iletişim : makran.akran@gmail.com
      	<!-- Sayaclar.com Code Start  -->
<div align="center"><script language="Javascript" src="http://sa.sayaclar.com/c/s4.php?a=146yqvh&s=2a6"></script></div>
<!-- Sayaclar.com Code End -->

      </p>
   
      <p>Powered by <a href="https://www.dolarbugunneoldu.com/" target="_blank">n717</a></p>
    </div>
  
    <div class="w3-third">
      <h3>Bağış İçin</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="https://www.w3schools.com/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">BTC</span><br>
          <span><p>1LPzue4hwkNAHbAYhpRchawY8qbxmaLCBw</p></span>
        </li>
        <li class="w3-padding-16">
          <img src="https://www.w3schools.com/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">LTC</span><br>
          <span><p>LZwyqZFw8uS9h73gUBJYTRyXQKbKKd4Zz4</p></span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Doviz</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dolar ne olur</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Euro</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dolar</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dolar kaç tl</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dolar esprileri</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">1 Dolar</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ekonomi</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dolar bugun</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Trump</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dolar espri</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">kac lira</span>
      </p>
      <h4>Reklam</h4>
      	<p> <a href="http://iosdeveloperturkey.com/" title="app, webmaster, website,ios,php,laravel" target="_blank">Mobil Uygulama Fikirlerinizi Hayata Geçirin.</a></p>
      	   	<p> <a href="http://iosdeveloperturkey.com/" title="app, webmaster, website,ios,php,laravel" target="_blank">Web siteniz olsun.</a></p>
    </div>

  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123720709-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123720709-1');
</script>
<!--Adsense -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9531997173621599",
    enable_page_level_ads: true
  });
</script>

</body>
</html>
