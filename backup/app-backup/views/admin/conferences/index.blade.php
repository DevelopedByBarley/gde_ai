<div class="container">
  <div class="d-flex flex-column h-lg-full">
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      <?php require_once view_path('components/heading') ?>

      <main class="pt-3 pb-5 bg-surface-secondary">
        <div class="container-fluid px-3 px-lg-5">
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-2">
              <div>
                <h5 class="mb-1"><?= htmlspecialchars($conferenceLabel ?? 'Konferencia') ?> feliratkozók</h5>
                <p class="text-muted small mb-0">
                  Speaker: <?= count($speakerSubscribers ?? []) ?> | Attendee: <?= count($attendeeSubscribers ?? []) ?> | Osszes: <?= count($allSubscribers ?? []) ?>
                </p>
              </div>
              <div class="d-flex flex-wrap gap-2">
                <a href="/admin/conferences/<?= htmlspecialchars($conferenceSlug ?? '') ?>/export/speakers" class="btn btn-sm btn-outline-primary">
                  Speakerek export
                </a>
                <a href="/admin/conferences/<?= htmlspecialchars($conferenceSlug ?? '') ?>/export/attendees" class="btn btn-sm btn-outline-secondary">
                  Attendee-k export
                </a>
                <a href="/admin/conferences/<?= htmlspecialchars($conferenceSlug ?? '') ?>/export/all" class="btn btn-sm btn-success">
                  Osszes export
                </a>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>ID</th>
                    <th>Tipus</th>
                    <th>Nev</th>
                    <th>Email</th>
                    <th>Ceg</th>
                    <th>Telefon</th>
                    <th>Letrehozva</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($allSubscribers)) : ?>
                    <tr>
                      <td colspan="7" class="text-center py-4 text-muted">Nincs megjelenitheto feliratkozo.</td>
                    </tr>
                  <?php else : ?>
                    <?php foreach ($allSubscribers as $subscriber) : ?>
                      <tr>
                        <td>#<?= (int)($subscriber->id ?? 0) ?></td>
                        <td><?= htmlspecialchars($subscriber->registration_type ?? '—') ?></td>
                        <td><?= htmlspecialchars($subscriber->name ?? '—') ?></td>
                        <td><?= htmlspecialchars($subscriber->email ?? '—') ?></td>
                        <td><?= htmlspecialchars($subscriber->company ?? '—') ?></td>
                        <td><?= htmlspecialchars($subscriber->phone ?? '—') ?></td>
                        <td><?= !empty($subscriber->created_at) ? date('Y-m-d H:i', strtotime($subscriber->created_at)) : '—' ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>
