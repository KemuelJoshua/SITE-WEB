<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customizing Bootstrap with jQuery</title>

    <!-- ... Customize bootsrap ... -->
    <link href="custom.css" rel="stylesheet">
    
    
</head>
<body class="bg-grey">
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">
        <div class="w-100 text-center">
            <!-- navbar routes -->
            <div class="card-container d-none d-lg-block">
                <div class="d-flex justify-content-end overlay">
                    <i class="m-1 fas fa-external-link-alt"></i> 
                    <a href="">Learning Management System</a>
                </div>
                <div class="container">
                    <img src="img/Official_LOGO_SITE.png" class="img-fluid logo text-left" alt="site-logo">
                    <h1 class="text-white custom-h1 text-center mx-auto">SCHOOL OF INFORMATION TECHNOLOGY EDUCATION</h1>
                </div>
            </div>
            <div class="container-fluid w-100 routes d-flex align-items-center justify-content-between">
                <div class="d-flex d-lg-none h-100 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu" aria-controls="navbarOffcanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h5 class="p-1 pt-2">School of Information Technology Education</h5>
                </div>
                <img src="img/Official_LOGO_SITE.png" class="d-lg-none img-fluid logo-small text-left" alt="site-logo-small">
                    <div class="d-none d-lg-block w-100">
                        <div class="container d-flex justify-content-center">
                            <a class="nav-link py-2 px-2" href="#">HOME</a>
                            <a class="nav-link py-2 px-2" href="#">ADMISSION</a>
                            <a class="nav-link py-2 px-2" href="#">ANNOUNCEMENT</a>
                            <a class="nav-link py-2 px-2" href="#">NEWS</a>
                            <a class="nav-link py-2 px-2" href="#">OFFICERS</a>
                            <a class="nav-link py-2 px-2" href="#">RESEARCH</a>
                        </div>
                    </div>
                <!-- Offcanvas menu -->
                <div class="offcanvas offcanvas-start bg-secondary" style="max-width: 300px" tabindex="-1" id="sideMenu" aria-labelledby="menu">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="menu">SITE MENU</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-lg-none">
                        <div class="container">
                            <?php include 'component/navbar_links.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="d-flex flex-column justify-content-end" id="image-announcement">
        <div id="images-posted">
            <div id="imageAnnouncement" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="image-container">
                            <img src="img/banner1.jpg" class="d-block banner" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image-container">
                            <img src="img/banner2.jpg" class="d-block banner" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image-container">
                            <img src="img/banner3.jpg" class="d-block banner" alt="...">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#imageAnnouncement" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imageAnnouncement" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="bulettin">
        <div class="d-flex justify-content-center align-items-center section-title">
            <div class="text-center">
                <h2 >BULLETIN</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore est delectus a tenetur explicabo libero ipsum cumque similique sit.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="bullet shadow">
                        <div class="img-overlay">
                            <h5 class="card-title text-primary">Card Title</h5>
                            <p class="card-text text-primary">Card description goes here.</p>
                        </div>
                        <img src="img/BG.jpg" class="bullet-img" alt="Card Image">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="bullet shadow">
                        <div class="img-overlay">
                            <h5 class="card-title text-primary">Card Title</h5>
                            <p class="card-text text-primary">Card description goes here.</p>
                        </div>
                        <img src="img/BG.jpg" class="bullet-img" alt="Card Image">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="bullet shadow">
                        <div class="img-overlay">
                            <h5 class="card-title text-primary">Card Title</h5>
                            <p class="card-text text-primary">Card description goes here.</p>
                        </div>
                        <img src="img/BG.jpg" class="bullet-img" alt="Card Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="course">
        <div class="course d-flex justify-content-center align-items-between">
          <div class="text-center text-white" style="min-height:150px">
              <h2 >BULLETIN</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore est delectus a tenetur explicabo libero ipsum cumque similique sit.</p>
          </div>
          <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-4 col-md-6">
                      <div class="card text-center bg-primary mb-3">
                          <div class="card-body">
                              <img src="img/it.png" alt="Logo" class="img-fluid mb-3 logo">
                              <h5 class="card-title text-white">Information Technology</h5>
                              <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente accusantium harum a eaque fuga minima, inventore cupiditate dolorum reprehenderit quis consequuntur iure nobis vero ratione ut laborum distinctio architecto nam ipsum, dolores omnis placeat possimus perspiciatis! Minus, repellat deleniti dolorem aperiam sit ipsum, corporis, nostrum delectus ab molestiae ad facilis.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="card text-center bg-primary mb-3">
                          <div class="card-body">
                              <img src="img/CS.png" alt="Logo" class="img-fluid mb-3 logo">
                              <h5 class="card-title text-white">Coumputer Science</h5>
                              <p class="card-text text-white" text-white>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore maiores tempora temporibus dicta adipisci minus, modi accusamus itaque cumque animi ipsam corporis voluptatum velit deserunt fugiat nulla harum quam aperiam cum. Omnis at molestias molestiae mollitia animi saepe! Sit, quisquam et non enim voluptas nam distinctio sequi doloremque esse! Quam.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="text-center text-danger m-5" >
            <button class="btn btn-light btn-lg">Enroll now!</button>
          </div>
        </div>
    </section>

    <section id="alumni">
        <div class="container" style="min-height: 100vh">
            <div class="row">
                <div class="col-lg-6">
                    <div class="context d-flex align-items-center">
                        <div class="d-flex alumni-title w-100">
                            <h5 class="text text-center">ALUMNI NEWS AND TESTIMONIAL</h5>
                            <button class="btn btn-outline-danger btn-lg w-50 p-2">News</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="context d-flex align-items-center">
                        <div class="d-flex w-100">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="alumni mb-3 shadow">
                                        <div class="alumni-img-overlay">
                                            <h5 class="card-title text-primary">Name</h5>
                                            <p class="card-text text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed aut velit molestiae optio neque dicta aperiam quidem assumenda nesciunt nostrum?.</p>
                                        </div>
                                        <img src="img/BG.jpg" class="alumni-img" alt="Card Image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="alumni mb-3 shadow">
                                        <div class="alumni-img-overlay">
                                            <h5 class="card-title text-primary">Name</h5>
                                            <p class="card-text text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, placeat! Dicta inventore atque impedit sunt ea temporibus, mollitia totam eius?.</p>
                                        </div>
                                        <img src="img/BG.jpg" class="alumni-img" alt="Card Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="bg-primary">
        <div class="p-5 container h-25">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <img src="img/aulogo.png" class=" text-left mx-3" alt="site-logo" height="100px">
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="">
                        <div><a class="text-white" href="">ARELLANO UNIVERSITY</a></div>
                        <div><a class="text-white" href="">ANDRES BONIFACIO CAMPUS</a></div>
                        <div><a class="text-white" href="">PAG-ASA ST.. BRGY. CANIOGAN, PASIG CITY</a></div>
                        <div><a class="text-white" href="">8-404-1644 | 8-641-4203 | 8-579-7295 | 8-579-7296</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div><a class="text-white" href="">KEEP IN TOUCH</a></div>
                    <div>
                        <a href="#" target="_blank"><i class="m-1 text-white fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="m-1 text-white fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="m-1 text-white fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="m-1 text-white fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div><a class="text-white" href="">CONTACT US</a></div>
                    <div>
                        <div><a class="text-white" href="">Phone: (02) 404 1644</a></div>
                        <div><a class="text-white" href="">Email: lites.auabc@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
