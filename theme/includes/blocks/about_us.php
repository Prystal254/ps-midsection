<section class="about-us">
    <div class="about-us-container">
        <h2 class="heading-m">Prince St.</h2>
        <div class="about-us-top">
            <div class="ship-to">
                <div class="ship-to-container">
                    <div class="heading">
                        <h3><?php echo $block['heading']; ?></h3>
                    </div>
                    <div class="tabs">
                        <div class="tabs-inner">
                            <?php foreach($block['tabs'] as $tab){ 
                                    if($tab['tab_choice'] == "image" ){ ?>
                                        <img src="<?php echo $tab['image']; ?>" alt="">
                                <?php } if($tab['tab_choice'] == "video" ){ ?>
                                        <video src="<?php echo $tabs['video']; ?>"></video>
                                <?php } ?>
                                
                            <?php } ?>
                        </div>
                    </div>
                    <div class="about-us-subtext">
                        <p><?php echo $block['subtext']; ?></p>
                    </div>
                    <div class="about-us-list">
                        <ul>
                            <?php foreach($block['list'] as $listitem){ ?>
                                <li><?php echo $listitem['list_item']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="demo">
                <div class="demo-container" style = "background : url(<?php echo $block['check_demo_background']; ?>);">
                    <div class="demo-heading">
                        <h4><?php echo $block['check_demo_title']; ?></h4>
                    </div>
                    <div class="button">
                        <a href="<?php echo $block['check_demo_button']['url']; ?>"><span><img src="<?php echo "/wp-content/uploads/2023/05/▶️.png" ?>" alt=""></span><?php echo $block['check_demo_button']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-bottom">
            <div class="about-us-bottom-container">
                <p><?php echo $block['about_us_text']; ?></p>
                <a href="<?php echo $block['about_us_button']['url']; ?>"><?php echo $block['about_us_button']['title']; ?></a>
            </div>
        </div>
    </div>
</section>