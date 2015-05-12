<div class="cities index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cities'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">

			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo(__('Search'))?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php  ?></li>

									<li><?php ?></li>


													</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->


			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New City'), array('action' => 'add'), array('escape' => false)); ?></li>
																			</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->

			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo(__('Actions : Export to CSV'))?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Quick Export to CSV'), array('action' => 'quick_export'), array('escape' => false)); ?></li>

									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Adv Quick Export to CSV'), array('action' => 'advanced_quick_export'), array('escape' => false)); ?></li>

									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Adv Full Export to CSV'), array('action' => 'not_quick_export'), array('escape' => false)); ?></li>

													</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->

			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo(__('Actions : Import to CSV'))?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Quick Export to CSV'), array('action' => 'quick_export'), array('escape' => false)); ?></li>

									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Adv Quick Export to CSV'), array('action' => 'advanced_quick_export'), array('escape' => false)); ?></li>

									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Adv Full Export to CSV'), array('action' => 'not_quick_export'), array('escape' => false)); ?></li>

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
						<th><?php echo $this->Paginator->sort('country_id'); ?></th>
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('city'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($cities as $city): ?>
					<tr>
						<td><?php echo h($city['City']['id']); ?>&nbsp;</td>
						<td><?php echo h($city['City']['country_id']); ?>&nbsp;</td>
						<td><?php echo h($city['City']['state_id']); ?>&nbsp;</td>
						<td><?php echo h($city['City']['city']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $city['City']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $city['City']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $city['City']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $city['City']['id'])); ?>
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
