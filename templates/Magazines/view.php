<div class="page-title">
    <div class="title_left">
        <h1>Single Magazine Listing</h1>
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
    <div class="col-md-10">
        <div class="x-panel">
            <div class="x-title">
                <h2>Magazine Details</h2>

                <?= $this->Html->link(__('Edit Magazine'), ['action' => 'edit', $magazine->id], ['class' => 'btn btn-warning', 'escape' => false]) ?>
                <?= $this->Form->postLink(__('Delete Magazine'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                <?= $this->Html->link(__('List Magazines'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
            </div>
            <div class="x-content">
                <div class="view content">
                    <h3><?= h('Magazine #'.$magazine->id) ?></h3>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Mag Name') ?></th>
                            <td><?= h($magazine->mag_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Mag Type') ?></th>
                            <td><?= h($magazine->mag_type) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Publisher') ?></th>
                            <td><?= h($magazine->publisher) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($magazine->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Pages') ?></th>
                            <td><?= $magazine->pages === null ? '' : $this->Number->format($magazine->pages) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Price') ?></th>
                            <td><?= $magazine->price === null ? '' : $this->Number->format($magazine->price) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Date Receipt') ?></th>
                            <td><?= h($magazine->date_receipt) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= h($magazine->created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= h($magazine->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>