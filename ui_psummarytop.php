



<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->



<script type='text/javascript' src='https://www.google.com/jsapi'></script>



<style type="text/css" media="all">

.print_pages {
    page-break-after: avoid !important;
}
.lifestyle{

page-break-after: avoid !important;
}
.tooltip1 {color: #900C3F;}

.black22 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



 color: #333;



    font-size: 22px;



	font-weight: bold;



    padding: 0 0 9px;



}





.bg_color2 {



    background-color: #147EA7;



    font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



    color: white;



    font-weight: bold;



}







.print_pages {width: 910px;



  height: 600px;



  background: #fff;



  margin: 25px 0 0 0;



  -webkit-border-radius: 6px;



  border-radius: 6px;



  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



}



.black14 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



 color: #333;



    font-size: 14px;



	font-weight: normal;



    padding: 0 0 9px;



}


#page-wrap {
    width: 900px;
    margin: 0 auto;
}




.black141 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 14px;



font-weight: normal;



padding: 0 0 9px;



}



.black18 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 18px;



font-weight: normal;



padding: 0 0 9px;



}



</style>



<style>

.second-print-footer { display: none;}

@media print {



	div.noprint {display:none;}



	.pagebreak {page-break-after: always;}



	img {



		max-width: none !important;



	}


}



body {



background-color: #FFFFFF;



margin: 0 auto;



}



#page-wrap {



width: 900px;



margin: 0 auto;



}



div.page { page-break-after: always }



.print_pages1 {width: 910px;



  height: 600px;



  background: #fff;



  margin: 15px 0 0 0;



  -webkit-border-radius: 6px;



  border-radius: 6px;



  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);

}

</style>







 



 



 <div class="pagebreak"></div>



   



<div class=" print_pages" align="left" style=""> 



  <table width="900px" height="611" border="0" cellspacing="0" cellpadding="0">



<tr>



  <td width="900" height="75" colspan="2" style=" padding-top: 0px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">



    <tr>



      <td width="16%" align="left" valign="top" style=" padding-top:4px; padding-left: 0px;"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>



      <td width="45%" align="left" valign="top" class="black12" style="padding-top: 10px;"><strong class="psub2"><?php echo $change_title; ?></strong><br>

<!--<span class="pbody">

	Target: <?php // echo $short_header; ?>

</span> <br/>-->

<span style="float: left;" class="pbody">Target Audience:</span>

<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">

    Click for Details

    <span class="tooltiptext1">

        <?php echo $var_click_details; ?>

    </span>

</div>

</td>



      <td valign="top" width="43%" align="right" style=" padding-top: 0px; padding-right: 10px; color: #900c3f"><strong class="stitle" style="color: #900c3f;">LOCATION</strong></td>



    </tr>



  </table></td>



</tr>



               <tr>



                <td align="center" colspan="2"><div id="map" style="width: 92%; height: 450px "></div>    



                <br>              



                <span class="pbody12" >Each pin represents a 6 digit postal code  for your target audience. (max 3000 pins displayed)</span></td>



              </tr>



  </table>



</div>







<div class="pagebreak"></div>







<div class=" print_pages" align="left"  style="">



  <table width="900px" height="591" border="0" cellspacing="0" cellpadding="0">



    <tr>



       <td width="900" height="77" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">



        <tr>



          <td width="143" align="left" valign="top" style="padding-top: 10px; padding-left: 4px;"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>



       <td width="401" align="left" valign="top" class="black12" style="padding-top: 14px;"><strong class="psub2"><?php echo $change_title; ?></strong><br />

		 <!--

           <span class="pbody"><br>

	Target: <?php //echo $short_header; ?>

</span><br/>

<div class="tooltip1 pbody">

    Click for Details

    <span class="tooltiptext1">

        <?php //echo $var_click_details; ?>

    </span>

</div>

-->

<span style="float: left;" class="pbody">Target Audience:</span>

<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">

    Click for Details

    <span class="tooltiptext1">

        <?php echo $var_click_details; ?>

    </span>

</div>

</td>



          <td valign="top" width="356" align="right" style="padding-top: 4px;  padding-right: 15px;  color: #900c3f"><span class="pheading" style="color: #900c3f;"><strong class="stitle">SCORE BY DECILE</strong></span><strong class="stitle"><br>



          </strong></td>



        </tr>



      </table></td>



    </tr>



    <tr>



      <td >&nbsp;</td>



    </tr>



    <tr>



    <td class="sgrey14" style="padding-left: 20px;">      <strong class="psub2">Market area average: <?php echo round($average_score_in_area); ?> <br>   



      Top 20% of households: <?php echo round((($decile_score_array[0] + $decile_score_array[1]) / 2)); ?><br>



      Bottom 20% of households:<?php echo round((($decile_score_array[8] + $decile_score_array[9]) / 2)); ?></strong></td>



    </tr>



  <tr>



  <td ><div id="chart_div" style="width: 99%; height: 380px;"></div></td>



  </tr>



  </table>



