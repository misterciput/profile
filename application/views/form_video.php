<form class="col s12" action="<?=base_url()?>video/do_insert" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Judul" id="judul" type="text" class="validate" name="judul">
      <label for="judul">Judul</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Deskripsi" id="deskripsi" type="text" class="validate" name="deskripsi">
      <label for="deskripsi">Deskripsi</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="URL" id="link" type="text" class="validate" name="link">
      <label for="deskripsi">URL</label>
    </div>
  </div>
  <br/>
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
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>video">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>