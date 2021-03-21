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
    <div class="d-flex flex-column" id="content-wrapper" style="height: 969px">
        <div id="content" style="background-color:white">
            @include('layouts.nav')
            <div id="management" style="margin-left: 1%">
                @include('layouts.menu')

                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%; ">
                    <div id="all" style="width: 100%">
                        <div id="first_body" style="margin-bottom: 20px">
                            Profile
                        </div>
                    </div>
                    <div >
                        @include('layouts.profile')
                        <div style="width: 90%;margin-left: 5%; border-style: ridge; border-top-style: none">
                            <table style="margin-top: 20px;width: 100%;" class="table_1">
                                <tr>
                                    <th>Skill type</th>
                                    <th>Skill name</th>
                                    <th>Skill note</th>
                                    <th>Experiences</th>
                                    <th>Note experience</th>
                                    <th>Level</th>
                                </tr>
                                @foreach( $skills as $skill)
                                        <tr>
                                            <td>{{$skill->sk_type}}</td>
                                            <td>{{$skill->sk_name}}</td>
                                            <td>{{$skill->sk_note}}</td>
                                            <td>{{$skill->sk_experiences}}</td>
                                            <td>{{$skill->sk_note_experiences}}</td>
                                            <td>{{$skill->sk_level}}</td>
                                        </tr>
                                @endforeach

                            </table>

                            <div style="width: 96%;margin-left: 5%;margin-top: 30px">
                                Last update :{{$skill->updated_at}}
                            </div>
                            <div id="body_button" style="width: 300px;">
                                <a href="{{route('skill_update.get')}}" ><button type="submit" name="register" style="background-color: #2ab27b">
                                        Update
                                    </button></a>
                                <a href="{{route('profile.get')}}">
                                    <button type="button" name="back" style=" color: white; background-color: #000000"> Back</button>
                                </a>
                            </div>

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