body {
      font-family: 'Times New Roman', Times, serif;
}
.btn-primary {
    border-radius: 0px;
}
.card-container {
    background-image: linear-gradient(to bottom, #E3DADA 30%, #6E1815 30%);
    height: 20vh
}
.footer {
    margin: 0px;
    padding:0px;
}
.overlay {
    position: absolute;
    top: 5px;
    left: 0;
    width: 98%;
    height: 40px;
    z-index: 99;
    display: flex;
    justify-content: end;
    align-items: center;
}
.logo {
        max-width: 130px;
        max-height: auto;
    }

.course {
    margin-top:100px;
    padding-top:100px;
    flex-direction: column;
    background-image: linear-gradient(to bottom, rgba(110, 24, 21, .3), rgba(110, 24, 21, .6)), 
                        url('img/BG.jpg');
    background-size: cover;
}

.routes {
    height: 50px
}

.logo-small {
    max-width: 60px;
    max-height: auto;
}
@media(min-width: 768px){
    .banner{
        width: 100%
    }
}
/* Bulletin section */
#bulettin {
    min-height: 900px;
}
.section-title{
    min-height: 150px;
    padding: 5px
}
.bullet {
    position:relative;
    width: 100%;
    height: 600px;
    background-color: #f0f0f0;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
    cursor: pointer;

}
.bullet:hover {
    transform: scale(1.1)
}
.bullet-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    top: 0;
    left: 0;
}

.img-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    border-radius: 0px;
    background: linear-gradient(0deg, rgba(255, 255, 255, 1) 5%, rgba(0, 0, 0, 0.5)30%);
}

.card-title {
    text-transform: uppercase;
}
.context {
    min-height: 700px;
}
.alumni-title {
 flex-direction: column;
 justify-content: center;
 align-items: center;
 border-right: 5px solid #6E1815;
 min-height: 400px;
}

.text {
    font-size: 3rem;
 }

 .alumni {
    position:relative;
    width: 100%;
    height: 400px;
    background-color: #f0f0f0;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
    cursor: pointer;

}
.alumni:hover {
    transform: scale(1.1)
}
.alumni-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    top: 0;
    left: 0;
}

.alumni-img-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    border-radius: 0px;
    background: linear-gradient(0deg, rgba(255, 255, 255, 1) 25%, rgba(0, 0, 0, 0.5)50%);
}


</style>
</html>
