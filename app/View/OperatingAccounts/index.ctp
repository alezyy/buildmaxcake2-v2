<div class="operatingAccounts index">
	<h2><?php echo __('Operating Accounts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($operatingAccounts as $operatingAccount): ?>
	<tr>
		<td><?php echo h($operatingAccount['OperatingAccount']['id']); ?>&nbsp;</td>
		<td><?php echo h($operatingAccount['OperatingAccount']['account_name']); ?>&nbsp;</td>
		<td><?php echo h($operatingAccount['OperatingAccount']['created']); ?>&nbsp;</td>
		<td><?php echo h($operatingAccount['OperatingAccount']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $operatingAccount['OperatingAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operatingAccount['OperatingAccount']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operatingAccount['OperatingAccount']['id']), array(), __('Are you sure you want to delete # %s?', $operatingAccount['OperatingAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operating Account'), array('action' => 'add')); ?></li>
	</ul>
</div>
