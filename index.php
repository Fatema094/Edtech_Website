<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edtech</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/f300118f4d.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header>
      <div class="container text-light p-2 bg-purple-dark-20">
        <div class="row">
          <div class="col-5">
            <i class="fa-solid fa-headphones text-carot-red"></i>
            <a class="" href="">Support(03458942614)</a>
          </div>
          <!-- <div class="col-3">
          <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <div class=" carousel-inner">
              <div class="carousel-item active">
                <span>Get instant life time access to Your Course</span>
              </div>
              <div class="carousel-item">
                <span>Money Back Within 30 Days</span>
              </div>
              <div class="carousel-item">
                <span>Friendly 24/7 support</span>
              </div>
            </div>
          </div>
        </div> -->
          <div class="col-md-4">
            <div
              id="carouselExampleSlidesOnly"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <span>Get instant life time access to Your Course</span>
                </div>
                <div class="carousel-item">
                  <span>Money Back Within 30 Days</span>
                </div>
                <div class="carousel-item">
                  <span>Friendly 24/7 support</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-1" id="dropdowncat" class="dropdown">
            <a
              class="nav-link ms-3"
              href="#"
              id="#navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Categories
            </a>
            <ul
              id="dropdown1"
              class="dropdown-menu"
              aria-labelledby="navbarDropdown"
            >
              <li><a class="dropdown-item" href="#">Front-End</a></li>
              <li><a class="dropdown-item" href="#">Back-End</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Full Stack</a></li>
            </ul>
          </div>

          <div class="col-md-1">
            <div id="dropdownpro">
              <a
                class="ms-5 me-5"
                title="asf"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                id="prosDropdown"
              >
                <i class="fa-solid fa-user"> </i>
              </a>
              <ul
                id="dropdown2"
                class="dropdown-menu"
                aria-labelledby="prosDropdown"
              >
                <li><a class="dropdown-item" href="login.php"
               
                
                
                >Log in</a></li>
                <li><a class="dropdown-item" href="contact-form.php">Sign Up</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <a
              class="ms-1"
              href=""
              role="button"
              title=" asd"
              data-bs-target="#cart_offcanvasa"
              data-bs-toggle="offcanvas"
            >
              <i
                class="fa-solid bg-light text-dark fa-cart-shopping rounded-circle p-1"
              >
              </i>
            </a>

            <div class="offcanvas offcanvas-end" id="cart_offcanvasa">
              <div class="offcanvas-header bg-purple-dark">
                <h5 class="text-light">Cart</h5>
                <button
                  class="btn-close btn-close-white"
                  title="close"
                  data-bs-dismiss="offcanvas"
                ></button>
              </div>
              <div class="offcanvas-body">
                <div class="row mb-5">
                  <div class="col mb-3">
                    <div
                      class="d-flex mb-3 text-purple-dark justify-content-between"
                    >
                      <h4>Subtotal</h4>
                      <h4>$25.35</h4>
                    </div>
                    <div>
                      <form action="">
                        <div class="d-flex">
                          <input
                            type="text "
                            class="form-control me-4"
                            placeholder="Promocode"
                            required
                          />
                          <button
                            type="submit"
                            class="btn btn-outline-danger form-control"
                          >
                            Apply Promo Code
                          </button>
                        </div>
                      </form>
                      <div class="text-center">
                        <button class="btn btn-danger mt-5 w-100 shadow">
                          <i class="fa-solid fa-cash-register"></i>
                          Proceed to Checkout
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card border-0 mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img
                            src="image/html.png"
                            alt="HTMl"
                            class="img-fluid rounded-start"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="text-purple-dark card-body pt-sm-0">
                            <h6 class="card-title">
                              Lorem ipsum dolor sit amet consectetur,
                              adipisicing elit. Itaque, repudiandae!
                            </h6>
                            <div class="row">
                              <p class="col-4 text-primary">$15.99</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div id="dropdownpro">
                <a  class="ms-5 me-5" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="prosDropdown">
                  <i class="fa-solid fa-user"  style="position:relative ; top: -25px;">
                  </i>
                </a>
                <ul id="dropdown2" class="dropdown-menu" aria-labelledby="prosDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul> 

           
              </div> -->

            <!-- <button class="btn btn-light btn-sm dropdown-toggle   " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-flag"></i>
              Eng/$
            </button> -->

            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li  class="dropdown-item">
                <select class=" form-select-lg fa" id="sel1" name="sellist1">
                  <option value="fa-solid fa-dollar-sign">&#x24 Dollar</option>
                  <option value="fa-solid fa-euro-sign">&#xf153 Euro</option>
                  <option value="fa-solid fa-indian-rupee-sign">&#xe1bc Rupe</option>
                  <option value="fa-solid fa-ruble-sign">&#xf158 Ruble</option>
                </select>
              </li>
              
            </ul> -->
          </div>
        </div>
      </div>
      <div class="container">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="image/edtech.png"></a>
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"
                      >Home</a
                    >
                  </li>

                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Front End</a></li>
                      <li><hr class="dropdown-divider" /></li>
                      <li><a class="dropdown-item" href="#">Back End</a></li>
                      <li><hr class="dropdown-divider" /></li>
                      <li><a class="dropdown-item" href="#">Full Stack</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                  </li>
                  
                </ul>
                <form class="d-flex">
                  <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="btn btn-outline-success" type="submit">
                    Search
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div
        id="carouselExampleCaptions"
        class="container carousel slide w-75 m-lg-auto m-auto mt-5"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/hc1.jpg" class="d-block w-75" alt="..." />
            <div class="carousel-caption d-none d-md-block fade-in-top">
              <h5>Special offer — just hours to save!</h5>
              <p>
              Your exclusive longtime-learner deal: courses from just $12.99 for a very limited time
              </p>
              <a href="" role="button" class="btn btn-danger btn-lg">
                <i class="fa-light fa-right"></i>
                Courses
              </a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/hc2.jpg" class="d-block w-75" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Teach the world online</h5>
              <p>
              Create an online video course, reach students across the globe, and earn money
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/hc3.jpg" class="d-block w-75" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
              Top companies choose us to build in-demand career skills.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <section id="Categories" class="container py-5">
      <h4 class="display-4 fw-bold text-purple-dark my-5 pb-2">
        Top Categories & Technologies
      </h4>
      <h6 class="display-6 text-purple-dark mb-3">
        Web Development/ Front-End/ Back End / Full Stack
      </h6>
      <p class="fs-4 mb-5">Choose from the hottest industry rquirements</p>
      <div class="container px-0">
        <div class="row row-cols-1 row-cols-md-2 mt-5 justify-content-around">
          <div
            class="col display-1 row category"
            data-bs-trigger="hover"
            data-bs-toggle="popover"
            title="Web Development"
            data-bs-content="Front-End Frameworks "
          >
            <i
              class="fa-brands fa-angular text-angular-color col-6"
              data-bs-toggle="tooltip"
              title="Angular"
            ></i>
            <i
              class="fa-brands fa-html5 text-html-color col-6"
              data-bs-toggle="tooltip"
              title="Html"
            ></i>
            <i
              class="fa-brands fa-css3 text-css-color col-6"
              data-bs-toggle="tooltip"
              title="CSS"
            ></i>
          </div>
          <div
            class="col display-1 row category"
            data-bs-trigger="hover"
            data-bs-toggle="popover"
            title="Web Development"
            data-bs-content="Front-End Frameworks "
          >
            <i
              class="fa-brands fa-js col-6 text-js-color"
              data-bs-toggle="tooltip"
              title="JavaScript"
            ></i>
            <i
              class="fa-brands fa-sass col-6 text-sass-color"
              data-bs-toggle="tooltip"
              title="Sass"
            ></i>
            <i
              class="fa-brands fa-vuejs col-6 text-vue-color"
              data-bs-toggle="tooltip"
              title="Vue"
            ></i>
          </div>
        </div>
      </div>

      <div class="container px-0">
        <div class="row row-cols-1 row-cols-md-2 mt-5 justify-content-around">
          <div
            class="col display-1 row category"
            data-bs-trigger="hover"
            data-bs-toggle="popover"
            title="Web Development"
            data-bs-content="Front-End Frameworks "
          >
            <i
              class="fa-brands fa-react col-6 text-react-color"
              data-bs-toggle="tooltip"
              title="React"
            ></i>
            <i class="fa-solid fa-database col-6 text-mongoDB-color"></i>
            <i class="fa-brands fa-node-js col-6 text-nodeJs-color"></i>
          </div>
          <div
            class="col display-1 row category"
            data-bs-trigger="hover"
            data-bs-toggle="popover"
            title="Web Development"
            data-bs-content="Front-End Frameworks "
          >
            <i class="fa-brands fa-bootstrap col-6 text-sass-color"></i>
            <i
              class="fa-brands fa-angular text-angular-color col-6"
              data-bs-toggle="tooltip"
              title="Angular"
            ></i>
            <i
              class="fa-brands fa-angular text-angular-color col-6"
              data-bs-toggle="tooltip"
              title="Angular"
            ></i>
          </div>
        </div>
      </div>
    </section>
    <section id="Product-gallery" class="container py-5">
      <h4 class="display-4 fw-bold text-purple-dark my-5 pb-2">Courses</h4>
      <h6 class="display-6 text-purple-dark mb-3">
        Web Development/ Frameworks/ Javascript/ Design
      </h6>
      <p class="fs-4 mb-5">
        Choose from 100,000 online video courses with new additions published
        every month.
      </p>
      <div class="container px-8">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
          <!--Product 1-->
          <div
            class="col product"
            data-bs-toggle="offcanvas"
            data-bs-target="#course-1"
            aria-controls="course-1"
          >
            <img
              src="image/p1.jpg"
              alt="Web Development HTML CSS Beginner to Advance"
              class="card-img-top"
            />
            <div class="card-body- px-0">
              <h4 class="card-title fw-bold">
                Web Development HTML CSS Beginner to Advance
              </h4>
              <p class="card-text text-muted">Web Development/ Front End</p>
              <div class="d-flex">
                <h5 class="fw-bold text-carot-red me-2">4.8</h5>
                <div class="h6 text-golden-color me-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-muted h6">(2155)</p>
              </div>
              <div class="d-flex">
                <h5 class="fw-bold" me-2>$15.99</h5>
                <p class="text-muted text-decoration-line-through">$99.99</p>
              </div>
              <div class="badge bg-warning text-dark">Bestseller</div>
            </div>
          </div>
          <!--Product 1-->

          <!--Product 2-->
          <div
            class="col product"
            data-bs-toggle="offcanvas"
            data-bs-target="#course-2"
            aria-controls="course-2"
          >
            <img src="image/p2.jpg" alt="JavaScript" class="card-img-top" />
            <div class="card-body- px-0">
              <h4 class="card-title fw-bold">
                Javascript for Beginners Learn by Doing Practical Exercises
              </h4>
              <p class="card-text text-muted">Web Development/ Front End</p>
              <div class="d-flex">
                <h5 class="fw-bold text-carot-red me-2">4.8</h5>
                <div class="h6 text-golden-color me-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-muted h6">(2155)</p>
              </div>
              <div class="d-flex">
                <h5 class="fw-bold" me-2>$15.99</h5>
                <p class="text-muted text-decoration-line-through">$99.99</p>
              </div>
              <div class="badge bg-warning text-dark">Bestseller</div>
            </div>
          </div>
          <!--Product 2-->

          <!-- Product 3-->
          <div
            class="col product"
            data-bs-toggle="offcanvas"
            data-bs-target="#course-3"
            aria-controls="course-3"
          >
            <img
              src="image/bootstrap-5-alpha.jpg"
              alt="Bootstrap 5 Course - The Complete Guide Step by Step"
              class="card-img-top"
            />
            <div class="card-body- px-0">
              <h4 class="card-title fw-bold">
                Bootstrap 5 Course - The Complete Guide Step by Step
              </h4>
              <p class="card-text text-muted">Web Development/ Front End</p>
              <div class="d-flex">
                <h5 class="fw-bold text-carot-red me-2">4.8</h5>
                <div class="h6 text-golden-color me-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-muted h6">(2155)</p>
              </div>
              <div class="d-flex">
                <h5 class="fw-bold" me-2>$15.99</h5>
                <p class="text-muted text-decoration-line-through">$99.99</p>
              </div>
              <div class="badge bg-warning text-dark">Bestseller</div>
            </div>
          </div>
          <!-- Product 3-->

          <!-- Product 4-->
          <div
            class="col product"
            data-bs-toggle="offcanvas"
            data-bs-target="#course-4"
            aria-controls="course-4"
          >
            <img
              src="image/sass.jpg"
              alt="SASS - The Complete SASS Course (CSS Preprocessor)"
              class="card-img-top"
            />
            <div class="card-body- px-0">
              <h4 class="card-title fw-bold">
                SASS - The Complete SASS Course (CSS Preprocessor)
              </h4>
              <p class="card-text text-muted">Web Development/ Front End</p>
              <div class="d-flex">
                <h5 class="fw-bold text-carot-red me-2">4.8</h5>
                <div class="h6 text-golden-color me-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-muted h6">(2155)</p>
              </div>
              <div class="d-flex">
                <h5 class="fw-bold" me-2>$15.99</h5>
                <p class="text-muted text-decoration-line-through">$99.99</p>
              </div>
              <div class="badge bg-warning text-dark">Bestseller</div>
            </div>
          </div>
          <!-- Product 4-->

          <!-- Product 5-->
          <div
            class="col product"
            data-bs-toggle="offcanvas"
            data-bs-target="#course-5"
            aria-controls="course-5"
          >
            <img
              src="image/php.jpg"
              alt="Web Development HTML CSS Beginner to Advance"
              class="card-img-top"
            />
            <div class="card-body- px-0">
              <h4 class="card-title fw-bold">
                Web Development HTML CSS Beginner to Advance
              </h4>
              <p class="card-text text-muted">Web Development/ Front End</p>
              <div class="d-flex">
                <h5 class="fw-bold text-carot-red me-2">4.8</h5>
                <div class="h6 text-golden-color me-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-muted h6">(2155)</p>
              </div>
              <div class="d-flex">
                <h5 class="fw-bold" me-2>$15.99</h5>
                <p class="text-muted text-decoration-line-through">$99.99</p>
              </div>
              <div class="badge bg-warning text-dark">Bestseller</div>
            </div>
          </div>
          <!-- Product 5-->

          <!-- Product 6-->
          <div
            class="col product"
            data-bs-toggle="offcanvas"
            data-bs-target="#course-6"
            aria-controls="course-6"
          >
            <img
              src="image/full stack.jpg"
              alt="Web Development HTML CSS Beginner to Advance"
              class="card-img-top"
            />
            <div class="card-body- px-0">
              <h4 class="card-title fw-bold">
                Web Development HTML CSS Beginner to Advance
              </h4>
              <p class="card-text text-muted">Web Development/ Front End</p>
              <div class="d-flex">
                <h5 class="fw-bold text-carot-red me-2">4.8</h5>
                <div class="h6 text-golden-color me-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-muted h6">(2155)</p>
              </div>
              <div class="d-flex">
                <h5 class="fw-bold" me-2>$15.99</h5>
                <p class="text-muted text-decoration-line-through">$99.99</p>
              </div>
              <div class="badge bg-warning text-dark">Bestseller</div>
            </div>
          </div>
          <!-- Product 6-->
        </div>
      </div>

      <!--offcanvas 1-->
      <div
        class="offcanvas offcanvas-end shadow"
        id="course-1"
        data-bs-scroll="true"
        data-bs-backdrop="true"
      >
        <div class="offcanvas-header">
          <h4 class="offcanvas-title fw-bold w-75">
            Web Development HTML CSS Beginner to Advance
          </h4>
          <button
            class="btn-close text-reset"
            title="close"
            data-bs-dismiss="offcanvas"
          ></button>
        </div>
        <div class="offcanvas-body">
          <span class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark"> Bestseller </span>
            <span class="text-success"
              >Updated
              <b>July 2022</b>
            </span>
          </span>
          <span class="d-flex justify-content-between text-muted mt-2">
            <p>25 total hours</p>
            <p>All levels</p>
          </span>
          <span class="d-flex justify-content-between mt-2">
            <button class="btn btn-danger btn-lg w-100" title="Add to the cart">
              Add to the Cart
            </button>
            <i class="bi bi-cart-check display-6 ms-3 text-danger"></i>
          </span>
          <h5 class="mt-3">What you'll learn</h5>
          <ul class="list-unstyled m-3">
            <li class="mt-3">
              <i class="bi bi-check-lg text-success me-2"></i>
              HTML5 Semantic Layout and Essential Tags
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              CSS3 Variables, Transitions , Dropdowns, Overlays & More
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Flexbox & CSS Grid Projects
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Javascript Basics, DOM manipulation, ES6
            </li>
          </ul>
          <h5 class="mt-4">Course content</h5>
          <p class="text-muted">
            18 sections . 132 lectures .25h 0m total length
          </p>
          <ul class="list-group m-3">
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#introc1"
              type="button"
              aria-controls="intro"
              aria-expanded="false"
            >
              <p class="fw-bold">Introduction</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="introc1">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#advance-htmlc1"
              type="button"
              aria-controls="advance-htmlc1"
              aria-expanded="false"
            >
              <p class="fw-bold">Advance HTML</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="advance-htmlc1">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#cssc1"
              type="button"
              aria-controls="cssc1"
              aria-expanded="false"
            >
              <p class="fw-bold">CSS</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="cssc1">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <!--offcanvas 1-->

      <!--offcanvas 2-->
      <div
        class="offcanvas offcanvas-end shadow"
        id="course-2"
        data-bs-scroll="true"
        data-bs-backdrop="true"
      >
        <div class="offcanvas-header">
          <h4 class="offcanvas-title fw-bold w-75">
            Web Development HTML CSS Beginner to Advance
          </h4>
          <button
            class="btn-close text-reset"
            title="close"
            data-bs-dismiss="offcanvas"
          ></button>
        </div>
        <div class="offcanvas-body">
          <span class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark"> Bestseller </span>
            <span class="text-success"
              >Updated
              <b>July 2022</b>
            </span>
          </span>
          <span class="d-flex justify-content-between text-muted mt-2">
            <p>25 total hours</p>
            <p>All levels</p>
          </span>
          <span class="d-flex justify-content-between mt-2">
            <button class="btn btn-danger btn-lg w-100" title="Add to the cart">
              Add to the Cart
            </button>
            <i class="bi bi-cart-check display-6 ms-3 text-danger"></i>
          </span>
          <h5 class="mt-3">What you'll learn</h5>
          <ul class="list-unstyled m-3">
            <li class="mt-3">
              <i class="bi bi-check-lg text-success me-2"></i>
              JavaScript Semantic Layout and Essential Tags
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              JavaScript Variables, Transitions , Dropdowns, Overlays & More
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              JavaScript Projects
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Javascript Basics, DOM manipulation, ES6
            </li>
          </ul>
          <h5 class="mt-4">Course content</h5>
          <p class="text-muted">
            18 sections . 132 lectures .25h 0m total length
          </p>
          <ul class="list-group m-3">
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#introc2"
              type="button"
              aria-controls="introc2"
              aria-expanded="false"
            >
              <p class="fw-bold">Introduction</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="introc2">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#advance-htmlc2"
              type="button"
              aria-controls="advance-htmlc2"
              aria-expanded="false"
            >
              <p class="fw-bold">Advance JavaScript</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="advance-htmlc2">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#cssc2"
              type="button"
              aria-controls="cssc2"
              aria-expanded="false"
            >
              <p class="fw-bold">Object Oriented JavaScript</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="cssc2">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <!--offcanvas 2-->

      <!--offcanvas 3-->
      <div
        class="offcanvas offcanvas-end shadow"
        id="course-3"
        data-bs-scroll="true"
        data-bs-backdrop="true"
      >
        <div class="offcanvas-header">
          <h4 class="offcanvas-title fw-bold w-75">
            Web Development HTML CSS Beginner to Advance
          </h4>
          <button
            class="btn-close text-reset"
            title="close"
            data-bs-dismiss="offcanvas"
          ></button>
        </div>
        <div class="offcanvas-body">
          <span class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark"> Bestseller </span>
            <span class="text-success"
              >Updated
              <b>July 2022</b>
            </span>
          </span>
          <span class="d-flex justify-content-between text-muted mt-2">
            <p>25 total hours</p>
            <p>All levels</p>
          </span>
          <span class="d-flex justify-content-between mt-2">
            <button class="btn btn-danger btn-lg w-100" title="Add to the cart">
              Add to the Cart
            </button>
            <i class="bi bi-cart-check display-6 ms-3 text-danger"></i>
          </span>
          <h5 class="mt-3">What you'll learn</h5>
          <ul class="list-unstyled m-3">
            <li class="mt-3">
              <i class="bi bi-check-lg text-success me-2"></i>
              HTML5 Semantic Layout and Essential Tags
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              CSS3 Variables, Transitions , Dropdowns, Overlays & More
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Flexbox & CSS Grid Projects
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Javascript Basics, DOM manipulation, ES6
            </li>
          </ul>
          <h5 class="mt-4">Course content</h5>
          <p class="text-muted">
            18 sections . 132 lectures .25h 0m total length
          </p>
          <ul class="list-group m-3">
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#introc3"
              type="button"
              aria-controls="introc3"
              aria-expanded="false"
            >
              <p class="fw-bold">Introduction</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="introc3">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#advance-htmlc3"
              type="button"
              aria-controls="advance-htmlc3"
              aria-expanded="false"
            >
              <p class="fw-bold">Advance HTML</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="advance-htmlc3">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#cssc3"
              type="button"
              aria-controls="cssc3"
              aria-expanded="false"
            >
              <p class="fw-bold">CSS</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="cssc3">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <!--offcanvas 3-->

      <!--offcanvas 4-->
      <div
        class="offcanvas offcanvas-end shadow"
        id="course-4"
        data-bs-scroll="true"
        data-bs-backdrop="true"
      >
        <div class="offcanvas-header">
          <h4 class="offcanvas-title fw-bold w-75">
            Web Development HTML CSS Beginner to Advance
          </h4>
          <button
            class="btn-close text-reset"
            title="close"
            data-bs-dismiss="offcanvas"
          ></button>
        </div>
        <div class="offcanvas-body">
          <span class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark"> Bestseller </span>
            <span class="text-success"
              >Updated
              <b>July 2022</b>
            </span>
          </span>
          <span class="d-flex justify-content-between text-muted mt-2">
            <p>25 total hours</p>
            <p>All levels</p>
          </span>
          <span class="d-flex justify-content-between mt-2">
            <button class="btn btn-danger btn-lg w-100" title="Add to the cart">
              Add to the Cart
            </button>
            <i class="bi bi-cart-check display-6 ms-3 text-danger"></i>
          </span>
          <h5 class="mt-3">What you'll learn</h5>
          <ul class="list-unstyled m-3">
            <li class="mt-3">
              <i class="bi bi-check-lg text-success me-2"></i>
              HTML5 Semantic Layout and Essential Tags
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              CSS3 Variables, Transitions , Dropdowns, Overlays & More
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Flexbox & CSS Grid Projects
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Javascript Basics, DOM manipulation, ES6
            </li>
          </ul>
          <h5 class="mt-4">Course content</h5>
          <p class="text-muted">
            18 sections . 132 lectures .25h 0m total length
          </p>
          <ul class="list-group m-3">
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#introc4"
              type="button"
              aria-controls="introc4"
              aria-expanded="false"
            >
              <p class="fw-bold">Introduction</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="introc4">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#advance-htmlc4"
              type="button"
              aria-controls="advance-htmlc4"
              aria-expanded="false"
            >
              <p class="fw-bold">Advance HTML</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="advance-htmlc4">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#cssc4"
              type="button"
              aria-controls="cssc4"
              aria-expanded="false"
            >
              <p class="fw-bold">CSS</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="cssc4">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <!--offcanvas 4-->

      <!--offcanvas 5-->
      <div
        class="offcanvas offcanvas-end shadow"
        id="course-5"
        data-bs-scroll="true"
        data-bs-backdrop="true"
      >
        <div class="offcanvas-header">
          <h4 class="offcanvas-title fw-bold w-75">
            Web Development HTML CSS Beginner to Advance
          </h4>
          <button
            class="btn-close text-reset"
            title="close"
            data-bs-dismiss="offcanvas"
          ></button>
        </div>
        <div class="offcanvas-body">
          <span class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark"> Bestseller </span>
            <span class="text-success"
              >Updated
              <b>July 2022</b>
            </span>
          </span>
          <span class="d-flex justify-content-between text-muted mt-2">
            <p>25 total hours</p>
            <p>All levels</p>
          </span>
          <span class="d-flex justify-content-between mt-2">
            <button class="btn btn-danger btn-lg w-100" title="Add to the cart">
              Add to the Cart
            </button>
            <i class="bi bi-cart-check display-6 ms-3 text-danger"></i>
          </span>
          <h5 class="mt-3">What you'll learn</h5>
          <ul class="list-unstyled m-3">
            <li class="mt-3">
              <i class="bi bi-check-lg text-success me-2"></i>
              HTML5 Semantic Layout and Essential Tags
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              CSS3 Variables, Transitions , Dropdowns, Overlays & More
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Flexbox & CSS Grid Projects
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Javascript Basics, DOM manipulation, ES6
            </li>
          </ul>
          <h5 class="mt-4">Course content</h5>
          <p class="text-muted">
            18 sections . 132 lectures .25h 0m total length
          </p>
          <ul class="list-group m-3">
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#introc5"
              type="button"
              aria-controls="introc5"
              aria-expanded="false"
            >
              <p class="fw-bold">Introduction</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="introc5">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#advance-htmlc5"
              type="button"
              aria-controls="advance-htmlc5"
              aria-expanded="false"
            >
              <p class="fw-bold">Advance HTML</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="advance-htmlc5">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#cssc5"
              type="button"
              aria-controls="cssc5"
              aria-expanded="false"
            >
              <p class="fw-bold">CSS</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="cssc5">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <!--offcanvas 5-->

      <!--offcanvas 6-->
      <div
        class="offcanvas offcanvas-end shadow"
        id="course-6"
        data-bs-scroll="true"
        data-bs-backdrop="true"
      >
        <div class="offcanvas-header">
          <h4 class="offcanvas-title fw-bold w-75">
            Web Development HTML CSS Beginner to Advance
          </h4>
          <button
            class="btn-close text-reset"
            title="close"
            data-bs-dismiss="offcanvas"
          ></button>
        </div>
        <div class="offcanvas-body">
          <span class="d-flex justify-content-between">
            <span class="badge bg-warning text-dark"> Bestseller </span>
            <span class="text-success"
              >Updated
              <b>July 2022</b>
            </span>
          </span>
          <span class="d-flex justify-content-between text-muted mt-2">
            <p>25 total hours</p>
            <p>All levels</p>
          </span>
          <span class="d-flex justify-content-between mt-2">
            <button class="btn btn-danger btn-lg w-100" title="Add to the cart">
              Add to the Cart
            </button>
            <i class="bi bi-cart-check display-6 ms-3 text-danger"></i>
          </span>
          <h5 class="mt-3">What you'll learn</h5>
          <ul class="list-unstyled m-3">
            <li class="mt-3">
              <i class="bi bi-check-lg text-success me-2"></i>
              HTML5 Semantic Layout and Essential Tags
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              CSS3 Variables, Transitions , Dropdowns, Overlays & More
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Flexbox & CSS Grid Projects
            </li>
            <li class="mt-2">
              <i class="bi bi-check-lg text-success me-2"></i>
              Javascript Basics, DOM manipulation, ES6
            </li>
          </ul>
          <h5 class="mt-4">Course content</h5>
          <p class="text-muted">
            18 sections . 132 lectures .25h 0m total length
          </p>
          <ul class="list-group m-3">
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#introc6"
              type="button"
              aria-controls="introc6"
              aria-expanded="false"
            >
              <p class="fw-bold">Introduction</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="introc6">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#advance-htmlc6"
              type="button"
              aria-controls="advance-htmlc6"
              aria-expanded="false"
            >
              <p class="fw-bold">Advance HTML</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="advance-htmlc6">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
            <li
              class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between align-center"
              data-bs-toggle="collapse"
              href="#cssc6"
              type="button"
              aria-controls="cssc6"
              aria-expanded="false"
            >
              <p class="fw-bold">CSS</p>
              <span class="badge bg-primary"> 2 Lecture . 12:50 min</span>
            </li>
            <div class="collapsing" id="cssc6">
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-success"> </i>
                <a href="#" class="col-7">Introduction</a>
                <a href="#" class="col-2 text-decoration-underline">Preview </a>
                <div class="col-2">05:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Setting up the Environment</a>
                <div class="col-2">07:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">06:28</div>
              </div>
              <div class="row p-2">
                <i class="col-1 bi bi-play-circle-fill text-danger"> </i>
                <a href="#" class="col-9">Lorem ipsum dolor sit.</a>
                <div class="col-2">03:28</div>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <!--offcanvas 6-->
    </section>
    <!--Todo:Review-->


    <section id="Reviews" class="bg-light py-5 mb-5">

     <div class="container">
      <h4 class="display-4 fw-bold text-purple-dark my-5 pb-2">Customer reviews</h4>
      <h6 class="display-6 text-purple-dark my-5 ">Your Opinion counts!</h6>
      <section id="Review-cards" class="row row-cols-4 g-5">
        <!--Todo:Review card-1-->
          <div class="review-card " >

            <div class="card-body bg-white shadow rounded-2 p-4">

              <h5 class="card-title">
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star-half-alt text-review-color"></i> 
                <i class="far fa-star text-review-color"></i> 

              </h5>
              <p class="card-text">
                Lorem ipsum dolor sitnamet consectetur adipisicing elit. Omnis
                ex quos voluptate similique aperiam voluptas et
                reprehenderit, nihil vero? Necessitatibus quisquam
                pepspiciatis aliquid quia! Fugiat totam Necessitatibus aperiam
                modi?

              </p>
            </div>
            <div class="mt-3 d-flex align-items-center justify-content-center">
              <img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairShavedSides&accessories
              Type=Prescription02&facialHairType=MoustacheFancy&facialHairColor=Auburn&clothe
              Type=Hoodie&clotheColor=Gray02&eyeType=Side&eyebrowType=RaisedExcited&mouthType=Eating&
              skinColor=Yellow" 
              alt=""
               class="rounded-circle" width=100px/>

               <div class="row row-cols-1 text-center">
                <h6 class="mb-0">Harry</h6>
                <p class="muted-text">Jun 02.2015</p>

               </div>

            </div>
          </div>

          <!--Todo:Review card-2-->
          <div class="review-card " >

            <div class="card-body bg-white shadow rounded-2 p-4">

              <h5 class="card-title">
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star-half-alt text-review-color"></i> 
                <i class="far fa-star text-review-color"></i> 

              </h5>
              <p class="card-text">
                Lorem ipsum dolor sitnamet consectetur adipisicing elit. Omnis
                ex quos voluptate similique aperiam voluptas et
                reprehenderit, nihil vero? Necessitatibus quisquam
                pepspiciatis aliquid quia! Fugiat totam Necessitatibus aperiam
                modi?

              </p>
            </div>
            <div class="mt-3 d-flex align-items-center justify-content-center">

              <img src="https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessories
              Type=Kurt&facialHairType=BeardLight&facialHairColor=Platinum&clothe
              Type=ShirtCrewNeck&clotheColor=PastelOrange&eye
              Type=Dizzy&eyebrowType=UpDownNatural&mouthType=Eating&skinColor=Tanned" 
              alt=""
               class="rounded-circle" width=100px/>

             

               <div class="row row-cols-1 text-center">
                <h6 class="mb-0">Jane Dow</h6>
                <p class="muted-text">Dec 02.2015</p>

               </div>

            </div>
          </div>

            <!--Todo:Review card-3-->
          <div class="review-card " >

            <div class="card-body bg-white shadow rounded-2 p-4">

              <h5 class="card-title">
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star text-review-color"></i> 
                <i class="fas fa-star-half-alt text-review-color"></i> 
                <i class="far fa-star text-review-color"></i> 

              </h5>
              <p class="card-text">
                Lorem ipsum dolor sitnamet consectetur adipisicing elit. Omnis
                ex quos voluptate similique aperiam voluptas et
                reprehenderit, nihil vero? Necessitatibus quisquam
                pepspiciatis aliquid quia! Fugiat totam Necessitatibus aperiam
                modi?

              </p>
            </div>
            <div class="mt-3 d-flex align-items-center justify-content-center">

              <img src="https://avataaars.io/?avatarStyle=Circle&topType=Hijab&accessories
              Type=Wayfarers&hatColor=PastelOrange&clotheType=ShirtScoopNeck&clotheColor=PastelGreen&eye
              Type=Close&eyebrowType=Default&mouthType=Default&skinColor=Light" 
              alt=""
               class="rounded-circle" width=100px/>

             

               <div class="row row-cols-1 text-center">
                <h6 class="mb-0">Jenny</h6>
                <p class="muted-text">Jnu 02.2016</p>

               </div>

            </div>
          </div>
     <!--Todo:Review card4-->
     <div class="review-card " >

      <div class="card-body bg-white shadow rounded-2 p-4">

        <h5 class="card-title">
          <i class="fas fa-star text-review-color"></i> 
          <i class="fas fa-star text-review-color"></i> 
          <i class="fas fa-star text-review-color"></i> 
          <i class="fas fa-star-half-alt text-review-color"></i> 
          <i class="far fa-star text-review-color"></i> 

        </h5>
        <p class="card-text">
          Lorem ipsum dolor sitnamet consectetur adipisicing elit. Omnis
          ex quos voluptate similique aperiam voluptas et
          reprehenderit, nihil vero? Necessitatibus quisquam
          pepspiciatis aliquid quia! Fugiat totam Necessitatibus aperiam
          modi?

        </p>
      </div>
      <div class="mt-3 d-flex align-items-center justify-content-center">

        <img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessories
        Type=Prescription02&hairColor=PastelPink&facialHairType=Blank&clotheType=Overall&clotheColor=Blue01&eyeType=Default&eyebrow
        Type=SadConcerned&mouthType=Eating&skinColor=DarkBrown" 
        alt=""
         class="rounded-circle" width=100px/>

       

         <div class="row row-cols-1 text-center">
          <h6 class="mb-0">Dawsan</h6>
          <p class="muted-text">Jnu 02.2016</p>

         </div>

      </div>

           
          

      </section>

     </div>

    </section>


