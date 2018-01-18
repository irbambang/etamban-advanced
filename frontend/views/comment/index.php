<?php 

use yii\helpers\Html;

$this->title = 'Data Tambal Ban';

?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Alamat ... ">
<style type="text/css">
#myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
</style>
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<table class="table table-striped" id="myTable">
	<tr>
		<th>No</th>
		<th>Nama</th>
    <th>Alamat</th>
		<th>No HP</th>
		<th>Status</th>
		<th>Action</th>
		<th colspan="2">Action</th>
	</tr>
  <?php foreach($model as $row){ ?>
  <tr>
    <td><?= $row->id;?></td>
    <td><?= $row->nama;?></td>
    <td><?= $row->alamat;?></td>
    <td><?= $row->no_hp;?></td>
    <td><?= $row->status;?></td>
    <td><?= Html::a('edit',['update','id'=>$row->id])?></td>
    <td><?= Html::a('delete',['delete','id'=>$row->id],['data-confirm'=>'delete data?'])?></td>

  </tr>
  <?php
  }
  ?>

</table>
<p><a class="btn btn-lg btn-success" href="/etamban-advanced/frontend/web/index.php?r=comment/create">Tambah Data Bengkel</a></p>