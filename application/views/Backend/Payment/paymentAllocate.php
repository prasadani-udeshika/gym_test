<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('BPAllocate') ?>">Payment</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Manage Payment</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add Payment Form</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                      <form method="post" enctype="multipart/form-data" autocomplete="off" id="formAddSProduct">
                        <div class="form-group row mb-4">
                            <label for="txtReviewTopic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Payment Type</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <!-- <input type="search" class="form-control" id="txtPaymentName" name="txtPaymentName"> -->
                                    <select class="form-control" name="slpayment" id="slpayment">
                                    <option value="">Select</option>
                                           <?php
                      if(isset($data1))
                      {
                        foreach($data1 as $cnt)
                        {
                          print "<option value='".$cnt['payment_id']."'>".$cnt['payment_name']."</option>";
                        }
                      } 
                      ?>
                                    </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtReviewDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Name</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <!-- <input type="search" class="form-control" id="txtname" name="txtname"> -->
                                <select class="form-control" name="txtname" id="txtname">
                                    <option value="">Select</option>
                                           <?php
                      if(isset($data2))
                      {
                        foreach($data2 as $cnt)
                        {
                          print "<option value='".$cnt['customer_id']."'>".$cnt['customer_name']."</option>";
                        }
                      } 
                      ?>
                                    </select>
                            </div>
                        </div>

                   
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary mt-3">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="tblReviews" class="table table-hover" style="width:100%">
                        </table>
                    </div>
                </div>

                <br/>
                <div id="updateDiv">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Edit Flavour Form</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <form method="post" autocomplete="off" id="formUpdateSProduct">
                            
                            <div class="form-group row mb-4">
                                <label for="txtUPaymentName" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Payment Name</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <!-- <input type="search" class="form-control" id="Uslpayment" name="Uslpayment"> -->
                                    <input type="hidden" class="form-control" id="txtUPAID" name="txtUPAID">
                                     <select class="form-control" name="Uslpayment" id="Uslpayment">
                                    <option value="">Select</option>
                                           <?php
                      if(isset($data1))
                      {
                        foreach($data1 as $cnt)
                        {
                          print "<option value='".$cnt['payment_id']."'>".$cnt['payment_name']."</option>";
                        }
                      } 
                      ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUReviewDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <!-- <input type="search" class="form-control" id="txtUname" name="txtUname"> -->
                                    <select class="form-control" name="txtUname" id="txtUname">
                                    <option value="">Select</option>
                                           <?php
                      if(isset($data2))
                      {
                        foreach($data2 as $cnt)
                        {
                          print "<option value='".$cnt['customer_id']."'>".$cnt['customer_name']."</option>";
                        }
                      } 
                      ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    let dTable;

    function edit(id){
        $('#updateDiv').show()

        $.ajax({
            url: "<?php echo base_url(''); ?>/BPAllocate/getPAllocateData",
            data: {ID : id},
            method: "post",
            dataType: "json",
            error: function(error){
                console.log(error);
                $.notify("Internal server error", "error");

            },
            success: function(r){

                $('#Uslpayment').val(r.data[0].customer_id);
                $('#txtUname').val(r.data[0].payment_id);
                $('#txtUPAID').val(r.data[0].id);
            }
        });
    }

    function del(id){
        $.confirm({
            icon: 'fa fa-trash',
            title: 'Delete Review',
            content: 'Do you want to delete this review details?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: {
                    text: 'Delete',
                    btnClass: 'btn-red',
                    action: function(){

                        $.ajax({
                            url: "<?php echo base_url(''); ?>/BPAllocate/deletePAllocate",
                            data: {ID : id},
                            method: "post",
                            dataType: "json",
                            error: function(error){
                                console.log(error);
                                dTable.ajax.reload();
                                dTable.draw();
                                $.notify("Internal server error", "error");

                            },
                            success: function(r){
                                dTable.ajax.reload();
                                dTable.draw();

                                if(r.result){
                                    $.alert({
                                        icon: 'fa fa-check',
                                        title: 'Success',
                                        content: 'Details have deleted',
                                        type: 'green',
                                        btnClass: 'btn-green'
                                    });
                                }else{
                                    $.alert({
                                        icon: 'fa fa-times',
                                        title: 'Error',
                                        content: 'Operation failed',
                                        type: 'red',
                                        btnClass: 'btn-red'
                                    });
                                }
                            }
                        });


                    }
                },
                close: function () {

                }
            }
        });
    }

    $(document).ready(function() {

        dTable = $('#tblReviews').DataTable({
            "processing": true,
            "initComplete": function (settings, json) {
                $("#tblReviews").show();
            },
            "serverSide": true,
            "select": true,
            "searching": true,
            "bDestroy": true,
            "dataSrc": "tableData",
            "columns": [
                {"data": "id", "name": " ID", "title": "payment ID"},
                {"data": "payment_name", "name": "Payment Name", "title": "Payment Name"},
                {"data": "customer_id", "name": "Customer Name", "title": "Customer Name"},
              
           
                {"data": "id", "name": "Action", "title": "Action",
                    mRender: function (id) {
                        return '<td class="text-center"><ul class="table-controls">\n' +
                            '<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><button onclick="edit(\''+id+'\')" class="btn btn-outline-info" ><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>\n' +
                            '<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><button onclick="del(\''+id+'\')" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>\n' +
                            '</ul></td>'
                    }
                }
            ],
            "language": {
                "emptyTable": "No subjects to show..."
            },
            "ajax": {
                "url": '<?php echo base_url(''); ?>/BPAllocate/getPAllocateForTable',
                "dataType": "json",
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            columnDefs: [ {
                targets: [ 0 ],
                orderData: [ 0, 1 ]
            }, {
                targets: [ 1 ],
                orderData: [ 1, 0 ]
            }, {
                targets: [ 2 ],
                orderData: [ 2, 0 ]
            } ]
        });

        $('#updateDiv').hide()

        // new FileUploadWithPreview('reviewerImage')

        $("#formAddSProduct").validate({
            ignore: [],
            rules: {
                slpayment: {
                    required: true
                },
                txtname: {
                    required: true
                }
            },
            messages: {
                slpayment: {
                    required: 'Payment Name  required!'
                },
                txtname: {
                    required: 'Customer required!'
                }
            },
            submitHandler: function (form) {

                let formData = new FormData(form);

                $.ajax({
                    url: '<?php echo base_url('BPAllocate/addPAllocate'); ?>',
                    data: formData,
                    dataType: 'json',
                    method: 'post',
                    processData: false,
                    enctype: 'multipart/form-data',
                    contentType: false,
                    cache: false,
                    error: function(error){
                        dTable.ajax.reload();
                        dTable.draw();
                        $.notify("Internal server error", "error");
                    },
                    success: function(r){

                        dTable.ajax.reload();
                        dTable.draw();

                        if(r.status == 200){
                            $.notify(r.message, "success");
                        }

                        if(r.status == 500){
                            $.notify(r.message, "error");
                        }

                    }
                });
            }
        });

        $("#formUpdateSProduct").validate({
            ignore: [],
            rules: {
                Uslpayment: {
                    required: true
                },
                txtUname: {
                    required: true
                }
            },
            messages: {
                Uslpayment: {
                    required: 'name required!'
                },
                txtUname: {
                    required: 'Amount required!'
                }
            },
            submitHandler: function (form) {

                $.ajax({
                    url: '<?php echo base_url('BPAllocate/updatePAllocate'); ?>',
                    data: $('#formUpdateSProduct').serializeArray(),
                    dataType: 'json',
                    method: 'post',
                    error: function(error){
                        dTable.ajax.reload();
                        dTable.draw();
                        $.notify("Internal server error", "error");
                    },
                    success: function(r){

                        dTable.ajax.reload();
                        dTable.draw();

                        if(r.status == 200){
                            $('#updateDiv').hide()
                            $.notify(r.message, "success");
                            $('#txtServiceName').val("")
                        }

                        if(r.status == 500){
                            $.notify(r.message, "error");
                        }

                    }
                });
            }
        });
    });

</script>
