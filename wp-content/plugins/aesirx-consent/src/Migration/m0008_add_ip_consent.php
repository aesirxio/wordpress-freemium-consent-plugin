<?php
if ( ! defined( 'ABSPATH' ) ) exit;
global $wpdb;

$aesirx_analytics_sql = [];

// Add ip_consent field to analytics_visitor_consent table

$aesirx_analytics_sql[] = "ALTER TABLE `{$wpdb->prefix}analytics_visitor_consent` ADD `ip_consent` VARCHAR(255) NULL DEFAULT NULL;";