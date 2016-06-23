		<table class="responsive-table bordered" id="table-event">
			<thead>
				<tr>
					<th width="5%">No</th>
					<th width="30%">Judul</th>
					<th width="30%">Tanggal Event</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($event as $key => $row) {
					$no = $key + 1;
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->title?></td>
					<td><?=date("d F Y", strtotime($row->date))?></td>
					<td>
						<a class="waves-effect waves-light btn orange" href="<?=base_url()?>event/edit/<?=$row->id?>" type="submit">Edit</a>
						<a class="waves-effect waves-light btn red" href="<?=base_url()?>event/delete/<?=$row->id?>" type="submit">Delete</a>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url()?>event/insert">
		      <i class="large material-icons">add</i>
		    </a>
	    </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table-event').dataTable();
	});
</script>