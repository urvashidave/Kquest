<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="905" height="600" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="905" height="600" colspan="2"><table width="100%" height="600" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
                        <td width="42%" height="63" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
          <?php echo $change_title2; ?></span></td>
                        <td width="43%" align="right"><strong class="stitle"> SEGMENTATION</strong></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="79%" height="20"><span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
                      <span class="sgrey141">Market Area</span> <span class="sgrey141">compared to benchmark Average</span></span></td>
                    <td width="21%" align="right"><a href="segment_descriptions.php" target="_blank">View segment descriptions</a></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><strong><span class="sblue"><?php echo number_format($segment_counter); ?> Vital segments were identified</span></strong><br>
                      <strong><span class="sgrey14">These vital segments represent <?php echo number_format($vitalsegment_p); ?>% of your  market area and <?php echo number_format($vitalsegment_c); ?>% of your benchmark households (index <?php echo number_format($vitalsegment_p / $vitalsegment_c *100); ?>)</span></strong></td>
                  </tr>
                  <tr>
                    <td height="420" colspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                    <tr><td width="170">.</td><td width="170">.</td><td width="170">.</td><td width="170">.</td><td width="170">.</td></tr>
                      <tr>
                        <td>
						<?php

if ($segment_counter >0) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[0] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[0] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[0] . "% of market area<br>" 
. $segment_benchmark[0] . "% of benchmark<br> index "
. $segment_index[0] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[0] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?>
                        </td>
                        <td><?php

if ($segment_counter >1) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[1] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[1] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[1] . "% of market area<br>" 
. $segment_benchmark[1] . "% of benchmark<br> index "
. $segment_index[1] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[1] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?>
</td>
                        <td><?php

if ($segment_counter >2) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[2] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[2] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[2] . "% of market area<br>" 
. $segment_benchmark[2] . "% of benchmark<br> index "
. $segment_index[2] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[2] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
                        <td><?php

if ($segment_counter >3) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[3] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[3] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[3] . "% of market area<br>" 
. $segment_benchmark[3] . "% of benchmark<br> index "
. $segment_index[3] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[3] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
                        <td><?php

if ($segment_counter >4) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[4] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[4] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[4] . "% of market area<br>" 
. $segment_benchmark[4] . "% of benchmark<br> index "
. $segment_index[4] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[4] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
    </tr>
  </table></td>
                  </tr>
                  </table>
                  <tr>
                    <td align="left" class="sgrey14">&nbsp;</td>
</tr>

  </table>
</div>