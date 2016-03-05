<?php

// Prompt
// =============================================================================

function x_shortcode_prompt_custom( $atts ) {
  extract( shortcode_atts( array(
    'id'          => '',
    'class'       => '',
    'style'       => '',
    'type'        => '',
    'title'       => '',
    'message'     => '',
    'button_text' => '',
    'button_icon' => '',
    'circle'      => '',
    'href'        => '',
    'leadbox'     => '',
    'd_url'        => '',
    'href_title'  => '',
    'target'      => ''
  ), $atts, 'x_prompt' ) );

  $id          = ( $id          != ''      ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class       = ( $class       != ''      ) ? 'x-prompt ' . esc_attr( $class ) : 'x-prompt';
  $style       = ( $style       != ''      ) ? 'style="' . $style . '"' : '';
  $type        = ( $type        != ''      ) ? $type : '';
  $title       = ( $title       != ''      ) ? $title : 'Enter Your Text';
  $message     = ( $message     != ''      ) ? $message : 'Don\'t forget to enter in your text.';
  $button_text = ( $button_text != ''      ) ? $button_text : 'Enter Your Text';
  $button_icon = ( $button_icon != ''      ) ? $button_icon : '';
  $href        = ( $href        != ''      ) ? $href : '#';
  $leadbox        = ( $leadbox        != ''      ) ? $leadbox : '';
  $d_url        = ( $d_url        != ''      ) ? $d_url : '';
  $href_title  = ( $href_title  != ''      ) ? $href_title : $button_text;
  $target      = ( $target      == 'blank' ) ? 'target="_blank"' : '';

  if ( $button_icon != '' ) {
    $unicode     = fa_unicode( $button_icon );
    $button_icon = '<i class="x-icon-' . $button_icon . '" data-x-icon="&#x' . $unicode . ';"></i>';
  }

  if ( $circle == 'true' ) {
    $button = "<div class=\"x-btn-circle-wrap x-btn-block mbn\"><a  href=\"{$href}\" class=\"x-btn x-btn-block\" title=\"{$href_title}\" {$target}>{$button_icon}{$button_text}</a><script data-leadbox='{$leadbox}' data-url='{$d_url}' data-config='%7B%7D' type='text/javascript' src='https://ereach.leadpages.co/leadbox-985.js'></script></div>";
  } else {
    $button = "<a href=\"{$href}\" class=\"x-btn x-btn-block\" title=\"{$href_title}\" {$target}>{$button_icon}{$button_text}</a><script data-leadbox='{$leadbox}' data-url='{$d_url}' data-config='%7B%7D' type='text/javascript' src='https://ereach.leadpages.co/leadbox-985.js'></script>";
  }

  if ( $type == 'right' ) {

    $output = "<div {$id} class=\"{$class} message-right\" {$style}>"
              . '<div class="x-prompt-section x-prompt-section-button">'
                . $button
              . '</div>'
              . '<div class="x-prompt-section x-prompt-section-message">'
                . "<h2 class=\"h-prompt\">{$title}</h2>"
                . "<p class=\"p-prompt\">{$message}</p>"
              . '</div>'
            . '</div>';

  } else {

    $output = "<div {$id} class=\"{$class} message-left\" {$style}>"
              . '<div class="x-prompt-section x-prompt-section-message">'
                . "<h2 class=\"h-prompt\">{$title}</h2>"
                . "<p class=\"p-prompt\">{$message}</p>"
              . '</div>'
              . '<div class="x-prompt-section x-prompt-section-button">'
                . $button
              . '</div>'
            . '</div>';

  }

  return $output;
}

add_shortcode( 'x_prompt_custom', 'x_shortcode_prompt_custom' );