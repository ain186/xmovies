<?php
$sql = "select * from category order by category_name asc";
$run = mysqli_query($conn, $sql);
?>
<header>
    <a href="index.php" class="logo"><img alt="" src="./images/LOGO2.png" /></a>
    <div class="menu_bar">
        <i class="fas fa-bars" id="menu"></i>
    </div>
    <div class="navigation">
        <ul>
            <li class="<?php if (isset($_SESSION['username']) and !isset($_GET['cate'])) echo 'active' ?>">
                <a href="index.php">Trang chủ</a>
            </li>
            <li><a href="./category.html">Mới nhất</a></li>
            <li><a href="./category.html">Xem nhiều</a></li>
            <?php
            while ($dong = mysqli_fetch_array($run)) {
                ?>
                <li class="hid <?php if ($_GET['cate'] == $dong['id_category']) echo 'active' ?>">
                    <a href="categories.php?cate=<?php echo $dong['id_category'] ?>"><?php echo $dong['category_name'] ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="user-action">
        <ul>
            <li><a href="search.php?key="><i class="fas fa-search"></i></a></li>
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