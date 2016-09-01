		<table class="responsive-table bordered" id="table-user">
			<thead>
				<tr>
					<th width="1%">No</th>
					<th width="10%">username</th>
					<th width="30%">Name</th>
					<!-- <th>Email</th> -->
					<th>Type</th> 
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($user as $key => $row) {
					$no = $key + 1;
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->username?></td>
					<td><?=$row->name?></td>
					<!-- <td><?=$row->email?></td> -->
					<td><?=$row->type == 1 ? 'Admin' : 'Super Admin'?></td>
					<td>
						<a class="waves-effect waves-light btn orange" href="<?=base_url()?>user/edit/<?=$row->id?>" type="submit">Edit</a>
						<a class="waves-effect waves-light btn red" href="<?=base_url()?>user/delete/<?=$row->id?>" type="submit">Delete</a>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url()?>user/insert">
		      <i class="large material-icons">add</i>
		    </a>
	    </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table-user').dataTable();
	});
</script>