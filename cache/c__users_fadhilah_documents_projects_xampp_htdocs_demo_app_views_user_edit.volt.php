<div class="formInput">
  <?= $this->tag->form(['user/update', 'role' => 'form']) ?>
  <input type="text" name="txt_id" value="<?php echo $id_user ?>">
  <label for="id">ID</label>
  <br>
  <label for="name">Name</label>
  <input type="text" name="txt_name" value="<?php echo $name ?>">
  <br>
  <label for="address">Address</label>
  <input type="text" name="txt_address" value="<?php echo $address ?>">
  <br>
  <label for="contact">Contact</label>
  <input type="text" name="txt_contact" value="<?php echo $contact; ?>">
  <br>
  <label for="sex">Sex</label>
  <input type="text" name="txt_sex" value="<?php echo $sex ?>">
  <br>
  <button type="submit">Save</button>
  </form>
</div>
<?php

  echo Phalcon\Tag::linkTo("User/ViewData", "Show Data");

 ?>
