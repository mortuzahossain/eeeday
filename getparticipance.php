<?php
include 'inc/conn.php';
if (!empty($_POST["data"])) {
	# Show the data Which is Selected
	$data = $_POST["data"];

	// SQL FOR GATING DATA

	$sql = "SELECT teamon,maxteammember FROM event2018 WHERE slug = '".$data."'";
	$result = mysqli_query($con,$sql)->fetch_assoc();
	//var_dump($result);

	if ($result['teamon'] == '1') {
?>
<script type="text/javascript">
    var maxteammember = <?php echo $result['maxteammember']; ?>;
</script>
<input type="hidden" name="maxteammember" value="<?php echo $result['maxteammember']; ?>">
<div class="form-group">
    <label for="exampleInputEmail1">Participation Type</label>
    <select class="form-control" required="1" name="participation_type" onchange="setUserInputType()" id="ptype">
        <option value="0">Select Participation Type</option>
        <option value="1">Single</option>
        <option value="2">Team</option>
    </select>
</div>
<?php
	} else {
?>

		<div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Your Name" name="participance_name" required="1">
        </div>
        
        <div class="form-group">
            <label>Roll</label>
            <input type="text" class="form-control" placeholder="Roll No" name="participance_roll" required="1">
        </div>
        
        <div class="form-group">
            <label>Department</label>
            <input type="text" class="form-control" placeholder="Depertment" name="participance_dept" required="1">
        </div>

        <script type="text/javascript">
                document.getElementById("submitbtn").disabled = false;
        </script>

<?php
	}
} else {
	echo "Suspicious thing happen . Please try again later...";
}

?>