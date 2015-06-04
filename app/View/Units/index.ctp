<div class="units index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Units'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Unit'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Properties'), array('controller' => 'properties', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Property'), array('controller' => 'properties', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Rental Owners'), array('controller' => 'rental_owners', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Rental Owner'), array('controller' => 'rental_owners', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Sizes'), array('controller' => 'sizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Size'), array('controller' => 'sizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Leasestypes'), array('controller' => 'leasestypes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Leasestype'), array('controller' => 'leasestypes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Statuses'), array('controller' => 'statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Status'), array('controller' => 'statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('property_id'); ?></th>
						<th><?php echo $this->Paginator->sort('rental_owner_id'); ?></th>
						<th><?php echo $this->Paginator->sort('unit_number'); ?></th>
						<th><?php echo $this->Paginator->sort('size_id'); ?></th>
						<th><?php echo $this->Paginator->sort('market_rent'); ?></th>
						<th><?php echo $this->Paginator->sort('bedrooms'); ?></th>
						<th><?php echo $this->Paginator->sort('bath'); ?></th>
						<th><?php echo $this->Paginator->sort('lease_term'); ?></th>
						<th><?php echo $this->Paginator->sort('leasestype_id'); ?></th>
						<th><?php echo $this->Paginator->sort('rental_amount'); ?></th>
						<th><?php echo $this->Paginator->sort('deposit_amount'); ?></th>
						<th><?php echo $this->Paginator->sort('description'); ?></th>
						<th><?php echo $this->Paginator->sort('features'); ?></th>
						<th><?php echo $this->Paginator->sort('photo'); ?></th>
						<th><?php echo $this->Paginator->sort('status_id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($units as $unit): ?>
					<tr>
						<td><?php echo h($unit['Unit']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($unit['Property']['propertiestype_id'], array('controller' => 'properties', 'action' => 'view', $unit['Property']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($unit['RentalOwner']['gender_id'], array('controller' => 'rental_owners', 'action' => 'view', $unit['RentalOwner']['id'])); ?>
		</td>
						<td><?php echo h($unit['Unit']['unit_number']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($unit['Size']['id'], array('controller' => 'sizes', 'action' => 'view', $unit['Size']['id'])); ?>
		</td>
						<td><?php echo h($unit['Unit']['market_rent']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['bedrooms']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['bath']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['lease_term']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($unit['Leasestype']['id'], array('controller' => 'leasestypes', 'action' => 'view', $unit['Leasestype']['id'])); ?>
		</td>
						<td><?php echo h($unit['Unit']['rental_amount']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['deposit_amount']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['description']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['features']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['photo']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($unit['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $unit['Status']['id'])); ?>
		</td>
						<td><?php echo h($unit['Unit']['created']); ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $unit['Unit']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $unit['Unit']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $unit['Unit']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?>
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