<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
             <div class="container-fluid">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="<?= base_url('users-login');?>">
                   <?= $system_name;?>
                </a>
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse " id="navigation">
                    <ul class="navbar-nav d-lg-block d-none pull pull-right">
                        <li class="nav-item">
                            <a href="#" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Vacancy List</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

      </div>
    </div>
</div>


<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Sign up</h3>
                            <p class="mb-0">Please fill in this form to create an account.</p>
                            <p class="mb-0"><span style="color:red">*</span> is REQUIRED.</p>
                        </div>
                        <div class="card-body">

                             <?php if ($this->session->flashdata('failed')) : ?>

                                <div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                       Your email has already exists. Please use another email address
                                    </div>
                                </div>

                            <?php endif; ?>

                            <?= form_open('jobs/sign_up_pro',array( 'id' => 'form', 'role'=>"form text-left", 'class'=>"row g-3 needs-validation", 'novalidate' => ''));?>

                                <label for="validationCustom04" class="form-label">Last Name <span style="color:red">*</span></label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name"  id="validationCustom01" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a last name.
                                    </div>

                                <label for="validationCustom05" class="form-label">First Name <span style="color:red">*</span></label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name"  id="validationCustom01" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a first name.
                                    </div>

                                 <label for="validationCustom03" class="form-label">Middle Name</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a middle name.
                                    </div>


                                <label for="validationCustom01" class="form-label">Email Address <span style="color:red">*</span></label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email_address" placeholder="Email Address"  id="validationCustom01" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a email address.
                                    </div>

                                <label for="validationCustom02" class="form-label">Password <span style="color:red">*</span></label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password" id="validationCustom02" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a password.
                                    </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-warning w-100 mt-4 mb-0">Sign Up</button>
                                </div>

                                 <div class="text-center">
                                    <a href="<?= base_url();?>jobs/sign_up"class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign In</a>
                                </div>

                               



                            <?= form_close();?>
                               
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                      <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url();?>assets/admin/forms/images/curved-images/curved6.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    (function () {
      'use strict'

      var forms = document.querySelectorAll('.needs-validation')

     
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()

            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>


<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>