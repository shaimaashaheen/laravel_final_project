
<html>
    <head>
        <title>Login - ADMIN PANEL</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
    <div class="login">
        <div><img src="../images/login.png" width="100px"></div>
        <h1 class="text-center">ADMIN PANEL</h1>
        <br>

        <br><br>
    @include('admin.layout.messages')
        <!-- Login Form Starts HEre -->
        <form action="{{'authenticate'}}" method="POST" class="text-center">
            @csrf

            Email <br>
            <input type="email" name="email" placeholder="Email"><br><br>

            Password <br>
            <input type="password" name="password" placeholder="Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-login">
            <br><br>
            <p>
                <a href="{{route('register')}}" class="text-center">Register a new membership</a>
            </p>
        </form>
        <!-- Login Form Ends HEre -->

    </div>


