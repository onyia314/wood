<section id="services">
      
    <div class="container text-center" data-aos="fade-up">

      <header class="section-header">

        @if ( !(basename(request()->path()) == 'services'))
          <h3 class="section-title">Services</h3>
        @endif

        <p id="services-content">
            Marina's Wood Rrestoration Shop specializes in repairing, refinishing, 
            and restoring ancient furniture for homeownwers and commercial properties.
            We provide our customers with cost-effective alternative to purchasing new furniture.
        </p>
      </header>

      <div class="row services-cols">

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="services-col">
            <div class="img">
              <img src="/images/about-mission.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-tools"></i></div>
            </div>
            <h2 class="section-title">Furniture Repair</h2>
            <p>
                Have your furniture been damaged structurally? 
                let our experts mend your furniture in a timely manner.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="services-col">
            <div class="img">
              <img src="/images/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-brush-fill"></i></div>
            </div>
            <h2 class="section-title">Furniture Refinishing</h2>
            <p>
                If your furniture needs custom color matching and staining, antique glazing, etc.
                we provide any style of furniture refinishing.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="services-col">
            <div class="img">
              <img src="/images/about-vision.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-droplet"></i></div>
            </div>
            <h2 class="section-title">Furniture Restoration</h2>
            <p>
                Be it dents, cracks, gouges, water rings, scuffs on your furniture
                we'll make sure your piece of furniture is brought back to life. 
            </p>
          </div>
        </div>

      </div>

    </div>
</section><!-- End services Us Section -->