<?php
$sections = lang('plenary__program.sections');
$label    = lang('plenary__program.sections_label');
?>

<div class="accordion shadow" id="programSectionsAccordion" style="border-radius: 0.75rem; overflow: hidden;">
    <div class="accordion-item border-0">
        <h2 class="accordion-header" id="programSectionsHeading">
            <button class="accordion-button collapsed fw-bold text-white fs-5 py-4 px-4"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#programSectionsCollapse"
                aria-expanded="false"
                aria-controls="programSectionsCollapse"
                style="background: #0099ba; border-radius: 0;">
                <i class="bi bi-diagram-3-fill me-3 fs-4"></i>
                <?= $label ?>
            </button>
        </h2>
        <div id="programSectionsCollapse" class="accordion-collapse collapse"
            aria-labelledby="programSectionsHeading"
            data-bs-parent="#programSectionsAccordion">
            <div class="accordion-body p-4" style="background: #f8feff;">

                <?php foreach ($sections as $section): ?>
                <div class="mb-5">

                    <h5 class="fw-bold mb-3" style="color:#0099ba;">
                        <?= $section['number'] ?>. <?= $section['title'] ?>
                    </h5>

                    <div class="table-responsive mb-3">
                        <table class="table align-middle mb-0"
                            style="border-collapse: separate; border-spacing: 0; border-radius: 0.5rem; overflow: hidden; border: 2px solid #0099ba;">
                            <tbody>
                                <?php foreach ($section['speakers'] as $i => $spk): ?>
                                <tr style="background: <?= $i % 2 === 0 ? '#ffffff' : '#eaf9fc' ?>;">
                                    <td class="fw-semibold px-3 py-3" style="border-color:#cde8ef; color:#006f88;">
                                        <?= $spk['name'] ?>
                                    </td>
                                    <td class="px-3 py-3" style="border-color:#cde8ef;">
                                        <?= $spk['role'] ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php $rt = $section['roundtable']; ?>
                    <div class="rounded-3 p-3" style="background:#e0f7fb; border-left: 4px solid #0099ba;">
                        <p class="fw-semibold mb-2" style="color:#006f88;">
                            <i class="bi bi-people-fill me-2"></i><?= $rt['title'] ?>
                            — <span class="fst-italic"><?= $rt['moderator'] ?></span>
                        </p>
                        <ul class="mb-0 ps-3">
                            <?php foreach ($rt['speakers'] as $spk): ?>
                            <li class="small">
                                <span class="fw-semibold"><?= $spk['name'] ?></span>
                                — <?= $spk['role'] ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
