<?php

class view extends config {

  public function viewData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // return $result;
    echo "<h3 class='mb-4'>Pending Task</h3>";
    echo "<table class='table table-striped table-bordered'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>Task Item</th>
        <th scope='col'>Action</th>
      </tr>
    </thead>
    <tbody>";
      foreach ($result as $data) {
        echo "<tr>";
        echo "<td>$data[item]</td>";
        echo "<td>
                <a class='btn btn-info btn-sm' href='index.php?edit=$data[id]' data-toggle='tooltip' title='Mark as Completed'>
                  <span class='material-symbols-outlined'>done_outline</span>
                </a>
                <a class='btn btn-danger btn-sm' href='index.php?delete=$data[id]' data-toggle='tooltip' title='Delete Task'>
                  <span class='material-symbols-outlined'>delete</span>
                </a>
              </td>";
        echo "</td>";
      }
    echo "</tbody></table>";

  }  

  public function viewCompletedData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // return $result;
    echo "<h3 class='mb-4'>Completed Task</h3>";
    echo "<table class='table table-striped table-bordered'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>Task Item</th>
        <th scope='col'>Date Completed</th>
      </tr>
    </thead>
    <tbody>";
      foreach ($result as $data) {
        echo "<tr>";
        echo "<td>$data[item]</td>";
        echo "<td>$data[date_completed]</td>";
        echo "</td>";
      }
    echo "</tbody></table>";

  }  

}

?>
