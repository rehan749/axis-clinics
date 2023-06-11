<header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">

                  <li>
                    <i class="fa-solid fa-phone"></i><a href="tel:+5565454117">Call us on:   +91 8448833343</a>
                  </li>
                  <li>
                    <i class="fa-solid fa-envelope"></i><a href="#">Email Us: axisclinic@gmail.com</a>
                  </li>

                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/images/Axis-Clinics-Logo.webp" alt="" srcset="">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item ">
                <a href="/" class=" nav__item-link active">Home</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="about-us.php" class=" nav__item-link">About Us</a>
              </li>

              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="procedures.php" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Our Procedures</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="axis-spine.php" class="nav__item-link">Axis Spine</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="axis-regenerative.php" class="nav__item-link">Axis Regenerative</a>
                  </li> <!-- /.nav-item -->

                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="our-doctor.php" class="nav__item-link">Our Doctors</a>
              </li>


              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Resource</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="#" class="nav__item-link">Gallery</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="news.php" class="nav__item-link">News</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blogs.php" class="nav__item-link">Blog</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="career.php" class="nav__item-link">Career</a>
              </li>
              <li class="nav__item">
                <a href="contact-us.php" class="nav__item-link">Contacts</a>
              </li>

              <!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30 " data-bs-toggle="modal" data-bs-target="#exampleModal">


            <a href="#" class="btn  rounded-pill ml-30 pt-3" style="color: #ffffff;
            background-color: #21cdc0;">

              <i class="fa-sharp fa-solid fa-calendar-days"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Get Appointment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-50">
                            <form class="form" method="post" action="assets/php/contact.php"
                                id="contactForm">
                                <div class="row">
                                    
                              
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <i class="fa-solid fa-user form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                                name="contact-name" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <i class="fa-solid fa-envelope form-group-icon"></i>
                                            <input type="email" class="form-control" placeholder="Email"
                                                id="contact-email" name="contact-email" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-4 col-md-4 col-lg-6">
                                        <div class="form-group">
                                            <i class="fa-solid fa-phone form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Phone"
                                                id="contact-Phone" name="contact-phone" required>
                                        </div>
                                    </div><!-- /.col-lg-4 -->
                                    <div class="col-sm-4 col-md-4 col-lg-6">
                                        <div class="form-group form-group-date">
                                            <i class="fa-solid fa-calendar-days form-group-icon"></i>
                                            <input type="date" class="form-control" id="contact-date"
                                                name="contact-date" required>
                                        </div>
                                    </div><!-- /.col-lg-4 -->
                                    <label id="forminator-field-time-1" class="forminator-label">Choose Time Slot (30
                                        Min Interval) <span class="forminator-required">*</span></label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <input type="number" name="time-1-hours" min="0" max="12"
                                                placeholder="Hours - (10 Am - 6 PM)"
                                                id="forminator-field-time-1-hours_64817adf23822"
                                                class=" form-control forminator-input time-hours has-time-limiter"
                                                data-field="hours"
                                                aria-describedby="forminator-field-time-1_64817adf23822-description forminator-field-time-1-hours_64817adf23822-error"
                                                value="" aria-invalid="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <input type="number" min="0" max="59" name="time-1-minutes"
                                                placeholder="Minutes (30 Min Slot)"
                                                id="forminator-field-time-1-minutes_64817adf23822"
                                                class="form-control forminator-input time-minutes has-time-limiter"
                                                data-field="minutes"
                                                aria-describedby="forminator-field-time-1_64817adf23822-description"
                                                value="" step="30" aria-invalid="false">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <select name="time-1-ampm"
                                                id="forminator-form-510__field--time-1-ampm_64817adf23822"
                                                class="forminator-select2 time-ampm has-time-limiter select2-hidden-accessible forminator-screen-reader-only"
                                                data-field="ampm"
                                                aria-describedby="forminator-field-time-1_64817adf23822-description"
                                                data-default-value="" tabindex="-1" aria-hidden="true"
                                                data-select2-id="select2-data-forminator-form-510__field--time-1-ampm_64817adf23822"
                                                aria-invalid="false">
                                                <option value="am" data-select2-id="select2-data-13-hvf3">AM</option>
                                                <option value="pm" data-select2-id="select2-data-31-8g7n">PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="forminator-timepicker" data-start-limit="10:00 am"
                                        data-end-limit="06:00 pm" data-select2-id="select2-data-21-tqra">
                                        <div class="forminator-row" data-multiple="true"
                                            data-select2-id="select2-data-20-nct0">
                                            <div id="time-1-hours" class="forminator-col forminator-col-4">
                                                <div
                                                    class="forminator-field forminator-is_filled forminator-has_error forminator-is_active">
                                                    <div class="forminator-input--wrap">



                                                    </div><span class="forminator-error-message"
                                                        id="forminator-field-time-1-hours_64817adf23822-error"><strong></strong></span>
                                                </div>
                                            </div>
                                            <div id="time-1-minutes" class="forminator-col forminator-col-4">
                                                <div class="forminator-field forminator-is_filled">
                                                    <div class="forminator-input--wrap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="forminator-col forminator-col-4"
                                                data-select2-id="select2-data-19-3r58">
                                                <div class="forminator-field" data-select2-id="select2-data-18-41ka">
                                                    <span
                                                        class="select2 select2-container forminator-select forminator-select-dropdown-container--above"
                                                        dir="ltr" data-select2-id="select2-data-12-c12i"
                                                        style="width: 45.6px;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-describedby="forminator-field-time-1_64817adf23822-description"
                                                                aria-labelledby="select2-forminator-form-510__field--time-1-ampm_64817adf23822-container"
                                                                aria-controls="select2-forminator-form-510__field--time-1-ampm_64817adf23822-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-forminator-form-510__field--time-1-ampm_64817adf23822-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="PM"></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><span
                                                                        class="forminator-icon-chevron-down"
                                                                        aria-hidden="true"></span></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn-danger btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                            <span>Book Appointment &rarr;</span>
                                        </button>
                                        <div class="contact-result"></div>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form>
                        </div>
                   
      </div>
   
    </div>
  </div>
</div>