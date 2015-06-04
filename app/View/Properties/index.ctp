<div class="properties index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Properties'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Property'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th class="actions"></th>
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
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $property['Property']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $property['Property']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $property['Property']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
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