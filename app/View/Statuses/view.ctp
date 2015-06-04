<div class="statuses view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Status'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Status'), array('action' => 'edit', $status['Status']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Status'), array('action' => 'delete', $status['Status']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Statuses'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Status'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tenants'), array('controller' => 'tenants', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tenant'), array('controller' => 'tenants', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($status['Status']['status']); ?>
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
	<?php if (!empty($status['ApplicationsLease'])): ?>
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
	<?php foreach ($status['ApplicationsLease'] as $applicationsLease): ?>
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
	<h3><?php echo __('Related Tenants'); ?></h3>
	<?php if (!empty($status['Tenant'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Marital Status Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Alternate Emails'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Work Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Driver License Number'); ?></th>
		<th><?php echo __('Driver License State'); ?></th>
		<th><?php echo __('Total Number Of Occupants'); ?></th>
		<th><?php echo __('Unit Or Address Applying For'); ?></th>
		<th><?php echo __('Requested Lease Term'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Emergency Contact'); ?></th>
		<th><?php echo __('Emergency Contact Email'); ?></th>
		<th><?php echo __('Emergency Contact Phone'); ?></th>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<th><?php echo __('Co Signer Details'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($status['Tenant'] as $tenant): ?>
		<tr>
			<td><?php echo $tenant['id']; ?></td>
			<td><?php echo $tenant['first_name']; ?></td>
			<td><?php echo $tenant['last_name']; ?></td>
			<td><?php echo $tenant['gender_id']; ?></td>
			<td><?php echo $tenant['marital_status_id']; ?></td>
			<td><?php echo $tenant['email']; ?></td>
			<td><?php echo $tenant['alternate emails']; ?></td>
			<td><?php echo $tenant['cell_phone']; ?></td>
			<td><?php echo $tenant['home_phone']; ?></td>
			<td><?php echo $tenant['work_phone']; ?></td>
			<td><?php echo $tenant['fax']; ?></td>
			<td><?php echo $tenant['country_id']; ?></td>
			<td><?php echo $tenant['state_id']; ?></td>
			<td><?php echo $tenant['street']; ?></td>
			<td><?php echo $tenant['City']; ?></td>
			<td><?php echo $tenant['zip']; ?></td>
			<td><?php echo $tenant['birth_date']; ?></td>
			<td><?php echo $tenant['driver_license_number']; ?></td>
			<td><?php echo $tenant['driver_license_state']; ?></td>
			<td><?php echo $tenant['total_number_of_occupants']; ?></td>
			<td><?php echo $tenant['unit_or_address_applying_for']; ?></td>
			<td><?php echo $tenant['requested_lease_term']; ?></td>
			<td><?php echo $tenant['status_id']; ?></td>
			<td><?php echo $tenant['emergency_contact']; ?></td>
			<td><?php echo $tenant['emergency_contact_email']; ?></td>
			<td><?php echo $tenant['emergency_contact_phone']; ?></td>
			<td><?php echo $tenant['relationship_to_tenant']; ?></td>
			<td><?php echo $tenant['co_signer_details']; ?></td>
			<td><?php echo $tenant['notes']; ?></td>
			<td><?php echo $tenant['photo']; ?></td>
			<td><?php echo $tenant['created']; ?></td>
			<td><?php echo $tenant['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'tenants', 'action' => 'view', $tenant['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'tenants', 'action' => 'edit', $tenant['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'tenants', 'action' => 'delete', $tenant['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tenant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tenant'), array('controller' => 'tenants', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Units'); ?></h3>
	<?php if (!empty($status['Unit'])): ?>
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
	<?php foreach ($status['Unit'] as $unit): ?>
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
