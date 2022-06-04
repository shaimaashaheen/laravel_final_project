
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
        <form action="{{route('do_register')}}" method="POST" class="text-center">
            @csrf
            Username <br>
            <input type="text" name="name" placeholder="Username"><br><br>

            Email <br>
            <input type="email" name="email" placeholder="Email"><br><br>

            Password <br>
            <input type="password" name="password" placeholder="Password"><br><br>

            Retype Password <br>
            <input type="password" placeholder="Retype Password" name="password_confirmation"><br><br>

            <input type="submit" name="submit" value="Register" class="btn-login">
            <br><br>
            <p>
                <a href="{{route('login')}}" class="text-center">Have account</a>
            </p>
        </form>
        <!-- Login Form Ends HEre -->

    </div>


