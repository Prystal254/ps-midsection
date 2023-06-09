<section class="banner" style = "background-image : url(<?php echo $block['background_image']; ?>);">
    <div class="banner-container">
        <div class="banner-inner">
            <div class="left-col">
                <div class="left-col-inner">
                    <div class="card">
                        <div class="info-box">
                            <?php echo $block['info_box']; ?>
                        </div>
                        <div class="gif-container">
                            <div class="gif">
                                <video autoplay loop muted playsinline>
                                    <source src="<?php echo $block["banner_gif_mov"]?>" type='video/quicktime' >
                                    <source src="<?php echo $block["banner_gif"] ?>" type="video/webm">                                   
                                </video>
                            </div>
                        </div>
                        <div class="heading-m"><?php echo $block['title']; ?></div>
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
                    <div class="banner-button-m">
                        <a href="<?php echo $block['banner_button']['url']; ?>"><span><img src="<?php echo "/wp-content/uploads/2023/05/👋.png"; ?>" alt=""></span><?php echo $block['banner_button']['title']; ?></a>
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
    <div class="made-for-shopify">
        <svg width="85" height="43" viewBox="0 0 85 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.6554 23.5456C18.639 23.4264 18.5349 23.3602 18.4484 23.353C18.3626 23.3458 16.6821 23.3203 16.6821 23.3203C16.6821 23.3203 15.2766 21.9554 15.1378 21.8166C14.9989 21.6778 14.7278 21.7197 14.6223 21.7511C14.621 21.7518 14.3584 21.833 13.9164 21.9698C13.8423 21.7301 13.7336 21.4354 13.5784 21.1394C13.078 20.1845 12.3452 19.6796 11.4597 19.6783C11.4584 19.6783 11.4577 19.6783 11.4564 19.6783C11.3949 19.6783 11.334 19.6842 11.2724 19.6894C11.2462 19.658 11.22 19.6272 11.1925 19.5971C10.8067 19.1845 10.3123 18.9834 9.71959 19.0011C8.57609 19.0338 7.43719 19.8597 6.51375 21.3267C5.86405 22.3589 5.36958 23.6556 5.22943 24.6596C3.9163 25.0663 2.99809 25.3505 2.97779 25.3571C2.31501 25.5654 2.29405 25.5857 2.2076 26.2105C2.14342 26.6827 0.409176 40.0929 0.409176 40.0929L14.9426 42.6065L21.2416 41.0406C21.2416 41.0406 18.6717 23.6648 18.6554 23.5456ZM13.1887 22.1951C12.8541 22.2986 12.4735 22.4165 12.0609 22.5442C12.0524 21.9653 11.9837 21.1597 11.7138 20.4635C12.5816 20.6279 13.0086 21.6096 13.1887 22.1951ZM11.3006 22.78C10.5389 23.0157 9.70778 23.2731 8.87408 23.5312C9.10853 22.6333 9.55324 21.7393 10.0995 21.1532C10.3025 20.9351 10.5867 20.6921 10.9233 20.5532C11.2397 21.2134 11.3084 22.148 11.3006 22.78ZM9.74249 19.7621C10.011 19.7562 10.237 19.8151 10.4302 19.9422C10.1211 20.1027 9.8224 20.3332 9.54211 20.6338C8.81577 21.4132 8.25909 22.6228 8.03707 23.7899C7.34481 24.004 6.66762 24.2143 6.04413 24.4068C6.43777 22.5698 7.97747 19.8132 9.74249 19.7621Z" fill="#95BF47"/>
            <path d="M18.4492 23.3537C18.3634 23.3465 16.6828 23.321 16.6828 23.321C16.6828 23.321 15.2774 21.9561 15.1385 21.8173C15.0868 21.7655 15.0167 21.7387 14.9434 21.7275L14.944 42.6059L21.2424 41.0406C21.2424 41.0406 18.6725 23.6655 18.6562 23.5463C18.6397 23.4271 18.535 23.3609 18.4492 23.3537Z" fill="#5E8E3E"/>
            <path d="M11.453 26.5922L10.7215 29.3291C10.7215 29.3291 9.90542 28.9577 8.9381 29.0186C7.51951 29.1084 7.50444 30.003 7.51888 30.2276C7.59615 31.4517 10.8164 31.7189 10.9972 34.5862C11.1393 36.8417 9.80061 38.3847 7.87187 38.5065C5.5567 38.6526 4.28222 37.2871 4.28222 37.2871L4.77277 35.2005C4.77277 35.2005 6.05575 36.1685 7.08267 36.1036C7.75333 36.0611 7.99302 35.5155 7.96878 35.1297C7.86794 33.533 5.24561 33.6273 5.07993 31.0037C4.94042 28.796 6.39045 26.5588 9.58972 26.357C10.8223 26.2778 11.453 26.5922 11.453 26.5922Z" fill="white"/>
            <path d="M29.5372 32.3235C28.8129 31.9305 28.4407 31.5992 28.4407 31.1438C28.4407 30.5644 28.9578 30.1922 29.7652 30.1922C30.7052 30.1922 31.5444 30.5852 31.5444 30.5852L32.2063 28.5572C32.2063 28.5572 31.5977 28.0811 29.8061 28.0811C27.313 28.0811 25.5851 29.5088 25.5851 31.516C25.5851 32.6541 26.3919 33.5233 27.4683 34.1436C28.3374 34.6399 28.6479 34.992 28.6479 35.509C28.6479 36.0469 28.2134 36.4815 27.4066 36.4815C26.2042 36.4815 25.0687 35.8605 25.0687 35.8605L24.3652 37.8885C24.3652 37.8885 25.4143 38.592 27.1792 38.592C29.7451 38.592 31.5867 37.3298 31.5867 35.0537C31.586 33.8338 30.6552 32.9646 29.5372 32.3235Z" fill="black"/>
            <path d="M39.7598 28.0606C38.4975 28.0606 37.5043 28.6609 36.7391 29.5709L36.6975 29.5501L37.794 23.8188L34.9384 23.8188L32.166 38.4059L35.0216 38.4059L35.9732 33.4197C36.3454 31.5366 37.3179 30.3784 38.2286 30.3784C38.8697 30.3784 39.1185 30.8129 39.1185 31.4339C39.1185 31.8269 39.0769 32.3031 38.9944 32.6961L37.9187 38.4066L40.7744 38.4066L41.8914 32.5096C42.0158 31.8886 42.0988 31.1442 42.0988 30.6473C42.0976 29.0331 41.2493 28.0606 39.7598 28.0606Z" fill="black"/>
            <path d="M48.5522 28.0605C45.1171 28.0605 42.8418 31.1643 42.8418 34.6194C42.8418 36.8332 44.207 38.6124 46.7731 38.6124C50.1457 38.6124 52.4217 35.5919 52.4217 32.0536C52.4217 30.0054 51.2213 28.0605 48.5522 28.0605ZM47.1453 36.42C46.1727 36.42 45.7588 35.5925 45.7588 34.5577C45.7588 32.9233 46.6074 30.2542 48.1592 30.2542C49.1731 30.2542 49.5036 31.1233 49.5036 31.9717C49.5036 33.7301 48.6561 36.42 47.1453 36.42Z" fill="black"/>
            <path d="M59.7257 28.0605C57.7983 28.0605 56.7045 29.7573 56.7045 29.7573L56.6636 29.7573L56.8292 28.2262L54.3049 28.2262C54.181 29.261 53.9528 30.833 53.7257 32.0126L51.7393 42.4612L54.5949 42.4612L55.3806 38.2402L55.4431 38.2402C55.4431 38.2402 56.029 38.6124 57.1192 38.6124C60.4709 38.6124 62.664 35.1781 62.664 31.7015C62.664 29.7781 61.8153 28.0605 59.7257 28.0605ZM56.9945 36.461C56.2532 36.461 55.8145 36.0472 55.8145 36.0472L56.2906 33.3781C56.6219 31.5988 57.5528 30.4192 58.5462 30.4192C59.4153 30.4192 59.684 31.226 59.684 31.9919C59.684 33.8334 58.5875 36.461 56.9945 36.461Z" fill="black"/>
            <path d="M66.7398 23.9639C65.8298 23.9639 65.1055 24.6882 65.1055 25.619C65.1055 26.4674 65.6433 27.0468 66.4503 27.0468L66.4916 27.0468C67.3815 27.0468 68.1468 26.4466 68.1676 25.3917C68.1676 24.5641 67.6089 23.9639 66.7398 23.9639Z" fill="black"/>
            <path d="M62.7471 38.4063L65.6019 38.4063L67.5475 28.2891L64.671 28.2891L62.7471 38.4063Z" fill="black"/>
            <path d="M74.8106 28.2679L72.8242 28.2679L72.9272 27.7917C73.0929 26.8193 73.6724 25.9501 74.6242 25.9501C75.1321 25.9501 75.5342 26.095 75.5342 26.095L76.0929 23.8604C76.0929 23.8604 75.5963 23.6123 74.5407 23.6123C73.5268 23.6123 72.5137 23.902 71.7477 24.5639C70.7751 25.3915 70.3199 26.5913 70.0925 27.7917L70.0103 28.2679L68.6855 28.2679L68.2716 30.42L69.5964 30.42L68.0859 38.4066L70.9415 38.4066L72.452 30.42L74.4176 30.42L74.8106 28.2679Z" fill="black"/>
            <path d="M81.6796 28.2888C81.6796 28.2888 79.8945 32.7858 79.0931 35.2406L79.0514 35.2406C78.9971 34.4501 78.3479 28.2888 78.3479 28.2888L75.3475 28.2888L77.0657 37.5784C77.1074 37.785 77.0865 37.9097 77.0035 38.0546C76.6719 38.6957 76.1136 39.3167 75.4514 39.7721C74.9136 40.1651 74.3136 40.4132 73.8379 40.5789L74.624 42.9999C75.2035 42.8758 76.4031 42.3997 77.417 41.448C78.7209 40.2274 79.9205 38.3443 81.1618 35.7784L84.6587 28.2881L81.6796 28.2881L81.6796 28.2888Z" fill="black"/>
            <path d="M33.9588 3.27273L35.5568 3.27273L38.3352 10.0568L38.4375 10.0568L41.2159 3.27273L42.8139 3.27273L42.8139 12L41.5611 12L41.5611 5.68466L41.4801 5.68466L38.9062 11.9872L37.8665 11.9872L35.2926 5.6804L35.2116 5.6804L35.2116 12L33.9588 12L33.9588 3.27273ZM46.5309 12.1449C46.1161 12.1449 45.7411 12.0682 45.4059 11.9148C45.0707 11.7585 44.805 11.5327 44.609 11.2372C44.4158 10.9418 44.3192 10.5795 44.3192 10.1506C44.3192 9.78125 44.3903 9.47727 44.5323 9.23864C44.6744 9 44.8661 8.81108 45.1076 8.67188C45.3491 8.53267 45.619 8.42756 45.9173 8.35654C46.2156 8.28551 46.5195 8.23154 46.8292 8.1946C47.2212 8.14915 47.5394 8.11222 47.7837 8.08381C48.0281 8.05256 48.2056 8.00284 48.3164 7.93466C48.4272 7.86648 48.4826 7.75568 48.4826 7.60228L48.4826 7.57245C48.4826 7.20029 48.3775 6.91193 48.1673 6.70739C47.9599 6.50284 47.6502 6.40057 47.2383 6.40057C46.8093 6.40057 46.4712 6.49574 46.2241 6.68608C45.9798 6.87358 45.8107 7.08239 45.717 7.3125L44.5195 7.03977C44.6616 6.64205 44.869 6.32102 45.1417 6.07671C45.4173 5.82955 45.734 5.65057 46.092 5.53977C46.4499 5.42614 46.8263 5.36932 47.2212 5.36932C47.4826 5.36932 47.7596 5.40057 48.0522 5.46307C48.3477 5.52273 48.6232 5.63353 48.8789 5.79546C49.1374 5.95739 49.3491 6.18892 49.5138 6.49006C49.6786 6.78836 49.761 7.17614 49.761 7.65341L49.761 12L48.5167 12L48.5167 11.1051L48.4656 11.1051C48.3832 11.2699 48.2596 11.4318 48.0948 11.5909C47.93 11.75 47.7184 11.8821 47.4599 11.9872C47.2013 12.0923 46.8917 12.1449 46.5309 12.1449ZM46.8079 11.1222C47.1602 11.1222 47.4613 11.0526 47.7113 10.9134C47.9641 10.7742 48.1559 10.5923 48.2866 10.3679C48.4201 10.1406 48.4869 9.89773 48.4869 9.63921L48.4869 8.79546C48.4414 8.84091 48.3533 8.88353 48.2227 8.9233C48.0948 8.96023 47.9485 8.9929 47.7837 9.02131C47.619 9.04688 47.4585 9.07103 47.3022 9.09375C47.146 9.11364 47.0153 9.13068 46.9102 9.14489C46.663 9.17614 46.4371 9.2287 46.2326 9.30256C46.0309 9.37642 45.869 9.48296 45.7468 9.62216C45.6275 9.75852 45.5678 9.94034 45.5678 10.1676C45.5678 10.483 45.6843 10.7216 45.9173 10.8835C46.1502 11.0426 46.4471 11.1222 46.8079 11.1222ZM53.9084 12.1278C53.38 12.1278 52.9084 11.9929 52.4936 11.723C52.0817 11.4503 51.7578 11.0625 51.522 10.5597C51.2891 10.054 51.1726 9.44745 51.1726 8.74006C51.1726 8.03267 51.2905 7.42756 51.5263 6.92472C51.7649 6.42188 52.0916 6.03694 52.5064 5.76989C52.9212 5.50284 53.3913 5.36932 53.9169 5.36932C54.3232 5.36932 54.6499 5.4375 54.897 5.57387C55.147 5.70739 55.3402 5.86364 55.4766 6.04262C55.6158 6.22159 55.7237 6.37927 55.8004 6.51563L55.8771 6.51563L55.8771 3.27273L57.1513 3.27273L57.1513 12L55.907 12L55.907 10.9815L55.8004 10.9815C55.7237 11.1207 55.6129 11.2798 55.468 11.4588C55.326 11.6378 55.13 11.794 54.88 11.9276C54.63 12.0611 54.3061 12.1278 53.9084 12.1278ZM54.1896 11.0412C54.5561 11.0412 54.8658 10.9446 55.1186 10.7514C55.3743 10.5554 55.5675 10.2841 55.6982 9.9375C55.8317 9.59091 55.8984 9.1875 55.8984 8.72728C55.8984 8.27273 55.8331 7.875 55.7024 7.53409C55.5717 7.19319 55.38 6.92756 55.1271 6.73722C54.8743 6.54688 54.5618 6.45171 54.1896 6.45171C53.8061 6.45171 53.4865 6.55114 53.2308 6.75C52.9751 6.94887 52.782 7.22017 52.6513 7.56392C52.5234 7.90767 52.4595 8.29546 52.4595 8.72728C52.4595 9.16478 52.5249 9.55824 52.6555 9.90767C52.7862 10.2571 52.9794 10.5341 53.2351 10.7386C53.4936 10.9403 53.8118 11.0412 54.1896 11.0412ZM61.7908 12.1321C61.1459 12.1321 60.5906 11.9943 60.1246 11.7188C59.6616 11.4403 59.3036 11.0497 59.0508 10.5469C58.8008 10.0412 58.6758 9.44887 58.6758 8.76989C58.6758 8.09944 58.8008 7.50853 59.0508 6.99716C59.3036 6.4858 59.6559 6.08665 60.1076 5.79972C60.5621 5.51279 61.0934 5.36932 61.7013 5.36932C62.0707 5.36932 62.4286 5.4304 62.7752 5.55256C63.1218 5.67472 63.4329 5.86648 63.7085 6.12785C63.984 6.38921 64.2013 6.7287 64.3604 7.14631C64.5195 7.56109 64.5991 8.06535 64.5991 8.6591L64.5991 9.1108L59.396 9.1108L59.396 8.15625L63.3505 8.15626C63.3505 7.82103 63.2823 7.52415 63.146 7.26563C63.0096 7.00427 62.8178 6.7983 62.5707 6.64773C62.3263 6.49716 62.0394 6.42188 61.7099 6.42188C61.3519 6.42188 61.0394 6.50995 60.7724 6.68608C60.5082 6.85938 60.3036 7.08665 60.1587 7.3679C60.0167 7.64631 59.9457 7.94887 59.9457 8.27557L59.9457 9.02131C59.9457 9.45881 60.0224 9.83097 60.1758 10.1378C60.332 10.4446 60.5494 10.679 60.8278 10.8409C61.1062 11 61.4315 11.0796 61.8036 11.0796C62.0451 11.0796 62.2653 11.0455 62.4641 10.9773C62.663 10.9063 62.8349 10.8011 62.9798 10.6619C63.1246 10.5227 63.2354 10.3509 63.3121 10.1463L64.5181 10.3636C64.4215 10.7188 64.2482 11.0298 63.9982 11.2969C63.7511 11.5611 63.44 11.7671 63.065 11.9148C62.6928 12.0597 62.2681 12.1321 61.7908 12.1321ZM72.3036 5.45455L72.3036 6.47728L68.6048 6.47728L68.6048 5.45455L72.3036 5.45455ZM69.619 12L69.619 4.69603C69.619 4.28694 69.7085 3.94745 69.8874 3.67756C70.0664 3.40484 70.3036 3.20171 70.5991 3.06819C70.8945 2.93182 71.2156 2.86364 71.5621 2.86364C71.8178 2.86364 72.0366 2.88495 72.2184 2.92756C72.4002 2.96734 72.5352 3.00427 72.6232 3.03836L72.3249 4.06961C72.2653 4.05256 72.1886 4.03268 72.0948 4.00995C72.0011 3.98438 71.8874 3.9716 71.7539 3.9716C71.4442 3.9716 71.2227 4.0483 71.0891 4.20171C70.9585 4.35512 70.8931 4.57671 70.8931 4.86648L70.8931 12L69.619 12ZM76.1175 12.1321C75.5039 12.1321 74.9684 11.9915 74.511 11.7102C74.0536 11.429 73.6985 11.0355 73.4457 10.5298C73.1928 10.0242 73.0664 9.43325 73.0664 8.75711C73.0664 8.07813 73.1928 7.48438 73.4457 6.97586C73.6985 6.46734 74.0536 6.07245 74.511 5.7912C74.9684 5.50995 75.5039 5.36933 76.1175 5.36933C76.7312 5.36933 77.2667 5.50995 77.7241 5.7912C78.1815 6.07245 78.5366 6.46734 78.7894 6.97586C79.0423 7.48438 79.1687 8.07813 79.1687 8.75711C79.1687 9.43325 79.0423 10.0242 78.7894 10.5298C78.5366 11.0355 78.1815 11.429 77.7241 11.7102C77.2667 11.9915 76.7312 12.1321 76.1175 12.1321ZM76.1218 11.0625C76.5195 11.0625 76.8491 10.9574 77.1104 10.7472C77.3718 10.5369 77.565 10.2571 77.69 9.90768C77.8178 9.55825 77.8817 9.1733 77.8817 8.75285C77.8817 8.33523 77.8178 7.95171 77.69 7.60228C77.565 7.25001 77.3718 6.96734 77.1104 6.75427C76.8491 6.5412 76.5195 6.43467 76.1218 6.43467C75.7212 6.43467 75.3888 6.5412 75.1246 6.75427C74.8633 6.96734 74.6687 7.25001 74.5408 7.60228C74.4158 7.95171 74.3533 8.33523 74.3533 8.75285C74.3533 9.1733 74.4158 9.55825 74.5408 9.90768C74.6687 10.2571 74.8633 10.5369 75.1246 10.7472C75.3888 10.9574 75.7212 11.0625 76.1218 11.0625ZM80.5909 12L80.5909 5.45455L81.8224 5.45455L81.8224 6.49433L81.8906 6.49433C82.0099 6.14205 82.2202 5.86507 82.5213 5.66336C82.8253 5.45882 83.169 5.35654 83.5526 5.35654C83.6321 5.35654 83.7259 5.35938 83.8338 5.36507C83.9446 5.37075 84.0312 5.37785 84.0937 5.38637L84.0937 6.60512C84.0426 6.59092 83.9517 6.57529 83.821 6.55825C83.6903 6.53836 83.5597 6.52842 83.429 6.52842C83.1278 6.52842 82.8594 6.59234 82.6236 6.72018C82.3906 6.84518 82.206 7.01989 82.0696 7.24433C81.9332 7.46592 81.8651 7.71876 81.8651 8.00285L81.8651 12L80.5909 12Z" fill="black"/>
        </svg>
    </div>
</section>