<?php
  $this->Js->get('#RentalOwnerCountryId')->event('change', 
    $this->Js->request(array(
        'controller'=>'states',
        'action'=>'getByState_rentalowner'
        ), array(
        'update'=>'#RentalOwnerStateId',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
            'isForm' => true,
            'inline' => true
            ))
        ))
    );

?>

<div class="rentalOwners form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Rental Owner'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('RentalOwner.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('RentalOwner.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Rental Owners'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('RentalOwner', array('role' => 'form')); ?>

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
					<?php echo $this->Form->input('id_government', array('class' => 'form-control', 'placeholder' => 'Id Government'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_name', array('class' => 'form-control', 'placeholder' => 'Company Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('date_of_birth', array('class' => 'form-control', 'placeholder' => 'Date Of Birth'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('primary_email', array('class' => 'form-control', 'placeholder' => 'Primary Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('alternate_email', array('class' => 'form-control', 'placeholder' => 'Alternate Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('street', array('class' => 'form-control', 'placeholder' => 'Street'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('country_id', array('class' => 'form-control', 'placeholder' => 'Country Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state_id', array('class' => 'form-control', 'placeholder' => 'State Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('zip', array('class' => 'form-control', 'placeholder' => 'Zip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comments', array('class' => 'form-control', 'placeholder' => 'Comments'));?>
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
