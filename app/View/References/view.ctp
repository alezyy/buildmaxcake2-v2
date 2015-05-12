<div class="references view">
<h2><?php echo __('Reference'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenant Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['tenant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['gender_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Government'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['id_government']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship To Tenant'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['relationship_to_tenant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reference'), array('action' => 'edit', $reference['Reference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reference'), array('action' => 'delete', $reference['Reference']['id']), array(), __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('action' => 'add')); ?> </li>
	</ul>
</div>
