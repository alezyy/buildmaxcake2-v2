<div class="contactsubdetails form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Contactsubdetail'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Contactsubdetail.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Contactsubdetail.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contactsubdetails'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contacts'), array('controller' => 'contacts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contact'), array('controller' => 'contacts', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Contactsubdetail', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('contact_id', array('class' => 'form-control', 'placeholder' => 'Contact Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('home_phone', array('class' => 'form-control', 'placeholder' => 'Home Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_phone', array('class' => 'form-control', 'placeholder' => 'Other Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('assistant', array('class' => 'form-control', 'placeholder' => 'Assistant'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('assistant_phone', array('class' => 'form-control', 'placeholder' => 'Assistant Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('birthday', array('class' => 'form-control', 'placeholder' => 'Birthday'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('laststayintouchrequest', array('class' => 'form-control', 'placeholder' => 'Laststayintouchrequest'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('laststayintouchsavedate', array('class' => 'form-control', 'placeholder' => 'Laststayintouchsavedate'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lead_source', array('class' => 'form-control', 'placeholder' => 'Lead Source'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
