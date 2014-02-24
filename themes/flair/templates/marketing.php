<?php
/**
 * Template Name: Marketing Template
 *
 * The template for displaying the Marketing page layout
 *
 *
 * @package Flair Theme
 */

get_header(); ?>
<div class="row">
    <div class="large-12 columns">

    <!-- Content Slider -->

      <div class="row">
        <div class="large-12 hide-for-small">

          <div id="featured" data-orbit>
              <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
              <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
              <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
            </div>

      </div>
    </div>

    <!-- End Content Slider -->

    <!-- Mobile Header -->

      <div class="row">
        <div class="large-12 columns show-for-small">

          <img src="http://placehold.it/1200x700&text=Mobile Header">

        </div>
      </div><br>

    <!-- End Mobile Header -->


      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <!-- Shows -->
            <div class="large-4 small-6 columns">

              <h4>Upcoming Shows</h4><hr>

              <div class="row">
                <div class="large-1 column">
                  <img src="http://placehold.it/50x50&amp;text=[img]">
                </div>

                <div class="large-9 columns">
                  <h5><a href="#">Venue Name</a></h5>
                  <h6 class="subheader show-for-small">Doors at 00:00pm</h6>
                </div>
              </div><hr>

              <div class="hide-for-small">
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&amp;text=[img]">
                  </div>

                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Venue Name</a></h5>
                  </div>
                </div><hr>

                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&amp;text=[img]">
                  </div>

                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Venue Name</a></h5>
                  </div>
                </div><hr>

                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&amp;text=[img]">
                  </div>

                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Venue Name</a></h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Shows -->


            <!-- Image -->

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/300x465&amp;text=Image">
            </div>

            <!-- End Image -->


            <!-- Feed -->

            <div class="large-4 small-12 columns">

              <h4>Blog</h4><hr>
              <div class="panel">
                <h5><a href="#">Post Title 1</a></h5>

                <h6 class="subheader">
                  Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
                </h6>

                <h6><a href="#">Read More »</a></h6>
              </div>

              <div class="panel hide-for-small">
                <h5><a href="#">Post Title 2 »</a></h5>
              </div>

              <div class="panel hide-for-small">
                <h5><a href="#">Post Title 3 »</a></h5>
              </div>

              <a href="#" class="right">Go To Blog »</a>

            </div>

            <!-- End Feed -->

          </div>
        </div>
      </div>

    <!-- End Content -->

    </div>
  </div>
<?php get_footer(); ?>
