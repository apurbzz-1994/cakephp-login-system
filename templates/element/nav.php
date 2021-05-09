<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #1c1840">
        <div class="mx-auto order-0">
            <?=$this->Html->link('Bob\'s Construction', '/', ['class'=>'navbar-brand mx-auto']);?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?=$this->Html->link('Home', '/', ['class'=>'nav-link']);?>
                </li>
                <li class="nav-item">
                <?=$this->Html->link('Register', '/contents/registration', ['class'=>'nav-link']);?>
                </li>
                <li class="nav-item">
                    <!--Toggle login and logout based on user identity-->
                    <?php
                        if($this->Identity->isLoggedIn()){?>
                            <?= $this->Html->link("Logout", ['controller'=>'Users','action' => 'logout'], ['class'=>'nav-link']) ?>
                    <?php }else{ ?>
                        <?= $this->Html->link("Login", ['controller'=>'Users','action' => 'login'], ['class'=>'nav-link']) ?>
                    <?php } ?> 
                </li>
            </ul>
        </div>
    </nav>