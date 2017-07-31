   <?php get_header(); ?>
    <div class="body-content">
        <div id="action-banner" class="bannerdiv">
            <i class="fa fa-phone" aria-hidden="true"></i> Miễn phí tư vấn <b>0901 395 886</b>
        </div>

        

        <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js" tppabs="http://magica.top/Scripts/main.js"></script>


    
    
    <!-- Hoa start -->
    <div>
        
        <div id="mini-action" class="callToAction">
            <div onclick="ShowAction()" class = "eModal-1 minidiv"><i class="fa fa-comments" aria-hidden="true"></i> Miễn phí tư vấn</div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="309" title="Form-tu-van"]'); ?>

        <div class="col-md-12 paddingzero">
            <div id="banner" class="position_rdiv">
                <div class="vonghia"></div>
                <div class="head-bg-seo"></div>
                <div id="ani-1" class="ani-1-div">
                    <div class="topdiv">
                        <h1 id="toptext" class="toptextdiv">
                            <span>Dịch vụ SEO</span>
                        </h1>
                        <h4>
                            Mở cánh cửa đến với khách hàng
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    <div id="price" class="col-md-12 block bgrdfff">
        <div class="col-md-12 centdiv">
            <h2 class="marginbtdiv2">Các gói dịch vụ</h2>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 no-padding">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <h3>SEO Từ Khóa</h3>
                                <div class="row">
                                <div class="col-md-4 col-sm-4 package should-margin-bottom">
                                    <div class="border-round">
                                        <div class="header1">
                                            <h3>Gói 1</h3>
                                            <span class="sub">900,000 VNĐ</span>
                                        </div>
                                        <div class="body bodydiv">
                                            <p class="gray">Số lượng: 1 từ</p>
                                            <p class="gray">Cạnh tranh: thấp</p>
                                            <p class="gray">Top 10</p>
                                            <p class="gray">3 tháng</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-4 package should-margin-bottom">
                                    <div class="border-round">
                                        <div class="header2">
                                            <h3>Gói 2</h3>
                                            <span class="sub">1,200,000 VNĐ</span>
                                        </div>
                                        <div class="bodydiv body">
                                            <p class="gray">Số lượng: 1 từ</p>
                                            <p class="gray">Cạnh tranh: thấp</p>
                                            <p class="gray">Top 5</p>
                                            <p class="gray">3 tháng</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-4 package should-margin-bottom">
                                    <div class="border-round">
                                        <div class="header3">
                                            <h3>Gói 3</h3>
                                            <span class="sub">1,600,000 VNĐ</span>
                                        </div>
                                        <div class="bodydiv body">

                                            <p class="gray">Số lượng: 1 từ</p>
                                            <p class="gray">Cạnh tranh: thấp</p>
                                            <p class="gray">Top 3</p>
                                            <p class="gray">3 tháng</p>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="col-md-3 no-padding">
                                <h3>SEO Tổng Thể</h3>
                                <div class="col-md-12 package should-margin-bottom border-l">
                                    <div class="border-round">
                                        <div class="header4">
                                            <h3 class="marginbtdiv">Gói 4</h3>
                                            <p><span class="sub">Liên hệ để nhận báo giá</span></p>
                                        </div>
                                        <div class="bodydiv_h body">
                                            <p>Số từ: 50 - 200 từ tùy theo yêu cầu và ngành nghề của khách hàng</p>
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

    <div class="col-md-12 bgrd alignment-div" style="background-color: #eee;">
        <div class="margin-detail col-md-12">
            <h2 class="prof">MAGIC Sẽ Giúp Bạn</h2>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-4 col-sm-4 should-margin-bottom centdiv">
                            <div class="benefit bg-color-fff">
                                <div class="marginbtdiv">
                                    

                                    <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        global $wp_query;  
                                        $page = $wp_query->page;
                                        $image = get_field('hieu-ve-seo', $id);
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
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; 
                                    ?>
                                </div>
                                <h3>Hiểu về SEO</h3>
                                <p class="pdiv">Giúp bạn hiểu được SEO, tầm quan trọng và xây dựng chiến lược cho doanh nghiệp</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 should-margin-bottom centdiv">
                            <div class="benefit bg-color-fff">
                                <div class="marginbtdiv">
                                    <!-- <img style="height:150px" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/tuvan.png" tppabs="http://magica.top/Imgs/tuvan.png" /> -->

                                    <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        global $wp_query;  
                                        $page = $wp_query->page;
                                        $image = get_field('xay-dung-chien-luoc', $id);
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
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                </div>
                                            <?php endif; ?>
                                    <?php endif; ?>

                                </div>
                                <h3>Xây dựng chiến lược</h3>
                                <p class="pdiv">Giúp xây dựng chiến lược SEO hiệu quả và tối ưu</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 should-margin-bottom centdiv">
                            <div class="benefit bg-color-fff">
                                <div class="marginbtdiv">
                                    <!-- <img style="height:150px" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/topseo.png" tppabs="http://magica.top/Imgs/topseo.png" /> -->

                                    <?php 
                                    $id = null;
                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        global $wp_query;  
                                        $page = $wp_query->page;
                                        $image = get_field('toi-uu-roi1', $id);
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
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                </div>
                                            <?php endif; ?>
                                    <?php endif; ?>

                                </div>
                                <h3>Tối ưu ROI</h3>
                                <p class="pdiv">Tiếp cận tối đa đối tượng khách hàng tiềm năng với chi phí tối ưu nhất</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="measurement" class="col-md-12 measurementdiv">
        <div class="row">
            <div class="margin-detail col-md-12">
                <h2>Chỉ số đo lường thành công của dự án</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 centdiv space-div-talk">
                <div class="meas">
                    <p class="margintdiv"><i class="fa fa-fw fa-4x fa-usd" aria-hidden="true"></i></p>
                </div>
                <h4 class="fsizediv">
                    Doanh thu
                </h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 centdiv space-div-talk">
                <div class="meas">
                    <p class="margintdiv"><i class="fa fa-fw fa-4x fa-users" aria-hidden="true"></i></p>
                </div>
                <h4 class="fsizediv">
                    Tỷ lệ chuyển đổi khách hàng
                </h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 centdiv space-div-talk">
                <div class="meas">
                    <p class="margintdiv"><i class="fa fa-fw fa-4x fa-user-plus" aria-hidden="true"></i></p>
                </div>
                <h4 class="fsizediv">
                    Số khách hàng tiềm năng truy cập
                </h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 centdiv space-div-talk">
                <div class="meas">
                    <p class="margintdiv"><i class="fa fa-fw fa-4x fa-hand-pointer-o" aria-hidden="true"></i></p>
                </div>
                <h4 class="fsizediv">
                    Các chỉ số hành vi trên website
                </h4>
            </div>
        </div>

    </div>



    <div id="whyus" class="col-md-12 bgrdeee">
        <div class="col-md-12 paddiv">
            <h2 class="why">Tại Sao Lại Chọn Chúng Tôi?</h2>
            <div class="row">
                <div class="container">
                    <div class="col-md-12 no-padding">
                        <div class="col-md-3 col-sm-6">
                            <div class="col-sm-12 col-md-12 no-padding nopaddiv">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="imgcustomfdiv">
                                                    <!-- <img style="height:100%;" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/target.jpg" tppabs="http://magica.top/Imgs/target.jpg" /> -->

                                                    <?php 
                                                        $id = null;
                                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                                            $id = $page->ID;
                                                        }
                                                        else{
                                                         $id = null;                                        
                                                        }
                                                        global $wp_query;  
                                                        $page = $wp_query->page;
                                                        $image = get_field('tiep-can-dung-kh', $id);
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
                                                            <a  title="<?php echo $title; ?>">
                                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                            </a>
                                                            <?php if( $caption ): ?>
                                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="customerdiv">
                                                    Tiếp cận đúng khách hàng
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p>SEO đã thay đổi rất nhiều kể từ ngày mới xuất hiện, hầu hết các đơn vị truyền thống vẫn chỉ tìm cách đưa traffic vào website của bạn nhưng không giúp bạn bán hàng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="col-sm-12 col-md-12 no-padding nopaddiv">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="imgcustomfdiv">
                                                    <!-- <img style="height:100%;" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/strategy.jpg" tppabs="http://magica.top/Imgs/strategy.jpg" /> -->


                                                    <?php 
                                                        $id = null;
                                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                                            $id = $page->ID;
                                                        }
                                                        else{
                                                         $id = null;                                        
                                                        }
                                                        global $wp_query;  
                                                        $page = $wp_query->page;
                                                        $image = get_field('chien-luoc-kinh-doanh',$id);
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
                                                <div class="customerdiv">
                                                    Đồng bộ chiến lược kinh doanh
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p>Không đơn thuần là SEO, chúng tôi còn tìm hiểu về đặc thù ngành và chiến lược công ty bạn để SEO phải đồng bộ với chiến lược kinh doanh của bạn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="col-sm-12 col-md-12 no-padding nopaddiv">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="imgcustomfdiv">
                                                   <!--  <img style="height:100%;" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cheap.jpg" tppabs="http://magica.top/Imgs/cheap.jpg" /> -->

                                                    <?php 
                                                        $id = null;
                                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                                            $id = $page->ID;
                                                        }
                                                        else{
                                                         $id = null;                                        
                                                        }
                                                        global $wp_query;  
                                                        $page = $wp_query->page;
                                                        $image = get_field('toi-uu-roi2',$id);
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
                                                            <a  title="<?php echo $title; ?>">
                                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                                            </a>
                                                            <?php if( $caption ): ?>
                                                                    <p class="wp-caption-text"><?php echo $caption; ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                    <?php endif; ?>


                                                </div>
                                                <div class="customerdiv">
                                                    Tối ưu ROI
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p>
                                                    Dựa trên công nghệ SEO được cập nhật liên tục, và nền tảng khách hàng mà chúng tôi đã hệ thống được sau 8 năm kinh nghiệm, chúng tôi có thể giúp bạn tối ưu hiệu quả trên tổng số tiền đầu tư
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="col-sm-12 col-md-12 no-padding nopaddiv">
                                <div class="spoint">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <div class="imgcustomfdiv">
                                                    <!-- <img style="height:100%;" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/professional.jpg" tppabs="http://magica.top/Imgs/professional.jpg" /> -->


                                                    <?php 
                                                        $id = null;
                                                        if ( $page = get_page_by_path( 'seo', OBJECT, 'page' ) ){
                                                            $id = $page->ID;
                                                        }
                                                        else{
                                                         $id = null;                                        
                                                        }
                                                        global $wp_query;  
                                                        $page = $wp_query->page;
                                                        $image = get_field('dich-vu-chuyen-nghiep',$id);
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
                                                <div class="customerdiv">
                                                    Dịch vụ chuyên nghiệp
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p>
                                                    Tại Magic chúng tôi áp dụng quy trình kỹ thuật nghiêm ngặt, đội ngũ nhân viên làm việc dựa trên tinh thần hợp tác nhằm mang đến lợi ích cao nhất cho khách hàng

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


    <div id="inspire" class="col-md-12 inspirediv">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-10 col-lg-offset-1">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 whatdiv">
                        <h3>SEO là gì?</h3>
                        <p class="my-quote">
                            SEO (search engine optimization) là phương pháp giúp website của bạn đạt được thứ hạng cao trên kết quả tìm kiếm, qua đó giúp hàng nghìn khách hàng tiềm năng khi đang tìm kiếm về sản phẩm, dịch vụ ghé thăm website, gian hàng của bạn.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="infor" class="col-md-12 bgrdfff">
        <div class="col-md-12 haspaddiv">
            <h2 class="info2">SEO hiện đại và mối liên hệ đến doanh nghiệp</h2>
            <div class="row">
                <div class="col-md-10 col-lg-offset-1">
                    <div class="col-md-12 no-padding marginbtdiv">
                        <div class="col-md-6 col-sm-6 nopadldiv space-div-talk">
                            <div class="info info1">
                                <div class="cnt">
                                    <p>SEO hiện đại phải dẫn khách hàng đến sản phẩm, gian hàng của bạn, không phải dẫn đến bài viết hay blog </p>
                                </div>
                                <div class="img-i">
                                    <img class="widthdiv" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/inf1.png" tppabs="http://magica.top/Imgs/inf1.png" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 nopadrdiv space-div-talk">
                            <div class="info marginbtdiv3">
                                <div class="img-i2">
                                    <img class="widthdiv" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/inf2.png" tppabs="http://magica.top/Imgs/inf2.png" />
                                </div>
                                <div class="cnt2">
                                    <p>SEO phải đi từ hiểu biết về sản phẩm, dịch vụ, chiến lược của doanh nghiệp, không thể tách rời được</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 no-padding">
                        <div class="col-md-6 col-sm-6 nopadldiv space-div-talk">
                            <div class="info info1">
                                <div class="cnt">
                                    <p>Thành công lâu dài, bền vững của SEO phải đến từ cách trình bày website, cách tổ chức sản phẩm, gian hàng, chứ không phải đến từ kỹ thuật spam</p>
                                </div>
                                <div class="img-i">
                                    <img class="widthdiv" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/inf3.png" tppabs="http://magica.top/Imgs/inf3.png" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 nopadrdiv space-div-talk">
                            <div class="info">
                                <div class="img-i2">
                                    <img class="widthdiv" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/inf4.png" tppabs="http://magica.top/Imgs/inf4.png" />
                                </div>
                                <div class="cnt2">
                                    <p>Hiệu quả của SEO phải đo lường từ doanh số bán hàng, chứ không phải số lượng người vào website</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>

    </div>

    <div  id="flow" class="col-md-12 bgrd63c1af" >
        <div class="col-md-12 centdiv">
            <h2 class="marginbtdiv2">Quy trình làm việc</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="col-md-4 col-sm-4 package should-margin-bottom should-margin-bottom">
                                    <div class="step-contain">
                                        <div class="step1 step">
                                            <div>
                                                <span class="fa-stack fa-5x">
                                                    <span class="step-num"><span>1</span></span>
                                                    <i class="fa fa-circle fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-search fa-stack-1x color63c1af"></i>
                                                </span>

                                            </div>
                                            <div class="fsizediv2">Chẩn đoán miễn phí</div>
                                        </div>
                                        <div class="step-desc">
                                            <p>Chẩn đoán: Nội  dung, trải nghiệm người dùng, On-page, Off-page, Tình hình sức khỏe SEO hiện tại, Giới thiệu về các từ khóa/gốc từ khóa của ngành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 package should-margin-bottom should-margin-bottom">
                                    <div class="step-contain">
                                        <div class="step1 step">
                                            <div>
                                                <span class="fa-stack fa-5x">
                                                    <span class="step-num"><span>2</span></span>
                                                    <i class="fa fa-circle fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-list-ul fa-stack-1x color63c1af"></i>
                                                </span>
                                            </div>
                                            <div class="fsizediv2">Lấy yêu cầu</div>
                                        </div>
                                        <div class="step-desc">
                                            <p>Lấy yêu cầu về mục tiêu của dự án. Chia sẻ kiến thức về SEO để khách hàng định hình rõ mối liên hệ của SEO trong chiến lược của mình (nếu cần)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 package should-margin-bottom should-margin-bottom">
                                    <div class="step-contain">
                                        <div class="step1 step">
                                            <div>
                                                <span class="fa-stack fa-5x">
                                                    <span class="step-num"><span>3</span></span>
                                                    <i class="fa fa-circle fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-files-o fa-stack-1x color63c1af"></i>
                                                </span>
                                            </div>
                                            <div class="fsizediv2">Lập giải pháp/ký hợp đồng</div>
                                        </div>
                                        <div class="step-desc">
                                            <p>Tư vấn khách hàng để điều chỉnh mục tiêu (nếu cần).Thống nhất giải pháp.Ký hợp đồng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="col-md-4 col-sm-4 package should-margin-bottom should-margin-bottom">
                                    <div class="step-contain">
                                        <div class="step1 step">
                                            <div>
                                                <span class="fa-stack fa-5x">
                                                    <span class="step-num"><span>4</span></span>
                                                    <i class="fa fa-circle fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-calendar fa-stack-1x color63c1af"></i>
                                                </span>
                                            </div>
                                            <div class="fsizediv2">Lập kế hoạch</div>
                                        </div>
                                        <div class="step-desc">
                                            <p>Kế hoạch hành động về nội dung (content), on-page, off-page với thời gian cụ thể</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 package should-margin-bottom should-margin-bottom">
                                    <div class="step-contain">
                                        <div class="step1 step">
                                            <div>
                                                <span class="fa-stack fa-5x">
                                                    <span class="step-num"><span>5</span></span>
                                                    <i class="fa fa-circle fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-bar-chart fa-stack-1x color63c1af"></i>
                                                </span>
                                            </div>
                                            <div class="fsizediv2">Triển khai và báo cáo</div>
                                        </div>
                                        <div class="step-desc">
                                            <p>Báo cáo định kỳ 1/2 tuần</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 package should-margin-bottom should-margin-bottom">
                                    <div class="step-contain">
                                        <div class="step1 step">
                                            <div>
                                                <span class="fa-stack fa-5x">
                                                    <span class="step-num"><span>6</span></span>
                                                    <i class="fa fa-circle fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x colorfff"></i>
                                                    <i class="fa fa-tachometer fa-stack-1x color63c1af"></i>
                                                </span>
                                            </div>
                                            <div class="fsizediv2">Tổng kết</div>
                                        </div>
                                        <div class="step-desc">
                                            <p>Đánh giá về mức độ thực hiện. Không thanh toán cho các cam kết không thực hiện được. Kế hoạch tiếp theo</p>
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
    <div id="achievement" class="col-md-12">
        <div class="achievementdiv"></div>
        <div class="col-md-12 centdiv">
            <div class="marginbtdiv2">
                <h2>Thành Tích Của Chúng Tôi</h2>
                <h4><small>GIẢI PHÁP SEO HOÀN HẢO DÀNH CHO BẠN</small></h4>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-4 col-sm-4 achive">
                    <div class="h2">+1000</div>
                    Khách hàng đã SEO
                </div>
                <div class="col-md-4 col-sm-4 achive">
                    <div class="h2">+10000</div>
                    Từ khóa lên TOP
                </div>
                <div class="col-md-4 col-sm-4 achive">
                    <div class="h2">300%</div>
                    Lượng khách hàng tăng sau SEO
                </div>
            </div>
        </div>

    </div>

    <div id="testimonial" class="col-md-12 block testimonialdiv2">
        <div class="col-md-10 col-lg-offset-1 padbtdiv">
            <h2 class="usdiv">Mọi Người Nói Gì Về Chúng Tôi</h2>
            <div class="row">
                <div class="col-md-4 col-sm-4 space-div-talk">
                <div class="centdiv">
                    <img class="circleimg" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/t1.jpg" tppabs="http://magica.top/Imgs/t1.jpg" />
                </div>
                <div class="nhaydiv">
                    <i class="fa fa-fw fa-2x fa-quote-right"></i>
                </div>
                <div>
                    <p class="justdiv">Doanh thu của chúng tôi tăng rõ rệt sau khi chạy SEO các từ khóa xây dựng</p>
                    <h4 class="lastname">
                        Chị Thúy Hà
                    </h4>
                    <p class="company">Cty Xây Dựng MTV</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 space-div-talk">
                <div class="centdiv">
                    <img class="circleimg" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/t2.jpg" tppabs="http://magica.top/Imgs/t2.jpg" />
                </div>
                <div class="nhaydiv">
                    <i class="fa fa-fw fa-2x fa-quote-right"></i>
                </div>
                <div>
                    <p class="justdiv">Chi phí marketing giảm đáng kể sau khi sử dụng dịch vụ SEO của công ty Magic</p>
                    <h4 class="lastname">Chị Kim Na</h4>
                    <p class="company">Cty Sửa xe Kim Tiến</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 space-div-talk">
                <div class="centdiv">
                    <img class="circleimg" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/t3.png" tppabs="http://magica.top/Imgs/t3.png" />
                </div>
                <div class="nhaydiv">
                    <i class="fa fa-fw fa-2x fa-quote-right"></i>
                </div>
                <div>
                    <p class="justdiv">Sau khi sử dụng dịch vụ, kiến thức SEO của tôi được cải thiện. Giờ đây tôi có thể điều chỉnh chi phí marketing cho riêng mình</p>
                    <h4 class="lastname">Anh Tiến</h4>
                    <p class="company">Trưởng phòng kinh doanh Cty WonderWood</p>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</div>

        <?php get_footer(); ?>
    </div>
    
</body>
</html>
