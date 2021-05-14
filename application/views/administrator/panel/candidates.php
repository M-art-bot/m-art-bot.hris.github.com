<div class="modal modal_add_job fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="#" id="form" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input name="first_name" id="first_name" placeholder="First Name" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
             </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="actions modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-titles" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="#" id="form1" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Move to:</label>
                            <div class="col-md-9">
                                <input type="hidden" name="applicant_id" id="applicant_id">
                                <select  name="action_id" id="action_id" placeholder="Move to" class="form-control" type="text" required>
                                    <?php foreach($move as $move_to): ?>
                                        <option value="<?php echo $move_to['action_id'];?>"><?php echo $move_to['action_type'];?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
             </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save1()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="form_2 modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-titles" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="#" id="form_2" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Rate:</label>
                            <div class="col-md-9">
                                

                                <input type="hidden" name="applicant_ids" id="applicant_ids">

                                <select  name="rate" id="rate" placeholder="Rate it from (1-5)" class="form-control" type="text" required>
                                    <option value="0">0 star</option>
                                    <option value="1">1 star</option>
                                    <option value="2">2 star</option>
                                    <option value="3">3 star</option>
                                    <option value="4">4 star</option>
                                    <option value="5">5 star</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Activity</label>
                            <div class="col-md-9">                     
                                <textarea class="form-control" name="activity" id="activity" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                    </div>
             </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save2()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-4">
    <div class="row">
         <div class="col-4">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <h4 class="text-center"><?= $jobs['job_title'];?></h4>
                    <hr>
                    <small>
                        <?php foreach($move_list as $move_tos): ?>
                       
                            <a class="text-center nav-link text-white bg-gradient-primary"href="<?=base_url();?>administrator-enlists-candidates/<?php echo $move_tos->action_id.'/'.$jobs['job_id'];?>">
                                <?php echo $move_tos->action_type;?> (<?php echo $move_tos->status;?>)
                            </a>
                               <?php $val = $move_tos->action_type; ?>
                        <?php endforeach; ?>

                         <hr>


                           <!--  echo '<a class="text-center nav-link text-white bg-gradient-primary"href="">'.$move_to["action_type"].'</a>'; -->
                        <?php 
                            foreach($move as $move_to):
                                if($val != $move_to["action_type"]){
                                   echo '<a class="text-center nav-link text-white bg-gradient-dark"href="#">'.$move_to["action_type"].' (0)</a>';
                                }
                            endforeach;
                        ?>

                    </small>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
           
                    <div class="table-responsive p-0">
                        
                        <button class="btn btn-success btn-sm" onclick="add_new_job()"><i class="fa fa-plus"></i> Add New Candidate</button>    
                            <table id="recruitment" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9">No</th>
                                        <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9">First Name</th>
                                        <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9">Ratings</th>
                                        <th class="text-uppercase  text center text-secondary text-md font-weight-bolder opacity-9">Actions</th> <a href=""></a>
                                       
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">Admin Officer II</span>
                                        </td>
                                        <td><span class="badge badge-sm bg-gradient-primary">0</span></td>
                                        <td><a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">View</a></td>
                                        <td></td>
                                    </tr> -->
                                </tbody>
                                
                            </table>
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

var save_method;
var table;

$(document).ready(function() {
table = $('#recruitment').DataTable(
        {
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
     
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('candidates/ajax_list/').$jobs['job_id']?>",
                "type": "POST"
            },
     
            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            ],
           
        }
    );
});

function add_new_job()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('.modal_add_job').modal('show'); // show bootstrap modal
    $('.modal-title').text('Create a Candidate'); // Set Title to Bootstrap modal title

}

function move_to(id)
{
    save_method = 'update';
    $('#form1')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
   //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('candidates/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="applicant_id"]').val(data.applicant_id);
            $('.actions').modal('show');
            $('.modal-titles').text('Move to'); 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function rate_to(id)
{
    save_method = 'rate';
    $('#form_2')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
   //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('candidates/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="applicant_ids"]').val(data.applicant_id);
            $('.form_2').modal('show');
            $('.modal-titles').text('Activity'); 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo base_url();?>candidates/ajax_add";

    } 

    if(save_method == 'rate') {
        url = "<?php echo base_url();?>candidates/ajax_rate";
    
    }
    else {
        url = "<?php echo base_url();?>candidates/ajax_update";
 
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "json",
       
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('.modal_add_job').modal('hide');
                reload_table();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
            location.reload();
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}

function save2()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 

     url = "<?php echo base_url();?>candidates/ajax_rate";
    

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form_2').serialize(),
        dataType: "json",
       
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('.modal').modal('hide');
                reload_table();
                 location.reload();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
            location.reload();
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}


function save1()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo base_url();?>candidates/ajax_add";
   
    } else {
        url = "<?php echo base_url();?>candidates/ajax_update";
     
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form1').serialize(),
        dataType: "json",
       
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('.modal').modal('hide');
                reload_table();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
            location.reload();
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

</script>
<!-- Modal -->

<style type="text/css">
    .fa-star{
        color:gold;
        font-weight: bolder;    }

</style>