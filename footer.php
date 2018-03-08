</div><!-- full-body-div ends -->
<!-- footer here -->
<div class="footer-container">
  <div class="footer-copyright">
    <i class="fa fa-copyright"></i>
    <?php echo date("Y"); ?>
    by IAMTeam
  </div>
  <div class="footer-extra">
    5 Richard Way SW, Suite 300<br>
    Calgary, AB Canada T3E 7M8<br>
    Direct Line: 403-265-2044<br>
    Email: info@iamteam.com<br>

    <div class="footer-social-links">
      <ul>
        <li><a href="<?php echo get_option( 'facebook' ); ?>"><i class="fab fa-facebook"></i></a></li>
        <li><a href="<?php echo get_option( 'twitter' ); ?>"><i class="fab fa-twitter"></i></a></li>
        <li><a href="<?php echo get_option( 'google-plus' ); ?>"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a href="<?php echo get_option( 'youtube' ); ?>"><i class="fab fa-youtube"></i></a></li>
        <li><a href="<?php echo get_option( 'linkedin' ); ?>"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
