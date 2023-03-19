<div class="page-title">
    <div class="title_left">
        <h1>Edit Magazine</h1>
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
    <div class="col-md-12 col-sm-12">
        <div class="x-panel">
            <div class="x_title">
                <h2>Edit Magazine Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash"> Delete Magazine</i>'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('<i class="fa fa-list"> List Magazine</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <br />
                <?= $this->Form->create($magazine) ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Magazine Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('mag_name', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Magazine Type <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('mag_type', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date Receipt</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('date_receipt', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pages</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('pages', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Price(RM)</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('price', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Publisher</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('publisher', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

    
</div>
