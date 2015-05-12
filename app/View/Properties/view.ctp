<div class="properties view">
<h2><?php echo __('Property'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Name'); ?></dt>
		<dd>
			<?php echo h($property['Property']['property_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Units'); ?></dt>
		<dd>
			<?php echo h($property['Property']['number_of_units']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propertiestype Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['propertiestype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propertiestypes Specification Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['propertiestypes_specification_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rental Owner Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['rental_owner_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operating Account Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['operating_account_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Reserve'); ?></dt>
		<dd>
			<?php echo h($property['Property']['property_reserve']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rental Amount'); ?></dt>
		<dd>
			<?php echo h($property['Property']['rental_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit Amount'); ?></dt>
		<dd>
			<?php echo h($property['Property']['deposit_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lease Term'); ?></dt>
		<dd>
			<?php echo h($property['Property']['lease_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($property['Property']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($property['Property']['City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($property['Property']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($property['Property']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($property['Property']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($property['Property']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($property['Property']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['id']), array(), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?> </li>
	</ul>
</div>
