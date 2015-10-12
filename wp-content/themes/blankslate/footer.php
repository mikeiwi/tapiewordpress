          </div>
      </div>
    </div>

    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo get_template_directory_uri();; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri();; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri();; ?>/js/bootstrap-hover-dropdown.min.js"></script>
    <script>
      function redirectPage(select){
        window.location.href = 'url' + $(select).val(); 
      }
    </script>
  </body>

</html>