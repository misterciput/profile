<form class="col s12" action="<?=base_url()?>gallery/do_insert" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Judul" id="judul" type="text" class="validate" name="judul">
      <label for="judul">Judul</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Tanggal" id="tanggal" type="date" class="datepicker" name="tanggal">
      <label for="tanggal">Tanggal</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <select name="kategori">
        <option value="" disabled selected>Choose your option</option>
        <option value="PHOTO">PHOTO</option>
        <option value="VIDEO">VIDEO</option>
      </select>
      <label>Kategori</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Deskripsi" id="deskripsi" type="text" class="validate" name="deskripsi">
      <label for="deskripsi">Deskripsi</label>
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
      <input type="checkbox" id="headline" name="headline" />
      <label for="headline"><strong>Headline</strong></label>
    </p>
  </div>
  <div class="row">
    <p>
      <input type="checkbox" id="publish" name="publish" />
      <label for="publish"><strong>Publish</strong></label>
    </p>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
  </div>
</form>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>gallery">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>