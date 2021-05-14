<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0"><i class="fa fa-user-circle fixed-plugin-button-nav cursor-pointer"></i> PERSONAL DETAILS</h6></br>
                    <form class="form-inline">
                        <div class="row">
                            <hr>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>Last Name:</label>
                                    <input type="text" placeholder="Last Name" class="form-control col-sm-1" value="<?= $profile->last_name;?>" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>Fist Name:</label>
                                    <input type="text" placeholder="First Name" value="<?= $profile->first_name;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>Middle Name:</label>
                                    <input type="text" placeholder="Middle Name" value="<?= $profile->middle_name;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                          
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>Name Extension(JR,SR):</label>
                                    <input type="text" placeholder="EXTENSION NAME" value="<?= $profile->extension_name;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>GSIS NO:</label>
                                    <input type="text"  value="<?= $profile->gsis_no;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>PAG-IBIG NO:</label>
                                    <input type="text" value="<?= $profile->pagibig_no;?>" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>PHIL NO:</label>
                                    <input type="text" value="<?= $profile->phil_no;?>" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>SSS NO:</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->sss_no;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>TIN NO:</label>
                                    <input type="text" placeholder="Last Name"  value="<?= $profile->tin_no;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>TELEPHONE / CELLPHONE NO:</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->contact_no;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>EMAIL ADDRESS:</label>
                                    <input type="email" placeholder="Last Name" value="<?= $profile->email_address;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>RESEDENTIAL ADDRESS:</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->residential_address;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>PERMANENT ADDRESS:</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->permanent_address;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <hr>
                           <h6 class="mb-0"><i class="fa fa-school fixed-plugin-button-nav cursor-pointer"></i> EDUCATIONAL BACKGROUND</h6></br><HR>
                           <div class="col-8">
                                <div class="form-group form-group-sm">
                                    <label>NAME OF SCHOOL (ELEMENTARY)</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->es_name;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>GRADUATION YEAR</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->es_year;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                          <div class="col-8">
                                <div class="form-group form-group-sm">
                                    <label>NAME OF SCHOOL (SECONDARY)</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->secondary_name;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>GRADUATION YEAR</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->secondary_year;?>"  class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                         <div class="col-8">
                                <div class="form-group form-group-sm">
                                    <label>NAME OF SCHOOL (VOCATIONAL / TRADE COURSE)</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->voc_name;?>"  class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>GRADUATION YEAR</label>
                                    <input type="text" placeholder="Last Name"  value="<?= $profile->voc_year;?>"class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                       <div class="col-8">
                                <div class="form-group form-group-sm">
                                    <label>NAME OF SCHOOL (COLLEGE)</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->college_name;?>"class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>GRADUATION YEAR</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->college_year;?>"class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                        <div class="col-8">
                                <div class="form-group form-group-sm">
                                    <label>NAME OF SCHOOL (GRADUATE STUDIES)</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->grad_name;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>GRADUATION YEAR</label>
                                    <input type="text" placeholder="Last Name" value="<?= $profile->grad_year;?>" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            
                            <hr>
                           <h6 class="mb-0"><i class="fa fa-tasks fixed-plugin-button-nav cursor-pointer"></i> LATEST WORK EXPERIENCE

                            </h6></br><HR>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>POSITION TITLE:</label>
                                    <input type="date" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>DEPARTMENT / AGENCY/ COMPANY / OFFICE NAME</label>
                                    <input type="text" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>POSITION LEVEL</label>
                                    <input type="date" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group form-group-sm">
                                    <label>JOINED DURATION</label>
                                    <input type="date" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                    to
                                    <input type="text" placeholder="Last Name" class="form-control col-sm-1" readonly>
                                </div>
                            </div>
                            <HR>
                             <h6 class="mb-0"><i class="fa fa-paperclip fixed-plugin-button-nav cursor-pointer"></i> ATTACHMENTS</h6></br><HR>
                        </div>
                        <a href="javascript:window.history.go(-1);"><< BACK</a>
                    </form>
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
