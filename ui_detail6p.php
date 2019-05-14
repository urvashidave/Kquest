<link rel='STYLESHEET' type='text/css' href='master_style.css'>



<style type="text/css">

.reduced-font-size {
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

.reduced-font-size table,
.reduced-font-size span,
.reduced-font-size div {
	font-size: .95em !important;
}

td,th{text-align: center; !important}
table .pbodyemp{

font-weight: bold;

}
.myBench{

font-weight: normal;

}
.sports{

page-break-after: avoid !important;
 page-break-before: avoid !important;


}
.print_pages{

page-break-after: avoid !important;

}
.black14 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



 color: #333;



    font-size: 14px;



	font-weight: normal;



    padding: 0 0 9px;



}



.black16 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



 color: #333;



    font-size: 16px;



	font-weight: normal;



    padding: 0 0 9px;



}
.pheading {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #900C3F;
}

.btn-primary {
    background-color: red;
    border-color: #357ebd;
    color: #ffffff;
}




black14 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



 color: #333;



    font-size: 14px;



	font-weight: normal;



    padding: 0 0 9px;



}






.style11 {color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; font-weight: bold; }



.pbody14emp {



	font-family: Arial Narrow, Arial, Helvetica, sans-serif;



	font-size: 12px;



	font-weight: bold;



	color: #000000;



}

.style13 {font-size: 12}

.style15 {font-weight: normal; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

.style17 {font-size: 16px}
.pheading1 {    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #900C3F;
}
.style18 {font-size: 14px}
</style>



<div class="pagebreak"></div>
<div class="pagebreak" style="clear:both;"></div>



<div class="print_pages" align="center" style="height: 625px"> 



  <table width="903" height="95" border="0" cellspacing="4" cellpadding="0">



  <tr>



    <td height="87" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">



      <tr>



  <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>



        <td width="42%" align="left">

<strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
    <span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>

        <td width="43%" align="right" style="padding-top: 2px; padding-right: 25px;"><strong class="pheading">LIFESTYLE</strong></td>



      </tr>



    </table>



	</td>



    </tr>



  </table></td>



    </tr>



    <tr>



      <td height="30"><div align="center" class="style11" style="font-size: 1.25em;">Top 8 out of 35 leisure activities (<span class="sgrey14">Target Audience</span> compared</span> to Benchmark average) age 15+ </div></td>



    </tr>



    <tr>



      <td ><table width="96%" border="0" align="center" cellpadding="8" cellspacing="0">



        <tr>



          <td width="25%" height="255" ><table width="100%" class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][0]; ?>" width="200" height="140" alt="rank1"></td>



              </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>1</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][0]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][0]); ?>%<br>



                Index: <?php echo number_format($sorted_leisure['index'][0]); ?></span></td>



            </tr>



          </table></td>



          <td width="25%" height="255"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][1]; ?>" width="200" height="140" alt="rank1"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>2</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][1]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][1]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][1]); ?></span></td>



            </tr>



          </table></td>



          <td width="25%" height="255"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][2]; ?>" width="200" height="140" alt="rank3"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>3</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][2]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][2]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][2]); ?></span></td>



            </tr>



          </table></td>



          <td width="25%" height="255"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][3]; ?>" width="200" height="140" alt="rank3"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>4</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][3]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][3]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][3]); ?></span></td>



            </tr>



          </table></td>



        </tr>



        <tr>



          <td width="25%" height="250"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][4]; ?>" width="200" height="140" alt="rank3"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>5</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][4]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][4]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][4]); ?></span></td>



            </tr>



          </table></td>



          <td width="25%" height="250"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][5]; ?>" width="200" height="140" alt="rank3"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>6</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][5]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][5]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][5]); ?></span></td>



            </tr>



          </table></td>



          <td width="25%" height="250"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][6]; ?>" width="200" height="140" alt="rank3"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>7</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][6]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][6]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][6]); ?></span></td>



            </tr>



          </table></td>



          <td width="25%" height="250"><table width="100%"  class="Example_E1">



            <tr>



              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][7]; ?>" width="200" height="140" alt="rank3"></td>



            </tr>



            <tr>



              <td width="22%" class="sgrey50"><strong>8</strong></td>



              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][7]; ?></strong></span><br>



                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][7]); ?>%<br>



                  Index: <?php echo number_format($sorted_leisure['index'][7]); ?></span></td>



            </tr>



          </table></td>



        </tr>



      </table>        <p>&nbsp;</p></td>



    </tr>



  </table>



