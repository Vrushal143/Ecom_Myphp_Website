





<script src="https://kit.fontawesome.com/d9ac3e5613.js" crossorigin="anonymous"></script>

<script src="assets/js/jquery-3.6.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/custom.js"></script>

<!-- Owl Carousal script -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- ALERTIFY JS -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
   alertify.set('notifier', 'position', 'top-right');
  <?php
  if (isset($_SESSION['message'])) { 
    ?>
    alertify.success('<?= $_SESSION['message']; ?>');
  <?php
    unset($_SESSION['message']);
  }
  ?>
</script>



</body>

</html>