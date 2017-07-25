    <?php get_header(); ?>
    <div class="body-content">
        <div id="action-banner" style="position:fixed; bottom:0; left:0;text-align:center;background-color:#6ab139; color:#fff; width:100%;padding:10px;z-index:10000;font-size:15px">
            <i class="fa fa-phone" aria-hidden="true"></i> Miễn phí tư vấn <b>0901 395 886</b>
        </div>
      
        

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js" tppabs="http://magica.top/Scripts/main.js"></script>
<style>
    .head-bg{
            background-image: url("<?php bloginfo('template_directory');?>/image/mainbn.jpg")/*tpa=http://magica.top/Imgs/mainbn.jpg*/;
    }
    .benefit{
        background-color:transparent;
    }
    #feature{
     background-image: url("<?php bloginfo('template_directory');?>/image/services.jpg")/*tpa=http://magica.top/Imgs/services.jpg*/;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position:relative;
}
    .strength{
        background-color:#fff;
        padding:15px;
        font-size:17px;
        position:relative;
            box-shadow: 0 5px 5px -5px #333,-5px 5px 5px -5px #333,5px 5px 5px -5px #333;
    }
    .strength:hover  .hidden-content{
        display:block;
    }
    .hidden-content{
        background-color:#000;
        color:#fff;
        opacity:0.9;
        position:absolute;
        width:100%;
        display:none;
        height:100%;
        top: 0;
        left: 0;
        font-size:13px;
        padding:15px;
    }
</style>
<script>
    $(document).ready(function () {
        $("#banner2").css("height", $(window).height());
        $("#toptext2").css("margin-top", $(window).height() * 0.4);
    });
