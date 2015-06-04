<div class="maritalStatuses view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Marital Status'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Marital Status'), array('action' => 'edit', $maritalStatus['MaritalStatus']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Marital Status'), array('action' => 'delete', $maritalStatus['MaritalStatus']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $maritalStatus['MaritalStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Marital Statuses'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Marital Status'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Applicants'), array('controller' => 'applicants', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Applicant'), array('controller' => 'applicants', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tenants'), array('controller' => 'tenants', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tenant'), array('controller' => 'tenants', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($maritalStatus['MaritalStatus']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marital Status'); ?></th>
		<td>
			<?php echo h($maritalStatus['MaritalStatus']['marital_status']); ?>
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
	<h3><?php echo __('Related Applicants'); ?></h3>
	<?php if (!empty($maritalStatus['Applicant'])): ?>
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
	<?php foreach ($maritalStatus['Applicant'] as $applicant): ?>
		<tr>
			<td><?php echo $applicant['id']; ?></td>
			<td><?php echo $applicant['first_name']; ?></td>
			<td><?php echo $applicant['last_name']; ?></td>
			<td><?php echo $applicant['gender_id']; ?></td>
			<td><?php echo $applicant['marital_status_id']; ?></td>
			<td><?php echo $applicant['email']; ?></td>
			<td><?php echo $applicant['alternate emails']; ?></td>
			<td><?php echo $applicant['cell_phone']; ?></td>
			<td><?php echo $applicant['home_phone']; ?></td>
			<td><?php echo $applicant['work_phone']; ?></td>
			<td><?php echo $applicant['fax']; ?></td>
			<td><?php echo $applicant['country_id']; ?></td>
			<td><?php echo $applicant['state_id']; ?></td>
			<td><?php echo $applicant['street']; ?></td>
			<td><?php echo $applicant['City']; ?></td>
			<td><?php echo $applicant['zip']; ?></td>
			<td><?php echo $applicant['birth_date']; ?></td>
			<td><?php echo $applicant['driver_license_number']; ?></td>
			<td><?php echo $applicant['driver_license_state']; ?></td>
			<td><?php echo $applicant['total_number_of_occupants']; ?></td>
			<td><?php echo $applicant['unit_or_address_applying_for']; ?></td>
			<td><?php echo $applicant['requested_lease_term']; ?></td>
			<td><?php echo $applicant['status_id']; ?></td>
			<td><?php echo $applicant['emergency_contact']; ?></td>
			<td><?php echo $applicant['emergency_contact_email']; ?></td>
			<td><?php echo $applicant['emergency_contact_phone']; ?></td>
			<td><?php echo $applicant['relationship_to_tenant']; ?></td>
			<td><?php echo $applicant['co_signer_details']; ?></td>
			<td><?php echo $applicant['notes']; ?></td>
			<td><?php echo $applicant['photo']; ?></td>
			<td><?php echo $applicant['created']; ?></td>
			<td><?php echo $applicant['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'applicants', 'action' => 'view', $applicant['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'applicants', 'action' => 'edit', $applicant['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'applicants', 'action' => 'delete', $applicant['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $applicant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Applicant'), array('controller' => 'applicants', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Tenants'); ?></h3>
	<?php if (!empty($maritalStatus['Tenant'])): ?>
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
	<?php foreach ($maritalStatus['Tenant'] as $tenant): ?>
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
