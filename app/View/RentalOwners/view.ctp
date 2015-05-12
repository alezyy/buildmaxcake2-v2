<div class="rentalOwners view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Rental Owner'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Rental Owner'), array('action' => 'edit', $rentalOwner['RentalOwner']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Rental Owner'), array('action' => 'delete', $rentalOwner['RentalOwner']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $rentalOwner['RentalOwner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Rental Owners'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Rental Owner'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($rentalOwner['RentalOwner']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Gender Id'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['gender_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Government'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['id_government']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Company Name'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['company_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date Of Birth'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['date_of_birth']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Primary Email'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['primary_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alternate Email'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['alternate_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Street'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['street']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Country Id'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['country_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State Id'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['state_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['zip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comments'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['comments']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['photo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($rentalOwner['RentalOwner']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

