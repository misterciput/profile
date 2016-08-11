		<table class="responsive-table bordered" id="table-video">
			<thead>
				<tr>
					<th width="20%">No</th>
					<th width="20%">Judul</th>
					<th >Tanggal</th>
					<th>Publish<th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($video as $key => $row) {
					$no = $key + 1;
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->judul?></td>
					<td><?=date("d F Y H:i:s", strtotime($row->timestamp))?></td>
					<td><?=$row->publish == 1 ? 'Yes' : 'No'?><td>
					<td>
						<a class="waves-effect waves-light btn orange" href="<?=base_url()?>video/edit/<?=$row->id?>" type="submit">Edit</a>
						<a class="waves-effect waves-light btn red" href="<?=base_url()?>video/delete/<?=$row->id?>" type="submit">Delete</a>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url()?>video/insert">
		      <i class="large material-icons">add</i>
		    </a>
	    </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table-video').dataTable();
	});
</script>