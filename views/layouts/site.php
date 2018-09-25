<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br"><!--<![endif]-->
<head>
     <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?=$titulo?></title>
    <meta name="description" content="Global Events 1959">
    <meta name="keywords" content="Eventos, sao paulo, alemanha, feiras">
    <meta name="author" content="http://geminiweb.com.br">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?=site_url()?>resources/site/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
   

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="<?=site_url()?>resources/site/assets/icon/globallogo.png">
    <link rel="apple-touch-icon-precomposed" href="<?=site_url()?>resources/site/assets/icon/apple-touch-icon-158-precomposed.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="front-page header-style-1 no-sidebar menu-has-search">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">
    <!-- Header Wrap -->
    <div id="site-header-wrap">
        <!-- Top Bar -->        
        <div id="top-bar">
            <div id="top-bar-inner" class="wprt-container">
                <div class="top-bar-inner-wrap">
                    <div class="top-bar-content">
                        <span class="text">Global Events 1959</span>
                    </div><!-- /.top-bar-content -->

                    <div class="top-bar-socials style-1">
                        <div class="inner">
                            <span class="icons">
                        <!--         
                                <a href="#" title="Facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#" title="Linkedin">
                                    <span class="fa fa-linkedin" aria-hidden="true"></span>
                                </a>
                                <a href="#" title="Skype">
                                    <span class="fa fa-skype" aria-hidden="true"></span>
                                </a> -->
                            </span>
                        </div>
                    </div><!-- /.top-bar-socials -->
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        
        <!-- Header -->
        <header id="site-header">
            <div id="site-header-inner" class="wprt-container">
                <div class="wrap-inner">
                    
                    <div id="site-logo" class="clearfix">
                        <div id="site-logo-inner">
                             <a href="<?=site_url()?>" title="Contrucst" rel="home" class="main-logo">
                                <img src="<?=site_url()?>resources/site/assets/img/globallogo.png" alt="Factory" data-retina="<?=site_url()?>resources/site/assets/img/globallogo.png" data-width="173" data-height="61">
                            </a>       
                        </div>
                    </div><!-- #site-logo -->

                    <div class="mobile-button"><span></span></div><!-- //mobile menu button -->
                    
                    <div id="header-aside">
                        <div class="wprt-info">
                            <div class="inner">
                                
                                <div class="address"><div class="info-wrap">
                                    <div class="info-i"><span><i class="fa fa-map-marker"></i></span></div>
                                    
                                    <div class="info-c"><span class="font-heading">Brasil</span>
                                        <br>Rua 09 de Julho, nº 5143 CJ 22, Cep:  01407-906, São Paulo - SP
                                            <br>55 11 3073 1020<br/> 55 11 3073 1055
                                    </div>

                                    </div>
                                </div>    
                                <div class="address"><div class="info-wrap">
                                    <div class="info-i"><span><i class="fa fa-map-marker"></i></span></div>
                                    
                                    <div class="info-c"><span class="font-heading">Alemanha</span>
                                        <br><?=$contatoal['endereco']?>
                                        <br>(+49) 6371 4650 40<br/>&nbsp;
                                       

                                    </div>
                                    </div>
                                </div>

                          <!--       <div class="phone">
                                    <div class="info-wrap">
                                        <div class="info-i"><span><i class="fa fa-phone"></i></span></div>
                                        
                                        <div class="info-c">
                                            <span class="font-heading">Telefone</span>
                                            <br>55 11 3073 1020<br/> 55 11 3073 1055
                                            <br>49 175 664 81 43<br/>49 6371 4650 30</div>
                                        </div>
                                </div> -->

                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /#site-header-inner -->
            
            <div class="site-navigation-wrap">
                <div class="wprt-container inner">
                    
                    <nav id="main-nav" class="main-nav">
                        <ul>
                            <li ><a href="<?=site_url()."Sites/index"?>">HOME</a></li>
                            <li><a href="<?=site_url()."Sites/sobre"?>">SOBRE NÓS</a></li>

                            <li><a href="<?=site_url()."Sites/servicos"?>">SERVIÇOS</a>
                               <!--  <ul>
                                    <li><a href="page-services.html">SERVICES</a></li>
                                    <li><a href="page-service-detail.html">SERVICE DETAIL</a></li>
                                </ul> -->
                            </li>

                            <li><a href="<?=site_url()."Sites/portfolio"?>">EVENTOS</a>
                            </li>

                            <li><a href="<?=site_url()."Sites/contato"?>">CONTATO</a></li>
                        </ul>
                    </nav><!-- #main-nav -->

                 <!--    <div id="header-search">
                        <a class="header-search-icon" href="home.html#"><span class="fa fa-search"></span></a>
                        <form role="search" method="get" class="header-search-form" action="#">
                            <label class="screen-reader-text">Search for:</label>
                            <input type="text" value="" name="s" class="header-search-field" placeholder="Type and hit enter...">
                            <button type="submit" class="header-search-submit" title="Search">Search</button>
                        </form>
                    </div> --><!-- /#header-search -->
                </div>
            </div>
        </header>
        <!-- /Header -->
    </div>
    <!-- /Header Wrap -->
    <?php require $view.".php";?>
     <!-- Footer -->
    <footer id="footer">
        <div id="footer-widgets" class="wprt-container">
            <div class="wprt-row gutter-30">
                <div class="col-lg-3 col-md-3">
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <p><img src="<?=site_url()?>resources/site/assets/img/globallogo.png" class="center-block" width="146" height="47" alt="logo"></p>
                        </div>
                    </div>

                   <!--  <div class="widget widget_text">
                        Lorem ipsum dolor amet, consectetur adipiscing elit. Cras mollis, leo a condi mentum vehicula, dui tellus mattis et aliquet nisl tortor quis velit.
                    </div> -->

                  <!--   <div class="widget widget_socials">
                        <div class="socials style-2 clearfix">
                            <div class="icon">
                                <a target="_blank" href="home.html#">
                                <i class="fa fa-twitter"></i></a>
                            </div>

                            <div class="icon">
                                <a target="_blank" href="home.html#">
                                <i class="fa fa-facebook"></i></a>
                            </div>

                            <div class="icon">
                                <a target="_blank" href="home.html#"><i class="fa fa-google-plus"></i></a>
                            </div>

                            <div class="icon">
                                <a target="_blank" href="home.html#"><i class="fa fa-pinterest"></i></a>
                            </div>

                            <div class="icon">
                                <a target="_blank" href="home.html#">
                                <i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div><!-- /.span_1_of_4 -->


                <div class="col-lg-3 col-md-3">
                    <div class="widget widget_spacer">
                        <div class="spacer clearfix" data-desktop="29" data-mobi="0"></div>
                    </div>

                    <div id="widget_links-2" class="widget widget_links">
                        <h2 class="widget-title"><span>LINKS</span></h2>

                        <ul class="wprt-links clearfix col2">
                            <li>
                                <a href="<?=site_url()?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url()."Sites/sobre"?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    Sobre
                                </a>
                            </li>

                            <li >
                                <a href="<?=site_url()."Sites/servicos"?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    Serviços
                                </a>
                            </li>

                            <li>
                                <a href="<?=site_url()."Sites/portfolio"?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    Eventos
                                </a>
                            </li>

                            <li>
                                <a href="<?=site_url()."Sites/contato"?>">
                                    <i class="fa fa-angle-double-right"></i>
                                    Contato
                                </a>
                            </li>

                            <li>
                     </div>

                    <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                </div>
                    
                <div class="col-lg-3 col-md-3">
                    <div class="widget widget_spacer">
                        <div class="spacer clearfix" data-desktop="29" data-mobi="0"></div>
                    </div>

                    <div id="widget_information-2" class="widget widget_information">
                        <h2 class="widget-title"><span><?=$contatobr['titulo']?></span></h2>   

                        <ul class="clearfix style-4">
                            <li class="address"><i class="fa fa-map-marker"></i><span><?=$contatobr['endereco']?>
