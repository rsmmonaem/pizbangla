
<footer class="main-footer">
	© <?php echo date("Y") ?> All rights reserved || Developed by <a target="_blank" href="https://www.linkedin.com/in/rsm-monaem/">
		RSM MONAEM.</a>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
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
