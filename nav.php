
    <div class="card bar  display-topmiddle padding-small">
        <div class="logo display-topleft margin-top">
                <img src="img/los.png" style="width:20%">
        </div>
        <div class="right mts">
            <button onclick="document.getElementById('id01').style.display='block'" class="button large fa fa-sign-in"> Login</button>
            <button onclick="document.getElementById('signUp').style.display='block'" class="button large fa fa-user-circle"> Sign Up</button>
        </div>
    </div>
    <div class=" margin-top-small display-topleft">
        <div class="container " style="display:none" id="mySidebar">
        <div class="bcover opacity black bar-block"></div>
            <div class="sidebar teal bar-block animate-left">
                <button onclick="c_close()" class=" button large fa fa-close right" ></button>
                <div class="threequarter mls center">
                    <img src="img/user.jpg" class="circle margin-top " style="width:70%">
                    <h3> Calvter</h3>
                    <div class="g1 padding-small mb">
                        <h6> Your Balance : Rp.99.999,00</h6>
                    </div>
                
            </div>
                <a href="#" class="bar-item button teal fa fa-user-circle large hover-shadow"><b class="margin-left">Profil Saya</b></a>
                <a href="#" class="bar-item button teal fa fa-truck large hover-shadow"><b class="margin-left">Pesanan Saya</b></a>
                <a href="#" class="bar-item button teal fa fa-heart large hover-shadow"><b class="margin-left">Wishlist</b></a>
                <a href="#" class="bar-item button teal fa fa-address-book large hover-shadow"><b class="margin-left">Hubungi Kami</b></a>
                <a href="#" class="bar-item button teal fa fa-info-circle large hover-shadow"><b class="margin-left">Info Website</b></a>
                <a href="#" class="bar-item button teal fa fa-sign-out display-bottomright mb large hover-shadow "> Sign Out</a>
            </div>
        </div>
        <button class="button fa fa-navicon text-white xlarge margin-left" onclick="c_open()"></button>

    </div>
