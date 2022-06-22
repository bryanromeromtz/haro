<!DOCTYPE html>
<html lang="es-ES" class="no-js">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://seminuevosharo.mx/xmlrpc.php">
    
    <title>$titulo &#8211; SEMINUEVOS HARO</title>
    <link rel="alternate" type="application/rss+xml" title="SEMINUEVOS HARO &raquo; Feed" href="https://seminuevosharo.mx/feed/" />
    <link rel="alternate" type="application/rss+xml" title="SEMINUEVOS HARO &raquo; RSS de los comentarios" href="https://seminuevosharo.mx/comments/feed/" />
	
		<?php
		$url = "http://seminuevosharo.mx/json/api_autos.php";
		$json = file_get_contents($url);
		$dato = json_decode($json,true);
		//$conv = $dato["data"][0]["image"];
		$conv = $dato["data"];
		?>
    
    <link rel='stylesheet' id='font-awesome-css'  href='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/css/font-awesome.min.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='owl.carousel-css'  href='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/css/frontend/owl.carousel.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-grid-css'  href='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/css/frontend/grid.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='light-gallery-css'  href='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/css/frontend/lightgallery.min.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-gdpr-styles-css'  href='https://seminuevosharo.mx/wp-content/plugins/gdpr-compliance-cookie-consent/assets/css/styles.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='stm_default_google_font-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C500%2C600%2C700%7COpen+Sans%3A300%2C400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-boostrap-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/bootstrap.min.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-font-awesome-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/font-awesome.min.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-select2-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/select2.min.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/jquery.fancybox.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-datetimepicker-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/jquery.stmdatetimepicker.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-jquery-ui-css-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/jquery-ui.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-service-icons-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/service-icons.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-boat-icons-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/boat-icons.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-moto-icons-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/motorcycle/icons.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-rental-icons-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/rental/icons.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-magazine-icons-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/magazine/magazine-icon-style.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-listing-two-icons-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/listing_two/icons.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-skin-custom-css'  href='https://seminuevosharo.mx/wp-content/uploads/stm_uploads/skin-custom.css?ver=99' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-custom-scrollbar-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/listing/jquery.mCustomScrollbar.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-frontend-customizer-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/frontend_customizer.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-style-animation-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/assets/css/animation.css?ver=4.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='stm-theme-style-css'  href='https://seminuevosharo.mx/wp-content/themes/motors/style.css?ver=4.2.5' type='text/css' media='all' />
    <style id='stm-theme-style-inline-css' type='text/css'>
    .lOffer-account-unit .lOffer-account-dropdown.stm-login-form-unregistered .stm_label { font-size: 13px; color: #888; display: none; } .lOffer-account { position: relative; display: block; margin: 12px 0 0 0; background-color: #eee; color: #5b6771; font-size: 12px; width: 28px; height: 28px; text-align: center; line-height: 28px; border-radius: 50%; display: none; text-decoration: none !important; }
    </style>
    <link rel='stylesheet' id='addtoany-css'  href='https://seminuevosharo.mx/wp-content/plugins/add-to-any/addtoany.min.css?ver=1.15' type='text/css' media='all' />
    <script type='text/javascript' async src='https://static.addtoany.com/menu/page.js'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' async src='https://seminuevosharo.mx/wp-content/plugins/add-to-any/addtoany.min.js?ver=1.1'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.8'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.8'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/classie.js?ver=4.2.5'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/vivus.min.js?ver=4.2.5'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.cookie.js?ver=4.2.5'></script>
    <script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.cascadingdropdown.js?ver=4.2.5'></script>
    <link rel='https://api.w.org/' href='https://seminuevosharo.mx/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://seminuevosharo.mx/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://seminuevosharo.mx/wp-includes/wlwmanifest.xml" /> 
    <link rel='prev' title='RAM LARAMI LIMITED 4X4 2021' href='https://seminuevosharo.mx/Listados/ram-larami-limited-4x4-2021/' />
    <link rel='next' title='AUDI A3 S LINE TA 2020' href='https://seminuevosharo.mx/Listados/audi-a3-s-line-ta-2020/' />
    <link rel="canonical" href="https://seminuevosharo.mx/Listados/bmw-x4-x-line-2020/" />
    <link rel='shortlink' href='https://seminuevosharo.mx/?p=49422' />
    <link rel="alternate" type="application/json+oembed" href="https://seminuevosharo.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fseminuevosharo.mx%2FListados%2Fbmw-x4-x-line-2020%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://seminuevosharo.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fseminuevosharo.mx%2FListados%2Fbmw-x4-x-line-2020%2F&#038;format=xml" />
        <script type="text/javascript">
            var stm_lang_code = 'es';
                        var ajaxurl = 'https://seminuevosharo.mx/wp-admin/admin-ajax.php';
            var stm_site_blog_id = "1";
            var stm_added_to_compare_text = "Added to compare";
            var stm_removed_from_compare_text = "was removed from compare";
                        var stm_already_added_to_compare_text = "You have already added 3 cars";
                    </script>
    <script type="text/javascript">function setREVStartSize(e){									

                            try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;

                                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					

                            }catch(d){console.log("Failure at Presize of Slider:"+d)}						

                        };</script>
    <style type="text/css" title="dynamic-css" class="options-output">.header-main{background-color: #000000;}</style>
    <noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	
            
    </head>
	<div class="container" style="position: relative;z-index: 100; width: 100%;">
      <div class="row" style="width: 100%;">
        <div class="col-3 text-left">
          <img src="./fotos/haro-logo.png" style="position: absolute; width: 25%;">
        </div>
          
          <div class="col-3 text-center" style="margin-top: 1%;" >
              <a href="https://seminuevosharo.mx/" style="text-decoration: none;font-size: 25px;">Inicio</a>
          </div>
          <div class="col-3 text-center" style="margin-top: 1%;">
            <a href="http://localhost/haroframework/carrusel.php/#tema1" style="text-decoration: none;font-size: 25px;">Vehiculos</a>
          </div>
          <div class="col-3 text-center" style="margin-top: 1%;">
              <a href="https://seminuevosharo.mx/contacto/" style="text-decoration: none;font-size: 25px;">Contacto</a>
          </div>
            
      </div>
    </div>

    <body class="listings-template-default single single-listings postid-49422 stm-template-listing stm-user-not-logged-in header_remove_compare header_remove_cart wpb-js-composer js-comp-ver-6.7.0 vc_responsive"  ontouchstart="">

		<div id="main" >
			<div class="title-box-disabled"></div>
	
<!-- Breads -->	

    <div class="stm-single-car-page" style="text-align: center;">
        
        
        <div class="container" style="text-align:center;">
            <div class="row ">
                <div class="col-10 text-center">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-9 ">
                            <div class="single-listing-car-inner">
                                <?php
                                    
                                    //echo $_GET["outputString"];
                                    $v2 = $_GET['outputString'];
                                    var_dump($conv[0]);
                                    //echo $v2;
                                    for($i=0; $i < count($conv); $i++){
                                    $imagen = $conv[$i]["image"];
                                    $titulo = $conv[$i]["titulo"];
                                    $precio = $conv[$i]["price"];
                                    $id = $conv[$i]["id"];
                                    $outputString = preg_replace('/\s+/', '-', $titulo);
                                    if($outputString == $v2){
                                        //echo "dentro del if";
                                        $t = "
                                    <div class='stm-listing-single-price-title heading-font clearfix'>
                                            <div class='price'>
                                                $precio
                                            </div>
                                            <h1 class='title'>
                                                $titulo	
                                            </h1>
                                        </div>
                                    ";
                                    echo ($t);
                                    }					
                                    }


                                ?>	
                        
                                <div class="stm-car-carousels stm-listing-car-gallery">
                                    <!--Actions-->
                                    <div class="stm-gallery-actions">
                                            <div class="stm-gallery-action-unit stm-listing-print-action">
                                                <a href="javascript:window.print()" class="car-action-unit stm-car-print heading-font">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                            </div>
                                            <div class="stm-gallery-action-unit stm-listing-favorite-action" data-id=<?php $id ?>>
                                                <i class="stm-service-icon-staricon"></i>
                                            </div>
                                            <div class="stm-gallery-action-unit compare" data-id=<?php $id ?> data-title=<?php $titulo ?>>
                                                <i class="stm-service-icon-compare-new"></i>
                                            </div>
                                            <div class="stm-gallery-action-unit">
                                                <i class="stm-icon-share"></i>
                                                <div class="stm-a2a-popup">
                                                    <div class="addtoany_shortcode">
                                                        <div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="https://seminuevosharo.mx/Listados/<?php $outputString ?>/" data-a2a-title=<?php $titulo ?>>
                                                            <a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fseminuevosharo.mx%2FListados%2Fbmw-x4-x-line-2020%2F&amp;linkname=BMW%20X4%20X%20LINE%202020" title="Facebook" rel="nofollow noopener" target="_blank"></a>
                                                            <a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fseminuevosharo.mx%2FListados%2Fbmw-x4-x-line-2020%2F&amp;linkname=BMW%20X4%20X%20LINE%202020" title="Twitter" rel="nofollow noopener" target="_blank"></a>
                                                            <a class="a2a_button_email" href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fseminuevosharo.mx%2FListados%2Fbmw-x4-x-line-2020%2F&amp;linkname=BMW%20X4%20X%20LINE%202020" title="Email" rel="nofollow noopener" target="_blank"></a>
                                                            <a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"></a>
                                                        </div>
                                                    </div>					
                                                </div>
                                            </div>
                                    </div>

                                    <div class="stm-big-car-gallery">
                                        <div class="stm-single-image" data-id="big-image-49423">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_0165-798x466.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img width="798" height="466" src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_0165-798x466.jpg" class="img-responsive wp-post-image" alt="" srcset="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9870-798x466.jpg 798w, https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9870-350x205.jpg 350w" sizes="(max-width: 798px) 100vw, 798px" />				
                                            </a>
                                    </div>
                        
                                        <div class="stm-single-image" data-id="big-image-49424">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9868-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9868-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49425">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9869-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9869-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49426">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9878-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9878-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49427">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9877-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9877-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49428">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9880-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9880-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49429">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9889-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9889-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49430">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9882-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9882-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49431">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9883-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9883-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49432">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9886-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9886-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49433">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9887-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9887-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49434">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9888-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9888-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49435">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9885-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9885-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49436">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9884-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9884-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49437">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9879-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9879-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49438">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9883-1-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9883-1-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49439">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9881-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9881-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49440">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9889-1-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9889-1-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49441">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9872-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9872-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                        <div class="stm-single-image" data-id="big-image-49442">
                                            <a href="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9873-799x599.jpg" class="stm_fancybox" rel="stm-car-gallery">
                                                <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9873-798x466.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                            </a>
                                        </div>
                                                    
                                </div>
                            

                                    <div class="stm-thumbs-car-gallery">
                                                    <div class="stm-single-image" id="big-image-49423">
                                            <img width="350" height="205" src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9870-350x205.jpg" class="img-responsive wp-post-image" alt="" srcset="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9870-350x205.jpg 350w, https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9870-798x466.jpg 798w" sizes="(max-width: 350px) 100vw, 350px" />				</div>
                                                                                                                                <div class="stm-single-image" id="big-image-49424">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9868-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49425">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9869-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49426">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9878-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49427">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9877-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49428">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9880-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49429">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9889-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49430">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9882-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49431">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9883-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49432">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9886-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49433">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9887-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49434">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9888-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49435">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9885-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49436">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9884-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49437">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9879-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49438">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9883-1-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49439">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9881-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49440">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9889-1-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49441">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9872-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                                                                            <div class="stm-single-image" id="big-image-49442">
                                                    <img src="https://seminuevosharo.mx/wp-content/uploads/2022/03/IMG_9873-350x205.jpg" alt="BMW X4 X LINE 2020 completo"/>
                                                </div>
                                                                        
                                    </div>
                    </div>
                </div>
            </div>


<!--Enable carousel-->
<script type="text/javascript">
	jQuery(document).ready(function($){
		var big = $('.stm-big-car-gallery');
		var small = $('.stm-thumbs-car-gallery');
		var flag = false;
		var duration = 800;

		var owlRtl = false;
		if( $('body').hasClass('rtl') ) {
			owlRtl = true;
		}

		big
			.owlCarousel({
				items: 1,
				rtl: owlRtl,
				smartSpeed: 800,
				dots: false,
				nav: false,
				margin:0,
				autoplay: false,
				loop: false,
				responsiveRefreshRate: 1000
			})
			.on('changed.owl.carousel', function (e) {
				$('.stm-thumbs-car-gallery .owl-item').removeClass('current');
				$('.stm-thumbs-car-gallery .owl-item').eq(e.item.index).addClass('current');
				if (!flag) {
					flag = true;
					small.trigger('to.owl.carousel', [e.item.index, duration, true]);
					flag = false;
				}
			});

		small
			.owlCarousel({
				items: 5,
				rtl: owlRtl,
				smartSpeed: 800,
				dots: false,
				margin: 22,
				autoplay: false,
				nav: true,
				loop: false,
				navText: [],
				responsiveRefreshRate: 1000,
				responsive:{
					0:{
						items:2
					},
					500:{
						items:4
					},
					768:{
						items:5
					},
					1000:{
						items:5
					}
				}
			})
			.on('click', '.owl-item', function(event) {
				big.trigger('to.owl.carousel', [$(this).index(), 400, true]);
			})
			.on('changed.owl.carousel', function (e) {
				if (!flag) {
					flag = true;
					big.trigger('to.owl.carousel', [e.item.index, duration, true]);
					flag = false;
				}
			});

		if($('.stm-thumbs-car-gallery .stm-single-image').length < 6) {
			$('.stm-single-car-page .owl-controls').hide();
			$('.stm-thumbs-car-gallery').css({'margin-top': '22px'});
		}
	})
</script>
					
	<div class="stm-single-car-listing-data">
		<table class="stm-table-main">
			<tr>
				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-service-icon-body_type"></i>
																				Tipo									</td>
									<td class="heading-font">
										
											Camioneta SUV
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-road"></i>
																				Kilometraje									</td>
									<td class="heading-font">
										
											16595 Km
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-fuel"></i>
																				Combustible									</td>
									<td class="heading-font">
										
											Gasolina
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
											</tr>
						<tr/>
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-transmission_fill"></i>
																				Transmision									</td>
									<td class="heading-font">
										
											Automática
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-drive_2"></i>
																				Manejo									</td>
									<td class="heading-font">
										
											N/A
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-service-icon-color_type"></i>
																				Interior									</td>
									<td class="heading-font">
										
											Piel
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
											</tr>
						<tr/>
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-engine_fill"></i>
																				Cilindros									</td>
									<td class="heading-font">
										
											4
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-key"></i>
																				Registrado									</td>
									<td class="heading-font">
										
											N/A
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-icon-time"></i>
																				Historial									</td>
									<td class="heading-font">
										
											N/A
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
											</tr>
						<tr/>
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-service-icon-hashtag"></i>
																				Stock id									</td>
									<td class="heading-font">
										
											49422
																			</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

				
					
					<td>
						<table class="inner-table">
														<tr>
																	<td class="label-td">
																					<i class="stm-service-icon-vin_check"></i>
																				VIN: 									</td>
									</td>
															</tr>
						</table>
					</td>
					<td class="divider-td"></td>

							</tr>
		</table>
	</div>
				

										<div class="stm-car-listing-data-single stm-border-top-unit ">
							                <div class="title heading-font">Características</div>
						                </div>
						

	<div class="stm-single-listing-car-features">
		<div class="lists-inline">
			<ul class="list-style-2" style="font-size: 13px;">
													<li>A/C: Frontal </li>
													<li>Pantalla</li>
													<li> Sonido de Agencia</li>
													<li>Cámara de reversa </li>
													</ul><ul class="list-style-2" style="font-size: 13px;">
									<li>Cruise Control</li>
													<li> Bolsas de Aire</li>
													<li>Piel</li>
													<li>Automáticas</li>
							</ul>
		</div>
	</div>

					
				<div class="stm-car-listing-data-single stm-border-top-unit">
<div class="title heading-font">Nota del vendedor</div>
</div>
<p>REESTRENEN IMPECABLE COMO NUEVO NO LO DUDES LO MEJOR DE LO MEJOR EN SEMINUEVOS HARO NO LO DUDES LO MEJOR DE LO MEJOR MARQUENOS AL 3338082913 NO LO DUDES COMPARENOS &#8230;</p>
			</div>
		</div>
	</div>
            <div class="clearfix">
                            </div>
        </div> <!--cont-->
    </div> <!--single car page-->
			</div> <!--main-->

		</div> <!--wrapper-->

	<!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "https://seminuevosharo.mx/wp-admin/admin-ajax.php";
</script>

    <script type="text/javascript">

        var currentAjaxUrl = 'https://seminuevosharo.mx/Listados/bmw-x4-x-line-2020/';

        var resetAllTxt = 'Reiniciar todo';

        var prevText = 'Previous';

        var nextText = 'Next';

        var is_rental = '';

        var file_type = 'file type noimg';

        var file_size = 'file size big';

        var max_img_quant = 'max imgs 3';

        </script>

<script type='text/javascript'>
const print_data = {"pom_html_top":"","pom_html_bottom":"","pom_do_not_print":"","pom_pause_time":""}
</script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/print-o-matic/js/printomat.js?ver=2.0.6'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/print-o-matic/js/print_elements.js?ver=1.0'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/js/frontend/jquery.cookie.js'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/js/frontend/owl.carousel.js'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/js/frontend/lightgallery.min.js'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/js/frontend/init.js'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/stm_vehicles_listing/assets/js/frontend/filter.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var stm_gdpr_vars = {"AjaxUrl":"https:\/\/seminuevosharo.mx\/wp-admin\/admin-ajax.php","error_prefix":"","success":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/plugins/gdpr-compliance-cookie-consent/assets/js/scripts.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery-migrate-1.2.1.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/bootstrap.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/isotope.pkgd.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.lazyload.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery-ui.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.touch.punch.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/select2.full.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.uniform.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.stmdatetimepicker.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/typeahead.jquery.min.js?ver=4.2.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var stm_i18n = {"remove_from_compare":"Eliminar de comparaci\u00f3n","remove_from_favorites":"Eliminar de favoritos"};
/* ]]> */
</script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/app.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/app-header-scroll.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/app-ajax.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/load-image.all.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/sell-a-car.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/filter.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?libraries=places&#038;language=es-ES&#038;ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/stm-google-places.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-content/themes/motors/assets/js/jquery.mCustomScrollbar.concat.min.js?ver=4.2.5'></script>
<script type='text/javascript' src='https://seminuevosharo.mx/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
function printabla() {

    var pages = $('.listing-list-loop.stm-listing-directory-list-loop.stm-isotope-listing-item.all').map(function() {

        var page = new Object();

        page.img   = $(this).find(".image").find(".image-inner img").data('original');

        page.title = $(this).find(".content").find(".meta-top .title").text();

        page.price = $(this).find(".content").find(".meta-top .price .normal-price .heading-font").text();

        page.body = $(this).find(".content").find(".meta-middle-unit.font-exists.body .value").text();

        page.mileage = $(this).find(".content").find(".meta-middle-unit.font-exists.mileage .value").text();

        page.fuel = $(this).find(".content").find(".meta-middle-unit.font-exists.fuel .value").text();

        page.drive = $(this).find(".content").find(".meta-middle-unit.font-exists.drive .value").text();

        page.cilindros = $(this).find(".content").find(".meta-middle-unit.font-exists.cilindros .value").text();



        return page;

    }).get();



    var publish = {

        Pages: pages

    }



    //var json_pages = JSON.parse(publish);



    var tabla = "<html><head><title></title></head><body><font size='8'><table  border='1'style='font-size: 18px; border-collapse: collapse;' id='table-lista'><tr><th>IMAGEN</th><th>TITULO</th><th>PRECIO</th><th>TIPO</th><th>KILOMETRAJE</th><th>COMBUSTIBLE</th><th>MANEJO</th><th>CILINDROS</th></tr>";



    $.each(publish.Pages, function(i, item) {



        tabla += "<tr>";

        tabla += "<td align='center'><img width='70' height='50' src='"+publish.Pages[i].img+"'></td>";

        tabla += "<td align='center'>" + publish.Pages[i].title + "</td>";

        tabla += "<td align='center'>" + publish.Pages[i].price + "</td>";

        tabla += "<td align='center'>" + publish.Pages[i].body + "</td>";

        tabla += "<td align='center'>" + publish.Pages[i].mileage + "</td>";

        tabla += "<td align='center'>" + publish.Pages[i].fuel + "</td>";

        tabla += "<td align='center'>" + publish.Pages[i].drive + "</td>";

        tabla += "<td align='center'>" + publish.Pages[i].cilindros + "</td>";

        tabla += "</tr>";

    });



    tabla += "</table></body></html>";



    var ventimp = window.open(' ', 'popimpr');

    ventimp.document.write(tabla);

    ventimp.document.close();

  

  setTimeout(function(){ ventimp.print(); ventimp.close(); }, 140);



}

</script>
<!-- end Simple Custom CSS and JS -->



	<div class="modal" id="get-car-calculator" tabindex="-1" role="dialog" aria-labelledby="myModalLabelCalc">
	<div class="modal-calculator">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header modal-header-iconed">
					<i class="stm-icon-steering_wheel"></i>

					<h3 class="modal-title" id="myModalLabelCalc">Calcular pago</h3>

					<div class="test-drive-car-name">BMW X4 X LINE 2020</div>
				</div>
				<div class="modal-body">

										<div class="stm_auto_loan_calculator">
						<div class="title">
							<i class="stm-icon-calculator"></i>
							<h5>Calculadora financiera</h5>
						</div>
						<div class="row">
							<div class="col-md-12">

								<!--Amount-->
								<div class="form-group">
									<div class="labeled">Precio del vehículo <span
											class="orange">($)</span></div>
									<input type="text" class="numbersOnly vehicle_price"
									       value="885000"/>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6">
										<!--Interest rate-->
										<div class="form-group md-mg-rt">
											<div class="labeled">Tipo de interés <span
													class="orange">(%)</span></div>
											<input type="text" class="numbersOnly interest_rate" value="" />
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<!--Period-->
										<div class="form-group md-mg-lt">
											<div class="labeled">Periodo <span
													class="orange">(mes)</span></div>
											<input type="text" class="numbersOnly period_month" value=""/>
										</div>
									</div>
								</div>

								<!--Down Payment-->
								<div class="form-group">
									<div class="labeled">Pago inicial <span
											class="orange">($)</span></div>
									<input type="text" class="numbersOnly down_payment" value=""/>
								</div>


								<a href="#"
								   class="button button-sm calculate_loan_payment dp-in">Calcular</a>


								<div class="calculator-alert alert alert-danger">

								</div>

							</div>

							<!--Results-->
							<div class="col-md-12">
								<div class="stm_calculator_results">
									<div class="stm-calc-results-inner">
										<div
											class="stm-calc-label">Mensualidad</div>
										<div class="monthly_payment h5"></div>

										<div
											class="stm-calc-label">Pago de intereses total</div>
										<div class="total_interest_payment h5"></div>

										<div
											class="stm-calc-label">Cantidad total a pagar</div>
										<div class="total_amount_to_pay h5"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<script type="text/javascript">
						(function ($) {
							"use strict";

							$(document).ready(function () {
								var vehicle_price;
								var interest_rate;
								var down_payment;
								var period_month;

                                var stmCurrency = "$";
                                var stmPriceDel = " ";
                                var stmCurrencyPos = "left";

								$('.calculate_loan_payment').click(function (e) {
									e.preventDefault();

									//Useful vars
									var current_calculator = $(this).closest('.stm_auto_loan_calculator');

									var calculator_alert = current_calculator.find('.calculator-alert');
									//First of all hide alert
									calculator_alert.removeClass('visible-alert');

									//4 values for calculating
									vehicle_price = parseFloat(current_calculator.find('input.vehicle_price').val());

									interest_rate = parseFloat(current_calculator.find('input.interest_rate').val());
									interest_rate = interest_rate / 1200;

									down_payment = parseFloat(current_calculator.find('input.down_payment').val());

									period_month = parseFloat(current_calculator.find('input.period_month').val());

									//Help vars

									var validation_errors = true;

									var monthly_payment = 0;
									var total_interest_payment = 0;
									var total_amount_to_pay = 0;

									//Check if not nan
									if (isNaN(vehicle_price)) {
										calculator_alert.text("Rellene el campo Precio del vehículo");
										calculator_alert.addClass('visible-alert');
										current_calculator.find('input.vehicle_price').closest('.form-group').addClass('has-error');
										validation_errors = true;
									} else if (isNaN(interest_rate)) {
										calculator_alert.text("Rellene el campo Tipo de interés");
										calculator_alert.addClass('visible-alert');
										current_calculator.find('input.interest_rate').closest('.form-group').addClass('has-error');
										validation_errors = true;
									} else if (isNaN(period_month)) {
										calculator_alert.text("Rellene el campo Periodo");
										calculator_alert.addClass('visible-alert');
										current_calculator.find('input.period_month').closest('.form-group').addClass('has-error');
										validation_errors = true;
									} else if (isNaN(down_payment)) {
										calculator_alert.text("Rellene el campo Pago inicial");
										calculator_alert.addClass('visible-alert');
										current_calculator.find('input.down_payment').closest('.form-group').addClass('has-error');
										validation_errors = true;
									} else if (down_payment > vehicle_price) {
										//Check if down payment is not bigger than vehicle price
										calculator_alert.text("El pago inicial no puede ser superior al precio del vehículo");
										calculator_alert.addClass('visible-alert');
										current_calculator.find('input.down_payment').closest('.form-group').addClass('has-error');
										validation_errors = true;
									} else {
										validation_errors = false;
									}

									if (!validation_errors) {
										var interest_rate_unused = interest_rate;
                                        var mathPow = Math.pow(1 + interest_rate, period_month);

										if(interest_rate == 0) {
											interest_rate_unused = 1;
										}

                                        monthly_payment = (interest_rate_unused != 1) ? (vehicle_price - down_payment) * interest_rate_unused * mathPow : (vehicle_price - down_payment) / period_month;
                                        var monthly_payment_div = (mathPow - 1);
                                        if(monthly_payment_div == 0) {
                                            monthly_payment_div = 1;
                                        }

										monthly_payment = monthly_payment/monthly_payment_div;
										monthly_payment = monthly_payment.toFixed(2);

										total_amount_to_pay = down_payment + (monthly_payment*period_month);
										total_amount_to_pay = (interest_rate == 0) ? vehicle_price : total_amount_to_pay.toFixed(2);

										total_interest_payment = total_amount_to_pay - vehicle_price;
										total_interest_payment = (interest_rate == 0) ? 0 : total_interest_payment.toFixed(2);

										current_calculator.find('.stm_calculator_results').slideDown();
                                        current_calculator.find('.monthly_payment').text(stm_get_price_view(monthly_payment, stmCurrency, stmCurrencyPos, stmPriceDel ));
                                        current_calculator.find('.total_interest_payment').text(stm_get_price_view(total_interest_payment, stmCurrency, stmCurrencyPos, stmPriceDel ));
                                        current_calculator.find('.total_amount_to_pay').text(stm_get_price_view(total_amount_to_pay, stmCurrency, stmCurrencyPos, stmPriceDel ));
									} else {
										current_calculator.find('.stm_calculator_results').slideUp();
										current_calculator.find('.monthly_payment').text('');
										current_calculator.find('.total_interest_payment').text('');
										current_calculator.find('.total_amount_to_pay').text('');
									}
								})

								$(".numbersOnly").on("keypress keyup blur", function (event) {
									//this.value = this.value.replace(/[^0-9\.]/g,'');
									$(this).val($(this).val().replace(/[^0-9\.]/g, ''));
									if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
										event.preventDefault();
									}

									if ($(this).val() != '') {
										$(this).closest('.form-group').removeClass('has-error');
									}
								});
							});

						})(jQuery);
					</script>
				</div>
			</div>
		</div>
	</div>
</div><div class="modal" id="test-drive" tabindex="-1" role="dialog" aria-labelledby="myModalLabelTestDrive">
	<form id="request-test-drive-form" action="https://seminuevosharo.mx/" method="post">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header modal-header-iconed">
					<i class="stm-icon-steering_wheel"></i>
					<h3 class="modal-title" id="myModalLabelTestDrive">Programar una prueba de conducción</h3>
					<div class="test-drive-car-name">BMW X4 X LINE 2020</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Nombre</div>
								<input name="name" type="text"/>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Correo electrónico</div>
								<input name="email" type="email" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Teléfono</div>
								<input name="phone" type="tel" />
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Mejor hora</div>
								<div class="stm-datepicker-input-icon">
									<input name="date" class="stm-date-timepicker" type="text" />
								</div>
							</div>
						</div>
					</div>
					<div class="mg-bt-25px"></div>
					<div class="row">
						                        <div class="col-md-7 col-sm-7">
                                                                                </div>
						<div class="col-md-5 col-sm-5">
							<button type="submit" class="stm-request-test-drive">Solicitar</button>
							<div class="stm-ajax-loader" style="margin-top:10px;">
								<i class="stm-icon-load1"></i>
							</div>
						</div>
					</div>
					<div class="mg-bt-25px"></div>
					<input name="vehicle_id" type="hidden" value="49422" />
					<input name="vehicle_name" type="hidden" value="" />
				</div>
			</div>
		</div>
	</form>
</div><div class="modal" id="get-car-price" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<form id="get-car-price-form" action="https://seminuevosharo.mx/" method="post" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header modal-header-iconed">
					<i class="stm-icon-steering_wheel"></i>
					<h3 class="modal-title" id="myModalLabel">Solicitar precio de coche</h3>
					<div class="test-drive-car-name">BMW X4 X LINE 2020</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Nombre</div>
								<input name="name" type="text"/>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Correo electrónico</div>
								<input name="email" type="email" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<div class="form-modal-label">Teléfono</div>
								<input name="phone" type="tel" />
							</div>
						</div>
					</div>
					<div class="row">
                        <div class="col-md-7 col-sm-7">
                                                    </div>
						<div class="col-md-5 col-sm-5">
							<button type="submit" class="stm-request-test-drive">Solicitar</button>
							<div class="stm-ajax-loader" style="margin-top:10px;">
								<i class="stm-icon-load1"></i>
							</div>
						</div>
					</div>
					<div class="mg-bt-25px"></div>
					<input name="vehicle_id" type="hidden" value="49422" />
				</div>
			</div>
		</div>
	</form>
</div><div class="single-add-to-compare">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9">
				<div class="single-add-to-compare-left">
					<i class="add-to-compare-icon stm-icon-speedometr2"></i>
					<span class="stm-title h5"></span>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="" class="compare-fixed-link pull-right heading-font">
					Comparar				</a>
			</div>
		</div>
	</div>
</div>
    
    <div class="modal_content"></div>

	</body>

</html>