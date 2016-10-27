<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

  <style type="text/css">
    .release-content {padding: 20px 30px;}
    .release-content h2 {font-size: 18px;}
    .release-content .form-group {width: 100%;}
    .release-content .input-group {width: 100%; overflow: hidden;}

    /*.form-control {overflow: hidden;}*/
    th, td {text-align: center;}
    .select2-container {width: 100% !important;}
  </style>
</head>

<body>
  <div class="container">
    <div class="row">

      <div class="col-sm-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <section class="content-header">
              <h1>Release Page</h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active"><a href="#">Release</a></li>
              </ol>
            </section>
            <br>
          </div><!-- box-body -->

          <div ><!-- /.box-header -->
            <div class="box-body">
            
              <div class="row">
                <div class="col-sm-12">
                  <div class="row release-content">

                      <h2>Please fill in the following fields:</h2>
                      <form class="form-inline" id="form-potchi">

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="sr-only" for="select-item">Item</label>
                            <div class="input-group">
                              <div class="input-group-addon">Item</div>
                              <select class="form-control select-item select2" name="select-item">
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="sr-only" for="select-user">User</label>
                            <div class="input-group">
                              <div class="input-group-addon">User</div>
                              <select class="form-control select-user select2" name="select-user">
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group">
                            <label class="sr-only" for="release-date">Date</label>
                            <div class="input-group">
                              <div class="input-group-addon">Date</div>
                              <input type="text" name="release-date" class="form-control datepicker">
                            </div>
                          </div>
                        </div>

                    <!--     <div class="col-sm-3">
                          <div class="form-group">
                            <label class="sr-only" for="select-status">Status</label>
                            <div class="input-group">
                              <div class="input-group-addon">Status</div>
                              <select class="form-control" name="select-status">
                                <option value="Borrowed" selected="selected">Borrow</option>
                                <option value="Returned">Return</option>
                              </select>
                            </div>
                          </div>
                        </div> -->

                        <div class="col-sm-1">
                          <button onclick="potchi()" class="btn btn-primary">POTCHI!!</button>
                        </div>

                      </form>
                  </div>
                </div>

                <div class="col-sm-12">
                  <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>Device ID</th>
                              <th>Device Name</th>
                              <th>Date of Release</th>
                              <th>Date of Return</th>
                              <th>Status</th>
                              <th>Potchi</th>
                              <th>Controls</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
              </div>



            </div><!-- box-body -->
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="form-release" class="release-content" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Release Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="modal-release-form" class="form-horizontal">
                    <input type="hidden" value="" name="id" class="item-id" />
                    <div class="form-body">
                        <div class="form-group">
                          <label class="control-label col-md-3">Device Name</label>
                          <div class="col-md-9">
                              <select class="form-control modal-select-item select-item" name="modal-select-item">
                              </select>
                              <span class="help-block"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Culprit</label>
                          <div class="col-md-9">
                              <select class="form-control modal-select-user select-user" name="modal-select-user">
                              </select>
                              <span class="help-block"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Release Date</label>
                          <div class="col-md-9">
                               <input type="text" name="modal-release-date" class="form-control datepicker modal-release-date">
                              <span class="help-block"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Return Date</label>
                          <div class="col-md-9">
                               <input type="text" name="modal-return-date" class="form-control datepicker modal-return-date">
                              <span class="help-block"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Status</label>
                          <div class="col-md-9">
                              <select class="form-control modal-select-status" name="modal-select-status">
                                <option value="Borrowed">Borrowed</option>
                                <option value="Returned">Return</option>
                              </select>
                              <span class="help-block"></span>
                          </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="submit" id="btnSave" class="btn btn-primary">Save</button> -->
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $( ".datepicker" ).datepicker({
      'format': "yyyy-mm-dd"
    });

    $.ajax({
          type: 'GET',
          url: '<?php echo site_url("release/ajax_list_asset")?>',
          dataType:'JSON',
          success: function(result) {
            result.forEach(function(result) {
              $('.select-item').append($('<option>', {value: result.device_id, text: result.device_name}));
            })

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert("potchi");
              console.log(jqXHR);
              console.log(textStatus);
              console.log(errorThrown);
          }
        });

    $.ajax({
          type: 'GET',
          url: '<?php echo site_url("release/ajax_list_user")?>',
          dataType:'JSON',
          success: function(result) {
            result.forEach(function(result) {
              $('.select-user').append($('<option>', {value: result.user_id, text: result.user_name}));
            })

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert("potchi");
              console.log(jqXHR);
              console.log(textStatus);
              console.log(errorThrown);


          }
        });

    table = $('#table').DataTable({

        "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('release/ajax_populate')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });
});

  function potchi() {
    $.ajax({
        url: "<?php echo site_url('release/ajax_save_potchi')?>",
        type: "POST",
        data: $('#form-potchi').serializeArray(),
        dataType: "JSON",
        success: function(data)
        { 

            reload_table();
            // alert('Data saved, will do tables below this one next. xD')
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log($('#form-potchi').serializeArray());
            alert('sad');
        }
    });
  }

  function edit_asset(id) {
    save_method = 'update';
    $('#modal-release-form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('release/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('.item-id').val(data.release_id);

            $(".modal-select-item option").each(function() {
              $(this).removeAttr('selected');
              if($(this).val() == data.device_id ) {
                $(this).attr('selected', 'selected').change();
                $(".modal-select-item").val(data.device_id);

                $(".modal-select-item").select2();
              };
            });

            $(".modal-select-user option").each(function() {
              $(this).removeAttr('selected');
              if($(this).val() == data.emp_id ) {
                $(this).attr('selected', 'selected').change();
                $(".modal-select-user").val(data.emp_id);

                $(".modal-select-user").select2();
              };
            });

            $(".modal-select-status option").each(function() {
              $(this).removeAttr('selected');
              if($(this).val() == data.status ) {
                $(this).attr('selected', 'selected').change();
                $(".modal-select-status").val(data.status);
              };
            });

            $('.modal-release-date').val(data.release_date);
            $('.modal-return-date').val(data.return_date);

            $('#form-release').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Asset'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
  }

  function save() {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable

    // ajax adding data to database
    $.ajax({
        url : "<?php echo site_url('release/ajax_update')?>",
        type: "POST",
        data: $('#modal-release-form').serializeArray(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
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

    return false;
  }

  function reload_table() {
    table.ajax.reload(null,false); //reload datatable ajax
  }

  function delete_asset(id) {
  if(confirm('Are you sure delete this data?'))
  {
      // ajax delete data to database
      $.ajax({
          url : "<?php echo site_url('release/ajax_delete')?>/"+id,
          type: "POST",
          dataType: "JSON",
          success: function(data)
          {
              //if success reload ajax table
              $('#modal_form').modal('hide');
              reload_table();
              $.notify({
                  icon:'fa fa-check',
                  message: "Successfully Deleted!"
                },{
                  type: 'success'
              });
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error deleting data');
          }
      });

    }
}
</script>
</body>

