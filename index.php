<?php
// Fetch the data from the JSONPlaceholder API
$url = 'https://jsonplaceholder.typicode.com/posts'; // Fixed the typo in the URL
$response = file_get_contents($url);
$data = json_decode($response, true); // Decode the JSON response into an associative array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Fixed typo from "charsel" to "charset" -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posts (PHP)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Data Posts dari JSONPlaceholder API (PHP)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data)): ?> <!-- Check if $data is not empty -->
                <?php foreach ($data as $post): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($post['id']); ?></td>
                        <td><?php echo htmlspecialchars($post['title']); ?></td>
                        <td><?php echo htmlspecialchars($post['body']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No posts available.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
