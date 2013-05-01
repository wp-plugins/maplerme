<?php
/*
Plugin Name: Mapler.me
Plugin URI: http://mapler.me/
Description: Mapler.me's Official Wordpress Plugin
Version: 1.0.2
Author: Mapler.me
Author URI: http://tylerliberman.com
License: GPL2

Copyright 2013  Tyler Liberman (Mapler.me)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/

function maplerme_shortcode( $atts ) {

	extract(shortcode_atts(
		array(
			'player' => '',
			'link' => 'yes',
		), $atts )
	);

	if ($link == 'yes') {
		return '<a href="//mapler.me/player/'.$player.'"><img src="//mapler.me/avatar/'.$player.'"/></a>';
	}
	else {
		//no link added if $link is set to anything else but yes.
		return '<img src="//mapler.me/avatar/'.$player.'"/>';
	}
}
add_shortcode( 'maplerme', 'maplerme_shortcode' );

?>