<!--Review-->

<!--TODO: Colaborate-->

<!-- Colaborate-->


    <!--To Do: FOOTER-->

<footer id="Contact" class="bg-purple-dark-20 pt-5">

  <div class="Container bg-purple-dark-20">

    <div class="row pb-2 p-5">
      <div class="col-md-4 col-sm-6">
        <h3 class="text-light">Web Development Courses</h3>
        <ul class="list-unstyled">
          <li><a href=""
            class="text-white-50 text-decoration-none hover-link">HTML3 & CSS3</a></li>

            <li><a href=""
              class="text-white-50 text-decoration-none hover-link">TypeScript</a></li>

              <li><a href=""
                class="text-white-50 text-decoration-none hover-link">React</a></li>

                <li><a href=""
                  class="text-white-50 text-decoration-none hover-link">Angular</a></li>

                  <li><a href=""
                    class="text-white-50 text-decoration-none hover-link">Vue JS</a></li>

                    <li><a href=""
                      class="text-white-50 text-decoration-none hover-link">Java Script</a></li>
                      <li><a href=""
                        class="text-white-50 text-decoration-none hover-link">Node JS</a></li>
                        <li><a href=""
                          class="text-white-50 text-decoration-none hover-link">Tallwind CSS</a></li>

        </ul>
      </div>
      <div class="col-md-4 col-sm-6">

      <div class="pb-2 mb-2">
        <h3 class="text-light">Account & Payment info</h3>
        <ul class="list-unstyled">
          <li><a href=""
            class="text-white-50 text-decoration-none hover-link">Taxse & Fees</a></li>

            <li><a href=""
              class="text-white-50 text-decoration-none hover-link">Refunds</a></li>

              <li><a href=""
                class="text-white-50 text-decoration-none hover-link">Account & Payment info</a></li>
                <li><a href=""
                  class="text-white-50 text-decoration-none hover-link">Your Account</a></li>


        </ul>
      </div>
      <div class="pb-2 mb-2">
        <h3 class="text-light">About us</h3>

        <ul class="list-unstyled">
          <li><a href=""
            class="text-white-50 text-decoration-none hover-link">About the company</a></li>

            <li><a href=""
              class="text-white-50 text-decoration-none hover-link">contact info</a></li>

              <li><a href=""
                class="text-white-50 text-decoration-none hover-link">Our Team</a></li>

                
        </ul>
      </div>
    </div>
      <div class="col-md-4 col-sm-6">
        <div class="pb-2 mb-4">
          <h3 class="text-light pb-1">Stay informed</h3>
          <form class="subscribe-form validate" target="_blank">
           <div class="input-group flex-nowrap position-relative">

            <i class="bi bi-envelop text-muted position-absolute top-50 
            translate-middle-y ps-3" style="z-index:2"></i>
            <input type="email" required placeholder="Your Email" class="form-control  rounded-start ps-5"/>

            <button class="btn btn-danger" type="submit">Submit</button>
           </div>


          </form>

          <div class="text-white-50 pt-2">
            *Subscribe to our newsletter to receive early discount offers.
          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="bg-purple-dark">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">

          <div class="d-flex">
            <i class="bi bi-truck text-carrot-red fs-1"></i>
            <div class="ps-3">
              <h6 class="text-light mb-1"> First and free delevery</h6>
              <p class="mb-0 fs-ms text-white-50">Get access to your course!</p>
            </div>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 mb-4">

          <div class="d-flex">
            <i class="bi bi-currency-dollar text-carrot-red fs-1"></i>
            <div class="ps-3">
              <h6 class="text-light mb-1"> Money back garountee</h6>
              <p class="mb-0 fs-ms text-white-50">Money back within 30 days.</p>
            </div>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 mb-4">


          <div class="d-flex">
            <i class="fa-solid fa-circle-info text-carrot-red fs-1 "></i>
            <div class="ps-3">
              <h6 class="text-light mb-1"> 24/7 customer support</h6>
              <p class="mb-0 fs-ms text-white-50">Friendly 24/7 customer support.</p>
            </div>
          </div>

        </div>
        
      </div>
    </div>
  </div>

</footer>

    <!-- FOOTER-->

    <!-- JavaScript Bundle with Popper -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
    <script>
      var popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
      );
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
      });
    </script>
  </body>
</html>
