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
    @include('layouts.scrip')
    <link href={{ asset('css/company.css') }} rel="stylesheet">
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
                        <form action="{{route('project_detail.post')}}" method="post">
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
                                        <input type="text" style="width: 80px;color: gray" value="{{$project->dvs_id}}"
                                               name="dvs_code" readonly>
                                        <input type="text" style="color: gray" value="{{$project->division->dvs_name}}"
                                               name="dvs_name" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project</td>
                                    <td>
                                        <input style="width: 300px" type="text" value="{{$project->pr_id}}"
                                               name="pr_id" hidden>
                                        <input style="width: 300px" type="text" value="{{$project->pr_name}}"
                                               name="name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PM</td>
                                    <td>
                                        <input style="width: 300px" type="text" value="{{$project->pr_pm}}" name="pm_id"
                                               hidden>
                                        <input style="width: 300px" type="text" value="{{$project->pm->name}}" name="pm"
                                               required readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td>
                                        <input type="date" value="{{$project->pr_date}}" name="start_date" required>
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
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach($members as $member)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$member->user->id}}</td>
                                                    <td>{{$member->user->name}}</td>
                                                    <td>{{$member->user->email}}</td>
                                                    <td>{{$member->user->phone}}</td>
                                                    <td>{{$member->role}}</td>
                                                    <td>
                                                        <a href="dashboard/member-project/delete/{{$project->pr_id}}/{{$member->user->id}}">
                                                            <button type="button" style="background-color: #c83e1c">
                                                                Delete
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <select name="member_id">
                                                        @foreach($members_select as $member)
                                                            <option value="{{$member->id}}">{{$member->name}}</option>
                                                        @endforeach
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
                                                    <a href="#">
                                                        <button type="submit" style="background-color: #1cc88a"
                                                                name="action" value="teamMember">
                                                            Add
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manage tool</td>
                                    <td>
                                        <input type="text" value="{{$project->pr_tool}}" name="tool" required>
                                        <a href="#" style="margin-left: 15px">
                                            <button type="button" class="goto">Go to</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Documentation</td>
                                    <td>
                                        <input type="text" value="{{$project->pr_documentation}}" name="documentation"
                                               required>
                                        <a href="#" style="margin-left: 15px;">
                                            <button type="button" class="goto">Go to</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <input type="text" style="height: 100px; width: 400px"
                                               value="{{$project->pr_description}}"
                                               name="description" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="status">
                                            @foreach(['', 'Go Live', 'Maintain','Pending','Stop'] as $stt)
                                                @if($stt == $project->pr_status)
                                                    <option value="{{$stt}}" selected>{{$stt}}</option>
                                                @else
                                                    <option value="{{$stt}}">{{$stt}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <hr style="clear: both; margin-top: 60px">
                            <div id="body_button" style="width: 200px;">
                                <button type="submit" style="background-color: #2ab27b" name="action"
                                        value="project" onclick="myFunction1()">
                                    Update
                                </button>
                                <a href="../project">
                                    <button type="button" name="back" style=" color: white; background-color: #000000">
                                        Back
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                    <script>
                        function myFunction1() {
                            if (confirm("Do you want to update these project?")) {
                                if (alert("Update Project Successfull!"))
                                    window.location.href = "../public/project";
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
    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };
</script>
</body>
</html>