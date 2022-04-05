<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">Slideshow</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
    </div>
</section>
<!-- slideshow end -->
<!-- listings -->
<section class="hp-listings">
    <div class="region-listings-container">
        <div class="listings-slick-wrapper">
            <div class="listings-slick">
                <div class="listings-slick-gallery">
                    <a href="[blogurl]" aria-label="listings" class="listings-item">
                        <div class="listings-img canvas-wrapper">
                            <canvas width="577" height="396"></canvas>
                            <img alt="listings" class="img-listings canvas-img img-responsive"
                                src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-img-1.jpg" />
                        </div>
                        <div class="listings-content">
                            <h3>$4,000,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>

                        </div>
                        <div class="listings-content2">
                            <h3>$4,000,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>
                            <span class="site-btn"><span class="ai-font-arrow-b-n"></span> MORE DETAILS</span>
                        </div>
                    </a>
                    <a href="[blogurl]" aria-label="listings" class="listings-item">
                        <div class="listings-img canvas-wrapper">
                            <canvas width="541" height="653"></canvas>
                            <img alt="listings" class="img-listings canvas-img img-responsive"
                                src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-img-2.jpg" />
                        </div>
                        <div class="listings-content">
                            <h3>$3,000,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>

                        </div>
                        <div class="listings-content2">
                            <h3>$3,000,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>
                            <span class="site-btn"><span class="ai-font-arrow-b-n"></span> MORE DETAILS</span>
                        </div>
                    </a>
                    <a href="[blogurl]" aria-label="listings" class="listings-item">
                        <div class="listings-img canvas-wrapper">
                            <canvas width="431" height="396"></canvas>
                            <img alt="listings" class="img-listings canvas-img img-responsive"
                                src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-img-3.jpg" />
                        </div>
                        <div class="listings-content">
                            <h3>$4,200,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>

                        </div>
                        <div class="listings-content2">
                            <h3>$4,200,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>
                            <span class="site-btn"><span class="ai-font-arrow-b-n"></span> MORE DETAILS</span>
                        </div>
                    </a>
                    <a href="[blogurl]" aria-label="listings" class="listings-item">
                        <div class="listings-img canvas-wrapper">
                            <canvas width="690" height="396"></canvas>
                            <img alt="listings" class="img-listings canvas-img img-responsive"
                                src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-img-4.jpg" />
                        </div>
                        <div class="listings-content">
                            <h3>$4,500,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>

                        </div>
                        <div class="listings-content2">
                            <h3>$4,500,000</h3>
                            <p>1700 East Walnut Avenue, Suite 400,<br> El Segundo, aL 90245</p>
                            <span class="site-btn"><span class="ai-font-arrow-b-n"></span> MORE DETAILS</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="listings-text">
                <div class="site-title">
                    <h3>Featured</h3>
                    <h2><span class="title-bg">01</span> Listings</h2>
                    <span class="site-number">01</span>
                </div>
                <p>It is with great pleasure that Southeast Luxury Living welcomes you to Alabama, and to their website
                </p>
            </div>
        </div>
        <a href="[blogurl]" aria-label="View ALL PROPERTIES" class="site-btn"><span class="ai-font-arrow-b-n"></span>
            View ALL PROPERTIES</a>
    </div>
    <div class="listings-bg">
        <img alt="listings background" class="img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-bg.jpg" width="1600" height="914" />
    </div>
</section>
<!-- listings end -->
<!-- quick-search -->
<section class="hp-quick-search">
    <div class="region-quick-search-container">
        <div class="quick-search-form">
            <div class="primary-qs-item site-title">
                <h3>Quick</h3>
                <h2><span class="title-bg">02</span>Search</h2>
                <span class="site-number">02</span>
            </div>
            <div class="secondary-qs-item">
                <input type="text" placeholder="Location" aria-label="qs-fields" />
            </div>
            <div class="tertiary-qs-item">
                <input type="text" placeholder="Min Price" aria-label="qs-fields" />

            </div>
            <div class="fourth-qs-item">
                <input type="text" placeholder="Max Price" aria-label="qs-fields" />
            </div>
            <div class="fifth-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Beds</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="sixth-qs-item">

                <select aria-label="qs-fields">
                    <option value="">Baths</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="seventh-qs-item site-btn">
                <span class="ai-font-arrow-b-n"></span>
                <div class="qs-search"> <input type="submit" value="Search" aria-label="qs-submit" /> </div>
            </div>
            <div class="eight-qs-item">
                <p>Real Estate IDX Powered By IHomeFinder</p>
            </div>
        </div>
    </div>
