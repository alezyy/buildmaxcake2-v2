<div class="contactaddresses view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contactaddress'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Contactaddress'), array('action' => 'edit', $contactaddress['Contactaddress']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Contactaddress'), array('action' => 'delete', $contactaddress['Contactaddress']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contactaddress['Contactaddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contactaddresses'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contactaddress'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contacts'), array('controller' => 'contacts', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contact'), array('controller' => 'contacts', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($contactaddress['Contactaddress']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact'); ?></th>
		<td>
			<?php echo $this->Html->link($contactaddress['Contact']['title'], array('controller' => 'contacts', 'action' => 'view', $contactaddress['Contact']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mailing City'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['mailing_city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mailing Street'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['mailing_street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mailing Country'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['mailing_country']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Country'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['other_country']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mailing State'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['mailing_state']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mailing Pobox'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['mailing_pobox']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other City'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['other_city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Others Tate'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['others_tate']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mailing Zip'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['mailing_zip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Zip'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['other_zip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Street'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['other_street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Pobox'); ?></th>
		<td>
			<?php echo h($contactaddress['Contactaddress']['other_pobox']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

