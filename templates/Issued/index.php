<div class="page-title">
    <div class="title_left">
        <h1>Issues</h1>
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
    <div class="col-md-12 col-sm-6  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Issues Listing</h2>
                <div class="clearfix"></div>
                <?=$this->Html->link(__('<i class="fa fa-plus-square"></i> Add New'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-plus-square"></i> Add Multiple Records'), ['action' => 'addMultiple'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>
            <div class="x_content">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('date_issue') ?></th>
                            <th><?= $this->Paginator->sort('date_return') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('due_date') ?></th>
                            <th><?= $this->Paginator->sort('fine') ?></th>
                            <th><?= $this->Paginator->sort('fine_status') ?></th>
                            <th><?= $this->Paginator->sort('item_category') ?></th>
                            <th><?= $this->Paginator->sort('item_condition') ?></th>
                            <th><?= $this->Paginator->sort('item_comment') ?></th>
                            <th><?= $this->Paginator->sort('item_number') ?></th>
                            <th><?= $this->Paginator->sort('member_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($issues as $issue): ?>
                        <tr>
                            <td><?=$this->Number->format($issue->id)?></td>
                            <td><?= (!empty($issue->date_issue)) ? $issue->date_issue->format('d M Y h:i A') : '' ?></td>
                            <td><?= (!empty($issue->date_return)) ? $issue->date_return->format('d M Y h:i A') : '' ?></td>
                            <td><?= h($issue->status) ?></td>
                            <td><?= (!empty($issue->due_date)) ? $issue->due_date->format('d M Y h:i A') : '' ?></td>
                            <td><?=$issue->fine === null ? '' : $this->Number->format($issue->fine)?></td>
                            <td><?=h($issue->fine_status)?></td>
                            <td><?=h($issue->item_category)?></td>
                            <td><?=h($issue->item_condition)?></td>
                            <td><?=h($issue->item_comment)?></td>
                            <td>
                                <?= $issue->has('book') ? $issue->book->book_title : '' ?>
                                <?= $issue->has('magazine') ? $issue->magazine->mag_name : '' ?>
                                <?= (!empty($issue->newspaper)) ? $issue->newspaper->news_name : '' ?>
                            </td>
                            <td><?=$issue->has('member') ? $this->Html->link($issue->member->member_name, ['controller' => 'Members', 'action' => 'view', $issue->member->id]) : ''?></td>
                            <td><?=h($issue->created->format('d M Y h:i A'))?></td>
                            <td><?=h($issue->modified->format('d M Y h:i A'))?></td>
                            <td class="actions">
                                <?=$this->Html->link(__('View'), ['action' => 'view', $issue->id], ['class' => 'btn btn-primary'])?>
                                <!-- show edit and return button for item with issued status  -->
                                <?= ($issue->status === 'issued') ? $this->Html->link(__('Edit'), ['action' => 'edit', $issue->id], ['class' => 'btn btn-warning']) : '' ?>
                                <?= ($issue->status === 'issued') ? $this->Html->link(__('Return'), ['action' => 'return_item', $issue->id], ['class' => 'btn btn-info']) : '' ?>
                                <?=$this->Form->postLink(__('Delete'), ['action' => 'delete', $issue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issue->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                            </td>
                        </tr>
                        <?php endforeach;?>
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
