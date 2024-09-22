<?php
/*
 * Template Name: HomePage Single Page
 */

get_header(); ?>

<div class="custom-cursor"></div>

<script>
    const cursor = document.querySelector('.custom-cursor');

    document.addEventListener('mousemove', (e) => {
        cursor.style.top = `${e.pageY}px`;
        cursor.style.left = `${e.pageX}px`;
    });
</script>

<main id="main">
    <section id="hero-section">
        <div class="container">
            <h2 class="giaza">ECGROW</h2>
            <p>Creative Marketing Agency</p>
        </div>
    </section>

    <section id="grow_with_us">
        <div class="block left">
            <h2 class="block-head">Drive Real, Lasting Growth Without Paid Ads & Spend Only 30 Minutes Per Week.
            </h2>
            <p class="block-desc">We craft compelling, bespoke & professional grade short-form content to skyrocket
                your brand’s visibility and brings in
                leads like never before</p>
            <a href="#" class="contact">Contact Us</a>
        </div>
        <div class="block right">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/DECK.jpg" alt="Grow With US" class="block-img">
        </div>
    </section>

    <section class="growth">
        <div class="details">
            <div class="heading">
                <h3>Thumb-Stopping Content for TikTok, LinkedIn, Facebook & Instagram</h3>
            </div>
            <div class="subhead">
                <p>My tailored strategies & hands-on management ensure your audience can’t look away, driving
                    engagement & growth that
                    converts to £’s in your pocket.</p>
            </div>
        </div>
        <div class="sliders mobile">
            <div class="scroller" data-direction="left" data-speed="fast">
                <div class="scroller__inner">
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/twitter-verified-badge.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/instagram-e1726998262226.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/facebook-e1726998217538.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/linkedn-e1726998098603.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/tiktok-e1726998171525.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/youtube-e1726998194790.png" alt="" />
                </div>
            </div>
            <div class="scroller" data-direction="right" data-speed="fast">
                <div class="scroller__inner">
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/twitter-verified-badge.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/instagram-e1726998262226.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/facebook-e1726998217538.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/linkedn-e1726998098603.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/tiktok-e1726998171525.png" alt="" />
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/youtube-e1726998194790.png" alt="" />
                </div>
            </div>
        </div>
        <script>
            const scrollers = document.querySelectorAll(".scroller");

            // If a user hasn't opted in for recuded motion, then we add the animation
            if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
                addAnimation();
            }

            function addAnimation() {
                scrollers.forEach((scroller) => {
                    // add data-animated="true" to every `.scroller` on the page
                    scroller.setAttribute("data-animated", true);

                    // Make an array from the elements within `.scroller-inner`
                    const scrollerInner = scroller.querySelector(".scroller__inner");
                    const scrollerContent = Array.from(scrollerInner.children);

                    // For each item in the array, clone it
                    // add aria-hidden to it
                    // add it into the `.scroller-inner`
                    scrollerContent.forEach((item) => {
                        const duplicatedItem = item.cloneNode(true);
                        duplicatedItem.setAttribute("aria-hidden", true);
                        scrollerInner.appendChild(duplicatedItem);
                    });
                });
            }
        </script>
        <div class="sliders pc">
            <div class="slider slider_one">
                <div class="slide-track wrap">
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/twitter-verified-badge.png"
                            data-info="Twitter" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/instagram-e1726998262226.png"
                            data-info="Instagram" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/facebook-e1726998217538.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/linkedn-e1726998098603.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/tiktok-e1726998171525.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/youtube-e1726998194790.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/X_logo-removebg-preview-e1726998237794.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/twitter-verified-badge.png"
                            data-info="Twitter" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/instagram-e1726998262226.png"
                            data-info="Instagram" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/facebook-e1726998217538.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/linkedn-e1726998098603.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/tiktok-e1726998171525.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/youtube-e1726998194790.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/X_logo-removebg-preview-e1726998237794.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                </div>
            </div>
            <div class="slider slider_two">
                <div class="slide-track wrap">
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/twitter-verified-badge.png"
                            data-info="Twitter" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/instagram-e1726998262226.png"
                            data-info="Instagram" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/facebook-e1726998217538.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/linkedn-e1726998098603.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/tiktok-e1726998171525.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/youtube-e1726998194790.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/X_logo-removebg-preview-e1726998237794.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/twitter-verified-badge.png"
                            data-info="Twitter" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/instagram-e1726998262226.png"
                            data-info="Instagram" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/facebook-e1726998217538.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/linkedn-e1726998098603.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/tiktok-e1726998171525.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/youtube-e1726998194790.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                    <div class="slide" data-info="87% of marketers reporting increased sales from video marketing.">
                        <img src="https://growwitheuan.com/wp-content/uploads/2024/09/X_logo-removebg-preview-e1726998237794.png"
                            data-info="Info for Slide 1" height="100" width="250" alt="" />
                    </div>
                </div>
            </div>
            <div id="slide-info"></div>
            <script>
                const slides = document.querySelectorAll('.slide');
                const slideInfo = document.getElementById('slide-info');
                const slider = document.querySelector('.slider_one');

                // Function to move the slide info to the mouse position
                function updateInfoPosition(e) {
                    // Set the position of slide-info based on the mouse coordinates
                    slideInfo.style.left = $ {
                        e.pageX + 10
                    }
                    px; // Offset by 10px to avoid overlap
                    slideInfo.style.top = $ {
                        e.pageY + 10
                    }
                    px;
                }
                slides.forEach(slide => {
                    slide.addEventListener('mouseenter', (e) => {
                        slideInfo.textContent = slide.getAttribute('data-info');
                        slideInfo.style.opacity = '1'; // Make it visible
                        updateInfoPosition(e); // Initial position update
                        // Update position on mouse move
                        slide.addEventListener('mousemove', updateInfoPosition);
                    });

                    slide.addEventListener('mouseleave', () => {
                        // Resume the slider
                        slider.classList.remove('paused');
                        // Hide and reset info text
                        slideInfo.textContent = '';
                        slideInfo.style.opacity = '0'; // Hide the info when not hovering
                        // Remove the mousemove event listener to stop updating position
                        slide.removeEventListener('mousemove', updateInfoPosition);
                    });
                });
            </script>

            <script>
                let kaScroll = (function($) {
                    return {
                        init: function() {
                            // Loop through each .wrap element and apply the animation
                            $(".wrap").each(function() {
                                kaScroll.bindUIActions($(this)); // Pass the specific .wrap element
                            });
                        },

                        bindUIActions: function($wrap) {
                            kaScroll.slideOne($wrap); // Pass the specific .wrap element to slideOne
                        },

                        slideOne: function($wrap) {
                            $wrap.find('img').first().animate({
                                    height: "toggle"
                                },
                                10000,
                                "linear",
                                function() {
                                    kaScroll.appendEnd($wrap); // When done, call appendEnd on the specific .wrap
                                }
                            );
                        },

                        appendEnd: function($wrap) {
                            // Move the first image to the end and show it again
                            $wrap.find('img').first().appendTo($wrap).show();
                            kaScroll.slideOne($wrap); // Restart the animation for this .wrap
                        }
                    };
                })(jQuery);

                kaScroll.init();
            </script>
        </div>
    </section>

    <section id="video_edit">
        <div class="eve">
            <h2 class="heading giaza">VIDEO PORTFOLIO</h2>
            <div class="videos">
                <!-- <div class="video">
                        <video src="test.mp4"></video>
                        <div class="play-button"></div>
                    </div> -->
                <div class="video">
                    <video src="https://growwitheuan.com/wp-content/uploads/2024/09/Video-Example-1.mp4"></video>
                    <div class="play-button"></div>
                </div>
                <div class="video">
                    <video src="https://growwitheuan.com/wp-content/uploads/2024/09/Video-Example-2.mp4"></video>
                    <div class="play-button"></div>
                </div>
                <div class="video">
                    <video src="https://growwitheuan.com/wp-content/uploads/2024/09/Video-Example-3.mp4"></video>
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
        <script>
            const videos = document.querySelectorAll('.video video');
            const playButtons = document.querySelectorAll('.play-button');

            playButtons.forEach((button, index) => {
                const video = videos[index];

                button.addEventListener('click', () => {
                    if (video.paused) {
                        video.play();
                        button.style.display = 'none';
                    } else {
                        video.pause();
                        button.style.display = 'flex';
                    }
                });

                video.addEventListener('play', () => {
                    button.style.display = 'none';
                });

                video.addEventListener('pause', () => {
                    button.style.display = 'flex';
                });
            });
        </script>
    </section>

    <section class="container">
        <div class="image-section">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/features.jpg" alt="Person with Hat" class="pImg" />
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/features_cropped.jpg" alt="Features" class="mobileImg" />
            <div class="services">
                <div class="service one">Video Editing</div>
                <div class="service two">Consulting</div>
                <div class="service three">Creative Strategy</div>
                <div class="service four">Script Writing</div>
                <div class="service five">Content Creation</div>
                <div class="service six">Social Media Advertising</div>
                <div class="service seven">Social Media Management</div>
                <div class="service eight">Advertising Creatives</div>
                <div class="service nine">Sales Training</div>
                <div class="service ten">Outreach Methods</div>
                <div class="service eleven">Neuro-Marketing</div>
                <div class="service twelve">LinkedIn Post Automation</div>
                <div class="service thirteen">Personal Brand Growth</div>
            </div>
            <div class="description">
                <p>I provide comprehensive, affordable, and bespoke marketing packages, including top-tier organic
                    growth,
                    social media management, creative ad campaigns, graphic design, strategic consulting, and
                    outreach
                    strategies, all tailored to your brand, business, or gig. I guarantee exceptional results across
                    highly
                    competitive markets and take a bespoke approach and creative direction whilst offering a
                    scalable,
                    cost-effective solution focused solely on driving revenue.</p>
            </div>
        </div>
    </section>

    <section class="feature-container">
        <div class="card takefour">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/Feature-1.jpg" alt="Image 1">
            <div class="text-overlay">
                <h3 class="img-title">Dedicated & Professional Social Media Management</h3>
                <p>Complete profile optimisation, graphic design content editing, some video editing and scheduling
                    to maintain your online
                    presence. Enjoy strategic consultations and personalised support to meet your business goals.
                </p>
            </div>
        </div>
        <div class="card second-card">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/Feature-2.jpg" alt="Image 2">
            <div class="text-overlay">
                <h3 class="img-title">YouTube Business & Personal Brand Growth</h3>
                <p>Utilise the same strategies and content styles used by top creators like Mr. Beast. Professional
                    editing, optimised
                    thumbnails, script writing and high-impact video strategies to grow your brands channel or your
                    personal brand.</p>
            </div>
        </div>
        <div class="card taketwo">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/Feature-3.webp" alt="Image 3">
            <div class="text-overlay">
                <h3 class="img-title">Affordable Social Marketing</h3>
                <p>Transform your advertising with innovative creatives and efficient media buying. Weekly
                    optimisations, reports and data
                    analysis to ensure high-performing campaigns and profitable scaling margins.
                </p>
            </div>
        </div>
        <div class="card second-card">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/Feature-4.jpg" alt="Image 4">
            <div class="text-overlay">
                <h3 class="img-title">Ad Creatives Pack</h3>
                <p>Up to 36 custom-designed monthly ad creatives tailored to your brand. Access expert strategies to
                    enhance campaigns and
                    achieve scalable, cost-effective results.
                </p>
            </div>
        </div>
        <div class="card takefour">
            <img class="fit-pos" src="https://growwitheuan.com/wp-content/uploads/2024/09/Feature-5.jpg" alt="Image 5">
            <div class="text-overlay">
                <h3 class="img-title">The ECGGROW Deluxe</h3>
                <p>Grow your social presence with 20+ viral yet bespoke content pieces, weekly strategic
                    consultations, and both
                    personalised and hands on social media management. All focused solely on driving optimal
                    engagement, organic growth and
                    revenue across your brands social media accounts.
                </p>
            </div>
        </div>
        <div class="card taketwo">
            <img src="https://growwitheuan.com/wp-content/uploads/2024/09/Feature-6.jpg" alt="Image 6">
            <div class="text-overlay">
                <h3 class="img-title">LinkedIn Personal & B2B Brand Growth</h3>
                <p>Unlock exclusive tools and proven strategies to master LinkedIn B2B and B2C outreach, boost lead
                    generation, and scale
                    your business using LinkedIn. With profile optimisation and personalised consulting for sales
                    success included.
                </p>
            </div>
        </div>
    </section>

    <section id="process">
        <div class="our-process">
            <h2 class="process-title giaza">OUR PROCESS</h2>
            <div class="steps">
                <div class="step step-one">
                    <img class="fit-img" src="https://growwitheuan.com/wp-content/uploads/2024/09/1.jpg" alt="Free Web Diagnosis">
                    <h3 class="step-title">A Free Diagnosis</h3>
                    <p class="step-desc">I begin with a free call to explore the unique pain points of you, or your business & uncover areas for opportunities of
                        growth!</p>
                </div>
                <div class="step step-two">
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/2-1.jpg" alt="Growth Process">
                    <h3 class="step-title">Growth Process</h3>
                    <p class="step-desc">I implement strategic & bespoke solutions, tailored to your brand goals, designed to drive traffic, growth, revenue &
                        engagement.</p>
                </div>
                <div class="step step-three">
                    <img src="https://growwitheuan.com/wp-content/uploads/2024/09/3.jpg" alt="Increasing KPIs">
                    <h3 class="step-title">Increasing KPI’s</h3>
                    <p class="step-desc">Finally, I optimise every element of your plan, so your scripts, visuals, & structure to ensure traffic & followers keep
                        growing.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about_me">
        <h2 class="about-head giaza">About Me</h2>
        <div class="blocks">
            <div class="block left">
                <img class="owner-img" src="https://growwitheuan.com/wp-content/uploads/2024/09/owner_image.webp" alt="About Me">
                <h3 class="title">Euan Christie</h3>
            </div>
            <div class="block right">
                <p>At ECGROW, my goal is simple: helping brands grow organically with strategies that work, without
                    shortcuts. I’ve
                    built
                    my business around values I believe are vital - honesty, transparency, and trust. I want brands
                    to know exactly
                    what
                    they’re getting and trust that what we’re doing is the right choice to achieve their long-term
                    goals.</p>
                <p>What sets ECGROW apart is the personalised approach that I take. It’s not just about boosting
                    numbers; for me,
                    it’s
                    about creating genuine long lasting working partnerships with people who are serious about
                    creating brand
                    awareness,
                    engagement, and building a community around their brand. My mission is to help brands to grow
                    naturally, with
                    strategies
                    that align with their unique identity. with a professional strategy that’s backed by research
                    and data,</p>
            </div>
        </div>
    </section>

    <section id="testimonials" class="feature-container">
        <div class="testimonial card takefour">
            <div class="text">
                <h3 class="img-title">Matthew Akinpelu </h3>
                <p>I've had the pleasure of working with Euan for some time now, and I can confidently say his dedication, skill, and work ethic are second to none. His venture, ECGROW, has proven to be a true reflection of his passion for digital marketing and social media growth. From video editing to crafting compelling social media strategies, Euan’s commitment to driving results is exceptional. ECGROW’s impact on my business has been remarkable, and I highly recommend Euan for any business seeking professional and effective social media growth.
                </p>
            </div>
        </div>
        <div class="testimonial card second-card">
            <div class="text">
                <h3 class="img-title">Faham Jawed</h3>
                <p>Working with Euan has been a seamless experience. His proactive approach, combined with his deep understanding of social media, meant that I could trust the entire process without needing to worry. Euan and his team consistently delivered results that exceeded my expectations. Which allowed me to focus on other aspects of my business, knowing that he had my marketing strategy well in hand.</p>
            </div>
        </div>
        <div class="testimonial card taketwo">
            <div class="text">
                <h3 class="img-title">Emilija Paleckytė</h3>
                <p>Euan is responsive, knowledgeable, and genuinely committed to helping others succeed. His broad expertise in networking, digital marketing, and content creation shines through in every project. It’s clear that he cares deeply about providing the best possible service, and his professional, considerate approach makes him a joy to work with. highly recommend ECGROW to anyone looking to elevate their online presence.
                </p>
            </div>
        </div>
        <div class="testimonial card second-card">
            <div class="text">
                <h3 class="img-title">Melody Richmond</h3>
                <p>Highly recommend, very responsive and clearly has a very broad knowledge in the networking and marketing field. You very much get the impression that he genuinely cares about helping others, and will offer his help straight away if he can. Very professional and considerate person to work with
                </p>
            </div>
        </div>
        <div class="testimonial card takefour">
            <div class="text">
                <h3 class="img-title">Natalia Xiomara</h3>
                <p>I wholeheartedly recommend Euan and ECGROW for any brand looking to scale their social media presence organically. His vision for growth and his forward-thinking strategies have driven real results for my business. Euan’s no-nonsense approach and dedication to his clients make him an invaluable partner.
                </p>
            </div>
        </div>
        <div class="testimonial card taketwo">
            <div class="text">
                <h3 class="img-title">Miguel Navarro</h3>
                <p>I am pleased to recommend Euan as a trusted partner in any personal or professional project. His expertise in strategy and service delivery has been invaluable to me, and I consistently refer him for marketing opportunities. Euan approaches every task with a keen attention to detail and a genuine care for the work he produces, which gives me peace of mind knowing that my projects are in capable hands. His dedication and commitment to excellence set him apart in the industry.
                </p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-us-div">
            <h2 class="contact-head">Dreaming up something incredible to elevate your brand or agency?</h2>
            <p class="contact-subhead">We're here to make it real. Reach out to me today and let's get started! <a href="mailto:ecgroweuan@gmail.com" class="email">ecgroweuan@gmail.com</a></p>
            <a href="#" class="lets-talk">Let's Talk</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>

<!-- get_template_part( 'single' ); -->