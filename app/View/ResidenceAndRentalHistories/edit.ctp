<div class="residenceAndRentalHistories form">
<?php echo $this->Form->create('ResidenceAndRentalHistory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Residence And Rental History'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tenant_id');
		echo $this->Form->input('address');
		echo $this->Form->input('landlord_or_manager_name');
		echo $this->Form->input('landlord_or_manager_phone');
		echo $this->Form->input('monthly_rent');
		echo $this->Form->input('date_of_residency_from');
		echo $this->Form->input('date_of_residency_to');
		echo $this->Form->input('reason_for_leaving');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ResidenceAndRentalHistory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ResidenceAndRentalHistory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Residence And Rental Histories'), array('action' => 'index')); ?></li>
	</ul>
</div>
