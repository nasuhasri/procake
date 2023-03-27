<div class="page-title">
    <div class="title_left">
        <h1>Members</h1>
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
                <h2>Members Listing</h2>
                <div class="clearfix"></div>
                <?=$this->Html->link(__('<i class="fa fa-plus-square"></i> Add New'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-plus-square"></i> Add Multiple Records'), ['action' => 'addMultiple'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>
            <div class="x-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('member_name') ?></th>
                            <th><?= $this->Paginator->sort('ic_number') ?></th>
                            <th><?= $this->Paginator->sort('phone_number') ?></th>
                            <th><?= $this->Paginator->sort('username') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members as $member): ?>
                        <tr>
                            <td><?= $this->Number->format($member->id) ?></td>
                            <td><?= h($member->member_name) ?></td>
                            <td><?= $member->ic_number === null ? '' : $this->Number->format($member->ic_number) ?></td>
                            <td><?= $member->phone_number === null ? '' : $this->Number->format($member->phone_number) ?></td>
                            <td><?= h($member->username) ?></td>
                            <td class="actions">
                                <?=$this->Html->link(__('View'), ['action' => 'view', $member->id], ['class' => 'btn btn-primary'])?>
                                <?=$this->Html->link(__('Edit'), ['action' => 'edit', $member->id], ['class' => 'btn btn-warning'])?>
                                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete</i>'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id), 'class' => 'btn btn-danger', 'escape' => false])?>
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
