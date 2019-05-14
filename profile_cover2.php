

<style type="text/css" media="all">



.no-border {

	-webkit-box-shadow: none !important;

	box-shadow: none !importanft

}



@media print {

	.no-print {

		display: none !important;

	}

}

.red22 {

    font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;

    color:  #e40963;

    font-size: 22px;

    font-weight: bold;

    padding: 0 0 9px;

}



.black22 {

    font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;

    color: #333;

    font-size: 22px;

    font-weight: bold;

    padding: 0 0 9px;

}



.sgrey14 {

    color: #000000;

    font-family: Arial Narrow,Arial,Helvetica,sans-serif;

    font-size: 18px;

    font-weight: normal;

}



.btn-sm, .btn-xs {

    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;

}

body{



	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;

	font-size: 18px;

}

.btn-primary {

    background-color: #428bca;

    border-color: #357ebd;

    color: #ffffff;

}

.btn {

    -moz-user-select: none;

    border: 1px solid transparent;

    border-radius: 4px;

    cursor: pointer;

    display: inline-block;

    font-size: 14px;

    font-weight: normal;

    line-height: 1.42857;

    margin-bottom: 0;

    padding: 6px 12px;

    text-align: center;

    vertical-align: middle;

    white-space: nowrap;

}



.pbodyemp {

	font-family: Arial Narrow, Arial, Helvetica, sans-serif;

	font-size: 16px;

	font-weight: normal;

	color: #000000;

}








.pprint_pages {

  width: 910px;

  height: 620px;

  background: #fff;

  margin: 25px 0 0 0;

   border-style: solid;

    border-color: #000000 #000000;

  -webkit-border-radius: 6px;

  border-radius: 6px;

  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}



.stitle {

	color: #900c3f !important;

}



.btn-primary {

	background-color: #900c3f !important;

}

</style>




<div class="print_pages firstt" align="center"> 





  <table width="900px" height="601" border="0" cellspacing="0" cellpadding="0" bgcolor="">

  <tr>

  <td width="900" height="182" align="center" valign="top"><p>

  <br />

	<span ><strong class="stitle">

		TARGET AUDIENCE INSIGHTS</strong>

	</span>

	<br />

    <span style="font-weight: bold;">

		<?php echo $change_title; ?>

	</span>

	<br/>

    <span class="print_pages1 no-border">Benchmark : <?php echo $tbench_store_name ; ?><br>

        <?php echo $change_prepared; ?>

	</span><br><br />

   <!-- <span class="pbody"><?php //echo number_format($demo['mfd_homes'][3]); ?> target audience households analyzed (-->
   <span class="pbody"><?php echo number_format($total_households); ?> Households Analysed</span>

  </td>

  </tr>

  <tr >

    <td height="240" align="center"><img src="pics560/connections_wide.jpg" alt="cover" width="588" height="331" class="Example_E1"></td>

  </tr>

  <tr>

    <td height="88" align="center" valign="top" class="sorange16" style="padding-top: 5px;"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" align="left"><img src="image3/KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
    <td width="50%" align="right"> <?php if($client_use_logo >0) echo "<img src='" . $client_logo . "' alt=' '>"; ?> </td>
  </tr>
</table></td>

  </tr>

  </table>

</div>