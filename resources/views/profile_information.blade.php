<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Management</title>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/untitled.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/bootstrap/js/fonts/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href={{ asset('css/company.css') }} rel="stylesheet">
    <script>
        function show() {
            var x = document.getElementById("services");
            if (x.style.display == 'none') {
                x.style.display = "block";
                document.getElementById("logo").setAttribute("class", "shadow animated--grow-in");
            } else if (x.style.display == 'block') {
                x.style.display = "none";
                document.getElementById("logo").removeAttribute("class");
            }
        }
    </script>
</head>

<body id="page-top">
<div id="wrapper" 0="">
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content" style="background-color:white">
            <nav class="navbar navbar-light navbar-expand topbar bg-white static-top" style="padding:0px">
                <div class="container-fluid">

                    <div type="button" id="exit" style="border: none;width: 15%;height: 70px"><h1 onclick="show()"
                                                                                                  id="logo"
                                                                                                  style="margin: 0px;height:70px;padding-left:1%;color:black;"
                                                                                                  class="shadow animated--grow-in">
                            Logo</h1></div>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                            <div class="nav-item dropdown no-arrow show"><a class="dropdown-toggle nav-link"
                                                                            data-toggle="dropdown" aria-expanded="true"
                                                                            href="#" style="color:black">Home</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#" style="color:black">About</a>

                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                                 aria-labelledby="alertsDropdown"></div>
                        </li>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                ><img
                                            class="border rounded-circle img-profile"
                                            src="{{asset('assets/img/avatars/avatar1.jpeg')}}"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{route('profile.get')}}"><img
                                                src="{{asset('assets/img/avatars/Capture5.PNG')}}"
                                                style="width:23px;height:22px">&nbsp;Profile</a>
                                    <a class="dropdown-item" role="presentation" href="{{route('login.get')}}"><img
                                                src="{{asset('assets/img/avatars/Capture5.PNG')}}"
                                                style="width:23px;height:22px">&nbsp;Log
                                        out</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="management" style="margin-left: 1%">
                <ul class="nav nav-tabs shadow animated--grow-in" id="services"
                    style="display: none; background-color: white;">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{asset('assets/img/avatars/Capture5.PNG')}}"
                                                          style="width:23px;height:22px">Home</a>
                        <a class="nav-link" href="{{route('company.get')}}"><img
                                    src="{{asset('assets/img/avatars/Capture.PNG')}}"
                                    style="width:23px;height:22px">Company</a>
                        <a class="nav-link" href="{{route('branch.get')}}"><img
                                    src="{{asset('assets/img/avatars/Capture2.PNG')}}"
                                    style="width:23px;height:22px">Branch</a>
                        <a class="nav-link" href="{{route('devision.get')}}"><img
                                    src="{{asset('assets/img/avatars/Capture3.PNG')}}" style="width:23px;height:22px">Devision</a>
                        <a class="nav-link" href="{{route('project.get')}}"><img
                                    src="{{asset('assets/img/avatars/Capture4.PNG')}}"
                                    style="width:23px;height:22px">Project</a>
                        <a class="nav-link" href="#"><img
                                    src="{{asset('assets/img/avatars/Capture6.PNG')}}" style="width:25px;height:25px">Human
                            Resources</a>
                    </li>
                    <li class="nav-item"></li>
                </ul>

                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all" style="width: 100%">
                        <div id="first_body" style="margin-bottom: 20px">
                            Profile
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="{{route('information.get')}}">
                                <button id="btn1" class="profile" type="button" style="background-color: #2a88bd">
                                    Information
                                </button>
                            </a>
                            <a href="{{route('skill.get')}}">
                                <button id="btn2" class="profile" type="button" style="margin-left: 0px">Skill</button>
                            </a>
                            <a href="{{route('certificate.get')}}">
                                <button id="btn3" class="profile" type="button" style="margin-left: 0px;">Certificate
                                </button>
                            </a>
                        </div>

                        <div>
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <div style="width: 60%;float: left">
                                    <table style="width: 50%; float:left">
                                        <tr>
                                            <td>Branch</td>
                                            <td><input type="text" style="color: gray;width: 30%" name="br_id" value="" readonly>
                                                <input type="text" name="br_name" style="width: 65%" value="" readonly>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Division</td>
                                            <td><input type="text" style="width: 30%;color: gray" name="dvs_id" value="" readonly>
                                                <input type="text" name="dvs_name" style="width: 65%" value="" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Employee</td>
                                            <td>
                                                <input type="text" style="width: 30%;color: gray" name="user_id" value="" readonly>
                                                <input type="text" name="user_name" style="width: 65%" value="" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone number</td>
                                            <td>
                                                <input style="width: 300px" type="text" name="phone" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input style="width: 300px" type="email" name="email" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <input id="email" type="text" placeholder="" name="address" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Join Date</td>
                                            <td>
                                                <input id="phone" type="date" name="join_date"
                                                       value=""
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Experience</td>
                                            <td >
                                                <select name="experience" style="margin-left: 0px">
                                                    <option value="Demo">Demo</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Type of Contract</td>
                                            <td style="margin-left: 2px">
                                                <select name="contract" style="margin-left: 0px">
                                                    <option value="Demo">Demo</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div style="width: 40%;float: right">
                                    <div id="image" style="width:30%;margin-bottom: 50px">

                                        <img src="img/avatar5.jpeg"
                                             style="clip-path: circle(50%);display:inline-block;height:100px;">
                                    </div>
                                    <table style="margin-top: 20px">
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>
                                                <input style="width: 300px" type="date" name="birthday"
                                                       value=""
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Work Email</td>
                                            <td>
                                                <input style="width: 300px" type="email" name="work_email"
                                                       value=""
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID/Passport No</td>
                                            <td>
                                                <input id="email" type="text" placeholder="" name="passport"
                                                       value=""
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID/Passport Date</td>
                                            <td>
                                                <input id="phone" type="date" name="date_passport"
                                                       value="{{Auth::user()->profile->date_passport}}"
                                                       required>
                                            </td>
                                        </tr>

                                    </table>
                                </div>

                                <hr style="clear: both; margin-top: 300px">

                                <div id="body_button">
                                    <a style="text-decoration: none">
                                        <button type="submit" name="register" style="background-color: #30c0f0">
                                            Register
                                        </button>
                                    </a>
                                    <a href="" style="text-decoration: none; margin-left: 10px;">
                                        <button type="button" name="back" style="background-color: black"> Back</button>
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="assets/js/theme.js"></script>
    </div>
</div>

<script language="javascript">

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };

</script>
</body>
</html>