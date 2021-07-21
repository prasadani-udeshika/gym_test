<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('Template/header'); ?>
</head>

<body>
<!-- LOADER -->
<div id="loader-wrapper">
<!--    <div class="loaderShortcode loaderShapeRight"></div>-->
<!--    <div class="loaderShortcode loaderShapeLeft"></div>-->
    <div class="loaderShortcode loaderLogo"></div>
</div>

<div id="content-block">
    <!-- HEADER -->
    <header>
        <?php $this->load->view('Template/topBar', $content); ?>
    </header>

    <?php $this->load->view($content); ?>

    <!-- FOOTER -->
    <?php $this->load->view('Template/footer'); ?>
</div>
<!-- Popup -->
<!--<div class="popup-wrapper">-->
<!--    <div class="bg-layer"></div>-->
<!--    <div class="popup-content" data-rel="1">-->
<!--        <div class="layer-close"></div>-->
<!--        <div class="popup-container size-1">-->
<!--            <div class="embed-responsive embed-responsive-16by9">-->
<!---->
<!--            </div>-->
<!--            <div class="button-close"> <span></span><span></span></div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Search-Popup -->
<!--    <div class="popup-content" data-rel="2">-->
<!--        <div class="layer-close"></div>-->
<!--        <div class="popup-container size-1">-->
<!--            <form>-->
<!--                <input class="popupSearch" type="search" placeholder="Search">-->
<!--                <input class="searchicon" type="submit">-->
<!--            </form>-->
<!--            <i class="fa fa-search searchPopUpIcon"></i>-->
<!--            <div class="button-close"> <span></span><span></span></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php $this->load->view('Template/scripts'); ?>



</body>

</html>

