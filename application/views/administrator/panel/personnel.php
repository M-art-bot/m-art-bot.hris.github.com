<div class="container-fluid py-4">
    <div class="row">
         <div class="col-4">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <h4 class="text-center">On Board</h4>
                    <hr>
                    <small>
                        <a class="text-center nav-link text-white bg-gradient-primary"href="#">Employee Informations</a>
                    </small>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
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
                "url": "<?php echo site_url('personnel/ajax_list/').'8'?>",
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