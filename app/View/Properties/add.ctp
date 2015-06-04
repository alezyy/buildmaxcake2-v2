<div class="properties form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Property'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Properties'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Property', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('property_name', array('class' => 'form-control', 'placeholder' => 'Property Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('number_of_units', array('class' => 'form-control', 'placeholder' => 'Number Of Units'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('propertiestype_id', array('class' => 'form-control', 'placeholder' => 'Propertiestype Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('propertiestypes_specification_id', array('class' => 'form-control', 'placeholder' => 'Propertiestypes Specification Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rental_owner_id', array('class' => 'form-control', 'placeholder' => 'Rental Owner Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('operating_account_id', array('class' => 'form-control', 'placeholder' => 'Operating Account Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('property_reserve', array('class' => 'form-control', 'placeholder' => 'Property Reserve'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rental_amount', array('class' => 'form-control', 'placeholder' => 'Rental Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('deposit_amount', array('class' => 'form-control', 'placeholder' => 'Deposit Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lease_term', array('class' => 'form-control', 'placeholder' => 'Lease Term'));?>
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
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description'));?>
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
