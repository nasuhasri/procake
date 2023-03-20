<div class="page-title">
    <div class="title_left">
        <h1>Add Issue</h1>
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

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Issue Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><?= $this->Html->link(__('List Issues'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?></li>
                </ul>
                <div class="clearfix"></div>
            </div>
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
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Date Return <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        </?= $this->Form->control('date_return', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div> -->
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        </?= $this->Form->control('status', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div> -->
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Due Date <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('due_date', ['empty' => true, 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Fine (RM) <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        </?= $this->Form->control('fine', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div> -->
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Fine Status <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        </?= $this->Form->control('fine_status', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div> -->
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Category <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('item_category', ['options' => $item_category, 'id' => 'item-selector', 'empty' => 'Choose Category', 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Condition <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        </?= $this->Form->control('item_condition', ['options' => $item_condition, 'empty' => 'Choose Condition', 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div> -->
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Comment <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        </?= $this->Form->control('item_comment', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div> -->
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('item_number', ['id' => 'item-list', 'type' => 'select', 'options' => [], 'label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Member Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('member_id', ['options' => $members, 'empty' => 'Choose Member', 'label' => false, 'class' => 'form-control']); ?>
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