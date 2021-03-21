<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Project Management</title>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/untitled.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/bootstrap/js/fonts/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css"/>
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
        };

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
                            Project Detail
                        </div>
                        <br> <br>
                        <form action="{{route('project_register.post')}}" method="post">
                            {{ csrf_field() }}
                            <table style="width: 50%">
                                <tr>
                                    <td>Company</td>
                                    <td>
                                        <input type="text" style="width: 80px;color: gray" name="cpn_id"
                                               value="{{Auth::user()->division->branch->company->cpn_id}}" readonly>
                                        <input type="text" style="color: gray" name="cpn_name"
                                               value="{{Auth::user()->division->branch->company->cpn_name}}" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Branch <span style="font-family: 'Times New Roman'"> (Optional)</span></td>
                                    <td>
                                        <input type="text" style="width: 80px;color: gray" name="br_id"
                                               value="{{Auth::user()->division->branch->br_id}}" readonly>
                                        <input type="text" style="color: gray" name="br_name"
                                               value="{{Auth::user()->division->branch->br_name}}" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td>
                                        <select name="division" required id="dvs_id" onchange="getPM()">
                                            <option hidden>Select Division</option>
                                            @foreach($divisions as $division)
                                                <option value="{{$division->dvs_id}}">{{$division->dvs_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project</td>
                                    <td>
                                        <input style="width: 300px" type="text" placeholder="Please enter Project name"
                                               name="name" value="{{old('name')}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PM</td>
                                    <td>
                                        <select id="pm_id" name="pm_id" onchange="getMember();" required>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td>
                                        <input type="date" placeholder="Please enter Start Date" name="start_date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Team member</td>
                                    <td>
                                        <table class="table_1" style="margin-left: 10px">
                                            <tr>
                                                <th>STT</th>
                                                <th>Member Code</th>
                                                <th>Member Name</th>
                                                <th>Email</th>
                                                <th>Phone number</th>
                                                <th> Role</th>
                                                <th></th>
                                            </tr>
                                            <div id="member-infor">
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#">
                                                            <button type="submit" name="teamMember"
                                                                    style="background-color: #c8441c">
                                                                Delete
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </div>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <select name="member_id" id="member">
                                                    </select>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <select name="role" id="role">
                                                        <option value="LEADER">LEADER</option>
                                                        <option value="BA">BA</option>
                                                        <option value="TESTER">TESTER</option>
                                                        <option value="QA">QA</option>
                                                        <option value="DEVELOPER">DEVELOPER</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="button" style="background-color: #1cc88a"
                                                            onclick="addMember()">
                                                        Add
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manage tool</td>
                                    <td>
                                        <input type="text" name="tool" placeholder="Please enter Tool">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Documentation</td>
                                    <td>
                                        <input type="text" placeholder="Please enter documentation"
                                               name="documentation">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <input name="description" placeholder="Please enter description">
                                    </td>
                                </tr>
                            </table>
                            <hr style="clear: both; margin-top: 60px">
                            <div id="body_button">
                                <button type="submit" name="action" value="project" style="background-color: #2ab27b">
                                    Register
                                </button>
                                <a href="">
                                    <button type="button" name="back" style=" color: white; background-color: #000000">
                                        Back
                                    </button>
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

    function getPM() {
        var dvs_id = $("#dvs_id").val();
        $.ajax({
            type: "get",
            url: "dashboard/ajax/pm/" + dvs_id,
            success: function (res) {
                $("#pm_id").html(res);
            }
        });
    }

    function getMember() {
        var dvs_id = $("#dvs_id").val();
        var pm_id = $("#pm_id").val();
        $.ajax({
            type: "get",
            url: "dashboard/ajax/member/" + dvs_id + "/" + pm_id,
            success: function (res) {
                $("#member").html(res);
            }
        });
    }

    function addMember() {
        var dvs_id = $("#dvs_id").val();
        var pm_id = $("#pm_id").val();
        var mb_id = $("#member_id").val();
        var role = $("#role").val();
        $.ajax({
            type: "get",
            url: "dashboard/ajax/add-member/" + dvs_id + "/" + pm_id + "/" + mb_id + "/" + role,
            success: function (res) {
                $("#member-infor").html(res);
            }
        });
    }
</script>
</body>
</html>