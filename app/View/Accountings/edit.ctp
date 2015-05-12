<div class="accountings form">
<?php echo $this->Form->create('Accounting'); ?>
	<fieldset>
		<legend><?php echo __('Edit Accounting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tenant_id');
		echo $this->Form->input('payment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Accounting.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Accounting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('action' => 'index')); ?></li>
	</ul>
</div>
