<div class="applicants view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Applicant'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Applicant'), array('action' => 'edit', $applicant['Applicant']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Applicant'), array('action' => 'delete', $applicant['Applicant']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $applicant['Applicant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Applicants'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Applicant'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Genders'), array('controller' => 'genders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Gender'), array('controller' => 'genders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Marital Statuses'), array('controller' => 'marital_statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Marital Status'), array('controller' => 'marital_statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Countries'), array('controller' => 'countries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Country'), array('controller' => 'countries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Statuses'), array('controller' => 'statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Status'), array('controller' => 'statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($applicant['Applicant']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Gender'); ?></th>
		<td>
			<?php echo $this->Html->link($applicant['Gender']['id'], array('controller' => 'genders', 'action' => 'view', $applicant['Gender']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marital Status'); ?></th>
		<td>
			<?php echo $this->Html->link($applicant['MaritalStatus']['id'], array('controller' => 'marital_statuses', 'action' => 'view', $applicant['MaritalStatus']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alternate Emails'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['alternate emails']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cell Phone'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['cell_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Home Phone'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['home_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Work Phone'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['work_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Country'); ?></th>
		<td>
			<?php echo $this->Html->link($applicant['Country']['name'], array('controller' => 'countries', 'action' => 'view', $applicant['Country']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo $this->Html->link($applicant['State']['country_id'], array('controller' => 'states', 'action' => 'view', $applicant['State']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Street'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['City']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['zip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Birth Date'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['birth_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Driver License Number'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['driver_license_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Driver License State'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['driver_license_state']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Number Of Occupants'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['total_number_of_occupants']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unit Or Address Applying For'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['unit_or_address_applying_for']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Requested Lease Term'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['requested_lease_term']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo $this->Html->link($applicant['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $applicant['Status']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emergency Contact'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['emergency_contact']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emergency Contact Email'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['emergency_contact_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emergency Contact Phone'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['emergency_contact_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['relationship_to_tenant']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Co Signer Details'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['co_signer_details']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['notes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($applicant['Applicant']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

