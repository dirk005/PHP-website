<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Contact Us</h2>
			</div>
		</div>
		
		
		
		<div class="row">
			<div class="col-lg-12">
				
				<form name="sentMessage" id="contactForm" novalidate >
						<div class="control-group form-group">
							<div class="controls">
								<label>Full Name:</label>
								<input type="text" class="form-control"  placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Phone Number:</label>
								<input type="tel" class="form-control"  placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Email Address:</label>
								<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Message:</label>
								<textarea rows="10" cols="100" placeholder="Your Message *" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary">
							Send Message
						</button>
					</form>
			</div>
		</div>
	</div>
</section>
