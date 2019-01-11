  <footer id="footer">
    <div class="container">
      <p>You can also follow us on social media:</p>
      <div class="social">
        <?php if(get_field('linkedin', 'option')): ?>
          <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="text-hide">LinkedIn<i class="fab fa-linkedin"></i></a>
        <?php endif; if(get_field('twitter', 'option')): ?>
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="text-hide">Twitter<i class="fab fa-twitter-square"></i></a>
        <?php endif; if(get_field('facebook', 'option')): ?>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="text-hide">Facebook<i class="fab fa-facebook"></i></a>
        <?php endif; ?>
      </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> Federal Conference</p>
        <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>