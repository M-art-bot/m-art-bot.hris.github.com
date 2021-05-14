<div class="container-fluid py-4">
    <div class="row">
         <div class="col-4">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <h4 class="text-center">Profile</h4>
                    <hr>
                    <small>
                        <a class="text-center nav-link text-white bg-gradient-primary"href="<?= base_url();?>candidates-dashboard">Personnal Information</a><hr>
                        <a class="text-center nav-link text-dark bg-gradient-gray"href="<?= base_url();?>candidates-family">Family Background</a><hr>
                      
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

                        <h3 class="font-weight-bolder text-dark text-gradient">Basic Information</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>

                        <?php if ($this->session->flashdata('success')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your basic information has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                     

                        <?= form_open("Info/basic_update", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="applicant_id" value="<?= $credentials['applicant_id'];?>">

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="validationCustom01" name="last_name" required autocomplete="off" value="<?= $credentials['last_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You must provide last name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="validationCustom02" name="first_name" required autocomplete="off" value="<?= $credentials['first_name'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You must provide first name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="validationCustom03" name="middle_name" required="" value="<?= $credentials['middle_name'];?>"autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You must provide middle name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">NAME EXTENSION(JR, SR)</label>
                                <input type="text" class="form-control" id="validationCustom04" name="extension_name" value="<?= $credentials['extension_name'];?>" required="" autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You must provide extension name.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">TELEPHONE NUMBER</label>
                                <input type="text" class="form-control" id="validationCustom05" name="telephone_no" required autocomplete="off" value="<?= $credentials['telephone_no'];?>" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You must provide telephone number.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom06" class="form-label">MOBILE NUMBER</label>
                                <input type="text" class="form-control" id="validationCustom06" name="mobile_no" required autocomplete="off" value="<?= $credentials['mobile_no'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You must provide mobile number.
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="validationCustomUsername" class="form-label">Email Address</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="email" class="form-control" value="<?= $credentials['email_address'];?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="email_address" required autocomplete="off">
                                    <div class="invalid-feedback">
                                        Please choose a email address.
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <label for="validationCustom07" class="form-label">DATE OF BIRTH(dd/mm/yyyy)</label>
                                <input type="text" class="form-control" id="validationCustom07" name="date_of_birth" value="<?= $credentials['date_of_birth'];?>" autocomplete="off" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a date of birth.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom08" class="form-label">PLACE OF BIRTH</label>
                                <input type="text" class="form-control" id="validationCustom08" name="place_of_birth" value="<?= $credentials['place_of_birth'];?>" autocomplete="off" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a place of birth.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom09" class="form-label">GENDER (MALE OR FEMALE)</label>
                                <input type="text" class="form-control" id="validationCustom09" name="gender" value="<?= $credentials['gender'];?>" autocomplete="off" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please choose gender.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="validationCustom10" class="form-label">CIVIL STATUS (SINGLE/MARRIED/WINDOWED/SEPERATED/OTHER(S))</label>
                                <input type="text" class="form-control" id="validationCustom10" name="civil_status" value="<?= $credentials['civil_status'];?>" autocomplete="off" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please choose civil status.
                                </div>
                            </div>

                          

                            <div class="col-md-12">
                                <label for="validationCustom11" class="form-label">CITIZENSHIP (FILIPINO/DUAL CITIZENSHIP/ BY BIRTH / BY NATURALIZATION)</label>
                                <input type="text" class="form-control" id="validationCustom11" name="citizenship" value="<?= $credentials['citizenship'];?>" autocomplete="off" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    You choose citizenship.
                                </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>

                        
                        <?= form_close();?>

                        <hr>

                        <h3 class="font-weight-bolder text-dark text-gradient">RESIDENTIAL ADDRESS</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>
                        <?php if ($this->session->flashdata('success_res')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your residential address has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                           <?php if ($this->session->flashdata('success_add')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your residential address has been successfully added.
                                </div>
                            </div>

                        <?php endif; ?>

                        <?php if ($this->session->flashdata('form_res_id')) : ?>

                        <?= form_open("Info/res_update", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="res_id" value="<?= $res['res_id'];?>">

                        

                            <div class="col-md-4">
                                <label for="validationCustom016" class="form-label">HOUSE/BLOCK/LOT.NO</label>
                                <input type="text" class="form-control" id="validationCustom016" name="res_lot_no" required autocomplete="off" value="<?= $res['res_lot_no'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide house/block/lot.no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom017" class="form-label">STREET</label>
                                <input type="text" class="form-control" id="validationCustom017" name="res_street" required autocomplete="off" value="<?= $res['res_street'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide street.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom018" class="form-label">SUBDIVISION/VILLAGE</label>
                                <input type="text" class="form-control" id="validationCustom018" name="res_subdivision" required autocomplete="off" value="<?= $res['res_subdivision'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide subdivision.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom019" class="form-label">BARANGAY</label>
                                <input type="text" class="form-control" id="validationCustom019" name="res_brgy" required autocomplete="off" value="<?= $res['res_brgy'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide barangay.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom012" class="form-label">CITY/MUNICIPALITY</label>
                                <input type="text" class="form-control" id="validationCustom012" name="res_city" required autocomplete="off" value="<?= $res['res_city'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide city.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom0122" class="form-label">PROVINCE</label>
                                <input type="text" class="form-control" id="validationCustom0122" name="res_prov" required autocomplete="off" value="<?= $res['res_prov'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide province.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom0123" class="form-label">ZIP CODE</label>
                                <input type="text" class="form-control" id="validationCustom0123" name="res_zip" required autocomplete="off" value="<?= $res['res_zip'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide zip code.
                                </div>
                            </div>

                        <?php endif; ?>

                            <?php if ($this->session->flashdata('form_res')) : ?>

                        <?= form_open("Info/res_add", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="applicant_id" value="<?= $credentials['applicant_id'];?>">

                        

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">HOUSE/BLOCK/LOT.NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_lot_no" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide house/block/lot.no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">STREET</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_street" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide street.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SUBDIVISION/VILLAGE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_subdivision" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide subdivision.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">BARANGAY</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_brgy" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide barangay.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">CITY/MUNICIPALITY</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_city" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide city.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PROVINCE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_prov" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide province.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">ZIP CODE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="res_zip" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide zip code.
                                </div>
                            </div>

                         <?php endif; ?>


                            <div class="col-12">  
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>

                        <?= form_close();?>

                        <hr>

                        <h3 class="font-weight-bolder text-dark text-gradient">PERMANENT ADDRESS</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>
                        <?php if ($this->session->flashdata('success_per')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your permanent address has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                           <?php if ($this->session->flashdata('success_add_per')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your permanent address has been successfully added.
                                </div>
                            </div>

                        <?php endif; ?>

                        <?php if ($this->session->flashdata('form_per_id')) : ?>

                        <?= form_open("Info/per_update", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="per_id" value="<?= $per['per_id'];?>">

                        

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">HOUSE/BLOCK/LOT.NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_lot_no" required autocomplete="off" value="<?= $per['per_lot_no'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide house/block/lot.no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">STREET</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_street" required autocomplete="off" value="<?= $per['per_street'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide street.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SUBDIVISION/VILLAGE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_subdivision" required autocomplete="off" value="<?= $per['per_subdivision'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide subdivision.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">BARANGAY</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_brgy" required autocomplete="off" value="<?= $per['per_brgy'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide barangay.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">CITY/MUNICIPALITY</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_city" required autocomplete="off" value="<?= $per['per_city'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide city.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PROVINCE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_prov" required autocomplete="off" value="<?= $per['per_prov'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide province.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">ZIP CODE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_zip" required autocomplete="off" value="<?= $per['per_zip'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide zip code.
                                </div>
                            </div>

                        <?php endif; ?>

                            <?php if ($this->session->flashdata('form_per')) : ?>

                        <?= form_open("Info/per_add", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="applicant_id" value="<?= $credentials['applicant_id'];?>">

                        

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">HOUSE/BLOCK/LOT.NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_lot_no" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide house/block/lot.no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">STREET</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_street" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide street.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SUBDIVISION/VILLAGE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_subdivision" required autocomplete="off">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide subdivision.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">BARANGAY</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_brgy" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide barangay.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">CITY/MUNICIPALITY</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_city" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide city.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PROVINCE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_prov" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide province.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">ZIP CODE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="per_zip" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide zip code.
                                </div>
                            </div>

                         <?php endif; ?>


                            <div class="col-12">  
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>

                        <?= form_close();?>

                         <hr>

                        <h3 class="font-weight-bolder text-dark text-gradient">OTHER INFORMATIONS</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>
                        <?php if ($this->session->flashdata('success_personal')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your other informations has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                           <?php if ($this->session->flashdata('success_add_personal')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your other informations has been successfully added.
                                </div>
                            </div>

                        <?php endif; ?>

                        <?php if ($this->session->flashdata('form_personal')) : ?>

                        <?= form_open("Info/add_other", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="applicant_id" value="<?= $credentials['applicant_id'];?>">

                        

                             <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">HEIGHT(M)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="height" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide height.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">WEIGHT(KG)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="weight" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide weight.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">BLOOD TYPE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="blood_type" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide blood type.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">GSIS ID NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="gsis" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide gsis no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PAG IBIG ID NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="pagibig" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide pag ibig no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PHILHEALTH NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="philhealth" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide philhealth no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SSS NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="sss" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide sss no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">TIN NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="tin" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide tin no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">AGENCY EMPLOYEE NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="employee_no" required autocomplete="off" >
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide agency employee no.
                                </div>
                            </div>


                         <?php endif; ?>



                        <?php if ($this->session->flashdata('form_personal_id')) : ?>

                        <?= form_open("Info/update_other", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                            <input type="hidden" name="personal_id" value="<?= $other['personal_id'];?>">

                        

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">HEIGHT(M)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="height" required autocomplete="off" value="<?= $other['height'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide height.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">WEIGHT(KG)</label>
                                <input type="text" class="form-control" id="validationCustom01" name="weight" required autocomplete="off" value="<?= $other['weight'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide weight.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">BLOOD TYPE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="blood_type" required autocomplete="off" value="<?= $other['blood_type'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide blood type.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">GSIS ID NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="gsis" required autocomplete="off" value="<?= $other['gsis'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide gsis no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PAG IBIG ID NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="pagibig" required autocomplete="off" value="<?= $other['pagibig'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide pag ibig no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">PHILHEALTH NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="philhealth" required autocomplete="off" value="<?= $other['philhealth'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide philhealth no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">SSS NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="sss" required autocomplete="off" value="<?= $other['sss'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide sss no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">TIN NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="tin" required autocomplete="off" value="<?= $other['tin'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide tin no.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">AGENCY EMPLOYEE NO</label>
                                <input type="text" class="form-control" id="validationCustom01" name="employee_no" required autocomplete="off" value="<?= $other['employee_no'];?>">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide agency employee no.
                                </div>
                            </div>



                        <?php endif; ?>

                            

                            <div class="col-12">  
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>

                        <?= form_close();?>
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