<div class="units view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Unit'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Unit'), array('action' => 'edit', $unit['Unit']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Units'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Unit'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($unit['Unit']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Property Id'); ?></th>
		<td>
			<?php echo h($unit['Unit']['property_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rental Owner Id'); ?></th>
		<td>
			<?php echo h($unit['Unit']['rental_owner_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unit Number'); ?></th>
		<td>
			<?php echo h($unit['Unit']['unit_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Size Id'); ?></th>
		<td>
			<?php echo h($unit['Unit']['size_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Market Rent'); ?></th>
		<td>
			<?php echo h($unit['Unit']['market_rent']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bedrooms'); ?></th>
		<td>
			<?php echo h($unit['Unit']['bedrooms']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bath'); ?></th>
		<td>
			<?php echo h($unit['Unit']['bath']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lease Term'); ?></th>
		<td>
			<?php echo h($unit['Unit']['lease_term']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Leasestype Id'); ?></th>
		<td>
			<?php echo h($unit['Unit']['leasestype_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rental Amount'); ?></th>
		<td>
			<?php echo h($unit['Unit']['rental_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deposit Amount'); ?></th>
		<td>
			<?php echo h($unit['Unit']['deposit_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($unit['Unit']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Features'); ?></th>
		<td>
			<?php echo h($unit['Unit']['features']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($unit['Unit']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status Id'); ?></th>
		<td>
			<?php echo h($unit['Unit']['status_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($unit['Unit']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($unit['Unit']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

