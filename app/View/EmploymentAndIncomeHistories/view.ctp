<div class="employmentAndIncomeHistories view">
<h2><?php echo __('Employment And Income History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenant Id'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['tenant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employer Name'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employer Phone'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employer_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employed From'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employed_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employed Till'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employed_till']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monthly Gross Pay'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['monthly_gross_pay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Income 2nd Job'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['additional_income_2nd_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assets'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['assets']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employment And Income History'), array('action' => 'edit', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employment And Income History'), array('action' => 'delete', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id']), array(), __('Are you sure you want to delete # %s?', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment And Income Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment And Income History'), array('action' => 'add')); ?> </li>
	</ul>
</div>
