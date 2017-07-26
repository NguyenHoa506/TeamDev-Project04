<?php get_header(); ?>
    <div class="body-content">
        <div id="action-banner" class="bannerdiv">
            <i class="fa fa-phone" aria-hidden="true"></i> Miễn phí tư vấn <b>0901 395 886</b>
    </div>

    
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js" tppabs="http://magica.top/Scripts/main.js"></script>


    
    
    <!-- Hoa start -->
    <div>
        
        <div id="mini-action" class="callToAction">
           <div onclick="ShowAction()" class="minidiv"><i class="fa fa-comments" aria-hidden="true"></i> Miễn phí tư vấn</div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="309" title="Form-tu-van"]'); ?>

        <div class="col-md-12">
            <div class="row">
                <div id="banner" class="position_rdiv">
                    <div class="vonghia"></div>
                    <div class="head-bg-audit"></div>
                    <div id="ani-1" class="ani-1-div">
                        <div class="topdiv">
                            <h1 id="toptext" class="toptextdiv">
                                <span>SEO Audit</span>
                            </h1>
                            <h4>
                                Kiểm tra tình hình SEO của website cùng chuyên gia
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xs-12 div-head">
            <div class="row div-cach" align="center">
                <h2>Mục Đích</h2>
            </div>
            <div class="row div-cach">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="col-md-12">
                                <div class="circleimg2">
                                    <img class="div-imgh" src="<?php bloginfo('template_directory');?>/image/graph-analysis.png">
                                </div>
                                <div class="div-cach justdiv">
                                    <h5>Có cái nhìn khách quan từ bên ngoài về tình trạng SEO hiện tại</h5>
                                </div>
                            </div>
                        </div>  

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="col-md-12">
                                <div class="circleimg2">
                                    <img class="div-imgh" src="<?php bloginfo('template_directory');?>/image/refresh-button.png">
                                </div>
                                <div class="div-cach justdiv">
                                     <h5>Cập nhập những thay đổi mới nhất từ Google & cải tiến hệ thống SEO hiện tại</h5>                       
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="col-md-12">
                                <div class="circleimg2">
                                    <img class="div-imgh" src="<?php bloginfo('template_directory');?>/image/person-of-a-call-center-in-communication-with-headphones.png">
                                </div>
                                <div class="div-cach justdiv">
                                    <h5>Được hỗ trợ tư vấn chuyên sâu về từng vấn đề của SEO mà ít có team nào có thể bao quát hết được</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
    
    <!-- Hoa end -->

    
    <!-- Huong start 1-->
    <div id="whyus" class="col-md-12" >
        <div class="col-md-12" id="doi-tuong-audit">
            <h2 id="h2-doi-tuong">Đối tượng áp dụng</h2>
            <div class="row">
                <div class="container">
                    <div class="col-md-12 no-padding">
                        <div class="col-sm-4">
                            <div class="col-sm-12 col-md-12 no-padding doi-tuong">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="img-doi-tuong">
                                                    <?php 
                                                        $image = get_field('doanh-nghiep1');
                                                        if( !empty($image) ): 
                                                            $url = $image['url'];
                                                            $title = $image['hinhanh'];
                                                            $alt = $image['alt'];
                                                            $caption = $image['caption'];
                                                            $size = 'thumbnail';
                                                            $thumb = $image['sizes'][ $size ];
                                                            $width = $image['150px'][ $size . '-width' ];
                                                            $height = $image['sizes'][ $size . '-height' ];
                                                            if( $caption ): ?>
                                                                <div class="wp-caption">
                                                            <?php endif; ?>
                                                            <a title="<?php echo $title; ?>">
                                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                            </a>
                                                            <?php if( $caption ): ?>
                                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="ten-doi-tuong">
                                                    Doanh nghiệp đang triển khai
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p class="noi-dung-doi-tuong">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam perspiciatis nobis rerum sunt, optio suscipit! Consequatur, molestias consequuntur. Possimus, obcaecati quisquam dolores ab.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 col-md-12 no-padding doi-tuong">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="img-doi-tuong">
                                                    <?php 
                                                        $image = get_field('team-seo');
                                                        if( !empty($image) ): 
                                                            $url = $image['url'];
                                                            $title = $image['hinhanh'];
                                                            $alt = $image['alt'];
                                                            $caption = $image['caption'];
                                                            $size = 'thumbnail';
                                                            $thumb = $image['sizes'][ $size ];
                                                            $width = $image['150px'][ $size . '-width' ];
                                                            $height = $image['sizes'][ $size . '-height' ];
                                                            if( $caption ): ?>
                                                                <div class="wp-caption">
                                                            <?php endif; ?>
                                                            <a title="<?php echo $title; ?>">
                                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                            </a>
                                                            <?php if( $caption ): ?>
                                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="ten-doi-tuong">
                                                    Các team SEO
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p class="noi-dung-doi-tuong">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magni dignissimos quae sint praesentium nam doloribus, autem adipisci expedita asperiores nostrum sunt, in minima. Placeat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 col-md-12 no-padding doi-tuong">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="img-doi-tuong">
                                                    <?php 
                                                        $image = get_field('doanh-nghiep2');
                                                        if( !empty($image) ): 
                                                            // vars
                                                            $url = $image['url'];
                                                            $title = $image['hinhanh'];
                                                            $alt = $image['alt'];
                                                            $caption = $image['caption'];
                                                            // thumbnail
                                                            $size = 'thumbnail';
                                                            $thumb = $image['sizes'][ $size ];
                                                            $width = $image['150px'][ $size . '-width' ];
                                                            $height = $image['sizes'][ $size . '-height' ];
                                                            if( $caption ): ?>
                                                                <div class="wp-caption">
                                                            <?php endif; ?>
                                                            <a title="<?php echo $title; ?>">
                                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                            </a>
                                                            <?php if( $caption ): ?>
                                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="ten-doi-tuong">
                                                    Doanh nghiệp đang triển khai
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p class="noi-dung-doi-tuong">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptate repellat doloremque aperiam aliquid necessitatibus vero id est dolorem eius?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- huong end 1-->

    <div id="customer" class="col-md-12 text-center lg-screen" style="padding-top:2em; padding-bottom: 4em;">
        <h2 class="title-audit">Các hạng mục audit</h2>

        <div class="col-md-10 col-md-offset-1">
            <div class="row" style="margin-bottom: 2em;">

                <div class="col-md-4 col-sm-4 frame">

                        <div class="flip-container border-flip">
                            <div class="flipper">
                                <div class="front keyword content ">
                                        <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/attach.png">
                                        <h3 class="h3-lam">Hệ thống content</h3>
                                </div>
                                <div class="back keyword back-img">
                                
                                </div>
                                <div class="back keyword overlay">

                                </div>
                                <div class="back keyword">
                                <p class="back-text" style="padding-top: 0; color: white;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi!
                                    </p>
                                </div>


                            </div>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-4 frame">

                    <div class="flip-container border-flip">
                        <div class="flipper">
                            <div class="front keyword backlink ">
                                <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/settings.png">
                                <h3 class="h3-lam">Hệ thống backlink</h3>
                            </div>
                            <div class="back keyword back-img">
                                
                                </div>
                                <div class="back keyword overlay">

                                </div>
                                <div class="back keyword">
                                    <p class="back-text" style="padding-top: 0; color: white;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi!
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 frame">

                    <div class="flip-container border-flip">
                        <div class="flipper">
                            <div class="front keyword keyword-landing">
                                <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/analysis.png">
                                <h3 class="h3-lam">Keyword</h3>
                                <h3 class="h3-lam">Landing page</h3>
                            </div>
                            <div class="back keyword back-img">      
                                </div>
                                <div class="back keyword overlay">

                                </div>
                                <div class="back keyword">
                                <p class="back-text" style="padding-top: 0; color: white;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi!
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 frame">
                    <div class="flip-container border-flip">
                        <div class="flipper">
                            <div class="front keyword ux ">
                                <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/photo-camera.png">
                                <h3 class="h3-lam">UX</h3>
                            </div>
                            <div class="back keyword back-img">
                                
                                </div>
                                <div class="back keyword overlay">

                                </div>
                                <div class="back keyword">
                                <p class="back-text" style="padding-top: 0; color: white;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi!
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 frame">

                    <div class="flip-container border-flip">
                        <div class="flipper">
                            <div class="front keyword onpage">
                               <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/search.png">
                        <h3 class="h3-lam">Onpage</h3>
                            </div>
                            <div class="back keyword back-img">
                                
                                </div>
                                <div class="back keyword overlay">

                                </div>
                                <div class="back keyword">
                                <p class="back-text" style="padding-top: 0; color: white;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi!
                                    </p>
                                </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 col-sm-4 frame">

                    <div class="flip-container border-flip">
                        <div class="flipper">
                            <div class="front keyword link">
                                <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/sitemap.png">
                        <h3 class="h3-lam">Cấu trúc liên kết link </h3>
                            </div>
                            <div class="back keyword back-img">
                                
                                </div>
                                <div class="back keyword overlay">

                                </div>
                                <div class="back keyword">
                                <p class="back-text" style="padding-top: 0; color: white;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi!
                                    </p>
                                </div>
                        </div>
                    </div>
                    
                </div>
 

            </div>
  
            </div>
        </div>


        <div style="background-color: #efe4b0; padding-top: 1em; padding-bottom: 1em;" class="text-center mobile-screen">
            <h2 class="title-audit">Các hạng mục audit</h2>
            <div class="myClass  text-center" style="padding-left: 1em; padding-right: 1em;">

                <div class="flip-container border-flip frame-mobile">
                    <div class="flipper">
                        <div class="front keyword content ">
                            <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/attach.png">
                            <h3 class="h3-lam">Hệ thống content</h3>
                        </div>
                        <div class="back keyword back-img">
                            
                        </div>
                        <div class="back keyword overlay">

                        </div>
                        <div class="back keyword">
                            <p class="back-text" style="padding-top: 0; color: white;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi, necessitatibus!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-container border-flip frame-mobile">
                    <div class="flipper">
                        <div class="front keyword backlink ">
                            <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/settings.png">
                            <h3 class="h3-lam">Hệ thống backlink</h3>
                        </div>
                        <div class="back keyword back-img">
                            
                        </div>
                        <div class="back keyword overlay">

                        </div>
                        <div class="back keyword">
                            <p class="back-text" style="padding-top: 0; color: white;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi, necessitatibus!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-container border-flip frame-mobile">
                    <div class="flipper">
                        <div class="front keyword keyword-landing">
                            <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/analysis.png">
                            <h3 class="h3-lam">Keyword</h3>
                            <h3 class="h3-lam">Landing page</h3>
                        </div>
                        <div class="back keyword back-img">
                            
                        </div>
                        <div class="back keyword overlay">

                        </div>
                        <div class="back keyword">
                            <p class="back-text" style="padding-top: 0; color: white;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi, necessitatibus!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-container border-flip frame-mobile">
                    <div class="flipper">
                        <div class="front keyword ux ">
                            <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/photo-camera.png">
                            <h3 class="h3-lam">UX</h3>
                        </div>
                        <div class="back keyword back-img">
                            
                        </div>
                        <div class="back keyword overlay">

                        </div>
                        <div class="back keyword">
                            <p class="back-text" style="padding-top: 0; color: white;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi, necessitatibus!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-container border-flip frame-mobile">
                    <div class="flipper">
                        <div class="front keyword onpage">
                         <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/search.png">
                         <h3 class="h3-lam">Onpage</h3>
                     </div>
                     <div class="back keyword back-img">
                        
                    </div>
                    <div class="back keyword overlay">

                    </div>
                    <div class="back keyword">
                        <p class="back-text" style="padding-top: 0; color: white;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi, necessitatibus!
                        </p>
                    </div>
                </div>
            </div>

            <div class="flip-container border-flip frame-mobile">
                <div class="flipper">
                    <div class="front keyword link">
                        <img class="image-size-lam" alt="keyword" src="<?php bloginfo('template_directory');?>/image/sitemap.png">
                        <h3 class="h3-lam">Cấu trúc liên kết link </h3>
                    </div>
                    <div class="back keyword back-img">
                        
                    </div>
                    <div class="back keyword overlay">

                    </div>
                    <div class="back keyword">
                        <p class="back-text" style="padding-top: 0; color: white;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque dicta aperiam, soluta laboriosam veritatis quis tenetur magnam voluptates nobis temporibus nisi quidem commodi, necessitatibus!
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>

    
    
