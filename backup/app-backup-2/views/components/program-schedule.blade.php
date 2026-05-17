<?php $program = lang('plenary__program'); ?>

<div class="accordion shadow" id="programScheduleAccordion" style="border-radius: 0.75rem; overflow: hidden;">
    <div class="accordion-item border-0">
        <h2 class="accordion-header" id="programScheduleHeading">
            <button class="accordion-button collapsed fw-bold text-white fs-5 py-4 px-4"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#programScheduleCollapse"
                aria-expanded="false"
                aria-controls="programScheduleCollapse"
                style="background: #0099ba; border-radius: 0;">
                <i class="bi bi-calendar2-event-fill me-3 fs-4"></i>
                <?= $program['toggle_label'] ?>
            </button>
        </h2>
        <div id="programScheduleCollapse" class="accordion-collapse collapse"
            aria-labelledby="programScheduleHeading"
            data-bs-parent="#programScheduleAccordion">
            <div class="accordion-body p-4" style="background: #f8feff;">

                <?php foreach ($program['schedule'] as $item): ?>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="badge fw-semibold px-3 py-2 text-white"
                        style="background:#0099ba; min-width:115px; font-size:0.85rem; border-radius:2rem;">
                        <?= $item['time'] ?>
                    </span>
                    <span class="fw-semibold"><?= $item['title'] ?></span>
                </div>
                <?php endforeach; ?>

                <div class="table-responsive my-4">
                    <table class="table align-middle mb-0"
                        style="border-collapse: separate; border-spacing: 0; border-radius: 0.5rem; overflow: hidden; border: 2px solid #0099ba;">
                        <tbody>
                            <?php foreach ($program['plenary_talks'] as $i => $talk): ?>
                            <tr style="background: <?= $i % 2 === 0 ? '#ffffff' : '#eaf9fc' ?>;">
                                <td class="fw-semibold px-3 py-3" style="border-color:#cde8ef; color:#006f88;">
                                    <?= $talk['speaker'] ?>
                                </td>
                                <td class="px-3 py-3" style="border-color:#cde8ef;">
                                    <?= $talk['title'] ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php foreach ($program['schedule_after'] as $item): ?>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="badge fw-semibold px-3 py-2 text-white"
                        style="background:#0099ba; min-width:115px; font-size:0.85rem; border-radius:2rem;">
                        <?= $item['time'] ?>
                    </span>
                    <span class="fw-semibold"><?= $item['title'] ?></span>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
