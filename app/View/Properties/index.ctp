<div class="properties index">
	<h2><?php echo __('Properties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_name'); ?></th>
			<th><?php echo $this->Paginator->sort('number_of_units'); ?></th>
			<th><?php echo $this->Paginator->sort('propertiestype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('propertiestypes_specification_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rental_owner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('operating_account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_reserve'); ?></th>
			<th><?php echo $this->Paginator->sort('rental_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('deposit_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('lease_term'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('City'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($properties as $property): ?>
	<tr>
		<td><?php echo h($property['Property']['id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['property_name']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['number_of_units']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['propertiestype_id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['propertiestypes_specification_id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['rental_owner_id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['operating_account_id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['property_reserve']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['rental_amount']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['deposit_amount']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['lease_term']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['state_id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['street']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['City']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['zip']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['description']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['photo']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['created']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $property['Property']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $property['Property']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $property['Property']['id']), array(), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?></li>
	</ul>
</div>
