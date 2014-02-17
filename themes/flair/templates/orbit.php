<?php
/**
 * Template Name: Orbit Page
 *
 * The template for displaying the Orbit page layout
 *
 *
 * @package Flair Theme
 */

get_header(); ?>
<!-- First Band (Slider) -->


  <div class="row">
    <div class="large-12 columns">
      <ul class="example-orbit" data-orbit>
        <li><img src=
        "http://placehold.it/1000x400&amp;text=[%20img%201%20]"></li>
        <li><img src=
        "http://placehold.it/1000x400&amp;text=[%20img%202%20]"></li>
        <li><img src=
        "http://placehold.it/1000x400&amp;text=[%20img%203%20]"></li>
      </ul>
    </div>
  </div>

<hr/>


<!-- Three-up Content Blocks -->

  <div class="row">
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    </div>

<!-- Call to Action Panel -->
<div class="row">
    <div class="large-12 columns">

      <div class="panel">
        <h4>Get in touch!</h4>

        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to hear from you, you attractive person you.</p>
          </div>
          <div class="large-3 columns">
            <a href="#" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<?php get_footer(); ?>
