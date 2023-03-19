<div class="page-title">
    <div class="title_left">
        <h1>Edit Newspaper</h1>
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

<div class="row">
    <div class="col-md-12 col-sm-6">
        <div class="x-panel">
            <div class="x-title">
                <h2>Edit Newspaper Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash"> Delete Newspaper</i>'), ['action' => 'delete', $newspaper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newspaper->id), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('<i class="fa fa-list"> List Newspapers</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x-content">
                <br />
                <?= $this->Form->create($newspaper) ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Newspaper Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('news_name', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Newspaper Language <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('news_lang', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Date Receipt <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('date_receipt', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Date Published <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('date_published', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Pages <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('pages', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Price (RM) <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('price', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Type <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('type', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Publisher <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('publisher', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <?= $this->Html->link(__('Cancel'), ['controller' => 'Newspapers','action' => 'index'], ['class' => 'btn btn-secondary'])?>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
