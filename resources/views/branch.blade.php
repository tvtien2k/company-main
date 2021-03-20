<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Branch Management</title>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/untitled.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/bootstrap/js/fonts/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
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
                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all">
                        <div id="first_body">
                            Branch Management
                        </div>
                        <br> <br>
                        <form action="{{route('br_search.get')}}" method="get">

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
                                    <td>Branch</td>
                                    <td>
                                        <input style="width: 100px" type="text" placeholder="Branch code" name="id">
                                        <input type="text" placeholder="Please enter Branch name" name="name">
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
                                <a href="{{route('branch_register.get')}}" style="text-decoration: none;    margin-left: 10px;">
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
                                    <th>Code</th>
                                    <th>Branch Name</th>
                                    <th>Email</th>
                                    <th> Phone number</th>
                                    <th> Status</th>
                                    <th> Detail</th>
                                </tr>
                                @foreach($branches as $branch)
                                    <tr>
                                        <td>{{$branch->br_id}}</td>
                                        <td>{{$branch->br_name}}</td>
                                        <td>{{$branch->br_email}}</td>
                                        <td>{{$branch->br_phone}}</td>
                                        <td>{{$branch->br_status}}</td>
                                        <td style="text-align: center">
                                            <a href="{{route('branch_detail.get', ['id'=>$branch->br_id])}}">
                                                <button type="button" id="detail" name="detail"
                                                        style="background-color: #30c0f0">
                                                    Detail
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div style="float: right ">{{$branches->links()}}
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