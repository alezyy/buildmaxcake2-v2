<div class="operatingAccounts form">
<?php echo $this->Form->create('OperatingAccount'); ?>
	<fieldset>
		<legend><?php echo __('Edit Operating Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OperatingAccount.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OperatingAccount.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operating Accounts'), array('action' => 'index')); ?></li>
	</ul>
</div>
