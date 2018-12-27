<!-- <form id="contact-form" method="POST" action="#"> -->
<form id="contact-form" action="https://formspree.io/cerebroiting@gmail.com" method="POST" />
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="name">
				Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
		</div>
		<div class="form-group">
			<label for="email">
				Email Address</label>
			<div class="input-group">
				<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
				</span>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
		</div>
		<div class="form-group">
			<label for="subject">
				Subject</label>
			<select id="subject" name="subject" class="form-control" required="required">
				<option value="" selected="">Choose One:</option>
				<option value="enquiry">Enquiry</option>
				<option value="academics">Academics</option>
				<option value="Web Development">Web Development</option>
				<option value="support">Support</option>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="name">
				Message</label>
			<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
				placeholder="Message"></textarea>
		</div>
	</div>
	<div class="col-md-12">
		<!-- <div class="col-lg-2 col-lg-offset-7 mail_loader_holder">
			<img alt="Loading." id="mail_send_loader" src="img/loader.gif"/>
		</div> -->
		<button type="submit" class="btn btn-skin pull-right" id="btnContactUs">Send Message</button>
	</div>
</div>
</form>
