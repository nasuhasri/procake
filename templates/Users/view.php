<div class="page-title">
    <div class="title_left">
        <h1>Single User Listing</h1>
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
                <h2>User Details</h2>
                <div class="clearfix"></div>

                <?=$this->Html->link(__('<i class="fa fa-edit"> Edit User</i>'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning', 'escape' => false])?>
                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete User</i>'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-list"> List Users</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>

            <div class="x-content">
                <div class="column-responsive">
                    <div class="users view content">
                        <h3><?= h($user->name) ?></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($user->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Username') ?></th>
                                <td><?= h($user->username) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($user->id) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>