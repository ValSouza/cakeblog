<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Static Navbar</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!--<style type="text/css">
    .bs-example{
    	margin: -35px;
    }
</style>-->
</head> 
<body>
<div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <!-- <a href="#" class="navbar-brand">Brand</a> -->
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
			
                <li><?php echo $this->Html->link('Home', array('controller'=>'posts','action'=> 'index'));?></li>
                <li><?php echo $this->Html->link('Add post', array('controller'=>'posts','action'=> 'add'));?></li>
                <li><?php echo $this->Html->link('Add User', array('controller'=>'users','action'=> 'add'));?></li>
				<li><?php echo $this->Html->link('List Members', array('controller'=>'users','action'=> 'index'));?></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
				// <?php if ($logged_in): ?>
            // <?php //if(!$this->Session->check('Auth.User')):?>
			// Welcome <?php echo $current_user['username']; ?>.
            // <?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
            // <?php else: ?>
                // <li><?php echo $this->Html->link('Login', array('controller'=>'users','action'=> 'login'));?></li>
			// <?php endif; ?>
            // </ul> -->
        </div>
    </nav>
</div>
</body>
</html>                                		