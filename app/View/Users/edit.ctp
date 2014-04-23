<div class= "users form">
<div class ="row">
<div class="col-lg-6 col-lg-offset-3">
        <h2>Edit User Profile</h2><br /> <br />
		
        <div class="well">            
            <?php echo $this->Form->create('User',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
			
            <div class="form-group">
				<legend><?php echo __('Please fill out all the registration form fields'); ?></legend>
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('name',array('class'=>'form-control'));?>
				</div>
            </div>
            <div class="form-group">
                <label for="inputemal" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('email',array('class'=>'form-control'));?>
                </div>
            </div>
			<div class="form-group">
                <label for="inputusername" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('username',array('class'=>'form-control'));?>
                </div>
            </div>
			
			<div class="form-group">
                <label for="inputpassword" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('password',array('class'=>'form-control'));?>
                </div>
            </div>
			<div class="form-group">
                <label for="inputrole" class="col-sm-2 control-label">Role</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('role', array( 'options' => array('admin' => 'Admin', 'author' => 'Author')));?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
					<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary'))?>
                </div>
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>

</div>
</div>


