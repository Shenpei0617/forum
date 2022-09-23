<div class="col">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?= 1 == $page ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page - 1 ?>">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                </a>
            </li>

            <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
                if ($i >= 1 and $i <= $totalPages) :
            ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
            <?php
                endif;
            endfor; ?>

            <li class="page-item <?= $totalPages == $page ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?>">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
<?php
// if(! empty($_SESSION['admin'])){
include __DIR__ . '/official-table-admin.php';
// }
?>