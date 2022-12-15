<?php
global $wpdb;
$table_entry_name = $wpdb->prefix . 'ct_form_entries';
$table_detail_name = $wpdb->prefix . 'form_entries_detail';

$delete_id = $_GET['delete_id'];


$wpdb->delete( $table_entry_name, array( 'id' => $delete_id ) );
$wpdb->delete( $table_detail_name, array( 'entry_id' => $delete_id ) );
//header('Location: ' . $_SERVER['HTTP_REFERER']);
$url = $_SERVER['HTTP_REFERER'];
echo "<script>window.location.href='$url';</script>";
//header('Location: ' . $_SERVER['REQUEST_URI']);