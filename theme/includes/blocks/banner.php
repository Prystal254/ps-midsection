<section class="banner" style = "background-image : url(<?php echo $block['background_image']; ?>);">
    <div class="banner-container">
        <div class="banner-inner">
            <div class="left-col">
                <div class="left-col-inner">
                    <div class="card">
                        <div class="gif-container">
                            <div class="gif">
                                <img src="<?php echo $block['banner_gif']; ?>" alt="">
                            </div>
                        </div>
                        <div class="gif-text">
                            <p><?php echo $block['gif_text']; ?></p>
                        </div>
                        <div class="gif-rating">
                                <?php if($block['gif_rating'] == 1){ ?>
                                    <img class="rating" src="<?php echo "/wp-content/uploads/2023/05/Union.png"; ?>" alt=""><span>(1000)</span>
                                <?php } else if($block['gif_rating'] == 2){ ?>
                                    <img class="rating" src="<?php echo "/wp-content/uploads/2023/05/Union-1.png"; ?>" alt=""><span>(1000)</span>
                                <?php } else if($block['gif_rating'] == 3){ ?>
                                    <img class="rating" src="<?php echo "/wp-content/uploads/2023/05/Union-2.png"; ?>" alt=""><span>(1000)</span>
                                <?php } else if($block['gif_rating'] == 4){ ?>
                                    <img class="rating" src="<?php echo "/wp-content/uploads/2023/05/Union-3.png"; ?>" alt=""><span>(1000)</span>
                                <?php } else if($block['gif_rating'] == 5){ ?>
                                    <img class="rating" src="<?php echo "/wp-content/uploads/2023/05/Union-4.png"; ?>" alt=""><span>(1000)</span>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="right-col-inner">
                    <div class="animated-text">
                        <h4><?php echo $block['animated_text']; ?></h4>
                    </div>
                    <div class="banner-text">
                        <div class="banner-title">
                            <h1><?php echo $block['title']; ?></h1>
                        </div>
                        <div class="subtext">
                            <p><?php echo $block['subtext']; ?></p>
                        </div>
                    </div>
                    <div class="banner-button">
                        <a href="<?php echo $block['banner_button']['url']; ?>"><span><img src="<?php echo "/wp-content/uploads/2023/05/👋.png"; ?>" alt=""></span><?php echo $block['banner_button']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bottom-link">
        <p>Take a tour</p>
        <img src="<?php echo "/wp-content/uploads/2023/05/👇.png" ?>" alt="">
    </div>
</section>