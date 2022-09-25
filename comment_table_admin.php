<table class="table table-striped table-bordered">
    <thead>
        <tr>

            <th scope="col">刪除</th>
            <th scope="col">留言編號</th>
            <th scope="col">會員帳號</th>
            <th scope="col">文章分類</th>
            <th scope="col">文章編號</th>
            <th scope="col">留言內容</th>
            <th scope="col">回覆分類</th>
            <th scope="col">建立時間</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r) : ?>
            <tr>
                <!--新增垃圾桶icon  -->
                <td>
                    <a href="delete.php?sid=<?= $r['sid'] ?>" onclick="return confirm('確定要刪除編號為<?= $r['sid'] ?>的資料嗎?')">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td><?= $r['sid'] ?></td>
                <td><?= $r['member_sid'] ?></td>
                <td><?= $r['categories_sid'] ?></td>
                <td><?= $r['post_sid'] ?></td>
                <td><?= $r['content'] ?></td>
                <td><?= $r['parent_sid'] ?></td>
                <td><?= $r['created_at'] ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>

</table>