</div>



<div class="pagebreak"></div>
<div class=" print_pages" align="center" style="height: 625px">
 <table width="903" height="587" border="0" cellspacing="4" cellpadding="0">



  <tr>



    <td height="67" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">



      <tr>
            <td width="130" height="59" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
            <td width="354" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
            
            
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="  color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
    <span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span></td>



        <td width="371" align="right" style="padding-top: 2px; padding-right: 25px;"><strong class="pheading">LIFESTYLE</strong></td>



      </tr>



    </table>



   



  <tr>



  <td width="50%" height="508" valign="top"  ><table width="94%" border="1" align="center" cellpadding="1" cellspacing="1" class="sgrey12">



    <tr class="pbodyemp">



	



    <td width="165"><strong>Participation</strong></td>



    <td width="69"class="pbodyemp"><div align="center" class="pbodyemp"><span class="sgrey14">Target Audience</span></div></td>



    <td width="93"class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</strong></div></td>



    <td width="68"class="pbodyemp"><div align="center" class="pbodyemp">Index</strong></div></td>



  </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_ADVSP ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_ADVSP,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo $hhcLS_ADVSP ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_ADVSP,1) ; ?></span></div></td>



      </tr>



       <tr>



        <td><span class="pbody"><?php echo $hhnameLS_CRFT ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_CRFT,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_CRFT,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_CRFT,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_BSBL ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_BSBL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_BSBL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_BSBL,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_BSKBL ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_BSKBL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_BSKBL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_BSKBL,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_BLLDS ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_BLLDS,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_BLLDS,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_BLLDS,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_BOWL ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_BOWL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_BOWL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_BOWL,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_CANOE ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_CANOE,1); ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_CANOE,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_CANOE,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_CURL ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_CURL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_CURL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_CURL,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_CYCL ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_CYCL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_CYCL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_CYCL,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_FSHT ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_FSHT,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_FSHT,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_FSHT,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_FITWK ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_FITWK,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_FITWK,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_FITWK,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_FITAER ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_FITAER,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_FITAER,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_FITAER,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_FTBL ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_FTBL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_FTBL,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_FTBL ,1); ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_GARD ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_GARD,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_GARD,1) ; ?>%</span></div></td>







        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_GARD,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_GOLF ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_GOLF ,1); ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_GOLF,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_GOLF,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_CLUB ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_CLUB,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_CLUB,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_CLUB,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td><span class="pbody"><?php echo $hhnameLS_HIK ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_HIK,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_HIK,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_HIK,1) ; ?></span></div></td>



      </tr>



      <tr>



        <td height="24"><span class="pbody"><?php echo $hhnameLS_HOCKY ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_HOCKY,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_HOCKY,1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_HOCKY ,1); ?></span></div></td>



      </tr>



      </table></td>



 <td width="50%" height="508" valign="top" ><table width="94%" border="1" align="center" cellpadding="1" cellspacing="1" class="sgrey12">



    <tr class="pbodyemp">



       <td width="165"class="pbodyemp"><div align="center" class="pbodyemp">



         <div align="center">Participation</div>



       </div></td>



      <td width="63"class="pbodyemp"><div align="center" class="pbodyemp"><span class="sgrey14">Target Audience</span></div></td>



      <td width="97"class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</div></td>



      <td width="71"class="pbodyemp"><div align="center" class="pbodyemp">Index</div></td>



    </tr>



   



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_HMEXC ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_HMEXC,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhcLS_HMEXC ); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_HMEXC,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_ICSKT ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_ICSKT,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhcLS_ICSKT ); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_ICSKT,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_ILSKT ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_ILSKT,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhcLS_ILSKT) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_ILSKT,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_CURL ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_CURL,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhcLS_CURL,1) ;  ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_CURL,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_JOG ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_JOG,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_JOG,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_JOG,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_MRTHN ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_MRTHN ,1); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_MRTHN,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_MRTHN ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_YOGA ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_YOGA ,1); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_YOGA,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_YOGA ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_VIDEO ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_VIDEO,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_VIDEO,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_VIDEO ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_PWBT ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_PWBT,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_PWBT,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_PWBT,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_RACSP ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_RACSP,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_RACSP,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_RACSP,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SKBRD ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SKBRD,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SKBRD,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SKBRD ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SKCRS ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SKCRS ,1); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SKCRS,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SKCRS,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SKDWH ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SKDWH,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SKDWH,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SKDWH ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SNBRD ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SNBRD ,1); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SNBRD,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SNBRD ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SNWMB ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SNWMB,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SNWMB,1); ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SNWMB,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SCCER ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SCCER,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SCCER,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SCCER ,1); ?></span></div></td>



    </tr>



    <tr>



      <td><span class="pbody"><?php echo $hhnameLS_SWM ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_SWM,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_SWM,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_SWM,1) ; ?></span></div></td>



    </tr>



    <tr>



      <td height="24"><span class="pbody"><?php echo $hhnameLS_WHLWT ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhbLS_WHLWT,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($hhcLS_WHLWT,1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format ($hhindexLS_WHLWT,1) ; ?></span></div></td>



    </tr>



  </table></td>


  </tr>

  </table>

</div>
</br>
<div class="pagebreak"></div>

<div class="pagebreak"></div>



<div class="pagebreak"></div>
<div class=" print_pages" align="center" style="height: 625px">
  <table width="903" height="569" border="0" cellspacing="4" cellpadding="0">



  <tr>



    <td height="73" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">



      <tr>
            <td width="132" height="67" align="left" valign="top" style="padding-left: 5px;"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
            <td width="31%" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="  color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
    <span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span></td>
            <td width="54%" align="right" style="padding-top: 2px; padding-right: 25px;"><strong class="pheading1">ATTRACTIONS </strong></td>
          </tr>
          <tr>
            <td height="24" colspan="3"><div align="center" class="style11 style17"> <span class="sgrey14">Target Audience compared</span> to Benchmark average age 15+</div></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td width="50%" height="448" valign="top" ><table width="95%"  border="1" align="center" cellpadding="1" cellspacing="1" class="sgrey12">
          <tr>
            <td width="142" class="pbodyemp"><div align="center" class="pbodyemp style13">Local Attractions</div></td>
            <td width="95"class="pbodyemp"><div align="center" class="pbodyemp style13"><span class="style11">Target Audience</span></div></td>
            <td width="95"class="pbodyemp"><div align="center" class="pbodyemp style13">Benchmark</div></td>
            <td width="68"class="pbodyemp"><div align="center" class="pbodyemp style13">Index</div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][0] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][0],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][0],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][0]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][1] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][1],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][1],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][1]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][2] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][2],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][2],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][2]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][3] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][3],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][3],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][3]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][4] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][4],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][4],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][4]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][5] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][5],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][5],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][5]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][6] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][6],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][6],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][6]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][7] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][7],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][7],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][7]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][8] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][8],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][8],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][8]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][9] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][9],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][9],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][9]) ; ?></span></div></td>
          </tr>
        <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][10] ; ?></span></td>
          <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][10],1) ; ?>%</span></div></td>
          <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][10],1) ; ?>%</span></div></td>
          <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][10]) ; ?></span></div></td>
        </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][11] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][11],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][11],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][1]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][12] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][12],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][12],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][12]) ; ?></span></div></td>
          </tr>
          <tr>
            <td class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][13] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][13],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][13],1) ; ?>%</span></div></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][13]) ; ?></span></div></td>
          </tr>
        <td height="24" class="sgrey14"><span class="pbody style18"><?php echo $leisure2["name"][14] ; ?></span></td>
            <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["percent"][14],1) ; ?>%</span></div></td>
          <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["canada"][14],1) ; ?>%</span></div></td>
          <td class="sgrey14"><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure2["index"][14]) ; ?></span></div></td>
        </tr>
      </table></td>
      <td width="50%" height="448" valign="top" ><table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" class="sgrey12">
          <tr class="pbodyemp">
            <td width="150"class="pbodyemp style13"><div align="center" class="pbodyemp">Attendance at Concerts</div></td>
            <td width="100" class="pbodyemp"><div align="center" class="pbodyemp style13"><span class="style11">Target Audience</span></div></td>
            <td width="100"class="pbodyemp"><div align="center" class="pbodyemp style13">Benchmark</div></td>
            <td width="70" class="pbodyemp"><div align="center" class="pbodyemp style13">Index</div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][0] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][0],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][0],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][0]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][1] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][1],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][1],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][1]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][2] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][2],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][2],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][2]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][3] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][3],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][3],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][3]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][4] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][4],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][4],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][4]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][5] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][5],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][5],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][5]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][6] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][6],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][6],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][6]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][7] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][7],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][7],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][7]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][8] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][8],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][8],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][8]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][9] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][9],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][9],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][9]) ; ?></span></div></td>
          </tr>
        <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][10] ; ?></span></td>
          <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][10],1) ; ?>%</span></div></td>
          <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][10],1) ; ?>%</span></div></td>
          <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][10]) ; ?></span></div></td>
        </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][11] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][11],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][11],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][1]) ; ?></span></div></td>
          </tr>
          <tr>
            <td><span class="pbody style18"><?php echo $leisure3["name"][12] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][12],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][12],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][12]) ; ?></span></div></td>
          </tr>
          <tr>
            <td height="24"><span class="pbody style18"><?php echo $leisure3["name"][13] ; ?></span></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["percent"][13],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["canada"][13],1) ; ?>%</span></div></td>
            <td><div align="center" class="style18"><span class="style15"><?php echo number_format($leisure3["index"][13]) ; ?></span></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>


