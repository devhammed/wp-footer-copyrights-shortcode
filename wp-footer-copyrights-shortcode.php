<?php

/**
 * Plugin Name: WP Footer Copyrights Shortcode
 * Plugin URI: https://github.com/devhammed/wp-footer-copyrights-shortcode
 * Description: WordPress Plugin with Shortcode for Site Copyrights with Auto-updating Year.
 * Version: 1.0.0
 * Author: Hammed Oyedele
 * Author URI: https://github.com/devhammed
 * Text Domain: wp-footer-copyrights-shortcode
 * License: GPL-2.0+
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 */

/*
  Copyright 2020  Hammed Oyedele (itz.harmid@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  Permission is hereby granted, free of charge, to any person obtaining a copy of this
  software and associated documentation files (the "Software"), to deal in the Software
  without restriction, including without limitation the rights to use, copy, modify, merge,
  publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons
  to whom the Software is furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in all copies or
  substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
  THE SOFTWARE.
*/

function devhammed_handle_wp_footer_copyrights_shortcode($attrs = array())
{
    $attrs = shortcode_atts(array(
        'site' => get_bloginfo('name'),
        'prefix' => '',
        'suffix' => '',
    ), $attrs, 'wp-footer-copyrights');

    $current_year = \date('Y');
    $site_name = $attrs['site'];
    $prefix = do_shortcode($attrs['prefix']);
    $suffix = do_shortcode($attrs['suffix']);

    return "${prefix}© Copyright ${site_name} ${current_year}${suffix}";
}
add_shortcode('wp-footer-copyrights', 'devhammed_handle_wp_footer_copyrights_shortcode');
