<div class="references index">
	<h2><?php echo __('References'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tenant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_government'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('relationship_to_tenant'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($references as $reference): ?>
	<tr>
		<td><?php echo h($reference['Reference']['id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['tenant_id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['gender_id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['id_government']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['phone']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['phone2']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['email']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['fax']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['relationship_to_tenant']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['street']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['state_id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['city']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['photo']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['notes']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['created']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reference['Reference']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reference['Reference']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reference['Reference']['id']), array(), __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reference'), array('action' => 'add')); ?></li>
	</ul>
</div>
