<div class="wrap">
	<h1>Entry Detail <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>" class="pull-right btn-admin-back">Back</a></h1>
</div>



<div id="post-body-content" class="has-sidebar-content">
<div class="entry-sidebar">     
<h4>Info</h4>                       
<?php
$results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}ct_form_entries WHERE id='{$_GET['id']}'");
?>

<?php foreach($results as $row) { ?>
<h5>From:<?php echo $row->client_name; ?>, <?php echo $row->client_email;?> </h5>
<h5>Submitted on:<?php echo $row->date;?></h5>
<h5>Client IP: <?php echo $row->client_ip;?> </h5>
<h5><a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=all_forms&amp;delete_id=<?php echo $_GET['id'];?>" onclick="return confirm('Are You sure want to delete ?')">Delete</a></h5>


<?php }?>
</div>
<table class="widefat fixed entry-detail-view form-entry-table" cellspacing="0">
<tbody>
<?php

$results2 = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}form_entries_detail WHERE entry_id='{$_GET['id']}'");
foreach($results2 as $row2){ ?>
<tr>
    <td colspan="2" class="entry-view-field-name"><?php echo $row2->name; ?></td>
</tr>
    
<tr>
    <td colspan="2" class="entry-view-field-value"><?php echo $row2->value; ?></td>
</tr>
<?php } ?>

</tbody></table>
`</div>