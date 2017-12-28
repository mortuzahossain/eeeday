<?php
    include('inc/top.php');
?>

<div class="col-md-4 ">
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Approved</h5>
		<label>8761</label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Pending</h5>
		<label>6295</label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Rejected</h5>
		<label>3401</label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
</div>
<div class="col-md-8 content-top-2 ">
	<h1 class="padding20">All Participance</h1>
	<select class="form-control ">
		<option>All</option>	
		<option>Matlab</option>
	</select>

<?php
    $sql = "SELECT * FROM participance2018 ORDER BY id DESC" ;
    $result = mysqli_query($con,$sql);
    $have_data = mysqli_num_rows($result);

    if ($have_data) {
		while($row = mysqli_fetch_assoc($result)){
            $participance[] = $row;
        }
        //var_dump($participance);
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

<?php } else {
	echo "No Participance Registered Yet.";
}
?>

</div>

<div class="clearfix"> </div>
<?php
    include('inc/bottom.php');
?>