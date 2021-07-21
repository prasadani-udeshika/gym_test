
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('BProduct') ?>">User Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Add User</span></li>
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
                            <h4>Add User's Details Form</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" enctype="multipart/form-data" autocomplete="off" id="formAddSProduct">
                        <div class="form-group row mb-4">
                            <label for="txtCustomerName" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Name</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtCustomerName" name="txtCustomerName">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtCustomerBirthday" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Birthday</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="date" class="form-control" id="txtCustomerBirthday" name="txtCustomerBirthday">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtCustomerGender" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Gender</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <!-- <input type="search" class="form-control" id="txtCustomerGender" name="txtCustomerGender"> -->
                            <select class="form-control" id="txtCustomerGender" name="txtCustomerGender">
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Custom">Custom</option>
                            </select>
                            </div>
                        </div>

                          <div class="form-group row mb-4">
                            <label for="txtCustomerNic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtCustomerNic" name="txtCustomerNic">
                            </div>
                        </div>
                          <div class="form-group row mb-4">
                            <label for="txtCustomerAddress" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtCustomerAddress" name="txtCustomerAddress">
                            </div>
                        </div>
                          <div class="form-group row mb-4">
                            <label for="txtCustomerEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="email" class="form-control" id="txtCustomerEmail" name="txtCustomerEmail">
                            </div>
                        </div>
                          <div class="form-group row mb-4">
                            <label for="txtCustomerPhone" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtCustomerPhone" name="txtCustomerPhone">
                            </div>
                        </div>
                          <div class="form-group row mb-4">
                            <label for="txtCustomerHeight" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Height</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control" id="txtCustomerHeight" name="txtCustomerHeight">
                            </div>
                        </div>

                          <div class="form-group row mb-4">
                            <label for="txtCustomerWeight" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Weight</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="search" class="form-control"  id="txtCustomerWeight" name="txtCustomerWeight">
                            </div>
                        </div>
                        <!-- <div id="result"></div> -->
                        <div class="form-group row mb-4">
                            <label for="txtCustomerWeight" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">BMI</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10"  id="result"> 
                               
                            </div>
                        </div>
        
                          <div class="form-group row mb-4">
                            <label for="txtCustomerDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Special Note</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="textarea" class="form-control" id="txtCustomerDescription" name="txtCustomerDescription">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="txtCustomerImage" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Image (270 x 270)</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <div class="custom-file-container" data-upload-id="customerImage">
                                    <label><a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">Clear Image</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="txtCustomerImage" id="txtCustomerImage" accept="image/*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" id=btn class="btn btn-primary mt-3">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="tblFlavours" class="table table-hover" style="width:100%">
                        </table>
                    </div>
                </div>

                <br/>
                <div id="updateDiv">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Edit Customer Form</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <form method="post" autocomplete="off" id="formUpdateSProduct">
                            <div class="form-group row mb-4">
                                <label for="txtUCustomerName" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUCustomerName" name="txtUCustomerName">
                                    <input type="hidden" class="form-control" id="txtUCustomerID" name="txtUCustomerID">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUCustomerBirthday" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Birthday</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="date" class="form-control" id="txtUCustomerBirthday" name="txtUCustomerBirthday">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="txtUCustomerGender" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Gender</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <!-- <selete type="search" class="form-control" id="txtUCustomerGender" name="txtUCustomerGender"> -->
                                        <select class="form-control" id="txtUCustomerGender" name="txtUCustomerGender">
                                           <option value="Female">Female</option>
                                           <option value="Male">Male</option>
                                           <option value="Custom">Custom</option>
                                        </select>
                                </div>
                            </div>
                             <div class="form-group row mb-4">
                                <label for="txtUCustomerNic" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">NIC</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUCustomerNic" name="txtUCustomerNic">
                                </div>
                            </div> <div class="form-group row mb-4">
                                <label for="txtUCustomerAddress" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUCustomerAddress" name="txtUCustomerAddress">
                                </div>
                            </div>
                             <div class="form-group row mb-4">
                                <label for="txtUCustomerEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="email" class="form-control" id="txtUCustomerEmail" name="txtUCustomerEmail">
                                </div>
                            </div>
                             <div class="form-group row mb-4">
                                <label for="txtUCustomerPhone" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUCustomerPhone" name="txtUCustomerPhone">
                                </div>
                            </div>
                             <div class="form-group row mb-4">
                                <label for="txtUCustomerHeight" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Height</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUCustomerHeight" name="txtUCustomerHeight">
                                </div>
                            </div> 
                            <div class="form-group row mb-4">
                                <label for="txtUCustomerWeight" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Weight</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-control" id="txtUCustomerWeight" name="txtUCustomerWeight">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="txtUCustomerDescription" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Special Note</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="search" class="form-contrl" id="txtUCustomerDescription" name="txtUCustomerDescription">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="cmbVisibility" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Customer Visibility</label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <select class="form-control" id="cmbVisibility" name="cmbVisibility">
                                        <option value="1">Activate</option>
                                        <option value="0">Deactivate</option>
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
            url: "<?php echo base_url(''); ?>/BUser/getUserData",
            data: {ID : id},
            method: "post",
            dataType: "json",
            error: function(error){
                console.log(error);
                $.notify("Internal server error", "error");

            },
            success: function(r){

                $('#txtUCustomerName').val(r.data[0].customer_name);
                $('#txtUCustomerBirthday').val(r.data[0].customer_birthday);
                $('#txtUCustomerGender').val(r.data[0].customer_gender);
                $('#txtUCustomerNic').val(r.data[0].customer_nic);
                $('#txtUCustomerAddress').val(r.data[0].customer_address);
                $('#txtUCustomerEmail').val(r.data[0].customer_email);
                $('#txtUCustomerPhone').val(r.data[0].customer_phone);
                $('#txtUCustomerHeight').val(r.data[0].customer_height);
                $('#txtUCustomerWeight').val(r.data[0].customer_weight);
                $('#txtUCustomerDescription').val(r.data[0].customer_description);  
                $('#txtUCustomerID').val(r.data[0].customer_id);

                $('#cmbVisibility').val(r.data[0].customer_status);
                $('#cmbVisibility').trigger('change');
            }
        });
    }


    

    function del(id){
        $.confirm({
            icon: 'fa fa-trash',
            title: 'Delete Customer',
            content: 'Do you want to delete this customer details?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: {
                    text: 'Delete',
                    btnClass: 'btn-red',
                    action: function(){

                        $.ajax({
                            url: "<?php echo base_url(''); ?>/BUser/deleteUser",
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

        dTable = $('#tblFlavours').DataTable({
            "processing": true,
            "initComplete": function (settings, json) {
                $("#tblFlavours").show();
            },
            "serverSide": true,
            "select": true,
            "searching": true,
            "bDestroy": true,
            "dataSrc": "tableData",
            "columns": [
                {"data": "customer_id", "name": "Customer ID", "title": "Customer ID"},
                {"data": "customer_name", "name": "Customer Name", "title": "Name"},
                {"data": "customer_birthday", "name": "Birtday", "title": "Bir"},
                {"data": "customer_gender", "name": "Gender", "title": "Gen"},
                {"data": "customer_nic", "name": "NIC", "title": "NIC"},
                {"data": "customer_address", "name": "Address", "title": "Add"},
                {"data": "customer_email", "name": "Email", "title": "Em"},
                {"data": "customer_phone", "name": "Phone", "title": "Ph"},
                {"data": "customer_height", "name": "Height", "title": "He"},
                {"data": "customer_weight", "name": "Weight", "title": "Wei"},
                {"data": "customer_description", "name": "Description", "title": "Des"},
                {"data": "customer_img", "name": "Image", "title": "Image",
                    mRender: function(data) {
                        return '<div class="d-flex">' +
                            '<div class="usr-img-frame mr-2 rounded-circle">'+
                            '<img alt="avatar" class="img-fluid" src="<?php echo base_url(); ?>assets/img/User/' + data + '">'+
                            '</div>'+
                            '</div>'
                    }
                },
                {"data": "customer_status", "name": " Active Status", "title": "Active Status",
                    mRender: function(data) {
                        if(data === '1'){
                            return '<span class=" shadow-none badge outline-badge-primary">Activated</span>'
                        }
                        if(data === '0'){
                            return '<span class=" shadow-none badge outline-badge-danger">Deactivated</span>'
                        }
                    }
                },
                {"data": "customer_id", "name": "Action", "title": "Action",
                    mRender: function (id) {
                        return '<ul class="row mb-4">\n' +
                            '<li class="col-md-6 list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><button onclick="edit(\''+id+'\')" class="btn btn-outline-info" ><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>\n' +
                            '<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><button onclick="del(\''+id+'\')" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>\n' +
                            '</ul>'
                    }
                }
            ],
            "language": {
                "emptyTable": "No subjects to show..."
            },
            "ajax": {
                "url": '<?php echo base_url(''); ?>/BUser/getUsersForTable',
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

        new FileUploadWithPreview('customerImage')

        $("#formAddSProduct").validate({
            ignore: [],
            rules: {
                txtCustomerName: {
                    required: true
                },
                txtCustomerBirthday: {
                    required: true
                },
                txtCustomerGender: {
                    required: true
                },
                txtCustomerNic: {
                    required: true
                },
                txtCustomerAddress: {
                    required: true
                },
                txtCustomerEmail: {
                    required: true
                },
                txtCustomerPhone: {
                    required: true
                },
                txtCustomerHeight: {
                    required: true
                },
                txtCustomerWeight: {
                    required: true
                },
                txtCustomerDescription: {
                    required: true
                }
            },
            messages: {
                txtCustomerName: {
                    required: ' Name required!'
                },
                txtCustomerBirthday: {
                    required: ' Birthday required!'
                },
                txtCustomerGender: {
                    required: 'Gender required!'
                },
                 txtCustomerNic: {
                    required: 'NIC required!'
                },
                txtCustomerAddress: {
                    required: 'Address required!'
                },
                txtCustomerEmail: {
                    required: 'Email required!'
                },
                txtCustomerHeight: {
                    required: 'Height required!'
                },
                txtCustomerWeight: {
                    required: 'Weight required!'
                },
                txtCustomerDescription: {
                    required: 'Description required!'
                }
            },
            submitHandler: function (form) {

                let formData = new FormData(form);

                $.ajax({
                    url: '<?php echo base_url('BUser/addUser'); ?>',
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
                txtUCustomerName: {
                    required: true
                },
                txtUCustomerBirthday: {
                    required: true
                },
                txtUCustomerGender: {
                    required: true
                },
                txtUCustomerNic: {
                    required: true
                },
                txtUCustomerAddress: {
                    required: true
                },
                txtUCustomerEmail: {
                    required: true
                },
                txtUCustomerPhone: {
                    required: true
                },
                txtUCustomerHeight: {
                    required: true
                },
                txtUCustomerWeight: {
                    required: true
                },
                txtUCustomerDescription: {
                    required: true
                }
            },
             messages: {
                txtUCustomerName: {
                    required: ' Name required!'
                },
                txtUCustomerBirthday: {
                    required: ' Birthday required!'
                },
                txtUCustomerGender: {
                    required: 'Gender required!'
                },
                 txtUCustomerNic: {
                    required: 'NIC required!'
                },
                txtUCustomerAddress: {
                    required: 'Address required!'
                },
                txtUCustomerEmail: {
                    required: 'Email required!'
                },
                txtUCustomerHeight: {
                    required: 'Height required!'
                },
                txtUCustomerWeight: {
                    required: 'Weight required!'
                },
                txtUCustomerDescription: {
                    required: 'Description required!'
                }
            },
            submitHandler: function (form) {

                $.ajax({
                    url: '<?php echo base_url('BUser/updateUser'); ?>',
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
                        }

                        if(r.status == 500){
                            $.notify(r.message, "error");
                        }

                    }
                });
            }
        });
    });


	window.onload = () => {
    let button = document.querySelector("#btn");
  

    button.addEventListener("click", calculateBMI);
};
  
function calculateBMI() {
  

    let height = parseInt(document.querySelector("#txtCustomerHeight").value);
    let weight = parseInt(document.querySelector("#txtCustomerWeight").value);
  
    let result = document.querySelector("#result");
  
  
    if (height === "" || isNaN(height)) result.innerHTML = "Provide a valid Height!";
  
    else if (weight === "" || isNaN(weight)) result.innerHTML = "Provide a valid Weight!";
  
    
    else {
  
     
        let bmi = (weight / ((height * height) 
                            / 10000)).toFixed(2);
  
       
        if (bmi < 18.6) result.innerHTML =
            `Under Weight : <span>${bmi}</span>`;
  
        else if (bmi >= 18.6 && bmi < 24.9) 
            result.innerHTML = 
                `Normal : <span>${bmi}</span>`;
  
        else result.innerHTML =
            `Over Weight : <span>${bmi}</span>`;
    }
}
</script>