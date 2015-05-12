<div class="propertiestypesSpecifications form">
<?php echo $this->Form->create('PropertiestypesSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Propertiestypes Specification'); ?></legend>
	<?php
		echo $this->Form->input('propertiestype_id');
		echo $this->Form->input('propertiestypes_specification');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Propertiestypes Specifications'), array('action' => 'index')); ?></li>
	</ul>
</div>
