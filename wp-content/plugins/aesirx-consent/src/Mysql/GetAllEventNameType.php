<?php
if ( ! defined( 'ABSPATH' ) ) exit;

use AesirxAnalytics\AesirxAnalyticsMysqlHelper;

Class AesirX_Analytics_Get_All_Event_Name_Type extends AesirxAnalyticsMysqlHelper
{
    function aesirx_analytics_mysql_execute($params = [])
    {
        global $wpdb;
        $where_clause = [];
        $bind = [];
        $wpPrefix = $wpdb->prefix;
        parent::aesirx_analytics_add_filters($params, $where_clause, $bind);

        $sql= "SELECT
            {$wpPrefix}analytics_events.event_name,
            {$wpPrefix}analytics_events.event_type,
            COUNT({$wpPrefix}analytics_events.uuid) as total_visitor,
            COUNT(DISTINCT {$wpPrefix}analytics_events.visitor_uuid) as unique_visitor
            from `{$wpPrefix}analytics_events`
            left join `{$wpPrefix}analytics_visitors` on {$wpPrefix}analytics_visitors.uuid = {$wpPrefix}analytics_events.visitor_uuid 
            WHERE ".implode(" AND ", $where_clause).
            " GROUP BY {$wpPrefix}analytics_events.event_name, {$wpPrefix}analytics_events.event_type";

       $total_sql =
            "SELECT
            COUNT(DISTINCT {$wpPrefix}analytics_events.event_name, {$wpPrefix}analytics_events.event_type) as total
            from `{$wpPrefix}analytics_events`
            left join `{$wpPrefix}analytics_visitors` on {$wpPrefix}analytics_visitors.uuid = {$wpPrefix}analytics_events.visitor_uuid
            WHERE ".implode(" AND ", $where_clause);

        $sort = self::aesirx_analytics_add_sort($params, ["event_name", "total_visitor", "event_type", "unique_visitor"], "event_name");

        if (!empty($sort)) {
            $sql .= " ORDER BY " . implode(", ", $sort);
        }

        return parent::aesirx_analytics_get_list($sql, $total_sql, $params, [], $bind);
    }
}
