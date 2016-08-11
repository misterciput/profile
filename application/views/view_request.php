		<table class="responsive-table bordered" id="table-request">
			<thead>
				<tr>
					<th width="5%">No</th>
					<th width="20%">Nama</th>
					<th width="20%">NIK</th>
					<th width="20%">Phone</th>
					<th width="20%">Email</th>
					<th width="20%">Alamat</th>
					<th width="20%">Tanggal Input</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($request as $key => $row) {
					$no = $key + 1;
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->nama?></td>
					<td><?=$row->nik?></td>
					<td><?=$row->phone?></td>
					<td><?=$row->email?></td>
					<td><?=$row->alamat?></td>
					<td><?=date("d F Y H:i:s", strtotime($row->recdate))?></td>
					
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<!-- <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url()?>request/insert">
		      <i class="large material-icons">add</i>
		    </a>
	    </div> -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#table-request').dataTable();
	});
</script>