<div class="references index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('References'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Reference'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Tenants'), array('controller' => 'tenants', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tenant'), array('controller' => 'tenants', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Genders'), array('controller' => 'genders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Gender'), array('controller' => 'genders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Countries'), array('controller' => 'countries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Country'), array('controller' => 'countries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
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
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($references as $reference): ?>
					<tr>
						<td><?php echo h($reference['Reference']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($reference['Tenant']['gender_id'], array('controller' => 'tenants', 'action' => 'view', $reference['Tenant']['id'])); ?>
		</td>
						<td><?php echo h($reference['Reference']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['last_name']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($reference['Gender']['id'], array('controller' => 'genders', 'action' => 'view', $reference['Gender']['id'])); ?>
		</td>
						<td><?php echo h($reference['Reference']['id_government']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['phone']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['phone2']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['email']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['fax']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['relationship_to_tenant']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['street']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($reference['Country']['name'], array('controller' => 'countries', 'action' => 'view', $reference['Country']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($reference['State']['country_id'], array('controller' => 'states', 'action' => 'view', $reference['State']['id'])); ?>
		</td>
						<td><?php echo h($reference['Reference']['city']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['photo']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['notes']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['created']); ?>&nbsp;</td>
						<td><?php echo h($reference['Reference']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $reference['Reference']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $reference['Reference']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $reference['Reference']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->