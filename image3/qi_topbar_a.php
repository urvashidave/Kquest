<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<style>

.Example_M {

-moz-box-shadow: 5px 5px #DF2D00;

-webkit-box-shadow: 5px 5px #DF2D00;

box-shadow: 5px 5px #DF2D00;

}

@media print

{    

    .no-print, .no-print *

    {

        display: none !important;

    }

}

</style>

<?php 

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

           <input name="next_page" type="text" id="next_page" value="<?php echo $next_page; ?>" size="15" />

           <input name="user_id" type="hidden" id="user_id" value= "<?php echo $user_id; ?>" size="4" />

           <input name="process_page" type="hidden" id="process_page" value="<?php echo $process_page; ?>" size="15" />

           <table width="100%"  align="center" bgcolor="#f8f8f8" >

             <tr>

               <td align="center" bgcolor="#f8f8f8"><a href="javascript: HOMEsubmit();" class="sbutton">Dashboard</a></td>

               <td align="center" bgcolor="#f8f8f8"><a href="javascript: MFDsubmit();" class="sbutton">Return to <br />

                 Route Selection</a></td>

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

    	<div class="col-md-12">         

				<span class="sgrey12">&nbsp;© 2017 </span> <a href="javascript: HOMEsubmit();" class="sgrey10">   		</div>

    </div>

</div>



 </form>

   <script src="js/jquery.js"></script> 

<script src="js/bootstrap.js"></script>

