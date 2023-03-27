<div class="container" style="background-color: #0E233A; text-align: center;">
    <div class="row">
        <div class="col-4">
            <div class="container mt-5">
                <?= $this->Html->image('/img/lib1.png', ['alt' => 'Profile Image', 'width' => '100%', 'height' => 'auto']); ?>
            </div>
            <h4><em>Your reading journey starts here</em></h4>
        </div>
        <div class="col-8" style="background-color: whitesmoke;">
            <?= $this->Form->create() ?>
            <div class="container mt-5">
                <h1>WELCOME TO LIBRIAN IO MANAGEMENT SYSTEM</h1>
                <legend><?= __('Please enter your username and password') ?></legend>
                <div class="item form-group">
                    <label class="col-form-label label-align" for="username">Username <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('username', ['required' => true, 'class' => 'form-control', 'label' => false]) ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label label-align" for="password">Password <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control', 'label' => false]) ?>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 offset-md-3">
                    <?= $this->Form->submit(__('LOGIN'), ['class' => 'btn btn-success']) ?>
                    <h5><small>OR</small></h5>
                    <?= $this->Html->link('SIGNUP', ['controller' => 'Users', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
            
        </div>
    </div>
</div>