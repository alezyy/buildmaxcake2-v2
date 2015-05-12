<div class="references form">
<?php echo $this->Form->create('Reference'); ?>
	<fieldset>
		<legend><?php echo __('Add Reference'); ?></legend>
	<?php
		echo $this->Form->input('tenant_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('id_government');
		echo $this->Form->input('phone');
		echo $this->Form->input('phone2');
		echo $this->Form->input('email');
		echo $this->Form->input('fax');
		echo $this->Form->input('relationship_to_tenant');
		echo $this->Form->input('street');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city');
		echo $this->Form->input('photo');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List References'), array('action' => 'index')); ?></li>
	</ul>
</div>
