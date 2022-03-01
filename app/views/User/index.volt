{{ form('user/create', 'role': 'form') }}
<label for="id">ID</label>
<input type="text" name="txt_id">
<br>
<label for="name">Name</label>
<input type="text" name="txt_name">
<br>
<label for="address">Address</label>
<input type="text" name="txt_address">
<br>
<label for="contact">Contact</label>
<input type="text" name="txt_contact">
<br>
<label for="sex">Sex</label>
<input type="text" name="txt_sex">
<br>
<button type="submit">Save</button>
</form>

<?php

  echo Phalcon\Tag::linkTo("User/ViewData", "Show Data");

 ?>
