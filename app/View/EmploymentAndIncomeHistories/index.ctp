<div class="employmentAndIncomeHistories index">
	<h2><?php echo __('Employment And Income Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tenant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('employer_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('employed_from'); ?></th>
			<th><?php echo $this->Paginator->sort('employed_till'); ?></th>
			<th><?php echo $this->Paginator->sort('monthly_gross_pay'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_income_2nd_job'); ?></th>
			<th><?php echo $this->Paginator->sort('assets'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employmentAndIncomeHistories as $employmentAndIncomeHistory): ?>
	<tr>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['tenant_id']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employer_name']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['city']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employer_phone']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employed_from']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['employed_till']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['monthly_gross_pay']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['additional_income_2nd_job']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['assets']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['notes']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['created']); ?>&nbsp;</td>
		<td><?php echo h($employmentAndIncomeHistory['EmploymentAndIncomeHistory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id']), array(), __('Are you sure you want to delete # %s?', $employmentAndIncomeHistory['EmploymentAndIncomeHistory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employment And Income History'), array('action' => 'add')); ?></li>
	</ul>
</div>
