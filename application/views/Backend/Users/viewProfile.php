<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">User Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Add User</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>

            <div class="layout-px-spacing">
                
                <div class="row layout-spacing layout-top-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Column Filter</h4>
                                    </div>                  
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="column-filter" class="table">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column"> # </th>
                                                <!-- <th>#</th> -->
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

      <tbody>
                                            
<?php
  $i=1;
  foreach($data as $row)
  {
      $url = base_url('BProfile').'?userid='.$row->customer_id;
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->customer_name."</td>";
  echo "<td>".$row->customer_email."</td>";
  echo "<td>".$row->customer_phone."</td>";
  echo "<td><a href=\"$url\" class=\"btn btn-success\">View</a></td>";
   echo "</tr>";
  $i++;
  }
   ?>

             
                                        </tbody>
                                       
                                        <tfoot>
                                            <tr>
                                                <th class="checkbox-column"></th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                