<?php

/**
 * Element Controls: Block Grid Item
 */

return array(

	'title' => array(
		'type' => 'title',
		'context' => 'content',
		'suggest' => __( 'Block Grid Item', csl18n() ),
	),

	'content' => array(
		'type' => 'editor',
		'ui'   => array(
			'title'   => __( 'Content', csl18n() ),
      'tooltip' => __( 'Include your desired content for your Block Grid Item here.', csl18n() ),
		),
		'context' => 'content',
		'suggest' => __( 'Add some content to your block grid item here. The block grid responds a little differently than traditional columns, allowing you to mix and match for cool effects.', csl18n() ),
	),

);