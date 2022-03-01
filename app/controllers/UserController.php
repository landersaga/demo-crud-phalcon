<?php

class UserController extends ControllerBase{

  public function indexAction(){

  }

  public function createAction(){
    $user = new User();
    $user->id_user = $this->request->getPost("txt_id");
    $user->name = $this->request->getPost("txt_name");
    $user->address = $this->request->getPost("txt_address");
    $user->contact = $this->request->getPost("txt_contact");
    $user->sex = $this->request->getPost("txt_sex");
    if (!$user->save()) {
      echo "Failed to save!";
    } else {
      echo "Data inputed successfully!";
    }
  }

  public function viewDataAction(){
    $user = User::find();
    $this->view->data = $user;
  }

  public function editAction($id){
    $user = User::findFirstByidUser($id);
    $this->view->id_user = $user->id_user;
    $this->view->name = $user->name;
    $this->view->address = $user->address;
    $this->view->contact = $user->contact;
    $this->view->sex = $user->sex;
  }

  public function updateAction(){
    $id = $this->request->getPost("txt_id");
    $user = User::findFirstByidUser($id);
    $user->name = $this->request->getPost("txt_name");
    $user->address = $this->request->getPost("txt_address");
    $user->contact = $this->request->getPost("txt_contact");
    $user->sex = $this->request->getPost("txt_sex");
    if (!$user->save()) {
      echo "Failed to update!";
    } else {
      echo "Data updated successfully!";
    }

  }

  public function hapusAction($id){
    $user = User::findFirstByidUser($id);
    if (!$user->delete()) {
      echo "Failed to delete!";
    } else {
      echo "Data deleted successfully!";
    }
  }

}

 ?>
