<div class="container-fluid">
<div class = "row">
    <div class = "col-12 col-md-4 col-lg-4 py-4" style="background-color: #e6edf2; min-height:100vh; text-align: center; color: #1c1840;">
        <h1>Login</h1>
    </div>
    <div class = "col-12 col-md-6 col-lg-6 py-4">
        <!--Le form-->
        <div class="users form">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create() ?>
                <div class="form-group">
                    <?= $this->Form->control('email', ['required' => true, 'class'=>'form-control', 'type'=>'email', 'placeholder'=>'Enter email']) ?>
                </div>
                <div class="form-group">
                <?= $this->Form->control('password', ['required' => true, 'class'=>'form-control', 'type'=>'password', 'placeholder'=>'Enter password']) ?>
                </div>
                <?= $this->Form->submit('Login', ['class' => 'btn btn-primary'] ); ?>
            <?= $this->Form->end() ?>
            
            <small class="form-text text-muted">Not registered yet? <?= $this->Html->link("Create a new account", ['action' => 'addContractor']) ?></small>
        </div> 
    </div>
</div>
</div>






