<div class="card p-2 pt-4 mb-5">
    <?= $this->Form->create('Pages', ['url' => ['action' => 'home'], 'type' => 'get', 'valueSources' => ['query']]) ?>
    <form>
        <div class="form-row">
            <div class="col">
                <div class="md-form m-0">
                    <?= $this->Form->control('name', [
                        'class' => 'form-control',
                        'label' => ['text' => __("Name")]
                    ]); ?>
                </div>
            </div>
            <div class="col">
                <div class="md-form m-0">
                    <?= $this->Form->control('location', [
                        'class' => 'form-control',
                        'label' => ['text' => __("Location")]
                    ]); ?>
                </div>
            </div>
            <div class="col-auto">
                <?= $this->Form->button('<i class="fa fa-search mt-0"></i>', ['type' => 'submit', 'class' => 'btn btn-primary mb-0']) ?>
            </div>
        </div>
        <?= $this->Form->end(); ?>
</div>
