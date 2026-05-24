<?php
/**
 * WordPress wp-config.php Security Hardening Snippets
 * Paste these lines into your wp-config.php file to secure your installation.
 */

// 1. Disable the Plugin and Theme File Editor in Dashboard
define( 'DISALLOW_FILE_EDIT', true );

// 2. Disable Unfiltered HTML for Non-Admins (Prevents XSS attacks)
define( 'DISALLOW_UNFILTERED_HTML', true );

// 3. Force SSL / HTTPS for WordPress Admin Panel
define( 'FORCE_SSL_ADMIN', true );

// 4. Block External URL Requests (Optional: Except for core updates)
// define( 'WP_HTTP_BLOCK_EXTERNAL', true );
