        <div id="customer" class="col-md-12 col-sm-12 col-md-12 div-footer">
            <div class="margin-detail col-md-12">
                <h2 style="color:#6ab139">Khách Hàng Của Chúng Tôi</h2>
            </div>
            <div class="col-md-12 no-padding">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus1.jpg" tppabs="http://magica.top/Imgs/cus1.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer1',$id);                                        
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['size'][ $size . '-width' ];
                                            $height = $image['size'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  width="100%" height="auto"/>
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/cus6.jpg" tppabs="http://magica.top/Imgs/cus6.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer2',$id);
                                        if( !empty($image) ): 
                                            // vars
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $thumb = $image['sizes'][ $size ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  width="100%" height="auto"/>
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus3.jpg" tppabs="http://magica.top/Imgs/cus3.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer3',$id);
                                        if( !empty($image) ): 
                                            // vars
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $thumb = $image['sizes'][ $size ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  width="100%" height="auto"/>
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/cus7.jpg" tppabs="http://magica.top/Imgs/cus7.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer4',$id);
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['size'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  width="100%" height="auto" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">

                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus5.jpg" tppabs="http://magica.top/Imgs/cus5.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer5',$id);
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['size'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  width="100%" height="auto" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">

                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/cus2.jpg" tppabs="http://magica.top/Imgs/cus2.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer6',$id);
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['size'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a  <?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="100%" height="auto" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">

                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus4.jpg" tppabs="http://magica.top/Imgs/cus4.jpg" /> -->
                            <?php 
                                        $id = null;
                                        if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                            $id = $page->ID;
                                        }
                                        else{
                                         $id = null;                                        
                                        }
                                        $image = get_field('customer7',$id);
                                        if( !empty($image) ): 
                                            // vars
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            $thumb = $image['sizes'][ $size ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  width="100%" height="auto" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >
                <div class="row" >
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 footer">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footerlogo" style="padding-left: 18%; padding-top: 3em;">
                                <div class="row">
                                    <img style="height:60px" src="<?php bloginfo('template_directory');?>/image/LogoMagic.png" />
                                    <p>Mở cánh cửa đến với khách hàng</p>
                                </div>
                             
                            </div>                            
                        </div>
                        
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3 style="color:#fff">Liên hệ</h3>
                            <div class="col-md-6">
                                
                                <ul class="arr">
                                    <li><i class="fa fa-fw fa-map-marker" aria-hidden="true"></i> 
                                        <?php 
                                            $id = null;
                                            if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                                $id = $page->ID;
                                            }
                                            else{
                                             $id = null;                                        
                                            }
                                                global $wp_query;  
                                            $page = $wp_query->page;
                                            $addr = get_field('addr', $id); 
                                            if ($addr) {
                                                echo $addr;
                                            }
                                        ?>
                                        
                                    </li>
                                    <li><i class="fa fa-fw fa-phone" aria-hidden="true"></i>
                                        <?php 
                                            $id = null;
                                            if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                                $id = $page->ID;
                                            }
                                            else{
                                             $id = null;                                        
                                            }
                                            global $wp_query;  
                                            $page = $wp_query->page;
                                            $phone = get_field('phone-number', $id); 
                                            if ($phone) {
                                                echo $phone;
                                            }
                                        ?>
                                     </li>
                                    <li><i class="fa fa-fw fa-envelope" aria-hidden="true">
                                    </i> 
                                        <?php 
                                            $id = null;
                                            if ( $page = get_page_by_path( 'front', OBJECT, 'page' ) ){
                                                $id = $page->ID;
                                            }
                                            else{
                                             $id = null;                                        
                                            }
                                            global $wp_query;  
                                            $page = $wp_query->page;
                                            $email = get_field('email', $id); 
                                            if ($email) {
                                                echo $email;
                                            }
                                        ?>
                                    </li>
                                    <li><a style="color:#fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/cong-tac-vien">Cộng tác viên kinh doanh</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="arr">
                                    <li><a class="color-fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/lien-he">Liên hệ</a></li>
                                    <li><a class="color-fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></li>
                                    <li><a class="color-fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/ve-chung-toi">Về chúng tôi</a></li>
                                    <li class="provision"><a class="color-fff " href="<?php echo esc_url( home_url( '/' ) ); ?>/dieu-khoan-su-dung">Điều khoản sử dụng</a></li>
                                </ul>
                            </div>
                        </div>


 <!-- Modal -->
    <div id="myModal1" class="modal fade" tabindex="-1">
      <div class="modal-dialog" style="margin-left: 0">
        <div class="modal-content">
          <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">×</button>
                  <h4 class="modal-title">SUCESS</h4>
          </div>
          <div class="modal-body">Thank you for your messsage. It has been Sent.</div>
          <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



                        
                </div>
            </div>                        
        </footer>



        <!-- Modal -->
    <div id="myModal1" class="modal fade" tabindex="-1" style="text-align: center;">
      <div class="modal-dialog" style="margin-left: 0">
        <div class="modal-content">
          <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">×</button>
                  <h4 class="modal-title">SUCESS</h4>
          </div>
          <div class="modal-body">Thank you for your messsage. It has been Sent.</div>
          <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script type="text/javascript">
        function validatePhone(str) {
        var isphone = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g.test(str);
        return isphone;
    }

     function validateURL(site){
      // var issite = /\\b(https?|ftp|file)://[-a-zA-Z0-9+&@#/%?=~_|!:,.;]*[-a-zA-Z0-9+&@#/%=~_|]/;
       var issite = /\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/;
        return issite.test(site);
    }

    function resetInput() {
        $('input').val('');
        $('input').removeClass("has-error-input");
        $('input').parent().removeClass("has-error");
        $(".error").css("visibility", "hidden");
    }

    $('.mhn').click(function() {
        $('input').removeClass("has-error-input");
        $('input').parent().removeClass("has-error");
        $(".error").css("visibility", "hidden");
        var names = $('#names').val().trim();
        var site = $('#site').val().trim();
        var phone = $('#phone').val().trim();
        var message = $('#note').val().trim();
        var test = true;

        if (names == "") {
            $(".error").css("visibility", "visible");
            $("#names").addClass("has-error-input");
            test = false;
        }

        if (!validatePhone(phone)) {
            $(".error").css("visibility", "visible");
            $("#phone").addClass("has-error-input");
            test = false;
        }

        if (!validateURL(site)) {
            $(".error").css("visibility", "visible");
            $("#site").addClass("has-error-input");
            test = false;
        }

        if (!test) {
           alert('error');
           return false;
        }
    });
    </script>