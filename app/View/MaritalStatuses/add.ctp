<div class="maritalStatuses form">
<?php echo $this->Form->create('MaritalStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Marital Status'); ?></legend>
	<?php
		echo $this->Form->input('marital_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Marital Statuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
