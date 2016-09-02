<html>
    <head>
        <title>Technical Test</title>
        
        <!-- REPONSIVE VIEWPORT -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        
        <!-- STYLES -->
        <link rel="stylesheet" type="text/css" href="css/live/normalize-min.css">
        <link rel="stylesheet" type="text/css" href="css/live/style-min.css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!-- HEADER CONTTAINER: LOGO, NAV, SEARCH -->
        <header class="page">
            
            <div class="top">
                <div class="tools logo">
                    <img src="/imgs/logo.png" alt="Logo" />
                </div>

                <div class="tools quicklinks">Quicklinks&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <!--<div class="tools border"></div>-->
                <div class="tools select">Select from dropdown&nbsp;<i class="fa fa-arrows-v" aria-hidden="true"></i></div>
                
                <div class="tools input">
                    <input type="text" name="search" placeholder="Search for something" list="searchlist" /><i class="fa fa-clock-o" aria-hidden="true"></i>
                    <datalist id="searchlist">
                      <option value="PHP" />
                      <option value="JS" />
                      <option value="jQuery" />
                      <option value="HTML5" />
                      <option value="CSS3" />
                      <option value="Github" />
                      <option value="Grunt" />
                      <option value="LESS" />
                    </datalist>
                </div>
            </div>
            
            <nav class="page">
                <ul>
                    <li>
                        <a title="Travel Guide" href="">
                            <div>
                                <img src="/imgs/travel-guide.png" alt="Travel Guide" />
                                <span>
                                    Travel<span>&nbsp;Guide</span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a title="Services" href="">
                            <div>
                                <img src="/imgs/services.png" alt="Services" />
                                <span>
                                    Services
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a title="About" href="">
                            <div>
                                <img src="/imgs/about.png" alt="About" />
                                <span>
                                    About
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a title="Tour" href="">
                            <div>
                                <img src="/imgs/tour.png" alt="Tour" />
                                <span>
                                    Tour
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a title="How To" href="">
                            <div>
                                <img src="/imgs/how-to.png" alt="How To" />
                                <span>
                                    How To
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <!-- GALLERY CONTAINER -->
        <div class="fullpage">
            <div class="desktop">
                <div class="gallery" style="position: absolute;">
                    <div class="gallery-item"><img src="/imgs/banner-with-overlay.jpg" alt="main-banner" /></div>
                    <div class="gallery-item"><img src="/imgs/banner-with-overlay1.jpg" alt="main-banner" /></div>
                </div>
                <img src="/imgs/banner-with-overlay1.jpg" class="placeholder"  />
            </div>
            <div class="mobile">
                <div class="gallery" style="position: absolute;">
                    <div class="gallery-item"><img src="/imgs/banner-with-overlay - mob.jpg" alt="main-banner" /></div>
                    <div class="gallery-item"><img src="/imgs/banner-with-overlay1 - mob.jpg" alt="main-banner" /></div>
                </div>
                <img src="/imgs/banner-with-overlay1 - mob.jpg" class="placeholder"  />
            </div>
        </div>
        
        
        <!-- DARK CONTTAINER -->
        <div class="section-dark">
            <div class="page">
                <section>
                    <article>
                        <div class="content-padding">
                            <div class="article-title">
                                <h1>Anywhere, anytime, *we're here to help</h1>
                                <h4>And we mean that.</h4>
                            </div>
                            <img src="/imgs/map.png" alt="map" />

                            <img src="/imgs/features.png" alt="features" class="features" />
                        </div>
                    </article>
                </section>

                <!-- 3 COLUMN GRID -->
                <section class="grid">
                    <div class="grid-item col3">
                        <div class="content-padding">
                            <h2>Save Time</h2>
                            <p>Lets throw a trackie dacks also it'll be gutta. You little ripper avos flamin lets throw a lizard drinking. Gutful of jug where as busy as a big smoke. Grab us a billy as cunning as a bull bar. As cunning as a bonzer flamin as stands out like cubby house. As cross as a mate no dramas as cunning as a bonzer. Gutful of kindie flamin as cross as a grundies. Lets throw a strides also as cross as a thingo. Built like a old fella no dramas grab us a ten clicks away. Lets get some digger when she'll be right metho. As cross as a no dramas as cunning as a barrack.</p>
                        </div>
                    </div>
                    <div class="grid-item col3">
                        <div class="content-padding">
                            <h2>Win over the team</h2>
                            <p>As cunning as a bonzer flamin as stands out like cubby house. As cross as a mate no dramas as cunning as a bonzer. Gutful of kindie flamin as cross as a grundies. Lets throw a strides also as cross as a thingo. </p>
                            <p>Built like a old fella no dramas grab us a ten clicks away.</p>
                        </div>
                    </div>
                    <div class="grid-item col3">
                        <div class="content-padding">
                            <h2>Design Features</h2>
                            <p>Built like a old fella no dramas grab us a ten clicks away. Lets get some digger when she'll be right metho. As cross as a no dramas as cunning as a barrack.</p>
                            <p>A old fella no dramas grab us a ten clicks away. Lets get some digger when she'll be right metho. As cross as a no dramas as cunning as a barrack.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
        <div class="page">
            <section>
                <article>
                    <div class="article-title">
                        <h1>A humble team we are</h1>
                        <h4>*Well some of us anyways</h4>
                    </div>
                    
                    
                    <!-- SLIDER/CAROUSEL2 -->
                    <div class="slider">
                        <div class="slides">
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/dave.jpg" alt="dave" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Dave Dawson</div>
                                    <div class="meta2">UI/UX Developer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/candi.jpg" alt="candi" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Candi Lemoine</div>
                                    <div class="meta2">UI/UX Developer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/david.jpg" alt="david" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">David Echeverri</div>
                                    <div class="meta2">UI/UX Designer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/eric.jpg" alt="eric" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Eric Anderson</div>
                                    <div class="meta2">UI/UX Designer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/13064610_936958208974_2298837433589789813_o.jpg" alt="aled" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Aled Carver</div>
                                    <div class="meta2">Developer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/dave.jpg" alt="dave" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Dave Dawson</div>
                                    <div class="meta2">UI/UX Developer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/candi.jpg" alt="candi" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Candi Lemoine</div>
                                    <div class="meta2">UI/UX Developer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/david.jpg" alt="david" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">David Echeverri</div>
                                    <div class="meta2">UI/UX Designer</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-frame">
                                    <div class="slide-image">
                                        <div class="slide-twitter-cta">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <img src="/imgs/eric.jpg" alt="eric" />
                                    </div>
                                </div>
                                <div class="slide-caption">
                                    <div class="meta1">Eric Anderson</div>
                                    <div class="meta2">UI/UX Designer</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="slides-nav"></div>
                    </div>
                    
                    <div class="grid">
                        <div class="grid-item col2">
                            <div class="content-padding white">
                                <div class="grid-plus-cta"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                
                                <h2>Winning Design Awards</h2>
                                <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu turpis purus. Pellentesque ullamcorper mauris vitae sapien bibendum tincidunt. Check leo dignissim + </p>

                                <p>Morbi malesuada mauris sed nibh placerat sit amet posuere libero egestas. Vestibulum consectetur iaculis est, at dapibus purus malesuada vitae. Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.</p>

                                <p>Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.</p>
                            </div>
                        </div>
                        <div class="grid-item col2">
                            <div class="content-padding white">
                                <div class="grid-plus-cta"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                
                                <h2>Baddass Features</h2>
                                <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu turpis purus. Pellentesque ullamcorper mauris vitae sapien bibendum tincidunt. Check leo dignissim + </p>

                                <p>Morbi malesuada mauris sed nibh placerat sit amet posuere libero egestas. Vestibulum consectetur iaculis est, at dapibus purus malesuada vitae. Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.</p>

                                <p>Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="grid-item col1">
                            <div class="content-padding white">
                                <div class="grid-plus-cta"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                
                                <h2>Baddass Features</h2>
                                <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu turpis purus. Pellentesque ullamcorper mauris vitae sapien bibendum tincidunt. Check leo dignissim + </p>

                                <p>Morbi malesuada mauris sed nibh placerat sit amet posuere libero egestas. Vestibulum consectetur iaculis est, at dapibus purus malesuada vitae. Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.</p>

                                <p>Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        
        <div class="section-dark">
            <footer class="page">
                
                <img src="/imgs/logo-white.png" alt="" /> 
                
                <div class="social">
                    <ul>
                        <li>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <div>Twitter</div>
                        </li>
                        <li>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <div>Facebook</div>
                        </li>
                        <li>
                            <i class="fa fa-rss" aria-hidden="true"></i>
                            <div>RSS</div>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <div>Mail</div>
                        </li>
                    </ul>
                    
                </div>
                
                <div class="content-padding">
                    <p>Trent from punchy digger bloody gutful of mokkies. Get a dog up ya fair dinkum mate as cross as a flake. Stands out like a bluey flamin stands out like a pot. As stands out like christmas to grab us a ugg boots. She'll be right buckley's chance my as stands out like divvy van. It'll be smokes trent from punchy chewie. </p>

                    <p>It'll be gone walkabout flamin we're going roo bar. Shazza got us some mickey mouse mate flamin it'll be rort. We're going freo with grab us a his blood's worth bottling. Lets throw a stubby when mad as a rubbish. Gutful of battler mate lets throw a sanger.</p>
                </div>
            </footer>
        </div>
        
        <!-- DEFERRED SCRIPTS -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/c034146bc4.js"></script>

        <script type="text/javascript" src="js/live/scripts-min.js"></script>
    </body>
</html>