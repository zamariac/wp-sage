@extends('layouts.app')

@section('content')
<section id="homepage">
  <div class="jumbotron">
    <div class="overlay">
      <div class="headline-container">
        <div class="left-section">
          <h1><?php the_field('main_info'); ?></h1>
          <h3><?php the_field('main_info_sub'); ?></h3>
        </div>
        <div class="right-section">
          <?php the_field('main_review_area'); ?>
        </div>
      </div>
      <div class="review-container">
        <span><?php the_field('review_with_logo'); ?></span>
        <span><?php the_field('review_with_logo_2'); ?></span>
        <span><?php the_field('review_with_logo_3'); ?></span>
        <span><?php the_field('review_with_logo_4'); ?></span>
        <span><?php the_field('review_with_logo_5'); ?></span>
      </div>
    </div>
  </div>
  <div class="membership-types">
    <div class="blurb">
      <?php the_field('membership_blurb'); ?>
    </div>
    <div class="types">
      <span class="type-container left">
        <?php the_field('membership_a'); ?>
        <a href="#" class="button"> <?php the_field('button_a'); ?></a>
      </span>
      <span class="type-container right">
        <?php the_field('membership_b'); ?>
        <a href="#" class="button"> <?php the_field('button_b'); ?></a>
      </span>
      <span class="type-container right"> 
        <?php the_field('membership_c'); ?>
        <a href="#" class="button"> <?php the_field('button_c'); ?></a>
      </span>
    </div>
  </div>
</section>

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
