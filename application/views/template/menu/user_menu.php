
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>home"><span class="glyphicon glyphicon-home"></span> Demo Sched</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                     <li <?php if($active_nav==='schedule') {echo "class='active'";}?>>
                         <a href="<?php echo base_url()?>demo/schedule">Schedule</a>
                     </li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <span class="glyphicon glyphicon-user"></span> <?php echo $this->session->employee_id;?> <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                       <li><a href="<?php echo base_url()?>demo/change-password"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
                       <li><a href="<?php echo base_url();?>logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                     </ul>
                   </li>
                 </ul>
            </div>
            </div>
        </nav>
        <br />
        <br />
        <br />
