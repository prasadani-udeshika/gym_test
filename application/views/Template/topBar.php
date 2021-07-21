<div class="container">
    <div class="row">
        <a class="logo" href="<?php echo base_url('Home') ?>"><img src="<?php echo base_url('assets') ?>/img/Kong/logo.png" alt></a>
        <div class="mobileWrapper">
            <nav>
                <ul class="leftMenu">
                    <?php if($content == 'home'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Home') ?>">Home</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Home') ?>">Home</a></li>
                    <?php } ?>

                  

                </ul>
                <ul class="RightMenu">
              
                </ul>
            </nav>
        </div>
        <div class="menuIcon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>