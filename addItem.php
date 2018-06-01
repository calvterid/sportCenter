
<div class="container">
  <div id="signUp" class="modal ">
    <div class="modal-content transparent teal padding  card-4 animate-zoom round-xlarge" style="max-width:1000px;max-height:500px">

      <div class="center"><br>
        <span onclick="document.getElementById('signUp').style.display='none'" class="button xlarge  display-topright hover-none" title="Close">&times;</span>
      </div>

      <form class="container" action="/action_page.php">
        <div class="section">
          <h3 class="bb center">Daftar</h3>
          <div class="third  mrs" style="width: 35%">

              <label>Nama Depan</label>
              <input class="input border margin-small  pl" type="text" placeholder="Masukkan Nama Depan" name="namef" required>
              <label>Nama Belakang</label>
              <input class="input border margin-small  pl" type="text" placeholder="Masukkan Nama Belakang" name="nameb" required>

          </div>
          <div class="third mrs " style="width: 33%">
              <label>E-Mail</label>
              <input class="input border margin-small  pl" type="email" placeholder="Masukkan E-Mail" name="email" required>
              <label>Konfirmasi E-mail</label>
              <input class="input border margin-small  pl" type="email" placeholder="Konfimasi E-Mail" name="emailk" required>
          </div>
          <div class="third  " style="width: 30%">
              <label>Password</label>
              <input class="input border margin-small  pl" type="password" placeholder="Masukkan Password" name="email" required>
              <label>Konfirmasi Password</label>
              <input class="input border margin-small  pl" type="password" placeholder="Konfimasi Password" name="emailk" required>
          </div>
          <div class="third margin-right margin-left" style="width: 47%">
              
          </div>
          <div class="half  " style="width: 47%">
              
          </div>
          <label><b>Password</b></label>
          <input class="input border margin-bottom round-xxlarge pl" type="password" placeholder="Enter Password" name="psw" required>
          <button class="button block green section padding" type="submit">Login</button>
          <input class="check margin-top-small" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="container border-top padding-16 ">
        <button onclick="document.getElementById('signUp').style.display='none'" type="button" class="button red">Cancel</button>
        <span class="right padding hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>

