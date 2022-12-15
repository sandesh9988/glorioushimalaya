<div class="wrap">
	<h1>All Forms</h1>

<?php
$results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}ct_form");
//pr($results);
?>
<style>
.widefat td, .widefat th {
    padding: 15px 10px;
}
</style>
<table class="wp-list-table widefat fixed striped" cellpadding="5" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Form Name</th>
            <th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($results as $row) { ?>
			<tr>
				<td><?php echo $row->id;?></td>
				<td>
					<strong>
						<a style="font-size: 16px;font-weight:500;" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=all_forms&amp;form_id=<?php echo $row->id;?>"><?php echo $row->form_name;?></a>
					</strong>
				</td>
                <th>
                    <a class="page-title-action" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=all_forms&amp;form_id=<?php echo $row->id;?>">View Entries</a>
                </th>
			</tr>
		<?php } ?>
	</tbody>
</table>
</div>