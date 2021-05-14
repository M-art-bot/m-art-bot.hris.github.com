<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <label class="control-label col-md-3">Job Title</label>
                            <div class="col-md-9">
                                <input name="job_title" id="job_title" placeholder="Job Title" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Remote Job ?</label>
                            <div class="col-md-9">
                                <select name="remote_job" class="form-control" id="remote_job" required="">
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employment Term ?</label>
                            <div class="col-md-9">
                                <select name="employment_term" class="form-control" id="employment_term" required="">
                                    <option value="Permanent">Permanent</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Temporary">Temporary</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Employment Type ?</label>
                            <div class="col-md-9">
                                <select name="employment_type" class="form-control" id="employment_term" required="">
                                    <option value="Full-time">Full-time</option>
                                    <option value="Part time">Part Time</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pay Rate ?</label>
                            <div class="col-md-9">
                                <input name="pay_rate" id="pay_rate" placeholder="Pay rate" class="form-control" type="text" required>
                                <label></label>
                                <select name="pay_rate_2" class="form-control" id="pay_rate" required="">
                                    <option value="Anum">Anum</option>
                                    <option value="Month">Month</option>
                                    <option value="Hour">Hour</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Job Description</label>
                            <div class="col-md-9">
                                <textarea name="job_description" id="job_description" placeholder="Job Description" class="form-control" required></textarea>
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


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <button class="btn btn-success" onclick="add_new_job()"><i class="fa fa-plus"></i> Add New Job</button>
                            <table id="recruitment" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text center text-secondary text-md font-weight-bolder opacity-9">Jobs</th>
                                        <th class="text-uppercase  text center text-secondary text-md font-weight-bolder opacity-9">Candidates</th>
                                        <th class="text-uppercase  text center text-secondary text-md font-weight-bolder opacity-9">Actions</th>
                                       
                                      
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
                "url": "<?php echo site_url('recruitment/ajax_list')?>",
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
    $('.modal').modal('show'); // show bootstrap modal
    $('.modal-title').text('Create a Job'); // Set Title to Bootstrap modal title

}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
    
    if(save_method == 'add') {
        url = "<?php echo base_url();?>recruitment/ajax_add";
   
    } else {
        url = "<?php echo base_url();?>recruitment/ajax_update)?>";
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
                $('.modal').modal('hide');
                reload_table();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
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

