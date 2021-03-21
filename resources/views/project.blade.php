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
                            Project Management
                        </div>
                        <br> <br>
                        <form action="{{route('project_search.get')}}" method="get">
                            <table style=" width: 50%; float: left">
                                <tr>
                                    <td>Company</td>
                                    <td>
                                        <input id="company" style="width: 100px" type="text" placeholder="Company code"
                                               name="cpn_id" disabled>
                                        <input type="text" placeholder="Please enter Company name" name="cpn_name"
                                               disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project</td>
                                    <td>
                                        <input style="width: 100px" type="text" placeholder="Project code" name="id">
                                        <input type="text" placeholder="Please enter Project name" name="name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td>
                                        <input id="date" type="date" placeholder="____-__-__" name="date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="status">
                                            <option selected disabled>Select status</option>
                                            <option value="Working">Go Live</option>
                                            <option value="Maintain">Maintain</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Stop">Stop</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <table style=" width: 50%; float:right;margin-bottom: 120px">
                                <tr>
                                    <td>Branch (Option)</td>
                                    <td>
                                        <input id="company" style="width: 100px" type="text" placeholder="Branch code"
                                               name="br_id" disabled>
                                        <input type="text" placeholder="Please enter Branch name" name="br_name"
                                               disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td>
                                        <input style="width: 100px" type="text" placeholder="Division code"
                                               name="dvs_id" disabled>
                                        <input type="text" placeholder="Please enter Division name" name="dvs_name"
                                               disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quality</td>
                                    <td>
                                        <input id="date" type="text" placeholder="Please enter Quality" name="quality">
                                    </td>
                                </tr>
                            </table>
                            <hr style="margin-top: 40px; clear:both;">
                            <div id="body_button">
                                <a href="" style="text-decoration: none;    margin-left: 10px;">
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
                                    <th>Project Code</th>
                                    <th>Project Name</th>
                                    <th>PM</th>
                                    <th> Team size</th>
                                    <th> Start Date</th>
                                    <th> Division</th>
                                    <th> Quality</th>
                                    <th> Status</th>
                                    <th></th>
                                </tr>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{$project->pr_id}}</td>
                                        <td>{{$project->pr_name}}</td>
                                        <td>{{$project->pm->name ?? ''}}</td>
                                        <td>{{count($project->members)}}</td>
                                        <td>{{$project->pr_date}}</td>
                                        <td>{{$project->division->dvs_name ?? ''}}</td>
                                        <td>{{$project->pr_quality}}</td>
                                        <td>{{$project->pr_status}}</td>
                                        <td style="text-align: center">
                                            <a href="{{route('project_detail.get', ['code'=>$project->pr_id])}}">
                                                <button type="button" id="detail" name="detail"
                                                        style="background-color: #30c0f0">
                                                    Detail
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
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