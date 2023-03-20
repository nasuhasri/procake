<div class="page-title">
    <div class="title_left">
        <h1>Edit Book</h1>
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
    <div class="column-md-12 col-sm-12">
        <div class="x-panel">
            <div class="x-title">
                <h2>Edit Issue Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash"> Delete Issue</i>'), ['action' => 'delete', $issued->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'btn btn-danger', 'escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('<i class="fa fa-list"> List Issues</i>'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x-content">
                <div class="x_content">
                    <br />
                    <?= $this->Form->create($issued) ?>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Date Issue <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('date_issue', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Due Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('due_date', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('item_category', ['options' => $item_category, 'id' => 'item-selector', 'empty' => 'Choose Category', 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('item_number', ['id' => 'item-list', 'type' => 'select', 'options' => $itemList, 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Member Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?= $this->Form->control('member_id', ['type' => 'select', 'options' => $membersName, 'empty' => 'Choose Member', 'label' => false, 'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <?= $this->Html->link(__('Cancel'), ['controller' => 'Issued','action' => 'index'], ['class' => 'btn btn-secondary'])?>
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#item-selector').on('change', function (e) {
        let value = $(this).val();
        // let url = '<?= $this->Url->build(['action' => 'getItemLists']) ?>/' + value ;
        let url = `<?= $this->Url->build(['action' => 'getItemLists']) ?>/${value}`;

        $.getJSON(url, function (data) {
            // console.log(data);
            //select
                //option
            //select
            let html = '<option value="">Please select</option>'
            $.each(data, function (key, value) {
                html += `<option value="${key}">${value}</option>`;
            });

            // console.log(html);

            $('#item-list').empty().append(html);
        });
    });
</script>