<div class="container" style="background-color: #0E233A; text-align: center;">
    <div class="row">
        <div class="col-4">
            <div class="container mt-5">
                <?= $this->Html->image('/img/lib1.png', ['alt' => 'Profile Image', 'width' => '100%', 'height' => 'auto']); ?>
            </div>
            <h4><em>Your reading journey starts here</em></h4>
        </div>
        <div class="col-8" style="background-color: whitesmoke;">
            <div class="container mt-5">
                <h1>WELCOME TO LIBRIAN IO MANAGEMENT SYSTEM</h1>
                
                <?= $this->Form->create($user) ?>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('name', ['required' => true, 'class' => 'form-control', 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('username', ['required' => true, 'class' => 'form-control', 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('password', ['required' => true, 'type' => 'password', 'class' => 'form-control', 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <?= $this->Form->button('RESET', ['type' => 'reset', 'class' => 'btn btn-primary']) ?>
                            <?= $this->Form->button('SUBMIT', ['type' => 'submit', 'class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                </form>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>