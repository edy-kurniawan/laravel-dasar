<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gama Express</title>

    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://demo.templatesjungle.com/deliver/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- script ================================================== -->
    <script src="https://demo.templatesjungle.com/deliver/js/modernizr.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">

    <!-- Navigation Section Starts -->

    <section id="navigation-bar" class="navigation position-fixed">

        <nav id="navbar-example2" class="navbar navbar-expand-lg ">

            <div class="navigation container-fluid d-flex flex-wrap align-items-center my-2 pe-4 ps-5 ">

                <div class="col-md-3 brand-logo">
                    <a href="index.html" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <h2>Gama Express</h2>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
                    aria-labelledby="offcanvasNavbar2Label">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="nav col-12 col-md-auto justify-content-center align-items-center mb-md-0">
                            <li class="nav-list mx-3">
                                <a href="#resources" class="nav-link px-2">
                                    <h5> Home </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="#services" class="nav-link px-2">
                                    <h5> Produk </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="#company" class="nav-link px-2">
                                    <h5> Perusahaan </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="#contact" class="nav-link px-2">
                                    <h5> Contact </h5>
                                </a>
                            </li>
                        </ul>

                        <div class="col-md-5 account d-flex justify-content-end align-items-center">
                            <a href="#" class="nav-link me-3">
                                <h5>Login</h5>
                            </a>
                            <button type="button" class="btn btn-primary first-button px-4 py-3 ">Sign up</button>
                        </div>
                    </div>
                </div>

            </div>

        </nav>

    </section>

    <div class="post-wrap py-5 no-padding-bottom">
        <div class="container">
            <div class="row g-5 mt-4">
                <main class="post-grid col-md-9">
                    <div class="row">
                        <article class="post-item">
                            <h2 class="blog-title display-5 text-capitalize mb-5">{{ $artikel->judul }}</h2>

                            <div class="hero-image">
                                <img src="{{ url('/thumbnail/'.$artikel->thumbnail) }}"
                                    alt="single-post" class="img-fluid">
                            </div>
                            <div class="post-content py-5">
                                <div class="post-description">
                                    {!! $artikel->isi !!}
                                    <div class="post-bottom-link d-md-flex justify-content-between my-5">
                                        <div class="block-tag">
                                            <ul class="list-unstyled text-decoration-underline d-flex ">
                                                <li class="me-3">
                                                    <a href="#">Courier</a>
                                                </li>
                                                <li class="me-3">
                                                    <a href="#">Delivery</a>
                                                </li>
                                                <li class="me-3">
                                                    <a href="#">Business</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="block-social-links d-flex">
                                            <div class="element-title text-uppercase pe-4">Share:</div>
                                            <ul class="list-unstyled d-flex gap-3 m-0 ">
                                                <li>
                                                    <a href="#" class="text-secondary p-0">
                                                        <iconify-icon icon="ri:facebook-fill" class="social-icon ">
                                                        </iconify-icon>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-secondary p-0">
                                                        <iconify-icon icon="ri:instagram-line" class="social-icon ">
                                                        </iconify-icon>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-secondary p-0">
                                                        <iconify-icon icon="ri:twitter-fill" class="social-icon ">
                                                        </iconify-icon>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-secondary p-0">
                                                        <iconify-icon icon="ri:youtube-fill" class="social-icon ">
                                                        </iconify-icon>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-secondary p-0">
                                                        <iconify-icon icon="ri:linkedin-fill" class="social-icon ">
                                                        </iconify-icon>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="single-post-navigation">
                                    <div class="post-navigation d-flex justify-content-between">
                                        <a class="post-prev text-decoration-none" href="#">
                                            <iconify-icon icon="solar:arrow-left-linear" class="pagination-arrow">
                                            </iconify-icon>
                                            <span class="page-nav-title  text-uppercase ms-2">How to take care of
                                                Courier</span>
                                        </a>
                                        <a class="post-next text-decoration-none" href="#">
                                            <span class="page-nav-title  text-uppercase me-2">Summer tips for truck
                                                owners</span>
                                            <iconify-icon icon="solar:arrow-right-linear" class="pagination-arrow">
                                            </iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div id="post-author-info" class="border-top border-bottom py-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-3">
                                    <div class="image-holder">
                                        <a href="#">
                                            <img src="https://demo.templatesjungle.com/deliver/images/team5.jpg"
                                                class="img-fluid" alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="post-author-content">
                                        <div class="element-title text-uppercase">
                                            <a href="#" class="text-decoration-none fw-bold fs-4">James Younes</a>
                                        </div>
                                        <span class="author-position">Delivery Expert</span>
                                        <p class="mt-3">Nascetur libero elementum adipiscing mauris maecenas et magna.
                                            Etiam nec, rutrum a
                                            diam lacus,
                                            nunc integer etiam. Mattis pulvinar non viverra donec pellentesque. Odio mi
                                            consequat libero
                                            dolor. Porta ut diam lobortis eget leo, lectus. Tortor diam dignissim amet,
                                            in interdum aliquet.
                                            Magnis dictum et eros purus fermentum, massa ullamcorper sit sollicitudin.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="post-comment">
                            <div class="container">
                                <div class="row my-5">
                                    <div class="comments-wrap">
                                        <h3 class="text-uppercase mb-5">
                                            <span class="count">3</span> Comments
                                        </h3>
                                        <div class="comment-list">
                                            <article class="comment-item pb-3 row">
                                                <div class="col-md-2">
                                                    <img src="https://demo.templatesjungle.com/deliver/images/commentor-item1.jpg"
                                                        alt="default" class="commentor-image img-fluid rounded-circle">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="author-post mb-4">
                                                        <div
                                                            class="comment-meta text-uppercase d-flex gap-3 text-black">
                                                            <div class="author-name fw-semibold">Lufy carlson</div>
                                                            <span class="meta-date">Jul 10</span>
                                                        </div>
                                                        <p>Tristique tempis condimentum diam done ullancomroer sit
                                                            element henddg sit he
                                                            consequert.Tristique tempis condimentum diam done
                                                            ullancomroer sit element henddg sit he
                                                            consequert.</p>
                                                        <div class="comments-reply border-animation">
                                                            <a href="#">
                                                                <i class="icon icon-mail-reply"></i>Reply </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="comment-item pb-3 row child-comments">
                                                <div class="col-md-2">
                                                    <img src="https://demo.templatesjungle.com/deliver/images/commentor-item2.jpg"
                                                        alt="default" class="commentor-image img-fluid rounded-circle">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="author-post mb-4">
                                                        <div
                                                            class="comment-meta text-uppercase d-flex gap-3 text-black ">
                                                            <div class="author-name fw-semibold">Lora leigh</div>
                                                            <span class="meta-date">Jul 10</span>
                                                        </div>
                                                        <p>Tristique tempis condimentum diam done ullancomroer sit
                                                            element henddg sit he
                                                            consequert.Tristique tempis condimentum diam done
                                                            ullancomroer sit element henddg sit he
                                                            consequert.</p>
                                                        <div class="comments-reply border-animation">
                                                            <a href="#">
                                                                <i class="icon icon-mail-reply"></i>Reply </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="comment-item pb-3 row">
                                                <div class="col-md-2">
                                                    <img src="https://demo.templatesjungle.com/deliver/images/commentor-item3.jpg"
                                                        alt="default" class="commentor-image img-fluid rounded-circle">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="author-post mb-4">
                                                        <div
                                                            class="comment-meta text-uppercase d-flex gap-3 text-black ">
                                                            <div class="author-name fw-semibold">Natalie dormer</div>
                                                            <span class="meta-date">Jul 10</span>
                                                        </div>
                                                        <p>Tristique tempis condimentum diam done ullancomroer sit
                                                            element henddg sit he
                                                            consequert.Tristique tempis condimentum diam done
                                                            ullancomroer sit element henddg sit he
                                                            consequert.</p>
                                                        <div class="comments-reply border-animation">
                                                            <a href="#">
                                                                <i class="icon icon-mail-reply"></i>Reply </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="comment-respond my-5">
                                        <h3 class="text-uppercase">Leave a Comment</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form method="post" class="form-group padding-small">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <textarea class="form-control ps-3 pt-3" id="comment" name="comment"
                                                        placeholder="Write your comment here *"></textarea>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input class="form-control ps-3" type="text" name="author"
                                                        id="author" placeholder="Write your full name here *">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control ps-3" type="email" name="email"
                                                        id="email" placeholder="Write your e-mail address *">
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="d-flex align-items-center">
                                                        <input type="checkbox" class="checked-box me-2">
                                                        <span class="label-body">Save my name, email, and website in
                                                            this browser for the next
                                                            time.</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 mt-3">
                                                    <button
                                                        class="btn btn-lg btn-primary text-uppercase btn-rounded-none w-100"
                                                        type="submit">Post Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </main>
                <aside class="col-md-3">
                    <div class="post-sidebar">
                        <form role="search" method="get" class="mb-5">
                            <div class="wp-block-search d-flex border p-2">
                                <input type="search" class="form-control border-0 focus-ring-light" name="s" value=""
                                    placeholder="Search" required="">
                                <button type="submit" class="border-0 bg-transparent">
                                    <iconify-icon icon="ic:outline-search" class="mt-3" style="font-size: 20px;">
                                    </iconify-icon>
                                </button>
                            </div>
                        </form>
                        <div class="widget sidebar-categories border-animation-left mb-5">
                            <h5 class="widget-title text-uppercase border-bottom pb-3 mb-3">Categories</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="item-anchor text-decoration-none">All</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor text-decoration-none">Delivery</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor text-decoration-none">Express Courier</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor text-decoration-none">International Courier</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor text-decoration-none">Ware House</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget block-tag mb-5">
                            <h5 class="widget-title text-uppercase border-bottom pb-3 mb-3">Tags</h5>
                            <ul class="list-unstyled d-flex flex-wrap gap-2">
                                <li>
                                    <a href="#" class="btn btn-outline-secondary">Delivery</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-secondary">Door to Door</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-secondary">Standard Courier</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-secondary">Express Courier</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget sidebar-recent-post mb-5">
                            <h5 class="widget-title text-uppercase border-bottom pb-3 mb-3">Recent Posts</h5>
                            <div class="sidebar-post-item d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="image-holder pt-2">
                                            <a href="#">
                                                <img src="https://demo.templatesjungle.com/deliver/images/blog1.jpg"
                                                    alt="blog" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="sidebar-post-content text-uppercase">
                                            <div class="post-meta fs-6 text-secondary">
                                                <span class="meta-date">jul 11, 2023</span>
                                            </div>
                                            <h6 class="post-title">
                                                <a href="#">How to clean roof properly</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-post-item d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="image-holder pt-2">
                                            <a href="#">
                                                <img src="https://demo.templatesjungle.com/deliver/images/blog2.jpg"
                                                    alt="blog" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="sidebar-post-content text-uppercase">
                                            <div class="post-meta fs-6 text-secondary">
                                                <span class="meta-date">jul 18, 2023</span>
                                            </div>
                                            <h6 class="post-title">
                                                <a href="#">Top 10 hacks for cleaning </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-post-item d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="image-holder pt-2">
                                            <a href="#">
                                                <img src="https://demo.templatesjungle.com/deliver/images/blog3.jpg"
                                                    alt="blog" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="sidebar-post-content text-uppercase">
                                            <div class="post-meta fs-6 text-secondary">
                                                <span class="meta-date">Aug 21, 2023</span>
                                            </div>
                                            <h6 class="post-title">
                                                <a href="#">Best ways to clean your tiles</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget sidebar-social-links border-animation-left">
                            <h5 class="widget-title text-uppercase border-bottom pb-3 mb-3">Follow us:</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="item-anchor">Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor">Twitter</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor">Pinterest</a>
                                </li>
                                <li>
                                    <a href="#" class="item-anchor">Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <section class="footer-2">
        <footer class="container footer-2-container  d-flex align-items-center">
            <div class="col-md-4 d-flex justify-content-center justify-content-md-start">
                <p class="footer2-paragraph">© 2023 TemplatesJungle. All rights reserved.</p>
            </div>

            <div class="col-md-4 text-center">
                <a href="https://templatesjungle.com/" class="text-decoration-none">
                    <iconify-icon class="footer-2-icon px-2" icon="ri:facebook-fill"></iconify-icon>
                </a>
                <a href="https://templatesjungle.com/" class="text-decoration-none">
                    <iconify-icon class="footer-2-icon px-2" icon="ri:twitter-fill"></iconify-icon>
                </a>
                <a href="https://templatesjungle.com/" class="text-decoration-none">
                    <iconify-icon class="footer-2-icon px-2" icon="ri:instagram-fill"></iconify-icon>
                </a>
            </div>

            <div class="col-md-4">
                <p class="footer2-paragraph d-flex justify-content-center justify-content-md-end">HTML template by :<a
                        href="https://templatesjungle.com/" class="text-white templatesjungle" target="_blank"> <u>
                            TemplatesJungle
                        </u> </a></p>
            </div>
        </footer>
    </section>

    <!-- Scripts  Starts -->
    <script src="https://demo.templatesjungle.com/deliver/js/jquery-1.11.0.min.js"></script>
    <script src="https://demo.templatesjungle.com/deliver/js/plugins.js"></script>
    <script src="https://demo.templatesjungle.com/deliver/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</body>

</html>