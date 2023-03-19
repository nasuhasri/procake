<div class="page-title">
    <div class="title_left">
        <h1>Books</h1>
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
    <div class="col-md-10 col-sm-6  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Books Listing</h2>
                <div class="clearfix"></div>
                <?=$this->Html->link(__('<i class="fa fa-plus-square"></i> Add New'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>
            <div class="x_content">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?=$this->Paginator->sort('id')?></th>
                            <th><?=$this->Paginator->sort('isbn')?></th>
                            <th><?=$this->Paginator->sort('book_title')?></th>
                            <th><?=$this->Paginator->sort('book_type')?></th>
                            <th><?=$this->Paginator->sort('author_name')?></th>
                            <th><?=$this->Paginator->sort('quantity')?></th>
                            <th><?=$this->Paginator->sort('date_purchased')?></th>
                            <th><?=$this->Paginator->sort('price')?></th>
                            <th><?=$this->Paginator->sort('publisher')?></th>
                            <th><?=$this->Paginator->sort('created')?></th>
                            <th><?=$this->Paginator->sort('modified')?></th>
                            <th class="actions"><?=__('Actions')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                            <tr>
                                <td><?=$this->Number->format($book->id)?></td>
                                <td><?=$book->isbn === null ? '' : $this->Number->format($book->isbn)?></td>
                                <td><?=h($book->book_title)?></td>
                                <td><?=h($book->book_type)?></td>
                                <td><?=h($book->author_name)?></td>
                                <td><?=$book->quantity === null ? '' : $this->Number->format($book->quantity)?></td>
                                <td><?=h($book->date_purchased)?></td>
                                <td><?=$book->price === null ? '' : $this->Number->format($book->price)?></td>
                                <td><?=h($book->publisher)?></td>
                                <td><?=h($book->created)?></td>
                                <td><?=h($book->modified)?></td>
                                <td class="actions">
                                    <?=$this->Html->link(__('View'), ['action' => 'view', $book->id], ['class' => 'btn btn-primary'])?>
                                    <?=$this->Html->link(__('Edit'), ['action' => 'edit', $book->id], ['class' => 'btn btn-warning'])?>
                                    <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete</i>'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
