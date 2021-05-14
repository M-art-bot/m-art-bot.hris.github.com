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
                      
                        <a class="text-center nav-link text-dark bg-gradient-gray" href="<?= base_url();?>candidates-education">Educational Background</a><hr>
                        <a class="text-center nav-link text-white bg-gradient-primary"href="<?= base_url();?>candidates-civil">Civil Service Eligibility</a><hr>
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

                        <h3 class="font-weight-bolder text-dark text-gradient">Civil Service Elegibility</h3>
                        <p>Type N/A IF NOT APPLICABLE</p>


                        <?php if ($this->session->flashdata('success_civil')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your civil service elegibility has been successfully updated.
                                </div>
                            </div>

                        <?php endif; ?>

                           <?php if ($this->session->flashdata('success_add_civil')) : ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                   Your civil service elegibility has been successfully added.
                                </div>
                            </div>

                        <?php endif; ?>


                       <?php if ($this->session->flashdata('form_civil')) : ?>

                       <?= form_open("Info/civil_add", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                        <div class="table-responsive p-0">

                            <table class="table table-stripe" id="career" style="width:100%" >
                                <thead>
                                    <tr>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>

                               <tbody>
                                 <tr id="row_1">
                                   <td> 
                                   
                                            <label class="form-label">CAREER SERVICE</label>
                                            <input type="text" name="career_service[]" id="career_service_1" class="form-control" autocomplete="off" required placeholder="Career Service">
                                            <input type="hidden" name="career_service_value[]" id="career_service_value_1" class="form-control" autocomplete="off">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide Career Service
                                            </div>
                                     
                                    </td>
                                    <td>
                                            <label class="form-label">RATING</label>
                                            <input type="text" name="rating[]" id="rating_1" class="form-control" placeholder="Rating"autocomplete="off" required>
                                            <input type="hidden" name="rating_value[]" id="rating_value_1" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide Rating
                                            </div>
                                    
                                    </td>
                                    <td>
                                       
                                            <label class="form-label">DATE OF EXAMINATION</label>
                                            <input type="text" name="date_of_examination[]" id="career_service_1" class="form-control" autocomplete="off" required placeholder="Date of Examination">
                                            <input type="hidden" name="date_of_examination_value[]" id="career_service_value_1" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide Date of Examination
                                            </div>
                                     
                                    </td>
                                    <td>
                                      
                                            <label class="form-label">PLACE OF EXAMINATION</label>
                                            <input type="text" name="place_of_examination[]" id="place_of_examination_1" class="form-control" autocomplete="off" required placeholder="Place of Examination">
                                            <input type="hidden" name="place_of_examination_value[]" id="place_of_examination_value_1" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                 Please provide Place of Examination
                                            </div>
                                        
                                    </td>
                                    <td>
                                      
                                            <label class="form-label">LICENSE NUMBER</label>
                                            <input type="text" name="license_number[]" id="license_number_1" placeholder="Number" class="form-control" autocomplete="off" required>
                                            <input type="hidden" name="license_number_value[]" id="license_number_value_1" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide License number
                                            </div>
                                                                            
                                             <label class="form-label">LICENSE DATE OF VALIDITY</label>
                                            <input type="text" name="date_of_validity[]" id="career_service_1" class="form-control" autocomplete="off" required placeholder="Date of validity.">
                                            <input type="hidden" name="date_of_validity_value[]" id="career_service_value_1" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide License date of validity.
                                            </div>
                                       
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button>
                                    </td>
                                 </tr>
                               </tbody>

                            </table>

                        </div>

                    <?php endif; ?>

                    <?php if ($this->session->flashdata('form_civil_id')) : ?>
                    <?= form_open("Info/civil_update", array('class'=>'row g-3 needs-validation', 'novalidate'=>''))?>

                        <div class="table-responsive p-0">

                            <table class="table table-stripe" id="career" style="width:100%" >
                                <thead>
                                    <tr>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9"></th>
                                      <th><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>

                               <tbody>
                
                       
                                    <?php $x = 1; ?>
                                        <?php foreach ($order_data['order_item'] as $key => $val): ?>
                                            <tr id="row_<?= $x;?>">
                                   <td>     
                                            <input type="hidden" name="civil_id_value[]" id="civil_id_value_<?= $x;?>" value="<?php echo $val['civil_id']; ?>" class="form-control" autocomplete="off" >

                                            <label class="form-label">CAREER SERVICE </label>
                                            <input type="text" name="career_service[]" id="career_service_<?= $x;?>" class="form-control" autocomplete="off" required placeholder="Career Service" value="<?php echo $val['civil_service']; ?>">
                                            <input type="hidden" name="career_service_value[]" id="career_service_value_<?= $x;?>" class="form-control" autocomplete="off" >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide Career Service
                                            </div>
                                     
                                    </td>
                                    <td>
                                            <label class="form-label">RATING</label>
                                            <input type="text" name="rating[]" id="rating_1" class="form-control" placeholder="Rating"autocomplete="off" value="<?php echo $val['rating']; ?>"required>
                                            <input type="hidden" name="rating_value[]" id="rating_value_<?= $x;?>" value="<?php echo $val['rating']; ?>"class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide Rating
                                            </div>
                                    
                                    </td>
                                    <td>
                                       
                                            <label class="form-label">DATE OF EXAMINATION</label>
                                            <input type="text" name="date_of_examination[]" id="career_service_<?= $x;?>" class="form-control" autocomplete="off" required placeholder="Date of Examination" value="<?php echo $val['date_of_examination']; ?>">
                                            <input type="hidden" name="date_of_examination_value[]" value="<?php echo $val['date_of_examination']; ?>"id="career_service_value_<?= $x;?>" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide Date of Examination
                                            </div>
                                     
                                    </td>
                                    <td>
                                      
                                            <label class="form-label">PLACE OF EXAMINATION</label>
                                            <input type="text" name="place_of_examination[]" id="place_of_examination_<?= $x;?>" value="<?php echo $val['place_of_examination']; ?>"class="form-control" autocomplete="off" required placeholder="Place of Examination">
                                            <input type="hidden" name="place_of_examination_value[]" value="<?php echo $val['place_of_examination']; ?>" id="place_of_examination_value_<?= $x;?>" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                 Please provide Place of Examination
                                            </div>
                                        
                                    </td>
                                    <td>
                                      
                                            <label class="form-label">LICENSE NUMBER</label>
                                            <input type="text" name="license_number[]" id="license_number_<?= $x;?>" value="<?php echo $val['license_number']; ?>"placeholder="Number" class="form-control" autocomplete="off" required>
                                            <input type="hidden" name="license_number_value[]" value="<?php echo $val['license_number']; ?>"id="license_number_value_<?= $x;?>" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide License number
                                            </div>
                                                                            
                                             <label class="form-label">LICENSE DATE OF VALIDITY</label>
                                            <input type="text" name="date_of_validity[]" id="career_service_<?= $x;?>" class="form-control" autocomplete="off" required placeholder="Date of validity." value="<?php echo $val['date_of_validity']; ?>">
                                            <input type="hidden" alue="<?php echo $val['date_of_validity']; ?>" name="date_of_validity_value[]" id="career_service_value_<?= $x;?><?= $x;?>" class="form-control" autocomplete="off">
                                             <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide License date of validity.
                                            </div>
                                       
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-default" onclick="removeRow('<?= $x;?>')"><i class="fa fa-close"></i></button>
                                    </td>

                                    <?php $x++; ?>
                                        <?php endforeach; ?>
                              
                                </tbody>
                            </table>

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

$("#add_row").unbind('click').bind('click', function() {
      var table = $("#career");
      var count_table_tbody_tr = $("#career tbody tr").length;
      var row_id = count_table_tbody_tr + 1;
 

               var html = '<tr id="row_'+row_id+'">'+
                    '<td><input type="text" name="career_service[]" id="career_service_'+row_id+'" class="form-control"  required placeholder="Career Service"><input type="hidden" name="career_service_value[]" id="career_service_value_'+row_id+'" class="form-control"><div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please provide Career Service</div></td>'+

                     '<td><input type="text" name="rating[]" placeholder="Rating"autocomplete="off" required id="rating'+row_id+'" class="form-control"><input type="hidden" name="rating_value[]" id="rating_value_'+row_id+'" class="form-control"><div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please provide Rating</div></td>'+

                      '<td><input type="text" name="date_of_examination[]" id="date_of_examination_'+row_id+'" class="form-control"  required placeholder="Date of Examination"><input type="hidden" name="date_of_examination_value[]" id="date_of_examination_value_'+row_id+'" class="form-control"><div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please provide Date of Examination</div></td>'+

                       '<td><input type="text" name="place_of_examination[]" id="place_of_examination_'+row_id+'" class="form-control"  required placeholder="Place of Examination"><input type="hidden" name="place_of_examination_value[]" id="place_of_examination_value_'+row_id+'" class="form-control"><div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please provide Place of Examination</div></td>'+

                        '<td><input type="text" name="license_number[]" id=license_number_'+row_id+'" class="form-control"  required placeholder="License Number"><input type="hidden" name="license_number_value[]" id="license_number_value_'+row_id+'" class="form-control"><div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please provide License Number</div><input type="text" required placeholder="Date of validity." name="date_of_validity[]" id="date_of_validity_'+row_id+'" class="form-control"><input type="hidden" name="date_of_validity_value[]" id="date_of_validity_value_'+row_id+'" class="form-control"><div class="valid-feedback">Looks good!</div><div class="invalid-feedback">Please provide License Date of validity</div></td>'+

                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#career tbody tr:last").after(html);  
              }
              else {
                $("#career tbody").html(html);
              }

             

          })
   
    function removeRow(tr_id)
  {
    $("#career tbody tr#row_"+tr_id).remove();

  }

  
</script>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
</svg>