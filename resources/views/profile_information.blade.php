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
                                            <td><input type="text" style="color: gray;width: 30%"
                                                       name="br_id"
                                                       @if (Auth::user()->division !=null)
                                                       value="{{Auth::user()->division->branch->br_id}}"
                                                       readonly
                                                       @else
                                                               placeholder="Please enter Branch"
                                                                required
                                                       @endif
                                                       >
                                                <input type="text" name="br_name" style="width: 65%"
                                                       @if (Auth::user()->division !=null)
                                                       value="{{Auth::user()->division->branch->br_name}}"
                                                       readonly
                                                       @else
                                                               placeholder="Please enter Name Branch"
                                                                required
                                                        @endif>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Division</td>
                                            <td><input type="text" style="width: 30%;color: gray" name="dvs_id"
                                                       @if (Auth::user()->division !=null)
                                                       value="{{Auth::user()->division->dvs_id}}"
                                                       readonly
                                                        @else
                                                            placeholder="Please enter Division"
                                                            required
                                                @endif>
                                                <input type="text" name="dvs_name" style="width: 65%"
                                                       @if (Auth::user()->division !=null)
                                                       value="{{Auth::user()->division->dvs_name}}"
                                                       readonly
                                                       @else
                                                       placeholder="Please enter Name Division"
                                                       required
                                                        @endif>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Employee</td>
                                            <td>
                                                <input type="text" style="width: 30%;color: gray" name="id"
                                                       value="{{Auth::user()->id}}"
                                                       readonly>
                                                <input type="text" name="name" style="width: 65%"
                                                       value="{{Auth::user()->name}}"
                                                       readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone number</td>
                                            <td>
                                                <input style="width: 300px" type="text" name="phone"
                                                       value="{{Auth::user()->phone}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input style="width: 300px" type="email" name="email"
                                                       value="{{Auth::user()->email}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <input id="email" type="text" placeholder="" name="address"
                                                       value="{{Auth::user()->address}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Join Date</td>
                                            <td>
                                                <input id="phone" type="date" name="join_date"
                                                       value="{{Auth::user()->join_date}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Experience</td>
                                            <td >
                                                <select name="experience" style="margin-left: 0px">
                                                    <option selected hidden>{{Auth::user()->experience}}</option>
                                                    <option value="Demo">Demo</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Type of Contract</td>
                                            <td style="margin-left: 2px">
                                                <select name="contract" style="margin-left: 0px">
                                                    <option selected hidden>{{Auth::user()->contract}}</option>
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
                                                       value="{{ Auth::user()->birthday}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Work Email</td>
                                            <td>
                                                <input style="width: 300px" type="email" name="work_email"
                                                       value="{{ Auth::user()->email_work}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID/Passport No</td>
                                            <td>
                                                <input id="email" type="text" placeholder="" name="passport"
                                                       value="{{ Auth::user()->passport}}"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID/Passport Date</td>
                                            <td>
                                                <input id="phone" type="date" name="date_passport"
                                                       value="{{Auth::user()->date_passport}}"
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