<!DOCTYPE html>

<?php

//?>

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
            @include('layouts.nav')
            <div id="management" style="margin-left: 1%">
                @include('layouts.menu')

                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all" style="width: 50%;float: right">
                        <div id="first_body" style="margin-bottom: 20px">
                            User Information
                        </div>

                        <div>
                            <table style=" width: 100%">

                                <tr>
                                    <td>Full name</td>
                                    <td class="pf_content">{{Auth::user()->name}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birthday</td>
                                    <td class="pf_content">{{Auth::user()->birthday}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td class="pf_content">{{Auth::user()->email}}</td>
                                </tr>
                                <tr>
                                    <td>Work Email</td>
                                    <td class="pf_content">{{Auth::user()->email_work}}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td class="pf.content">{{Auth::user()->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td class="pf_content">{{Auth::user()->address}}</td>
                                </tr>
                                <tr>
                                    <td> Join Date</td>
                                    <td class="pf_content">{{Auth::user()->join_date}}</td>
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td class="pf_content">
                                    @if (Auth::user()->division == null)
                                        @else
                                            {{Auth::user()->division->branch->br_name}}
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td class="pf_content">
                                        @if (Auth::user()->division == null)
                                        @else
                                        {{Auth::user()->division->dvs_name}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td class="pf_content">
                                        @if (Auth::user()->division == null)
                                        @else
                                        {{Auth::user()->project_member->role ?? ''}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Position</td>
                                    <td class="pf_content"></td>
                                </tr>

                            </table>

                            <hr style="clear: both; margin-top: 50px">
                            <div id="body_button">
                                <a style="text-decoration: none" href="{{route('information.get')}}">
                                    <button type="button" name="register" style="background-color: #30c0f0"> Detail
                                    </button>
                                </a>
                                <a href="{{route('management.get')}}" style="text-decoration: none; margin-left: 10px;">
                                    <button type="button" name="back" style="background-color: black"> Back</button>
                                </a>
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
</div>
<script language="javascript">

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };

</script>
</body>
</html>