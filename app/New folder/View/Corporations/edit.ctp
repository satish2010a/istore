<div class="corporations form">
<?php echo $this->Form->create('Corporation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Corporation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('registration_number');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email_id');
		echo $this->Form->input('zip');
		echo $this->Form->input('quick_book_path');
		echo $this->Form->input('tax _code');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Corporation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Corporation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('action' => 'index')); ?></li>
	</ul>
</div>
