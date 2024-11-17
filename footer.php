</body>
<footer>
  <?php wp_footer(  ) ?>
  <nav>
    <!-- the depth parameter, limit the depth level of the menu. Note 0 mean unlimited -->
    <?php wp_nav_menu(array("location"=> "wp_devs_footer_menu", "depth" => 2) )?> 
  </nav>
</footer>
</html>