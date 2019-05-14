

<!--Code is beign modified on 11/5/2018 by Urvashi-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Segment Descriptions</title>
      <link href="print.css">
<style>
      /*segment_desc.php*/
.margin{
	margin-left:20px;
	}
	u {
	font-weight: 700;
	}
	#a,#b,#c,#d,#e,#f,#g,#h,#i,#j,#k,#l,#m,#n,#o,#p,#q{
	display:none;
	}
	#flex { display: flex; flex-direction: column; }
	.font_10 td{
	margin-right:2%;
	}
	p {
	font-size: 15px;
	margin-right: 50px !important;
	}
	.font_10 td:last-child {
	padding-right: 4% !important;
	}
	body {
	background-color: #FFF;
	margin: 0;
	padding: 0;
	font-family: Arial Narrow, Arial, sans-serif;
	}
	text {
	font-family: Arial Narrow, Arial, sans-serif;
	font-size: 14px;
	}
	#wrapper {
	width:915px;
	height:620px;
	margin-left:auto;
	margin-right:auto;
	background-color:#666666;
	}
	#wrapper2 {
	width:915px;
	height:620px;
	margin-left:auto;
	margin-right:auto;
	background-color:#666666;
	}
	@media print {
	.pagebreak {page-break-after: always;}
	}
	.page_wrap {
	margin-left: auto;
	margin-right: auto;
	width: 920px;
	align: center;
	}
	.print_pages {
	width: 910px;
	height: 620px;
	background: #fff;
	margin: 25px 0 0 0;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
	box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
	}
	.print_pages_cover {
	width: 910px;
	height: 600px;
	background: #fff;
	margin: 25px 0 0 0;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
	box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
	}
	.font_10 {
	font-family: Arial Narrow, Arial, sans-serif;
	font-size: 9px;
	}
	.font_24 {
	margin-bottom: 15px;
	font-family: Arial Narrow, Arial, sans-serif;
	margin-top: 2%;
	font-size: 32px;
	text-align: left;
	float: left;
	margin-left:57px;
	width: 86%;
	}
	.font_25 {
	margin-bottom: 15px;
	font-family: Arial Narrow, Arial, sans-serif;
	margin-top: 2%;
	font-size: 22px;
	text-align: left;
	float: left;
	margin-left:18px;
	width: 86%;
	}
	.h3, h3 {
	font-size: 20px !important;
	}
	.font_14 {
	font-family: Arial Narrow, Arial, sans-serif;
	font-size: 14px;
	}
	.font_14brown {
	font-family: Arial Narrow, Arial, sans-serif;
	padding: 7px 27px 1px !important;
	font-size: 16px;
	}
	.image_border {
	border-radius: 6px;
	margin-left: 11%;
	}
	svg{
	top:-3px !important;
	height:505px !important;
	}


  /*segment_desc.php ends here*/
  
