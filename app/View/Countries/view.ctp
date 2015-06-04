<div class="countries view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Country'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Country'), array('action' => 'edit', $country['Country']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Country'), array('action' => 'delete', $country['Country']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Countries'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Country'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cities'), array('controller' => 'cities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New City'), array('controller' => 'cities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Properties'), array('controller' => 'properties', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Property'), array('controller' => 'properties', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List References'), array('controller' => 'references', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Reference'), array('controller' => 'references', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Rental Owners'), array('controller' => 'rental_owners', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Rental Owner'), array('controller' => 'rental_owners', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Country'); ?></th>
		<td>
			<?php echo h($country['Country']['country']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Paypal'); ?></th>
		<td>
			<?php echo h($country['Country']['paypal']); ?>
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
	<h3><?php echo __('Related Cities'); ?></h3>
	<?php if (!empty($country['City'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($country['City'] as $city): ?>
		<tr>
			<td><?php echo $city['id']; ?></td>
			<td><?php echo $city['country_id']; ?></td>
			<td><?php echo $city['state_id']; ?></td>
			<td><?php echo $city['city']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'cities', 'action' => 'view', $city['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'cities', 'action' => 'edit', $city['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'cities', 'action' => 'delete', $city['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $city['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New City'), array('controller' => 'cities', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Properties'); ?></h3>
	<?php if (!empty($country['Property'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Name'); ?></th>
		<th><?php echo __('Number Of Units'); ?></th>
		<th><?php echo __('Propertiestype Id'); ?></th>
		<th><?php echo __('Propertiestypes Specification Id'); ?></th>
		<th><?php echo __('Rental Owner Id'); ?></th>
		<th><?php echo __('Operating Account Id'); ?></th>
		<th><?php echo __('Property Reserve'); ?></th>
		<th><?php echo __('Rental Amount'); ?></th>
		<th><?php echo __('Deposit Amount'); ?></th>
		<th><?php echo __('Lease Term'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($country['Property'] as $property): ?>
		<tr>
			<td><?php echo $property['id']; ?></td>
			<td><?php echo $property['property_name']; ?></td>
			<td><?php echo $property['number_of_units']; ?></td>
			<td><?php echo $property['propertiestype_id']; ?></td>
			<td><?php echo $property['propertiestypes_specification_id']; ?></td>
			<td><?php echo $property['rental_owner_id']; ?></td>
			<td><?php echo $property['operating_account_id']; ?></td>
			<td><?php echo $property['property_reserve']; ?></td>
			<td><?php echo $property['rental_amount']; ?></td>
			<td><?php echo $property['deposit_amount']; ?></td>
			<td><?php echo $property['lease_term']; ?></td>
			<td><?php echo $property['country_id']; ?></td>
			<td><?php echo $property['state_id']; ?></td>
			<td><?php echo $property['street']; ?></td>
			<td><?php echo $property['City']; ?></td>
			<td><?php echo $property['zip']; ?></td>
			<td><?php echo $property['description']; ?></td>
			<td><?php echo $property['photo']; ?></td>
			<td><?php echo $property['created']; ?></td>
			<td><?php echo $property['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'properties', 'action' => 'view', $property['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'properties', 'action' => 'edit', $property['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'properties', 'action' => 'delete', $property['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $property['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Property'), array('controller' => 'properties', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related References'); ?></h3>
	<?php if (!empty($country['Reference'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Id Government'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Phone2'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($country['Reference'] as $reference): ?>
		<tr>
			<td><?php echo $reference['id']; ?></td>
			<td><?php echo $reference['tenant_id']; ?></td>
			<td><?php echo $reference['first_name']; ?></td>
			<td><?php echo $reference['last_name']; ?></td>
			<td><?php echo $reference['gender_id']; ?></td>
			<td><?php echo $reference['id_government']; ?></td>
			<td><?php echo $reference['phone']; ?></td>
			<td><?php echo $reference['phone2']; ?></td>
			<td><?php echo $reference['email']; ?></td>
			<td><?php echo $reference['fax']; ?></td>
			<td><?php echo $reference['relationship_to_tenant']; ?></td>
			<td><?php echo $reference['street']; ?></td>
			<td><?php echo $reference['country_id']; ?></td>
			<td><?php echo $reference['state_id']; ?></td>
			<td><?php echo $reference['city']; ?></td>
			<td><?php echo $reference['photo']; ?></td>
			<td><?php echo $reference['notes']; ?></td>
			<td><?php echo $reference['created']; ?></td>
			<td><?php echo $reference['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'references', 'action' => 'view', $reference['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'references', 'action' => 'edit', $reference['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'references', 'action' => 'delete', $reference['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Reference'), array('controller' => 'references', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Rental Owners'); ?></h3>
	<?php if (!empty($country['RentalOwner'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Id Government'); ?></th>
		<th><?php echo __('Company Name'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Primary Email'); ?></th>
		<th><?php echo __('Alternate Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($country['RentalOwner'] as $rentalOwner): ?>
		<tr>
			<td><?php echo $rentalOwner['id']; ?></td>
			<td><?php echo $rentalOwner['first_name']; ?></td>
			<td><?php echo $rentalOwner['last_name']; ?></td>
			<td><?php echo $rentalOwner['gender_id']; ?></td>
			<td><?php echo $rentalOwner['id_government']; ?></td>
			<td><?php echo $rentalOwner['company_name']; ?></td>
			<td><?php echo $rentalOwner['date_of_birth']; ?></td>
			<td><?php echo $rentalOwner['primary_email']; ?></td>
			<td><?php echo $rentalOwner['alternate_email']; ?></td>
			<td><?php echo $rentalOwner['phone']; ?></td>
			<td><?php echo $rentalOwner['fax']; ?></td>
			<td><?php echo $rentalOwner['street']; ?></td>
			<td><?php echo $rentalOwner['country_id']; ?></td>
			<td><?php echo $rentalOwner['state_id']; ?></td>
			<td><?php echo $rentalOwner['city']; ?></td>
			<td><?php echo $rentalOwner['zip']; ?></td>
			<td><?php echo $rentalOwner['comments']; ?></td>
			<td><?php echo $rentalOwner['photo']; ?></td>
			<td><?php echo $rentalOwner['created']; ?></td>
			<td><?php echo $rentalOwner['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'rental_owners', 'action' => 'view', $rentalOwner['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'rental_owners', 'action' => 'edit', $rentalOwner['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'rental_owners', 'action' => 'delete', $rentalOwner['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $rentalOwner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Rental Owner'), array('controller' => 'rental_owners', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related States'); ?></h3>
	<?php if (!empty($country['State'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($country['State'] as $state): ?>
		<tr>
			<td><?php echo $state['id']; ?></td>
			<td><?php echo $state['country_id']; ?></td>
			<td><?php echo $state['state']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'states', 'action' => 'view', $state['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'states', 'action' => 'edit', $state['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'states', 'action' => 'delete', $state['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $state['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Tenants'); ?></h3>
	<?php if (!empty($country['Tenant'])): ?>
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
	<?php foreach ($country['Tenant'] as $tenant): ?>
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
