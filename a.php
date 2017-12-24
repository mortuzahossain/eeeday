<html>
    <head>
        
    </head>
<body>
<pre>
    <?php
/*
        include 'inc/conn.php';

        $data = 'matlabcontest';

        $sql = "SELECT teamon,maxteammember FROM event2018 WHERE slug = '".$data."'";



       // $sql = 'SELECT teamon,maxteammember FROM event2018 WHERE slug = matlabcontest';


        $result = mysqli_query($con,$sql);

        if($result){
            $have_data = mysqli_num_rows($result);
            if($have_data){
                while($row = mysqli_fetch_assoc($result)){
                    $alldata[] = $row;
                }
                var_dump($alldata);
            } else {
                echo 'No data available to show.';
            }
            
        } else {
            echo 'Problem in Database';
        }


        $result = mysqli_query($con,$sql)->fetch_assoc();
        // if ($result) {
        //     print_r($result);
        //     echo "Done";
        // }
        
print_r($result);*/


        $maxteammember = 3;


        $sql = "INSERT INTO participance2018
         (eventslug,participationtype,teamname
         teamleadername,teamleaderroll,teamleaderdept,
         ";
        for ($i=0; $i < $maxteammember; $i++) { 
            $sql .= $member_name_db[$i].', ';
            $sql .= $member_roll_db[$i].', ';
            $sql .= $member_dept_db[$i].', ';
        }



echo $sql;


        ?>


</pre>

    </body>
</html>