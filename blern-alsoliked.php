<?php

/*
Plugin Name: Blern
Plugin URI: http://blog.blern.com/blern-users-also-liked/
Description: Displays a list of other articles from Blern that were also enjoyed by people who liked the article they're reading now.
Version: 1.3
Author: James Goss
Author URI: http://blern.com
*/

/*  Copyright 2008  James Goss  (email : jgoss@blern.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function blern_users_also_liked($del = 'br', $num = 5) {
	// $del can be one of 'br', 'li', or 'p' to indicate the type of tag that should delimit each article returned
	// $num specifies the number of articles to list
	
	$url = "http://api.blern.com/alsoliked/?url=" . urlencode(get_permalink()) . "&del=$del&num=$num";
	
	echo file_get_contents($url);
}

function blern_buzzworthy($del = 'br', $num = 5) {
	// $del can be one of 'br', 'li', or 'p' to indicate the type of tag that should delimit each article returned
	// $num specifies the number of articles to list
	
	$url = "http://api.blern.com/api/?content=buzzworthy&wp-plugin=1&del=$del&num=$num";
	
	echo file_get_contents($url);
}

function blern_popular($del = 'br', $num = 5) {
	// $del can be one of 'br', 'li', or 'p' to indicate the type of tag that should delimit each article returned
	// $num specifies the number of articles to list
	
	$url = "http://api.blern.com/api/?content=popular&wp-plugin=1&del=$del&num=$num";
	
	echo file_get_contents($url);	
}

function blern_mostrecommended($del = 'br', $num = 5) {
	// $del can be one of 'br', 'li', or 'p' to indicate the type of tag that should delimit each article returned
	// $num specifies the number of articles to list
	
	$url = "http://api.blern.com/api/?content=mostrecommended&wp-plugin=1&del=$del&num=$num";
	
	echo file_get_contents($url);	
}

?>