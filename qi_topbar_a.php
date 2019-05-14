<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script>

function call(){
var myEle = document.getElementById("proc_div");
    if (myEle != null && myEle.value == '') {
document.getElementById('proc_div').style.display = 'none';
}
window.history.go(-1);
location.reload(); 
};
</script>
<style>

<style>

.Example_M {

-moz-box-shadow: 5px 5px #DF2D00;

-webkit-box-shadow: 5px 5px #DF2D00;

box-shadow: 5px 5px #DF2D00;

}

@media print {

#lifestyle {
     page-break-after: avoid !important;
     page-break-before: avoid !important;
     page-break-inside: avoid !important;
}
{    
	.print-footer {
		position: absolute;
		bottom: 0;
	}
    .no-print, .no-print *

    {

        display: none !important;

    }

}

</style>

<?php 
date_default_timezone_set('America/Toronto');

$query = "SELECT user_password FROM amfd_users WHERE user_id = $user_id ";

		if ($result = mysqli_query($link, $query)) {

				while ($row = mysqli_fetch_assoc($result)) {

					  $mfd_uid = $row['user_password'];

				}				

			mysqli_free_result($result);

		}

$mfd_uid_date = date("j"); 

$mfd_uid = $mfd_uid * 17 *$mfd_uid_date;

?>

<form id="main_form" <?php echo $upload_form_yn ; ?> name="main_form" method="post" action="">





<div class="no-print">

<div class="container">    

 	<div class="row">

    	<div class="col-md-4">

                 <img src="image3/KQUEST.png" width="226" height="100" alt="KQUEST" />

      	</div>

         <div class="col-md-8" >

           <input name="mfd_uid" type="hidden" id="mfd_uid" value="<?php echo $mfd_uid; ?>" size="15" />

           <input name="next_page" type="hidden" id="next_page" value="<?php echo $next_page; ?>" size="15" />
            <input name="next_page_color" type="hidden" id="next_page_color" value="red" size="15" />

           <input name="user_id" type="hidden" id="user_id" value= "<?php echo $user_id; ?>" size="4" />

           <input name="process_page" type="hidden" id="process_page" value="<?php echo $process_page; ?>" size="15" />
           

           <table width="100%"  align="center" bgcolor="#f8f8f8" >

             <tr>

               <td align="center" bgcolor="#f8f8f8"><a href="javascript: HOMEsubmit();" class="sbutton">Dashboard</a></td>

               <td align="center" bgcolor="#f8f8f8"><a href="javascript: MFDsubmit();" class="sbutton">Return to <br />
               Main Menu
               </a></td>
               <td align="center" bgcolor="#f8f8f8"><a class="sbutton" href="javascript:call();">Back</a></td>
               





               <td align="center" bgcolor="#f8f8f8"><?php if($user_id > 0 && $user_id < 4) echo "<a href='javascript: ADMINsubmit();' class='sbutton'>Administration</a>"; ?></td>

             </tr>

           </table>

<span class="sgrey14">Welcome <?php echo $user_firstname; ?> <?php echo $user_lastname; ?>&nbsp;</span>

         </div>

    </div>

</div>    

</div>            

<div class="container" align="center">    

 	<div class="row">   

    	<div class="col-md-12">      

			<?php include $next_page; ?>

        </div>

    </div>

    <div class="row">   

    	<div class="col-md-12" style="margin: 0 auto;">         
				<!--<div class="print-footer" style="width:20%; text-align: center; margin:0 auto; float: top;">&nbsp;© 2010-2017<a href="javascript: HOMEsubmit();" class="sgrey10"></a></div></div>-->

    </div>

</div>



</form>

   <p>
     <script src="js/jquery.js"></script>
</p>
   <p> 
     
     <script src="js/bootstrap.js"></script>
     
      </p>
