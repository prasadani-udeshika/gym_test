
<?php

$User_Session = $this->session->userdata('User_Session');
if ($User_Session == null) {
    redirect(base_url('Login/notLoggedIn'));
}

?>

<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="<?php echo base_url('BHome')?>" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
            </li>
<!-- 
            <li class="menu">
                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Seasonal Products</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                    <li>
                        <a href="<?php echo base_url('BProduct') ?>"> Manage </a>
                    </li>
                </ul>
            </li> -->

            <li class="menu">
                <a href="#users1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>User Details</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users1" data-parent="#accordionExample">
                    <li>
                        <a href="<?php echo base_url('BUser') ?>"> Manage </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('BTUser') ?>"> Table </a>
                    </li>
                      <li>
                        <a href="<?php echo base_url('BProfile') ?>"> Profile </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Payment</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                    <li>
                        <a href="<?php echo base_url('BPayment') ?>"> Manage </a>
                    </li>
                      <li>
                        <a href="<?php echo base_url('BPAllocate') ?>"> Allocate </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="menu">
                <a href="#clientas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                       <span>Milestones</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="clientas" data-parent="#accordionExample">
                    <li>
                        <a href="<?php echo base_url('BMilestone') ?>"> Manage </a>
                    </li>
                </ul>
            </li> -->
<!-- 
            <li class="menu">
                <a href="#clients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Partners</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="clients" data-parent="#accordionExample">
                    <li>
                        <a href="<?php echo base_url('BPartner') ?>"> Manage </a>
                    </li>
                </ul>
            </li> -->
        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
