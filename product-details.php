<!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Book Online Store Website Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">
                <a href="index.php" class="logo">
                    <span class="fa fa-book"></span> <span class="title">Book Online Store Website</span>
                </a>
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="#" class="dropdown-toggle">About</a>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="terms.php">Terms</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <?php
                if (isset($_GET['tensanpham'])) {
                    $tensanpham = urldecode($_GET['tensanpham']);


                    $servername = "localhost";
                    $username = "root";
                    $password = "huytk123";
                    $dbname = "bookstore";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Kết nối thất bại: " . $conn->connect_error);
                    }

                    $sql = "SELECT tensanpham, gia, mota, soluong, image FROM sanpham WHERE tensanpham = ?";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bind_param("s", $tensanpham);
                        $stmt->execute();
                        $stmt->bind_result($product_tensanpham, $product_gia, $product_mota, $product_soluong, $imageData);
                        $stmt->fetch();
                        $stmt->close();

                        echo '<div class="row">';
                        echo '<div class="col-md-6">';
               
                        if ($imageData) {
                     
                            $base64Image = base64_encode($imageData);
                            echo '<img src="data:image/jpeg;base64,' . $base64Image . '" class="img-fluid" alt="">';
                        } else {
                            echo '<img src="placeholder.jpg" class="img-fluid" alt="Placeholder Image">';
                        }
                        echo '</div>';
                        echo '<div class="col-md-6">';
                        echo '<h1>' . $product_tensanpham . ' <span class="pull-right">' . $product_gia . ' VND</span></h1>';
                        echo '<p>' . $product_mota . '</p>';
                        echo '<div class="row">';
                        echo '<div class="col-sm-4">';
                        echo '<label class="control-label">Available</label>';
                        echo '<div class="form-group">';
                        echo '<p style="font-weight:600; color:red">' . $product_soluong . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col-sm-8">';
                        echo '<label class="control-label">Quantity</label>';
                        echo '<div class="row">';
                        echo '<div class="col-sm-6">';
                        echo '<div class="form-group">';
                        echo '<input type="text" name="name" id="name">';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col-sm-6">';
                        echo '<input type="submit" class="primary" value="Add to Cart">';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "Sản phẩm không tồn tại.";
                    }

                    $conn->close();
                } else {
                    echo "Sản phẩm không tồn tại.";
                }
                ?>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>
                    &nbsp;
                </section>
                <ul class="copyright">
                    <li>Copyright © 2020 Company Name</li>
                    <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
