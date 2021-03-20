<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Company Detail</title>
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
            @include('layouts.nav')
            <div id="management" style="margin-left: 1%">
                @include('layouts.menu')
                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all">
                        <div id="first_body">
                            Company Management
                        </div>
                        <br> <br>
                        <form action="{{route('company_register.post')}}" method="post">
                            {{ csrf_field() }}
                            <table style="width: 50%; float:left">
                                <tr>
                                    <td>Company</td>
                                    <td>
                                        <input type="text" placeholder="Please enter Company name" name="cpn_name"
                                               required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <input id="address" style="width: 300px" type="text"
                                               placeholder="Please enter Address" name="address" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input id="address" type="email" placeholder="Please enter Email" name="email"
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
                                <img src="" style="clip-path: circle(50%);display:inline-block;height:100px;"/>
                            </div>
                            <hr style="clear: both; margin-top: 300px">
                            <div id="body_button">
                                <a style="text-decoration: none">
                                    <button type="submit" name="register" style="background-color: #30c0f0">
                                        Register
                                    </button>
                                </a>
                                <a href="#" style="text-decoration: none; margin-left: 10px;">
                                    <button type="button" name="back" style="background-color: black"> Back</button>
                                </a>
                            </div>
                        </form>
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