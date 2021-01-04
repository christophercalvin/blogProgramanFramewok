<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <title>Artikel</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />
</head>

<body>
    <div id="header">
        <a></a>
        <div>
            <a><img src="{{URL::asset('images/logo1.png') }}" width="190" height="70" style="padding-top: 20px;" /></a>
            <div id="navigation">
                <div>
                    <ul>
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('whychoose') }}">Why choose us</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('kategori') }}">Kategori</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <div id="footer">
        <div>
            <div class="first">
                <h3>Jangan Bahagia</h3>
                <p>Bahagia dapat berpengaruh dalam kesehatan juga loh! kita sangat membutuhkan kebahagiaan dalam hidup</p>
                <div>
                    <p>Telephone. : <span>0987800987</span></p <p>Email : <span>arpar@gmail.com</span></p>
                </div>
            </div>
            <div>
                <h3>Bersosialisasi dengan kami</h3>
                <p>Bersosialisasilah dengan baik dan jalan-jalan lah sesuai pilihat dan semoga artikel ini dapat bermanfaat dengan baik</p>
                <div>
                    <a href="http://facebook.com/freewebsitetemplates" class="facebook" target="_blank"></a>
                    <a href="http://twitter.com/fwtemplates" class="twitter" target="_blank"></a>
                    <a href="#" class="linked-in"></a>
                </div>
            </div>
            <div>
                <h3>Bagikan pemikiran Anda!</h3>
                <p>Mari berbagi dengan kami kami juga membutuhkan kalian</p>
                <form action="#">
                    <label for="subscribe"><input type="text" id="subscribe" maxlength="30" value="" /></label>
                    <input class="submit" type="submit" value="" />
                </form>
                <p>Copyright &copy; 2011 Ecothunder Incorporated <br />LRP 727 6783 83839 All rights reserved</p>
            </div>
        </div>
    </div>
</body>

</html>