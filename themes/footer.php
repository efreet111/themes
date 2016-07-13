    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo "$vPath" ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo "$vPath" ?>js/bootstrap.min.js"></script>
    <!-- efectos -->
    <script src="<?php echo "$vPath" ?>js/effects.js"></script>
	
	<!-- validation -->
    <script src="<?php echo "$vPath" ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo "$vPath" ?>js/additional-methods.min.js"></script>
    <script type="text/javascript">
        $("#usunew").validate({
          rules: {
            nombre: "required",
            password: "required",
            email: {
              required: true,
              email: true
            }
          }
        });
    </script>
	
	<script src="<?php echo "$vPath" ?>js/fieldsAddRemove.js"></script>
	<script src="<?php echo "$vPath" ?>js/jquery-1.10.2.min.js"></script>
	
	<script src="<?php echo "$vPath" ?>js/divHideShow.js"></script>
	
	
	