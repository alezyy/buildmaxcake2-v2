<div class="contacts view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Contact'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Contact'), array('action' => 'edit', $contact['Contact']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contacts'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contact'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contacttypes'), array('controller' => 'contacttypes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contacttype'), array('controller' => 'contacttypes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contactaddresses'), array('controller' => 'contactaddresses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contactaddress'), array('controller' => 'contactaddresses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Contactsubdetails'), array('controller' => 'contactsubdetails', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Contactsubdetail'), array('controller' => 'contactsubdetails', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact No'); ?></th>
		<td>
			<?php echo h($contact['Contact']['contact_no']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Salutation'); ?></th>
		<td>
			<?php echo h($contact['Contact']['salutation']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($contact['Contact']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($contact['Contact']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($contact['Contact']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($contact['Contact']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mobile'); ?></th>
		<td>
			<?php echo h($contact['Contact']['mobile']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($contact['Contact']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Department'); ?></th>
		<td>
			<?php echo h($contact['Contact']['department']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($contact['Contact']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contacttype'); ?></th>
		<td>
			<?php echo $this->Html->link($contact['Contacttype']['id'], array('controller' => 'contacttypes', 'action' => 'view', $contact['Contacttype']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Otheremail'); ?></th>
		<td>
			<?php echo h($contact['Contact']['otheremail']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Secondaryemail'); ?></th>
		<td>
			<?php echo h($contact['Contact']['secondaryemail']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Donotcall'); ?></th>
		<td>
			<?php echo h($contact['Contact']['donotcall']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emailoptout'); ?></th>
		<td>
			<?php echo h($contact['Contact']['emailoptout']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Imagename'); ?></th>
		<td>
			<?php echo h($contact['Contact']['imagename']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Reference'); ?></th>
		<td>
			<?php echo h($contact['Contact']['reference']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Contactaddresses'); ?></h3>
	<?php if (!empty($contact['Contactaddress'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Mailing City'); ?></th>
		<th><?php echo __('Mailing Street'); ?></th>
		<th><?php echo __('Mailing Country'); ?></th>
		<th><?php echo __('Other Country'); ?></th>
		<th><?php echo __('Mailing State'); ?></th>
		<th><?php echo __('Mailing Pobox'); ?></th>
		<th><?php echo __('Other City'); ?></th>
		<th><?php echo __('Others Tate'); ?></th>
		<th><?php echo __('Mailing Zip'); ?></th>
		<th><?php echo __('Other Zip'); ?></th>
		<th><?php echo __('Other Street'); ?></th>
		<th><?php echo __('Other Pobox'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($contact['Contactaddress'] as $contactaddress): ?>
		<tr>
			<td><?php echo $contactaddress['id']; ?></td>
			<td><?php echo $contactaddress['contact_id']; ?></td>
			<td><?php echo $contactaddress['mailing_city']; ?></td>
			<td><?php echo $contactaddress['mailing_street']; ?></td>
			<td><?php echo $contactaddress['mailing_country']; ?></td>
			<td><?php echo $contactaddress['other_country']; ?></td>
			<td><?php echo $contactaddress['mailing_state']; ?></td>
			<td><?php echo $contactaddress['mailing_pobox']; ?></td>
			<td><?php echo $contactaddress['other_city']; ?></td>
			<td><?php echo $contactaddress['others_tate']; ?></td>
			<td><?php echo $contactaddress['mailing_zip']; ?></td>
			<td><?php echo $contactaddress['other_zip']; ?></td>
			<td><?php echo $contactaddress['other_street']; ?></td>
			<td><?php echo $contactaddress['other_pobox']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'contactaddresses', 'action' => 'view', $contactaddress['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'contactaddresses', 'action' => 'edit', $contactaddress['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'contactaddresses', 'action' => 'delete', $contactaddress['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contactaddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactaddress'), array('controller' => 'contactaddresses', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Contactsubdetails'); ?></h3>
	<?php if (!empty($contact['Contactsubdetail'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Other Phone'); ?></th>
		<th><?php echo __('Assistant'); ?></th>
		<th><?php echo __('Assistant Phone'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Laststayintouchrequest'); ?></th>
		<th><?php echo __('Laststayintouchsavedate'); ?></th>
		<th><?php echo __('Lead Source'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($contact['Contactsubdetail'] as $contactsubdetail): ?>
		<tr>
			<td><?php echo $contactsubdetail['id']; ?></td>
			<td><?php echo $contactsubdetail['contact_id']; ?></td>
			<td><?php echo $contactsubdetail['home_phone']; ?></td>
			<td><?php echo $contactsubdetail['other_phone']; ?></td>
			<td><?php echo $contactsubdetail['assistant']; ?></td>
			<td><?php echo $contactsubdetail['assistant_phone']; ?></td>
			<td><?php echo $contactsubdetail['birthday']; ?></td>
			<td><?php echo $contactsubdetail['laststayintouchrequest']; ?></td>
			<td><?php echo $contactsubdetail['laststayintouchsavedate']; ?></td>
			<td><?php echo $contactsubdetail['lead_source']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'contactsubdetails', 'action' => 'view', $contactsubdetail['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'contactsubdetails', 'action' => 'edit', $contactsubdetail['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'contactsubdetails', 'action' => 'delete', $contactsubdetail['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $contactsubdetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contactsubdetail'), array('controller' => 'contactsubdetails', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
