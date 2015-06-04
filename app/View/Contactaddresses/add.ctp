<div class="contactaddresses form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Contactaddress'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contactaddresses'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contacts'), array('controller' => 'contacts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contact'), array('controller' => 'contacts', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Contactaddress', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('contact_id', array('class' => 'form-control', 'placeholder' => 'Contact Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mailing_city', array('class' => 'form-control', 'placeholder' => 'Mailing City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mailing_street', array('class' => 'form-control', 'placeholder' => 'Mailing Street'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mailing_country', array('class' => 'form-control', 'placeholder' => 'Mailing Country'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_country', array('class' => 'form-control', 'placeholder' => 'Other Country'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mailing_state', array('class' => 'form-control', 'placeholder' => 'Mailing State'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mailing_pobox', array('class' => 'form-control', 'placeholder' => 'Mailing Pobox'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_city', array('class' => 'form-control', 'placeholder' => 'Other City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('others_tate', array('class' => 'form-control', 'placeholder' => 'Others Tate'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mailing_zip', array('class' => 'form-control', 'placeholder' => 'Mailing Zip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_zip', array('class' => 'form-control', 'placeholder' => 'Other Zip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_street', array('class' => 'form-control', 'placeholder' => 'Other Street'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_pobox', array('class' => 'form-control', 'placeholder' => 'Other Pobox'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