</section>
<!-- quick-search end -->
<!-- welcome -->
<section class="hp-welcome">
    <div class="region-welcome-container">
        <div class="welcome-primary-section">
            <div class="site-title">
                <h3>MEET</h3>
                <h2><span class="title-bg">03</span> SOUTH EAST LUXURY LIVING</h2>
                <span class="site-number">03</span>
            </div>
            <p>SouthEast Luxury Living originated in Birmingham, Alabama as an extension of Elena Cardone's 10X Luxury
                Living Division of EXP Realty. Originally founded by Bobby Jones, Lori King and Mark Wilson, the team is
                growing at a rapid pace. The mission is to provide superior luxury services to our clients at any price
                point. Southeast Luxury Living is here to serve the needs of anyone from a first time home buyer to a
                multi-million dollar estate. Our real estate experts are carefully selected as having the qualities to
                best represent our clients. Southeast Luxury Living prides themselves in giving luxury services with
                southern hospitality and support.</p>
            <a href="[blogurl]" aria-label="READ MORE" class="site-btn"><span class="ai-font-arrow-b-n"></span> READ
                MORE</a>
        </div>
        <div class="welcome-secondary-section">
            <img alt="agent" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-img.jpg" />
        </div>
    </div>
    <div class="welcome-bg">
        <img alt="welcome background" class="img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-bg.jpg" width="1600" height="911" />
    </div>
</section>
<!-- welcome end -->
<!-- team -->
<section class="hp-team">
    <div class="region-team-container">
        <div class="site-title">
            <h3>MEET</h3>
            <h2><span class="title-bg">04</span> Mark, Bobby and Lori</h2>
            <span class="site-number">04</span>
        </div>
        <div class="team-slick-wrapper">
            <div class="team-slick">
                <a href="[blogurl]" aria-label="team" class="team-item">
                    <div class="team-img canvas-wrapper">
                        <canvas width="308" height="477"></canvas>
                        <img alt="team" class="img-team canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg" />
                    </div>
                    <div class="team-content">
                        <div class="tc-left">
                            <h3>Meet</h3>
                            <p>Mark</p>
                        </div>
                        <div class="tc-right">
                            <span class="ai-font-arrow-b-n"></span>
                        </div>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="team" class="team-item">
                    <div class="team-img canvas-wrapper">
                        <canvas width="308" height="477"></canvas>
                        <img alt="team" class="img-team canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg" />
                    </div>
                    <div class="team-content">
                        <div class="tc-left">
                            <h3>Meet</h3>
                            <p>Lori</p>
                        </div>
                        <div class="tc-right">
                            <span class="ai-font-arrow-b-n"></span>
                        </div>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="team" class="team-item">
                    <div class="team-img canvas-wrapper">
                        <canvas width="308" height="477"></canvas>
                        <img alt="team" class="img-team canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-3.jpg" />
                    </div>
                    <div class="team-content">
                        <div class="tc-left">
                            <h3>Meet</h3>
                            <p>Bobby</p>
                        </div>
                        <div class="tc-right">
                            <span class="ai-font-arrow-b-n"></span>
                        </div>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="team" class="team-item">
                    <div class="team-img canvas-wrapper">
                        <canvas width="308" height="477"></canvas>
                        <img alt="team" class="img-team canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-4.jpg" />
                    </div>
                    <div class="team-content">
                        <div class="tc-left">
                            <h3>Meet</h3>
                            <p>Joe</p>
                        </div>
                        <div class="tc-right">
                            <span class="ai-font-arrow-b-n"></span>
                        </div>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="team" class="team-item">
                    <div class="team-img canvas-wrapper">
                        <canvas width="308" height="477"></canvas>
                        <img alt="team" class="img-team canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-5.jpg" />
                    </div>
                    <div class="team-content">
                        <div class="tc-left">
                            <h3>Meet</h3>
                            <p>April</p>
                        </div>
                        <div class="tc-right">
                            <span class="ai-font-arrow-b-n"></span>
                        </div>
                    </div>
                </a>
                <!--  -->
                <a href="[blogurl]" aria-label="team" class="team-item">
                    <div class="team-img canvas-wrapper">
                        <canvas width="308" height="477"></canvas>
                        <img alt="team" class="img-team canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-5.jpg" />
                    </div>
                    <div class="team-content">
                        <h3>Meet</h3>
                        <p>April</p>
                    </div>
                </a>
            </div>
            <div class="team-slick-arrow">
                <span class="next ai-font-arrow-g-p"></span>
                <span class="next ai-font-arrow-g-n"></span>
            </div>
        </div>
        <a href="#" aria-label="Meet the team" class="site-btn"><span class="ai-font-arrow-b-n"></span> Meet the
            team</a>
    </div>
    <div class="team-bg">
        <img alt="team background" class="img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-bg.jpg" width="1600" height="549" />
    </div>
