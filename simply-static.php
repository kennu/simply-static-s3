<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Plugin Name:       Simply Static S3
 * Plugin URI:        https://github.com/kennu/simply-static-s3
 * Description:       Produces a static HTML version of your WordPress install, adjusts URLs accordingly and deploys to Amazon S3.
 * Version:           2.0.0
 * Author:            Kenneth Falck (based on Code of Conduct)
 * Author URI:        https://github.com/kennu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simply-static-s3
 * Domain Path:       /languages
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-simply-static.php';

Simply_Static::init( __FILE__ );
