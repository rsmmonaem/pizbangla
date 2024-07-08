<!-- Include SweetAlert from CDN -->
<?php if ($this->session->flashdata('success_message')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '<?php echo $this->session->flashdata('success_message'); ?>'
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error_message')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo $this->session->flashdata('error_message'); ?>'
            });
        </script>
    <?php endif; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url() ?>assets/Frontend/assets/js/main.js"></script>

</body>

</html>
