<?php include 'header.php'; ?>

 <!-- Services Section Start -->
 <section class="services__section pt-80 pb-80 mt-100" id="services">
     <div class="auto-container">
         <div class="services__header">
             <div class="section__header">
                 <span class="sub-title">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false">
                         <g weight="regular">
                             <path
                                 d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                             </path>
                         </g>
                     </svg>
                     Services</span>
                 <h2 class="main-title">Our Services</h2>

             </div>
             <div class="services__tabs">
                 <button class="services__tab services__tab--active" data-tab="residential">Residential</button>
                 <button class="services__tab services__tab--inactive" data-tab="commercial">Commercial</button>
             </div>
         </div>

         <!-- Residential Services Grid -->
         <div class="services__grid" id="residential-grid">
             <article class="service-card" data-aos="fade-up" data-aos-duration="1000"
                 onclick="window.location.href='24-7-emergency-plumbing.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">24/7 Emergency Plumbing</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Quick response for leaks, burst pipes, and urgent plumbing
                         issues.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-1.jpg"
                     alt="Emergency Plumbing">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000"
                 onclick="window.location.href='drain-cleaning.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Drain Cleaning</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Removing clogs and ensuring smooth water flow.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-2.jpg"
                     alt="Drain Cleaning">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000"
                 onclick="window.location.href='water-heaters.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Water Heaters</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Installation, repair, and maintenance of all water heater
                         types.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-3.jpg"
                     alt="Water Heaters">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='bathroom-kitchen.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Bathroom & Kitchen</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Repairs and installations for faucets, sinks, toilets, and
                         showers.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-4.jpg"
                     alt="Bathroom & Kitchen">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='leak-detection.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Leak Detection</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Identifying and fixing hidden water leaks to prevent
                         damage.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-5.jpg"
                     alt="Leak Detection">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='sewer-septic.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Sewer & Septic</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Cleaning, repair, and maintenance of sewer and septic.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-6.jpg"
                     alt="Sewer & Septic">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='garbage-disposal.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Garbage Disposal</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Repair and installation of efficient waste disposal units.
                     </p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-7.jpg"
                     alt="Garbage Disposal">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='repiping.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Repiping</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Replacing old, damaged, or leaking pipes for long-term
                         reliability.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-8.jpg" alt="Repiping">
             </article>

         </div>

         <!-- Commercial Services Grid -->
         <div class="services__grid services__grid--hidden" id="commercial-grid">
             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='drain-sewer.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Drain & Sewer</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Preventative cleaning and repair to avoid costly blockages.
                     </p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-9.jpg"
                     alt="Commercial Plumbing Systems">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='grease-traps.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Grease Traps</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Installation and maintenance to keep commercial kitchens
                         compliant.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-10.jpg"
                     alt="Industrial Pipe Installation">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='high-capacity-water-heaters.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">high-capacity water heaters</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Large-scale installation and servicing for business
                         properties.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-11.jpg"
                     alt="Restaurant Plumbing">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='pipe-fixtures.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Pipe & Fixtures</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Professional installation and repairs for industrial and
                         office buildings.
                     </p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-12.jpg"
                     alt="Backflow Prevention">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='maintenance-plans.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Maintenance Plans</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Scheduled servicing to prevent plumbing issues in
                         businesses.</p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-13.jpg"
                     alt="Grease Trap Services">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='backflow-testing.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Backflow Testing</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Ensuring safe and uncontaminated water supply.
                     </p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-12.jpg"
                     alt="Water Line Repair">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='gas-lines.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title"> Gas Lines</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">Safe installation and repair of commercial gas pipelines.
                     </p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-14.jpg"
                     alt="Hydro Jetting">
             </article>

             <article class="service-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='hydro-jetting.php'">
                 <div class="service-card__content">
                     <div class="service-card__header">
                         <h3 class="service-card__title">Hydro Jetting</h3>
                         <svg class="service-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2">
                             <path d="M7 17L17 7M17 7H7M17 7V17"></path>
                         </svg>
                     </div>
                     <p class="service-card__description">High-pressure water cleaning for tough clogs and buildup.
                     </p>
                 </div>
                 <img class="service-card__image" src="assets/images/services/services-man-15.jpg"
                     alt="Boiler Systems">
             </article>
         </div>

     </div>
 </section>
 <!-- Services Section End -->

    <!-- Service Step section Start -->
    <section class="service__step--section pt-80 pb-80">
        <div class="auto-container">
            <div class="section__header" data-aos="fade-up" data-aos-duration="1000">
                <span class="sub-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false">
                        <g weight="regular">
                            <path
                                d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z">
                            </path>
                        </g>
                    </svg>Steps</span>
                <h2 class="main-title">Book your service in 3<br> easy steps</h2>
                <p class="desc">Easy Steps to Get Started" section simplifies the process of<br> booking and receiving
                    plumbing services.</p>
            </div>
            <div class="service__step--grid">
                <div class="step__item" data-aos="fade-up" data-aos-duration="2000">
                    <div class="step__icon-box">
                        <div class="step__icon-bg">
                            <img src="assets/images/step-icon-bg.avif" alt="step icon bg" />
                        </div>
                        <div class="step__icon-img">
                            <img src="assets/images/step-icon-1.avif" alt="step icon" />
                        </div>
                    </div>
                    <div class="step__content-box">
                        <h3>1. Choose Plumbing Service</h3>
                        <p>Browse our range of plumbing services tailored to address various issues in your home or
                            business. Select the service that fits your needs.</p>
                    </div>
                </div>

                <div class="step__item" data-aos="fade-up" data-aos-duration="2500">
                    <div class="step__icon-box">
                        <div class="step__icon-bg">
                            <img src="assets/images/step-icon-bg.avif" alt="step icon bg" />
                        </div>
                        <div class="step__icon-img">
                            <img src="assets/images/step-icon-2.png" alt="step icon" />
                        </div>
                    </div>
                    <div class="step__content-box">
                        <h3>2. Quickly Schedule Service</h3>
                        <p>Use our online booking system or call our hotline to schedule an appointment at a convenient
                            time that works best for you.</p>
                    </div>
                </div>

                <div class="step__item" data-aos="fade-up" data-aos-duration="3000">
                    <div class="step__icon-box">
                        <div class="step__icon-bg">
                            <img src="assets/images/step-icon-bg.avif" alt="step icon bg" />
                        </div>
                        <div class="step__icon-img">
                            <img src="assets/images/step-icon-3.png" alt="step icon" />
                        </div>
                    </div>
                    <div class="step__content-box">
                        <h3>3. Job Completion Satisfaction</h3>
                        <p>Our professional plumber will complete the job efficiently. Once satisfied, we will clean up
                            the work area and ensure quality service.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Service Step section End -->

    <!-- Our Location Section Start -->
    <section class="our__location--section pt-80 pb-80" id="location__section">
        <div class="auto-container">
            <div class="section__header" data-aos="fade-up" data-aos-duration="1000">
                <span class="sub-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false">
                        <g weight="regular">
                            <path
                                d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                            </path>
                        </g>
                    </svg>
                    Our Location</span>
                <h2 class="main-title">Where Does QnixRooter<br> Operate?</h2>
                <p class="desc">We proudly serve multiple locations, ensuring prompt<br> and reliable plumbing services
                    near you.</p>

            </div>
            <div class="our__location--grid">
                <div class="our__location--content" data-aos="fade-up" data-aos-duration="1200">
                    <div class="location__icon-box">
                        <img src="assets/images/services/location-1.jpg" alt="Location Images" />
                    </div>
                    <div class="location__text-box">
                        <h2>QnixRooter Headquarters</h2>
                        <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false">
                                <g weight="regular">
                                    <path
                                        d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                    </path>
                                </g>
                            </svg>123 Main Street, Los Angeles, CA 90001</p>
                    </div>
                </div>

                <div class="our__location--content" data-aos="fade-up" data-aos-duration="1600">
                    <div class="location__icon-box">
                        <img src="assets/images/services/location-2.jpg" alt="Location Images" />
                    </div>
                    <div class="location__text-box">
                        <h2>QnixRooter Office</h2>
                        <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false">
                                <g weight="regular">
                                    <path
                                        d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                    </path>
                                </g>
                            </svg>456 Ocean Drive, San Diego, CA 92101</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Location Section End -->

    <!-- Footer Section Start -->
     
    <?php include 'footer.php'; ?>