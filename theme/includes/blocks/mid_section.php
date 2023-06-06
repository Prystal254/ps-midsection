<?php
    $returns = $block["sub_sections"]["returns_section"];
    $conversion = $block["sub_sections"]["conversion_section"];
    $brands = $block["sub_sections"]["brands_section"];
?>

<div class="mid-section">
    <!-- <div class="backgrounds">
        <?php $i = 1;?>
        <?php foreach($block["backgrounds"] as $bg){?>
            <img class="section-bg section-bg-<?php echo $i;?>" src="<?php echo $bg?>" alt="">   
            <?php $i++;?> 
        <?php } ?>
        <?php $i = 1;?>    
    </div> -->
    <div class="model">
        <video autoplay loop muted class="single" >
            <source src="<?php echo $block["model_mov"]?>" type='video/mp4; codecs="hvc1"'>
            <source src="<?php echo $block["model"]?>" type="video/webm">
        </video>
        <video autoplay loop muted class="multiple" >
            <source src="<?php echo $block["model_brands_mov"]?>" type='video/mp4; codecs="hvc1"'>
            <source src="<?php echo $block["model_brands"]?>" type="video/webm">
        </video>
    </div>
    <div class="sub-sections" >
        
        <div class="sub-section returns" style="background-image:url('<?php echo $returns['background_image']['url']; ?>')">
            <div class="inner">
                <div class="stats">
                    <div class="top-text"><?php echo $returns["stats"]["top_text"];?></div>
                    <div class="numbers"><?php echo $returns["stats"]["numbers"];?></div>
                    <div class="text"><?php echo $returns["stats"]["text"];?></div>
                </div>
                <div class="description-blurb">
                    <div class="heart">
                        <svg class="normal" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.325 1C11.846 1 10.4265 1.65661 9.5 2.69421C8.5735 1.65661 7.154 1 5.675 1C3.057 1 1 2.96172 1 5.45845C1 8.52261 3.89 11.0193 8.2675 14.8131L9.5 15.875L10.7325 14.805C15.11 11.0193 18 8.52261 18 5.45845C18 2.96172 15.943 1 13.325 1Z" stroke="white"/>
                        </svg>
                        <svg class="clicked" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.325 1C11.846 1 10.4265 1.65661 9.5 2.69421C8.5735 1.65661 7.154 1 5.675 1C3.057 1 1 2.96172 1 5.45845C1 8.52262 3.89 11.0193 8.2675 14.8131L9.5 15.875L10.7325 14.805C15.11 11.0193 18 8.52262 18 5.45845C18 2.96172 15.943 1 13.325 1Z" fill="white" stroke="white"/>
                        </svg>
                    </div>
                    <div class="title"><?php echo $returns["description_blurb"]["title"]?></div>
                    <div class="testimony"><?php echo $returns["description_blurb"]["testimony"]?></div>
                    <div class="description"><?php echo $returns["description_blurb"]["description"]?></div>
                </div>
                <div class="cta"> 
                    <div class="box">
                        <div class="cross"><svg fill="#000000" viewBox="0 0 24 24" id="cross" xmlns="http://www.w3.org/2000/svg" class="icon multi-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary-stroke" d="M19,19,5,5M19,5,5,19" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg></div>
                        <div class="question"><?php echo $returns["cta_box"]["question"];?></div>
                        <img class="options" src="<?echo $returns["cta_box"]["options"];?>" alt="">
                        <div class="main-text"><?php echo $returns["cta_box"]["main_text"];?></div>
                        <a href="<?php echo $returns["cta_box"]["button"]["link"]["url"];?>" class="button">
                            <div class="icon"><img src="<?php echo $returns["cta_box"]["button"]["icon"];?>" alt=""></div>
                            <div class="link"><?php echo $returns["cta_box"]["button"]["link"]["title"];?></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-section conversion " style="background-image:url('<?php echo $conversion['background_image']['url']; ?>" >
            <div class="inner">
                <div class="stats">
                    <div class="top-text"><?php echo $conversion["stats"]["top_text"];?></div>
                    <div class="numbers"><?php echo $conversion["stats"]["numbers"];?></div>
                    <div class="text"><?php echo $conversion["stats"]["text"];?></div>
                </div>
                <div class="cta">
                    <div class="title"><?php echo $conversion["cta_box"]["title"]?></div>
                    <div class="dropdowns">
                        
                        <img src="<?php echo $conversion["cta_box"]["options"]?>" alt="">
                    </div>
                    <div class="description">
                        <?php echo $conversion["cta_box"]["description"]?>
                    </div>
                    <a href="<?php echo $conversion["cta_box"]["button"]["link"]["url"];?>" class="button">
                        <div class="icon"><img src="<?php echo $conversion["cta_box"]["button"]["icon"];?>" alt=""></div>
                        <div class="link"><?php echo $conversion["cta_box"]["button"]["link"]["title"];?></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="sub-section brands">
            <div class="inner">
                <div class="screen">
                    <div class="dots">
                        <svg class="desktop" width="54" height="14" viewBox="0 0 54 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="6.5" stroke="black" stroke-opacity="0.24"/>
                            <circle cx="27" cy="7" r="6.5" stroke="black" stroke-opacity="0.24"/>
                            <circle cx="47" cy="7" r="6.5" stroke="black" stroke-opacity="0.24"/>
                        </svg>
                    </div>
                    <div class="hearts">
                        <svg width="78" height="69" viewBox="0 0 78 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M56.1 1C49.488 1 43.142 3.95058 39 8.61322C34.858 3.95058 28.512 1 21.9 1C10.196 1 1 9.81531 1 21.0348C1 34.8042 13.92 46.0237 33.49 63.0714L39 67.8434L44.51 63.035C64.08 46.0237 77 34.8042 77 21.0348C77 9.81531 67.804 1 56.1 1Z" stroke="black"/>
                        </svg>
                        <svg width="78" height="69" viewBox="0 0 78 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M56.1 1C49.488 1 43.142 3.95058 39 8.61322C34.858 3.95058 28.512 1 21.9 1C10.196 1 1 9.81531 1 21.0348C1 34.8042 13.92 46.0237 33.49 63.0714L39 67.8434L44.51 63.035C64.08 46.0237 77 34.8042 77 21.0348C77 9.81531 67.804 1 56.1 1Z" stroke="black"/>
                        </svg>
                        <svg width="78" height="69" viewBox="0 0 78 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M56.1 1C49.488 1 43.142 3.95058 39 8.61322C34.858 3.95058 28.512 1 21.9 1C10.196 1 1 9.81531 1 21.0348C1 34.8042 13.92 46.0237 33.49 63.0714L39 67.8434L44.51 63.035C64.08 46.0237 77 34.8042 77 21.0348C77 9.81531 67.804 1 56.1 1Z" stroke="black"/>
                        </svg>
                    </div>
                    <div class="screen-wrap">
                        <!-- <?php 
                            $i = 1;
                                foreach($brands["bg_gallery"] as $bg){?>
                                    <img src="<?php echo $bg?>" alt="" class="brand-bg brand-bg<?php echo $i;?>">    
                                <?php 
                                $i++;    
                            } 
                        $i = 1;?> -->
                        <video autoplay loop muted >
                            <source src="<?php echo $brands['video']?>" type='video/mp4'>
                        </video>    
                    </div>
                </div>
                <div class="cta">
                    <div class="title">
                        <?php echo $brands["cta_box"]["title"]?>
                    </div>
                    <div class="description">
                        <?php echo $brands["cta_box"]["description"]?>
                    </div>
                    <a href="<?php echo $brands["cta_box"]["button"]["link"]["url"];?>" class="button">
                        <div class="icon"><img src="<?php echo $brands["cta_box"]["button"]["icon"];?>" alt=""></div>
                        <div class="link"><?php echo $brands["cta_box"]["button"]["link"]["title"];?></div>
                    </a>
                </div>
                <div class="numbers">
                    <?php echo $brands["stats"]["numbers"]?>
                </div>
            </div>
            <div class="stat-marquee">
                <?php for ($i=0; $i < 11; $i++) { ?>
                    <div class="marquee-item gradient-text"><?php echo $brands["stats"]["text"]?></div>    
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="scroll-down-buttons">
        <?php 
        $counter = 1;
        foreach($block["scroll_down_buttons"] as $sd){?>
            <a href="<?php echo $sd["button"]["link"]["url"];?>" class="button sd<?php echo $counter;?>" section-no="<?php echo $counter;?>">
                <div class="icon"><img src="<?php echo $sd["button"]["icon"];?>" alt=""></div>
                <div class="link"><?php echo $sd["button"]["link"]["title"];?></div>
            </a>
        <?php 
        $counter++;
        } ?>
    </div>
</div>
