<div class="page-title">
    <div class="title_left">
        <h1>Add Book</h1>
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
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Book Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><?= $this->Html->link(__('List Books'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?= $this->Form->create($book) ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">ISBN <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('isbn', ['label' => false, 'class' => 'form-control', 'required' => true]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Book Title <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('book_title', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Book Type</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('book_type', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Author Name</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('author_name', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Quantity</label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('quantity', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Purchased <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('date_purchased', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Price (RM)</label>
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
                        <?= $this->Html->link(__('Cancel'), ['controller' => 'Books','action' => 'index'], ['class' => 'btn btn-secondary'])?>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
