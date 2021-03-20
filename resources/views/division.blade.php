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
            @include('layouts.menu')
            <div id="management" style="margin-left: 1%">
                @include('layouts.nav')
                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all">
                        <div id="first_body">
                            Division Management
                        </div>
                        <br> <br>
                        <form action="{{route('division_search.get')}}" method="get">
                            <table>
                                <tr>
                                    <td>Company</td>
                                    <td>
                                        <input id="company" style="width: 100px" type="text" placeholder="Company code"
                                               name="cpn_id">
                                        <input type="text" placeholder="Please enter Company name" name="cpn_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branch(Optional)</td>
                                    <td>
                                        <input style="width: 100px" type="text" placeholder="Branch code" name="br_id">
                                        <input type="text" placeholder="Please enter Branch name" name="br_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td>
                                        <input style="width: 100px" type="text" placeholder="Division code" name="id">
                                        <input type="text" placeholder="Please enter Division name" name="name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input id="email" type="email" placeholder="Please enter Email" name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>
                                        <input type="text" placeholder="Please enter Phone Number" name="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="status">
                                            <option selected disabled>Select status</option>
                                            <option value="Working">Working</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Stop">Stop</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <hr style="margin-top: 40px">
                            <div id="body_button">
                                <a href="{{route('division_register.get')}}"
                                   style="text-decoration: none;    margin-left: 10px;">
                                    <button type="button" name="register" style="background-color: #30c0f0"> Register
                                    </button>
                                </a>
                                <button type="submit" name="search"
                                        style="background-color: #2ab27b; margin-left: 10px;"> Search
                                </button>
                                <a href="" style="text-decoration: none; margin-left: 10px;">
                                    <button type="button" name="back" style="background-color: black"> Back</button>
                                </a>
                            </div>
                        </form>
                        <div>
                            <table style="; width: 100%" class="table_1">
                                <tr style="background-color: #30c0f0">
                                    <th>Company Name</th>
                                    <th>Branch Name</th>
                                    <th>Division Code</th>
                                    <th> Division Name</th>
                                    <th> Email</th>
                                    <th> Phone Number</th>
                                    <th> Status</th>
                                    <th> Detail</th>
                                </tr>
                                @foreach($divisions as $division)
                                    <tr>
                                        <td>{{$division->branch->company->cpn_name}}</td>
                                        <td>{{$division->branch->br_name}}</td>
                                        <td>{{$division->dvs_id}}</td>
                                        <td>{{$division->dvs_name}}</td>
                                        <td>{{$division->dvs_email}}</td>
                                        <td>{{$division->dvs_phone}}</td>
                                        <td>{{$division->dvs_status}}</td>
                                        <td style="text-align: center">
                                            <a href="{{route('division_detail.get', ['code'=>$division->dvs_id])}}">
                                                <button type="button" id="detail" name="detail"
                                                        style="background-color: #30c0f0">
                                                    Detail
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
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