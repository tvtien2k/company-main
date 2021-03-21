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
                    <div style="border-style: ridge;border-top-style: none">
                        @include('layouts.profile')
                        <div style="width: 90%;margin-left: 5%; border-style: ridge; border-top-style: none">
                            <table style="margin-top: 20px;width: 100%;" class="table_1">
                                <tr>
                                    <th>Skill type</th>
                                    <th>Skill name</th>
                                    <th>Skill note</th>
                                    <th>Experiences</th>
                                    <th>Note experience</th>
                                    <th></th>
                                </tr>
                                @foreach( $skills as $skill)
                                    <form method="get" action="{{route('post_skill.post')}}">
                                    <tr>
                                        <td><input name="type" value="{{$skill->sk_type}}" readonly></td>
                                        <td><input name="name" value="{{$skill->sk_name}}" readonly></td>
                                        <td>{{$skill->sk_note}}</td>
                                        <td>{{$skill->sk_experiences}}</td>
                                        <td>{{$skill->sk_note_experiences}}</td>
                                        <td><button type="submit" style="background-color: red" > Delete </button></td>
                                    </tr>
                                    </form>
                                @endforeach
                                <form method="post" action="{{route('post_skill')}}">
                                    {{csrf_field()}}
                                    <tr>
                                        <td><select name="type" name="type">
                                                <option selected disabled hidden>Select skill</option>
                                                <option>Programming language</option>
                                                <option>Framework</option>
                                                <option>Tester</option>
                                            </select></td>
                                        <td><input type="text" name="name" placeholder="Skill name" required></td>
                                        <td><input type="text" name="note" placeholder="Skill note" required></td>
                                        <td><input type="text" name="experience" placeholder="Experience" required></td>
                                        <td><input type="text" name="note_experience" placeholder="Experience note"
                                                   required></td>
                                        <td>
                                            <button type="submit" style="background-color: #3c763d">Add</button>
                                        </td>
                                    </tr>
                                </form>
                            </table>

                        </div>
                        <div id="body_button" style="width: 300px;">
                            <a href="{{route('skill.get')}}">
                                <button type="submit" name="register" style="background-color: #2ab27b"
                                        onclick="myFunction4()"> Update
                                </button>
                            </a>
                            <a href="{{route('skill.get')}}">
                                <button type="button" name="back" style=" color: white; background-color: #000000">
                                    Back
                                </button>
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