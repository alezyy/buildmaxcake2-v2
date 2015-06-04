<div class="applicationsLeases form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Applications Lease'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('ApplicationsLease.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('ApplicationsLease.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Applications Leases'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ApplicationsLease', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tenant_id', array('class' => 'form-control', 'placeholder' => 'Tenant Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('property_id', array('class' => 'form-control', 'placeholder' => 'Property Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unit_id', array('class' => 'form-control', 'placeholder' => 'Unit Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('leasestype_id', array('class' => 'form-control', 'placeholder' => 'Leasestype Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('start_date', array('class' => 'form-control', 'placeholder' => 'Start Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('end_date', array('class' => 'form-control', 'placeholder' => 'End Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('automatically_end_the_lease', array('class' => 'form-control', 'placeholder' => 'Automatically End The Lease'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('recurringcharge_id', array('class' => 'form-control', 'placeholder' => 'Recurringcharge Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('next_due_date', array('class' => 'form-control', 'placeholder' => 'Next Due Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rent_mount', array('class' => 'form-control', 'placeholder' => 'Rent Mount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('security_deposit', array('class' => 'form-control', 'placeholder' => 'Security Deposit'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('security_deposit_date', array('class' => 'form-control', 'placeholder' => 'Security Deposit Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status_id', array('class' => 'form-control', 'placeholder' => 'Status Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('agreement', array('class' => 'form-control', 'placeholder' => 'Agreement'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
