<a href="guest/create"
class="button" style="margin-left: 0px">
    Create a new guest account
</a>

<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <div class="main">
        <h3><?= esc($guest_item['name']) ?></h3>
        <p> id: <?= esc($guest_item['id']) ?>
        | <?= esc($guest_item['email']) ?>
        | <?= esc($guest_item['website']) ?>
        | <?= esc($guest_item['comment']) ?>
        | <?= esc($guest_item['gender']) ?>
        | <?= esc($guest_item['reg_date']) ?></p>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>

<?php endif ?>