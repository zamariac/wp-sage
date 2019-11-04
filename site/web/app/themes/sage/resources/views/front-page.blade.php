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
        <p class="right-section">"<?php the_field('main_review'); ?>"
        <?php $id = get_field('main_review_image'); $size = 'full';$alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        </p>
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
</section>

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
