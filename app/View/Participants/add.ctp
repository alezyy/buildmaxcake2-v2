<div class="participants form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Participant'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Competitions'), array('controller' => 'competitions', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Competition'), array('controller' => 'competitions', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Participant', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('competition_id', array('class' => 'form-control', 'placeholder' => 'Competition Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('firstname', array('class' => 'form-control', 'placeholder' => 'Firstname'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lastname', array('class' => 'form-control', 'placeholder' => 'Lastname'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('newsletter', array('class' => 'form-control', 'placeholder' => 'Newsletter'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('winner', array('class' => 'form-control', 'placeholder' => 'Winner'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unikkey', array('class' => 'form-control', 'placeholder' => 'Unikkey'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
