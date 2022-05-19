<?php

class delete extends config {

  public $id;

  public function __construct($id) {
    $this->id = $id;
  }


  public function deleteTask(){
    $con = $this->con();
    $sql = "DELETE FROM `tbl_todolist` WHERE `id` = :id
          ";
    $stmt = $con->prepare($sql);

    // for multiple
    $arr = array(
        ":id" => $this->id
    );

    // for single or less than 3 params
    // $stmt->bindParam('item', $this->task);
    
    // var_dump($stmt);
    // die();
    
    if($stmt->execute($arr)){
      return true;
    } else {
      return false;
    }
  }

}

?>