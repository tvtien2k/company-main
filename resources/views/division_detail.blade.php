<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Devision Management</title>
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

                    <div type="button" id="exit" style="border: none;width: 15%;height: 70px"><h1  onclick="show()" id="logo" style="margin: 0px;height:70px;padding-left:1%;color:black;"
                                                                                                   class="shadow animated--grow-in">Logo</h1> </div>
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
                                                                       href="file:///C:/Users/Dell/Documents/index.html#"><img
                                            class="border rounded-circle img-profile"
                                            src="{{asset('assets/img/avatars/avatar1.jpeg')}}"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{route('profile.get')}}"><img
                                                src="{{asset('assets/img/avatars/Capture5.PNG')}}" style="width:23px;height:22px">&nbsp;Profile</a>
                                    <a class="dropdown-item" role="presentation" href="{{route('login.get')}}"><img
                                                src="{{asset('assets/img/avatars/Capture5.PNG')}}" style="width:23px;height:22px">&nbsp;Log
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
                        <a class="nav-link" href="{{route('company.get')}}"><img src="{{asset('assets/img/avatars/Capture.PNG')}}"
                                                                                 style="width:23px;height:22px">Company</a>
                        <a class="nav-link" href="{{route('branch.get')}}"><img src="{{asset('assets/img/avatars/Capture2.PNG')}}"
                                                                                style="width:23px;height:22px">Branch</a>
                        <a class="nav-link" href="{{route('division.get')}}"><img
                                    src="{{asset('assets/img/avatars/Capture3.PNG')}}" style="width:23px;height:22px">Devision</a>
                        <a class="nav-link" href="{{route('project.get')}}"><img src="{{asset('assets/img/avatars/Capture4.PNG')}}"
                                                                                 style="width:23px;height:22px">Project</a>
                        <a class="nav-link" href="#"><img
                                    src="{{asset('assets/img/avatars/Capture6.PNG')}}" style="width:25px;height:25px">Human Resources</a>
                    </li>
                    <li class="nav-item"></li>
                </ul>

                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all">

                        <div id="first_body">
                            Devision Detail
                        </div>
                        <br> <br>

                        <form action="" method="post">
                            {{ csrf_field() }}
                            <table style="width: 50%; float:left">
                                <tr>
                                    <td>Company</td>
                                    <td><input type="text" style="width: 80px;color: gray" value="" name="cpn_id" readonly>
                                        <input type="text" style="color: gray" value="" name="cpn_name" readonly></td>
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td><input type="text" style="width: 80px;color: gray" value="" name="br_id" readonly>
                                        <input type="text" style="color: gray" value="" name="name" readonly></td>
                                </tr>
                                <tr>
                                    <td>Devision</td>
                                    <td><input type="text" style="width: 80px;color: gray" value="" name="id" readonly>
                                        <input type="text" style="color: gray" value="" name="name" readonly></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input id="address" style="width: 300px" type="text" value="" name="address" required></td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td><input style="width: 300px" type="text" value="" name="area" required></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" value="" name="email" required></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input id="phone" type="text" value="" name="phone" required></td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td><input type="text" value="" name="website" required></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><select  name="status">
                                            <option selected disabled hidden></option>
                                            <option value="working">Working</option>
                                            <option value="pending">Pending</option>
                                            <option value="stop">Stop</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>

                            <div id="image" style="width:30%;float:right;margin-bottom: 150px" >
                                <div style="height: 100px;width: 30px;display: inline-block;margin-bottom: 60px">Logo  </div>
                                <img src="" style="clip-path: circle(50%);display:inline-block;height:100px;">
                            </div>

                            <hr style="clear: both; margin-top: 300px">


                            <div id="body_button" style="width: 200px;">
                                <button type="submit" name="register" style="background-color: #2ab27b" onclick="myFunction1()"> Update </button>
                                <a href="../" > <button type="button" name="back" style=" color: white; background-color: #000000"> Back </button> </a>
                            </div>

                        </form>
                    </div>
                    <script>

                        function myFunction1() {
                            if (confirm("Do you want to update these company?")) {
                                if (alert("Update Company Successfull!"))
                                    window.location.href = "../public/company";
                            }

                        }
                    </script>
                </div>

            </div>

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
            <script src="assets/js/theme.js"></script>
        </div>
    </div>
</div>
<script language="javascript">

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };

</script>
</body>
</html>