</script>

  <!-- Hoa start -->
    <div>
        
        <div id="mini-action" class="callToAction">
            <div onclick="ShowAction()" class = "eModal-1" style="text-align:center; font-size:20px; cursor:pointer"><i class="fa fa-comments" aria-hidden="true"></i> Miễn phí tư vấn</div>
        </div>

		<?php echo do_shortcode('[contact-form-7 id="309" title="Form-tu-van"]'); ?>

    <div class="col-md-12" style="padding: 0px">
        <div id="banner2">
            <div style="background-color:black; opacity:0.5; position:absolute; top:0;left:0;width:100%;height:100%;z-index:100;"></div>
            <div id="ani-1" style="position: absolute; left: 0;color: #fff; z-index: 200;top:0">
                <div style="position: relative; left: -25%;">
                    <h1 id="toptext2">
                        <span>Magic Marketing</span>
                    </h1>
                    <h4>
                        Thấu hiểu con đường tới khách hàng
                    </h4>
                </div>
            </div>
        </div>
    </div>
    

    <div id="feature" class="col-md-12" style="color:#fff;  position:relative">
        <div style="background-color:black; opacity:0.5; position:absolute; top:0;left:0;width:100%;height:100%;z-index:100;"></div>
        <div style="position:relative; z-index:200">
            <div class="margin-detail col-md-12">
                <h2>Các Dịch Vụ</h2>
            </div>
            <div class="col-md-12" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-4 should-margin-bottom" style="text-align:center">
                                <div class="benefit">
                                    <div style="margin-bottom:15px">
                                        <i class="fa fa-fw fa-5x fa-cogs" aria-hidden="true"></i>
                                    </div>
                                    <h3>Chẩn đoán doanh nghiệp </h3>
                                </div>

                            </div>
                            <div class="col-md-4 should-margin-bottom" style="text-align:center">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-ke-website" style="color: inherit">
                                    <div class="benefit">
                                        <div style="margin-bottom:15px">
                                            <i class="fa fa-fw fa-5x fa-pencil-square-o" aria-hidden="true"></i>
                                        </div>
                                        <h3>Thiết Kế Website</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 should-margin-bottom" style="text-align:center">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-ke-website" style="color: inherit">
                                    <div class="benefit">
                                        <div style="margin-bottom:15px">
                                            <i class="fa fa-fw fa-5x fa-check-square-o" aria-hidden="true"></i>
                                        </div>
                                        <h3>Tư Vấn Cải Tiến Website</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 should-margin-bottom" style="text-align:center">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/seo" style="color: inherit">
                                    <div class="benefit">
                                        <div style="margin-bottom:15px">
                                            <i class="fa fa-fw fa-5x fa-list-ol" aria-hidden="true"></i>
                                        </div>
                                        <h3>SEO</h3>
                                    </div>
                                </a>

                            </div>
                            <div class="col-md-4 should-margin-bottom" style="text-align:center">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/google-ads" style="color: inherit">
                                    <div class="benefit">
                                        <div style="margin-bottom:15px">
                                            <i class="fa fa-5x fa-fw fa-google" aria-hidden="true"></i>
                                        </div>
                                        <h3>Quảng Cáo Google</h3>
                                    </div>
                                </a>
                                
                            </div>

                            
                            <div class="col-md-4 should-margin-bottom" style="text-align:center">
                                <div class="benefit">
                                    <div style="margin-bottom:15px">
                                        <i class="fa fa-fw fa-5x fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <h3>Quảng Cáo Facebook</h3>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
    </div>




    <div id="whyus" class="col-md-12" style="background-color:#eee;">
        <div class="col-md-12" style="padding: 50px 0;">
            <h2 style="text-align:center; margin-top:0; margin-bottom:50px">Vấn đề hiện tại trên thị trường </h2>
            <div class="row">
                <div class="container">
                    <div class="col-md-12 no-padding">
                        <div class="col-sm-3">
                            <div class="col-sm-12 col-md-12 no-padding" style="display:inline-flex; margin-bottom:15px;width:100%">
                                <div class="spoint">
                                    <div class="flip-container" style="height:250px">
                                        <div class="flipper">
                                            <div class="front">
                                                <div style="width:100%; height:150px;text-align:center">
                                                    <img style="height:100%;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/tiemnang.jpg" tppabs="http://magica.top/Imgs/tiemnang.jpg" />
                                                </div>
                                                <div style="width:100%;text-align:center;font-size:18px;margin-top: 15px;">
                                                    Tiềm năng chưa được khai thác
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p style="padding-top:20px">Hầu hết các công ty chưa được trang bị đầy đủ kiến thức để khai thác tiềm năng khách hàng vô cùng lớn đến từ các kênh online trong thời đại hành vi mua hàng của xã hội dựa vào rất lớn vào các công cụ online như Google, Facebook</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-sm-12 col-md-12 no-padding" style="display:inline-flex; margin-bottom:15px;width:100%">
                                <div class="spoint">
                                    <div class="flip-container" style="height:250px">
                                        <div class="flipper">
                                            <div class="front">
                                                <div style="width:100%; height:150px;text-align:center">
                                                    <img style="height:100%;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/khongamhieu.jpg" tppabs="http://magica.top/Imgs/khongamhieu.jpg" />
                                                </div>
                                                <div style="width:100%;text-align:center;font-size:18px;margin-top: 15px;">
                                                    Người thực thi không am hiểu kinh doanh
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p style="padding-top:20px">Hầu hết các nhân sự triển khai website, marketing online đều là chuyên viên kỹ thuật, nên đa số các giải pháp hiện tại thị trường cung cấp thường không đồng nhất với chiến lược kinh doanh của doanh nghiệp và không thật sự hỗ trợ vào việc tăng doanh số bán hàng cho doanh nghiệp</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-sm-12 col-md-12 no-padding" style="display:inline-flex; margin-bottom:15px;width:100%">
                                <div class="spoint">
                                    <div class="flip-container" style="height:250px">
                                        <div class="flipper">
                                            <div class="front">
                                                <div style="width:100%; height:150px;text-align:center">
                                                    <img style="height:100%;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/cheap.jpg" tppabs="http://magica.top/Imgs/cheap.jpg" />
                                                </div>
                                                <div style="width:100%;text-align:center;font-size:18px;margin-top: 15px;">
                                                    Tiết kiệm chi phí làm website
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p style="padding-top:0px">Chi phí để triển khai 1 website trên thị trường rất đa dạng, có nhiều giải pháp giúp doanh nghiệp có được website với giá cực rẻ, thậm chí là miễn phí. Tuy nhiên, website là bộ mặt, là cửa hàng của doanh nghiệp giúp doanh nghiệp tạo được ấn tượng với khách hàng, việc chi trả nhiều tiền vào marketing, sales nhưng không đầu tư vào trải nghiệm trên cửa hàng để tăng tỷ lệ chuyển đổi là một sự lãng phí rất lớn.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-sm-12 col-md-12 no-padding" style="display:inline-flex; margin-bottom:15px;width:100%">
                                <div class="spoint">
                                    <div class="flip-container" style="height:250px">
                                        <div class="flipper">
                                            <div class="front">
                                                <div style="width:100%; height:150px;text-align:center">
                                                    <img style="height:100%;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/chiphicao.jpg" tppabs="http://magica.top/Imgs/chiphicao.jpg" />
                                                </div>
                                                <div style="width:100%;text-align:center;font-size:18px;margin-top: 15px;">
                                                    Chi phí quá cao
                                                </div>
                                            </div>
                                            <div class="back">
                                                <p style="padding-top:0px">Đa số các marketing agency đều đưa ra những gói hỗ trợ với chi phí rất cao, nhằm phục vụ cho các công ty lớn, làm cho việc tiếp cận kiến thức và phương pháp của các doanh nghiệp vừa và nhỏ gặp nhiều khó khăn. Ở Magic, chúng tôi thiết kế hệ thống để phục vụ riêng cho các doanh nghiệp vừa và nhỏ, hệ thống giúp các doanh nghiệp này dễ dàng tiếp cận được đến khả năng to lớn của Internet một cách dễ dàng nhất</p>
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
    <div class="col-md-12" style="background-color:#45a16b;color:#fff; height:250px">
        <div class="container">
            <div class="sub-text" style="text-align:center; font-size:20px;">Magic là một marketing agency ra đời để phục vụ cho các doanh nghiệp vừa và nhỏ cung cấp giải pháp toàn diện hướng đến một mục tiêu duy nhất là hiệu quả kinh doanh của khách hàng </div>
        </div>      
    </div>
    <div class="col-md-12" style="background-color:#fff;color:#000;padding:50px 15px">
        <div class="row">
            <div class="container">
                <div class="col-lg-8" style="position:relative; padding-right:0;">
                    <div class="hide-arrow" style="position:absolute;height:100%; width:160px;padding:25px 0; right:20%;">
                        <img style="height:100%" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block8.png" tppabs="http://magica.top/Imgs/block8.png" />
                    </div>
                   
                    <div style="text-align:center">
                        <img style="height:70px;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block1.jpg" tppabs="http://magica.top/Imgs/block1.jpg" />
                    </div>
                    <div style="text-align:center;">
                        <img style="height:30px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block6.jpg" tppabs="http://magica.top/Imgs/block6.jpg" />
                    </div>
                    <div style="text-align:center;">
                        <div class="hasHidden">
                            <img style="width:200px;position:absolute;left:0;top:0;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block2.jpg" tppabs="http://magica.top/Imgs/block2.jpg" />
                            <div class="ind-f1">
                                <span>Marketing</span>
                                <div class="child-ct">
                                    <ul>
                                        <li>Mục đích: tăng lượng khách hàng ghé cửa hàng, website của bạn với chi phí thấp nhất</li>
                                        <li>Yếu tố ảnh hưởng: Đối tượng khách hàng, thông điệp truyền tải, kênh triển khai  </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <img style="height:30px;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block7.jpg" tppabs="http://magica.top/Imgs/block7.jpg" />
                    </div>
                    <div style="text-align:center;">
                        <div class="hasHidden">
                            <img style="width:200px;position:absolute;left:0;top:0;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block3.jpg" tppabs="http://magica.top/Imgs/block3.jpg" />
                            <div class="ind-f1">
                                <span>Cửa hàng/ website</span>
                                <div class="child-ct">
                                    <ul>
                                        <li>Mục đích: tăng lượng khách hàng tương tác với bạn, tăng tỷ lệ chuyển đổi của người vào website</li>
                                        <li>Yếu tố ảnh hưởng: Trải nghiệm tốt (UX), giải quyết được vấn đề của khách hàng, tính kêu gọi hành động cao</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div style="text-align:center">
                        <img style="height:30px;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block7.jpg" tppabs="http://magica.top/Imgs/block7.jpg" />
                    </div>
                    <div style="text-align:center;">
                        <div class="hasHidden">
                            <img style="width:200px;position:absolute;left:0;top:0;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block4.jpg" tppabs="http://magica.top/Imgs/block4.jpg" />
                            <div class="ind-f1">
                                <span>Bán hàng</span>
                                <div class="child-ct">
                                    <ul>
                                        <li>Mục đích: Chốt đơn hàng, tăng tỷ lệ chuyển đổi của khách hàng liên hệ</li>
                                        <li>Yếu tố ảnh hưởng: Trải nghiệm dịch vụ, kỹ năng bán hàng.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <img style="height:30px;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block7.jpg" tppabs="http://magica.top/Imgs/block7.jpg" />
                    </div>
                    <div style="text-align:center">
                        <img style="height:70px;" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/block5.jpg" tppabs="http://magica.top/Imgs/block5.jpg" />
                    </div>
                </div>
                <div class="col-lg-4" style="color:#537ca0">
                    <div>
                        <div style="font-size:26px; text-align:justify">
                            <p style="margin-bottom:0">Hành trình chinh</p>
                            <p>phục khách hàng</p>
                        </div>
                        <div style="border-bottom: 2px solid #537ca0; margin: 5px 0 15px 0"></div>
                        <div style="font-size:17px; text-align:justify">
                            Hiểu được hành trình này giúp bạn dễ dàng hơn trong việc phân bổ chi phí cho từng công đoạn trong doanh nghiệp và phát hiện ra vấn đề hiện tại khiến bạn chưa thể có thêm nhiều khách hàng
                        </div>
                    </div>
                    
                </div>
            </div>
          
        </div>
     


    </div>

    <div id="strength" class="col-md-12" style="padding:50px 0; color:#000; background-color:#eee">
         <div class="col-md-12" style="text-align:center">
            <h2 style="margin-bottom:50px;color: #000">Sức Mạnh Của Chúng Tôi </h2>
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="col-lg-3 col-md-3 col-sm-3 should-margin-bottom">
                             <div class="strength">
                                 <div>
                                     <img style="height:100px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/dbcl.png" tppabs="http://magica.top/Imgs/dbcl.png" />
                                 </div>
                                 <div style="margin-top:15px">Chiến lược kinh doanh</div>
                                 <div class="hidden-content">
                                     Tất cả các giải pháp của chúng tôi đều hướng đến một mục tiêu chung là giúp bạn có được khách hàng và có được một chiến lược thống nhất xuyên suốt ở từng bước, từng kênh bạn triển khai 
                                 </div>
                             </div>
                            
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 should-margin-bottom">
                             <div class="strength">
                                 <div>
                                     <img style="height:100px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/kntk.png" tppabs="http://magica.top/Imgs/kntk.png" />
                                 </div>
                                 <div style="margin-top:15px">Kinh nghiệm triển khai</div>
                                 <div class="hidden-content">
                                     Dựa trên kinh nghiệm đã triển khai hàng trăm khách hàng từ lớn đến nhỏ, chúng tôi đã xây dựng nên một bộ kiến thức khá toàn diện để triển khai cho hầu hết các khách hàng 
                                 </div>
                             </div>                      
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 should-margin-bottom">
                             <div class="strength">
                                 <div>
                                     <img style="height:100px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/dnsl.png" tppabs="http://magica.top/Imgs/dnsl.png" />
                                 </div>
                                 <div style="margin-top:15px">Đội ngũ sáng lập</div>
                                 <div class="hidden-content">
                                     Các sáng lập viên là những người đã thành công trong việc thiết lập các công ty và thành công cùng những ứng dụng mới của công nghệ 
                                 </div>
                             </div>
                           
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 should-margin-bottom">
                             <div class="strength">
                                 <div>
                                     <img style="height:100px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/kndd.png" tppabs="http://magica.top/Imgs/kndd.png" />
                                 </div>
                                 <div style="margin-top:15px">Kỹ năng đa dạng</div>
                                 <div class="hidden-content">
                                     Chúng tôi sở hữu các kỹ năng khác nhau để tạo ra các giải pháp toàn diện cho các doanh nghiệp từ tư vấn chiến lược, thiết kế chiến dịch marketing, triển khai chiến dịch vào từng công cụ, đo lường và phân tích 
                                 </div>
                             </div>
                            
                         </div>

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
