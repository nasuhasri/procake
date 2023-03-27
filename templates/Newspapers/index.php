<div class="page-title">
    <div class="title_left">
        <h1>Newspapers</h1>
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
    <dic class="col-md-10 col-sm-6">
        <div class="x-panel">
            <div class="x-title">
                <h2>Newspapers Listing</h2>
                <div class="clearfix"></div>
                <?=$this->Html->link(__('<i class="fa fa-plus-square"></i> Add New'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>

            <div class="x-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('news_name') ?></th>
                            <th><?= $this->Paginator->sort('news_lang') ?></th>
                            <th><?= $this->Paginator->sort('date_receipt') ?></th>
                            <th><?= $this->Paginator->sort('date_published') ?></th>
                            <th><?= $this->Paginator->sort('pages') ?></th>
                            <th><?= $this->Paginator->sort('price') ?></th>
                            <th><?= $this->Paginator->sort('type') ?></th>
                            <th><?= $this->Paginator->sort('publisher') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($newspapers as $newspaper): ?>
                        <tr>
                            <td><?= $this->Number->format($newspaper->id) ?></td>
                            <td><?= h($newspaper->news_name) ?></td>
                            <td><?= h($newspaper->news_lang) ?></td>
                            <td><?= h($newspaper->date_receipt->format('d M Y h:i A')) ?></td>
                            <td><?= h($newspaper->date_published->format('d M Y h:i A')) ?></td>
                            <td><?= $newspaper->pages === null ? '' : $this->Number->format($newspaper->pages) ?></td>
                            <td><?= $newspaper->price === null ? '' : $this->Number->format($newspaper->price) ?></td>
                            <td><?= h($newspaper->type) ?></td>
                            <td><?= h($newspaper->publisher) ?></td>
                            <td><?= h($newspaper->created->format('d M Y h:i A')) ?></td>
                            <td><?= h($newspaper->modified->format('d M Y h:i A')) ?></td>
                            <td class="actions">
                                <?=$this->Html->link(__('View'), ['action' => 'view', $newspaper->id], ['class' => 'btn btn-primary'])?>
                                <?=$this->Html->link(__('Edit'), ['action' => 'edit', $newspaper->id], ['class' => 'btn btn-warning'])?>
                                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete</i>'), ['action' => 'delete', $newspaper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newspaper->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                </div>
            </div>
        </div>
    </dic>
</div>
