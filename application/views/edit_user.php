<form class="col s12" action="<?=base_url()?>user/do_edit/<?=$id?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Username" id="username" type="text" class="validate" name="username" value="<?=isset($username) ? $username : ''?>">
      <label for="username">Username</label>
    </div>
  </div>
   <div class="row">
    <div class="input-field col s12">
      <input placeholder="" id="judul" type="password" class="validate" name="password" value="<?=isset($password) ? $password : ''?>">
      <label for="password">Password</label>
    </div>
  </div>
   <div class="row">
    <div class="input-field col s12">
      <input placeholder="Nama" id="nama" type="text" class="validate" name="nama" value="<?=isset($nama) ? $nama : ''?>">
      <label for="nama">Nama</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Email" id="email" type="text" class="validate" name="email" value="<?=isset($email) ? $email : ''?>">
      <label for="email">Email</label>
    </div>
  </div>
  
  <br/>
  
  <div class="row">
    <p>
      <input type="checkbox" id="superadmin" name="superadmin"  <?=$type == 0 ? 'checked' : '' ?>/>
      <label for="superadmin"><strong>SUPER ADMIN</strong></label>
    </p>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">SUBMIT</button>
  </div>
</form>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>user">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>