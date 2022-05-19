<?php

class view_table extends config {

  public $id;

  public function __construct($id) {
    $this->id = $id;
  }


  public function view(){
    $con = $this->con();
    $sql = "UPDATE `tbl_todolist` SET `status` = 'COMPLETED', `date_completed` = NOw() WHERE `id` = :id
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