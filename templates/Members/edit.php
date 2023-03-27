<div class="page-title">
    <div class="title_left">
        <h1>Edit Member</h1>
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
                <h2>Edit Member Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash"> Delete Member</i>'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('<i class="fa fa-list"> List Members</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?= $this->Form->create($member) ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Member's Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('member_name', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">IC Number <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('ic_number', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Phone Number <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('phone_number', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Username <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>