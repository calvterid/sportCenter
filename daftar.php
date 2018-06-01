
<div class="container">
  <div id="signUp" class="modal ">
    <div class="modal-content white padding  card-4 animate-zoom round-xlarge" style="max-width:700px;max-height:500px">

      <div class="center"><br>
        <span onclick="document.getElementById('signUp').style.display='none'" class="button xlarge  display-topright hover-none" title="Close">&times;</span>
        <h3 class="center display-topmiddle">Daftar</h3>
      </div>
      <form class="container" action="/action_page.php">
        
          
          <div class="half  mrs margin-top" style="width: 50%">
              <label>Nama Depan</label>
              <input class="input border margin-small  pl" type="text" placeholder="Masukkan Nama Depan" name="namef" required>
              <label>Nama Belakang</label>
              <input class="input border margin-small  pl" type="text" placeholder="Masukkan Nama Belakang" name="nameb" required>
          </div>
          <div class="half margin-top" style="width: 49%">
              <label>Nama Depan</label>
              <input class="input border margin-small  pl" type="text" placeholder="Masukkan Nama Depan" name="namef" required>
              <label>Nama Belakang</label>
              <input class="input border margin-small  pl" type="text" placeholder="Masukkan Nama Belakang" name="nameb" required>
          </div>
          <input class="check margin-top-small" type="checkbox" checked="checked"> Remember me
       
      </form>

      <div class="container border-top padding-16 ">
        <button onclick="document.getElementById('signUp').style.display='none'" type="button" class="button red">Cancel</button>
        <span class="right padding hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>

