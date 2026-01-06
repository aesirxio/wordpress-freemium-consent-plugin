<?php
if ( ! defined( 'ABSPATH' ) ) exit;
global $wpdb;

$aesirx_analytics_sql = [];

// Add timezone field to analytics_visitors table

$aesirx_analytics_sql[] = "ALTER TABLE `{$wpdb->prefix}analytics_visitors` ADD `timezone` VARCHAR(255) NULL DEFAULT NULL;";