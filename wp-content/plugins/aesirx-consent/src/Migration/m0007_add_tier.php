<?php
if ( ! defined( 'ABSPATH' ) ) exit;
global $wpdb;

$aesirx_analytics_sql = [];

// Add tier field to analytics_visitor_consent table

$aesirx_analytics_sql[] = "ALTER TABLE `{$wpdb->prefix}analytics_visitor_consent` ADD `tier` VARCHAR(255) NULL DEFAULT NULL FIRST;";