</style>
      <?php
         $i1= ($_GET['i1']);
         $i2= ($_GET['i2']);
         $i3 = ($_GET['i3']);
         $i4 = ($_GET['i4']);
         $i5 = ($_GET['i5']);
         $i6 = ($_GET['i6']);
         $i7 = ($_GET['i7']);
         $i8 = ($_GET['i8']);
         $i9 = ($_GET['i9']);
         $i10 = ($_GET['i10']);
         $i11 = ($_GET['i11']);
         $i12 = ($_GET['i12']);
         $i13 = ($_GET['i13']);
         $i14 = ($_GET['i14']);
         $i15 = ($_GET['i15']);
         $i16 = ($_GET['i16']);
         $i17 = ($_GET['i17']);
         
         
         $cars=array('A'=>$i1,'B'=>$i2,'C'=>$i3,'D'=>$i4,'E'=>$i5,'F'=>$i6,'G'=>$i7,'H'=>$i8,'I'=>$i9,'J'=>$i10,'K'=>$i11,'L'=>$i12,'M'=>$i13,'N'=>$i14,'O'=>$i15,'P'=>$i16,'Q'=>$i17);
         arsort($cars);
         //print_r($cars);
         
         $i=1;
         
         foreach ($cars as $key=>$item){
         
         
         if($item >100){
           
           if($key =='A'){
           ?>
      <style>
         #a { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='B'){
           ?>
      <style>
         #b { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='C'){
           ?>
      <style>
         #c { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='D'){
          
           ?>
      <style>
         #d { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='E'){
           ?>
      <style>
         #e { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='F'){
           ?>
      <style>
         #f { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='G'){
           ?>
      <style>
         #g { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='H'){
           ?>
      <style>
         #h { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='I'){
           ?>
      <style>
         #i { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='J'){
           ?>
      <style>
         #j { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='K'){
           ?>
      <style>
         #k { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='L'){
           ?>
      <style>
         #l { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='M'){
           ?>
      <style>
         #m { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='N'){
           ?>
      <style>
         #n { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='O'){
           ?>
      <style>
         #o { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='P'){
           ?>
      <style>
         #p { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         
         if($key =='Q'){
           ?>
      <style>
         #q { 
         order: 
         <?php echo $i;?>; 
         display:block;
         }
      </style>
      <?php
         }
         }
         else{
         if($key =='A'){
           ?>
      <style>
         #a { 
         order: 
         1
         }
      </style>
      <?php
         }
         
         if($key =='B'){
           ?>
      <style>
         #b { 
         order: 
         2
         }
      </style>
      <?php
         }
         
         if($key =='C'){
           ?>
      <style>
         #c { 
         order: 
         3
         }
      </style>
      <?php
         }
         
         if($key =='D'){
          
           ?>
      <style>
         #d { 
         order: 
         4
         }
      </style>
      <?php
         }
         
         if($key =='E'){
           ?>
      <style>
         #e { 
         order: 
         5
         }
      </style>
      <?php
         }
         
         if($key =='F'){
           ?>
      <style>
         #f { 
         order: 
         6 
         }
      </style>
      <?php
         }
         
         if($key =='G'){
           ?>
      <style>
         #g { 
         order: 
         7 
         }
      </style>
      <?php
         }
         
         if($key =='H'){
           ?>
      <style>
         #h { 
         order: 
         8 
         }
      </style>
      <?php
         }
         
         if($key =='I'){
           ?>
      <style>
         #i { 
         order: 
         9 
         }
      </style>
      <?php
         }
         
         if($key =='J'){
           ?>
      <style>
         #j { 
         order: 
         10 
         }
      </style>
      <?php
         }
         
         if($key =='K'){
           ?>
      <style>
         #k { 
         order: 
         11 
         }
      </style>
      <?php
         }
         
         if($key =='L'){
           ?>
      <style>
         #l { 
         order: 
         12
         }
      </style>
      <?php
         }
         
         if($key =='M'){
           ?>
      <style>
         #m { 
         order: 
         13
         }
      </style>
      <?php
         }
         
         if($key =='N'){
           ?>
      <style>
         #n { 
         order: 
         14
         }
      </style>
      <?php
         }
         
         if($key =='O'){
           ?>
      <style>
         #o { 
         order: 
         15 
         }
      </style>
      <?php
         }
         
         if($key =='P'){
           ?>
      <style>
         #p { 
         order: 
         16
         }
      </style>
      <?php
         }
         
         if($key =='Q'){
           ?>
      <style>
         #q { 
         order: 
         17
         }
      </style>
      <?php
         }
         
         
         
         
         }
         
         
         
         $i++;
         
         }
         
         
         
         ?>
      <!-- Styles -->
      <style>
         #chartdiv {
         width: 100%;
         height: 470px;
         }	
         .amcharts-graph-column-front .amcharts-graph-column-element	{
         }		
      </style>
      <!-- Resources -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="js/amcharts.js"></script>
      <script src="https://www.amcharts.com/lib/3/serial.js"></script>
      <script src="js/light.js"></script>
      <script src="//cdn.amcharts.com/lib/3/plugins/export/export.min.js"></script>
      <link  type="text/css" href="//cdn.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet">
      <script type="text/javascript" src="http://www.amcharts.com/lib/3/exporting/amexport_combined.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script>
         $(document).ready(function(){
                 $("#niche").hide();
                 $(".show_hide").show();
                 $(".hide_show").hide();
         
             $('.show_hide').click(function(){
         
              
              $("#chart").css("display","none");
               $("#a").css("display","block");
               $("#a").css("order",1);
               $("#b").css("display","block");
               $("#b").css("order",2);
               $("#c").css("display","block");
               $("#c").css("order",3);
               $("#d").css("display","block");
               $("#d").css("order",4);
               $("#e").css("display","block");
               $("#e").css("order",5);
               $("#f").css("display","block");
               $("#f").css("order",6);
               $("#g").css("display","block");
               $("#g").css("order",7);
               $("#h").css("display","block");
               $("#h").css("order",8);
               $("#i").css("display","block");
               $("#i").css("order",9);
               $("#j").css("display","block");
               $("#j").css("order",10);
               $("#k").css("display","block");
               $("#k").css("order",11);
               $("#l").css("display","block");
               $("#l").css("order",12);
               $("#m").css("display","block");
               $("#m").css("order",13);
               $("#n").css("display","block");
               $("#n").css("order",14);
               $("#o").css("display","block");
               $("#o").css("order",15);
               $("#p").css("display","block");
               $("#p").css("order",16);
               $("#q").css("display","block");
               $("#q").css("order",17);
         
               
             $('#niche').slideToggle('slow');
                  $(this).parent().find(".show_hide").hide();
                 $(this).parent().find(".hide_show").show();
             });
         
          $('.hide_show').click(function(){
         
           location.reload();
         
             $('#niche').slideToggle('slow');
                  $(this).parent().find(".show_hide").show();
                 $(this).parent().find(".hide_show").hide();
         
             });
         
         });
         
         var chartData = generateChartData();
         var chart = AmCharts.makeChart("chartdiv", {
         
           "type": "serial",
           "theme": "light",
           "rotate": true,
           "dataProvider":chartData,
           
           
           /* [ {
             "segment": "Affluents",
             "male": sA
         
           },
            {
             "segment": "Elite Professionals",
             "male": sB
          
           },
            {
             "segment": "Ethnic Cruisers", 
             
             "male": sC
           },
            {
             "segment": "Nest Builders",
               "male": sD
           },
            {
             "segment": "Buy me a new home",
             "male": sE
           },
            {
             "segment": "Empty Nesters",
             "male": sF
           },
            {
             "segment": "Up the ladder",
             "male": sG
           },
            {
             "segment": "High Trades",
             "male": sH
           }, {
             "segment": "Urban life / Small town",
             "male": sI
           }, {
             "segment": "Joyful Country",
             "male": sJ
           } ,
           {
             "segment": "Rural Handyman",
             "male": sK
           } ,
           {
             "segment": "Apartment Dwellers",
             "male": sL
           } ,
           {
             "segment": "Singles",
             "male": sM
           } ,
           {
             "segment": "New Canadians",
             "male": sN
           }, 
           {
             "segment": "Renters",
             "male": sO
           } ,
           {
             "segment": "One parent families",
             "male": sP
           } ,
           {
             "segment": "Thrifty",
             "male": sQ
           } 
           ],*/
           
           "startDuration": 1,
           "graphs": [{
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "male",
             "title": "Index > 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "gemale",
             "title": "Index = 100",
             "fill": "yellow",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "female",
             "title": "Index < 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           }],
           "categoryField": "segment",
           "categoryAxis": {
             "gridPosition": "start",
             "gridAlpha": 0.2,
             "axisAlpha": 100,
             "baseValue":100 
           },
           "valueAxes": [{
             "gridAlpha": 0,
             "ignoreAxisWidth": true,
             "labelFunction": '',
             "baseValue":100 ,
             "labelsEnabled" : false,
             "GridCount":1000,
             "baseline":100,
             "guides": [{
               "value": 100,
               "lineAlpha": 0.2
             }]
           }],

          // "legend": { 
  //  "generateFromData": true //custom property for the plugin
 // },
           "balloon": {
             "fixedPosition": true
           },
           "chartCursor": {
             "valueBalloonsEnabled": true,
             "cursorAlpha": 0.05,
             "fullWidth": true
           },
           "allLabels": [{
             "text": "Index < 100",
             "x": "22%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }, 
           {
             "text": "",
             "x": "57%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           },
           {
             "text": "Index > 100",
             "x": "79%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }]
          
         
         });
         function generateChartData() {
         
         
         var sA = "<?php if($i1<100){
            echo $i1;
            }
            else{
            echo $i1;
            }
            ?>";
          
         
          var sB = "<?php if($i2<100){
            echo $i2;
            }
            else{
            echo $i2;
            }
            ?>";
         
         var sC = "<?php if($i3<100){
            echo $i3;
            }
            else{
            echo $i3;
            }
            ?>";
         
         var sD = "<?php if($i4<100){
            echo $i4;
            }
            else{
            echo $i4;
            }
            ?>";
         
         var sE = "<?php if($i5<100){
            echo $i5;
            }
            else{
            echo $i5;
            }
            ?>";
         
         var sF = "<?php if($i6<100){
            echo $i6;
            }
            else{
            echo $i6;
            }
            ?>";
         
         var sG = "<?php if($i7<100){
            echo $i7;
            }
            else{
            echo $i7;
            }
            ?>";
         
         var sH = "<?php if($i8<100){
            echo $i8;
            }
            else{
            echo $i8;
            }
            ?>";
         
         var sI = "<?php if($i9<100){
            echo $i9;
            }
            else{
            echo $i9;
            }
            ?>";
         
         var sJ = "<?php if($i10<100){
            echo $i10;
            }
            else{
            echo $i10;
            }
            ?>";
         
         var sK = "<?php if($i11<100){
            echo $i11;
            }
            else{
            echo $i11;
            }
            ?>";
         
         var sL = "<?php if($i12<100){
            echo $i12;
            }
            else{
            echo $i12;
            }
            ?>";
         
         var sM = "<?php if($i13<100){
            echo $i13;
            }
            else{
            echo $i13;
            }
            ?>";
         
         var sN = "<?php if($i14<100){
            echo $i14;
            }
            else{
            echo $i14;
            }
            ?>";
         
         var sO = "<?php if($i15<100){
            echo $i15;
            }
            else{
            echo $i15;
            }
            ?>";
         
         var sP = "<?php if($i16<100){
            echo $i16;
            }
            else{
            echo $i16;
            }
            ?>";
         
         var sQ = "<?php if($i17<100){
            echo $i17;
            }
            else{
            echo $i17;
            }
            ?>";
         
           var chartData = [];
         if(sA<100){
             chartData.push({
               "segment": "A:Affluents",
             "female": sA
             });
           }
         else if(sA==100){
         
          chartData.push({
               "segment": "A:Affluents",
             "gemale": sA
             });
             
           }
         
         
           else{
             chartData.push({
               "segment": "A:Affluents",
             "male": sA
             });
           }
         
           if(sB<100){
            
             chartData.push({
               "segment": "B:Elite Professionals",
               "female": sB
             });
           }
           else if(sB==100){
         
         chartData.push({
               "segment": "B:Elite Professionals",
               "gemale": sB
             });
           } 
           else{
             chartData.push({
               "segment": "B:Elite Professionals",
             "male": sB
             });
           }
         
         
         if(sC<100){
             chartData.push({
               "segment": "C:Ethnic Cruisers",
             "female": sC
             });
           }
           else if(sC==100){
         
         chartData.push({
               "segment": "C:Ethnic Cruisers",
               "gemale": sB
             });
           } 
           else{
             chartData.push({
               "segment": "C:Ethnic Cruisers",
             "male": sC
             });
           }
         
         
         if(sD<100){
             chartData.push({
               "segment": "D:Nest Builders",
             "female": sD
             });
           }
           else if(sD==100){
         
         chartData.push({
               "segment": "D:Nest Builders",
               "gemale": sD
             });
           } 
           else{
           
             chartData.push({
               "segment": "D:Nest Builders",
             "male": sD
             });
           }
         
         
         if(sE<100){
             chartData.push({
               "segment": "E:Buy me a new home",
             "female": sE
             });
           }
           else if(sE==100){
         
         chartData.push({
               "segment": "E:Buy me a new home",
               "gemale": sD
             });
           } 
           else{
             chartData.push({
               "segment": "E:Buy me a new home",
             "male": sE
             });
           }
         
         
         if(sF<100){
             chartData.push({
               "segment": "F:Empty Nesters",
             "female": sF
             });
           }
           else if(sF==100){
         
         chartData.push({
               "segment": "F:Empty Nesters",
               "gemale": sF
             });
           } 
           else{
             chartData.push({
               "segment": "F:Empty Nesters",
             "male": sF
             });
           }
         
         
         if(sG<100){
             chartData.push({
               "segment": "G:Up the ladder",
             "female": sG
             });
           }
           else if(sG==100){
         
         chartData.push({
               "segment": "G:Up the ladder",
               "gemale": sG
             });
           } 
           else{
             chartData.push({
               "segment": "G:Up the ladder",
             "male": sG
             });
           }
         
         
         if(sH<100){
             chartData.push({
               "segment": "H:High Trades",
             "female": sH
             });
           }
           else if(sH==100){
         
         chartData.push({
               "segment": "H:High Trades",
               "gemale": sH
             });
           } 
           else{
             chartData.push({
               "segment": "H:High Trades",
             "male": sH
             });
           }
         
         
         if(sI<100){
             chartData.push({
               "segment": "I:Urban life & Small town",
             "female": sI
             });
           }
         
         
          else if(sI==100){
         
         chartData.push({
               "segment": "I:Urban life & Small town",
               "gemale": sI
             });
           } 
         
           else{
             chartData.push({
               "segment": "I:Urban life & Small town",
             "male": sI
             });
           }
         
         
         if(sJ<100){
             chartData.push({
               "segment": "J:Joyful Country",
             "female": sJ
             });
           }
         
         else if(sJ==100){
         
         chartData.push({
               "segment": "J:Joyful Country",
               "gemale": sJ
             });
           } 
         
         
           else{
             chartData.push({
               "segment": "J:Joyful Country",
             "male": sJ
             });
           }
         
         
         if(sK<100){
             chartData.push({
               "segment": "K:Rural Handyman",
             "female": sK
             });
           }
         
         
         else if(sK==100){
         
         chartData.push({
               "segment": "K:Rural Handyman",
               "gemale": sK
             });
           } 
         
         
           else{
             chartData.push({
               "segment": "K:Rural Handyman",
             "male": sK
             });
           }
         
         
         if(sL<100){
             chartData.push({
               "segment": "L:Apartment Dwellers",
             "female": sL
             });
           }
         
         else if(sL==100){
         
         chartData.push({
               "segment": "L:Apartment Dwellers",
               "gemale": sL
             });
           } 
         
           else{
             chartData.push({
               "segment": "L:Apartment Dwellers",
             "male": sL
             });
           }
         
         
         if(sM<100){
             chartData.push({
               "segment": "M:Single Again",
             "female": sM
             });
           }
         
         else if(sM==100){
         
         chartData.push({
               "segment": "M:Single Again",
               "gemale": sM
             });
           } 
         
           else{
             chartData.push({
               "segment": "M:Single Again",
             "male": sM
             });
           }
         
         
         if(sN<100){
             chartData.push({
               "segment": "N:New Canadians",
             "female": sN
             });
           }
         
           else if(sN==100){
         
         chartData.push({
               "segment": "N:New Canadians",
               "gemale": sN
             });
           } 
         
         
           else{
             chartData.push({
               "segment": "N:New Canadians",
             "male": sN
             });
           }
         
         
         if(sO<100){
             chartData.push({
               "segment": "O:Renters & Movers",
             "female": sO
             });
           }
         
         else if(sO==100){
         
         chartData.push({
               "segment": "O:Renters & Movers",
               "gemale": sO
             });
           } 
           else{
             chartData.push({
               "segment": "O:Renters & Movers",
             "male": sO
             });
           }
         
         
         if(sP<100){
             chartData.push({
               "segment": "P:One parent families",
             "female": sP
             });
           }
         
         else if(sP==100){
         
         chartData.push({
               "segment": "P:One parent families",
               "gemale": sP
             });
           } 
           else{
             chartData.push({
               "segment": "P:One parent families",
             "male": sP
             });
           }
         
         
         if(sQ<100){
             chartData.push({
               "segment": "Q:Thrifty & Struggling",
             "female": sQ
             });
           }
           else if(sQ==100){
         
         chartData.push({
               "segment": "Q:Thrifty & Struggling",
               "gemale": sQ
             });
           } 
         
           else{
             chartData.push({
               "segment": "Q:Thrifty & Struggling",
             "male": sQ
             });
           }
         
         
         
           return chartData;
         }
         
         
         
      </script>
      <!-- HTML -->
      <div class="page_wrap" id="chart">
         <div class="print_pages" >
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
               <tr>
                  <td><span class="font_24" style="background-color: skyblue;" >&nbsp&nbsp  KQUEST Segment Performance</span></td>
                  <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" />
                     <br/>
                    
                  </td>
               </tr>
            </table>
            <br/>
            <div id="chartdiv"></div>
              </div>
        </div>
       
        <div class="post less" align="center" ><button class="btn btn-warning show_hide">Show Descriptions</button><button class="btn btn-warning hide_show">Hide Descriptions</button></div>
       
         <?php
            $segment_pic[0] ="family_pics/c_boomer_w";
            $segment_pic[1] ="family_pics/f_boomer_w";
            $segment_pic[2] ="family_pics/ethnic_cruisers";
            $segment_pic[3] ="image3/nestbuiders";
            $segment_pic[4] ="image3/c_genx_w3";
            $segment_pic[5] ="family_pics/c_mature_w";
            $segment_pic[6] ="family_pics/uptheladder";
            $segment_pic[7] ="family_pics/c_boomer_eth";
            $segment_pic[8] ="family_pics/f_genx_w";
            $segment_pic[9] ="family_pics/genx_fishing";
            $segment_pic[10] ="family_pics/rural_handyman";
            $segment_pic[11] ="family_pics/a_mixed";
            $segment_pic[12] ="family_pics/c_70s_white";
            $segment_pic[13] ="family_pics/newcanadians";
            $segment_pic[14] ="family_pics/c_genx_w";
            $segment_pic[15] ="family_pics/k_mature_w";
            $segment_pic[16] ="family_pics/geny_mom_baby";
            $segment_pic[17] ="f_boomer_w";
            
            ?>
   </head>
   <body>
   <div class="productDescription">
   <div class="page_wrap"> 
   <div id="flex">
   <div class="print_pages" id="a"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td> <span class="font_24" style="background-color: yellow;">&nbsp&nbsp Segment A: Affluents</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" />
   <br/>
   <strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="left" valign="top"><img src="<?php echo $segment_pic[0] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>• Top Earners &amp; Owners<br />
   • Well Established<br />
   • Urban &amp; Worldly<br />
   • Average Age 50</strong>
   </h3>
   <h3><strong>Personality Details</strong></h3>
   <p> Top lifestyle, in management, the social sciences, education, government    and as business owners (2X average).     Average income: <b>$180,275</b> home value* <b>$754,957</b>  
   Average    maintainers’ age, 50, household size 3.08. 83% are English speaking, likely    reside in Toronto, Vancouver, Calgary and Ottawa.  With more than 15 years of education, they    spend 4X average on education and investments.  They travel, golf, ski and play soccer 3    times more than average.  They have    worldly reading habits.<br />
   Purchasing Big Ticket Items: More likely than Canadian average to purchase ski/snowboard    equipment, sail boat, golf equipment, power boat, giftware, HDTV/iPod,    satellite radio, fireplace,  hot    tub/spa, home exercise equipment.</span>
   </p>
   <br />
   </td>
   </td>
   </tr>
   </table>
   </div>
   </div>
   <div class="print_pages" id="b"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td>
   <span class="font_24" style="background-color: #2A64A1; color:white">&nbsp&nbsp Segment B: Elite Professionals</span></td> 
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/>
   <strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[1] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong> • Highly Educated<br />
   • Techno Savvy<br />
   • Urban Families<br />
   • Greying Boomers<br /></strong>
   <h3><strong>Personality Details</strong></h3>
   <p>   These are managers and professionals with degrees in science and    engineering.  Average income: <b>$119,079</b>    live in relatively new houses average value at <b>$475,108</b>  <br />
   Average maintainers’ age is 48.7, household    size 2.91.  78.8% are English speaking,    10.5% French and 78% live in urban Ontario, Quebec and Alberta.  They spend 2.3X average on Education, 1.6X    average on computer items.  They travel    2X the average, golf, ski and play soccer.     They read about business, finance, science fiction, sport and news and    they try gourmet and healthy cooking. <br />
   Purchasing Big Ticket Items: More likely than Canadian average to purchase sail boat,    ski/snowboard equipment, motor home, fireplace, hot tub/spa.</td>
   </p>
   </td>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages" id="c"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:red;color:white">&nbsp&nbsp Segment C: Ethnic Cruisers</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%"  align="center" valign="top"><img src="<?php echo $segment_pic[2] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>
   •    Ethnic &amp; Established<br />
   • Highly Travelled<br />
   • Family Focused<br />
   • Home &amp; Hearth</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   Well established. 41% are immigrants. 40% are visible minorities (33%    Asians, 6% Blacks and Caribbean).  17%    souther European(Italian/Portuguese/Greek).     Average income <b>$103,023</b>, home value <b>$494,201</b>
   Age spread out with the large household    size 3.23.  Educated, they work in    business/finance administration, management, the applied sciences, engineering,    manufacturing and the utilities.  They    travel internationally 2X average, cook, play soccer, and read about    business, finance, fashion, healthcare, sports and news.
   Purchasing Big Ticket Items: More likely than Canadian average to purchase sail/power boat,    personal watercraft, motor home,     electronic organizer/PDA, digital radio, motorcycle, cellular    telephone/PCS, portable digital music player.</td>
   </p> </td>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="d"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:purple;color:white">&nbsp&nbsp Segment D: Nest Builders</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[3] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>
   • White Collar Families<br />
   •    Renovators<br />
   • Little Luxuries<br />
   • Home &amp; Garden</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   Typical, middle, urban Canadians who prefer to invest and renovate (1.3X    average) their home.  Average income:   <b> $94,854</b> house value <b>$348,368</b>, and household size 2.84.  They are slightly above average in    education, working in administration, management, natural and applied    sciences.  
   They have 25% above average    of British, Dutch, Italian, Polish heritages and more likely live in Edmonton    and Calgary.  Besides home renovation,    they read about business, mystery, sports and gardening. Except Golf (24%    more) they engage in sports like average Canadian.<br />
   Purchasing Big Ticket Items: More likely than Canadian average to purchase camping trailer    and  fireplace.
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="e"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:green;color:white">&nbsp&nbsp Segment E: Buy Me A New Home</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[4] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>
   • Young Families<br />
   •  Double Income Earners<br />
   • First Time Home Buyers<br />
   • Home &amp; Garden</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   Double earners working hard for their first homes (avg. value<b> $355,523</b>),    they have income of <b>$88,470</b>  household    size 2.85, young 25-44, they have children aged under 6.  19% higher than average in university    education, they are white collar workers in major Canadian cities, in large    companies, and are 1.6X likely to be Chinese, Greek, Italian or    Portuguese.
   Besides paying off their    mortgage, they spend on their children’s education, some mutual fund and    stock, and some travel.  They read    about home improvement, business, best sellers and sports. Their    participation rate in skiing and golf is 20% higher than the average. 
   Purchasing Big Ticket Items: More likely than Canadian average to purchase pool,    ski/snowboard equipment, video game system - handheld (Eg. Gameboy), car    alarm/security system, portable MP3 player/digital music player (Eg. iPod).
   </p>
   </td>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="f"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#FF7F50;color:black">&nbsp&nbsp Segment F: Empty Nesters</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[5] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" />
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>•    Retirement Age<br />
   • Golf  &amp; Grandkids<br />
   • Slowing Pace of Life<br />
   • Travel &amp; Recreation</strong>
   <h3><strong>Personality Details</strong></h3> 
   <p>
   Household size 2.49, income <b>$81,772</b>, they live in older homes with value    of  <b>$312,344</b>  With disposable income and time, they    travel, cook, garden, golf, and dote on their grand children.  
   They spend more on healthcare, dental    plans, recreation, reading, donations, and supporting persons living in    Canada.  More golfing and walking, less    skiing.  They are found in order of    importance in Manitoba, New Brunswick, B.C., Ontario, and Nova Scotia.
   Purchasing Big Ticket Items: More likely than the Canadian average to purchase fireplace.    Less likely to purchase sail boat, pool, snowmobile, electronic    organizer/PDA, ski/snowboard equipment, digital radio (receives CD quality    DAB broadcast), video game system - console (Eg. Sony Playstation) and    handheld (Eg. Gameboy).</td>
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="g"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#BA55D3;color:white">&nbsp&nbsp Segment G: Up The Ladder</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[6] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" />
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>•    Young Families<br />
   • New Suburbanites<br />
   • Kids, Dogs &amp; Mini-Vans<br />
   • Dynamic Careers</strong> 
   <h3><strong>Personality Details</strong></h3> 
   <p>
   Middle class households in busy life-stage.  Income <b>($73,763)</b> and home value <b>($287,061)</b>    are almost average.  Household size is    2.63. 30.8% are French and they tend to be in the trades. 
   Suburban dwellers, with children under 14,    they spend mainly on mortgage, healthcare, childcare, public transportation,    and cosmetics.  In their precious    leisure time, they read about relationships, interior decorating, work on    organic gardening and woodworking.     Occasionally they ski.
   Purchasing Big Ticket Items: More likely than the Canadian average to purchase personal    watercraft, motor home, snowmobile, camping trailer,  pool,     motorcycle and water cooler/water delivery service.</td>
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="h"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#CD853F;color:white">&nbsp&nbsp Segment H: High Trades</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[7] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" />
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>•    Skilled Trades<br />
   • Secondary Education<br />
   • Hardworking<br />
   • Family Oriented</strong>
   <h3><strong>Personality Details</strong></h3> 
   <p>
   Working urban families in Vancouver or rural areas in the Maritimes, they    are likely Chinese, Korean, Portuguese and Spanish.  Income of <b>$71,826</b> and home value of    <b>$342,395</b>, they live in mobile homes or semi-detached houses with 2.55 in    household size.  
   Education: High school    or community college.  They work in the    trades, agriculture, engineering, applied sciences, transportation, primary,    processing and manufacturing.  They    support relatives, read about natural health and romance.  They do home renovation, some hunting and    fishing.
   Purchasing Big Ticket Items: More likely than the Canadian average to purchase motor home    and motorcycle.</td>
   </p>
   </td>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="i"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#191970;color:white">&nbsp&nbsp Segment I: Urban Life & Small Town</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[8] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" />
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>•    Service Industry <br />
   • Higher Spend On Basics<br />
   • Single Parents<br />
   • Home &amp; Community</strong>
   <h3><strong>Personality Details</strong></h3> 
   <p>
   Anglophones in small towns, in the Atlantic, Prairie, and BC provinces,    they tend to work in sales, service, the trades and transportation, many    without a work place.  Income <b>$70,907</b>,    home value <b>$251,987</b>, household size 2.60.     
   They spend more on water, fuel, hydro, telephone, child care, and car    expenses, driving to work.  13% more    than average share are one-parent households.     They enjoy home improvement, gardening, playing bingo and the    lotteries, and reading history and the Bible. Average on sports, less    skiing.
   Purchasing Big Ticket Items: More likely than the Canadian average to purchase water    cooler/water delivery service, satellite dish, car stereo, pool (above or    in-ground) and camping trailer.</td>
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="j"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment J: Joyful Country</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[9] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" />
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>•    Skilled Trades &amp; Services<br />
   • Heavier Spend On Basics<br/>
   • Spend On Basics<br />
   • Some Post-Secondary<br />
   • Outdoorsy / Crafty</strong>
   <h3><strong>Personality Details</strong></h3> 
   <p>
   Rural households with large share of Francophones, in Quebec, Maritimes,    Manitoba, and Saskatchewan.  Income    <b>$68,440</b>, home value <b>$215,836</b>, household size 2.58.  
   They spend more than average on house,    gardening, buses, medicine and bingo.     They give 47% above average to others living outside Canada.  They work at home, in the trades, and in    industries.  They hunt and fish more    than average.
   Purchasing Big Ticket Items: More likely than the Canadian average to purchase hot tub/spa,    snowmobile, pool (above or in-ground), satellite dish, camping trailer, power    boat (excl personal watercraft), tires and water cooler/water delivery    service.</td>
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="k"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#8FBC8F;color:black">&nbsp&nbsp Segment K: Rural Handyman</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[10] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>    
   <strong>• Largely Blue Collar<br />
   • Larger Single Family<br />
   • Some Secondary Education<br />
   • Older Homes</strong>
   <h3><strong>Personality Details</strong></h3> 
   <p>
   Mostly rural, of European ancestry, they work in the trades, transportation, on equipment, mining, farming, fishing and forestry.  Average Income <b>$62,343</b>.
   Average home value <b>$183,499</b>, household size 2.57.  They live old and young together in old large houses, giving a lot to others. They bingo, hunt and fish.  Many are farmers in Maritimes, Manitoba and Saskatchewan.Purchasing Big Ticket Items: More likely than the Canadian average to purchase snowmobile, boat, satellite dish, camping trailer, motor home and motorcycle, water cooler/water delivery service, tires, pool (above or in-ground), fireplace, vacuum cleaners, photo printer, home exercise equipment.
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="l"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment L: Apartment Dwellers</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
   <tr>
   <td width="52%" align="center" valign="top"><img src="<?php echo $segment_pic[11] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>   
   <strong>•   Mostly Seniors and Singles<br />
   • Soft Skills<br />
   • Disposable Income<br />
   • Mixed Interests</strong> 
   <h3><strong>Personality Details</strong></h3>
   <p>
   This segment is mostly Seniors and Young Professionals without kids, they have an average income of <b>$45,597</b>. Average home value <b>$183,528</b>.  Mostly renters and household size of 1.98.  
   High shares of females, immigrants, singles, and divorcées, they work in social sciences, art, culture, recreation, sports, sales and services.  They live in Canada’s large cities and have disposable income.  They travel more and own vacation properties, and donate to charities.  They read history, relationships, world news and politics. Average in sports.Purchasing Big Ticket Items: Due to dwelling type and lifestyle, the consumers in this segment refrain themselves from purchases of motor home, personal watercraft, pool, power boat, hot tub/spa, camping trailer, ski/snowboard equipment, sail boat, motorcycle, snowmobile, satellite dish, water cooler/water delivery service, fireplace and home exercise equipment. 
   </p>
   </td>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="m"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:#8B4513;color:white">&nbsp&nbsp Segment M: Single Again</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[12] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>   
   <strong>• Old    Age<br />
   • Primary Industries<br />
   • Bus, Metro, Walk<br />
   • Heaver Renters</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   Age 65+, (Boomers and Older). They live in Quebec and New Brunswick, rent, are mostly one-parent households, divorced, single or widowed.  Average Income <b>$59,135</b>. 
   Average home value <b>$217,678</b>, heavy renters, household size 2.32, they work in primary industries.  Many are part time workers, unemployed or retired and work at home or by bike.  They read about fashion, relationships, and mystery, and spend on cosmetics.  Average in sports, but slightly more in hunting. Purchasing Big Ticket Items:  Below average consumption, but more likely than Canadian average to purchase home air-conditioning,  car alarm/security system and motor home.
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="n"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:grey;color:black">&nbsp&nbsp Segment N: New Canadians</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[13] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>  
   <strong>•    Immigrant Strivers<br />
   • Genteel Blue-Collar<br />
   • Bus, Metro, Walk<br />
   • Young Families</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   Newly arrived from Africa, Asia, E. Europe, S. America, they work in blue-collar jobs well below their levels and live in Ontario, especially Toronto, Manitoba, Saskatchewan, and New Brunswick.  Average Income <b>$56,379</b>. 
   Average home value <b>$239,455</b>, mostly rented, and household size 2.31.  They are young 25-34 (Millennials)with children under 6.  They move frequently and read a lot. Less resource for sports. Purchasing Big Ticket Items:  Limited consumption, but more likely than Canadian average to purchase  digital radio (receives CD quality DAB broadcast), and personal watercraft. 
   </p>
   </td>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="o"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:pink;color:black">&nbsp&nbsp Segment O: Renters & Movers</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[14] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>  
   <strong>•    Singles + Couples<br />
   • Public Sector / Arts<br />
   • Frequent Movers<br />
   • Want To Own</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   They tend to be in the Maritimes and B.C.  
   Average Income <b>$50,201</b>and average home value of <b>$260,286</b>, heavy renters, and household size 2.06, 41% of them are one-person households.  Yet they send money to help persons outside Canada.  They work in the social sciences and primary industries and move frequently.  They read of fashion, science fiction and romance, go hunting, and plan towards buying a home. Purchasing Big Ticket Items:  Hardly any consumption on big items except a few of them, those who live on the coasts,  may be interested in sail boat.
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="p"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:orange;color:black">&nbsp&nbsp Segment P: One Parent Families</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
   <tr>
   <td align="center" width="52%" valign="top"><img src="<?php echo $segment_pic[15] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/> 
   <strong>•    Little Disposable Income<br />
   • Blue Collar / Sales<br />
   • Junior High Education<br />
   • Young Families</strong> <h3><strong>Personality Details</strong></h3>
   <p>
   They are found in Quebec, Manitoba, Saskatchewan, Northwest and Yukon territories.  Average Income <b>$50,862</b>. 
   Average home value <b>$242,104</b>, renting mostly, household size 2.61, they spend on children’s education.  
   They are blue-collar workers in sales, service, machining, processing and manufacturing.  The proportion of Native Canadians, Arabian, African, Caribbean and Italia, French, Spanish and Romanian is significant higher than average.  They read books on relationships, science fiction and romance.Purchasing Big Ticket Items:  Basic consumption on big ticket items,  i.e., home air-conditioning, baby furniture, car alarm/security system, snowmobile and personal watercraft.
   </p>
   </td>
   </tr>
   </table>
   </div>
   <div class="print_pages"  id="q"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_24" style="background-color:chocolate;color:white">&nbsp&nbsp Segment Q: Thrifty & Struggling</span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Descriptions</strong></td>
   </tr>
   </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
   <tr>
   <td align="center" width="52%"valign="top"><img src="<?php echo $segment_pic[16] ; ?>.jpg" alt="segment" width="350" height="350" class="image_border" /></td>
   <td align="left" valign="top"><h3><u>Key Traits:</u>
   <br/>
   <strong>•    Seniors / Single Moms<br />
   • Blue Collar Renters<br />
   • Public Transit Users<br />
   • Little Disposable Income</strong>
   <h3><strong>Personality Details</strong></h3>
   <p>
   Seniors (65+) (Boomers) and one-parent families with young kids.  
   Average Income <b>$32,672</b>. 
   Average home value <b>$170,821</b>, household size 1.96, they have very little disposable income.  2x above average are African, Caribbean, and Latin American.  Over 40% spend more than 30% of gross income on rent.  They spend more on laundry and moving.  They are one parent households high in widows, divorced and separated ones.  They are labourers in the process industries, sales, service, recreation and sports.  Over 21% live in Montreal.  Purchasing Big Ticket Items:  The only viable consumption on big items of consumers in this clusters seems to be the home air-conditioning. 
   </p>
   </td>
   </td>
   </tr>
   </table>
   </div>
   </div>
   </div>
   <?php 
      /*$segment_pic[0] ="family_pics/c_boomer_w";
      $segment_pic[1] ="family_pics/f_boomer_w";
      $segment_pic[2] ="family_pics/f_mixed_eth";
      $segment_pic[3] ="image3/f_genx_w22";
      $segment_pic[4] ="image3/c_genx_w3";
      $segment_pic[5] ="family_pics/c_mature_w";
      $segment_pic[6] ="family_pics/f_mixed_w";
      $segment_pic[7] ="family_pics/c_boomer_eth";
      $segment_pic[8] ="family_pics/f_genx_w";
      $segment_pic[9] ="age_pics/s_mature_w22";
      $segment_pic[10] ="family_pics/genx_fishing";
      $segment_pic[11] ="family_pics/a_mixed";
      $segment_pic[12] ="family_pics/c_70s_white";
      $segment_pic[13] ="family_pics/sp_genx_ch";
      $segment_pic[14] ="family_pics/c_genx_w";
      $segment_pic[15] ="family_pics/k_mature_w";
      $segment_pic[16] ="family_pics/geny_mom_baby";
      $segment_pic[17] ="f_boomer_w";
      */
      
      ?>
   </head>
   <body>
   <div id="niche">
   <div class="page_wrap"> 
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:yellow;color:black">&nbsp&nbsp Segment A: Affluents</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[0] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3" style="margin-left:10%"><table cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin">A1</strong></td>
   <td width="101"><strong>Top Leaders (0.98% of Canadian    Households)</strong></td>
   <td width="761">This is a niche of the top    leaders in the socio-economic network of Canada with annual income of    $223,509. They are able to afford most goods and services.  Proportion of business owners is the    highest among all niches.  Their    dwellings are in the top, oldest established neighbourhoods, where their    mansions are very well renovated,     maintained and worth of $1,145,431.     They are also highest in education and the investment in children's    education.  They are concentrated in    Toronto (58.69%), Montreal (9.4%), and Vancouver (19.16%).  Other than the older British/Canadians,    there are 6.3% Jewish, 9.2% Chinese, and 4.3% Russian in this niche.  The penetration of Jewish households is    especially significant given that their population is only 0.6% of the    Canadian total population.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">A2</strong></td>
   <td width="101"><strong>Owners Of New Castles (0.86% of    Canadian Households)</strong></td>
   <td width="761">This niche is strongly coloured    by Chinese (7.5%), followed by South Asian(5.8%) and Other    European(4.9%).  They are located in    Toronto (42.8%), Calgary (15.9%) and Ottawa (7.0%).  They prefer new houses and live in    multiple-family households so childcare is not an expense. They smoke, drink,    eat out and entertain well above average. Their annual income is above    $173,326. They spend much more than Canadian average on children education,    courses, textbooks but not so much on camps.     There is a high penetration on technical, engineering professionals in    this niche, although their lifestyle is beyond the traditional professionals.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td><strong class="margin">A3</strong></td>
   <td><strong>Nature And Tradition Lovers    (0.90% of Canadian Households)</strong></td>
   <td>A3's are more likely to be    old-fashioned Canadians, with some Chinese, Italian and French.  Being conservatism and using cash, they pay    negligible bank charges, brokerage commissions and investment advice.  They prefer natural cooking, and have    domestic helpers.  They spend    extravagantly on children, in-home childcare (Index=680), outside childcare    (Index=769) and camps (Index=725).  Of    the four niches in A, they spend least on education, healthcare, personal    care and entertainment, though still above average. They do like to go to    live sports events.  They live in major    cities: Toronto, Ottawa, Montreal, Vancouver and Calgary. Apparently their    good income ($151,942) and passion to nature and tradition provide them good    health and balance life.  </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td><strong class="margin">A4</strong></td>
   <td><strong>Old Technocrats (0.31% of    Canadian Households)</strong></td>
   <td>A4's are the top technocrats    and professionals with annual income of $145,023.  They are distributed in Toronto (44.2%),    Ottawa (13.8%) and Vancouver (6.7%).     More public institution leadership is reflected in their careers.  They spend almost as much time as A1 on    education; invest in courses and education materials for themselves and their    children, who tend to be older.  No    childcare is needed although they send their grandchildren to camp a    lot.  This niche has the highest    proportion of British ancestry among the A1-A4 niches. A small portion of    them live in condominiums.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#2A64A1;color:white">&nbsp&nbsp Segment B: Elite Professionals</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[1] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin">B5</strong></td>
   <td width="101"><strong>House Of Gadgets (1.10% of    Canadian Households)</strong></td>
   <td width="761">B5's are Gadget-Men,    [Gadget-Persons].   With income of    $132,404, they buy every device to excess and probably use them well    too.  They show no renovation, repairs    and alteration payouts because they do all the renovations themselves.  Being the highest income group of the    cluster B, they can afford all these gadgets, appliances, computer software    and hardware and have the passion for them.     They live in Toronto (31.1%), Ottawa (11.5%) and Calgary (12.5%). They    have the highest education in engineering, math, science, but also with    business and management.  When not    working on &quot;stuff&quot;, they love taking package tours    (Index=238).  They devote a lot    (Index=382) to RRSP. Household size = 3.2.  </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">B6</strong></td>
   <td width="101"><strong>Ethno Technocrats (0.73% of    Canadian Households)</strong></td>
   <td width="761">Call this niche the Chinese    Technocrats because of their proportion 15.9%, compared with 18%    &quot;Canadian ethnic&quot; professionals.     Technically trained, they are balanced in occupations of management,    sales and service, and in their life of relatively young families, as well as    in multiple-family households.  Divided    between BC and Ontario, they focus on their houses and actively participate    in the buying-and-selling game, paying for appraisals and surveying.  Their household income is roughly $123,045.    Their children need a lot of childcare and the attendant educational    nurturing services. They are active in sports, health clubs, social clubs,    and in investments.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">B7</strong></td>
   <td width="101"><strong>Harvard Professionals  (0.74% of Canadian Households)</strong></td>
   <td width="761">Call B7's Quebec Professionals    because most of them live in Montreal and Quebec City.  The dominant groups have 28% French and 24%    British ancestry.  They have good    education and work in finance and administration with household income of    $113,821. They are heavily dedicated to education and training, not only for    themselves, but also for their children, who are in various stages of    schooling from nursery school to secondary.     Quebec's relatively low cost in real estate accords them lower    expenditure for housing.  Even 8.7% of    them choose to live in apartments in the cities while spending for renting    recreation vehicles.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">B8</strong></td>
   <td width="101"><strong>Family Technocrats (1.65% of    Canadian Households)</strong></td>
   <td width="761">Calgary, Ottawa, Edmonton are    the cities where B8's reside.  The    British ancestry is larger here with smaller numbers being Ukrainian(6.7%),    Polish(5.1%), and Northern European(5.3%).     They work in Sales and Service, Administration, and in Management with    household income $116,152, while some are involved in the far North like    Nunavut.  Having a relatively large    household of 3.01 persons, they are dedicated to their children's education    and childcare.  They love new houses,    single-detached, and vacation homes, which lead to buying trucks and    recreation vehicles.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">B9</strong></td>
   <td width="101"><strong>Balanced Professionals (0.86% of    Canadian Households)</strong></td>
   <td width="761">B9's are the models of the    active, balanced lifestyle.  With    income over $113,947, they spend heavily on female apparel, on upgrading    their professional skills, and on the education for their children.  They balance out by being very active in    the outdoors, with sports and recreation.     Those of British ancestry are still the largest part, plus    European(42%) and Chinese(5.56%), Southern Asian(4.6%) are also represented    above the average.  Their dwellings are    either more likely to be the oldest type, built before 1946. or the newest    ones, built after 2001. Renovations and alterations are part of their    lifestyle.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">B10</strong></td>
   <td width="101"><strong>Freedom Technocrats (1.00% of    Canadian Households)</strong></td>
   <td width="761">B10's show more of the free    spirit by their above average tendency to use motorcycles, and to go to live    sports events.  Their household income    is around $114,659. They are more likely to be single (29%), and to live in    condominiums, apartments, duplex or semi. Their dwelling value* ($721,211) is    the highest among the Elite Professional in Cluster B. They are also more    likely than Canadian average to buy travel trailers and powerboats.  The key ethnic groups are Other    European(5.0%), Chinese (8.8%).  They    are urban dwellers in major cities, including Toronto, Ottawa and Vancouver. <br />
   *Home value is consumer self-reported. It can be 30%~40% below the current    market value.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:red;color:white">&nbsp&nbsp Segment C: Ethnic Cruisers</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[2] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin">C11</strong></td>
   <td width="101"><strong>Ethnic Achievers (0.89% of    Canadian Households)</strong></td>
   <td width="761">C11's, Ethnics Achievers have a    household income of $107,157.  They    tend to be Southern Europen(28.0%); more likely live in Toronto (75.2%).  Chinese (8.4%), and South Asian (11.2%).  With large household size (3.3),    particularly multiple-family households, they have achieved a good life with    large houses. Their dwelling value is about $415,162.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">C12</strong></td>
   <td width="101"><strong>Ethnic Extreme Sports (0.60% of    Canadian Households)</strong></td>
   <td width="761">Consumers in this niche are    extreme in their dedication to an active life.  Besides the large usual proportion of    British Canadians, C12's are Chinese (8.0%), Polish(6.0%) and Other    European(7.1%).  They live almost    exclusively in Toronto with dwelling value over $697,109.  What sets them apart are the tremendous    amounts they put out to buy all manners of fun vehicles with indices as    follows: tent trailers (Index=718), truck campers (220), travel trailers    (206), Outboard motors and watercrafts (106), snowmobiles and boats,    etc.  The index 718 means 7 times the    Canadian average household expenditure on the item - tent trailers.  They also own cottages, buy antiques and    art.  Furthermore, they are the most    extreme attendants at live sports events of all niches, at seven times more    than Canadian average. Their household income is about $138,543.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">C13</strong></td>
   <td width="101"><strong>Beautiful Homes (0.57% of    Canadian Households)</strong></td>
   <td width="761">C13's are West Coast Orientals:    Chinese (8.8%), Ukrainian (5.0%) and South Asians (6.8%), plus Koreans, and    Japanese with household income around $104,256.  Because of the fashion in Vancouver, the    dwelling becomes the main focus besides the children's nurture and    education.  This is evidenced by the    high value of their dwellings (&gt;$558,255), plus the expenditure items    around the preparation of houses for sale or purchase, namely surveying,    furniture, transfer taxes, and realty commissions.  They may not spend as much on the    recreational vehicles as C12's. They also invest in vacation properties,    children's musical training and special courses.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">C14</strong></td>
   <td width="101"><strong>Visible Valuables (1.11% of    Canadian Households)</strong></td>
   <td width="761">Heavily consists of visible    minorities like South Asian (29.9%), Chinese (9.7%), and Caribbean    (9.6%).  Toronto is their main    base.  Though not as extreme as with    C12's, they also spend above average amounts in recreation vehicles like tent    trailers (Index=228), travel trailers, snowmobiles, and boats.  Being of large multiple-family households    with 3.58 persons, they tend to share childcare of their young children.  In addition to occupations in    administration, finance, sales and service, workers in the processing and    manufacturing industries are showing up in this niche.  Their dwelling value is moderate    ($385,622), but multiple earners in the households provide them great    purchase power ($88,622).</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">C15</strong></td>
   <td width="101"><strong>Bollywood Dream (0.48% of    Canadian Households)</strong></td>
   <td width="761">C15's are dominantly South    Asians in BC.  The South Asian    community in BC started earlier than in Ontario.  As immigrants, they came here before the    expulsion from Uganda.  Some of them    have become farmers, taking up roots in Vancouver, and into the Kelowna    area.  The ethnic representations are    South Asians (26.7%), Chinese (6.2%), Oceanian(1.1%), Pacific Islands Origin    (0.9%), with British just 31.1% in this niche.  Located in BC, they follow the fashion of    being caught up in the real estate trade.     Besides administration, finance, sales and services, two areas now    take up significant job positions here: transport, trades and equipment    operation, and processing and manufacturing.     With household income above $82,341 and dwelling value over $492,093,    their lifestyle is seen in Bollywood (Indian) movies.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:purple;color:white">&nbsp&nbsp Segment D: Nest Builders</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[3] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin">D16</strong></td>
   <td width="70"><strong>Build With Recreation (1.22% of    Canadian Households)</strong></td>
   <td width="762">D16's consist of Southern    European (14.3%), South Asians (8.0%), and Caribbean Origins (3.2%).  This lifestyle niche has two-thirds    residents in Ontario (Toronto, Ottawa), 14.2% in Calgary and Edmonton.  They settle for smaller houses, row house    and semi-detached.  Dwelling value is    around $355,308, types.  One of their    objectives is paying off the mortgage fast.     With the average household income of $101,023 and small mortgages they    can afford to spend on the recreation vehicles and boats.  Living in multiple-family households with    young children, they do not show childcare expenses because probably someone    takes care of their children at home. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">D17</strong></td>
   <td width="70"><strong>Additions, Additions (0.51% of    Canadian Households)</strong></td>
   <td width="762">D17's turn from the travel    trailers to children as their main focus. They spend 5X average on child    care, and spend more on maitaining house(average value $360,819).  They tend to take on older houses from    1946-60 and spend on renovating them. Southern and Eastern European are the    top ethnic groups, and they are located in Ontario and Alberta.  Besides Toronto, the most populated cities    of this lifestyle of consumers are Ottawa, Calgary and Edmonton.  Their other focus is on the children's care    and education.  They spend tremendously    on childcare, courses, books and supplies. Their average household income is    about $91,921.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">D18</strong></td>
   <td width="70"><strong>Buy Good Stuff For The House    (0.76% of Canadian Households)</strong></td>
   <td width="762">The proportion of British    descendants rises to 54.9% in this lifestyle niche.  The next highest ethnicities are Western    European (20.9%) and Northern European (4.9%).  D18's as nest builders take a totally    different track.  Instead of putting in    new additions and alterations, which need a lot of work and skills, D18's    invest in the appliances like refrigerators, new stoves, and new ovens.  These are different from The Gadget-Men who    do their own repairs and major work.     Consumers in this lifestyle niche take on the Vancouver housing market    by investing in the internal gadgets. Their average dwelling value is    $387,123 and household income is about $93,896.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">D19</strong></td>
   <td width="70"><strong>Panorama (0.45% of Canadian    Households)</strong></td>
   <td width="762">D19s' idea of a nest is a good    condominium (average value over $512,096).     That being the case, they live in the four big condo markets, Toronto    (31.3%), Vancouver (27.8%), Montreal (13.7%) and Ottawa (8.5%).  The principal minorities here are Chinese    (8.0%, 2X Canadian average), West Asian(1.9%) and Other European (3.1%, 3X    Canadian average).  Their occupations    are likely in social science, education and government (13.4%), and    management (14.5%).  Compared with    Canadian average, the proportion of pet owners is high.  They also tend to walk or cycle to work.   With average household income of $92,527,    42.4% being single professionals and 1.5X average being renters, these    consumers have great disposable purchase power.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">D20</strong></td>
   <td width="70"><strong>Well Rounded Cocoon (1.33% of    Canadian Households)</strong></td>
   <td width="762">Consumers in niche D20 are    remarkable in that they are quite balanced in their lifestyle.  They do many things slightly above average    but not in the extreme.  They have    above average expenses in tuition fees, musical instruments, crafts and    artist materials. They are likely to have children aged 6-14.   They lead above average active lives,    spending on bicycles, sports equipment, children's vehicles, stamps and coin    collectibles, and going to live sports events. Their homes are likely to be    new (less than 10 years old), and they do alterations and maintenance to keep    the houses valuable ($330,452).  The    sizeable minorities are Ukrainian (5.4%) and Poslish (4.2%). The proportion    of  Edmonton residents in this niche is    significantly high. Their household income is around $95,715.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">D21</strong></td>
   <td width="70"><strong>Live It Up (1.29% of Canadian    Households)</strong></td>
   <td width="762">D21's hail from Ottawa,    Edmonton, Calgary and Montreal with household income over $90,679 and    dwelling value over $274,981.  They    spend about 2.3X average on recreation vehicles and boats.  Also they donate to charities about 2.7X,    and their consumption on vehicles are high too.  They have above average consumption of    alcohol in bars and at home and also in moving expenses.  The indices of Canadian, French, Arabian    and Ukrainian are significantly high. Home is likely semi-detached house or    row house.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:green;color:white">&nbsp&nbsp Segment E: Buy Me A New Home</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[4] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" ><strong class="margin">E22</strong></td>
   <td width="102"><strong>Home For The Children (2.90% of    Canadian Households)</strong></td>
   <td width="760">E22&rsquo;s are from Toronto (24.9%),    Calgary (13.5%), Ottawa (5.9%) and Edmonton (5.5%). Their household income is    about $100,626 and dwelling value $371,941. They spend 2X more than average    on childcare.  But they are dedicated    to their home.  They bought new houses    of less than 10 years and already they are putting major alterations and    additions.  They are different from    D17&rsquo;s in that D17&rsquo;s take on old houses and spend on them to upgrade and    renovate.  They are stretching to keep    this house, and yet they do send money and support to their loved ones    outside Canada, as the index of immigrants from 1970-1990 is significantly    high.  They are technocrats as well as    generalists in commerce so more of them are upper middle managers.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">E23</strong></td>
   <td width="102"><strong>Stretching Dollars (0.82% of    Canadian Households)</strong></td>
   <td width="760">E23&rsquo;s are 36.6% Chinese and    divided 44% in Toronto and 38% in Vancouver.     Look at the massive house value ($561,262) they are stretching to    maintain compared with all other niches within this lifestyle cluster, you will    understand the dedication to owning their homes in the Chinese immigrant    psyche.  Their household income is    about $89,488.  They tend to have large    households (3.2 persons), of which a high proportion, 7%, have 6 or more    persons.  In the metropolitan areas    Toronto and Vancouver it is a blend of three waves of immigration over the    70s, 80s, and 90s.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">E24</strong></td>
   <td width="102"><strong>Antiques (0.92% of Canadian    Households)</strong></td>
   <td width="760">E24&rsquo;s build their &ldquo;home&rdquo; based    on buying a lot of things, like antiques, works of art, carvings, carpets and    picture frames.  Outside, they buy    motorcycles, recreation vehicles, boats and snowmobiles.  They also have pets and are likely to    pamper their pets in these small households of 2.7 persons as if they are    children.  They are likely to call    themselves British (36.3%), French (20.2%), Candian(38.4%) and European    (31.5%).  Their home value is about    $285,479 and household income is slightly over $89,348. However, the    proportion of people with income over $100,000 is significantly higher than    Canadian average.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">E25</strong></td>
   <td width="102"><strong>Open Road (1.01% of Canadian    Households)</strong></td>
   <td width="760">E25&rsquo;s love to travel with    recreational vehicles.  This is the    main focus of the niche living, geographically tied to Edmonton (14.3%),    Vancouver (7.9%) and Calgary (7.9%).     They also seriously want to use these recreational vehicles so they    spend about 6x average on gasoline and fuel going long on the road. Their    house value is around $320,939 and household income is about $91,038.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">E26</strong></td>
   <td width="102"><strong>Downtown Dwelling (1.25% of    Canadian Households)</strong></td>
   <td width="760">E26&rsquo;s are geographically    located in Montreal and Ottawa.  They    have young children and are dedicated to their childcare.  They own houses that are less than 10 years    old that tend to be semi-detached.     Their house value is about $238,063 and household income is around    $90,478.  They are part of the scenes    in the theatres, restaurants of old Montreal and Crescent Streets.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">E27</strong></td>
   <td width="102"><strong>Home Make Over (1.14% of    Canadian Households)</strong></td>
   <td width="760">Strictly a Toronto niche, it    consists of a mixture of various ethnic types in small households (2.9    persons).  They take on old houses from    1946-60 and try to maintain them.  Still,    they want to travel in trailers or go boating.  They work at jobs in business    administration, finance, sales and service plus trades. Their house value is    around $408,843 and household income is about $80,663.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">E28</strong></td>
   <td width="102"><strong>Semi-Suburbanites (0.55% of    Canadian Households)</strong></td>
   <td width="760">Montreal and Ottawa are their    locations.  This lifestyle niche has    many similarities to E26.  Both are    highly represented by French speakers in Montreal and Quebec.  E28&rsquo;s are less downtown in mentality,    devoting more resources to vehicles: automobiles, recreation vehicles and    boats.  Consumers in this lifestyle    niche have houses built in 1971-80, which are not as new as those of    E26&rsquo;s.  They do more outdoor activities    than E26&rsquo;s and like to brew their own wine while E26&rsquo;s do not. Their house    value is about $213,074 and household income is around $85,456. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">E29</strong></td>
   <td width="102"><strong>City High-Rise (0.65% of    Canadian Households)</strong></td>
   <td width="760">E29&rsquo;s are living in high-rise    condominiums and apartments in Toronto, Montreal and Vancouver.   Their house value is about $418,844 and    household income is around $68,727.     Ethnicity includes Chinese (8.1%), South Asian (6.0%), and West Asian    (3.3%).  At a household size of 2.0    they have no children living with them and so prefer apartment living.  The Jewish portion in this niche is    significantly higher than the national average.  </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">E30</strong></td>
   <td width="102"><strong>Old-time Melting Pot (1.05% of    Canadian Households)</strong></td>
   <td width="760">E30&rsquo;s are a mixture of many    different ethnic groups: Southern European (25.6%), Latin American (3.5%),    Chinese (6.8%), South Asians (7.5%), Caribbean (4.9%), and West Asian    (1.4%).  This is totally a Toronto    phenomenon.  The families have been    here for 20 to 40 years.  They are in    multiple-family households with some being 6 or more persons.  They own a mix of detached (45.0%),    semi-detached houses (18.5%), and Duplex (12.8%). They spend average on    additions and renovations. Their house value is about $362,438 and household    income is around $70,709. </td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#FF7F50;color:black">&nbsp&nbsp Segment F: Empty Nesters</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[5] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" ><strong class="margin">F31</strong></td>
   <td width="102"><strong>Active Boomers (0.57% of    Canadian Households)</strong></td>
   <td width="760">Empty nesters retain their    detached homes (84.7%) in the major cities: Toronto (14.0%), Montreal    (11.3%), Ottawa (9.8%), Calgary (8.6%), and Edmonton (5.4%).  They also own vacation homes and travel    trailers, and take packaged tours.     Starting to retire but still staying active and having income, they    ethnically identify themselves as British (46.5%), East European(15.3%), and    Other European(4.57%). The appearance of diapers and baby clothing in their    expenses in a 2.7 person household shows grandchildren visiting and/or    housing. Their household income is about $98,084 and property value is over    $335,806.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">F32</strong></td>
   <td width="102"><strong>Grannies On The Town (0.61% of    Canadian Households)</strong></td>
   <td width="760">Montreal, Toronto, Ottawa, and    Vancouver are the main residing cities of consumers in this niche. They live    in houses built equally over the last four decades.  Though small in household size (2.8), they    have income over $101,858 and their house value is about $403,567.  They have the similar expenditures on    diapers and baby clothing as the niche F31, mainly for baby-sitting    grandchildren.  They are British and    French, with some Polish and Arabian. One small ethnic group called West    Asians, i.e., Middle Easterners, are congregated here at 1.5%.  Financially quite capable also, they eat    out, go to movies, and take packaged tours.     They buy more grocery as well.     They spend on personal care items of various kinds at above average    level (Index=176 and up).  They are big    meat eaters.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">F33</strong></td>
   <td width="102"><strong>Devoted Grannies (0.72% of    Canadian Households)</strong></td>
   <td width="760">Devoted to grand children is    the central theme of their lives now.     They spend on childcare in home and outside the home, on daycare    centers and children's camps.  They    spend heavily on tuition fees as well for those who are of age to go to    college.  With a household size of only    2.4, it means a grand child is living with them while they are still very    active themselves.  Living in Toronto    (16.8%), Edmonton (4.4%), Ottawa (4.7%), Manitoba (4.9%), and Nova Scotia    (4.7%), they are active in real estate transactions. Their household income    is about $87,914 and house value is over $355,674.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">F34</strong></td>
   <td width="102"><strong>5th Wheelers (0.66% of Canadian    Households)</strong></td>
   <td width="760">Mostly in British Columbia and    spreading outside of Vancouver, they spend heavily on recreation vehicles and    use them a lot based on their fuel consumption.  They have above average expenditures on    medicine meaning some health challenge is surfacing. They are trying to take    time off to enjoy the beautiful west coast lands and water.  They give financial support to someone in    Canada, probably their children. Their household income is slightly over  $76,719 and house value is around  $399,189.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">F35</strong></td>
   <td width="102"><strong>Volunteers For Health (0.35% of    Canadian Households)</strong></td>
   <td width="760">F35's are volunteers.  They give their time and money to religious    and non-religious charities.  They    don't smoke or drink much.  They read a    lot.  They are located in Ontario    (43.2%), BC (22.3%) and Nova Scotia (6.3%), but are spread away from the    major cities.  They own vacation homes,    take packaged tours, and make their own wine.     Like F34's they also have some health challenges ongoing.  As empty nesters they don't have the need    for childcare, but they do spend more time on senior care.  Their household income is close to  $80,990 and house value is approximately    $352,558.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">F36</strong></td>
   <td width="102"><strong>Hobbyists (0.90% of Canadian    Households)</strong></td>
   <td width="760">Consumers in the niche F36 live    mostly in Ontario, in the smaller towns and cities where they can go browsing    around for antiques, works of art, sculpture, carvings, mirrors and    decorations.  They have older houses from    1946 and before and devote their attention to repairs and renovations. Their    house value is about $266,052 and their household income is about $77,378.    They are mostly of European ancestry.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">F37</strong></td>
   <td width="102"><strong>Trailers In Pursuit Of Health    (1.03% of Canadian Households)</strong></td>
   <td width="760">Spread through Ontario,    Alberta, Manitoba and Saskatchewan, in the small towns and in Edmonton, F37's    are people with medical challenges and are in pursuit of good spirit using    their motor homes, trailers, or tent campers.     Their expenditures in these categories are much higher than Canadian    average. They are ethnically British and a wide range of Europeans, including    Ukrainian, Polish, German, Hungarian, Czech and Slovaks. Their household    income is slightly over $72,274 and house value is about $241,702.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">F38</strong></td>
   <td width="102"><strong>Bingo Road-Show (0.53% of    Canadian Households)</strong></td>
   <td width="760">Maritime rural empty    nesters.  That is a quick way to    describe them.  Though spreading from    Newfoundland to Manitoba, they are more likely than the other empty nesters    to live in the rural lifestyle.  They    are the heaviest spenders among the empty nesters on recreation vehicles.    They spend on boats and take long distance buses to visit places. They take    photographs on the trips and love bingo.     Their house value is about $189,086 and their household income is    about $66,461. </td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#BA55D3;color:white">&nbsp&nbsp Segment G: Up The Ladder
   </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[6] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" ><strong class="margin">G39</strong></td>
   <td width="101"><strong>Childcare Arts &amp; Craft    (2.50% of Canadian Households)</strong></td>
   <td width="761">G39's have large families in    Calgary, Edmonton and Saskatchewan. They spend 1.7 times average on childcare    of various sorts so that both parents can work.  They live in semi-detached houses and row    houses built in 1996-2006.  The ethnic    identify is mixed, with South Asians (4.6%), Polish (4.3%), First Nations    (5.8%), Ukrainian (6.4%), Russian (2.0%). They spend on arts and craft,    antiques, pictures and artists materials to create the handicrafts    themselves. Their household income is about $82,597 and house value is around    $292,634.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">G40</strong></td>
   <td width="101"><strong>Artistically Ambitious (0.87% of    Canadian Households)</strong></td>
   <td width="761">G40's are small households of    2.2 persons in Vancouver (16.2%), Toronto (17.3%), Ottawa (10.1%) and Calgary    (11.6%).   They are likely to live in    older dwellings built before 1946, and in low-rises, high-rises, and row    houses as tenants.  These dwellings    tend to have no laundry equipment so they do frequent Laundromats.  They are 1.6X average graduates with    bachelor's degrees and have occupations in art, culture, recreation and    sports.  Ethnically the minorities are    Other European (1.9%), Chinese (6.0%), Arabian (2.2%) and West Asian (1.4%).    The average household income is about $82,912.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">G41</strong></td>
   <td width="101"><strong>Recreational Renters  (1.01% of Canadian Households)</strong></td>
   <td width="761">G41's are mostly a Montreal    story, mainly French, or Canadian.     They are families of 2.5 persons.     They purchase their detached houses built before 1980.  They continue to spend on renovations and    additions to the house.  They work in    administration, sales services, in machine operation and trades.  They do above average amount of recreation    with rented trailers and boats. Some even start to buy vacation homes.  Their house value is about $193,507 and    household income is slightly above $73,308.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">G42</strong></td>
   <td width="101"><strong>Fix Me Any Home (0.59% of    Canadian Households)</strong></td>
   <td width="761">G42's are visible    minorities.  A larger portion (28%) of    them speaks a non-official language as their mother tongue.  The mix consists of Chinese (10.6%), South    European (16.8%) and South Asians (10.3%) plus smaller numbers of Latin,    Central and South American Origins, Caribbean, Black, West Asian. They live    in Toronto, and Vancouver. Because the housing prices are higher here, they    buy or rent dwellings of any types that they can get and fix them up, from    low-rise apartments to single detached homes. They live in houses valued    around $420,405 and their household income is about $72,723.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">G43</strong></td>
   <td width="101"><strong>House In The Country (0.62% of    Canadian Households)</strong></td>
   <td width="761">Located in Ontario, British    Columbia and Quebec just as the niche G42, but they distinguish themselves in    that they live in the rural areas.  In    this way they can afford houses rather than renting apartments, and they are    of British, French and Aboriginal background.     They are 16% above average in being self-employed, using their trained    skills to make a living while enjoying country life.  They go to bars, indulge in games of    chance, and travel with recreation vehicles. Their house value is about    $284,000 and household income is slightly above $72,290.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">G44</strong></td>
   <td width="101"><strong>House Flips (0.86% of Canadian    Households)</strong></td>
   <td width="761">G44's are a Vancouver    niche.  The dominant ethnic line-ups    are Chinese (27.3%), South Asian (12.9%), British (20.3%), European    (24.8%).  Thoroughly wrapped up in the    Vancouver housing heat, they carry an average dwelling value ($561,000), well    above the other niches in this lifestyle cluster.  They are immigrants from three waves over    the last four decades so there are various housing preferences ranging from    apartments to single detached houses. Household size is 2.6. 2.6X    multi-family households means mutual help. Their average household income is    around $61,204.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#BA55D3;color:white">&nbsp&nbsp Segment G: (con't)
   Up the ladder</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[6] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="37" ><strong class="margin">G45</strong></td>
   <td width="70"><strong>Face A Health Challenge (0.38%    of Canadian Households)</strong></td>
   <td width="761">G45's households have a family    member with health challenges.  They    live in the urban centers of Quebec, Ontario and BC, renting rather than    owning their dwelling.  Their priority    budget items are young children's education, and the special medical    expenses.  They take public    transportation and spend twice as much as their peers on education.  For recreation, they go to bars, drink and    smoke at home, and play in the stock market.     They live in newly built homes valued at around $216,000 and their    household income is about $75,579.  The    indices of Canadian and French ethnicities are significantly high.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="37"><strong class="margin">G46</strong></td>
   <td width="70"><strong>Rural Expert Self-Employed    (1.71% of Canadian Households)</strong></td>
   <td width="761">Consumers in the niche G46 are    likely to be rural self-employed with high education in agriculture and the    biological sciences and technology, and workers in trades, transport,    equipment operations and primary industries.     They live in rural Ontario, Quebec, British Columbia and Alberta and    are mostly British, French, American, West and North European    ethnicities.  They own their houses,    recreation vehicles, boats, and pets. Their house value is about $239,000 and    household income is slightly above $69,078.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="37"><strong class="margin">G47</strong></td>
   <td width="70"><strong>City Technicals (1.85% of    Canadian Households)</strong></td>
   <td width="761">G47's are located more likely    in Quebec and Alberta. They are urban workers. They also own pets, send their    children to kindergarten, and indulge in games of chance.  Their ethnic roles are reversed with a    majority of French and a minority of British. Some are Caribbean. Proportion    of people living in dwellings built in 1970-1980 is significantly higher than    the Canadian average. Their house value is about $200,000 and their household    income is close to $73,638.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="37"><strong class="margin">G48</strong></td>
   <td width="70"><strong>Downtown Socialites  (0.59% of Canadian Households)</strong></td>
   <td width="761">Like the niche G47, consumers    in G48 are even more likely to be French living around Montreal.  They are mostly the downtown living    families.  They rent rather than buy    their dwellings.  Their children are    younger and require a lot childcare and education from kindergarten to high    school.  They avail themselves of the    niceties of the city life more, going to museums, shows, movies, and    bars.  They also buy alcohol and    cigarettes as well as CD, DVD, books and magazines more than the Canadian    average does. They live in houses valued around $209,000 and their household    income is about $70,650.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="37"><strong class="margin">G49</strong></td>
   <td width="70"><strong>Childcare For Working Parents    (0.74% of Canadian Households)</strong></td>
   <td width="761">Ethnically this niche is a    mixed group, with 4.8% South Asians, 4.1% Chinese, 13% French, and 4.7%    Ukrainian. The indices of Black, Hispanic, Jamaican, West Asian, Arabian and    Spanish are well over 150.  They spread    out in the cities of Ottawa, Edmonton, Vancouver, and Calgary, and live in    homes built in 1970's, particularly in townhouses.  Noticeable is the household size of 2.8 and    the above average number of one-parent households in this niche. This implies    more needs of childcare when the parents work.  Their household income is about $63,059 and    property value is around $243,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#CD853F;color:black">&nbsp&nbsp Segment H: High Trades
   </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[7] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="37" class="margin"><strong  class="margin">H50</strong></td>
   <td width="70"><strong>Work And Play (0.95% of Canadian    Households)</strong></td>
   <td width="761">The index of Chinese (20%) is    well over 559, followed by South Asians (7.8%), West Asian (1.8%), Filipinos,    Japanese and Indo-Chins.    Over 57.3%    of consumers in this niche live in BC, mostly in Vancouver.  They live in apartments and semi-detached    houses, and own homes valued ($562,000) twice those of other niches nearby    here.  They generally work for    companies as skilled workers in machine operation or the trades.  Affected by the recreation fashion of    Vancouver, they rent recreation vehicles and boats. Their household income is    around $72,884. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="37"><strong class="margin">H51</strong></td>
   <td width="70"><strong>Thrifty Tradesmen (0.48% of    Canadian Households)</strong></td>
   <td width="761">Centred in Toronto with the    racial make-up: Chinese (11.1%), South European (21.9%), South Asian (5.6%),    and Blacks (2.2%).  They tend to be    renters rather than house owners and are thrifty, living in old houses built    before 1946.  They work in the trades    and take public transit.  They live in    multiple-family households whose internal activities alone keep them away    from the far more costly recreational activities.  Their household income is about $75,368 and    house value is around $422,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="37"><strong class="margin">H52</strong></td>
   <td width="70"><strong>SOHO Tradesmen (2.54% of    Canadian Households)</strong></td>
   <td width="761">West European and English, they    are the Tradesmen in rural Alberta, British Columbia, Saskatchewan, Nova    Scotia and Newfoundland. They tend to be self-employed working out of their    home.  The indices of dwellers in trailer    homes or semi-detached houses are significantly higher than the Canadian    average.  They keep companion with    their pets, tend small plots of fruits and vegetables, watch TV and play    bingo. Their household income is about $70,763 and house value is around    $246,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:blue;color:white">&nbsp&nbsp Segment I: Urban Life & Small Town
   </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[8] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin">I53</strong></td>
   <td width="102"><strong>Children's Education (1.07% of    Canadian Households)</strong></td>
   <td width="760">Children's education, books,    and daycare centres are the highest priorities for consumers in this    niche.  Next come major expenditures on    additions, renovations and repairs for their houses built during 1961-80.  The small towns they live in are in    Ontario, Quebec, BC Alberta and Saskatchewan.     You can find almost all the ethnic groups in this urban Life in Small    Town.  Noticeably, the indices of    British, North European, East European, Caribbean, Arabian households are    significantly high. Their urban lifestyle is also reflected in their dwelling    types (town houses and semi-detached houses with the average value $285,000).    They do have a comfortable household income of $80,514.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">I54</strong></td>
   <td width="102"><strong>Small Town Bingo (1.03% of    Canadian Households)</strong></td>
   <td width="760">I54's love new houses but they    are 32.1% located in the rural areas and half in the urban centres of the    small cities of Ontario, New Brunswick, BC and Alberta.  Indices of both single detached houses and    movable dwellings are significantly high.     There are more unpaid family workers in this niche than the Canadian    average. They spend more time on childcare and love to play in the games of    chance. They are more likely English, West European and East European. Their    household income is about $82,545 and house value is around $275,000. They do    not travel much but use a lot of telephones and cell phones. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">I55</strong></td>
   <td width="102"><strong>Medium Old Houses (1.46% of    Canadian Households)</strong></td>
   <td width="760">I55's live in houses built    during 1971-80, and in the small cities of BC, Alberta, Manitoba, Ontario,    and Nova Scotia. They do a moderate amount of upkeeping of their houses which    are likely to be (semi-) detached, townhouses and movable dwellings. They are    pets lovers and spend long time on childcare.     The proportions of West European and North European are much higher    than the Canadian average.  Their    dwelling value is about $286,000 and household income is around $76,765.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">I56</strong></td>
   <td width="102"><strong>Antiques Or Renovation (1.14% of    Canadian Households)</strong></td>
   <td width="760">Antiques, art, craft, carvings    and artistic materials for crafts are the favourite pastimes of the consumers    in this niche I56.  These homeowners    initiate no renovation even though their houses are likely to be old. The    percentage of people living in duplexes, townhouses and semi-detached houses    is much higher than the Canadian average. In addition to European ancestry,    Hispanic, Aboriginal and American are represented over proportionally in this    niche.  They spend time and money on    childcare as the proportion of single-parent family is also well above the    Canadian average.  Their household    income is about $63,937 and house value is around $238,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">I57</strong></td>
   <td width="102"><strong>Old Continentals (0.95% of    Canadian Households)</strong></td>
   <td width="760">Living    in small households and dwellings built before 1946 and during 1946-1961,    consumers in this niche are from The Old Continent likely before 1961.  Ukrainians are part of this niche too.    Proportions of seniors and children are significantly.  They spend time and money for senior care,    childcare and &quot;home care&quot;, plus major dwelling repairs and    renovations.  Educational supplies,    textbooks for children are their priorities. They are pet lovers and charity    donors.   You will find them in Ontario    (54.5%), Manitoba (9.5%), Alberta (9.1%), BC (10.5%), and Saskatchewan    (3.8%).  Their dwelling value is    slightly over $204,000 and household income is around $63,791.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">I58</strong></td>
   <td width="102"><strong>Motorcycle Diaries<br />
   (0.89% of Canadian Households)</strong></td>
   <td width="760">The proportions of consumers in    this niche living in duplexes, semi-detached and town houses are much higher    than the Canadian average.  They are    located in the Atlantic and Prairie regions with English and Europe ancestry.  They have average education, likely in    engineering, applied science and trades.     They are pets lovers and spend sixty or more hours on childcare.  They work likely in sales, services,    trades, equipment operations and manufacture and processing industries.  Their household income is over $61,115 and    house value is around $223,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" ><strong class="margin">I59</strong></td>
   <td width="102"><strong>Seniors in Old Homes<br />
   (0.45% of Canadian Households)</strong></td>
   <td width="760">I59's live in the Atlantic and    Prairie Provinces and in old homes, town house, semi- and single    detached.  You will find likely single    parent families, small young and senior households. They are either young    renters or senior homeowners.  They    have moderate education, but with good health they are active in employment,    likely in sales, services, trades, equipment-operation and    manufacturing.  The participation of    females and seniors in employment is high.     As a result, they spend a lot on childcare both at home and    outside.  The proportions of people    walking and taking taxicabs to the work place are much higher than the    Canadian average.  In this niche the    indices of Aboriginals, North European and Ukrainian are noticeably    high.  Their household income is over    $54,639 and house value is around $203,000. </td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment J: Joyful Country
   </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[9] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" ><strong class="margin">J60</strong></td>
   <td width="70"><strong>Route 66  <br />
   (4.53% of Canadian Households)</strong></td>
   <td width="762">Living in the countryside, the    large niches J60, J61, and K62 are the Canadian rural consumers. They are the    highway bus travelers and renters of home entertainment equipments and    services. They are farmers, miners and workers in primary, processing, manufacturing    and utilities industries. Many of them work at home or have no fixed working    place.  Females in this niche are more    likely to ride motorcycles to working places. They renovate homes and spend    on their pets.  Their ethnic identities    tend to be British and French, followed by German, and Dutch.  Geographically they are more distributed in    Quebec, the Prairies and the Maritimes.     They live with an income of $69,540 and dwelling value of $220,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">J61</strong></td>
   <td width="70"><strong>Rural Recreation<br />
   (3.47% of Canadian Households)</strong></td>
   <td width="762">Consisting of consumers with    British and French ancestries, as J60, this niche J61 has slightly higher    proportions of Aboriginal and American.      They donate generously to religious charities.  Geographically they tend to be more    concentrated in Quebec, PEI, Newfoundland, and Nova Scotia.   They are more likely to spend on boats and    recreation vehicles, travel with highway bus and rent home entertainment    equipments and services.  Males more    likely drive to their work places.     They are also pet lovers and purchase food and goods for their pets.    Their kids are slightly older (age 5-14), thus their expenditures on    physician care is getting lesser.     Their household income is about $67,007 and house value is around    $211,000.  Geographically they are more    concentrated in Quebec and the Maritimes.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#8FBC8F;color:black">&nbsp&nbsp Segment K: Rural Handyman
   </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[10] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <tr>
   <td width="36" class="margin"><strong  class="margin">K62</strong></td>
   <td width="101"><strong>Handy Neighbours (4.74% of    Canadian Households)</strong></td>
   <td width="761">Working hard and having little    time for recreation, they are handy persons and thus pay out less in all  areas of services and renovate heavily    their single detached houses.  They are    also relatively healthy with age 55-64, way below average expenditures on    Physicians' care.  They are the highway    bus travelers and home entertainment equipments and services renters. The    proportion of BC, Ontario and Alberta residents in this niche is much lower    than the Canadian average.  They are    even more likely to be farmers, miners and workers in primary, processing,    manufacturing and utilities industries. These rural handy men earn a    household income $62,343 and live in houses worth of $183,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment L: Apartment Dwellers
   </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[11] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" class="margin"><strong  class="margin">L63</strong></td>
   <td width="101"><strong>Grey Perspectives (0.53% of    Canadian Households)</strong></td>
   <td width="761">The niche L63 consists of    senior's 4X average in owning condominiums. 41.3% of them are in Ontario,    mostly in Toronto and they are more likely than average to be living in widow    or common law arrangements.  They brew    their own alcohol and put high emphasis on personal care and hair    grooming.  They stopped working and    contributing to pension fund.  They    invest above the average on renovations of their condos, even though they    were just built in the last decade.     With a household income close to $59,327 they enjoy their comfortable    condo (worth $232,000) life.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L64</strong></td>
   <td width="101"><strong>Charitable Renters <br />
   (0.84% of Canadian Households)</strong></td>
   <td width="761">Consumers in L64 are based in    Montreal, Ottawa and Toronto. They spend more on laundry services and health    care, particularly physician care. They rent apartments of different    vintages.  Holding Bachelors degree or    higher, they are likely working in sales and service industries, as well as    in administrative occupations.  One of    their major expenses is alimony.  They    make their own alcohol.  Ethnically,    they are a mixture of French, Arabian, West A+D83sian, South Asian and    Chinese.  Their household income is    slightly over $56,040 and their dwelling value is about $197,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L65</strong></td>
   <td width="101"><strong>Small Households Big Hearts    (0.46% of Canadian Households)</strong></td>
   <td width="761">Based in Ottawa, Toronto,    Montreal, and Edmonton, consumers in the niche L65 live in small households    and spend on alcohol.  They also spend    more on health care, particularly on medicine and health care practitioners    other than physician care. They rent automobiles and spend more on gas and    self-organized traveling. They settle in Ontario, Quebe, and    Saskatchewan.  They tend to ride    bicycle, or to use public transportation.     They have occupations in the arts, social sciences and sports.  Their home value is about $195,000 and    their household income is over $48,268.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L66</strong></td>
   <td width="101"><strong>Low Rise High Hopes  (0.41% of Canadian Households)</strong></td>
   <td width="761">L66's are renters rather than    condo owners, located in Quebec, particularly Montreal.   Besides French, Caribbean,  Latin, Central and South American, black,    and West Asian ethnicities are highly visible.  Their dwellings are apartments and duplex,    which are built in the 1960-85 period.     These buildings also mean there are no washing and drying facilities    in the premises so the tenants have to do Laundromats.  They have bachelors' degrees in the    humanities and work more likely than the Canadian average, in art, social    science and education. They are nurturing children of kindergarten ages.    Their dwelling unit is worth about $202,000 and their household income is    more than $46,593.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L67</strong></td>
   <td width="101"><strong>Self-Sufficient Renters (1.09%    of Canadian Households)</strong></td>
   <td width="761">L67's are likely renters in    Montreal, Ottawa, Edmonton.  Their    dwellings are old apartments built during the 1960s, and they do not have    washers and dryers.  So they go to    Laundromats. The proportion of seniors is 1.6X average and widowed (1.9X).    They spend more on eye care and personal care.  With a household size of 1.9, they do not    have children. A sizable portion of them lives in common-law    arrangement.  Their ethnic identities    are mainly French, Arabian, West Asian, South Asian and Chinese.  They do their own dress making and    tailoring. They have a household income of $38,244. Their average dwelling    unit has a value around $154,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L68</strong></td>
   <td width="101"><strong>Tower Living    (0.93% of Canadian Households)</strong></td>
   <td width="761">Consumers in L68 are more    likely renters living in high-rise buildings in Toronto, Edmonton and    Montreal.  Of this niche 33.2% are    visible minorities, with 9.2% South Asian, followed by Chinese (8.5%),    Caribbean (3.7%), and Black (3.0%).     They are recent immigrants and have non-family households. Both young    and old, they take public transit to their work places.  Enjoying good health and being active in    sports, they rent automobiles for traveling. Highly educated in engineering    and applied mathematics and physics, they still spend more on their education    and training.  They have a household    income of $45,819 and live in apartment units worth $217,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L69</strong></td>
   <td width="101"><strong>Insurance And Travel (0.53% of    Canadian Households)</strong></td>
   <td width="761">L69's have a fixation on    insurance.  They are based in Montreal,    Edmonton and Vancouver, living in apartment and deplex that built from    1946-1970 period.  Though renting, they    spend more on maintenance and repairs, and some manage to buy vacation    properties.  They are highly educated,    particularly in art, humanities and social science, are generally young    singles or 2-person households.  They    work in art, recreation, sport, education and government and pay heavily on    union and professional fees, as well as on newspapers and reading materials.    However, they spend hardly anything on education, while purchasing many    different types of insurance plans. Traveling a lot, they cycle, walk and    take public transit to work.  They    donate significantly to unions, social clubs, and professional associations    and orther organizations. Their income is about $46,942 and dwelling value    close to $187,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment L: (con't)
   Apartment Dwellers </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[11] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" class="margin"><strong  class="margin">L70</strong></td>
   <td width="101"><strong>Rent To Own (0.73% of Canadian    Households)</strong></td>
   <td width="761">L70's are located in Toronto,    Edmonton, and Montreal. More than half of them rent while the 80.5% of them    prefer condominiums.  Their dwellings    are relatively new, built after 1960.     They need health care and depend on tools to finish houseworks.  They tend to be young single parents    working hard without sufficient time for the children.  The children are of school ages and the    parents make their own dresses and spend more on children's camps.  They have a household income of $43,585 and    live in apartment or town house units worth $181,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L71</strong></td>
   <td width="101"><strong>Travel And Some Insurance (0.61%    of Canadian Households)</strong></td>
   <td width="761">L71's are from Montreal and    Edmonton.  Sizable portions of them do    live in apartment building less than 5 storeys built before 1970.  The proportions of the seniors and French,    Black are much higher than Canadian average.     Due to their age and their dwelling's age, they spend more on    Medicare, maintenance, repairs, and insurance plans.  Still, they go on a vacation package.  They work in arts, humanities and social    sciences.  They are active in unions    and/or professional associations.  They    are likely to be working in Manitoba and Quebec.  They are donors to charity. Their average    household income is $43,925 and dwelling value is $170,000.  In this 1.9 person household, they do not    spend on education and child care.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L72</strong></td>
   <td width="101"><strong>Comfortable Leisure  (0.60% of Canadian Households)</strong></td>
   <td width="761">Consumers in L72 live mainly in    old apartment buildings in Montreal, Toronto, Edmonton and Vancouver.  The newer immigrants from the period    1996-2004 are the largest group, mostly from mainland China and South Asia.  They are comfortable with their current    careers in sales, service, processing and manufacturing industries so that    they are able to turn to recreation and leisure time activities.  They have a higher tendency than the    average in buying trailer for vacations. They take public transit to their    work places.  Their household income is    about $46,249 and they live in dwelling units worth of $239,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L73</strong></td>
   <td width="101"><strong>Single Parent Older Child (1.39%    of Canadian Households)</strong></td>
   <td width="761">L73's consist of single-parent    families trying to put kids through school and paying the tuition fees.  Their dwellings are of the town house type    without a washer or dryer.  Therefore    they go to the Laundromat frequently.     The children in the family are reaching university education so the    burden for the parent in tuition fee is showing up as one of the important    features of this lifestyle niche.  They    also pay more than 30% of their income on rent. Their dwelling unit is worth    about $135,000 and their household income is around $48,711.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">L74</strong></td>
   <td width="101"><strong>Uncomfortable Payments  (2.12% of Canadian Households)</strong></td>
   <td width="761">L74's are based in Montreal    where they pay over 30% of their income on rent.  The heavy alimony payments define the    lifestyle of this niche.  49.0% of them    are one person household. Household size is 1.9. The ethnic mix is mainly    French, with some Caribbean, Hispanics, and Black.  Many of them have high education, Bachelor    degree and up, majored in the humanities.     They live in small households with an income of $41,611 and dwelling    value of $155,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong  class="margin">L75</strong></td>
   <td width="101"><strong>Lofty Ambitions (1.67% of    Canadian Households)</strong></td>
   <td width="761">L75's are highly indexed in    Manitoba, and Quebec, though a majority of them are located in Ontario,    Quebec and British Columbia.  The    proportion of people living in converted commercial buildings is    significantly high.  They are likely    recent immigrants or seniors immigrated to Canada before 1961. Gross rent    account for over 30% of their income.     The ethnic content is very mixed, with French, Caribbean, Latin,    Central and south American, Black, Arabian, West Asian, and South Asian.  They work in sales, service, processing and    manufacturing industries.  Their income    is about $37,108 and their dwelling unit is worth of $188,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment M:
   Single Again </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[12] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" class="margin"><strong  class="margin">M76</strong></td>
   <td width="102"><strong>French    Laundry   (0.54% of Canadian    Households)</strong></td>
   <td width="760">M76's are from    Montreal and Quebec.  They spend a lots    in dressing, live in apartment building with 5-storeys or less and built in    1946-1970.  They are of a good working    age and raise school age children with common law partner.  They have degrees but still pay over 30% of    their income on rent.  They use the    Laundromat frequently. Their dwelling unit is worth about $246,000 and their    household income is around $63,624.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M77</strong></td>
   <td width="102"><strong>Enfants and Life Insurance  (0.85% of Canadian Households)</strong></td>
   <td width="760">M77's are also from the    Montreal and Quebec City areas.  They    tend to live in new 5-storey or less apartment buildings.  Alimony payment is one of their big    responsibilities.  They own more    recreational vehicles.  They like    reading and have above average expenditures on pharmaceuticals and healthcare    supplies. Their income is about $63,054 and their dwelling unit is worth of    $218,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M78</strong></td>
   <td width="102"><strong>Young Families (0.78% of    Canadian Households)</strong></td>
   <td width="760">M78's consist of young families    and individuals who have finished the courses of study.  They live in semi and single detached    houses, and usually have a large family size.     Their education level is low.     They spend a lot of time on childcare and senior care. Those not from    the First Nations are at the life stage that they themselves are the    playmates of their young children.     They keep pets too.  Their    dwelling value is about $167,000 and their household income is slightly over    $63,744. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M79</strong></td>
   <td width="102"><strong>Condo Active Seniors (0.60% of    Canadian Households)</strong></td>
   <td width="760">M79's are over 65 years old    living in nice high-rise apartments. Many are homeowners.  They are in Montreal, Toronto, Ottawa and    Vancouver.  They take outdoor    activities, walking or taking public transit to work. They are likely    drinkers.  Affected by the custom of    Vancouver, they also spend time considering the real estate market. They are    a mixture of various ethnic groups like Jewish, Romanian, Russion, Caribbean,    Latin, Central and south American, Black, Arabian, West Asian, South    Asian.  They have a comfortable    household income of $57,714 and a dwelling unit worth of $354,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M80</strong></td>
   <td width="102"><strong>Widowed APT (0.27% of Canadian    Households)</strong></td>
   <td width="760">M80's are in high-rises as well    but more of them are renters. They are more likely to be living in    widows.  Vancouver is the main focal    point. Their ethnic mix consists of Aboriginal, Scottish, Welsh, Dutch,    Pacific Islanders and German.   2.3X of    average are over the age of 65, so their most likely period of first entry to    Canada were before 1961. Their dwelling value is about $324,000 and their    household income is close to $54,919.. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M81</strong></td>
   <td width="102"><strong>Self-Employed Prairie (0.60% of    Canadian Households)</strong></td>
   <td width="760">M81's are self-employed skilled    workers in Saskatchewan, Manitoba and Alberta.  Of the ethnics we have Ukrainians, Russian,    Polish, German, and other Europeans.     They live in old single detached houses and mobile homes (20X), or    townhouses.  There is a young child in    this lifestyle equation.  They play    bingo and lottery.  Their household    income is about $158,000 and the house value is around $83,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M82</strong></td>
   <td width="102"><strong>Healthcare in Demand (0.29% of    Canadian Households)</strong></td>
   <td width="760">M82's consist of young and    senior singles who rent only and appear to have no plan for expansion.  The proportion of separated, divorced and    widowed is significantly higher than the average.  They are likely living in Montreal and    Ottawa.  The apartment dwellers are 2X    average.  They repair their old homes.  Alimony and support payments are very    important to this niche, but no children in this niche.  Though their household income ($57,982) is    low, they spend more than 2X average on health care supplies and hospital    care. Their dwelling unit is worth of $273,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M83</strong></td>
   <td width="102"><strong>Walk 2 Work (0.98% of Canadian    Households)</strong></td>
   <td width="760">M83's are in New Brunswick and    Quebec, and live in old low-rises and converted commercial buildings.  They work in the processing, manufacturing    and utilities industries.  They have to    pay alimony and support payments and that defines their calendar.  They go on tours by the packaged travel    route.  They spend 65% more on    precribed medicines than the average.     Their household income is about $54,357 and house value is around    $116,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">M84</strong></td>
   <td width="102"><strong>Soul City Parents <br />
   (0.21% of Canadian Households)</strong></td>
   <td width="760">Based in Quebec city and    Montreal, Ottawa, consumers in the niche M84 live in dwellings like    semi-detached homes and apartment buildings of five or fewer levels.  Childcare is very important to this group,    both at daycare centres and at home.     They spend more on children's education, camp, playground equipment    and laundry.  They have below average    education.  The proportion of females    is much higher than that of males.     Many of them are single parents and widowed.  Their household income is over $52,864 and    their dwelling value is around $173,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:grey;color:black">&nbsp&nbsp Segment N:
   New Canadians </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[13] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" class="margin"><strong  class="margin">N85</strong></td>
   <td width="102"><strong>Benefits &amp; Benefactors  (1.03% of Canadian Households)</strong></td>
   <td width="760">N85's are in Manitoba, Ontario,    PEI, Saskatchewan and BC.  They live in    duplex apartment buildings of row house or duplexes. They have low education    but like reading,  and pay heavily on    alimony and health care. They pay support for someone in Canada.  They donate to religious charities.  The ethnic mix includes British, Ukrainian,    and Polish.  They work for medium    corporations where they contribute towards health and dental plans.  Their recreation is likely related to their    vacation homes, trailers, and boats.     Their income is close to $61,338 and their house value is almost    $230,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">N86</strong></td>
   <td width="102"><strong>Relative Supporters (0.47% of    Canadian Households)</strong></td>
   <td width="760">N86's are located in Edmonton,    Alberta, PEI, Nova Scotia and Manitoba.     They are British, Ukrainian, Black, Aborigin, and live in old duplex    apartments, townhouses and converted commercial buildings.  They work in occupations related to    processing, manufacturing and utilities, sales and service, and trades.  They have above average expenditures in    health related items.  They support    relatives in Canada and donate to religious charities. They earn an income    slightly over $59,562 and their dwelling value is about $227,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">N87</strong></td>
   <td width="102"><strong>High-rise Immigrants (0.74% of    Canadian Households)</strong></td>
   <td width="760">N87's have a share of 48.5%    visible minorities.  South Asian is    11.7% of this group, plus other ethnics like West Asian (4.0%), Jamaican,    Chinese (9.2%), Filipinos, and African (5.0%).  They are relative new immigrants in the    last decade. They have overall high education, particularly in engineering,    applied sciences, mathematics and physics sciences, though a great portion of    them work as labourers in processing, manufacturing and utilities.  Over 30% of their income goes to rent.  With a household income of $50,185 they    live in dwelling units worth $331,000 and support their relatives both inside    and outside of Canada.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">N88</strong></td>
   <td width="102"><strong>Low-Rise Renters  (0.44% of Canadian Households)</strong></td>
   <td width="760">N88's consist of residents    living in old low-rise apartments and converted commercial buildings.  Geographically they are in New Brunswick,    Newfoundland, and British Columbia.  They    are paying over 30% of their income for rent.     They are likely to be young and senior singles working in sales,    service, trades and transportation.     The senior portion of this niche tends to subscribe insurance plans    and spends more on healthcare related products.  They give money and support to relatives in    Canada, and donate to charities.  Their    income is over $54,816 and dwelling unit is valued at $219,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">N89</strong></td>
   <td width="102"><strong>Childcare &amp; Charities  (0.84% of Canadian Households)</strong></td>
   <td width="760">Saskatchewan, Manitoba, PEI,    Ontario, and New Brunswick are the locations of these small families, some of    whom have over 60 hours of childcare.     They have degrees in engineering, applied sciences, and trades. They work    in the trades,  the processing and    manufacturing industries.  They live in    duplexes, townhouses, and semi-detached houses built around 1946 and pay over    30% of their income for their dwellings.     They have 50% above average expenditures in healthcare and medicine    and still donate to religious charities.     Noticeable is also the high index (178) of Aboriginal in this    niche.  The average household income is    about $54,785 and dwelling value is around $188,000. </td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:pink;color:black">&nbsp&nbsp Segment O:
   Renters & Movers</span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[14] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36" class="margin"><strong  class="margin">O90</strong></td>
   <td width="101"><strong>Single Steps  (0.91% of Canadian Households)</strong></td>
   <td width="761">O90's live in Vancouver,    Calgary, Montreal, and Ottawa high-rises and walk or cycle to work.  Almost 50% of them (age 15+) are    singles.  Their occupations are likely    in the art, culture, recreation and sports field, administration, science,    education and government.  They send    money to family outside Canada.     Females over 65 years old, still working, make a large block of this    niche.  They spend over 30% of their    income on rent.  A large portion of the    immigrants arrived in Canada in the last decade. They earn a household income    $58,845 and their dwelling unit is worth of $391,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">O91</strong></td>
   <td width="101"><strong> In A Fix     (0.49% of Canadian Households)</strong></td>
   <td width="761">The niche O91's are large    families, multiple family households in New Brunswick, Newfoundland, and Nova    Scotia who are British.  They own older    dwellings and trailer homes that require major repairs.  They have less education and work in the    trades, transport and primary industries.     They scrounge and send money and support to family outside Canada.    They smoke and play bingo for fun. They are the users of power tools and    garden equipments. They have a household income $57,291 and a house valued at    $142,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">O92</strong></td>
   <td width="101"><strong>Brits and Bingo (0.38% of    Canadian Households)</strong></td>
   <td width="761">O92's are workers in Nova    Scotia of Scottish, English and aboriginal ancestry. They do not have special    education and work in health care, sales and service, trades and transport as    well as primary industries.  They send    money back to their relatives outside Canada.     They live in old (built before 1946) dwellings and converted    commercial buildings.  They tend to    live common law or widowed and spend more than 30% of their income on rent.    They spend time and money on both childcare and senior care. They also play    Bingo. Their income is about $50,069 and living quarter is worth of $106,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">O93</strong></td>
   <td width="101"><strong>Rustic Residents  (0.91% of Canadian Households)</strong></td>
   <td width="761">O93's consist of Newfoundland,    New Brunswick and Nova Scotia rural households.  A mixture of British and French, they have    less education and work in the trade, transport and the processing,    manufacturing and utilities industries.     They tend to spend long hours on childcare and senior care. They live    in older town houses or converted commercial buildings.  These dwellings are in need of major    repairs.  There are some who live    common law.  They smoke and play bingo    for fun. They have a household income of $43,429 and a dwelling valued at    $58,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">O94</strong></td>
   <td width="101"><strong>Telephones &amp; Transit <br />
   (0.30% of Canadian Households)</strong></td>
   <td width="761">O94's are 53.1% singles plus    9.2% divorced French, Caribbean, Latin, Central and south American, Black,    Arabian, West Asian, Other European living in Montreal.  They work in art, culture, recreation and    sport related fields.  The dwellings    they rent are apartments or town houses needing major repairing work. They    spend more on telephone, public transit, and rental of entertainment    equipments and services.  They go    Laundromat for washing and drying their clothes.  They spend over 30% of their income on    housing rent. Their household income is around $61,058 and their dwelling    unit is worth of $306,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">O95</strong></td>
   <td width="101"><strong>Grey Collar Grind <br />
   (0.44% of Canadian Households)</strong></td>
   <td width="761">O95's are British, European,    Aborigin, West Asian, and Chinese singles and young workers living in    Edmonton, Ottawa, Vancouver, and Calgary.     They rent apartments and townhouses for which they pay more than 30%    of their income.  With a household size    of 1.8, they are often single individuals living alone.  Some live common law and some have children    with them for which they spend on childcare a lot.  They spend on movies and alcohol.  Their average education is likely in art    and humanities.  As recent immigrants    their occupations tend to be in art, recreation and sport, social science,    education, sales and service. They earn a household income of $49,816 and    live in dwelling units valued at $281,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36" class="margin"><strong  class="margin">O96</strong></td>
   <td width="101"><strong>Ethno Arts &amp; Rec <br />
   (1.44% of Canadian Households)</strong></td>
   <td width="761">O96's are workers from a number    of ethnic backgrounds like Arabian, Moroccan, African, Korean, and    Chinese.  They live in apartment    buildings, duplexs, or converted commercial buildings. 60% of them are single    or divorced.  They work in art,    culture, recreation and sports, sales and services. They pay over 30% of    their income in rent.  Their dwellings    are old, built before 1970 and need repairs.     Some of these tenants do repair work themselves.  Their household income is about $44,442 and    the dwelling value is around $370,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#FFA500;color:black">&nbsp&nbsp Segment P:
   One parent families </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[15] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="38"><strong class="margin"  class="margin">P97</strong></td>
   <td width="70"><strong>Taking Care Of Elders (0.63% of    Canadian Households)</strong></td>
   <td width="760">P97's are Italian, Moroccan,    Arabian, West Asian and Caribbean families who work in the primary    industries.  They tend to live in    Montreal in old duplex, row houses and demi-detached buildings.  For these old premises they still have to    pay over 30% of their income.  They    likely have seniors instead of children in households needing personal    service and health care. They do read newspaper, pay alimony, support their    relatives and donate to charities.     They have low education and work in art, culture, recreation and sport    related fields, as well as in sales and services, health care, processing,    manufacturing and utilities industries. They earn a household income of    $60,702 and live in dwelling units valued at $341,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="38"><strong class="margin"  class="margin">P98</strong></td>
   <td width="70"><strong>Reliant and Reliable  (0.14% of Canadian Households)</strong></td>
   <td width="760">Consumers in the niche P98 live    mostly in Montreal and Quebec.  They    are likely seniors, single parents and singles divorced or widowed.  They are most likely French living in older    dwellings that are high-rise, duplex, or semi-detached and were constructed    before 1969.  They pay over 30% of    their income on rent.  Some of these    households are obviously dependent on social assistance.  They have less education and work in sales    and service, healthcare, culture, recreation and sport related fields. Their    household income is about $45,855 and dwelling value is around $158,000. They    pay more than average to dairy, egg, meat, bakery, vegetable and fruit.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="38"><strong class="margin"  class="margin">P99</strong></td>
   <td width="70"><strong>Big Families Big Fees (0.97% of    Canadian Households)</strong></td>
   <td width="760">P99's describes the First    Nations (11X) lifestyle niche.  They    are located in Manitoba, Montreal and Saskatchewan.  They have young children needing childcare.  A sizable portion of households has 6 or    more members. They work at specialized jobs with local factory programmes,    government, services, religion, and primary industries.  They pay over 30% of their income on    rent.  Childcare is a challenge for    them because the single parents need to     work.  They spend more on legal    fees, insurance and other service fees.     Their household income is about $47,416 and their dwelling value is    around $211,000.  </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="38"><strong class="margin"  class="margin">P100</strong></td>
   <td width="70"><strong>Single Parents &amp; Seniors    (0.27% of Canadian Households)</strong></td>
   <td width="760">P100's are scattered throughout    Manitoba, Edmonton, PEI, Nova Scotia, Newfoundland and Saskatchewan. Some of    these single parents work and some are unable to work.  There are two major groups: those who are    young and have children to take care of, and those who are 65+ years    old.  Their dwellings are likely to be    converted commercial buildings, semi-detached, townhouses or high-rise    apartments.  Many households are on    social assistance.  Over 30% of their    income goes towards the rent on the apartments. They have low education and    work as clericals in business and finance administration as well as workers    in trades, transport, processing and manufacturing industries. South European    and aboriginal ancestry is well over proportionally represented in this    niche. Their dwelling value is around $169,000 and their income is close to    $43,074.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#D2691E;color:white">&nbsp&nbsp Segment Q: Thrifty & Struggling </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[16] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin" >Q101</strong></td>
   <td width="70"><strong>Spend - Thrift Arts &amp;    Sports  (0.28% of Canadian Households)</strong></td>
   <td width="762">Q101's are 34.4% from Montreal    and the rest scattered through many cities.     Language is a balance of 44.3% English, 47.1% French, and 8.6%    non-official languages.  Ethnic minorities    are Black (2.7%), Chinese (1.7%), Latin American (2.2%), and South-East Asian    (1.4%).  Both ends of the labour force,    young adults and seniors are over proportionally represented in this niche.  They work hard to pay the rent (over 30% of    income) of their high-rise apartments or duplex.  30% of them live in single-detached    houses.  With a household size 1.9,    they are thrifty in their spending habits.     This is reflected in all of the Q niches where in most categories the    expenses are way below the average.     Q101's expenses are balanced, but thrifty. The index of occupations in    art, culture, recreation and sport related fields is much higher than the    average. The average household income is slightly over $35,860 and their    dwelling unit is valued at $166,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q102</strong></td>
   <td width="70"><strong>New Horizons (0.15% of Canadian    Households)</strong></td>
   <td width="762">The niche Q102 are made up of    recent immigrants.  12% of them are not    yet citizens of Canada and 43% are living alone. So, some are starting out    and some are still trying.  5.3% of    them are black, another 5.8% Chinese, 12.5% Aboriginal, and 2.6%    Arabians.  They are found in Edmonton,    and Ottawa.  They live in the    apartments (46.4%) and townhouses and pay over 30% of their income on    rent.  Their 13.8 years of education is    substantially higher than other niches in this cluster.   They work in art, culture, recreation and    sport related fields, sales and service, and processing, manufacturing and    utilities industry. Their living quarter is worth of $150,000 and they earn a    household average income of $36,516. Thanks to their small household size    their living is still okay with such an income. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q103</strong></td>
   <td width="70"><strong>Road Trippers  (0.05% of Canadian Households)</strong></td>
   <td width="762">Dominated by visible minorities    (50.2%) and located around Toronto, Calgary, and Montreal, this niche is    amazing in that they have the money to invest and to splurge on travel    trailers and the tent campers for them to travel around.  They retain their base in high-rise    apartments or townhouses and go on the road from there.  Even though they apparently pay more than    30% of their income on rent, their economic power certainly is way above    their currently apparently low income.     Other ethnics included in this are also quite numerous, namely    Caribbeans, Latin Americans, South-East Asians.  They take jobs in the processing,    manufacturing utilities, and the trades. Their household income is $37,386    and dwelling value is $143,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q104</strong></td>
   <td width="70"><strong>Blue Collar Immigrants  (1.03% of Canadian Households)</strong></td>
   <td width="762">Q104's consist of multiple    races more likely working in the processing, manufacturing and utilities, and    living in the available apartments and duplex buildings. 36.3% of them are    immigrants and 25.3% speak home languages that are neither French nor English,    which may be why they are less likely to work in sales and service where    official languages are needed.  The    ethnic mix consists of South Asians (6.6%), Caribbean (6.8%). Latin Americans    (4.1%), Arabians (4.7%), Africans (5.9%), and Chinese (5.8%).  This is very similar to Q102 in having a    great number of hard working immigrants.     The difference is the language, French. Q104 has a lot of immigrants    from the French areas of the Caribbean and Africa, while Q102's are mainly    from Asia. The education level of Q102's is higher and the average age is    younger. Their dwelling unit is worth of $287,000 and their household income    is around $31,910.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q105</strong></td>
   <td width="70"><strong>Old Home Dwellers  (0.71% of Canadian Households)</strong></td>
   <td width="762">Located in Montreal, Manitoba,    Newfoundland, New Brunswick and Saskatchewan, they live in old houses,    low-rise apartment buildings, but 61% are single-detached houses.  They pay more than 30% of their income for    their lodging in low value dwellings.     54.4% of them are owners, which is the single most differentiating    feature of all the niches in this cluster.     Though the income flow is relatively low, they have equity in their    dwellings.   Ethnically only 6% are    visible minorities, including 0.9% Chinese and 0.9% Black.  54% are French speaking and 40% English.    Their occupations are likely to be in art, culture, recreation and sport    related fields, sales and service, and processing, manufacturing and    utilities industry. Their income is over $38,785 and dwelling value is about    $104,000.</td>
   </tr>
   </table></td>
   </tr>
   </table>
   </div>
   <div class="print_pages"> 
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
   <tr>
   <td align="center" valign="top"><span class="font_25" style="background-color:#D2691E;color:white">&nbsp&nbsp Segment Q (con't)
   Thrifty </span></td>
   <td width="16%" valign="top"><span class="font_22"><img src="<?php echo $segment_pic[16] ; ?>.jpg" alt="segment" width="70" height="70" class="image_border211" /></span></td>
   <td align="right" valign="top" class="font_14brown"><img src="KQUEST.png" alt="Kquest" width="113" height="50" /><br/><strong>Segment Niche Descriptions</strong>
   </td>
   </tr>
   <tr>
   <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0" class="font_10">
   <col width="58" />
   <col width="125" />
   <col width="315" />
   <tr>
   <td width="36"><strong class="margin">Q106</strong></td>
   <td width="70"><strong>Thrifty Workers  (0.36% of Canadian Households)</strong></td>
   <td width="762">Q106's consist of some young    singles starting out and some working seniors.  This niche is distributed to BC (17.1%),    Alberta (5.7%), Manitoba (10.3%), Newfoundland (8.1%) and Saskatchewan    (7.9%).  77% of them speak English, 16%    speak french, and 7% speak non-offical languages.   Ethnicities include 2.6% Africans, 1.3%    South Asian and 2.3% Chinese.  The    dwellings are a balance of low-rise (33.7%) and high-rise (16.3%) apartments    plus various houses built before 70's.     They pay more than 30% of their income on rent. They earn a household    income of $33,441 and their dwelling unit is worth of $136,000. </td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q107</strong></td>
   <td width="70"><strong>Single Grey Towers  (0.07% of Canadian Households)</strong></td>
   <td width="762">Q107's are based in Toronto,    Calgary, and Vancouver in high or low-rises that indicate senior coops or    senior residences.    77.0% of the    households have one person only. 26.5% of population of age 15+ year old are    widows; 22.5% are separated or divorced.     48.3% of the population are seniors over 65 years old. There are much    more  females than males. Many still    work in art, culture, recreation and sport related fields, sales, services    and administration.  They pay over 30%    of their income on rent, and use Laundromats.     A third of them are immigrants.     Females in this group walk to work (20%), or taking taxicabs as their    means of transportation.  Other than    British, the next few ethnics are French (14.5%), Chinese (7.1%), Polish(2.4%),    Black (2.4%), South Asian (3.3%) and Ukrainians (4.4%).  They spend more than 30% of their income on    rent and their dwelling units have values $145,000, household income of    $24,117.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q108</strong></td>
   <td width="70"><strong>Starting Out &amp; Winding Down    (0.30% of Canadian Households)</strong></td>
   <td width="762">71.4% of Q108's are in Quebec,    mostly local French and non-immigrants, with a mixture of young and old.  They live in the old buildings that are    low-rises and built before 1960 (51%).     The youthful portion indicates young children in one-parent    households.  Twice Canadian average of    female maintainers in the 15-24 age group, which is nearly as high in    proportion of male maintainers. The high indices for the maintainers in the    age groups 15-24 and 25-34 tell the story of youth trying to make home    early.  Approximately 28.6% of them    (Index=186) have less than grade-9 education.     They pay more than 30% of their income in rent. They work in art,    culture, recreation and sport related fields, sales and service, and    processing, manufacturing and utilities industries.  Their income is close to $30,617 and    dwelling value is about $157,000.</td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   </tr>
   <tr>
   <td width="36"><strong class="margin">Q109</strong></td>
   <td width="70"><strong> High-rise Seniors (0.24% of Canadian    Households)</strong></td>
   <td width="762">Q109's are Quebec (36.4%),    Saskatchewan (8.7%), Manitoba (5.4%), New Brunswick (5.1%) apartment    dwellers.  78% of these buildings were    built before 80's.  29.9% of the    population are over 65 years of old.     The indices of divorced is 173 and widowed is 277.  They pay more than 30% of their income on    rent.  Compared with their low income    $31,128, their expenditures on tenant's insurance premium and moving are    relatively high.  Their dwelling unit    is worth of $147,000. </td>
   </tr>
   </table></td>
   </tr>
   <tr>
   <td colspan="3" align="center"><br />
   <br />
   <br />      <img src="KQUEST.png" width="226" height="70" alt="KQuest" /></td>
   </tr>
   </table>
   </div>
   </div>
   </div>
   </div>
   <br/>
   <br/>
   </div>
   </body>
</html>