</div>





<div class="pagebreak"></div>

 

   <div class=" print_pages" align="left"  style="height: 600px; padding-bottom: 15px;">

     <table width="900px" height="500" border="0" cellspacing="0" cellpadding="0">

       <tr>

         <td width="100%" colspan="2" class="sorange24" ><table width="100%" border="0" cellspacing="0" cellpadding="0">

           <tr>

             <td width="16%" align="left" valign="top" style="padding-top: 12px; padding-left: 3px;"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

             <td width="51%" align="left" valign="top" class="black12" style="padding-top: 15px;"><strong class="psub2"><?php echo $change_title; ?></strong><br />

               <!--

			   <span class="pbody"> Target: <?php //echo $short_header; ?>

               </span><br/>

               <div class="tooltip1 pbody"> Click for Details <span class="tooltiptext1">

                 <?php //echo $var_click_details; ?> </span> </div>

				 -->

				 <span style="float: left;" class="pbody">Target Audience:</span>

				 <div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">

					Click for Details

					<span class="tooltiptext1">

						<?php echo $var_click_details; ?>

					</span>

				</div>

			 </td>

             <td valign="top" width="33%" align="right"  style=" padding-top: 4px; padding-right: 10px;  color: #900c3f"><span class="pheading" style="color: #900c3f;"><strong class="stitle">LIFT CHART</strong></span><strong class="stitle"><br />

             </strong></td>

           </tr>

         </table></td>

       </tr>

       <tr>

         <td colspan="2" class="sorange24" >&nbsp;</td>

       </tr>

       <tr>

         <td colspan="2" valign="center" ><div id="chart_div4b" style="width: 99%; height: 420px; margin: 0 auto;"></div></td>

       </tr>

     </table>

   </div>



   <div class="pagebreak"></div>

   

   



<div class=" print_pages" align="left"  style=""> 



  <table width="900px" height="575" border="0" cellspacing="0" cellpadding="0">



    <tr>



      <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">



        <tr>



          <td width="145" height="103" align="left" valign="top" style="padding-top: 12px; padding-left: 3px;"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>



         <td width="458" align="left" valign="top" class="black12" style="padding-top: 15px;"><strong class="psub2"><?php echo $change_title; ?></strong><br>

		 <!--

           <span class="pbody">

	Target: <?php //echo $short_header; ?>

</span><br/>

<div class="tooltip1 pbody">

    Click for Details

    <span class="tooltiptext1">

        Target Audience Selected<br><?php //echo $var_click_details; ?>

    </span>

</div>-->

<span style="float: left;" class="pbody">Target Audience:</span>

<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">

    Click for Details

    <span class="tooltiptext1">

        <?php echo $var_click_details; ?>

    </span>

</div>

</td>



          <td valign="top" width="297" align="right" style="padding-top: 4px;   padding-right: 10px;  color: #900c3f"><span class="pheading" style="color: #900c3f;"><strong class="stitle">DEMOGRAPHICS</strong></span><strong class="stitle"><br>



            </strong> <a class="btn btn-primary btn-sm"  onClick="DETAILsubmit_2(2271156);"><i class="fa fa-file-text fa-lg"></i>&nbsp;



&nbsp;<strong>View Details</strong>&nbsp;</a></td>



        </tr>



      </table></td>



    </tr>



   



  <tr height="210">



    <td width="50%" height="154" align="center" valign="top">



      <table width="100%" border="0" cellspacing="0" cellpadding="2">



        <tr>



          <td width="200" align="center" valign="top"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>



        



		<td valign="top" class="black14"><span class="black14"><strong>Primary Family Structure Cohort</strong></span><strong><br />



		



          <?php echo $family_top_comment[0]; ?> </strong></span><span class="pbody"><strong><br>



            </strong></span><span class="pbody"><?php echo $family_comment; ?></span></p></td>



          </tr>



        </table>



      </td>



    <td align="center" valign="top">      



      <table width="100%" border="0" cellspacing="0" cellpadding="2">



        <tr>



          <td width="200" align="center" valign="top"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>



          <td valign="top" class="black14"><span class="black14"><strong>Primary Age Cohort</strong></span><strong><br />



		  



          <?php echo $age_top_comment[0]; ?></strong></span><span class="pbody"><strong><br>



          </strong><?php echo $age_comment; ?></span></p></td>



          </tr>



      </table></td>



  </tr>



  <tr>



  

    <td height="" align="center" valign="top"> <span class="psub2" style="font-size: 18.5px">Household Income</span>    

	<div id="piechart_3d" style="width: 95%; height: 200px;"></div>



  </td>

  

  

  <td height="" align="center" valign="top"> <span class="psub2" style="font-size: 18.5px">Ethnic Diversity</span>    

	<div id="piechart_3d2" style="width: 95%; height: 200px;"></div>

	

	   

  

	  </td>





  </tr>



  </table>



  



</div>