</section>
<!-- team end -->
<!-- join-team -->
<section class="hp-join-team">
    <div class="region-join-team-container">
        <div class="site-title">
            <h3>JOIN</h3>
            <h2><span class="title-bg">05</span>OUR TEAM</h2>
            <span class="site-number">05</span>
        </div>
        <div class="our-team-text">
            <p>It is with great pleasure that Southeast Luxury Living welcomes you to Alabama, and to their website.
                With years of experience in the market, they know how crucial it is for you to find relevant, up-to-
                date information. The search is over. Their website is designed to be your one-stop shop for real estate
                in Alabama.</p>
            <a href="#" aria-label="Join Us" class="site-btn"><span class="ai-font-arrow-b-n"></span> Join Us</a>
        </div>
    </div>
</section>
<!-- join-team end -->
<!-- properties -->
<section class="hp-properties">
    <div class="region-properties-container">
        <div class="site-title">
            <h3>PROPERTIES</h3>
            <h2><span class="title-bg">05</span>YOU CAN EXPLORE</h2>
            <span class="site-number">05</span>
        </div>
        <div class="properties-gallery-image-container">
            <a href="[blogurl]" aria-label="properties-image" class="properties-image">
                <div class="properties-item canvas-wrapper">
                    <canvas width="373" height="159"></canvas>
                    <img alt="properties-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-img-1.jpg">
                </div>
                <div class="explore-content">
                    <p>Luxury</p>
                    <h3>Communities</h3>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties-image" class="properties-image">
                <div class="properties-item canvas-wrapper">
                    <canvas width="373" height="159"></canvas>
                    <img alt="properties-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-img-1.jpg">
                </div>
                <div class="explore-content">
                    <p>RECREATIONAL</p>
                    <h3>PROPERTIES</h3>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties-image" class="properties-image">
                <div class="properties-item canvas-wrapper">
                    <canvas width="373" height="159"></canvas>
                    <img alt="properties-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-img-1.jpg">
                </div>
                <div class="explore-content">
                    <p>NEW</p>
                    <h3>DEVELOPMENTS</h3>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- properties end -->
<!-- social -->
<section class="hp-social">
    <div class="region-social-container">
        <div class="site-title">
            <h3>In</h3>
            <h2><span class="title-bg">06</span>THE PRESS</h2>
            <span class="site-number">06</span>
        </div>
        <div class="press-content">
            <a href="[blogurl]" aria-label="press" class="press-item">
                <div class="press-img canvas-wrapper">
                    <canvas width="359" height="160"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/socials-img-1.jpg" />
                </div>
                <div class="press-text">
                    <h3>Tips for First-Time Homebuyers</h3>
                    <p>It is with great pleasure that Southeast Luxury Living welcomes you to Alabama, and to their
                        website. With years of experience in the market,.</p>
                </div>
            </a>
            <a href="[blogurl]" aria-label="press" class="press-item">
                <div class="press-img canvas-wrapper">
                    <canvas width="359" height="160"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/socials-img-2.jpg" />
                </div>
                <div class="press-text">
                    <h3>You’ve Outgrown Your Home </h3>
                    <p>It is with great pleasure that Southeast Luxury Living welcomes you to Alabama, and to their
                        website. With years of experience in the market,.</p>
                </div>
            </a>
            <a href="[blogurl]" aria-label="press" class="press-item">
                <div class="press-img canvas-wrapper">
                    <canvas width="359" height="160"></canvas>
                    <img alt="pree" class="img-pree canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/socials-img-3.jpg" />
                </div>
                <div class="press-text">
                    <h3>When you sell your lovely home</h3>
                    <p>It is with great pleasure that Southeast Luxury Living welcomes you to Alabama, and to their
                        website. With years of experience in the market,.</p>
                </div>
            </a>
        </div>
        <a href="#" aria-label="View ALl" class="site-btn"><span class="ai-font-arrow-b-n"></span> View ALl</a>
        <div class="press-bg">
            <canvas width="1142" height="48"></canvas>
            <img alt="socials" class="bg-socials"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/socials-bg-2.jpg" />
        </div>
    </div>
</section>
<!-- social end -->
<!-- contact -->
<section class="hp-contact">
    <div class="region-contact-container">
        <div class="site-title">
            <h3>QUESTIONS?</h3>
            <h2><span class="title-bg">07</span>CONTACT US NOW</h2>
            <span class="site-number">07</span>
        </div>
        <div class="contact-form ">
            <?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 1"]')?>
        </div>
        <div class="form-btn-wrapper" style="">
        </div>
</section>
<!-- contact end -->
<?php get_footer(); ?>