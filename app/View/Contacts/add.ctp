<div class="contacts form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Contact'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contacts'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contacttypes'), array('controller' => 'contacttypes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contacttype'), array('controller' => 'contacttypes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contactaddresses'), array('controller' => 'contactaddresses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactaddress'), array('controller' => 'contactaddresses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contactsubdetails'), array('controller' => 'contactsubdetails', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactsubdetail'), array('controller' => 'contactsubdetails', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Contact', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('contact_no', array('class' => 'form-control', 'placeholder' => 'Contact No'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('salutation', array('class' => 'form-control', 'placeholder' => 'Salutation'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mobile', array('class' => 'form-control', 'placeholder' => 'Mobile'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('department', array('class' => 'form-control', 'placeholder' => 'Department'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('contacttype_id', array('class' => 'form-control', 'placeholder' => 'Contacttype Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('otheremail', array('class' => 'form-control', 'placeholder' => 'Otheremail'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('secondaryemail', array('class' => 'form-control', 'placeholder' => 'Secondaryemail'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('donotcall', array('class' => 'form-control', 'placeholder' => 'Donotcall'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('emailoptout', array('class' => 'form-control', 'placeholder' => 'Emailoptout'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('imagename', array('class' => 'form-control', 'placeholder' => 'Imagename'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('reference', array('class' => 'form-control', 'placeholder' => 'Reference'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