<!-- huong start 2-->
    <div id="price" class="col-md-12 block" >
        <div class="col-md-12" >
            <h2 class="h2-huong">Chi tiết dịch vụ</h2>
        </div>
        <div class="col-md-12" >
            <h3 class="h3-huong">
                2 triệu/lần bao gồm
            </h3>
        </div>
        <div class="col-md-12" id="dich-vu-audit">
            <div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 no-padding">
                            <div class="col-md-6 no-padding">
                                <div class="col-md-12 package should-margin-bottom border-l">
                                    <div class="border-round">
                                        <div class="header41">
                                            <?php 
                                                $image = get_field('dich-vu1');
                                                if( !empty($image) ): 
                                                $url = $image['url'];
                                                $title = $image['dichvu1'];
                                                $alt = $image['alt'];
                                                $caption = $image['dich'];
                                                $size = 'thumbnail';
                                                $thumb = $image['sizes'][ $size ];
                                                $width = $image['size'][ $size . '-width' ];
                                                $height = $image['sizes'][ $size . '-height' ];
                                                if( $caption ): ?>
                                                <div class="wp-caption">
                                                    <?php endif; ?>
                                                    <a title="<?php echo $title; ?>">
                                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                    </a>
                                                    <?php if( $caption ): ?>
                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="body noi-dung-dich-vu-audit" >
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque facilis veritatis beatae molestiae, a dignissimos? Et, exercitationem, natus. Asperiores est accusamus voluptate, ducimus distinctio nobis!
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 no-padding">
                                <div class="col-md-12 package should-margin-bottom border-l">
                                    <div class="border-round">
                                        <div class="header42">
                                            <?php 
                                                $image = get_field('dich-vu2');
                                                if( !empty($image) ): 
                                                $url = $image['url'];
                                                $title = $image['hinhanh'];
                                                $alt = $image['alt'];
                                                $caption = $image['caption'];
                                                $size = 'thumbnail';
                                                $thumb = $image['sizes'][ $size ];
                                                $width = $image['150px'][ $size . '-width' ];
                                                $height = $image['sizes'][ $size . '-height' ];
                                                if( $caption ): ?>
                                                <div class="wp-caption">
                                                    <?php endif; ?>
                                                    <a  title="<?php echo $title; ?>">
                                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                    </a>
                                                    <?php if( $caption ): ?>
                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="body noi-dung-dich-vu-audit">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit placeat sint voluptatum rem, magni in ad veniam eveniet cupiditate natus quas incidunt suscipit, earum quis?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Huong end 2-->
    
    <?php get_footer(); ?>
    </div>
</body>
</html>
