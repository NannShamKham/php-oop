<?php
class Model extends Database{
    public $table,$sql;
    public function __construct($inputTable)
    {
        $this->table = $inputTable;
        $this->sql = "select * from $this->table";
    }

    public function fetchAll(){
        $query = mysqli_query($this->connect(),$this->sql);
        $rows =[];
        while ($row = mysqli_fetch_object($query)){
            array_push($rows,$row);
        }
        return $rows;
    }

    public function fatch($sql){
        $query = mysqli_query($this->connect(),$sql);

        $row = mysqli_fetch_object($query);
        return $row;
    }

    public function all(){
        $sql = "select * from $this->table";
        return $this->fetchAll($sql);
    }
    public function get(){
        return $this->fetchAll($this->sql);
    }
    public function find(){
        $sql ="select * from $this->table where id=$id";
        return $this->fetch($sql);
    }

    public function where($column,$operator,$value){
        if(str_contains($this->sql,"where")){
            $this->sql = " and ";
        }else{
            $this->sql = " where ";

        }
        $this->sql .="where $column $operator $value";
        return $this;
    }

    public function orwhere($column,$operator,$value){
        if(str_contains($this->sql,"where")){
            $this->sql = " || ";
        }else{
            $this->sql = " where ";

        }
        $this->sql .="where $column $operator $value";
        return $this;
    }

    public function whereIn($column,$valueArray){
     $valueArrayToString = join(",",$valueArray);
        $this->sql .="where ";
        $this->sql .="$column in ($valueArrayToString) ";
        return $this;
    }
}