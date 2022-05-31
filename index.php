<?php

?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php wp_head(); ?>
            <title>EPS</title>
        </head>
        
        <body>
            <div class="wrapper">
                <?php get_header() ?>

                <div id="about" class="about">
                    <div class="about-title">
                        <h1>About EPS</h1>
                        <hr class="about-rule" />
                    </div>
                    <div class="medium-biz-layer">
                        <div class="medium-biz-layer-left">
                            <div class="leverage-wrapper">
                                <p>
                                    We leverage our experience to provide you with quality service and solutions for all your business needs.
                                </p>
                            </div>
                            <div class="innovative-wrapper">
                                <p>
                                    We are an innovative accounting firm with a strong understanding of what grows businesses.
                                </p>
                            </div>
                            <div class="btn-wrapper">
                                <div class="btn-contact-us">
                                    <button>Get Help
                                        <span>
                                            <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/Greater_than.png') ?>" alt="arrow right" />
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="medium-biz-layer-right">
                            <div class="img-layer">
                                <figure>
                                    <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/Medium_shot_business_team_work.png') ?>" alt="medium_shot_business">
                                </figure>
                            </div>
                            <div class="fig-caption">
                                <q>
                                    Easy Professional Service is a top-notch financial and business advisory solutions provider across industries. Together with our clients, we are set to transform the world.
                                </q>
                            </div>
                        </div>
                    </div>
                    <div class="sponsors-wrapper">
                        <div class="clients-section">
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/aigg.png') ?>" alt="aigg" />
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/nig.png') ?>" alt="Nig" />
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/afping.png') ?>" alt="aefping" />
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/smix.png') ?>" alt="smix" />
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/Baron.png') ?>" alt="baron" />
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/pitch_investment.png') ?>" alt="pitch investment" />
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/clients/bilm.png') ?>" alt="bilm" />
                            </figure>
                        </div>
                    </div>
                </div>

                <div id="services" class="services">
                    <div class="service-title">
                        <h1>Our Services</h1>
                        <hr class="about-rule">
                    </div>
                    <div class="service-description-title">
                        <h3>We are a client-focused firm with experience in a variety of industries, allowing us to provide premier advisory services to our clients.</h3>
                    </div>
                    <div class="service-content-layer">
                        <section class="service-description">
                            <h3>Our Main Service</h3>
                            <div class="service-description-inner-wrapper">
                                <h1>Business Plan Writing</h1>
                                <p>Easy Professional Service provides business owners with ideas, initiatives, and activities to help them develop their company. With business development, you can increase revenues, experience growth in terms of business expansion, and increase profitability by building strategic partnerships and making strategic business decisions.</p>
                            </div>
                        </section>
                        <section class="service-list">
                            <div class="vertical-tabs-wrapper">
                                <ul class="tabs">
                                    <li id="defaultOpen" class="service-lists-list-item tablinks defaultOpen">
                                        Business Plan Writing
                                    </li>
                                    <li class="service-lists-list-item tablinks">
                                        Financial Modelling
                                    </li>
                                    <li class="service-lists-list-item tablinks">
                                        Business Pitch and Proposal
                                    </li>
                                    <li class="service-lists-list-item tablinks">
                                        Business Development
                                    </li>
                                    <li class="service-lists-list-item tablinks">
                                        Industry Analysis
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="btn-to-close">
                        <div class="btn-contact-us">
                            <button>Get Help
                                <span>
                                    <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/Greater_than.png') ?>" alt="arrow right" />
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="consulting" class="consulting">
                    <div class="consulting-header">
                        <h1>Our Consulting Tools</h1>
                        <hr class="about-rule">
                    </div>
                    <div class="tool-lists-wrapper">
                        <div class="tool-list-container">
                            <h2>Executive Summary</h2>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/tools/executive_summary.png') ?>" alt="exective summary tool" />
                                <figcaption>We provide a comprehensive overview of the company...</figcaption>
                            </figure>
                        </div>
                        <div class="tool-list-container">
                            <h2>Problem Statement</h2>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/tools/problem_statement.png') ?>" alt="problem statement tool" />
                                <figcaption>Clearly articulating the issues that have been identified...</figcaption>
                            </figure>`
                        </div>
                        <div class="tool-list-container">
                            <h2>SWOT Analysis</h2>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/tools/service_swot_analysis.png') ?>" alt="swot analysis tool" />
                                <figcaption>An analysis of strengths, weaknesses, opportunities, and threats...</figcaption>
                            </figure>
                        </div>
                        <div class="tool-list-container">
                            <h2>PESTEL Analysis</h2>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/tools/service_pestel_analysis.png') ?>" alt="pestel analysis tool" />
                                <figcaption>An examination of the external business environment to determine strategic position...</figcaption>
                            </figure>
                        </div>
                        <div class="tool-list-container">
                            <h2>Impact Analysis</h2>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/tools/service_Imp_analysis.png') ?>" alt="impact analysis tool" />
                                <figcaption>Visualized representation of the impact of PESTEL analysis on a business...</figcaption>
                            </figure>
                        </div>
                        <div class="tool-list-container">
                            <h2>Business Model Canvas</h2>
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/tools/business_model_canvas.png') ?>" alt="business canvsa model tool" />
                                <figcaption>A summary of all strategies, including the value proposed, revenue, and cost structure</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

                <div id="sustainability" class="sustainability">
                    <div class="sustainability-header">
                        <h1>Environmental Sustainability</h1>
                        <hr class="about-rule">
                        <h4>We are fully committed to sustainability which is evident in some of our projects...</h4>
                    </div>
                    <div class="sustainable-flexible-wrapper">
                        <div class="img-wrapper">
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri(). '/assets/images/Wind_farms_fields.png') ?>" alt="wind farm fields">
                            </figure>
                        </div>
                        <div class="sustainable-solutions-wrapper">
                            <div class="top-solution">
                                <h1> Renewable Energy </h1>
                                <p> A renewable energy solution which is in line with the Paris Agreement and the UN SDG 7 </p>
                            </div>
                            <div class="mid-solution">
                                <h1>Biodegradable Solution</h1>
                                <p>A biodegradation solution that will pioneer the planting of millions of trees across Africa in the coming years. It promotes the UN SDG 13 & 15. </p>
                            </div>
                            <div class="bottom-solution">
                                <h1>Recycling Solution</h1>
                                <p>A recycling solution that promotes clean environment and reduces improper waste dumping in Nigeria and Africa. It promotes the UN SDG  11.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <?php get_footer() ?>
            </div>
            <!-- <script src="./public/scripts/index.js"></script> -->
            <?php wp_footer() ?>
        </body>
    </html>