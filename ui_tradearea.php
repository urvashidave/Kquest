<SCRIPT language="JavaScript">
function POLYsubmit(color) {
document.getElementById('next_page_color').value = color;
document.getElementById('next_page').value = "ui_radload.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function EDITsubmit(color) {
document.getElementById('next_page_color').value = color;
document.getElementById('next_page').value = "ui_editpoly.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

</script>

<style>

</style>


<?php
$color = $_POST['next_page_color'];
if($color=="red"){?>

<style>
.sblue{
color: #990033;
}
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #990033;
}
.red:hover {
    color: #b74c70;
}
.stitle {

	color: #990033;

}
.sreseller {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #990033;
}
.sreseller:hover {	

	color: #b74c70;;
}


</style>




<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="32%"><img src="radius.png" width="150" height="150" alt="radius" onclick= "MAPLOADsubmit('red');"/></td>
              <td width="68%" valign="top" align='center'><p><a href="javascript:MAPLOADsubmit('red');" class="red">New Trade Area </a></p>
                <p><a href="javascript:MAPLOADsubmit('red');" class="sreseller"><strong>RADIUS</strong></a></p>
                <p><a href="javascript:MAPLOADsubmit('red');" class="sgrey12"><br />
                  Create a new store's trade  area based on distance to the store.<br />
                </a></p></td>
            </tr>
          </table></td>
        </tr>
    </table>
    <br />
    <br /></td>
    <td width="50%" height="100" align="center" valign="top" bgcolor="#FFFFFF">
    <table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="32%"><img src="csv.jpg" width="150" height="150" alt="upload" onclick= "CSVsubmit('red');"/></td>
            <td width="68%" valign="top" align='center'><p><a href="javascript:CSVsubmit('red');" class="red">New Trade Area </a></p>
              <p><a href="javascript:CSVsubmit('red');" class="sreseller">File Upload</a><a href="javascript:CSVsubmit('red');" class="sgrey12"><br />
                </a></p>
              <p><a href="javascript:CSVsubmit('red');" class="sgrey12">Upload a list of FSALDU (postal codes) in a single column CSV file</a></p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="40" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF"><table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="32%"><img src="poly.png" width="150" height="150" alt="polygon" onclick= "POLYsubmit('red');"/></td>
            <td width="68%" valign="top" align='center'><p><a href="javascript:POLYsubmit('red');" class="red">New Trade Area </a></p>
              <p><a href="javascript:POLYsubmit('red');" class="sreseller">Draw on Map</a><a href="javascript:POLYsubmit('red');" class="sgrey12">
                </a>
                <p><a href="javascript:POLYsubmit('red');" class="sgrey12">Draw a </a><a href="javascript:POLYsubmit('red');" class="sgrey12">new store's</a> <a href="javascript:POLYsubmit('red');" class="sgrey12">custom trade area on a map</a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td height="100" align="center" valign="top" bgcolor="#FFFFFF"><table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="32%"><img src="edit_poly.png" width="150" height="150" alt="edit" /></td>
            <td width="68%" valign="top" align='center'><p><a href="javascript:EDITsubmit('red');" class="red">Edit Existing Store </a></p>
              <p><a href="javascript:EDITsubmit('red');" class="sreseller">Edit Trade Area</a><a href="javascript:EDITsubmit('red');" class="sgrey12"> </a> </p>
              <p><a href="javascript:EDITsubmit('red');" class="sgrey12">Edit or add a trade area to an existing store</a><a href="javascript:EDITsubmit('red');" class="sgrey12"></a></p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>




<?php } else {
?>

<style>

.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #147EA7;
}
.red:hover {
    color:#2a6496 ;
}
.stitle {

	color: #147EA7;

}
.sreseller {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #147EA7;
}
.sreseller:hover {	

	color: #2a6496;
}
.sblue{
color: #147EA7;
}

</style>




<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="32%"><img src="radius.png" width="150" height="150" alt="radius" onclick= "MAPLOADsubmit('blue');"/></td>
              <td width="68%" valign="top" align='center'><p><a href="javascript:MAPLOADsubmit('blue');" class="red">New Trade Area </a></p>
                <p><a href="javascript:MAPLOADsubmit('blue');" class="sreseller"><strong>RADIUS</strong></a></p>
                <p><a href="javascript:MAPLOADsubmit('blue');" class="sgrey12"><br />
                  Create a new store's trade  area based on distance to the store.<br />
                </a></p></td>
            </tr>
          </table></td>
        </tr>
    </table>
    <br />
    <br /></td>
    <td width="50%" height="100" align="center" valign="top" bgcolor="#FFFFFF">
    <table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="32%"><img src="csv.jpg" width="150" height="150" alt="upload" onclick= "CSVsubmit('blue');"/></td>
            <td width="68%" valign="top" align='center'><p><a href="javascript:CSVsubmit('blue');" class="red">New Trade Area </a></p>
              <p><a href="javascript:CSVsubmit('blue');" class="sreseller">File Upload</a><a href="javascript:CSVsubmit('blue');" class="sgrey12"><br />
                </a></p>
              <p><a href="javascript:CSVsubmit('blue');" class="sgrey12">Upload a list of FSALDU (postal codes) in a single column CSV file</a></p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="40" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF"><table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="32%"><img src="poly.png" width="150" height="150" alt="polygon" onclick= "POLYsubmit('blue');"/></td>
            <td width="68%" valign="top" align='center'><p><a href="javascript:POLYsubmit('blue');" class="red">New Trade Area </a></p>
              <p><a href="javascript:POLYsubmit('blue');" class="sreseller">Draw on Map</a><a href="javascript:POLYsubmit('blue');" class="sgrey12">
                </a>
                <p><a href="javascript:POLYsubmit('blue');" class="sgrey12">Draw a </a><a href="javascript:POLYsubmit('blue');" class="sgrey12">new store's</a> <a href="javascript:POLYsubmit('blue');" class="sgrey12">custom trade area on a map</a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td height="100" align="center" valign="top" bgcolor="#FFFFFF"><table width="90%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="32%"><img src="edit_poly.png" width="150" height="150" alt="edit" /></td>
            <td width="68%" valign="top" align='center'><p><a href="javascript:EDITsubmit('blue');" class="red">Edit Existing Store </a></p>
              <p><a href="javascript:EDITsubmit('blue');" class="sreseller">Edit Trade Area</a><a href="javascript:EDITsubmit('blue');" class="sgrey12"> </a> </p>
              <p><a href="javascript:EDITsubmit('blue');" class="sgrey12">Edit or add a trade area to an existing store</a><a href="javascript:EDITsubmit('blue');" class="sgrey12"></a></p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
}
?>
