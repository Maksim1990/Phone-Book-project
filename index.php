<!DOCTYPE html>
<html>
<head>
<title>Popup Task</title>

<link href="/public/css/font-awesome.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>
<body>
    
    <div class="grid main">
        <div class=" help">
            <label for="toggle-hidden"><i class="fa fa-info-circle" aria-hidden="true"></i></label>
        </div>
        <div class=" fix">
            <div class="col-3-12 header">
  Contact book with name, phone & profession details.              
            </div>
         <div class=" header2"></div> 
        </div>
        <div class="col-3-12 popup" style="overflow-y: scroll;">        
        <div class=" popup2 grid"  >
     
<?php

$array=array
  (
  array("Anton","img/1.jpg","Director","+123(54)8988877","12.10.90","Almeida"),
  array("Ben","img/2.jpg","Engineer","+123(33)7688876","02.09.80","Dijonson"),
  array("Antony","img/3.jpg","Plumber","+123(77)3321256","19.06.91","Fetchison"),
  array("Dan","img/4.jpg","CEO Manager","+123(09)1122446","22.10.87","Gerden"),
    array("Elena","img/5.jpg","Engineer","+123(54)8997654","07.11.90","Fereira"),
  array("Jane","img/6.jpg","Marketing Manager","+123(56)8678842","06.03.83","Dichan"),
  array("Danny","img/7.jpg","Tender Specialist","+123(11)2985642","09.12.91","Murphy"),
    array("George","img/8.jpg","Director","+123(54)4453622","14.01.89","Ambarson"),
  array("Andres","img/9.jpg","IT Developer","+123(33)6784939","03.11.91","Alber"),
  array("Dak","img/10.jpg","Teacher","+123(54)5644533","13.10.86","Destans"),
  array("Lesly","img/11.jpg","COO","+123(33)0908733","08.05.92","Robinsson"),
  array("Terry","img/12.jpg","Engineer Oil & Gas","+123(77)4648822","18.02.84","Alhors"),
    array("Benesi","img/13.jpg","Manager","+123(33)6773323","15.09.90","Herrors"),
  array("Nastya","img/14.jpg","Coordinator","+123(79)2231299","14.11.90","Bergerya"),
  array("Notton","img/15.jpg","Developer","+123(54)6754432","12.11.83","Donton"),
    array("Helen","img/16.jpg","SEO Manager","+123(66)7574322","12.06.85","Horton"),
  array("Amber","img/17.jpg","Singer","+123(33)5643244","05.10.87","Hork"),
  array("Amblick","img/18.jpg","Music Teacher","+123(33)7899000","19.07.90","Gil"),
  array("Danton","img/19.jpg","Singer","+123(54)6754433","08.08.87"),
    array("Glen","img/20.jpg","Engineer WEB","+123(66)7654433","29.09.90","Grimsy"),
  array("Gelen","img/21.jpg","Director IT","+123(54)9985433","20.10.91","Hermosa"),
  array("Danna","img/22.jpg","Teacher","+123(23)6785433","23.10.86","Hamber"),
    array("Benny","img/23.jpg","Polic Officer","+123(54)5674433","26.12.90","Fraton"),
  array("Frank","img/24.jpg","Builder","+123(09)1235455","18.10.94","Gerban")
  );
for ($i=0;$i<count($array);$i++){
?>
            <div class="line" >
          <div class="col-3-12 lef">
              
          <img src="<?= $array[$i][1]; ?>" /></div>    
          <div class=" rig"><?= $array[$i][0]; ?><span class="mob"><?= $array[$i][3]; ?></span><br/>
              <span class="proff"><?= $array[$i][2]; ?></span>
           
          </div>               
</div>
           
   <?php
} ?>
    </div>
   
        </div>
        <div class="col-9-12 big">

<input type="checkbox" id="toggle-hidden" class="hidden" />
<div class="checked-selector">
    <h2>Support</h2><hr>
    <p>For support please call following number <br/><br/><span class="tel">+123 (45) 6789567</span><br/><br/> or send 
        your queries to: <br/><br/><span class="mail">info@support.com</span></p>
</div>      
         
       </div>    
</div>    
</body>
</html>