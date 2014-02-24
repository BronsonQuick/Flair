<?php
/**
 * Template Name: Contact Template
 *
 * The template for displaying the Contact Page
 *
 *
 * @package Flair Theme
 */

get_header(); ?>
<!-- Main Page Content and Sidebar -->

<div class="row">

	<!-- Contact Details -->
	<div class="large-9 columns">

		<h3>Get in Touch!</h3>

		<p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day
			<em>all day</em>.</p>

		<div class="section-container tabs" data-section>
			<section class="section">
				<h5 class="title"><a href="#panel1">Contact Our Company</a></h5>

				<div class="content" data-slug="panel1">
					<form>
						<div class="row collapse">
							<div class="large-2 columns">
								<label class="inline">Your Name</label>
							</div>
							<div class="large-10 columns">
								<input type="text" id="yourName" placeholder="Jane Smith">
							</div>
						</div>
						<div class="row collapse">
							<div class="large-2 columns">
								<label class="inline"> Your Email</label>
							</div>
							<div class="large-10 columns">
								<input type="text" id="yourEmail" placeholder="jane@smithco.com">
							</div>
						</div>
						<label>What's up?</label>
						<textarea rows="4"></textarea>
						<button type="submit" class="radius button">Submit</button>
					</form>
				</div>
			</section>
			<section class="section">
				<h5 class="title"><a href="#panel2">Specific Person</a></h5>

				<div class="content" data-slug="panel2">
					<ul class="large-block-grid-5">
						<li>
							<a href="mailto:mal@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Mal Reynolds</a>
						</li>
						<li>
							<a href="mailto:zoe@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Zoe Washburne</a>
						</li>
						<li>
							<a href="mailto:jayne@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Jayne Cobb</a>
						</li>
						<li>
							<a href="mailto:doc@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Simon Tam</a>
						</li>
						<li>
							<a href="mailto:killyouwithmymind@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">River Tam</a>
						</li>
						<li>
							<a href="mailto:leafonthewind@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Hoban Washburne</a>
						</li>
						<li>
							<a href="mailto:book@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Shepherd Book</a>
						</li>
						<li>
							<a href="mailto:klee@serenity.bc.reb"><img src="http://placehold.it/200x200&amp;text=[person]">Kaywinnet Lee Fry</a>
						</li>
						<li>
							<a href="mailto:inara@guild.comp.all"><img src="http://placehold.it/200x200&amp;text=[person]">Inarra Serra</a>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>

	<!-- End Contact Details -->


	<!-- Sidebar -->


	<div class="large-3 columns">
		<h5>Map</h5>
		<!-- Clicking this placeholder fires the mapModal Reveal modal -->
		<p>
			<a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br />
			<a href="" data-reveal-id="mapModal">View Map</a>
		</p>

		<p>
			123 Awesome St.<br />
			Barsoom, MA 95155
		</p>
	</div>
	<!-- End Sidebar -->
</div>

<!-- End Main Content and Sidebar -->
<?php get_footer(); ?>
