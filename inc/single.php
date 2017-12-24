<?php


$participance_name = $_POST['participance_name'];
$participance_roll = $_POST['participance_roll'];
$participance_dept = $_POST['participance_dept'];

if ($transection_type == 1) {
    # Text Value Input

    $sql = "SELECT id FROM participance2018 WHERE transectionid = '".$transactionid."'";
    $check = mysqli_query($con,$sql);
    $check = mysqli_num_rows($check);
    
    if ($check) {
        echo "Duplicate Transaction ID Please Try again or contact us.";
    } else {

        $sql = "INSERT INTO participance2018 (eventslug,name,roll,depertment,institute,phone,alternativephone,email,alternativeemail,transectionid) VALUES ('$event_name','$participance_name','$participance_roll','$participance_dept','$instutute_name','$phone','$altphone','$email','$altemail','$transactionid') ";
        #var_dump( mysqli_query($con,$insert_qury)) ;
        if (mysqli_query($con,$sql)) {
            echo "Your Request have been submit Please wait for approve";
        } else {
            echo "Sorry Something Wrong in Database Please try Again";
        }

    }
}

if ($transection_type == 2) {
    // File Properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    // File Extention
    $file_extention = explode('.', $file_name);
    $file_extention = strtolower(end($file_extention));

    // Allowed File Type
    $allowed = array('gif','jpg','png');
    define('ROOTPATH', __DIR__);

    if (in_array($file_extention,$allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 100000000) {
                $file_name_new = uniqid('',true). '.' .$file_extention;
                // In Server Where Want to save the file
                $file_destinition = ROOTPATH.'/img/bankrecept/'.$file_name_new;
                //echo $file_destinition;
                echo $file_destinition;
                if (move_uploaded_file($file_tmp, $file_destinition)) {
                    # Save Data In Database
                    #echo $file_destinition;

                    $sql = "INSERT INTO participance2018 (eventslug,name,roll,depertment,institute,phone,alternativephone,email,alternativeemail,transectionimg) VALUES ('$event_name','$participance_name','$participance_roll','$participance_dept','$instutute_name','$phone','$altphone','$email','$altemail','$file_name_new') ";
                    if (mysqli_query($con,$sql)) {
                        echo "Your Request have been submit Please wait for approve";
                    } else {
                        echo "Sorry Something Wrong in Database Please try Again";
                    }


                } else {
                    echo "Error in File Uploading";
                }
            } else{
                echo "File Size is too Big";
            }
        }
    }
}

?>