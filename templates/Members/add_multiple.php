<div class="page-title">
    <div class="title_left">
        <h1>Add Multiple Records</h1>
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
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Member Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><?= $this->Html->link(__('List Members'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?= $this->Form->create($member) ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="member_name">Member's Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('member_name', ['label' => false, 'class' => 'form-control', 'required' => true]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="ic_number">IC Number <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('ic_number', ['label' => false, 'class' => 'form-control', 'required' => true]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone_number">Phone Number <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <?= $this->Form->control('phone_number', ['label' => false, 'class' => 'form-control', 'required' => true]); ?>
                    </div>
                </div>

                <div class="ln_solid"></div>

                <!-- Issues Form  -->
                <div class="row">
                    <div class="col">
                        <h3>Add Issues</h3>
                        <div id="block-issue">
                            <!-- issue form here                             -->
                        </div>
                        <button class="btn btn-secondary btn-sm btn-add-issue">Add Issue</button>
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div> 
</div> 

<script>
    let issueCounter = 0;

    $('.btn-add-issue').on('click', function (e) {
        e.preventDefault();

        insertIssueRow(issueCounter);
    });

    // dynamic element so kena letak dia under container yg mmg dah sedia load
    $('#block-issue').on('click', '.btn-remove-issue', function (e) {
        e.preventDefault();

        let conf = confirm('Are you sure?');

        if (conf) {
            // choose div until before issue row
            $(this).parentsUntil('.issue-row').parent().remove();
        }
    });
    
    // $('.btn-remove-issue').on('click', function (e) {
    //     e.preventDefault();

    //     alert('clicked');
    // });

    function insertIssueRow(counter) {
        // let html = `<div class="row mb-3 issue-row">`;
        //     html += `<div class="col">`;
        //         html += `<input type="text" placeholder="Date Issue" name="issued[${counter}][date_issue]">`;
        //     html += `</div>`;
        //     html += `<div class="col">`;
        //         html += `<input type="text" placeholder="Due Date" name="issued[${counter}][due_date]">`;
        //     html += `</div>`;
        //     html += `<div class="col-auto">`;
        //         html += `<button class="btn btn-danger btn-sm btn-remove-issue">Delete</button>`;
        //     html += `</div>`;
        // html += `</div>`;

        issueCounter = counter + 1;

        let html = `<div class="mb-3 issue-row">`
            html += `<div class="item form-group">`;
                html += `<span>${issueCounter}</span>`
            html += `</div>`

            html += `<div class="item form-group">`;
                html += `<label class="col-form-label col-md-3 col-sm-3 label-align" for="date_issue">Date Issue <span class="required">*</span></label>`
                html += `<div class="col-md-6 col-sm-6 ">`
                    html += `<input type="date" class="form-control" placeholder="Date Issue" name="issued[${counter}][date_issue]">`;
                html += `</div>`
            html += `</div>`

            html += `<div class="item form-group">`;
                html += `<label class="col-form-label col-md-3 col-sm-3 label-align" for="due_date">Due Date <span class="required">*</span></label>`
                html += `<div class="col-md-6 col-sm-6 ">`
                    html += `<input type="date" class="form-control" placeholder="Due Date" name="issued[${counter}][due_date]">`;
                html += `</div>`
            html += `</div>`

            html += `<div class="item form-group">`;
                html += `<label class="col-form-label col-md-3 col-sm-3 label-align" for="item_category">Item Category <span class="required">*</span></label>`
                html += `<div class="col-md-6 col-sm-6 ">`
                    html += `<select id="item-selector-${counter}" name="issued[${counter}][item_category]" class="form-control">`;
                        html += `<option value="" selected disable hidden>Choose Category</option>`
                        <?php foreach($item_category as $id => $category){ ?>
                            html += `<option value="<?= $id ?>"><?= $category ?></option>`
                        <?php } ?>
                    html += `</select>`;
                html += `</div>`
            html += `</div>`

            html += `<div class="item form-group">`;
                html += `<label class="col-form-label col-md-3 col-sm-3 label-align" for="item_list">Item List <span class="required">*</span></label>`
                html += `<div class="col-md-6 col-sm-6 ">`
                    html += `<select id="item-list-${counter}" name="issued[${counter}][item_number]" class="form-control"> required`;
                        html += `<option value=""></option>`
                    html += `</select>`;
                html += `</div>`
            html += `</div>`

            html += `<div class="ms-5">`;
                html += `<button class="btn btn-danger btn-sm btn-remove-issue">Delete</button>`;
            html += `</div>`;
        html += `</div>`
        
        $('#block-issue').append(html);

        // item category ajax
        $(`#item-selector-${counter}`).on('change', function(e) {
            let value = $(this).val();

            loadCategory(value);
        })

        function loadCategory(name) {
            let url = `<?= $this->Url->build([ 'controller' => 'Issued', 'action' => 'getItemLists']) ?>/${name}`;

            $.getJSON(url, function (data) {
                let html = '<option value="">Please select</option>'
                $.each(data, function (key, value) {
                    html += `<option value="${key}">${value}</option>`;
                });

                $(`#item-list-${counter}`).empty().append(html);
            });
        }
    }

    
</script>