<div class="card">
<form class="col s12" action="<?=base_url()?>social_media/do_edit" method="post" enctype="multipart/form-data">
  <div class="row"><br/>
    <div class="input-field col s5">
      <select name="code" id="code">
      	<option disabled selected>----Choose Social Media----</option>
      	<?php foreach($social_media  as $key => $row){?>
        <option value="<?=$row->code?>" ><?=$row->name?></option>
        <?php } ?>
      </select>
      <label for="judul">Social Media Name</label>
    </div>
    <div class="input-field col s5">
      <input type="text" name="link" id="link">
      <label for="link">Link</label>
    </div>

    <div class="input-field col s9 center">
      <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
    </div>
  </div>
  </form>
  </div>

<script type="text/javascript">
$( document ).ready(function() {
	$('#code').on('change', function() {
	    var id = $('#code').val();
	    $.ajax({
	        url: '<?=base_url()?>social_media/get_social_media_by_id/'+id,
	        success: function(response) {
	        	var data = JSON.parse(response)
	            $('#link').val(data.link);
	        }
	    });	
	});

});
</script>