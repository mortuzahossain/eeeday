<?php

/**
* Database Connection And Basic Operation
*/

include 'constants.php';

class Database
{
    
    // Getting the constent value

    public $host    = host;
    public $user    = user;
    public $pass    = pass;
    public $dbname  = dbname;

    public $link;
    public $error;

    function __construct()
    {
        $this->conncetDB();
    }
    
    private function conncetDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->link) {
            $this->error = "connection fail".$this->link->connect_error;
            return false;
        }
    } 

    //select or read data
    public function select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if ($result->num_rows>0) {
        return $result;
        } else{
            return false;
        }
    }

    //Insert data
    public function insert($query){
        $insert_row = $this->link->query($query) or die ($this->link->error.__LINE__); 
        if ($insert_row) {
            header("Location: index.php?msg=".urlencode('Data Inserted successsfully.'));
            exit();
        } else{
            die("Error : (".$this->link->errno.")".$this->link-error); 
        }

    }

    //Update data
    public function update($query){
        $update_row = $this->link->query($query) or die ($this->link->error.__LINE__); 
        if ($update_row) {
            header("Location: index.php?msg=".urlencode('Data Updated successsfully.'));
            exit();
        } else{
            die("Error : (".$this->link->errno.")".$this->link-error); 
        }

    }

    //Delete data
    public function delete($query){
        $delete_row = $this->link->query($query) or die ($this->link->error.__LINE__); 
        if ($delete_row) {
            header("Location: index.php?msg=".urlencode('Data Deleted successsfully.'));
            exit();
        } else{
            die("Error : (".$this->link->errno.")".$this->link-error); 
        }
    }


}

