<?php
include '../inc/conn.php';
if (!empty($_POST["data"])) {
	
	$data = $_POST["data"];
	
	if ($data == 1) {
		include 'inc/alldata.php';
	} else {
		$sql = "SELECT * FROM participance2018 WHERE eventslug = '$data' ORDER BY id DESC" ;
	    $result = mysqli_query($con,$sql);
	    $have_data = mysqli_num_rows($result);
	    if ($have_data) {
			while($row = mysqli_fetch_assoc($result)){
	            $participance[] = $row;
	        }
	        $serial_no =0;
	        ?>


	<table class="table table-striped ">
        <tr>
            <td width="5%">SL</td>
            <td width="35%%">Name</td>
            <td width="40%">Institution Name</td>
            <td width="10%">Status</td>
            <td width="10%">Details</td>
        </tr>       
<?php foreach ($participance as $key) { $serial_no++; ?>
        <tr>
            <td width="5%"><?php echo $serial_no; ?></td>
            <?php if(!empty($key['name'])) {?>
            <td width="35%"><?php echo $key['name']; ?></td>
            <?php } else { ?>
            <td width="35%"><?php echo $key['teamname']; ?></td>
            <?php } ?>
            <td width="40%"><?php echo $key['institute']; ?></td>
            <?php if($key['status'] == '0'){ ?>
            <td width="10%" class="pending text-center">
                <p>Pending</p>
            </td>
            <?php } elseif ($key['status'] == '1') { ?>
            <td width="10%" class="accepted text-center">
                <p>Accepted</p>
            </td>
            <?php } else { ?>
            <td width="10%" class="rejected text-center">
                <p>Rejected</p>
            </td>
            <?php } ?>
            <td width="10%"><a href="details.php?id=<?php echo $key['id']; ?>" target="_blank" class="btn btn-success mybun">Details</a></td>
        </tr>       
<?php } ?>
	</table>


	        <?php
	    } else {
	    	echo "No Participance Registered Yet.";
	    }
	}
}