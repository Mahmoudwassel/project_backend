        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Wear Smart</title>
            <!-- google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,700;0,800;1,500&family=Nunito+Sans:wght@200;300;400;500;600;700&display=swap"
            rel="stylesheet"
            />
            <!--  icon -->
            <link rel="shortcut icon" href="{{asset('images/knitting.png')}}" type="icon" />
            <!--  css -->
            <link rel="stylesheet" href="{{asset('./css/all.min.css')}}" />
            <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}" />
            <link rel="stylesheet" href="{{asset('./css/style.css')}}" />
        </head>
        <body data-bs-spy="scroll" data-bs-target="#navbar-spy">
            <!-- fixed -->
            <span class="setting"><i class="fa-solid fa-gear fa-spin"></i></span>
            <a
            href="#home"
            class="up-home d-flex justify-content-center align-items-center rounded-3 text-white"
            ><i class="fa-solid fa-chevron-up"></i
            ></a>
            <!-- //////////////////////////////////////////////////////////////////////// -->
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar-spy">
            <div class="container">
                <a class="navbar-brand fw-bold fs-2" href="#">Mohamed ali<span class="dot">.</span></a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Collection
                    </a>
                    <div class="drop dropdown-menu bg-body-tertiary" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#pills-web-design-tab">Man</a>
                        <a class="dropdown-item" href="#pills-web-design-tab">Women</a>
                        <a class="dropdown-item" href="#pills-web-design-tab">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Find">Find</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('add.photo')}}">Add photo</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a  href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a  href="{{ route('login') }}" style="font-family:blue">Log in</a>
                                @endauth
                            </div>
                        @endif

                    </li>
                </ul>
                </div>
            </div>
            </nav>
            <!-- //////////////////////////////////////////////////////////////////////// -->
            <!-- header -->
            <header
            id="home"
            class="header d-flex justify-content-center align-items-center"
            >
            
            <div class="container text-center text-white">
                <h4>Welcome</h4>
                <h1 >AI ChatBot Assist For Fashion </h1>
                <p class="p-header py-3">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, eligendi?
                </p>
                <a href="#Collection" class="scroll"></a>
            </div>
            </header>
        
            <!-- //////////////////////////////////////////////////////////////////////// -->
        
            <!-- //////////////////////////////////////////////////////////////////////// -->
            <!-- Collection -->
            
            <section class="Collection py-5" id="Collection">
            <div class="container py-5">
                <div class="title  text-center pb-5">
                <h2>Our <span class="fw-bold">Product</span></h2>
                <p class="text-muted p-title">
                    It is a long established fact that a reader will be of a page when
                    established fact looking at its layout.
                </p>
                </div>
                <ul
                class=" nav nav-pills mb-3 d-flex justify-content-center"
                id="pills-tab"
                role="tablist"
                >
                <li class="nav-item" role="presentation">
                    <button class=" nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">Pants</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link"         id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false" >Jackets</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                    class="nav-link"
                    id="pills-web-design-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-web-design"
                    type="button"
                    role="tab"
                    aria-controls="pills-web-design"
                    aria-selected="false"
                    >
                    T-shirt
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                    class="nav-link"
                    id="pills-work-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-work"
                    type="button"
                    role="tab"
                    aria-controls="pills-work"
                    aria-selected="false"
                    >
                    exp
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                    class="nav-link"
                    id="pills-wordpress-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-wordpress"
                    type="button"
                    role="tab"
                    aria-controls="pills-wordpress"
                    aria-selected="false"
                    >
                    exp
                    </button>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div
                    class="tab-pane fade show active"
                    id="pills-all"
                    role="tabpanel"
                    aria-labelledby="pills-all-tab"
                    tabindex="0"
                >
                    <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/1.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/2.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="./images/3.jpg" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/4.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/5.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/6.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab" tabindex="0">
                    @foreach ($photo as $item)
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="inner position-relative overflow-hidden">
                                <img src="{{$item->photo}}" class="w-100" />
                                <div class="content text-center position-absolute w-100">
                                    <h3 class="text-secondary h6">categorey</h3>
                                    <h4 class="text-white h5">Project Title</h4>
                                </div>
                                <div class="layer"></div>
                                </div>
                            </div>
                    @endforeach
                <div
                    class="tab-pane fade"
                    id="pills-web-design"
                    role="tabpanel"
                    aria-labelledby="pills-web-design-tab"
                    tabindex="0"
                >
                    <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/1.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/2.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/6.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="pills-work"
                    role="tabpanel"
                    aria-labelledby="pills-work-tab"
                    tabindex="0"
                >
                    <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/1.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="pills-wordpress"
                    role="tabpanel"
                    aria-labelledby="pills-wordpress-tab"
                    tabindex="0"
                >
                    <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                        <img src="{{asset('./images/1.jpg')}}" class="w-100" />
                        <div class="content text-center position-absolute w-100">
                            <h3 class="text-secondary h6">categorey</h3>
                            <h4 class="text-white h5">Project Title</h4>
                        </div>
                        <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="inner position-relative overflow-hidden">
                            <img src="{{asset('images/header-bg.jpg')}}" class="w-100" />
                            <div class="content text-center position-absolute w-100">
                                <h3 class="text-secondary h6">categorey</h3>
                                <h4 class="text-white h5">Project Title</h4>
                            </div>
                        <div class="layer"></div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- //////////////////////////////////////////////////////////////////////// -->
            
            <!-- //////////////////////////////////////////////////////////////////////// -->
            <!-- contact -->
            <section id="contact" class="contact py-5">
            <div class="container py-5">
                <div class="title text-center pb-5">
                <h2><span class="fw-bold">Contact</span> Us</h2>
                <p class="text-muted p-title">
                    It is a long established fact that a reader will be of a page when
                    established fact looking at its layout.
                </p>
                </div>
                <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 text-center">
                    <i class="fa-solid fa-mobile fs-2 text-pink py-3"></i>
                    <h5>Call Us On</h5>
                    <a href="tel:+985 123 7856" class="text-muted">01156583530</a>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa-regular fa-envelope fs-2 text-pink py-3"></i>
                    <h5>Email Us At</h5>
                    <a href="mailto:Website.Kerri@gmail.com" class="text-muted"
                    >WearSmart@gmail.com
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa-solid fa-location-dot fs-2 text-pink py-3"></i>
                    <h5>Visit Office</h5>
                    <a href="#" class="text-muted">Benha Uni</a>
                </div>
                </div>
                <form class="py-5">
                <div class="row g-3">
                    <div class="col-lg-6">
                    <input
                        type="text"
                        placeholder="Your Name .. "
                        class="form-control"
                    />
                    </div>
                    <div class="col-lg-6">
                    <input
                        type="email"
                        placeholder="Your email .. "
                        class="form-control"
                    />
                    </div>
                    <div class="col-lg-12">
                    <input
                        type="text"
                        placeholder="Your Subject .. "
                        class="form-control"
                    />
                    </div>
                    <div class="col-lg-12">
                    <textarea
                        placeholder="Your Message.."
                        cols="30"
                        rows="4"
                        class="form-control"
                    ></textarea>
                    </div>
                    <button
                    type="submit"
                    class="text-uppercase btn btn-pink w-fitContent ms-auto py-3 px-4"
                    >
                    send massage
                    </button>
                </div>
                </form>
            </div>
            </section>
            <script src="./js/bootstrap.bundle.min.js"></script>
            <!-- type.js -->
            <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
            <script>
            var typed = new Typed('#mainTitle', {
                strings: ['Kerri Deo', ' A Graphic Designer','A Photographer'],
                typeSpeed: 100,
                loop: true,
                loopCount: Infinity,
                backSpeed: 50,

            });
            </script>
        </body>
        </html>
