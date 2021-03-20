<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href={{ asset('css/login.css') }} rel="stylesheet">

    <title>Sign Up</title>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>MANAGEMENT</h1>
    </div>

    <form action="{{ route('signup.post') }}" method="post">
        {{ csrf_field() }}
        <div class="main" style="margin-top: 0px">
            <div class="signup">
                <h2>Sign Up</h2>
            </div>
            <div id="login" style=" float: left">
                <p>First Name</p>
                <input type="text" style="width: 60%" placeholder="FirstName" name="name" required>
                <small id="firstname" class="invalid-report">First Name is required</small>
            </div>
            <div id="login" style=" float: right">
                <p>Last Name</p>
                <input id="error" style="width: 60%" type="text" placeholder="LastName" name="lastname" required>
                <small id="lastname" class="invalid-report">Last Name is required</small>
            </div>
            <div id="login" style="clear: both">
                <p>Email</p>
                <input type="text" placeholder="Please enter Email" name="email" required>
                <small class="invalid-report">Email is required</small>
            </div>
            <div id="login">
                <p>Phone Number</p>
                <input type="text" placeholder="Please enter Phone Number" name="phonenummber" required>
                <small class="invalid-report">Phone NUmber is required</small>
            </div>
            <div id="login">
                <p>Password</p>
                <input id="pass" type="password" placeholder="Please enter Password" name="password" required>
                <small class="invalid-report">Password is required</small>
            </div>
            <div id="login">
                <p>Re-Password</p>
                <input id="re-pass" type="password" placeholder="Re-Password" name="repassword" required>
                <small class="invalid-report">Re-Password is required</small>
            </div>
            <div class="btn" style="margin-right: 50px">
                <button class="login" type="submit" style="background-color: #18C090" onclick="validateForm()">
                    Register
                </button>
                <a href="login">
                    <button class="sign-up" type="button" style="background-color: black">Back</button>
                </a>
            </div>
        </div>
    </form>

</div>
<script>
    function validateForm() {
        pass = document.getElementById('pass').value;
        re_pass = document.getElementById('re-pass').value;
        if (pass != re_pass) {
            alert("MAT KHAU KHONG TRUNG KHOP")
            return false;
        }
        return true;
    }
</script>
</body>
</html>