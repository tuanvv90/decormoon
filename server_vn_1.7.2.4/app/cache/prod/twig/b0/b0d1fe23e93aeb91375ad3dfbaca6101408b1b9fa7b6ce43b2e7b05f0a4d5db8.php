<?php

/* __string_template__ea6cc25710ef815c04d489a97fdf954f13207eb19a334df479598a3907ddaf67 */
class __TwigTemplate_71be2022000994c3033f052c5ab240a9b21e5effae22dbcdda3249558a65efa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"vn\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Sản phẩm • Decor Moon</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'vn';
    var full_language_code = 'vi-vn';
    var full_cldr_language_code = 'vi-VN';
    var country_iso_code = 'VN';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Một đơn hàng mới đã được đặt trên cửa hàng của bạn.';
    var order_number_msg = 'Số đơn hàng: ';
    var total_msg = 'Tổng cộng: ';
    var from_msg = 'Từ: ';
    var see_order_msg = 'Xem đơn hàng này';
    var new_customer_msg = 'Một khách hàng mới đăng ký vào cửa hàng của bạn.';
    var customer_name_msg = 'Tên khách hàng: ';
    var new_msg = 'Một tin nhắn mới đã được đăng trên cửa hàng của bạn.';
    var see_msg = 'Đọc tin nhắn này';
    var token = 'd835056abbfe7c549154a51a56061c28';
    var token_admin_orders = '560f47be785ff7ec47c77f2a1e7c01e8';
    var token_admin_customers = 'e6c653f2f5b0bb82941ab0bdf4dafc90';
    var token_admin_customer_threads = '96c01e77522e3938efe8bf5be4f00f94';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '9e9e0d695db2311bb80f4e29b1be9613';
    var choose_language_translate = 'Chọn ngôn ngữ';
    var default_language = '1';
    var admin_modules_link = '/admin9945q9hrh/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Cập nhật thành công';
    var errorLogin = 'PrestaShop đã không thể đăng nhập vào Addons. Vui lòng kiểm tra thông tin của bạn và kết nối Internet của bạn.';
    var search_product_msg = 'Tìm kiếm một sản phẩm';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin9945q9hrh/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/advice-1.7.2.4_324.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin9945q9hrh/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin9945q9hrh\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"\\u0110\\u1ed3ng Vi\\u1ec7t Nam\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin9945q9hrh/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/admin9945q9hrh/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin9945q9hrh/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"324\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://decormoon.com/admin9945q9hrh/index.php?controller=AdminGamification&token=b4f01b2ad17e12d28ddca8944a8eed2f';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script> 
<style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>

