<div class="recurringcharges form">
<?php echo $this->Form->create('Recurringcharge'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recurringcharge'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('frequency');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recurringcharge.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Recurringcharge.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recurringcharges'), array('action' => 'index')); ?></li>
	</ul>
</div>
