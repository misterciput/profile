		<table class="responsive-table bordered" id="table-artikel">
			<thead>
				<tr>
					<th width="20%">No</th>
					<th width="20%">Judul</th>
					<th width="20%">Kategori</th>
					<th >Tanggal Artikel</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($artikel as $key => $row) {
					$no = $key + 1;
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->judul?></td>
					<td><?=$row->kategori?></td>
					<td><?=date("d F Y", strtotime($row->tanggal))?></td>
					<td>
						<a class="waves-effect waves-light btn orange" href="<?=base_url()?>artikel/edit/<?=$row->id?>" type="submit">Edit</a>
						<a class="waves-effect waves-light btn red" href="<?=base_url()?>artikel/delete/<?=$row->id?>" type="submit">Delete</a>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url()?>artikel/insert">
		      <i class="large material-icons">add</i>
		    </a>
	    </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table-artikel').dataTable();
	});
</script>