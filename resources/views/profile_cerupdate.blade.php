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
    <div class="d-flex flex-column" id="content-wrapper" style="height: 969px">
        <div id="content" style="background-color:white">
            @include('layouts.nav')
            <div id="management" style="margin-left: 1%">
                @include(('layouts.menu'))

                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all" style="width: 100%">
                        <div id="first_body" style="margin-bottom: 20px">
                            Profile
                        </div>
                    </div>
                    <div>
                        <div style="width: 96%;margin-left: 2%">
                            <a href="{{route('information.get')}}">
                                <button id="btn1" class="profile" type="button" >Information</button>
                            </a>
                            <a href="{{route('skill.get')}}">
                                <button id="btn2" class="profile" type="button" style="margin-left: 0px">Skill</button>
                            </a>
                            <a href="{{route('certificate.get')}}">
                                <button id="btn3" class="profile" type="button" style="margin-left: 0px;background-color: #2a88bd;">Certificate</button>
                            </a>
                        </div>
                        <div style="width: 90%;margin-left: 5%; border-style: ridge; border-top-style: none">
                            <table style="margin-top: 20px;width: 100%;" class="table_1">
                                <tr>
                                    <th>STT</th>
                                    <th>Certificate</th>
                                    <th>Filename</th>
                                    <th>Date</th>
                                    <th>Duration</th>
                                    <th></th>
                                </tr>
                                @foreach($cers as $cer)
                                    <form action="{{route('delete.get')}}" method="get">
                                        {{csrf_field()}}
                                    <tr>
                                        <td>{{$cer->cer_id}} </td>
                                    <td><input value="{{$cer->certificate}}" type="text" name="certificate" readonly></td>
                                    <td>{{$cer->filename}}</td>
                                    <td>{{$cer->date}}</td>
                                        <td>{{$cer->duration}}</td>
                                    <td><button type="submit" style="background-color: red">Delete</button> </td>
                                    </tr>
                                    </form>
                                @endforeach

                                <form action="{{route('add.post')}}" method="post">
                                    {{csrf_field()}}
                                <tr>
                                    <td></td>
                                    <td><input type="text" placeholder="Certificate" name="certificate" required></td>
                                    <td><input type="text" placeholder="File name" name="filename" required></td>
                                    <td><input type="date" placeholder="Date" name = "date" required></td>
                                    <td><input type="text" placeholder="Duration" name = "duration" required ></td>
                                    <td><button type="submit" style="background-color: #3c763d"> Add</button> </td>
                                </tr>
                                </form>

                            </table>
                        </div>
                        <div id="body_button" style="width: 300px;">
                            <a href="{{route('certificate.get')}}"><button type="button" name="register" style="background-color: #2ab27b" onclick="myFunction4()"> Update
                            </button>
                            </a>
                            <a href="{{route('certificate_update.get')}}">
                                <button type="button" name="back" style=" color: white; background-color: #000000"> Back</button>
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

<script language="javascript">

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };

</script>
</body>
</html>