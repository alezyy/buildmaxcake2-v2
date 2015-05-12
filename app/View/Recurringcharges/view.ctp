<div class="recurringcharges view">
<h2><?php echo __('Recurringcharge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recurringcharge['Recurringcharge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo h($recurringcharge['Recurringcharge']['frequency']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurringcharge'), array('action' => 'edit', $recurringcharge['Recurringcharge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurringcharge'), array('action' => 'delete', $recurringcharge['Recurringcharge']['id']), array(), __('Are you sure you want to delete # %s?', $recurringcharge['Recurringcharge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurringcharges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurringcharge'), array('action' => 'add')); ?> </li>
	</ul>
</div>
