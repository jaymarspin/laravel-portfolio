<style type="text/css">
  #admin-panel{
    float: left;
    clear: left;
    position: fixed;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 300px;
   
    background-image: linear-gradient(to bottom,#3D3D3D, #0D0D0D);
}
  #admin-face{
    width: 100%;
    clear: both;
    position: relative;
    padding: 10px;
    margin-bottom: 30px;

}
#admin-face img{
    display: block;
    width: 120px;
    height: 120px;
    border-radius: 60px;
    margin: auto;
}
#admin-name{
    width: 100%;
    text-align: center;
    height: auto;
    clear: both;
    overflow: hidden;
    color: #dedede;
}
ul#admin-menu{
    padding: 0px;
    width: 100%;
    clear: both;
    display: block;
    height: auto;
    overflow: hidden;
    position: relative;
    width: 80%;
    margin: auto;

}
ul#admin-menu li{
    line-height: 28px;
    width: 100%;
    clear: both;
 
}
ul#admin-menu li a{
    font-size: 18px;
    color: #dedede;

}
.admin-menu-logo{
    width: 20%;
    float: left;
    position: relative;
}



.myrow{
    margin-right: 0px;
}
</style>

<div id="admin-panel">
        <div id="admin-face">
            <img src="{{asset('images/15838.jpg')}}" />
            <div id="admin-name">
                <span>May Sample Name</span>
            </div>
            
        </div>

        <ul id="admin-menu">
               {{-- <li> <a href="{{url('/statistics')}}"><div class="admin-menu-logo"><i class="fa fa-bar-chart"></i></div> Statistics</a></li> --}}
               
               <li> <a href="{{url('/works')}}"><div class="admin-menu-logo"><i class="fa fa-briefcase"></i></div> Manage Works</a></li>
               <li> <a href="#"><div class="admin-menu-logo"><i class="fa fa-user"></i></div> Contact info & Resume</a></li>
               <li> <a href="{{url('/messages')}}"><div class="admin-menu-logo"><i class="fa fa-globe"></i></div> Messages</a></li>
               <li> <a href="#"><div class="admin-menu-logo"><i class="fa fa-sign-out"></i></div> Logout</a></li>
               

            </ul> 
    </div>