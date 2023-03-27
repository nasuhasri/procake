<div class="page-title">
    <div class="title_left">
        <h1>Single Issue Listing</h1>
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
    <div class="x-panel">
        <div class="x-title">
            <h2>Issue Details</h2>
            <div class="clearfix"></div>

            <!-- </?=$this->Html->link(__('<i class="fa fa-edit"> Edit Issue</i>'), ['action' => 'edit', $issued->id], ['class' => 'btn btn-warning', 'escape' => false])?> -->
            <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete Issue</i>'), ['action' => 'delete', $issued->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'btn btn-danger', 'escape' => false])?>
            <?=$this->Html->link(__('<i class="fa fa-list"> List Issues</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false])?>
        </div>

        <div class="x-content">
            <div class="column-responsive">
                <div class="issued view content">
                    <h3><?= h('Issue #'.$issued->id) ?></h3>
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
                            <th><?= __('Item Condition') ?></th>
                            <td><?= h($issued->item_condition) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Item Comment') ?></th>
                            <td><?= h($issued->item_comment) ?></td>
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
                            <th><?= __('Fine') ?></th>
                            <td><?= $issued->fine === null ? '' : $this->Number->format($issued->fine) ?></td>
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
                            <td><?= h($issued->date_issue->format('d M Y h:i A')) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Date Return') ?></th>
                            <td><?= (!empty($issue->date_return)) ? $issue->date_return->format('d M Y h:i A') : '' ?></td>
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
            </div>
        </div>
    </div>
</div>
