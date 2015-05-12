<div class="accountings view">
<h2><?php echo __('Accounting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenant Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['tenant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['payment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounting'), array('action' => 'edit', $accounting['Accounting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accounting'), array('action' => 'delete', $accounting['Accounting']['id']), array(), __('Are you sure you want to delete # %s?', $accounting['Accounting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
