</main>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Author</th>
        <th>Actions</th>
    </tr>

    <?php
    foreach ($this->posts as $post) : ?>
        <tr>
            <td><?=htmlspecialchars($post['post_id'])?></td>
            <td><?=htmlspecialchars($post['title'])?></td>
            <td><?=htmlspecialchars($post['content'])?></td>
            <td><?=htmlspecialchars($post['date'])?></td>
            <td><?=htmlspecialchars($post['full_name'])?></td>

        </tr>


    <?php endforeach;?>
</table>
<main>
