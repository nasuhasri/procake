<div class="page-title">
    <div class="title_left">
        <h1>Single Newspaper Listing</h1>
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
    <div class="col-md-10 col-sm-6">
        <div class="x-panel">
            <div class="x-title">
                <h2>Newspaper Details</h2>
                <div class="clearfix"></div>

                <?=$this->Html->link(__('<i class="fa fa-edit"> Edit Newspaper</i>'), ['action' => 'edit', $newspaper->id], ['class' => 'btn btn-warning', 'escape' => false])?>
                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete Newspaper</i>'), ['action' => 'delete', $newspaper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newspaper->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-list"> List Newspapers</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>
            <div class="x-content">
                <div class="column-responsive">
                    <div class="newspapers view content">
                        <h3><?= h('Newspaper #'.$newspaper->id) ?></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('News Name') ?></th>
                                <td><?= h($newspaper->news_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('News Lang') ?></th>
                                <td><?= h($newspaper->news_lang) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Type') ?></th>
                                <td><?= h($newspaper->type) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Publisher') ?></th>
                                <td><?= h($newspaper->publisher) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($newspaper->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Pages') ?></th>
                                <td><?= $newspaper->pages === null ? '' : $this->Number->format($newspaper->pages) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Price') ?></th>
                                <td><?= $newspaper->price === null ? '' : $this->Number->format($newspaper->price) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Date Receipt') ?></th>
                                <td><?= h($newspaper->date_receipt->format('d M Y h:i A')) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Date Published') ?></th>
                                <td><?= h($newspaper->date_published->format('d M Y h:i A')) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($newspaper->created->format('d M Y h:i A')) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($newspaper->modified->format('d M Y h:i A')) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
