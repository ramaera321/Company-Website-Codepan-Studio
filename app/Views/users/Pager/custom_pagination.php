<!-- Pagination -->
<?php $pager->setSurroundCount(1) ?>
<nav class="pagination-bar" aria-label="...">
    <ul class="pagination justify-content-center">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item hvr-icon-wobble-horizontal">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><i class="fa fa-arrow-left hvr-icon"></i></span>
                </a>
            </li>
        <?php
        endif;
        foreach ($pager->links() as $link) :
        ?>

            <li class="page-item <?= $link['active'] ? 'active' : '' ?>" aria-current="page">
                <a href="<?= $link['uri'] ?>"><span class="page-link"><?= $link['title'] ?></span></a>
            </li>

        <?php
        endforeach;
        if ($pager->hasNext()) : ?>
            <li class="page-item hvr-icon-wobble-horizontal">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><i class="fa fa-arrow-right hvr-icon"></i></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>