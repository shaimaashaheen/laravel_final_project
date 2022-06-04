@include('admin.layout.menu')

<title>News Magazine - @yield('title')</title>
<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1 class="title">@yield('pageTitle')</h1>
        <br/>
        <br><br><br>
        @yield('content')
    </div>

<div class="clearfix"> </div>
</div>

<!-- Main Content Setion Ends -->
<div class="footer">
    <div class="wrapper1">
        <p class="text-center">2021 All rights reserved, NEWS_MAGAZINE</p>
    </div>
</div>
<!-- Footer Section Ends -->

</body>
</html>

