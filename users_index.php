<?php include_once 'header.php';
session_start();
if (isset($_SESSION['user_type'])) {
    if (!$_SESSION['user_type'] == 1) {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
?>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar fixed-top">
            <div class=" my-2 my-lg-0">

                <?php
                if (isset($_SESSION["username"])) {
                    echo '
<a class="btn btn-outline-success my-2 my-sm-0" href="includes/logout.inc.php" title="Sign Out">
                    <i class="fas fa-sign-out-alt"></i>
</a>';
                } else {
                    echo '';
                }
                ?>
            </div>
            <a class="navbar-brand" href="index.php">EviSimple</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-toggle="collapse">
                <i class="fas fa-bars navbar-toggler-icon icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Services">Services<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#AboutUs">About</a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="#ContactUs">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button type="submit" onClick="parent.location='signup.php' " class="btn btn-outline-secondary a">Sign Up</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>





    </ul>
    </div>
    </nav>
    </div>

    <!-- end navbar-->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <?php
        if (isset($_SESSION["username"])) {
            echo '<b class="text-center">Hello there, ' . $_SESSION["username"] . '</b>';
        }
        ?>
        <div class="content text-center landing-text">
            <h1 class="text-white  animate__animated animate__slideInDown animate__fast">Research ... Innovate </h1>
            <a href="login.php" class="btn btn-outline-secondary btn-xl btnn  animate__animated animate__flipInX">GET
                STARTED</a>
        </div>
    </div>

    <!--  section2-->
    <div class="padding">
        <div class="container">
            <div class="row text-center  animate__animated animate__fadeInLeft animate__delay-1s" id="Services">
                <div class="col-md-12">
                    <form class="form-inline" action="users_index.php" method="GET">
                        <div class="form-group mb-2">
                            <label for="staticEmail2" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="staticEmail2" value="<?php echo isset($_GET['email']) ? $_GET['email'] : 'Email'; ?>" name="email">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Name</label>
                            <input type="name" class="form-control" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : 'Name'; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Visits Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once('./includes/dbh.inc.php');
                            require_once('./includes/functions.inc.php');
                            $arr = listUsers($conn);
                            foreach ($arr as $user) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $user['userId']; ?></th>
                                    <td><?php echo $user['userFName']; ?></td>
                                    <td><?php echo $user['userLName']; ?></td>
                                    <td><?php echo $user['userEmail']; ?></td>
                                    <td><?php echo $user['userVisits']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    $page = $_GET['page'] ?? 1;
                    $pages = pagesCount($conn);
                    ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="users_index.php?page=<?php $i - 1 > 0 ? ($i - 1) : 1; ?>">Previous</a></li>
                            <?php
                            for ($i = 1; $i <= $pages; $i++) {
                            ?>
                                <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>"><a class="page-link" href="users_index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php
                            }
                            ?>
                            <li class="page-item"><a class="page-link" href="users_index.php?page=<?php $i + 1 < $pages ? ($i + 1) : $pages; ?>">Next</a></li>
                        </ul>
                    </nav>
                    <div class="card">
                        <div class="card-body">
                            Total Views
                            <?php
                            echo viewCount($conn);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   section3-->
    <div class="all">

        <!--  start footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3" id="ContactUs">
                        <h5>Join Now</h5>
                        <ul class="list-unstyled three-columns">
                            <a href="./signup.php">
                                <li>Sign Up</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled three-columns">
                            <li style="color: #eee">Email: info@evisimple.com </li>
                            <ul class="list-unstyled social-list">

                                <a href="https://www.facebook.com/evisimple">
                                    <li>Facebook: <i class="fab fa-facebook fa-lg"></i></li>
                                </a>

                            </ul>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <ul class="list-unstyled three-columns">
                            <li style="color: #eee">If you want to get involved contact : </li>
                            <li style="color: #eee">E: info@evisimple.com </li>
                        </ul>
                    </div>
                </div>
                <div class="copyright text-center">Evisimple © 2021. All Rights reserved
                </div>
            </div>

        </footer>
        <?php include_once 'footer.php';
        ?>