<div class="residenceAndRentalHistories index">
	<h2><?php echo __('Residence And Rental Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tenant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('landlord_or_manager_name'); ?></th>
			<th><?php echo $this->Paginator->sort('landlord_or_manager_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('monthly_rent'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_residency_from'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_residency_to'); ?></th>
			<th><?php echo $this->Paginator->sort('reason_for_leaving'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($residenceAndRentalHistories as $residenceAndRentalHistory): ?>
	<tr>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['id']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['tenant_id']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['address']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['landlord_or_manager_name']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['landlord_or_manager_phone']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['monthly_rent']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['date_of_residency_from']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['date_of_residency_to']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['reason_for_leaving']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['notes']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['created']); ?>&nbsp;</td>
		<td><?php echo h($residenceAndRentalHistory['ResidenceAndRentalHistory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id']), array(), __('Are you sure you want to delete # %s?', $residenceAndRentalHistory['ResidenceAndRentalHistory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Residence And Rental History'), array('action' => 'add')); ?></li>
	</ul>
</div>
