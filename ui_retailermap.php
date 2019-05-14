<div class=" print_pages" align="left">
<a name="anchor1"></a>
<td><table width="889" height="74" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="900" height="107" colspan="2" padding-right:="padding-right:"""><table width="896" height="89"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="125" height="62"  padding-right:="padding-right:""5" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>
<td width="565" height="62" paddingtop = "1cm;" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
<?php echo $change_title2; ?></span></td>
<td width="192" height="62" align="left" valign="middle"><strong class="stitle">RETAILERS</strong></td>
</tr>
<tr>
<td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="25%"><?php 
// get retailer list
include 'db_connect.php'; 
$query = "SELECT DISTINCT CATEGORY_ID, CATEGORY_NAME FROM retail_cat_tree";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$distinct_retail_cat_id[] = $row['CATEGORY_ID'];
$distinct_retail_cat_name[] = $row['CATEGORY_NAME'];
}}
$query = "SELECT * FROM retail_cat_tree";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$retail_cat_id[] = $row['CATEGORY_ID'];
$retail_cat_name[] = $row['CATEGORY_NAME'];
$retail_sub_id[] = $row['SUB_ID'];
$retail_sub_name[] = $row['SUB_CATEGORY'];
}}
?>
<input name="my_competitors" type="button" class="top-level-menu_copy" id="my_competitors"  onclick="submitmy_competitors(<?php echo $store_uid ; ?>);" value="My Competitors" />
<br /><br />
<ul class="top-level-menu">
<li> <a >Specific Retailers</a>
<ul class="second-level-menu">
<?php 
for ( $i = 0; $i < sizeof($distinct_retail_cat_id); $i ++) {	
echo " <li><a href='#anchor1' onclick='retailer_catmap(" . $distinct_retail_cat_id[$i] .")'>" . $distinct_retail_cat_name[$i] . "</a>";
echo "<ul class='third-level-menu'>";	
for ( $j = 0; $j < sizeof($retail_sub_id); $j ++) {	
if($retail_cat_id[$j] == $distinct_retail_cat_id[$i]) {
echo " <li><a href='#anchor1' onclick='retailer_submap(" . $retail_sub_id[$j] .")'>" . $retail_sub_name[$j] . "</a></li>";
}
}
echo "</ul>";
echo "</li>";	
}
?>
</ul>
</li>
</ul>
<input name="retailer_catmap" type="hidden" id="retailer_catmap" value="<?php echo $retailer_catmap; ?>" size="3" />
<input name="retailer_submap" type="hidden" id="retailer_submap" value="<?php echo $retailer_submap; ?>" size="3" /></td>
<td width="32%"><input name="change_reportret" type="submit" class="top-level-menu_submit botton_none" id="change_reportret"  onclick="change_report(<?php echo $store_uid ; ?>);" value="Update Report" />
<i class ="red_note_font" id="update_note"> </i><br /></td>
<td width="43%" class="pbodyemp"><?PHP echo $display_cat_name ; ?><br />
<?PHP echo sizeof($map_store_fsaldu) ; ?>  retailers displayed</td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td colspan="2" align="center"  valign="middle">
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
<td width="300" align="center" valign="top">Retailers Identified<br />
<div class="div_scroll_map">
<table width="100%" border="1" cellpadding="0" cellspacing="0" class="pbody12">
<tr>
<td width="11%" valign="top" align="center">#</td>
<td width="65%" valign="top">Retailer</td>
<td width="11%" valign="top">Km</td>
</tr>
<?php 
for ($i = 0; $i < sizeof($map_store_fsaldu) ; $i++)
{ 
echo "<tr><td valign='top' class='pbodyemp' align='center'><strong>" . $map_icon_label[$i] . "</strong></td>";
echo "<td valign='top' align='left'>" . $map_store_name[$i] . "<br />" . $map_store_address[$i] . "</td>";
echo "<td valign='top' align='center'>" . number_format($map_km[$i],1) . "</td></tr>";				
}
?>
</table>
</div></td>
<td align="center" valign="top"><div id="map_ret" style="width: 600px; height: 450px"> </div></td>
</tr>
</table>
</tr>
</table></td>
</div>
</br >