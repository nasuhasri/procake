<div class="page-title">
    <div class="title_left">
        <h1>Change Password</h1>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row" style="display: block;">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Change Password Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash"> Delete User</i>'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('<i class="fa fa-list"> List Users</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?= $this->Form->create($user) ?>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('password', ['id' => 'pwd', 'required' => false, 'value' => '', 'type' => 'password', 'class' => 'form-control', 'label' => false, 'required' => true]) ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Confirm Password</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('confirm_password', ['id' => 'confirm-pwd', 'required' => false, 'value' => '', 'type' => 'password', 'class' => 'form-control', 'label' => false, 'required' => true]) ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <?= $this->Form->button('RESET', ['type' => 'reset', 'class' => 'btn btn-primary']) ?>
                            <?= $this->Form->button('SUBMIT', ['id' => 'btn-submit', 'type' => 'submit', 'class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                </form>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<script>
    $('#btn-submit').on('click', function(e){
        let currPwd = $('curr-pwd').val();
        let password = $('#pwd').val();
        let confirmPwd = $('#confirm-pwd').val();
    
        if(password != confirmPwd){
            alert('Password not match. Please, try again.')
            document.getElementById('pwd').value = '';
            document.getElementById('confirm-pwd').value = '';

            return false;
        }

        return true;
    })
</script>