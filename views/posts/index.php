</main>
<table>
    <tr id="tableStyle">

        <th>Title</th>
        <th>Content</th>
        <th>Author</th>

    </tr>

    <?php
    foreach ($this->posts as $post) : ?>
        <tr id="tableStyleRows">
            <td><?=htmlspecialchars($post['title'])?></td>
            <td><?=htmlspecialchars($post['content'])?></td>
            <td id="authorSpace"><?=htmlspecialchars($post['full_name'])?></td>

        </tr>


    <?php endforeach;?>
</table>
<main>
