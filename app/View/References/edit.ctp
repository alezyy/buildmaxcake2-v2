<div class="references form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Reference'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Reference.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Reference.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List References'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Tenants'), array('controller' => 'tenants', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tenant'), array('controller' => 'tenants', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Genders'), array('controller' => 'genders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Gender'), array('controller' => 'genders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Countries'), array('controller' => 'countries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Country'), array('controller' => 'countries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Reference', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tenant_id', array('class' => 'form-control', 'placeholder' => 'Tenant Id'));?>
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
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone2', array('class' => 'form-control', 'placeholder' => 'Phone2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('relationship_to_tenant', array('class' => 'form-control', 'placeholder' => 'Relationship To Tenant'));?>
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
					<?php echo $this->Form->input('photo', array('class' => 'form-control', 'placeholder' => 'Photo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
