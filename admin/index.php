<?php
    include('inc/top.php');
?>

<div class="col-md-4 ">
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Total</h5>
<?php
	$sql = "SELECT id FROM participance2018";
	$count = mysqli_query($con,$sql);
?>
<label><?php echo mysqli_num_rows($count); ?></label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Approved</h5>
<?php
	$sql = "SELECT id FROM participance2018 WHERE status = 1";
	$count = mysqli_query($con,$sql);
?>
<label><?php echo mysqli_num_rows($count); ?></label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Pending</h5>
<?php
	$sql = "SELECT id FROM participance2018 WHERE status = 0";
	$count = mysqli_query($con,$sql);
?>
<label><?php echo mysqli_num_rows($count); ?></label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="content-top-1">
	<div class="col-md-6 top-content">
		<h5>Rejected</h5>
<?php
	$sql = "SELECT id FROM participance2018 WHERE status = 2";
	$count = mysqli_query($con,$sql);
?>
<label><?php echo mysqli_num_rows($count); ?></label>
	</div>
	<div class="col-md-6 top-content1">	   
		<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
	</div>
	 <div class="clearfix"> </div>
	</div>
</div>
<div class="col-md-8 content-top-2 ">
	<h1 class="padding20">All Participance</h1>
	<hr>

<?php 
    $sql = 'SELECT events , slug FROM event2018';
    $result = mysqli_query($con,$sql);
    $have_data = mysqli_num_rows($result);
    if($have_data){
        while($row = mysqli_fetch_assoc($result)){
            $allevents[] = $row;
        }

?>
	
	<select class="form-control " onchange="getData(this.value)">
		<option value="1">All</option>
	<?php foreach ($allevents as $key) { ?>
		<option value="<?php echo $key['slug']; ?>"><?php echo $key['events']; ?></option>
	<?php } ?>
	</select>
<?php } ?>

<script type="text/javascript">
	function getData(val) {
		$.ajax({
            type: "POST",
            url: "getdata.php",
            data:'data='+val,
            success: function(data){
                $("#showme").html(data);
            }
        });
	}
</script>


<div id="showme">
	<?php include 'inc/alldata.php'; ?>
</div>
</div>
<div class="clearfix"> </div>
<?php
    include('inc/bottom.php');
?>