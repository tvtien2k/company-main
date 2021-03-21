<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Comapany Management</title>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/untitled.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/bootstrap/js/fonts/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css"/>
    @include('layouts.scrip')
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
            @include('layouts.nav')
            <div id="management" style="margin-left: 1%">
                @include('layouts.menu')
                <div class="phuong" style="width: 98%;margin-left: 1%">
                    <div id="all">
                        <div id="first_body">
                            Branch Register
                        </div>
                        <br> <br>
                        <form action="{{route('branch_detail.post')}}" method="post">
                            {{ csrf_field() }}
                            <table style="width: 50%; float:left">
                                <tr>
                                    <td>Company</td>
                                    <td>
                                        <input type="text" style="width: 80px;color: gray" value="{{$branch->cpn_id}}"
                                               name="cpn_id"
                                               readonly>
                                        <input type="text" style="color: gray" value="{{$branch->company->cpn_name}}"
                                               name="cpn_name" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td>
                                        <input type="text" style="width: 80px;color: gray" value="{{$branch->br_id}}"
                                               name="id" readonly>
                                        <input type="text" style="color: gray" value="{{$branch->br_name}}" name="name"
                                               readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <input id="address" style="width: 300px" type="text"
                                               value="{{$branch->br_address}}" name="address" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>
                                        <input style="width: 300px" type="text" value="{{$branch->br_area}}" name="area"
                                               required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="email" value="{{$branch->br_email}}" name="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <input id="phone" type="text" value="{{$branch->br_phone}}" name="phone"
                                               required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>
                                        <input type="text" value="{{$branch->br_website}}" name="website" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="status">
                                            @foreach(['', 'Working', 'Pending', 'Stop'] as $stt)
                                                @if($stt == $branch->br_status)
                                                    <option value="{{$stt}}" selected>{{$stt}}</option>
                                                @else
                                                    <option value="{{$stt}}">{{$stt}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div id="image" style="width:30%;float:right;margin-bottom: 150px">
                                <div style="height: 100px;width: 30px;display: inline-block;margin-bottom: 60px">Logo
                                </div>
                                <img src="{{asset('assets/img/avatars/Capture4.PNG')}}"
                                     style="clip-path: circle(50%);display:inline-block;height:100px;">
                            </div>
                            <hr style="clear: both; margin-top: 300px">
                            <div id="body_button" style="width: 200px;">
                                <button type="submit" name="register" style="background-color: #2ab27b"
                                        onclick="myFunction1()"> Update
                                </button>
                                <a href="">
                                    <button type="button" name="back" style=" color: white; background-color: #000000">
                                        Back
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                    <script>
                        function myFunction1() {
                            if (confirm("Do you want to update these company?")) {
                                if (alert("Update Company Successfull!"))
                                    window.location.href = "../public/branch";
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
