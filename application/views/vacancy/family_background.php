<div class="container-fluid py-4">
    <div class="row">
         <div class="col-4">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <h4 class="text-center">Profile</h4>
                    <hr>
                   <small>
                        <a class="text-center nav-link text-dark bg-gradient-gray" href="<?= base_url();?>candidates-dashboard">Personnal Information</a><hr>
                        <a class="text-center nav-link text-white bg-gradient-primary"href="<?= base_url();?>candidates-family">Family Background</a><hr>
                      
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-education">Educational Background</a><hr>
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-civil">Civil Service Eligibility</a><hr>
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-work">Work Experience</a><hr>
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-volunteer">Voluntary Work</a><hr>
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-ld">Learning and Development Interventions/Training Programs Attended</a><hr>
                         <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-others">Other Information</a><hr>
                        
                    </small>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2"> 
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-dark text-gradient">Welcome</h3>
                    </div>
                    <div class="card-body">

                        <h3 class="font-weight-bolder text-dark text-gradient">Family Background</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>


                        <?php if ($this->session->flashdata('success_fam')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your family background has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                           <?php if ($this->session->flashdata('success_add_fam')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your family background has been successfully added.
                                </div>
                            </div>

                        <?php endif; ?>

                        <?php if ($this->session->flashdata('form_fam_id')) : ?>

                        <?= form_open("Info/fam_update", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="family_id" value="<?= $family['family_id'];?>">

                        
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S SURNAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_last_name" required autocomplete="off" value="<?= $family['spouse_last_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s surname.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_first_name" required autocomplete="off" value="<?= $family['spouse_first_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_middle_name" required autocomplete="off" value="<?= $family['spouse_middle_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S NAME EXTENSION(JR,SR)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_extension_name" required autocomplete="off" value="<?= $family['spouse_extension_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s extension name.
                                </div>
                            </div>


                             <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">OCCUPATION</label>
                                <input type="text" class="form-control" id="validationCustom01" name="occupation" required autocomplete="off" value="<?= $family['occupation'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s occupation.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S EMPLOYERS/BUSINESS NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="company_name" required autocomplete="off" value="<?= $family['company_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s business name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S BUSINESS ADDRESS</label>
                                <input type="text" class="form-control" id="validationCustom01" name="company_address" required autocomplete="off" value="<?= $family['company_address'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s business address.
                                </div>
                            </div>

                             <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S TELEPHONE NO.</label>
                                <input type="text" class="form-control" id="validationCustom01" name="company_tel_no" required autocomplete="off" value="<?= $family['company_tel_no'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s telephone no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S SURNAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_last_name" required autocomplete="off" value="<?= $family['fathers_last_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s surname.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_first_name" required autocomplete="off" value="<?= $family['fathers_first_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_middle_name" required autocomplete="off" value="<?= $family['fathers_middle_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S NAME EXTENSION(JR,SR)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_extension_name" required autocomplete="off" value="<?= $family['fathers_extension_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s surname.
                                </div>
                            </div>


                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S SURNAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_last_name" required autocomplete="off" value="<?= $family['spouse_last_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s surname.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_first_name" required autocomplete="off" value="<?= $family['mothers_first_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_middle_name" required autocomplete="off" value="<?= $family['mothers_middle_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S MAIDEN NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_maiden_name" required autocomplete="off" value="<?= $family['mothers_maiden_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s maiden name.
                                </div>
                            </div>


                         <?php endif; ?>

                        <?php if ($this->session->flashdata('form_fam')) : ?>

                        <?= form_open("Info/fam_add", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="applicant_id" value="<?= $credentials['applicant_id'];?>">

                        
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S SURNAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_last_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s surname.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_first_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_middle_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S NAME EXTENSION(JR,SR)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="spouse_extension_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s extension name.
                                </div>
                            </div>

                             <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">OCCUPATION</label>
                                <input type="text" class="form-control" id="validationCustom01" name="occupation" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s occupation.
                                </div>
                            </div>


                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S EMPLOYERS/BUSINESS NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="company_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s business name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S BUSINESS ADDRESS</label>
                                <input type="text" class="form-control" id="validationCustom01" name="company_address" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s business address.
                                </div>
                            </div>

                             <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SPOUSE`S TELEPHONE NO.</label>
                                <input type="text" class="form-control" id="validationCustom01" name="company_tel_no" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide spouse`s telephone no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S SURNAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_last_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s surname.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_first_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_middle_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">FATHER`S NAME EXTENSION(JR,SR)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fathers_extension_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide father`s surname.
                                </div>
                            </div>


                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S SURNAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_last_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s surname.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_first_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_middle_name" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">MOTHER`S MAIDEN NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mothers_maiden_name" required autocomplete="off" value="">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide mother`s maiden name.
                                </div>
                            </div>


                         <?php endif; ?>

                            <div class="col-12">  
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>

                        <?= form_close();?>

                        <hr>
             
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<footer class="footer pt-3">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-bold text-muted text-lg-left">
                    
                    <script>
                        document.write(new Date().getFullYear())
                    </script>-  

                    <script>
                        document.write(new Date().getFullYear())
                    </script>    
                </div>
            </div>    
        </div>
    </div>
</footer>

<script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
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
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
</svg>