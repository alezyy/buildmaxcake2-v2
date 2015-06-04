<div class="sizes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Size'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Size'), array('action' => 'edit', $size['Size']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Size'), array('action' => 'delete', $size['Size']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $size['Size']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sizes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Size'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Units'), array('controller' => 'units', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Unit'), array('controller' => 'units', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($size['Size']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Size'); ?></th>
		<td>
			<?php echo h($size['Size']['size']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Units'); ?></h3>
	<?php if (!empty($size['Unit'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Rental Owner Id'); ?></th>
		<th><?php echo __('Unit Number'); ?></th>
		<th><?php echo __('Size Id'); ?></th>
		<th><?php echo __('Market Rent'); ?></th>
		<th><?php echo __('Bedrooms'); ?></th>
		<th><?php echo __('Bath'); ?></th>
		<th><?php echo __('Lease Term'); ?></th>
		<th><?php echo __('Leasestype Id'); ?></th>
		<th><?php echo __('Rental Amount'); ?></th>
		<th><?php echo __('Deposit Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Features'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($size['Unit'] as $unit): ?>
		<tr>
			<td><?php echo $unit['id']; ?></td>
			<td><?php echo $unit['property_id']; ?></td>
			<td><?php echo $unit['rental_owner_id']; ?></td>
			<td><?php echo $unit['unit_number']; ?></td>
			<td><?php echo $unit['size_id']; ?></td>
			<td><?php echo $unit['market_rent']; ?></td>
			<td><?php echo $unit['bedrooms']; ?></td>
			<td><?php echo $unit['bath']; ?></td>
			<td><?php echo $unit['lease_term']; ?></td>
			<td><?php echo $unit['leasestype_id']; ?></td>
			<td><?php echo $unit['rental_amount']; ?></td>
			<td><?php echo $unit['deposit_amount']; ?></td>
			<td><?php echo $unit['description']; ?></td>
			<td><?php echo $unit['features']; ?></td>
			<td><?php echo $unit['photo']; ?></td>
			<td><?php echo $unit['status_id']; ?></td>
			<td><?php echo $unit['created']; ?></td>
			<td><?php echo $unit['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'units', 'action' => 'view', $unit['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'units', 'action' => 'edit', $unit['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'units', 'action' => 'delete', $unit['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $unit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Unit'), array('controller' => 'units', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
