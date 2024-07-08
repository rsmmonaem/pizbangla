<main class="main" style=" margin-top: 50px; ">
	<!-- Contact Section -->
	<section id="contact" class="contact section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Register</h2>
			<p>Please fill in this form to create an account</p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row gy-4">

				<div class="col-lg-5">

					<div class="info-wrap">
						
					</div>
				</div>

				<div class="col-lg-7">
					<form action="<?= base_url() ?>frontend/save_user" method="post" enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
						
						<div class="row gy-4">

							<div class="col-md-6">
								<label for="name-field" class="pb-2">Your Full Name</label>
								<input type="text" name="full_name" id="name-field" class="form-control" required="" placeholder="Full Name">
							</div>

							<div class="col-md-6">
								<label for="email-field" class="pb-2">Your Email</label>
								<input type="email" class="form-control" name="email" id="email-field" required="" placeholder="name@gmail.com">
							</div>

							<div class="col-md-6">
								<label for="email-field" class="pb-2">Your Password</label>
								<input type="password" class="form-control" name="password" id="password-field" required="" placeholder="******">
							</div>

							<div class="col-md-6">
								<label for="subject-field" class="pb-2">Your Phone Number</label>
								<input type="tel" class="form-control" name="phone" id="subject-field" required="" placeholder="01xxxxxxxxx">
							</div>

							<div class="col-md-6">
								<label for="email-field" class="pb-2">Your Nid Number</label>
								<input type="number" class="form-control" name="nid" id="nid-field" required="" placeholder="8889787878">
							</div>

							<div class="col-md-6">
								<label for="country-field" class="pb-2">Your Country</label>
								<select class="form-select" name="country_id" id="">
									<?php 
										$country_list = $this->db->get('country')->result();
										foreach ($country_list as $row) : ?>
										<option value="<?= $row->id?>"><?= $row->country_name.'('.$row->country_code.')'?></option>
										<?php endforeach; 
									?>
								</select>
							</div>

							<div class="col-md-6">
								<label for="email-field" class="pb-2">Your Refer Code</label>
								<input type="text" class="form-control" value="" name="reff_code" id="reff-field" required="" readonly>
							</div>

							<div class="col-md-6">
								<label for="email-field" class="pb-2">Your User Id</label>
								<input type="text" class="form-control" value="" name="user_id" id="user_id-field" required="" readonly>
							</div>

							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-raised btn-primary ml-2">Sign Up</button>
							</div>

						</div>
					</form>
				</div><!-- End Contact Form -->

			</div>

		</div>

	</section><!-- /Contact Section -->
</main>
<script>
        function generateRandomString(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        // Generate random strings on page load
        document.addEventListener('DOMContentLoaded', function() {
            const referCode = generateRandomString(6);
            const userId = generateRandomString(6);

            document.getElementById('reff-field').value = referCode;
            document.getElementById('user_id-field').value = userId;
        });
</script>
