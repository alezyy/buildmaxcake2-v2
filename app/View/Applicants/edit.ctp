<div class="applicants form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Applicant'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Applicant.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Applicant.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Applicants'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Genders'), array('controller' => 'genders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Gender'), array('controller' => 'genders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Marital Statuses'), array('controller' => 'marital_statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Marital Status'), array('controller' => 'marital_statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Countries'), array('controller' => 'countries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Country'), array('controller' => 'countries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Statuses'), array('controller' => 'statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Status'), array('controller' => 'statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Applicant', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('gender_id', array('class' => 'form-control', 'placeholder' => 'Gender Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('marital_status_id', array('class' => 'form-control', 'placeholder' => 'Marital Status Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('alternate emails', array('class' => 'form-control', 'placeholder' => 'Alternate Emails'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cell_phone', array('class' => 'form-control', 'placeholder' => 'Cell Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('home_phone', array('class' => 'form-control', 'placeholder' => 'Home Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('work_phone', array('class' => 'form-control', 'placeholder' => 'Work Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('country_id', array('class' => 'form-control', 'placeholder' => 'Country Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state_id', array('class' => 'form-control', 'placeholder' => 'State Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('street', array('class' => 'form-control', 'placeholder' => 'Street'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('City', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('zip', array('class' => 'form-control', 'placeholder' => 'Zip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('birth_date', array('class' => 'form-control', 'placeholder' => 'Birth Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('driver_license_number', array('class' => 'form-control', 'placeholder' => 'Driver License Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('driver_license_state', array('class' => 'form-control', 'placeholder' => 'Driver License State'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_number_of_occupants', array('class' => 'form-control', 'placeholder' => 'Total Number Of Occupants'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unit_or_address_applying_for', array('class' => 'form-control', 'placeholder' => 'Unit Or Address Applying For'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('requested_lease_term', array('class' => 'form-control', 'placeholder' => 'Requested Lease Term'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status_id', array('class' => 'form-control', 'placeholder' => 'Status Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('emergency_contact', array('class' => 'form-control', 'placeholder' => 'Emergency Contact'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('emergency_contact_email', array('class' => 'form-control', 'placeholder' => 'Emergency Contact Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('emergency_contact_phone', array('class' => 'form-control', 'placeholder' => 'Emergency Contact Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('relationship_to_tenant', array('class' => 'form-control', 'placeholder' => 'Relationship To Tenant'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('co_signer_details', array('class' => 'form-control', 'placeholder' => 'Co Signer Details'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo', array('class' => 'form-control', 'placeholder' => 'Photo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
