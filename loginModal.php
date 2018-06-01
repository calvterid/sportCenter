
<div class="container">
  <div id="id01" class="modal ">
    <div class="modal-content transparent teal padding  card-4 animate-zoom round-xlarge" style="max-width:400px">

      <div class="center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="button xlarge  display-topright hover-none" title="Close">&times;</span>
      </div>

      <form class="container" action="/action_page.php">
        <div class="section">
          <label><b>Username</b></label>
          <input class="input border margin-bottom round-xxlarge pl" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="input border margin-bottom round-xxlarge pl" type="password" placeholder="Enter Password" name="psw" required>
          <button class="button block green section padding" type="submit">Login</button>
          <input class="check margin-top-small" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="container border-top padding-16 ">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="button red">Cancel</button>
        <span class="right padding hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>

