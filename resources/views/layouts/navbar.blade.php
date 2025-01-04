<header id="header" class="site-header">
  <nav id="header-nav" class="navbar navbar-expand-lg py-3">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src={{ asset ('img/main-logo.png') }} class="logo">
      </a>
      <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="navbar-icon">
          <use xlink:href="#navbar-icon"></use>
        </svg>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
        <div class="offcanvas-header px-4 pb-0">
          <a class="navbar-brand" href="index.html">
            <img src="images/main-logo.png" class="logo">
          </a>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
        </div>
        <div class="offcanvas-body">
          <ul id="navbar" class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
            <li class="nav-item">
              <a class="nav-link me-4" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="shop.html">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="blog.html">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="/kontak">Contact</a>
            </li>
          </ul>
          <div class="user-items d-flex">
            <ul class="d-flex justify-content-end list-unstyled mb-0">
              <li class="search-item pe-3">
                <a href="#" class="search-button">
                  <svg class="search">
                    <use xlink:href="#search"></use>
                  </svg>
                </a>
              </li>
              <li class="pe-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <svg class="user">
                    <use xlink:href="#user"></use>
                  </svg>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="tabs-listing">
                                <nav>
                                  <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                                    <button class="nav-link text-uppercase active" id="nav-sign-in-tab" data-bs-toggle="tab" data-bs-target="#nav-sign-in" type="button" role="tab" aria-controls="nav-sign-in" aria-selected="true">Sign In</button>
                                    <button class="nav-link text-uppercase" id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register" aria-selected="false">Register</button>
                                  </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                  <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel" aria-labelledby="nav-sign-in-tab">
                                   <form action="/login" method="POST">
                                    @csrf
                                      <div class="form-group py-3">
                                        <label class="mb-2" for="sign-in">Username</label>
                                        <input type="text" minlength="2" name="name" id="name" placeholder="Your Username" class="form-control w-100 rounded-3 p-3" required>
                                      </div>
                                      <div class="form-group pb-3">
                                        <label class="mb-2" for="sign-in">Password *</label>
                                        <input type="password" minlength="2" name="password" placeholder="Your Password" class="form-control w-100 rounded-3 p-3" required>
                                      </div>
                                      <label class="py-3">
                                        <input type="checkbox" required="" class="d-inline">
                                        <span class="label-body">Remember me</span>
                                        <span class="label-body"><a href="#" class="fw-bold">Forgot Password</a></span>
                                      </label>
                                      <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Login</button>
                                    </div>
                                  </form> 
                                  <form action="/register" method="POST">
                                    @csrf
                                    <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                                      <div class="form-group py-3">
                                        <label class="mb-2" for="register">Your Name</label>
                                        <input type="text" minlength="2" name="name" id="name" placeholder="Your Email Address" class="form-control w-100 rounded-3 p-3" required>
                                      </div>
                                      <div class="form-group pb-3">
                                        <label class="mb-2" for="sign-in">E-Mail</label>
                                        <input type="email" minlength="2" name="email" id="email" placeholder="Your Password" class="form-control w-100 rounded-3 p-3" required>
                                      </div>
                                      <div class="form-group pb-3">
                                        <label class="mb-2" for="sign-in">Password</label>
                                        <input type="password" minlength="2" name="password" id="password" placeholder="Your Password" class="form-control w-100 rounded-3 p-3" required>
                                      </div>
                                      <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Register</button>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </li>
              <li class="wishlist-dropdown dropdown pe-3">

              </li>
              <li class="cart-dropdown dropdown">
                <a href="cart.html" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg><span class="fs-6 fw-light">(02)</span>
                </a>
                <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">2</span>
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                      <div>
                        <h5>
                          <a href="single-product.html">IPad (9th Gen)</a>
                        </h5>
                        <small>High quality in good price.</small>
                      </div>
                      <span class="text-primary">$870</span>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                      <div>
                        <h5>
                          <a href="single-product.html">Drone with camera</a>
                        </h5>
                        <small>Professional drone with camera.</small>
                      </div>
                      <span class="text-primary">$600</span>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between">
                      <span class="text-uppercase"><b>Total (USD)</b></span>
                      <strong>$1470</strong>
                    </li>
                  </ul>
                  <div class="d-flex flex-wrap justify-content-center">
                    <a href="/keranjang" class="w-100 btn btn-dark mb-1" type="submit">View Cart</a>
                    <a href="/cekot" class="w-100 btn btn-primary" type="submit">Go to checkout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

</header>