</span>
                            </li>

                            <li class="phone"><i class="fa fa-phone"></i><span><?=$contatobr['telefone']?>
</span>
                            </li> 
                            <li class="phone"><i class="fa fa-phone"></i><span><?=$contatobr['whats']?>
</span>
                            </li>

                            <li class="hour"><i class="fa fa-envelope"></i><span><?=$contatobr['email']?>
</span>
                                  
                        </ul>

                    </div>      
                </div><!-- /.span_1_of_4 --> 

                         <div class="col-lg-3 col-md-3">
                    <div class="widget widget_spacer">
                        <div class="spacer clearfix" data-desktop="29" data-mobi="0"></div>
                    </div>

                    <div id="widget_information-2" class="widget widget_information">
                        <h2 class="widget-title"><span><?=$contatoal['titulo']?></span></h2>   

                        <ul class="clearfix style-4">
                            <li class="address"><i class="fa fa-map-marker"></i><span><?=$contatoal['endereco']?></span>
                            </li>

                            <li class="phone"><i class="fa fa-phone"></i><span><?=$contatoal['telefone']?></span>
                            </li> 
                                  <li class="hour"><i class="fa fa-envelope"></i><span><?=$contatoal['email']?>
</span>
                            </li>
                         <!--    </li>

                            <li class="hour"><i class="fa fa-clock-o"></i><span>Horários: Seg - Sex: 8:00 - 17:00</span>
                            </li>    -->     
                        </ul>

                    </div>      
                </div><!-- /.span_1_of_4 -->
            </div><!-- /.wprt-row -->
        </div><!-- /#footer-widgets -->
    </footer>
    <!-- /Footer -->

    <!-- Bottom -->
    <div id="bottom" class="clearfix">
        <div id="bottom-bar-inner" class="wprt-container">
            <div class="bottom-bar-inner-wrap">
                <p class="copyright">Copyright <span class="fa fa-copyright"></span><a href="http://geminiweb.com.br" target="_blank">Gemini web Floripa 2017</a> - Todos os Direitos Reservados</p> 
            </div>
        </div>
    </div>
    <!-- /Bottom -->
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<?php require $js.".php";?>

</body>
</html>
