<?php
include '../controllers/ajaxcontroler.php';
$id=$_POST['profile_id'];
$admin = new ajaxcontroler();
$res= $admin->profiledetail($id)
?>
<table class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
        <td><b>Name</b></td>
        <td class="notranslate"><?php echo $res->name; ?></td>
    </tr>
    <tr>
        <td><b>About/Descriptions</b></td>
        <td class="notranslate"><?php echo $res->about; ?></td>
    </tr>
    <tr>
        <td><b>Services</b></td>
        <td class="notranslate"><?php echo $res->services; ?></td>
    </tr>
    <?php 
		if($res->mcat_id == 1)
		{
		?>
        <tr>
        <td><b>Helth Care</b></td>
        <td class="notranslate"><?php echo $res->helthcare; ?></td>
    	</tr>
        <?php 	
		}
		
	?>
    <tr>
        <td><b>Address</b></td>
        <td class="notranslate"><?php echo $res->address; ?></td>
    </tr>
    <tr>
        <td><b>City</b></td>
        <td class="notranslate"><?php echo $res->city; ?></td>
    </tr>
  
    <tr>
        <td><b>Facebook Link</b></td>
        <td class="notranslate"><?php echo $res->facebook; ?></td>
    </tr>
    <tr>
        <td><b>Twitter</b></td>
        <td class="notranslate"><?php echo $res->twiter; ?></td>
    </tr>

    </thead>
</table>