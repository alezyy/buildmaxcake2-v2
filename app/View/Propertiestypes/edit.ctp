<div class="propertiestypes form">
<?php echo $this->Form->create('Propertiestype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Propertiestype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Propertiestype.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Propertiestype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Propertiestypes'), array('action' => 'index')); ?></li>
	</ul>
</div>
