<form class="col s12" action="<?=base_url()?>artikel/do_insert" method="post" enctype="multipart/form-data">
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
        <option value="NEWS">NEWS</option>
        <option value="ARTIKEL">ARTIKEL</option>
        <option value="ABOUT">ABOUT</option>
      </select>
      <label>Kategori</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <h5>Isi Artikel</h5><br/>
      <textarea id="isi" name="isi" class="materialize-textarea ckeditor"></textarea>
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
      <input type="checkbox" id="show" name="show" />
      <label for="show"><strong>Publish</strong></label>
    </p>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
  </div>
</form>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>artikel">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>