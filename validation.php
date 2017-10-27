<?php if(count($errors) > 0): ?> 
  <div class="error">
  	<?php foreach ($errors as $error): ?>
  		<p><?php echo " ".$error; ?> </p>
  	<?php endforeach ?>
  </div>
<?php endif ?>

<?php if(count($success) > 0): ?> 
  <div class="success">
  	<?php foreach ($success as $succ): ?>
      <i class="fa fa-check-circle fa-2x"></i>
  		<p><?php echo $succ; ?> </p>
  	<?php endforeach ?>
  </div>
<?php endif ?>

<?php if(count($warning) > 0): ?> 
  <div class="warning">
    <?php foreach ($warning as $warn): ?>
       <i class="fa fa-info-circle fa-2x"></i>
      <p><?php echo $warn; ?> </p>
    <?php endforeach ?>
  </div>
<?php endif ?>

<?php if(count($sweetAlert) > 0): ?> 
      <script type = "text/javascript">
                                              
     swal("<?php echo ' Semestral QPI ('. $_SESSION['qpi']  ?>)", 'Renewed! Successfully', "success");

       </script>
<?php endif ?>

<?php if(count($warnAlert) > 0): ?> 
      <script type = "text/javascript">
          swal("<?php echo 'Your QPI: '. $_SESSION['qpi']  ?>", 'Please go to the Admission Office for grade concern!', "warning");                                          
       </script>
<?php endif ?>


