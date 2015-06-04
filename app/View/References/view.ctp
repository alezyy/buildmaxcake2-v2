<div class="references view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Reference'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Reference'), array('action' => 'edit', $reference['Reference']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Reference'), array('action' => 'delete', $reference['Reference']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List References'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Reference'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tenants'), array('controller' => 'tenants', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tenant'), array('controller' => 'tenants', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Genders'), array('controller' => 'genders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Gender'), array('controller' => 'genders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Countries'), array('controller' => 'countries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Country'), array('controller' => 'countries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($reference['Reference']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tenant'); ?></th>
		<td>
			<?php echo $this->Html->link($reference['Tenant']['gender_id'], array('controller' => 'tenants', 'action' => 'view', $reference['Tenant']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($reference['Reference']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($reference['Reference']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Gender'); ?></th>
		<td>
			<?php echo $this->Html->link($reference['Gender']['id'], array('controller' => 'genders', 'action' => 'view', $reference['Gender']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Government'); ?></th>
		<td>
			<?php echo h($reference['Reference']['id_government']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($reference['Reference']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone2'); ?></th>
		<td>
			<?php echo h($reference['Reference']['phone2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($reference['Reference']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($reference['Reference']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<td>
			<?php echo h($reference['Reference']['relationship_to_tenant']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Street'); ?></th>
		<td>
			<?php echo h($reference['Reference']['street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Country'); ?></th>
		<td>
			<?php echo $this->Html->link($reference['Country']['name'], array('controller' => 'countries', 'action' => 'view', $reference['Country']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo $this->Html->link($reference['State']['country_id'], array('controller' => 'states', 'action' => 'view', $reference['State']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($reference['Reference']['city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($reference['Reference']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($reference['Reference']['notes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($reference['Reference']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($reference['Reference']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

