<div class="wrap">
	<h1>All Entries <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=all_forms" class="pull-right btn-admin-back">Back</a></h1>

<?php
$results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}ct_form_entries WHERE form_id={$_GET['form_id']}");
?>
<style>
.widefat td, .widefat th {
    padding: 15px 10px;
}
</style>
<table class="wp-list-table widefat fixed striped" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Client Name</th>
			<th>Email</th>
			<th>Submit Date</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
        if($results){
        foreach($results as $row) { ?>
			<tr>
				<td><?php echo $row->id;?></td>
				<td>
					<a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=all_forms&amp;id=<?php echo $row->id;?>"><?php echo $row->client_name;?></a>
				</td>
				<td><?php echo $row->client_email;?></td>
				<td><?php echo $row->date;?></td>
				<td><a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=all_forms&amp;delete_id=<?php echo $row->id;?>" onclick="return confirm('Are You sure want to delete ?')">Delete</a></td>
			</tr>
		<?php } }else{ ?>
            <tr>
                <td colspan="5">
                    <center>No Entry Found</center>
                </td>
            </tr>
        <?php } ?>
	</tbody>
</table>
</div>