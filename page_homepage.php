<?php /* Template Name: HomePage */ ?>
<?php get_header(); ?>
<!-- SlideShow -->
<div class="slideshow-container">
  <!-- Full width images with number and caption text -->
  <div class="slideshow-pic fade">
    <img src="<?php echo get_template_directory_uri() ?>/res/relaxing-computer.jpeg" style="width:100%; height:100%;"/>
    <div class="slideshow-text">
      Caption Text 1
    </div>
  </div>

  <div class="slideshow-pic fade">
    <img src="<?php echo get_template_directory_uri() ?>/res/upward-view-buildings.jpeg" style="width:100%; height:100%;"/>
    <div class="slideshow-text">
      Caption Text 2
    </div>
  </div>

  <div class="slideshow-pic fade">
    <img src="<?php echo get_template_directory_uri() ?>/res/security-title-click.jpeg" style="width:100%; height:100%;"/>
    <div class="slideshow-text">
      Caption Text 3
    </div>
  </div>

  <!-- Next and Previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Bullet points to navigate to certain images of the slideshow -->
<div style="text-align:center;">
  <span class="slideshow-bullet" onclick="currentSlide(1)"></span>
  <span class="slideshow-bullet" onclick="currentSlide(2)"></span>
  <span class="slideshow-bullet" onclick="currentSlide(3)"></span>
</div>

<div class="home-collage" style="background-image: url('<?php echo get_template_directory_uri().'/res/collage-background.jpeg'; ?>')">
  <h1>How Can We Help?</h1>
  <div class="home-collage-box collage1 collage-left" style="background-image:linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php echo get_template_directory_uri().'/res/relaxing-computer.jpeg'; ?>')">
    <h3>"Our support costs related to resetting customer passwords are increasing"</h3>
  </div>
  <div class="home-collage-box collage3 collage-right" style="background-image:linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php echo get_template_directory_uri().'/res/relaxing-computer.jpeg'; ?>')">
    <h3>"Our customers are demanding stronger online security and privacy protections"</h3>
  </div>
  <div class="home-collage-box collage2" style="background-image:linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php echo get_template_directory_uri().'/res/relaxing-computer.jpeg'; ?>')">
    <h3>"We have too many IAM tools that don't talk to each other"</h3>
  </div>
  <div class="home-collage-box collage1 collage-left" style="background-image:linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php echo get_template_directory_uri().'/res/relaxing-computer.jpeg'; ?>')">
    <h3>"Our customers are demanding stronger online security and privacy protections"</h3>
  </div>
  <div class="home-collage-box collage5 collage-right" style="background-image:linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php echo get_template_directory_uri().'/res/relaxing-computer.jpeg'; ?>')">
    <h3>"Our customers are demanding stronger online security and privacy protections"</h3>
  </div>
  <div class="home-collage-box collage4" style="background-image:linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php echo get_template_directory_uri().'/res/relaxing-computer.jpeg'; ?>')">
    <h3>"We have too many IAM tools that don't talk to each other"</h3>
  </div>
</div>

<div class="home-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; endif; ?>
</div>

<div class="home-container">
  <h1>Services</h1>
  <div class="home-column home-left">
    <a href="https://www.google.ca/">
      <div class="home-service home-button" id="serviceOne">
        <i class="fas fa-search" id="serviceIcon"></i>
        <h3 class="service-title">Advisory Services</h3>
        <span>
          <ul>
            <li>Threat and Risk Assessment</li>
            <li>Requirements Definition</li>
            <li>Solution Architecture, Strategy and Roadmap</li>
            <li>Program and Project Planning</li>
          </ul>
        </span>
      </div>
    </a>
  </div>
  <div class="home-column home-right">
    <a href="https://www.google.ca/">
      <div class="home-service home-button" id="serviceOne">
          <i class="fas fa-users" id="serviceIcon"></i>
          <h3 class="service-title">Managed Services</h3>
          <span>
            <ul>
              <li>Sustained Operations</li>
              <li>Technology Support</li>
              <li>Process Support</li>
              <li>Staff Augmentation</li>
            </ul>
          </span>
      </div>
    </a>
  </div>
  <div class="home-column">
    <a href="https://www.google.ca/">
      <div class="home-service home-button" id="serviceTwo">
        <i class="fas fa-pencil-alt" id="serviceIcon"></i>
        <h3 class="service-title">Deployment Services</h3>
        <span>
          <ul>
            <li>Technology Implementation</li>
            <li>Process Optimization</li>
            <li>On-Prem / Cloud / Hybrid</li>
            <li>Custom Development</li>
          </ul>
        </span>
      </div>
    </a>
  </div>
</div>
<div class="home-container">
  <h1>By The Numbers</h1>
  <div class="home-row">
    <div class="home-column home-left">
      <h1 class="numbers-title">500</h1>
      <h3 class="numbers-subtitle">Thousand<br>Identities<br>Serviced<br></h3>
    </div>
    <div class="home-column home-right">
      <h1 class="numbers-title">100+</h1>
      <h3 class="numbers-subtitle">IAM Projects</h3>
    </div>
    <div class="home-column">
      <h1 class="numbers-title">20+</h1>
      <h3 class="numbers-subtitle">Years of<br>IAM Experience</h3>
    </div>
  </div>
</div>
<br><br><br>
<div class="home-container">
  <h1>Solutions</h1>
  <div class="home-column home-left">
    <a href="https://www.google.ca/">
      <div class="home-solution home-button">
        <i class="fas fa-user" id="solutionsIcon"></i>
        <h1>Identity Governance</h1>
        <h3>Simple, Secure, and Smart administration of identities and access</h3>
      </div>
    </a>
  </div>
  <div class="home-column home-right">
    <a href="https://www.google.ca/">
      <div class="home-solution home-button">
        <i class="fas fa-chess-king" id="solutionsIcon"></i>
        <h1>Privilege Management</h1>
        <h3>Controlled use and distribution of privileged accounts</h3>
      </div>
    </a>
  </div>
  <div class="home-column">
    <a href="https://www.google.ca/">
      <div class="home-solution home-button">
        <i class="fas fa-key" id="solutionsIcon"></i>
        <h1>Access Management</h1>
        <h3>Secure and convenient access to data and applications</h3>
      </div>
    </a>
  </div>
</div>

<div class="home-container">
  <h1>Our Partners</h1>
  <div class="partner-slider">
    <?php // foreach() { ?>
  </div>
</div>
<?php get_footer(); ?>
