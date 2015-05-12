<div class="units form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Unit'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Unit.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Unit.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Units'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Unit', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('property_id', array('class' => 'form-control', 'placeholder' => 'Property Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rental_owner_id', array('class' => 'form-control', 'placeholder' => 'Rental Owner Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unit_number', array('class' => 'form-control', 'placeholder' => 'Unit Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('size_id', array('class' => 'form-control', 'placeholder' => 'Size Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('market_rent', array('class' => 'form-control', 'placeholder' => 'Market Rent'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bedrooms', array('class' => 'form-control', 'placeholder' => 'Bedrooms'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bath', array('class' => 'form-control', 'placeholder' => 'Bath'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lease_term', array('class' => 'form-control', 'placeholder' => 'Lease Term'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('leasestype_id', array('class' => 'form-control', 'placeholder' => 'Leasestype Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rental_amount', array('class' => 'form-control', 'placeholder' => 'Rental Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('deposit_amount', array('class' => 'form-control', 'placeholder' => 'Deposit Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('features', array('class' => 'form-control', 'placeholder' => 'Features'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo', array('class' => 'form-control', 'placeholder' => 'Photo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status_id', array('class' => 'form-control', 'placeholder' => 'Status Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
