<div class="card">
<form class="col s12" action="<?=base_url()?>video/do_edit/<?=$id?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Judul" id="judul" name="judul" type="text" class="validate" value="<?=isset($judul) ? $judul : ''?>">
      <label for="judul">Judul</label>
    </div>
  </div>
 
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Deskripsi" id="deskripsi" name="deskripsi" type="text" class="validate" value="<?=isset($deskripsi) ? $deskripsi : ''?>">
      <label for="deskripsi">Deskripsi</label>
    </div>
  </div><br/>
  <div class="file-field input-field">
      <div class="btn">
        <span>UPLOAD VIDEO</span>
        <input type="file" name="videos" multiple >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
  </div>
  <div class="row">
    <p>
      <input type="checkbox" id="publish" name="publish" <?=$publish == 1 ? 'checked' : '' ?>/>
      <label for="publish"><strong>Publish</strong></label>
    </p>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
  </div>
</form>
<span class="card-title activator grey-text text-darken-4">View Video<i class="material-icons right">more_vert</i></span>

  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">Video<i class="material-icons right">close</i></span>
    <video width="400" controls>
      <source src="<?=base_url()?>assets/videos/<?=$videos?>" type="video/mp4">
      <source src="<?=base_url()?>assets/videos/<?=$videos?>" type="video/ogg">
      Your browser does not support HTML5 vides.
    </video>
  </div>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>video">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>