<div class="recurringcharges form">
<?php echo $this->Form->create('Recurringcharge'); ?>
	<fieldset>
		<legend><?php echo __('Add Recurringcharge'); ?></legend>
	<?php
		echo $this->Form->input('frequency');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recurringcharges'), array('action' => 'index')); ?></li>
	</ul>
</div>