<div class="pagebreak"></div>



<div class="print_pages sports" align="center" style="height: 625px"> 



  <table width="903" height="598" border="0" cellspacing="4" cellpadding="0">



  <tr>



    <td height="116" ><table width="100%" border="0" cellspacing="4" cellpadding="4">



      <tr>



          <td width="132" height="59" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

        <td width="31%" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="  color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
    <span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>



        <td width="54%" align="right" style="padding-top: 2px; padding-right: 25px;"><strong class="pheading">LIVE SPORTS </strong></td>



      </tr>



      <tr>



        <td colspan="3"><div align="center" class="style11"> <span class="sgrey14">Target Audience</span> compared</span> to Benchmark average age 15+</div></td>



        </tr>



    </table></td>



    </tr>



  <tr>



  <td align="center" valign="top" ><table width="97%" height="340" border="1" align="center" cellpadding="1" cellspacing="1" class="sgrey12">



    <tr class="pbodyemp">



      <td width="289"class="pbodyemp"><div align="center" class="pbodyemp">



        <div align="center">Attendance</div>



      </div></td>



      <td width="127"class="pbodyemp"><div align="center" class="pbodyemp"><span class="sgrey14">Target Audience</span></div></td>



      <td width="227"class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</strong></div></td>



      <td width="202" class="pbodyemp"><div align="center" class="pbodyemp">Index</div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][0] ; ?></span></td>



      <td><div align="center"><span class="pbody14"><?php echo number_format($leisure4["percent"][0],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][0],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][0]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][1] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][1],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][1],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][1]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][2] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][2],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][2],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][2]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][3] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][3],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][3],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][3]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][4] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][4],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][4],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][4]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][5] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][5],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][5],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][5]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][6] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][6],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][6],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][6]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][7] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][7],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][7],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][7]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][8] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][8],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][8],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][8]) ; ?></span></div></td>



      </tr>



    <tr>



      <td><span class="pbody"><?php echo $leisure4["name"][9] ; ?></span></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][9],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][9],1) ; ?>%</span></div></td>



      <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][9]) ; ?></span></div></td>



      </tr><tr>



        <td><span class="pbody"><?php echo $leisure4["name"][10] ; ?></span></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["percent"][10],1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["canada"][10],1) ; ?>%</span></div></td>



        <td><div align="center"><span class="pbody"><?php echo number_format($leisure4["index"][10]) ; ?></span></div></td>



        </tr>



    <tr>



  </table></td>



  </tr>



  </table>



</div>







