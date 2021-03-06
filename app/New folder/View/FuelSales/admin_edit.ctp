<div class="fuelSales form">
<?php echo $this->Form->create('FuelSale'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Fuel Sale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_type');
		echo $this->Form->input('volume');
		echo $this->Form->input('retail');
		echo $this->Form->input('amount');
		echo $this->Form->input('adjustment');
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FuelSale.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FuelSale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Sales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
