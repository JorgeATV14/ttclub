<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        // 'vendor/karkitcss/datepicker-kv',
        
        'vendor/bootstrap/css/bootstrap.min.css',
        "vendor/font-awesome/css/font-awesome.min.css",
        "vendor/animate/animate.min.css",
        "vendor/simple-line-icons/css/simple-line-icons.min.css",
        "vendor/owl.carousel/assets/owl.carousel.min.css",
        "vendor/owl.carousel/assets/owl.theme.default.min.css",
        "vendor/magnific-popup/magnific-popup.min.css",

	/* Theme CSS */
	"css/theme.css",
	"css/theme-elements.css",
	"css/theme-blog.css",
	"css/theme-shop.css",

	/* Current Page CSS */
	"vendor/rs-plugin/css/settings.css",
	"vendor/rs-plugin/css/layers.css",
	"vendor/rs-plugin/css/navigation.css",
	

	/* Skin CSS */
	"css/skins/skin-photography.css",

	/* Theme Custom CSS */
	"css/custom.css",
        /* Slider CSS */
        "vendor/circle-flip-slideshow/css/component.css",
        "vendor/nivo-slider/nivo-slider.css",
        "vendor/nivo-slider/default/default.css",

    ];
    public $js = [
    	// 'vendor/karkitjs/bootstrap-datepicker',
    	// 'vendor/karkitjs/datepicker-kv',
        'vendor/modernizr/modernizr.min.js',
        // 'vendor/jquery/jquery.min.js',
        "vendor/jquery.appear/jquery.appear.min.js",
	"vendor/jquery.easing/jquery.easing.min.js",
	"vendor/jquery-cookie/jquery-cookie.min.js",
	"vendor/bootstrap/js/bootstrap.min.js",
	"vendor/common/common.min.js",
	"vendor/jquery.validation/jquery.validation.min.js",
	"vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js",
	"vendor/jquery.gmap/jquery.gmap.min.js",
	"vendor/jquery.lazyload/jquery.lazyload.min.js",
	"vendor/isotope/jquery.isotope.min.js",
	"vendor/owl.carousel/owl.carousel.min.js",
	"vendor/magnific-popup/jquery.magnific-popup.min.js",
	"vendor/vide/vide.min.js",
        /*Theme Base, Components and Settings */
	"js/theme.js",
	/* Current Page Vendor and Views 
        "vendor/rs-plugin/js/jquery.themepunch.tools.min.js",*/
	"vendor/circle-flip-slideshow/js/jquery.flipshow.min.js",
                /* slider nivo */
        "vendor/nivo-slider/jquery.nivo.slider.min.js",
	"js/views/view.home.js",
		
	/* Theme Custom */
        "js/custom.js",
		
        /* Theme Initialization Files */
        "js/theme.init.js",
        

    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
