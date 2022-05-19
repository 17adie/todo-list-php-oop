<?php

function message(){
  insertT();
  deleteT();
  editT();
}

function insertT(){

  if(!empty($_GET['item'])){
    $insert = new insert( $_GET['item'] );
    if($insert->insertTask()){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have inserted task successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> Inserted task error.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
  }

}

function deleteT(){

  if(!empty($_GET['delete'])){
    $delete = new delete( $_GET['delete'] );
    if($delete->deleteTask()){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have delete task successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> delete task error.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
  }

}

function editT(){

  if(!empty($_GET['edit'])){
    $edit = new edit( $_GET['edit'] );
    if($edit->editTask()){
      echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have completed the task successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> Task completion error.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
  }

}

function viewTable(){
  $view = new view();
  $view->viewData();
}

function viewCompletedData(){
  $view = new view();
  $view->viewCompletedData();
}

?>
