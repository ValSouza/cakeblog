<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

	<div class="actions">
	<h2>Actions</h2>
		<ul>
			<li> <?php echo $this->Html->link('View Members', array('action'=> 'index')); ?></li>
		</ul>
	</div>
</div>