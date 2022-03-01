<?php $v23414271391iterated = false; ?><?php $v23414271391iterator = $data; $v23414271391incr = 0; $v23414271391loop = new stdClass(); $v23414271391loop->self = &$v23414271391loop; $v23414271391loop->length = count($v23414271391iterator); $v23414271391loop->index = 1; $v23414271391loop->index0 = 1; $v23414271391loop->revindex = $v23414271391loop->length; $v23414271391loop->revindex0 = $v23414271391loop->length - 1; ?><?php foreach ($v23414271391iterator as $datas) { ?><?php $v23414271391loop->first = ($v23414271391incr == 0); $v23414271391loop->index = $v23414271391incr + 1; $v23414271391loop->index0 = $v23414271391incr; $v23414271391loop->revindex = $v23414271391loop->length - $v23414271391incr; $v23414271391loop->revindex0 = $v23414271391loop->length - ($v23414271391incr + 1); $v23414271391loop->last = ($v23414271391incr == ($v23414271391loop->length - 1)); ?><?php $v23414271391iterated = true; ?>
<?php if ($v23414271391loop->first) { ?>
<table border="1" align="center">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      <th>Contact</th>
      <th>Sex</th>
    </tr>
  </thead>
<?php } ?>
  <tbody>
    <tr>
      <td><?= $datas->id_user ?></td>
      <td><?= $datas->name ?></td>
      <td><?= $datas->address ?></td>
      <td><?= $datas->contact ?></td>
      <td><?= $datas->sex ?></td>
      <td><a href="<?= $this->url->get('user/edit/' . $datas->id_user) ?>">Edit</a></td>
      <td><a href="<?= $this->url->get('user/hapus/' . $datas->id_user) ?>">Delete</a></td>
    </tr>
  </tbody>
<?php if ($v23414271391loop->last) { ?>
</table>
<?php } ?>
<?php $v23414271391incr++; } if (!$v23414271391iterated) { ?>
  No Data
<?php } ?>
