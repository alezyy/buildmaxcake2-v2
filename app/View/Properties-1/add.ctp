<div class="properties form">
<?php echo $this->Form->create('Property'); ?>
	<fieldset>
		<legend><?php echo __('Add Property'); ?></legend>
	<?php
		echo $this->Form->input('property_name');
		echo $this->Form->input('number_of_units');
		echo $this->Form->input('propertiestype_id');
		echo $this->Form->input('propertiestypes_specification_id');
		echo $this->Form->input('rental_owner_id');
		echo $this->Form->input('operating_account_id');
		echo $this->Form->input('property_reserve');
		echo $this->Form->input('rental_amount');
		echo $this->Form->input('deposit_amount');
		echo $this->Form->input('lease_term');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('street');
		echo $this->Form->input('City');
		echo $this->Form->input('zip');
		echo $this->Form->input('description');
		echo $this->Form->input('photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
	</ul>
</div>
