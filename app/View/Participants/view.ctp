<div class="participants view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Participant'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Participant'), array('action' => 'edit', $participant['Participant']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Participant'), array('action' => 'delete', $participant['Participant']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $participant['Participant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participants'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Competitions'), array('controller' => 'competitions', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Competition'), array('controller' => 'competitions', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($participant['Participant']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Competition'); ?></th>
		<td>
			<?php echo $this->Html->link($participant['Competition']['title'], array('controller' => 'competitions', 'action' => 'view', $participant['Competition']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Firstname'); ?></th>
		<td>
			<?php echo h($participant['Participant']['firstname']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lastname'); ?></th>
		<td>
			<?php echo h($participant['Participant']['lastname']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($participant['Participant']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Newsletter'); ?></th>
		<td>
			<?php echo h($participant['Participant']['newsletter']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Winner'); ?></th>
		<td>
			<?php echo h($participant['Participant']['winner']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unikkey'); ?></th>
		<td>
			<?php echo h($participant['Participant']['unikkey']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

