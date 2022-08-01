<?php

class BaseClass
{
    public $id;

    public function fromArray($data) {

        foreach ($data as $key =>$value)  {
            $this->$key = $value;
        }
    }

    public function toArray() {
        return get_object_vars($this);
    }

    public static function findBy($filterColumn=null, $filterValue=null,$orderColumn=null, $orderDir='ASC', $limit=null,$offset=0 ) {
        $tableName= static::getTable();
        $className = static::class;
        $sql = "SELECT * FROM $tableName " ;

        if(!is_null($filterColumn)){
            $sql .= " WHERE $filterColumn='$filterValue'";
        }
        if(!is_null($orderColumn)){
            $sql .= " ORDER BY $orderColumn $orderDir";
        }
        if(!is_null($limit)){
            $sql .= " LIMIT $offset,$limit;";
        }
        $data=runQuery($sql);
        $objectList=[];
        foreach ($data as $datum){
            $obj = new $className();
            $obj->fromArray($datum);
            $objectList[] = $obj;
        }
        return $objectList;
    }

    public static function findOneBy( $filterColumn=null, $filterValue=null,$orderColumn=null, $orderDir='ASC',$offset=0)
    {
        $data = self::findBy($filterColumn, $filterValue, $orderColumn, $orderDir, 1, $offset);
        return $data[0];
    }

    public static function findAll ($orderColumn=null,$orderDir='ASC' ) {
        return self::findBy( null, null, $orderColumn, $orderDir);
    }

    public static function find ($id){
        return self::findOneBy('id',$id);
    }

    public function save(){
        if (isset($this->id)){
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    function insert() {
        $data= $this->toArray();
        $tableName= static::getTable();
        $columnsString='';
        $valuesString='';

        foreach ($data as $column => $value) {
            $columnsString = $columnsString."`$column`, ";
            $valuesString = $valuesString."'$value', ";
        }
        $columnsString = rtrim($columnsString, ", ");
        $valuesString = rtrim($valuesString, ", ");
        $sql = "INSERT INTO $tableName ($columnsString) VALUES ($valuesString);";
        $this->id =  runQuery($sql);
    }

    function update() {
        $data = $this->toArray();
        $tableName= static::getTable();
        $id = $this->id;
        $setString= '';
        foreach ($data as $column => $value) {
            $setString= $setString."`$column`='$value', ";
        }
        $setString = rtrim($setString, ", ");
        $sql = "UPDATE $tableName SET  $setString WHERE `id`=$id;";
        return runQuery($sql);

    }
    function delete () {
        $tableName= static::getTable();
        $id = $this->id;
        $sql = "DELETE FROM $tableName WHERE `id`=$id;";
        return runQuery($sql);
    }

}
