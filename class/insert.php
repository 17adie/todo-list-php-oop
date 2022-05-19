<?php

class insert extends config {

  public $task;

  public function __construct($task) {
    $this->task = $task;
  }


  public function insertTask(){
    $con = $this->con();
    $sql = "INSERT INTO `tbl_todolist` (`item`, `status`, `date_added`)
                  VALUES
                    (:item, 'PENDING', NOW())
          ";
    $stmt = $con->prepare($sql);

    // for multiple
    $arr = array(
        ":item" => $this->task
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