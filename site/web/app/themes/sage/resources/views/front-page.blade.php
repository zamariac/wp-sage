@extends('layouts.app')

@section('content')
<section id="homepage">
  <div class="jumbotron jumbotron-fluid container-fluid">
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
        <span class="mobile-none"><?php the_field('review_with_logo_4'); ?></span>
        <span class="mobile-none"><?php the_field('review_with_logo_5'); ?></span>
      </div>
    </div>
  </div>
  <div class="membership-types">
    <div class="blurb" id="blurb">
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
    <div class="pricing-blurb">
      <?php the_field('pricing_page_blurb'); ?>
    </div>
  </div>
  <div class="info-cards">
    <div class="memo">
      <?php the_field('info_cards_blurb'); ?>
    </div>
    <div class="info-cards-container">
      <div class="individual-card-1">
        <?php $id = get_field('info_card_1'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="info-text"><?php the_field('info_card_text_1'); ?></div>
      </div>
      <div class="individual-card-2">
        <?php $id = get_field('info_card_2'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="info-text-2"><?php the_field('info_card_text_2'); ?></div>
      </div>
      <div class="individual-card-1">
        <?php $id = get_field('info_card_3'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="info-text"><?php the_field('info_card_text_3'); ?></div>
      </div>
      <div class="individual-card-2">
        <?php $id = get_field('info_card_4'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="info-text-2"><?php the_field('info_card_text_4'); ?></div>
      </div>
    </div>
  </div>
  <div class="icons-container">
    <div class="individual-icon-container">
        <?php $id = get_field('icon_1'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="icon-text"><?php the_field('icon_text_1'); ?></div>
    </div>
    <div class="individual-icon-container">
        <?php $id = get_field('icon_2'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="icon-text"><?php the_field('icon_text_2'); ?></div>
    </div>
    <div class="individual-icon-container">
        <?php $id = get_field('icon_3'); $size = 'full';  
        $alt = get_post_meta( $id, '_wp_attachment_image_alt', true); 
        echo wp_get_attachment_image( $id, $size, "", ['alt' => $alt, 'class' => 'custom'] ); ?>
        <div class="icon-text"><?php the_field('icon_text_3'); ?></div>
    </div>
  </div>
  <div class="join-us">
    <div class="join">
        <?php the_field('join_us_blurb'); ?>
    </div>
    <a href="#" class="button"> <?php the_field('get_started_button'); ?></a>
  </div>
</section>

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
