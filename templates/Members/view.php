<div class="row">
    <div class="column-responsive column-80">
        <div class="members view content">
            
            <div class="related">
                <h4><?= __('Related Issued') ?></h4>
                <?php if (!empty($member->issued)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date Issue') ?></th>
                            <th><?= __('Date Return') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th><?= __('Fine') ?></th>
                            <th><?= __('Fine Status') ?></th>
                            <th><?= __('Item Category') ?></th>
                            <th><?= __('Item Condition') ?></th>
                            <th><?= __('Item Comment') ?></th>
                            <th><?= __('Item Number') ?></th>
                            <th><?= __('Member Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($member->issued as $issued) : ?>
                        <tr>
                            <td><?= h($issued->id) ?></td>
                            <td><?= h($issued->date_issue) ?></td>
                            <td><?= h($issued->date_return) ?></td>
                            <td><?= h($issued->status) ?></td>
                            <td><?= h($issued->due_date) ?></td>
                            <td><?= h($issued->fine) ?></td>
                            <td><?= h($issued->fine_status) ?></td>
                            <td><?= h($issued->item_category) ?></td>
                            <td><?= h($issued->item_condition) ?></td>
                            <td><?= h($issued->item_comment) ?></td>
                            <td><?= h($issued->item_number) ?></td>
                            <td><?= h($issued->member_id) ?></td>
                            <td><?= h($issued->created) ?></td>
                            <td><?= h($issued->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Issued', 'action' => 'view', $issued->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Issued', 'action' => 'edit', $issued->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Issued', 'action' => 'delete', $issued->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="page-title">
    <div class="title_left">
        <h1>Single Member Listing</h1>
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
                <h2>Member Details</h2>
                <div class="clearfix"></div>

                <?=$this->Html->link(__('<i class="fa fa-edit"> Edit Member</i>'), ['action' => 'edit', $member->id], ['class' => 'btn btn-warning', 'escape' => false])?>
                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete Member</i>'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-list"> List Members</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>

            <div class="x-content">
                <div class="column-responsive">
                    <div class="members view content">
                        <h3><?=h('Member #'.$member->id)?></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Member Name') ?></th>
                                <td><?= h($member->member_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($member->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Ic Number') ?></th>
                                <td><?= $member->ic_number === null ? '' : $this->Number->format($member->ic_number) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone Number') ?></th>
                                <td><?= $member->phone_number === null ? '' : $this->Number->format($member->phone_number) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
