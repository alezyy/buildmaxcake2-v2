<div class="maritalStatuses form">
<?php echo $this->Form->create('MaritalStatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Marital Status'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('marital_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MaritalStatus.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MaritalStatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Marital Statuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
