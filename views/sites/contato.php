
<!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- Contact  -->
                        <div class="row-contact-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                        <div class="wprt-gmap-2 gmap" data-lat="-23.5783994" data-lng="-46.6769441" data-zoom="14" data-scrollwheel="false" data-icon="http://maps.google.com/mapfiles/marker_green.png"></div>
                                
                                        <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="wprt-content-box style-3">
                                            <div class="inner">
                                                <div class="wprt-headings  style-2 clearfix">
                                                    <h2 class="heading font-size-28"><?=$contato['subtitulo']?></h2>

                                                     <div class="desc"><?=$contato['texto']?></div>
                                                </div><!-- /.wprt-headings -->

                                                <div class="wprt-spacer clearfix" data-desktop="18" data-mobi="15" data-smobi="15"></div>

                                                <div class="wprt-list style-2 clearfix icon-left has-padding">
                                                    <div>
                                                        <span>
                                                            <span class="icon"><i class="dd-3-address"></i></span>
                                                            <span><b>Endereço:</b> <?=$contato['endereco']?></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="wprt-list style-2 clearfix icon-left has-padding">
                                                    <div>
                                                        <span>
                                                            <span class="icon"><i class="dd-1-phone"></i></span>
                                                            <span><b>Telefone 1:</b> <?=$contato['telefone']?></span>
                                                            <span><b>Telefone 2:</b> <?=$contato['whats']?></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="wprt-list style-2 clearfix icon-left has-padding">
                                                    <div>
                                                        <span>
                                                            <!-- <span class="icon"><i class="dd-1-time"></i></span> -->
                                                            <!-- <span><b>Horários:</b>Seg - Sex: 8:00 - 17:00</span> -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class="col-md-8">
                                        <div class="wprt-headings style-2 clearfix">
                                            <h2 class="heading font-size-28"><?=$contato['titulo']?></h2>
                                           
                                        </div><!-- /.wprt-headings -->
                                        <!-- class="contact-form wpcf7-form" -->
                                        <form  method="POST">
                                            <div class="wprt-contact-form-2">
                                                <span class="wpcf7-form-control-wrap name">
                                                    <input type="text" tabindex="1" id="name" name="nomeremetente" value="" class="wpcf7-form-control" placeholder="Nome *" required>
                                                </span>

                                                <span class="wpcf7-form-control-wrap email">
                                                    <input type="email" tabindex="2" id="email" name="emailremetente" value="" class="wpcf7-form-control" placeholder="E-mail *" required>
                                                </span>

                                                <span class="wpcf7-form-control-wrap message">
                                                    <textarea name="mensagem" tabindex="3" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Mensagem *" required></textarea>
                                                </span>

                                                <div class="wrap-submit">
                                                    <input type="submit" value="ENVIAR MENSAGEM" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- /Contact  -->
                    </div><!-- /.page-content -->
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div>
    <!-- /Main Content -->