";
        // line 89
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminDashboard&amp;token=fb000a11d01fd02c95714fad8ca4ae15\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Truy cập nhanh</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://decormoon.com/admin9945q9hrh/index.php/module/manage?token=9a1175151b3d25fbc8a6947a29bc04d3\"
                 data-item=\"Các mô-đun đã cài đặt\"
      >Các mô-đun đã cài đặt</a>
          <a class=\"dropdown-item\"
         href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCategories&amp;addcategory&amp;token=9467ec8cf77cc56e6a4895d2a2b09441\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f0b886cbd56f8d890c0385c4b0a441d1\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://decormoon.com/admin9945q9hrh/index.php/product/new?token=9a1175151b3d25fbc8a6947a29bc04d3\"
                 data-item=\"Sản phẩm mới\"
      >Sản phẩm mới</a>
          <a class=\"dropdown-item\"
         href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=9ae2e790f30c2a8e52673652ee810d98\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
          <a class=\"dropdown-item\"
         href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminOrders&amp;token=560f47be785ff7ec47c77f2a1e7c01e8\"
                 data-item=\"Đơn hàng\"
      >Đơn hàng</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"143\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminQuickAccesses&token=82010575a16f14e0be207e8e5007f29b\"
        data-prompt-text=\"Vui lòng đặt tên phím tắt này:\"
        data-link=\"Sản phẩm - Dạng danh mục\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Thêm trang hiện tại vào truy cập nhanh QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminQuickAccesses&token=82010575a16f14e0be207e8e5007f29b\">
      <i class=\"material-icons\">settings</i>
      Quản lý các thao tác truy cập nhanh
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin9945q9hrh/index.php?controller=AdminSearch&amp;token=9d58f85b50414076087d0c7b02696637\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Tìm kiếm (ví dụ: tham chiếu sản phẩm, tên khách hàng...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Mọi nơi
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Mọi nơi\" href=\"#\" data-value=\"0\" data-placeholder=\"Bạn đang tìm kiếm thứ gì?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Mọi nơi</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Danh mục\" href=\"#\" data-value=\"1\" data-placeholder=\"Tên, mã, tham chiếu sản phẩm...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Danh mục
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Khách hàng bằng tên\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, tên...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Khách hàng bằng tên
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Khách hàng bằng địa chỉ Ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Khách hàng theo địa chỉ IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Đơn hàng\" href=\"#\" data-value=\"3\" data-placeholder=\"ID đơn đặt hàng\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Đơn hàng
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Biên nhận\" href=\"#\" data-value=\"4\" data-placeholder=\"Số hóa đơn\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Biên nhận
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Giỏ hàng\" href=\"#\" data-value=\"5\" data-placeholder=\"Mã ID thẻ\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Giỏ hàng
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Các mô-đun\" href=\"#\" data-value=\"7\" data-placeholder=\"Tên module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Các mô-đun
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">TÌM KIẾM<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/decormoonecom%40gmail.com.jpg\" /><br>
      <span>Moon Decor</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminEmployees&amp;token=9e9e0d695db2311bb80f4e29b1be9613&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Hồ sơ của bạn
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminLogin&amp;token=ec6c1acaa9cf31df505a13753916676a&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Đăng xuất
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Đơn hàng<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Khách hàng<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Tin nhắn<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có đơn hàng mới vào lúc này :(<br>
              Gần đây bạn đã chọn tỉ giá chuyển đổi chưa?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có khách hàng mới vào lúc này :(<br>
              Gần đây bạn có hoạt động trên mạng xã hội không?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có tin nhắn mới vào lúc này.<br>
              Có nhiều thời gian hơn cho hoạt động khác!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      từ <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://decormoon.com/\" target= \"_blank\">Decor Moon</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminDashboard&amp;token=fb000a11d01fd02c95714fad8ca4ae15\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Bảng điều khiển</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminOrders&amp;token=560f47be785ff7ec47c77f2a1e7c01e8\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Đơn hàng
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminOrders&amp;token=560f47be785ff7ec47c77f2a1e7c01e8\" class=\"link\"> Đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminInvoices&amp;token=5dd6772c0b69a1349477d416a7414923\" class=\"link\"> Biên nhận
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminSlip&amp;token=c95ae4687a7097dd0dca9af2a7f84933\" class=\"link\"> Phiếu tín dụng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminDeliverySlip&amp;token=b2abcdf792ede88c6cedd9b590bc59fc\" class=\"link\"> Phiếu giao hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCarts&amp;token=7618f717b883e3d6db71200f6e9031b2\" class=\"link\"> Giỏ hàng
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin9945q9hrh/index.php/product/catalog?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Danh mục
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin9945q9hrh/index.php/product/catalog?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\" class=\"link\"> Sản phẩm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCategories&amp;token=9467ec8cf77cc56e6a4895d2a2b09441\" class=\"link\"> Danh mục
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminTracking&amp;token=413bb003f3fa5ba6a6f48b23a482e7c6\" class=\"link\"> Giám sát
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminAttributesGroups&amp;token=0250ed14ac6412c709f50078aa040dcd\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminManufacturers&amp;token=0d8f06a2eec4e0f758d3ba16cb854a5d\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminAttachments&amp;token=74cc3b4e2342353c816f3ffbc80e6700\" class=\"link\"> Tập tin
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCartRules&amp;token=f0b886cbd56f8d890c0385c4b0a441d1\" class=\"link\"> Giảm giá
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin9945q9hrh/index.php/stock/?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCustomers&amp;token=e6c653f2f5b0bb82941ab0bdf4dafc90\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Khách hàng
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCustomers&amp;token=e6c653f2f5b0bb82941ab0bdf4dafc90\" class=\"link\"> Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminAddresses&amp;token=0919a7ba4542480179d87f1e176bf888\" class=\"link\"> Địa chỉ
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCustomerThreads&amp;token=96c01e77522e3938efe8bf5be4f00f94\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Dịch vụ Khách hàng
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCustomerThreads&amp;token=96c01e77522e3938efe8bf5be4f00f94\" class=\"link\"> Dịch vụ Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminOrderMessage&amp;token=0e00a1156d68e664c49cb14b61087579\" class=\"link\"> Tin nhắn đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminReturn&amp;token=a2e324d3f4f8d688fbfb48d9b54b60fc\" class=\"link\"> Hàng hóa trả lại
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminStats&amp;token=37877b6814eb1e9f72582f8f552f1fc2\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/admin9945q9hrh/index.php/module/catalog?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Các mô-đun
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin9945q9hrh/index.php/module/catalog?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminAddonsCatalog&amp;token=3d1a9c630631e6c1b946a6a7545808f1\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminThemes&amp;token=b69b5e4c3c27baaa13bc96fdea72d4d6\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminThemes&amp;token=b69b5e4c3c27baaa13bc96fdea72d4d6\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminThemesCatalog&amp;token=500c95b58208be1b960977acd0e09454\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCmsContent&amp;token=bef9134af0ac68a959150eb133b655bf\" class=\"link\"> Các trang
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminModulesPositions&amp;token=80029d076cfdb12db0480d0cea32f0c3\" class=\"link\"> Vị trí
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminImages&amp;token=ce51f32a75bd113534b1176bef30a62b\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminLinkWidget&amp;token=a50f0c490312a027b270eba15739cc53\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCarriers&amp;token=b0cd4cec2ca0899b196b349e5c5d6c96\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Vận chuyển
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCarriers&amp;token=b0cd4cec2ca0899b196b349e5c5d6c96\" class=\"link\"> Cty vận chuyển
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminShipping&amp;token=784c435005094b4f418f6a853d2bc77d\" class=\"link\"> Tùy chọn
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPayment&amp;token=ee32b1dc9a4e063ce853a664ee661cba\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Thanh toán
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPayment&amp;token=ee32b1dc9a4e063ce853a664ee661cba\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPaymentPreferences&amp;token=dd757c88ca9e4a27f9d2d3d30029d85d\" class=\"link\"> Tùy chọn
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminLocalization&amp;token=258d52d14323e12e6e9f79d57da171ef\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Quốc tế
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminLocalization&amp;token=258d52d14323e12e6e9f79d57da171ef\" class=\"link\"> Địa phương hóa
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCountries&amp;token=b7f0c01e9ee11fb3c717a4ac4109109e\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminTaxes&amp;token=a6cbea5990a32bdd8082110f4b2538d4\" class=\"link\"> Thuế
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminTranslations&amp;token=e37abb16809748fb21cb71bf65698a90\" class=\"link\"> Dịch
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Cấu hình</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPreferences&amp;token=138da98f123b4a45e5f6575dfd928345\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Shop Parameters
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPreferences&amp;token=138da98f123b4a45e5f6575dfd928345\" class=\"link\"> Chung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminOrderPreferences&amp;token=fd5735d60c43affb6d254d5c00475333\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPPreferences&amp;token=1b064f1c0662c567fed24659b8c619d5\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCustomerPreferences&amp;token=9cdf19d7e343bb4d12b576beaaf8b703\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminContacts&amp;token=c8717234dbe8597a38565bc298ad0779\" class=\"link\"> Liên hệ
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminMeta&amp;token=853d75aadc1793ed7541ec3aa6d57a28\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminSearchConf&amp;token=17a81b0d34be102be5a0e603069422e9\" class=\"link\"> Tìm kiếm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminGamification&amp;token=b4f01b2ad17e12d28ddca8944a8eed2f\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminInformation&amp;token=34e3c22aeff15277bf6be3d33b9bc4c6\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Thông số chi tiết
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminInformation&amp;token=34e3c22aeff15277bf6be3d33b9bc4c6\" class=\"link\"> Thông tin
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminPerformance&amp;token=c8e8a88a412f7b13dcbdc6c391386245\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminAdminPreferences&amp;token=f94a838549b7f9fa5ffc05f04c37d7b5\" class=\"link\"> Quản trị
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminEmails&amp;token=4522b6ad36f06953fdac5aa2c556dee3\" class=\"link\"> Hộp thư
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminImport&amp;token=ddae4c6a2f0b4c287700f080f8b2f84c\" class=\"link\"> Nhập vào
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminEmployees&amp;token=9e9e0d695db2311bb80f4e29b1be9613\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminRequestSql&amp;token=7b8b7508f1e52b33386a2d2a1d84cf4a\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminLogs&amp;token=c9ed90ae3a6bef71e95c930a189aab14\" class=\"link\"> Nhật ký
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminWebservice&amp;token=b17d23dac3e156c19a94c1285b71f8d0\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"120\">
              <span class=\"title\">SMARTBLOG</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"121\">
                  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminBlogCategory&amp;token=85d8c36e973b30a9d82702e8017a8260\" class=\"link\">
                    <i class=\"material-icons\">content_paste</i>
                    <span>
                    Blog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-121\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminBlogCategory&amp;token=85d8c36e973b30a9d82702e8017a8260\" class=\"link\"> Blog Category
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminBlogcomment&amp;token=ca41455dab12fb62ca7e06ad422db869\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminBlogPost&amp;token=d662ddfff5ec509b5a80471b3fe8203c\" class=\"link\"> Blog Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminImageType&amp;token=f1bb8c31ee25323cca86e1c2385522bd\" class=\"link\"> Image Type
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminAboutUs&amp;token=06ea182bcd36e84844aaf66a708dfe53\" class=\"link\"> AboutUs
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminCatalog&amp;token=a1d65162aa6d880c9603e60a15f870bb\">Danh mục</a>
                  </li>
      
              <li>
                      <a href=\"/admin9945q9hrh/index.php/product/catalog?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\">Sản phẩm</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Sản phẩm    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/admin9945q9hrh/index.php/product/new?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\"            title=\"Tạo một sản phẩm mới: CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Sản phẩm mới</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin9945q9hrh/index.php/module/catalog?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\"          title=\"Các module và các dịch vụ được đề xuất\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Các module và các dịch vụ được đề xuất</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Giúp đỡ\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin9945q9hrh/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fvn%252Fdoc%252FAdminProducts%253Fversion%253D1.7.2.4%2526country%253Dvn/Gi%C3%BAp%20%C4%91%E1%BB%A1?_token=f5K3_vDvM7n_XZH7vug7RmpeeVlultvsmjH0xHsH8iE\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Giúp đỡ</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-VN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/vn/login?email=decormoonecom%40gmail.com&amp;firstname=Moon&amp;lastname=Decor&amp;website=http%3A%2F%2Fdecormoon.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin9945q9hrh/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Không có tài khoản?</h4>
\t\t\t\t\t\t<p class='text-justify'>Khám phá sức mạnh của PrestaShop Addons! Khám phá Official Marketplace PrestaShop và tìm thấy hơn 3 500 mô-đun sáng tạo và chủ đề mà tối ưu hóa tỷ lệ chuyển đổi, tăng lưu lượng truy cập, xây dựng lòng trung thành của khách hàng và tối đa hóa năng suất của bạn</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Kết nối đến PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/vn/forgot-your-password\">Tôi quên mật khẩu của tôi</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/vn/login?email=decormoonecom%40gmail.com&amp;firstname=Moon&amp;lastname=Decor&amp;website=http%3A%2F%2Fdecormoon.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tTạo Tài khoản
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Đăng nhập
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1212
        $this->displayBlock('content_header', $context, $blocks);
        // line 1213
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1214
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1215
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1216
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"m-t-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"m-t-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"m-t-2\">
    Thank you.
  </p>
  <a href=\"http://decormoon.com/admin9945q9hrh/index.php?controller=AdminDashboard&amp;token=fb000a11d01fd02c95714fad8ca4ae15\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Quay lại
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Thời gian tải: \"></i> 0.414s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-VN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Liên hệ
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-VN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-VN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Diễn đàn
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-VN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-VN&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Đào tạo
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-VN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/vn/login?email=decormoonecom%40gmail.com&amp;firstname=Moon&amp;lastname=Decor&amp;website=http%3A%2F%2Fdecormoon.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin9945q9hrh/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Không có tài khoản?</h4>
\t\t\t\t\t\t<p class='text-justify'>Khám phá sức mạnh của PrestaShop Addons! Khám phá Official Marketplace PrestaShop và tìm thấy hơn 3 500 mô-đun sáng tạo và chủ đề mà tối ưu hóa tỷ lệ chuyển đổi, tăng lưu lượng truy cập, xây dựng lòng trung thành của khách hàng và tối đa hóa năng suất của bạn</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Kết nối đến PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/vn/forgot-your-password\">Tôi quên mật khẩu của tôi</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/vn/login?email=decormoonecom%40gmail.com&amp;firstname=Moon&amp;lastname=Decor&amp;website=http%3A%2F%2Fdecormoon.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tTạo Tài khoản
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Đăng nhập
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1381
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 89
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1212
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1213
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1214
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1215
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1381
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__ea6cc25710ef815c04d489a97fdf954f13207eb19a334df479598a3907ddaf67";
    }

    public function getDebugInfo()
    {
        return array (  1460 => 1381,  1455 => 1215,  1450 => 1214,  1445 => 1213,  1440 => 1212,  1431 => 89,  1423 => 1381,  1256 => 1216,  1253 => 1215,  1250 => 1214,  1247 => 1213,  1245 => 1212,  118 => 89,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ea6cc25710ef815c04d489a97fdf954f13207eb19a334df479598a3907ddaf67", "");
    }
}
