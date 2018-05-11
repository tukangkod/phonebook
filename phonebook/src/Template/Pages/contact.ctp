<?= $this->element('search') ?>
<div class="card card-cascade narrower">
    <div
        class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
        <div>&nbsp;</div>
        <a href="" class="white-text mx-3"><?= __("Listing") ?></a>
        <div>
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-info-circle mt-0"></i>
            </button>
        </div>
    </div>

    <div class="px-4">
        <div class="table-wrapper">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th class="th-lg"><a><?= __("First Name"); ?><i class="fa fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href=""><?= __("Last Name"); ?><i class="fa fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href=""><?= __("Phone"); ?><i class="fa fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href=""><?= __("Location"); ?><i class="fa fa-sort ml-1"></i></a></th>
                    <th><?= __('Details') ?></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= h($contact->first_name) ?></td>
                        <td><?= h($contact->last_name) ?></td>
                        <td><?= h($contact->main_phone) ?></td>
                        <td><?= h($contact->location) ?></td>
                        <td>
                            <a class="btn-floating btn-sm blue-gradient"
                               data-name="<?= h($contact->full_name) ?>"
                               data-main="<?= h($contact->main_phone_full) ?>"
                               data-others="<?= h($contact->other_phone_full) ?>"
                               data-email="<?= h($contact->email) ?>"
                               data-address="<?= h($contact->location) ?>"
                               data-toggle="modal"
                               data-target="#modalContact">
                                <i class="fa fa-info"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->element('contact') ?>
