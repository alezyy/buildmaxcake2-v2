<div class="properties view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Property'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Property'), array('action' => 'edit', $property['Property']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Property'), array('action' => 'delete', $property['Property']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Properties'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Property'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Property Name'); ?></th>
		<td>
			<?php echo h($property['Property']['property_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Number Of Units'); ?></th>
		<td>
			<?php echo h($property['Property']['number_of_units']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Propertiestype Id'); ?></th>
		<td>
			<?php echo h($property['Property']['propertiestype_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Propertiestypes Specification Id'); ?></th>
		<td>
			<?php echo h($property['Property']['propertiestypes_specification_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rental Owner Id'); ?></th>
		<td>
			<?php echo h($property['Property']['rental_owner_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Operating Account Id'); ?></th>
		<td>
			<?php echo h($property['Property']['operating_account_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Property Reserve'); ?></th>
		<td>
			<?php echo h($property['Property']['property_reserve']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rental Amount'); ?></th>
		<td>
			<?php echo h($property['Property']['rental_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deposit Amount'); ?></th>
		<td>
			<?php echo h($property['Property']['deposit_amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lease Term'); ?></th>
		<td>
			<?php echo h($property['Property']['lease_term']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Country Id'); ?></th>
		<td>
			<?php echo h($property['Property']['country_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State Id'); ?></th>
		<td>
			<?php echo h($property['Property']['state_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Street'); ?></th>
		<td>
			<?php echo h($property['Property']['street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($property['Property']['City']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip'); ?></th>
		<td>
			<?php echo h($property['Property']['zip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($property['Property']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($property['Property']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($property['Property']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($property['Property']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

