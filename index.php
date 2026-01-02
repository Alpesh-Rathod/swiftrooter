 <?php include 'header.php'; ?>

 <!-- Hero Banner Section Start -->
 <section class="hero__banner--section">
     <div class="hero__bgimages">
         <img src="assets/images/banner-images.png" alt="Hero Images" />
     </div>
     <div class="hero__caption">
         <h1 data-aos="fade-up" data-aos-duration="1000"><span class="text-red">Qnix</span><span
                 class="text-blue">Rooter</span> - Fast &amp; <br> Reliable
             <span class="text-red"> Plumbing Services </span>
         </h1>
         <p data-aos="fade-up" data-aos-duration="1000">Your trusted partner for fast, reliable, and professional
             plumbing and rooter services. Whether it's a
             clogged drain, emergency plumbing, or a full pipe replacement, QnixRooter has you covered 24/7.</p>
         <div class="membership__container" data-aos="fade-up" data-aos-duration="1000">
             <div class="member__images">
                 <div class="images_list">
                     <img src="assets/images/member-1.avif" alt="Member Images" />
                 </div>
                 <div class="images_list">
                     <img src="assets/images/member-2.avif" alt="Member Images" />
                 </div>
                 <div class="images_list">
                     <img src="assets/images/member-3.avif" alt="Member Images" />
                 </div>
                 <div class="images_list">
                     <img src="assets/images/member-4.avif" alt="Member Images" />
                 </div>
             </div>
             <div class="member__text">
                 <h5><span id="counter">0</span> Membership</h5>
                 <span>Enjoy our facilities</span>
             </div>
         </div>
     </div>
     <div class="form__container">
         <form id="contactForm" class="contactform">
             <div class="contact__form-grid">
                 <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" id="name" name="name" placeholder="Jane Smith" required>
                 </div>

                 <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" id="email" name="email" placeholder="jane@framer.com" required>
                 </div>

                 <div class="form-group">
                     <label for="phone">Phone Number</label>
                     <input type="tel" id="phone" name="phone" placeholder="(111) 111-1111" required>
                 </div>

                 <div class="form-group">
                     <label for="zipcode">Zip Code</label>
                     <input type="text" id="zipcode" name="zipcode" placeholder="Zip Code" required>
                 </div>

                 <div class="button-group">
                     <button type="submit" class="submit-btn">Request A Call</button>
                 </div>
             </div>
             <p class="contact-form__disclaimer">
                 By submitting your contact details, you agree to receive automated SMS/MMS messages from QnixRooter
                 Plumbing. Message & data rates may apply.
             </p>
         </form>
     </div>
 </section>
 <!-- Hero Banner Section End -->

 <!-- Services Section Start -->
 <section class="services__section pt-80 pb-80" id="services">
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

 <!-- Why Choose section Start -->
 <section class="why__choose--section pt-80 pb-80" data-aos="fade-up" data-aos-duration="1000">
     <div class="auto-container">
         <div class="why__choose--grid">
             <div class="section__header">
                 <span class="sub-title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                         focusable="false">
                         <g weight="regular">
                             <path
                                 d="M183.89,153.34a57.6,57.6,0,0,1-46.56,46.55A8.75,8.75,0,0,1,136,200a8,8,0,0,1-1.32-15.89c16.57-2.79,30.63-16.85,33.44-33.45a8,8,0,0,1,15.78,2.68ZM216,144a88,88,0,0,1-176,0c0-27.92,11-56.47,32.66-84.85a8,8,0,0,1,11.93-.89l24.12,23.41,22-60.41a8,8,0,0,1,12.63-3.41C165.21,36,216,84.55,216,144Zm-16,0c0-46.09-35.79-85.92-58.21-106.33L119.52,98.74a8,8,0,0,1-13.09,3L80.06,76.16C64.09,99.21,56,122,56,144a72,72,0,0,0,144,0Z">
                             </path>
                         </g>
                     </svg>Why Choose Us</span>
                 <h2 class="main-title">Why Choose QnixRooter?</h2>
                 <p class="desc">Reliable, fast, and professional plumbing solutions with 24/7 availability, upfront
                     pricing, and
                     expert service for homes and businesses.</p>
             </div>
             <div class="why__choose-card-box">
                 <div class="choose__item">
                     <div class="choose__heading">
                         <div class="choose__icon-box">
                             <img src="assets/images/why-choose-icon-1.png" alt="why choose icon" />
                         </div>
                         <div class="choose_tilte">
                             <h3>24/7 Emergency Service</h3>
                         </div>
                     </div>
                     <p class="paragraph">We're available around the clock to handle your plumbing emergencies,
                         ensuring you're
                         never
                         left
                         in a bind.</p>
                 </div>

                 <div class="choose__item">
                     <div class="choose__heading">
                         <div class="choose__icon-box">
                             <img src="assets/images/why-choose-icon-2.png" alt="why choose icon" />
                         </div>
                         <div class="choose_tilte">
                             <h3>Certified & Experienced Plumbers</h3>
                         </div>
                     </div>
                     <p class="paragraph">Our team consists of licensed and highly trained professionals who use the
                         latest techniques and technology to get the job done right.</p>
                 </div>

                 <div class="choose__item">
                     <div class="choose__heading">
                         <div class="choose__icon-box">
                             <img src="assets/images/why-choose-icon-3.png" alt="why choose icon" />
                         </div>
                         <div class="choose_tilte">
                             <h3>Upfront Pricing</h3>
                         </div>
                     </div>
                     <p class="paragraph">No hidden costs or surprise fees. We believe in honest, transparent
                         pricing, so you know exactly what to expect before any work begins.</p>
                 </div>

                 <div class="choose__item">
                     <div class="choose__heading">
                         <div class="choose__icon-box">
                             <img src="assets/images/why-choose-icon-4.png" alt="why choose icon" />
                         </div>
                         <div class="choose_tilte">
                             <h3>Satisfaction Guaranteed</h3>
                         </div>
                     </div>
                     <p class="paragraph">our satisfaction is our priority. We stand by our work and ensure
                         high-quality service. If you’re not happy, we’ll make it right.</p>
                 </div>

                 <div class="choose__item">
                     <div class="choose__heading">
                         <div class="choose__icon-box">
                             <img src="assets/images/why-choose-icon-5.png" alt="why choose icon" />
                         </div>
                         <div class="choose_tilte">
                             <h3>Eco-Friendly Solutions</h3>
                         </div>
                     </div>
                     <p class="paragraph">We offer sustainable and energy-efficient plumbing solutions that help
                         conserve water and reduce energy consumption while lowering your bills.</p>
                 </div>

                 <div class="choose__item">
                     <div class="choose__heading">
                         <div class="choose__icon-box">
                             <img src="assets/images/why-choose-icon-6.png" alt="why choose icon" />
                         </div>
                         <div class="choose_tilte">
                             <h3>Fully Equipped & Prepared</h3>
                         </div>
                     </div>
                     <p class="paragraph">Our plumbers arrive with the latest tools and equipment, ready to diagnose
                         and fix plumbing issues quickly and efficiently.</p>
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- Why Choose section End -->

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

 <!-- Trusted plumbing section Start -->
 <section class="trusted__plumbing--section pt-80 pb-80" data-aos="fade-up" data-aos-duration="1000">
     <div class="auto-container">
         <div class="trusted__plumbing--grid">
             <div class="trusted__plumbing--left-content">
                 <div class="trusted__plumbing--content">
                     <div class="trusted__icon">
                         <img src="assets/images/trusted-icon.avif" alt="Trusted Icon" />
                     </div>
                     <div class="trusted__plumbing--text">
                         <h2>Trusted plumbing<br> services with care.
                         </h2>

                     </div>
                 </div>
                 <div class="trusted__plumbing--paraghaph">
                     <p>Our commitment to building trust and treating customers like family is what sets us apart.
                         When you choose us, you're not just the plumber. </p>

                     <p>We believe in delivering more than just expert plumbing services-we strive to provide a
                         personalized experience for every customer. From the moment you contact us our friendly team
                         is dedicated to understanding your specific needs
                     </p>
                 </div>
             </div>
             <div class="trusted__plumbing--images">
                 <div class="plumbing__grid--images">
                     <div class="plumbing__one-images">
                         <img src="assets/images/services/trusted-plumbing-1.jpg" alt="Trusted Plumbing" />
                     </div>
                     <div class="plumbing__two-images">
                         <img src="assets/images/services/trusted-plumbing-2.avif" alt="Trusted Plumbing" />
                         <img src="assets/images/services/trusted-plumbing-3.avif" alt="Trusted Plumbing" />
                     </div>
                 </div>
             </div>
 </section>
 <!-- Trusted plumbing section End -->

 <!-- Testimonials section Start -->
 <section class="testimonials__section pt-80 pb-80">
     <div class="auto-container">
         <div class="section__header" data-aos="fade-up" data-aos-duration="1000">
             <span class="sub-title">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false"
                     color="var(--token-7eacb4a1-655b-44d0-a8e9-2c6d6c60d1c4, rgb(51, 51, 51))">
                     <g>
                         <path
                             d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z">
                         </path>
                     </g>
                 </svg>Our Testimonials</span>
             <h2 class="main-title">What They Say About Our<br> Service</h2>
             <p class="desc">Trusted by homeowners and businesses, we take pride in delivering top-quality plumbing
                 services with
                 exceptional customer satisfaction.</p>
         </div>
         <div class="testimonials__grid">
             <div class="testimonial__item" data-aos="fade-up" data-aos-duration="1200">
                 <div class="testimonial__author">
                     <img src="assets/images/testimonial-author-1.avif" alt="Testimonial Author" />
                     <div class="author__info">
                         <h4>Mike R</h4>
                         <span>March 5, 2024</span>
                     </div>
                 </div>
                 <div class="testimonial__rating">
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                 </div>
                 <p class="testimonial__text">QnixRooter responded quickly and fixed my burst pipe in no time!
                     Highly recommend their service!</p>

             </div>

             <div class="testimonial__item" data-aos="fade-up" data-aos-duration="1600">
                 <div class="testimonial__author">
                     <img src="assets/images/testimonial-author-2.png" alt="Testimonial Author" />
                     <div class="author__info">
                         <h4>Lisa T</h4>
                         <span>February 20, 2024</span>
                     </div>
                 </div>
                 <div class="testimonial__rating">
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                 </div>
                 <p class="testimonial__text">Excellent drain cleaning service! The plumber was professional, and now
                     everything works perfectly.</p>

             </div>

             <div class="testimonial__item" data-aos="fade-up" data-aos-duration="2000">
                 <div class="testimonial__author">
                     <img src="assets/images/testimonial-author-3.png" alt="Testimonial Author" />
                     <div class="author__info">
                         <h4>Robert G</h4>
                         <span>January 28, 2024</span>
                     </div>
                 </div>
                 <div class="testimonial__rating">
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                     <a href="#"><i class="fa-solid fa-star"></i></a>
                 </div>
                 <p class="testimonial__text">Very professional and affordable. They fixed my water heater, and now I
                     have hot water again!</p>

             </div>
         </div>
     </div>
 </section>

 <!-- Testimonials section End -->

 <!-- Faqs section Start -->
 <section class="faqs__section pt-80 pb-80" id="faqs" data-aos="fade-up" data-aos-duration="1000">
     <div class="auto-container">
         <div class="faqs__grid">
             <div class="section__header">
                 <span class="sub-title">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" focusable="false">
                         <g>
                             <path
                                 d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                             </path>
                         </g>
                     </svg>
                     Questions & Answers</span>
                 <h2 class="main-title">Frequently Asked<br> Questions</h2>
                 <div class="faq-images">
                     <img src="assets/images/services/pleased-young.jpg" alt="FAQ Image" />
                 </div>
             </div>

             <div class="faqs__accordion--box" data-aos="fade-up" data-aos-duration="1200">
                 <div class="faq-container">
                     <div class="faq-item active">
                         <div class="faq-question">
                             <h3>What plumbing services do you offer?</h3>
                             <span class="faq-icon">✕</span>
                         </div>
                         <div class="faq-answer">
                             <p>We provide residential and commercial plumbing services, including emergency repairs,
                                 drain cleaning, water heater installation, leak detection, and more.</p>
                         </div>
                     </div>

                     <div class="faq-item">
                         <div class="faq-question">
                             <h3>Do you offer 24/7 emergency plumbing services?</h3>
                             <span class="faq-icon">+</span>
                         </div>
                         <div class="faq-answer">
                             <p>Yes! Our team is available 24/7 to handle plumbing emergencies such as burst pipes,
                                 sewer backups, and major leaks.</p>
                         </div>
                     </div>

                     <div class="faq-item">
                         <div class="faq-question">
                             <h3>How can I schedule a service appointment?</h3>
                             <span class="faq-icon">+</span>
                         </div>
                         <div class="faq-answer">
                             <p>You can book an appointment online through our website or call our customer service
                                 hotline to choose a convenient time.</p>
                         </div>
                     </div>

                     <div class="faq-item">
                         <div class="faq-question">
                             <h3>How much do your services cost?</h3>
                             <span class="faq-icon">+</span>
                         </div>
                         <div class="faq-answer">
                             <p>Our pricing is transparent and depends on the type of service needed. We provide
                                 upfront quotes with no hidden fees.</p>
                         </div>
                     </div>

                     <div class="faq-item">
                         <div class="faq-question">
                             <h3>Do you offer warranties on your plumbing work?</h3>
                             <span class="faq-icon">+</span>
                         </div>
                         <div class="faq-answer">
                             <p>Yes, we stand by our work and offer warranties on parts and labor to ensure customer
                                 satisfaction and long-lasting solutions.</p>
                         </div>
                     </div>
                 </div>
                 <div class="faq-contact-box">
                     <h3>Need More Help?
                     </h3>
                     <p>Contact us for support, inquiries, or partnerships—we’re happy to assist!
                     </p>
                     <a href="contact-us.html" class="contact__btn"><img src="assets/images/contact-icon.png"
                             alt="" />
                         Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Faqs section End -->

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

 <?php include 'footer.php'; ?>