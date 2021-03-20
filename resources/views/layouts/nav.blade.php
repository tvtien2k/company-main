<nav class="navbar navbar-light navbar-expand topbar bg-white static-top" style="padding:0px">
    <div class="container-fluid">
        <div type="button" id="exit" style="border: none;width: 15%;height: 70px">
            <h1 onclick="show()" id="logo" style="margin: 0px;height:70px;padding-left:1%;color:black;"
                class="shadow animated--grow-in">
                Logo
            </h1>
        </div>
        <ul class="nav navbar-nav flex-nowrap ml-auto">
            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                <div class="nav-item dropdown no-arrow show">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#"
                       style="color:black">
                        Home
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                       href="#" style="color:black">
                        About
                    </a>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                     aria-labelledby="alertsDropdown">
                </div>
            </li>
            <li class="nav-item dropdown no-arrow" role="presentation">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                       href="file:///C:/Users/Dell/Documents/index.html#">
                        <img class="border rounded-circle img-profile"
                             src="{{asset('assets/img/avatars/avatar1.jpeg')}}">
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                        <a class="dropdown-item" role="presentation" href="">
                            <img src="{{asset('assets/img/avatars/Capture5.PNG')}}"
                                 style="width:23px;height:22px">&nbsp
                            Profile
                        </a>
                        <a class="dropdown-item" role="presentation" href="">
                            <img src="{{asset('assets/img/avatars/Capture5.PNG')}}"
                                 style="width:23px;height:22px">&nbsp;Log
                            out
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>