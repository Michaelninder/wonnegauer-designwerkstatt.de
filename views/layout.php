<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title>
        <?= htmlspecialchars($config['site_name']) ?>
        <?php if (!empty($page['title'])): ?>
            – <?= htmlspecialchars($page['title']) ?>
        <?php endif; ?>
    </title>
    <link rel="stylesheet" href="<?= url('assets/no-class.css') ?>">
</head>
<body>
    <?php include __DIR__ . '/../components/header.php'; ?>

    <main>
        <?php render_view($page['view'], $page, $config); ?>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>
</html>
