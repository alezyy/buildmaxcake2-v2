<div class="operatingAccounts form">
<?php echo $this->Form->create('OperatingAccount'); ?>
	<fieldset>
		<legend><?php echo __('Add Operating Account'); ?></legend>
	<?php
		echo $this->Form->input('account_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Operating Accounts'), array('action' => 'index')); ?></li>
	</ul>
</div>
