<div class="page-title">
    <div class="title_left">
        <h1>Return Item</h1>
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
    <div class="col-md-10 col-sm-6">
        <div class="x-panel">
            <div class="x-title">
                <h2>Item Details</h2>
                <div class="clearfix"></div>
                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete Item</i>'), ['action' => 'delete', $issued->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-list"> List Item</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>
    
            <div class="x-content">
                <div class="column-responsive">
                    <div class="issued view content">
                        <h3><?= h('Item '.ucfirst($issued->item_category).' #'.$issued->id) ?></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($issued->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Fine Status') ?></th>
                                <td><?= h($issued->fine_status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Item Category') ?></th>
                                <td><?= h($issued->item_category) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Member') ?></th>
                                <td><?= $issued->has('member') ? $this->Html->link($issued->member->member_name, ['controller' => 'Members', 'action' => 'view', $issued->member->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Issue Id') ?></th>
                                <td><?= $this->Number->format($issued->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Item Number') ?></th>
                                <td>
                                    <?= $issued->has('book') ? $issued->book->book_title : '' ?>
                                    <?= $issued->has('magazine') ? $issued->magazine->mag_name : '' ?>
                                    <?= (!empty($issued->newspaper)) ? $issued->newspaper->news_name : '' ?>
                                </td>
                            </tr>
                            <tr>
                                <th><?= __('Date Issue') ?></th>
                                <td><?= $issued->date_issue->format('d M Y h:i A') ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Due Date') ?></th>
                                <td><?= h($issued->due_date->format('d M Y h:i A')) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($issued->created->format('d M Y h:i A')) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($issued->modified->format('d M Y h:i A')) ?></td>
                            </tr>
                        </table>
                    </div>

                    <br />

                    <h3>Return Book Form</h3>
                    <div class="ln_solid"></div>

                    <?= $this->Form->create($issued) ?>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('date_return', ['empty' => true, 'label' => false, 'class' => 'form-control', 'value' => date('Y-m-d'), 'type' => 'hidden']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('status', ['options' => $status, 'empty' => 'Choose Status', 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Fine (RM) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('fine', ['label' => false, 'class' => 'form-control', 'value' => $fine, 'readonly' => true]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Fine Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('fine_status', ['options' => $fineStatus, 'empty' => 'Choose Fine Status', 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Condition <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('item_condition', ['options' => $item_condition, 'empty' => 'Choose Item Condition', 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Comment <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('item_comment', ['label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <?= $this->Html->link(__('Cancel'), ['controller' => 'Issued','action' => 'index'], ['class' => 'btn btn-secondary'])?>
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>