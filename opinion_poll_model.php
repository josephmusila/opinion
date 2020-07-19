<?php
class Opinion_poll_model{
    private $db_handle;
    private $host ='localhost';
    private $db='hospital';
    private $uid='root';
    private $pwd='';

    public function _construct(){
        $this->db_handle=mysqli_connect($this->host,$this->uid,$this->pwd);//connect to mysql server
        if(!$this->db_handle)die("unable to connect to MYSQL: ".mysqli_error());
    }
    private function execute_query($sql_stmt){
        $result=mysqli_query($db_handle,$sql_stmt);//execute sql stmt
        return !$result ? FALSE : TRUE;

    }
    public function select($sql_stmt){//retrievin data from the database
        $result=mysqli_query($db_handle,$sql_stmt);
        if(!$result)die("database connection failed:".mysqli_error());
        $rows=mysqli_num_rows($result);
        $data=array();
        if($rows){
            while($row=mysqli_fetc_array($result)){
                $data=$row;
            }
        }
        return $data;
    }
    public function insert($sql_stmt){//callls the execute query method
        return $this->execute_query($sql_stmt);

    }
    public function _destruct(){//closes database connection
        mysqli_close($this->db_handle);
    }
    
}
?>