<div class="card">
<form class="col s12" action="<?=base_url()?>artikel/do_edit/<?=$id?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Judul" id="judul" name="judul" type="text" class="validate" value="<?=isset($judul) ? $judul : ''?>">
      <label for="judul">Judul</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Tanggal" id="tanggal" type="date" class="datepicker" name="tanggal" value="<?=$tanggal?>">
      <label for="tanggal">Tanggal</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <select name="kategori">
        <option value="NEWS" <?=$judul == 'NEWS' ? 'selected' : '' ;?>>NEWS</option>
        <option value="ARTIKEL" <?=$judul == 'ARTIKEL' ? 'selected' : '' ;?>>ARTIKEL</option>
        <option value="ABOUT" <?=$judul == 'ABOUT' ? 'selected' : '' ;?>>ABOUT</option>
      </select>
      <label>Kategori</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <h5>Isi Artikel</h5><br/>
      <textarea id="isi" name="isi" class="materialize-textarea ckeditor"><?=isset($isi) ? $isi : ''?></textarea>
    </div>
  </div><br/><br/>
  <div class="file-field input-field">
      <div class="btn">
        <span>UPLOAD GAMBAR</span>
        <input type="file" name="img" multiple >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
  </div>
  <div class="row">
    <p>
      <input type="checkbox" id="headline" name="headline" <?=$headline == 1 ? 'checked' : '' ?>/>
      <label for="headline"><strong>Headline</strong></label>
    </p>
  </div>
  <div class="row">
    <p>
      <input type="checkbox" id="show" name="show" <?=$show == 1 ? 'checked' : '' ?>/>
      <label for="show"><strong>Show</strong></label>
    </p>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
  </div>
</form>
<span class="card-title activator grey-text text-darken-4">View Picture<i class="material-icons right">more_vert</i></span>

  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">Picture<i class="material-icons right">close</i></span>
    <img src="<?=base_url()?>assets/img/<?=$img?>" style='height: 100%; width: 100%; object-fit: contain'/>
  </div>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>artikel">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>