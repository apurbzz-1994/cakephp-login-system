<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<style>
     /* div{
            border: 0.5px solid magenta;
               
        }  */
</style>
<div class="row justify-content-md-center py-5">
    <div class="col-12 col-md-6 col-lg-6 px-5">
            <h2 style = 'padding: 1em 0 1em 0; text-align: center';>Register as a Contractor</h2>
            <?= $this->Form->create($user) ?>
                <h4><i class="fas fa-user"></i> Account Information</h4>
                <div class="pt-4 pl-4">
                    <div class="form-group">
                        <?= $this->Form->control('email', ['required' => true, 'class'=>'form-control', 'type'=>'email', 'placeholder'=>'Enter email']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('password', ['required' => true, 'class'=>'form-control', 'type'=>'password', 'placeholder'=>'Enter password']) ?>
                    </div>
                </div>
                <!--Note: For the basic info and job-related fields, the form takes data related to 
                the contractor entity and binds it to the user entity. This is possible since users
                are related to contractors.-->
                <h4 class="pt-5"><i class="fas fa-file-alt"></i> Basic Information</h4>
                <div class="pt-4 pl-4">
                    <div class="form-group">
                        <?= $this->Form->control('contractor.name', ['required' => true, 'class'=>'form-control', 'placeholder'=>'Your name eg. Bob']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('contractor.phone_number', ['required' => true, 'class'=>'form-control', 'type'=>'number', 'placeholder'=>'Your 10 digit phone number']) ?>
                    </div>
                </div>
                <h4 class="pt-5"><i class="fas fa-certificate"></i> Job-related Information</h4>
                <div class="pt-4 pl-4">
                    <div class="form-group">
                        <?= $this->Form->control('contractor.expertise', ['required' => true, 'class'=>'form-control', 'placeholder'=>'Your area of Expertise', 'options'=>['Carpentry'=>'Carpentry', 'Brick-laying'=>'Brick-laying','Equipment handling'=>'Equipment handling']]) ?>
                        <small class="form-text text-muted">This relates to the kind of job you've done the most
                        over the years. 
                    </small>
                    </div>
                </div>
                <div class="pt-5">
                    <?= $this->Form->submit('Register', ['class' => 'btn btn-secondary'] ); ?>
                </div>
                
            <?= $this->Form->end() ?>
    </div>
</div>


