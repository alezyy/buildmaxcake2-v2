<div class="tenants view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Tenant'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Tenant'), array('action' => 'edit', $tenant['Tenant']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Tenant'), array('action' => 'delete', $tenant['Tenant']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tenant['Tenant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tenants'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tenant'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($tenant['Tenant']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Gender Id'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['gender_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marital Status Id'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['marital_status_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alternate Emails'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['alternate emails']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cell Phone'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['cell_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Home Phone'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['home_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Work Phone'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['work_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Country Id'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['country_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State Id'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['state_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Street'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['City']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['zip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Birth Date'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['birth_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Driver License Number'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['driver_license_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Driver License State'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['driver_license_state']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Number Of Occupants'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['total_number_of_occupants']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unit Or Address Applying For'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['unit_or_address_applying_for']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Requested Lease Term'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['requested_lease_term']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status Id'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['status_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emergency Contact'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['emergency_contact']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emergency Contact Email'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['emergency_contact_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emergency Contact Phone'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['emergency_contact_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['relationship_to_tenant']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Co Signer Details'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['co_signer_details']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['notes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($tenant['Tenant']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

