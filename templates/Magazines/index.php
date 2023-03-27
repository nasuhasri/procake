<div class="page-title">
    <div class="title_left">
        <h1>Magazines</h1>
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
                <h2>Magazines Listing</h2>
                <div class="clearfix"></div>
                <?= $this->Html->link(__('<i class="fa fa-plus-square"></i> New Magazine'), ['action' => 'add'], ['class' => 'btn btn-primary float-right', 'escape' => false]) ?>
            </div>

            <div class="x-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('mag_name') ?></th>
                            <th><?= $this->Paginator->sort('mag_type') ?></th>
                            <th><?= $this->Paginator->sort('date_receipt') ?></th>
                            <th><?= $this->Paginator->sort('pages') ?></th>
                            <th><?= $this->Paginator->sort('price') ?></th>
                            <th><?= $this->Paginator->sort('publisher') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($magazines as $magazine): ?>
                        <tr>
                            <td><?= $this->Number->format($magazine->id) ?></td>
                            <td><?= h($magazine->mag_name) ?></td>
                            <td><?= h($magazine->mag_type) ?></td>
                            <td><?= h($magazine->date_receipt->format('d M Y h:i A')) ?></td>
                            <td><?= $magazine->pages === null ? '' : $this->Number->format($magazine->pages) ?></td>
                            <td><?= $magazine->price === null ? '' : $this->Number->format($magazine->price) ?></td>
                            <td><?= h($magazine->publisher) ?></td>
                            <td><?= h($magazine->created->format('d M Y h:i A')) ?></td>
                            <td><?= h($magazine->modified->format('d M Y h:i A')) ?></td>
                            <td class="actions">
                                <?=$this->Html->link(__('View'), ['action' => 'view', $magazine->id], ['class' => 'btn btn-primary'])?>
                                <?=$this->Html->link(__('Edit'), ['action' => 'edit', $magazine->id], ['class' => 'btn btn-warning'])?>
                                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete</i>'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id), 'class' => 'btn btn-danger', 'escape' => false])?>
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
    </div>
</div>
