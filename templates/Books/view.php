<div class="page-title">
    <div class="title_left">
        <h1>Single Book Listing</h1>
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
                <h2>Book Details</h2>
                <div class="clearfix"></div>

                <?=$this->Html->link(__('<i class="fa fa-edit"> Edit Book</i>'), ['action' => 'edit', $book->id], ['class' => 'btn btn-warning', 'escape' => false])?>
                <?=$this->Form->postLink(__('<i class="fa fa-trash"> Delete Book</i>'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id), 'class' => 'btn btn-danger', 'escape' => false])?>
                <?=$this->Html->link(__('<i class="fa fa-list"> List Books</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false])?>
            </div>

            <div class="x-content">
                <div class="column-responsive">
                    <div class="books view content">
                        <h3><?=h('Book #'.$book->id)?></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th><?=__('Book Title')?></th>
                                <td><?=h($book->book_title)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Book Type')?></th>
                                <td><?=h($book->book_type)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Author Name')?></th>
                                <td><?=h($book->author_name)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Publisher')?></th>
                                <td><?=h($book->publisher)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Id')?></th>
                                <td><?=$this->Number->format($book->id)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Isbn')?></th>
                                <td><?=$book->isbn === null ? '' : $this->Number->format($book->isbn)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Quantity')?></th>
                                <td><?=$book->quantity === null ? '' : $this->Number->format($book->quantity)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Price (RM)')?></th>
                                <td><?=$book->price === null ? '' : $this->Number->format($book->price)?></td>
                            </tr>
                            <tr>
                                <th><?=__('Date Purchased')?></th>
                                <td><?=h($book->date_purchased->format('d M Y h:i A'))?></td>
                            </tr>
                            <tr>
                                <th><?=__('Created')?></th>
                                <td><?=h($book->created->format('d M Y h:i A'))?></td>
                            </tr>
                            <tr>
                                <th><?=__('Modified')?></th>
                                <td><?=h($book->modified->format('d M Y h:i A'))?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


