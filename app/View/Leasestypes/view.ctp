<div class="leasestypes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Leasestype'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Leasestype'), array('action' => 'edit', $leasestype['Leasestype']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Leasestype'), array('action' => 'delete', $leasestype['Leasestype']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $leasestype['Leasestype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Leasestypes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Leasestype'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($leasestype['Leasestype']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type Lease'); ?></th>
		<td>
			<?php echo h($leasestype['Leasestype']['type_lease']); ?>
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
	<h3><?php echo __('Related Applications Leases'); ?></h3>
	<?php if (!empty($leasestype['ApplicationsLease'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Leasestype Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Automatically End The Lease'); ?></th>
		<th><?php echo __('Recurringcharge Id'); ?></th>
		<th><?php echo __('Next Due Date'); ?></th>
		<th><?php echo __('Rent Mount'); ?></th>
		<th><?php echo __('Security Deposit'); ?></th>
		<th><?php echo __('Security Deposit Date'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Agreement'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($leasestype['ApplicationsLease'] as $applicationsLease): ?>
		<tr>
			<td><?php echo $applicationsLease['id']; ?></td>
			<td><?php echo $applicationsLease['tenant_id']; ?></td>
			<td><?php echo $applicationsLease['property_id']; ?></td>
			<td><?php echo $applicationsLease['unit_id']; ?></td>
			<td><?php echo $applicationsLease['leasestype_id']; ?></td>
			<td><?php echo $applicationsLease['start_date']; ?></td>
			<td><?php echo $applicationsLease['end_date']; ?></td>
			<td><?php echo $applicationsLease['automatically_end_the_lease']; ?></td>
			<td><?php echo $applicationsLease['recurringcharge_id']; ?></td>
			<td><?php echo $applicationsLease['next_due_date']; ?></td>
			<td><?php echo $applicationsLease['rent_mount']; ?></td>
			<td><?php echo $applicationsLease['security_deposit']; ?></td>
			<td><?php echo $applicationsLease['security_deposit_date']; ?></td>
			<td><?php echo $applicationsLease['status_id']; ?></td>
			<td><?php echo $applicationsLease['notes']; ?></td>
			<td><?php echo $applicationsLease['agreement']; ?></td>
			<td><?php echo $applicationsLease['created']; ?></td>
			<td><?php echo $applicationsLease['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'applications_leases', 'action' => 'view', $applicationsLease['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'applications_leases', 'action' => 'edit', $applicationsLease['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'applications_leases', 'action' => 'delete', $applicationsLease['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $applicationsLease['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Units'); ?></h3>
	<?php if (!empty($leasestype['Unit'])): ?>
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
	<?php foreach ($leasestype['Unit'] as $unit): ?>
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
