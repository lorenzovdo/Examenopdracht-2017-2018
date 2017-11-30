<?php 
    include("db_connect.php");
    include("header.php");
?>
            <button class="btn" id="Huisarts">Huisarts</button>
            <button class="btn" id="Apotheek">Apotheek</button>
            <button class="btn" id="Bezorger">Bezorger</button>
            <button class="btn" id="Admin">Admin</button>

            <div id="huisarts_inlog">
            <h4 class="col-lg-12 col-xs-12">Inloggen - Huisarts</h4>
              <div class="row">
                  <form action="inlog_database.php" method='post'>
                        <div class="text-nowrap row">
                            <label class='col-lg-2 col-xs-5'>E-mail</label>
                            <input type="text" name="email" class="col-lg-2 col-xs-5" placeholder="Uw E-mail">
                        </div>
                        <div class="text-nowrap row">
                            <label class="col-lg-2 col-xs-5">Wachtwoord</label>
                            <input type="password" name="wachtwoord" class="col-lg-2 col-xs-5" placeholder="Uw wachtwoord">
                        </div>
                      <button type="submit" class="btn login_btn" name='Btn' value='huisarts'>log in</button>
                    </form>
              </div>
            </div>

    
            <div id="apotheker_inlog" hidden>
            <h4 class="col-lg-12 col-xs-12">Inloggen - Apotheker</h4>
            <div class="row">
                  <form action="inlog_database.php" method='post'>
                        <div class="text-nowrap row">
                            <label class='col-lg-2 col-xs-5'>E-mail</label>
                            <input type="text" name="email" class="col-lg-2 col-xs-5" placeholder="Uw E-mail">
                        </div>
                        <div class="text-nowrap row">
                            <label class="col-lg-2 col-xs-5">Wachtwoord</label>
                            <input type="password" name="wachtwoord" class="col-lg-2 col-xs-5" placeholder="Uw wachtwoord">
                        </div>
                      <button type="submit" class="btn login_btn" name='Btn' value='apotheker'>log in</button>
                    </form>
              </div>
            </div>
                

            <div id="bezorger_inlog" hidden>
            <h4 class="col-lg-12 col-xs-12">Inloggen - Bezorger</h4>
            <div class="row">
                  <form action="inlog_database.php" method='post'>
                        <div class="text-nowrap row">
                            <label class='col-lg-2 col-xs-5'>E-mail</label>
                            <input type="text" name="email" class="col-lg-2 col-xs-5" placeholder="Uw E-mail">
                        </div>
                        <div class="text-nowrap row">
                            <label class="col-lg-2 col-xs-5">Wachtwoord</label>
                            <input type="password" name="wachtwoord" class="col-lg-2 col-xs-5" placeholder="Uw wachtwoord">
                        </div>
                      <button type="submit" class="btn login_btn" name='Btn' value='bezorger'>log in</button>
                    </form>
              </div>
            </div>


            <div id="admin_inlog" hidden>
            <h4 class="col-lg-12 col-xs-12">Inloggen - Admin</h4>
            <div class="row">
                  <form action="inlog_database.php" method='post'>
                        <div class="text-nowrap row">
                            <label class='col-lg-2 col-xs-5'>E-mail</label>
                            <input type="text" name="email" class="col-lg-2 col-xs-5" placeholder="Uw E-mail">
                        </div>
                        <div class="text-nowrap row">
                            <label class="col-lg-2 col-xs-5">Wachtwoord</label>
                            <input type="password" name="wachtwoord" class="col-lg-2 col-xs-5" placeholder="Uw wachtwoord">
                        </div>
                      <button type="submit" class="btn login_btn" name='Btn' value='admin'>log in</button>
                    </form>
              </div>
            </div>
          </div>
<?php
    include("footer.php");
?>


<script>
    var h = document.getElementById("huisarts_inlog");
    var a = document.getElementById("apotheker_inlog");
    var b = document.getElementById("bezorger_inlog");
    var A = document.getElementById("admin_inlog");
    
  $("#Huisarts").click( function() {
        h.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        A.style.display = "none";
});
    
$("#Apotheek").click( function() {
        h.style.display = "none";
        a.style.display = "block";
        b.style.display = "none";
        A.style.display = "none";
});
    
$("#Bezorger").click( function() {
        h.style.display = "none";
        a.style.display = "none";
        b.style.display = "block";
        A.style.display = "none";
});
    
$("#Admin").click( function() {
        h.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        A.style.display = "block";
});
</script>