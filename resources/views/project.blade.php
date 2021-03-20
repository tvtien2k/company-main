<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Project Management</title>
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
                                                                       ><img
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
                        <a class="nav-link" href="{{route('devision.get')}}"><img
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
                            Project Management
                        </div>
                        <br> <br>
                        <form action="" method="get">
                            <table style=" width: 50%; float: left">
                                <tr>
                                    <td>Company</td>
                                    <td><input id="company" style="width: 100px" type="text" placeholder="Company code" name="cpn_id" disabled>
                                        <input type="text" placeholder="Please enter Company name" name="cpn_name" disabled></td>
                                </tr>

                                <tr>
                                    <td>Project</td>
                                    <td><input style="width: 100px" type="text" placeholder="Project code" name="id" disabled>
                                        <input type="text" placeholder="Please enter Project name" name="name"></td>
                                </tr>
                                <tr>
                                    <td>Start Dtae</td>
                                    <td><input id="date" type="text" placeholder="____-__-__" name="email" disabled></td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td><select name="status">
                                            <option selected disabled>Select status</option>
                                            <option value="working">Go Live</option>
                                            <option value="maintain">Maintain</option>
                                            <option value="pending">Pending</option>
                                            <option value="stop">Stop</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>

                            <table style=" width: 50%; float:right;margin-bottom: 120px">
                                <tr>
                                    <td>Branch (Option)</td>
                                    <td><input id="company" style="width: 100px" type="text" placeholder="Branch code" name="br_id" disabled>
                                        <input type="text" placeholder="Please enter Branch name" name="br_name" disabled></td>
                                </tr>

                                <tr>
                                    <td>Division</td>
                                    <td><input style="width: 100px" type="text"  placeholder="Division code" name="dvs_id" disabled>
                                        <input type="text" placeholder="Please enter Division name" name="dvs_name" disabled></td>
                                </tr>

                                <tr>
                                    <td>Quality</td>
                                    <td><input id="date" type="text" placeholder="Please enter Quality" name="email" disabled></td>
                                </tr>

                            </table>

                            <hr style="margin-top: 40px; clear:both;">
                            <div id="body_button">
                                <a href="" style="text-decoration: none;    margin-left: 10px;">
                                    <button type="button" name="register" style="background-color: #30c0f0"> Register</button>
                                </a>
                                <button type="submit" name="search" style="background-color: #2ab27b; margin-left: 10px;"> Search</button>
                                <a href="" style="text-decoration: none; margin-left: 10px;">
                                    <button type="button" name="back" style="background-color: black"> Back</button>
                                </a>
                            </div>
                        </form>

                        <div>
                            <table style="; width: 100%" class="table_1">
                                <tr style="background-color: #30c0f0">
                                    <th>Project Code</th>
                                    <th>Project Name</th>
                                    <th>PM</th>
                                    <th> Team size</th>
                                    <th> Start Date</th>
                                    <th> Division</th>
                                    <th> Quality</th>
                                    <th> Status</th>
                                    <th> </th>
                                </tr>

{{--                                @foreach($projects as $project)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$project->code}}</td>--}}
{{--                                        <td>{{$project->name}}</td>--}}
{{--                                        <td>{{$project->pm}}</td>--}}
{{--                                        <td>1</td>--}}
{{--                                        <td>2</td>--}}
{{--                                        <td>{{$project->dvs_code}}</td>--}}
{{--                                        <td>{{$project->quality}}</td>--}}
{{--                                        <td>{{$project->status}}</td>--}}
{{--                                        <td style="text-align: center">--}}
{{--                                            <a href="{{route('project_detail.get', ['code'=>$project->code])}}">--}}
{{--                                                <button type="button" id="detail" name="detail" style="background-color: #30c0f0">--}}
{{--                                                    Detail--}}
{{--                                                </button>--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}

                            </table>
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
</div>
<script language="javascript">

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };

</script>
</body>
</html>