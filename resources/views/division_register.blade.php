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
    @include('layouts.scrip')

    <link href={{ asset('css/company.css') }} rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <base href="{{asset('')}}">
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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
                            Division Register
                        </div>
                        <br> <br>
                        <form action="{{route('division_register.post')}}" method="post">
                            {{ csrf_field() }}
                            <table style="width: 50%; float:left">
                                <tr>
                                    <td>Company</td>
                                    <td>
                                        <input type="text" style="width: 80px;color: gray" placeholder="Company code"
                                               name="cpn_id" id="cpn_id" onkeyup="getCompany()" required>
                                        <input type="text" name="cpn_name" placeholder="Company name" readonly
                                               id="cpn_name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branch Name</td>
                                    <td>
                                        <input type="text" style="width: 80px;color: gray" placeholder="Branch code"
                                               name="br_id" id="br_id" onkeyup="getBranch()" required>
                                        <input type="text" name="br_name" placeholder="Branch name" readonly
                                               id="br_name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td>
                                        <input id="name" style="width: 300px" type="text"
                                               placeholder="Please enter Division Name" name="name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <input style="width: 300px" type="text" placeholder="Please enter project Name"
                                               name="address" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>
                                        <input style="width: 300px" type="text" placeholder="Please enter project Name"
                                               name="area" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input id="email" type="email" placeholder="Please enter Email" name="email"
                                               required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <input id="phone" type="text" placeholder="Please enter Phone Number"
                                               name="phone" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>
                                        <input type="text" placeholder="Please enter Website" name="website" required>
                                    </td>
                                </tr>
                            </table>
                            <div id="image" style="width:30%;float:right;margin-bottom: 150px">
                                <div style="height: 100px;width: 30px;display: inline-block;margin-bottom: 60px">Logo
                                </div>
                            </div>
                            <hr style="clear: both; margin-top: 300px">
                            <div id="body_button">
                                <a style="text-decoration: none">
                                    <button type="submit" name="register" style="background-color: #30c0f0"> Register
                                    </button>
                                </a>
                                <a href="" style="text-decoration: none;">
                                    <button type="button" name="back" style="background-color: black"> Back</button>
                                </a>
                            </div>
                        </form>
                    </div>
                    <script>
                        function myFunction1() {
                            if (confirm("Do you want to update these company?")) {
                                if (alert("Update Division Successfull!"))
                                    window.location.href = "../public/division";
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
    function getCompany() {
        var cpn_id = $("#cpn_id").val();
        $.ajax({
            type: "get",
            url: 'dashboard/ajax/company/' + cpn_id,
            success: function (res) {
                $("#cpn_name").val(res);
            }
        });
    }

    function getBranch() {
        var br_id = $("#br_id").val();
        var cpn_id = $("#cpn_id").val();
        $.ajax({
            type: "get",
            url: 'dashboard/ajax/branch/' + cpn_id + "/" + br_id,
            success: function (res) {
                $("#br_name").val(res);
            }
        });
    }

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };
</script>
</body>
</html>