<div class="card">
<form class="col s12" action="<?=base_url()?>event/do_edit/<?=$id?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Title" id="title" type="text" class="validate" name="title" value="<?=$event_title?>">
      <label for="title">Title</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Date" id="date" type="date" class="datepicker" name="date" value="<?=$date?>">
      <label for="date">Date</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <h5>Description</h5><br/>
      <textarea id="description" name="description" class="materialize-textarea ckeditor"><?=$description?></textarea>
    </div>
  </div><br/><br/>
  <div class="file-field input-field">
      <div class="btn">
        <span>Picture</span>
        <input type="file" name="pict" multiple >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
  </div>
  <div class="row">
    <p>
      <input type="checkbox" id="active" name="active" <?=$active ? 'checked' : ''?>/>
      <label for="active"><strong>Active</strong></label>
    </p>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
  </div>
</form>
<span class="card-title activator grey-text text-darken-4">View Picture<i class="material-icons right">more_vert</i></span>

  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">Picture<i class="material-icons right">close</i></span>
    <img src="<?=base_url()?>assets/img/<?=$pict?>" style='height: 100%; width: 100%; object-fit: contain'/>
  </div>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>event">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>