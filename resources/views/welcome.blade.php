<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MoodPrima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets_landing_page/style.css') }}">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ url('assets_landing_page/logo.png') }}" alt="Bootstrap" width="100%" height="100%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3 active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Join with us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- banner -->
    <div class="banner" style=" background-image: url('hero/{{ DB::table('meta_landing')->first()->hero }}');">
        <div class="container">
            <div class="col-6 col-md-6">
                <h1 class="text-white" style="padding-top: 60vh;">{{ DB::table('meta_landing')->first()->heading_hero }}</h1>
            </div>
            <b>
                <a type="button" class="btn btn-lg btn-outline-success fw-semibold" disabled>
                    Join with us
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </b>
        </div>
    </div>

    <!-- about us -->
    <div class="about pt-5 pb-5">
        <div class="container">

            <div class="row">
                <h1 class="text-center">ABOUT <span style="color: #6ECCAF;">US</span></h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p class="about-desc">
                        {{ DB::table('meta_landing')->first()->about }}
                    </p>
                    <br>
                    <button class="btn about-btn">Read More</button>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('assets_landing_page/about.png') }}" alt="MoodPrima.png" style="margin-left: 180px;">
                </div>
            </div>

        </div>
    </div>

    <!-- services -->
    <div class="services pt-5 pb-5">
        <div class="container">

            <div class="row">
                <h1 class="text-center mb-5">OUR <span style="color: #6ECCAF;">SERVICES</span></h1>
            </div>

            <div class="row mb-5">

            </div>

            <div class="d-flex justify-content-center flex-wrap gap-3" >
                @foreach (DB::table('services')->get() as $item)
                <div class="col-md-3">
                    <div class="card" style="background-color: #DCDFDF;">
                        <h5 class="text-center pt-5 pb-5">{{ $item->title }}</h5>
                        <img src="{{ url('thumb/'.$item->thumb) }}" alt="MoodPrima.png" style="width: 35%;" class="mx-auto pb-5">
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>

    <!-- join us -->
    <div class="container">
        <div class="row">
            <h1 class="text-center pb-5">JOIN <span style="color: #6ECCAF;">WITH US</span></h1>
        </div>
    </div>
    <div class="join-us pt-5 pb-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <img src="{{ url('assets_landing_page/joinus.png') }}" alt="moodprima.png" style="width: 70%;">
                </div>

                <div class="col-md-6">
                    <h1>Come</h1>
                    <h1 class="pb-4">and Join Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed repudiandae eaque reprehenderit
                        sequi, ad accusamus explicabo natus velit officia accusantium consequatur hic aliquam
                        perferendis ipsa nostrum voluptate. Facere, delectus asperiores.</p>
                    <b>
                        <a type="button" class="btn btn-outline-primary fw-semibold" disabled>
                            Join with us
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </b>
                </div>

            </div>
        </div>
    </div>

    <!-- testimonials -->
    <div class="testimonials pt-5 pb-5">
        <div class="container">

            <div class="row">
                <h1 class="text-center pb-5">TESTIMONIALS</h1>
            </div>

            <div class="row">
                @foreach (DB::table('testimonial')->get() as $item)

                <div class="col-3">
                    <div class="profile mx-auto" style=" background-image: url('thumb/{{ $item->thumb }}');"></div>
                    <div class="card p-3" style="background-color: #E9E9E9;">
                        <div class="row pt-5 pb-3">
                            <img src="{{ url('assets_landing_page/kutip-1.png') }}" alt="" style="width: 15%;">
                        </div>
                        <div class="row">
                            <h5 class="text-center">{{$item->name}}</h5>
                            <p class="text-center">{{$item->description}}</p>
                        </div>
                        <div class="row">
                            <img src="{{ url('assets_landing_page/kutip-2.png') }}" alt="" style="width: 15%;" class="ms-auto">
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

    <!-- contact -->
    <div class="contact pb-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center pb-5">CONTACT <span style="color: #6ECCAF;">US</span></h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="">
                        <div class="contact-info d-flex flex-row">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"
                                    style="color: #7CCEB4;">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </div>
                            <div class="contact-desc">
                                <p class="text-dark">{{ DB::table('meta_landing')->first()->address }}</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="contact-info d-flex flex-row">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16"
                                    style="color: #7CCEB4;">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </div>
                            <div class="contact-desc">
                                <p class="text-dark">{{ DB::table('meta_landing')->first()->email }}</p>
                            </div>
                        </div>
                    </a>

                    <div class="contact-maps pt-3">
                        {!! DB::table('meta_landing')->first()->maps !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-input mb-3">
                            <input type="text" placeholder="NAME" class="form-control">
                        </div>
                        <div class="form-input mb-3">
                            <input type="email" placeholder="EMAIL" class="form-control">
                        </div>
                        <div class="form-input mb-3">
                            <textarea name="" id="" cols="30" rows="7" placeholder="MESSAGE" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-success w-100">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="pb-5 pt-5">
        <section class="d-flex justify-content-center justify-content-lg-between pb-3 footer-top">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block text-white">
                <h4>Mood</h4>
                <h4>Prima</h4>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="text-end ms-auto">
                <a href="" style="text-decoration: none;" class="text-white">
                    <h6>Bantuan</h6>
                </a>
                <a href="" style="text-decoration: none;" class="text-white">
                    <small>Call Service</small>
                </a>
                <br>
                <a href="" style="text-decoration: none;" class="text-white">
                    <small>Support</small>
                </a>
                <br>
                <a href="" style="text-decoration: none;" class="text-white">
                    <small>Contact Us</small>
                </a>
            </div>

            <div class="text-end ms-5">
                <a href="" style="text-decoration: none;" class="text-white">
                    <h6>Perusahaan</h6>
                </a>
                <a href="" style="text-decoration: none;" class="text-white">
                    <small>Privacy</small>
                </a>
                <br>
                <a href="" style="text-decoration: none;" class="text-white">
                    <small>FAQ</small>
                </a>
                <br>
                <a href="" style="text-decoration: none;" class="text-white">
                    <small>About Us</small>
                </a>
            </div>
        </section>

        <section class="d-flex justify-content-center justify-content-lg-between pt-2 border-top">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block text-white">
                <small>All Rights Reserved</small>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-3 text-reset" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16" style="color: white;">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                </a>
                <a href="" class="me-3 text-reset" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16"style="color: white;">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="" class="me-3 text-reset" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16"style="color: white;">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <a href="" class="me-3 text-reset" style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-telephone" viewBox="0 0 16 16"style="color: white;">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                </a>
            </div>
            <!-- Right -->
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
