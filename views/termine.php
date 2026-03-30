<article class="page-termine"></article>
    <h1>Termine</h1>

    <?php $termine = $page['termine'] ?? []; ?>

    <?php if (!empty($termine)): ?>
        <ul class="termine-liste">
            <?php foreach ($termine as $termin): ?>
                <li class="termin">
                    <time class="termin-datum" datetime="<?= htmlspecialchars($termin['datum']) ?>">
                        <?= htmlspecialchars(date('d.m.Y', strtotime($termin['datum']))) ?>
                    </time>
                    <div class="termin-info">
                        <h2 class="termin-titel"><?= htmlspecialchars($termin['titel']) ?></h2>
                        <p class="termin-beschreibung"><?= htmlspecialchars($termin['beschreibung']) ?></p>
                        <p class="termin-ort"><small><?= htmlspecialchars($termin['ort']) ?></small></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aktuell sind keine Termine eingetragen.</p>
    <?php endif; ?>
</article>
