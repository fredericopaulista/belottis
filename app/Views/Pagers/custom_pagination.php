<?php
$pager->setSurroundCount(2);
?>

<nav aria-label="Navegação de páginas">
    <ul class="pagination">
        <!-- Primeira página -->
        <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
            <a href="<?= $pager->getFirst() ?>" class="page-link" aria-label="Primeira página">
                <i class="fas fa-angle-double-left"></i>
            </a>
        </li>
        <?php else : ?>
        <li class="page-item disabled">
            <span class="page-link" aria-label="Primeira página">
                <i class="fas fa-angle-double-left"></i>
            </span>
        </li>
        <?php endif ?>

        <!-- Página anterior -->
        <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
            <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="Página anterior">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>
        <?php else : ?>
        <li class="page-item disabled">
            <span class="page-link" aria-label="Página anterior">
                <i class="fas fa-chevron-left"></i>
            </span>
        </li>
        <?php endif ?>

        <!-- Links numéricos -->
        <?php foreach ($pager->links() as $link) : ?>
        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
            <a href="<?= $link['uri'] ?>" class="page-link">
                <?= $link['title'] ?>
            </a>
        </li>
        <?php endforeach ?>

        <!-- Próxima página -->
        <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
            <a href="<?= $pager->getNext() ?>" class="page-link" aria-label="Próxima página">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        <?php else : ?>
        <li class="page-item disabled">
            <span class="page-link" aria-label="Próxima página">
                <i class="fas fa-chevron-right"></i>
            </span>
        </li>
        <?php endif ?>

        <!-- Última página -->
        <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
            <a href="<?= $pager->getLast() ?>" class="page-link" aria-label="Última página">
                <i class="fas fa-angle-double-right"></i>
            </a>
        </li>
        <?php else : ?>
        <li class="page-item disabled">
            <span class="page-link" aria-label="Última página">
                <i class="fas fa-angle-double-right"></i>
            </span>
        </li>
        <?php endif ?>
    </ul>
</nav>