<div class="container-fluid py-4">
    <div class="row">
         <div class="col-4">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <h4 class="text-center">Profile</h4>
                    <hr>
                   <small>
                        <a class="text-center nav-link text-dark bg-gradient-gray" href="<?= base_url();?>candidates-dashboard">Personnal Information</a><hr>
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-family">Family Background</a><hr>
                      
                        <a class="text-center nav-link text-white bg-gradient-primary" href="<?= base_url();?>candidates-education">Educational Background</a><hr>
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

                        <h3 class="font-weight-bolder text-dark text-gradient">Educational Background</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>


                        <?php if ($this->session->flashdata('success_educ')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your educational background has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                           <?php if ($this->session->flashdata('success_educ_add')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your educational background has been successfully added.
                                </div>
                            </div>

                        <?php endif; ?>

                        <?php if ($this->session->flashdata('form_educ_id')) : ?>

                        <?= form_open("Info/educ_update", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="educational_backgrounds_id" value="<?= $educ['educational_backgrounds_id'];?>">

                        
                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (ELEMENTARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="es_name" required autocomplete="off" value="<?= $educ['es_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                   Please provide name of school (elementary).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (ELEMENTARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="es_year" value="<?= $educ['es_year'];?>"required autocomplete="" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                      Please provide year graduated (elementary).
                                </div>
                            </div>

                          <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (SECONDARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="secondary_name" value="<?= $educ['secondary_name'];?>" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide name of school (secondary).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (SECONDARY)</label>
                                <input type="text" class="form-control" value="<?= $educ['secondary_year'];?>" id="validationCustom01" name="secondary_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                     Please provide year graduated (secondary).
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (VOCATIONAL)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="voc_name"   value="<?= $educ['voc_name'];?>" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide name of school (vocational).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (VOCATIONAL)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="voc_year" required autocomplete="off" value="<?= $educ['voc_year'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                     Please provide year graduated (vocational).
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (COLLEGE)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="college_name"value="<?= $educ['college_name'];?>"  required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                     Please provide name of school (college).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (COLLEGE)</label>
                                <input type="text" class="form-control" id="validationCustom01" value="<?= $educ['college_year'];?>" name="college_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide year graduated (college).
                                </div>
                            </div>

                           <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (GRADUATE STUDIES)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="grad_name" value="<?= $educ['grad_name'];?>" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide name of school (greduate studies).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (GRADUATE STUDIES)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="grad_year" value="<?= $educ['grad_year'];?>" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide year graduated.
                                </div>
                            </div>



                         <?php endif; ?>

                        <?php if ($this->session->flashdata('form_educ')) : ?>

                        <?= form_open("Info/educ_add", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="applicant_id" value="<?= $credentials['applicant_id'];?>">

                        
                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (ELEMENTARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="es_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                   Please provide name of school (elementary).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (ELEMENTARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="es_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                      Please provide year graduated (elementary).
                                </div>
                            </div>

                          <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (SECONDARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="secondary_name" required  autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide name of school (secondary).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (SECONDARY)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="secondary_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                     Please provide year graduated (secondary).
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (VOCATIONAL)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="voc_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide name of school (vocational).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (VOCATIONAL)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="voc_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                     Please provide year graduated (vocational).
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (COLLEGE)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="college_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                     Please provide name of school (college).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (COLLEGE)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="college_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide year graduated (college).
                                </div>
                            </div>

                           <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">NAME OF SCHOOL (GRADUATE STUDIES)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="grad_name" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide name of school (greduate studies).
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">YEAR GRADUATED (GRADUATE STUDIES)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="grad_year" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide year graduated.
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