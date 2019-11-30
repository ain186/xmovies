<header>
    <div class="logo"><img alt="" src="./images/LOGO2.png" /></div>
    <div class="menu_bar">
        <i class="fas fa-bars" id="menu"></i>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="./index.html">Trang chủ</a></li>
            <li><a href="./category.html">Mới nhất</a></li>
            <li><a href="./category.html">Xem nhiều nhất</a></li>
            <li class="hid"><a href="./action.html">Hành động</a></li>
            <li class="hid"><a href="./vientuong.html">Viễn tưởng</a></li>
            <li class="hid"><a href="./kinhdi.html">Kinh dị</a></li>
            <li class="hid h1"><a href="./haihuoc.html">Hài hước</a></li>
            <li class="hid h1"><a href="./love.html">Tình cảm</a></li>
            <li class="hid h1"><a href="./love.html">Khoa học</a></li>
            <li class="hid h1"><a href="./love.html">Hoạt hình</a></li>
        </ul>
    </div>
    <div class="user-action">
        <ul>
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <li><a href="./login.html">Đăng nhập</a></li>
            <li></li>
        </ul>
    </div>

    <script>
        var menu = document.querySelector('#menu');
        var main = document.querySelector('body');
        var drawer = document.querySelector('.navigation');
        var input = document.querySelector('.menu_input_form');
        menu.addEventListener('click', function(e) {
            drawer.classList.toggle('open');
            e.stopPropagation();
        });
        main.addEventListener('click', function() {
            drawer.classList.remove('open');

        });
    </script>
</header>