<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <div class="top-bar pt-2 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-6 ">
                    <img src="images/phone.png" alt=""> <span> +971 58 862 5195</span>
                </div>
                <div class="col-6 ">
                    <img src="images/mail.png" alt=""> <span> info@shakseyat.xyz | support@shakseyat.xyz </span>
                </div>
            </div>
        </div>
    </div>

    <header class="header bg" id="navBar">
        <div class="fixed navBar">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-2 col-6">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo.png" class="imgFluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-6 d-flex align-items-center justify-content-end">
                        <div class="open-nav">
                            <img src="images/menu.png" alt="image">
                        </div>
                        <div class="menu-overlay">
                        </div>
                        <nav class="nav-menu">
                            <div class="close-nav">
                                <img src="images/close.png" alt="image">
                            </div>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="about.php" data-toggle="sub-menu">About Us</a>
                                </li>
                                <!-- <li class="menu-item">
                                    <a href="blog.php">Blogs</a>
                                </li> -->
                                <li class="menu-item">
                                    <a href="contact-us.php">Contact Us</a>
                                </li>

                                <li class="menu-item"><a href="supplier.php">Supplier</a></li>
                                <!-- <li class="menu-item"><a href="portfolio.php">Our Portfolio</a></li> -->
                                <!-- <li class="menu-item"><a href="designers.php">Our Designers</a></li> -->

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <!-- <div class="login-popup">


    
                <div class="box">
                    <div class="login-form">
                        <div class="close">
                            &times;
                        </div>
                        <h1>Get in touch</h1>

                        <form class=""  method="POST" id="quoteForm" autocomplete="off">
                            <div class="group-form">
                                <input type="text" name="quote[name]" placeholder="First Name" class="form-controls">
                                <input type="text" name="quote[name]" placeholder="Last Name" class="form-controls">
                            </div>
                            <div class="group-form">
                                <input type="email" name="quote[email]" placeholder="Email" class="form-controls">
                                <input type="number" name="quote[phone]" placeholder="Phone Number" class="form-controls">
                            </div>
                            <div class="group-form">
                                <textarea cols="30" rows="10" name="quote[message]" placeholder="Comment"
                                    class="form-controls"></textarea>
                            </div>
                            <div class="btn-style mt-4 cursor transition mx-auto">
                                <div class="btn-styleIcon">
                                    <img data-src="assets/images/arrow-icon.png" alt="image" class="imgFluid lazy">
                                </div>
                                <i class="chat-ion pt-3 pb-3 transition"></i>
                                <button type="submit" name="quote" class="btn btn-submit">Submit now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->