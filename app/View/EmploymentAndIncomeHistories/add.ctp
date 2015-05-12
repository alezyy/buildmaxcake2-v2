<div class="employmentAndIncomeHistories form">
<?php echo $this->Form->create('EmploymentAndIncomeHistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Employment And Income History'); ?></legend>
	<?php
		echo $this->Form->input('tenant_id');
		echo $this->Form->input('employer_name');
		echo $this->Form->input('city');
		echo $this->Form->input('employer_phone');
		echo $this->Form->input('employed_from');
		echo $this->Form->input('employed_till');
		echo $this->Form->input('monthly_gross_pay');
		echo $this->Form->input('occupation');
		echo $this->Form->input('additional_income_2nd_job');
		echo $this->Form->input('assets');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employment And Income Histories'), array('action' => 'index')); ?></li>
	</ul>
</div>
