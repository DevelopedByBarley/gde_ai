    <div class="row justify-content-center">
    <div class="col-12 col-lg-10">
        <div class="accordion" id="mainFaqAccordion">
            <div class="accordion-item border-0 shadow-sm">
                <h2 class="accordion-header" id="faqHeading">
                    <button class="accordion-button collapsed fw-bold text-main-blue text-3xl mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse" aria-expanded="false" aria-controls="faqCollapse">
                        <?= lang('welcome__info.title') ?>
                    </button>
                </h2>
                <div id="faqCollapse" class="accordion-collapse collapse" aria-labelledby="faqHeading" data-bs-parent="#mainFaqAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="faqAccordion">
                            <?php foreach (lang('welcome__info.faq') as $index => $item): ?>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed bg-light text-main-blue fw-semibold" type="button" 
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" 
                                            aria-expanded="false" aria-controls="collapse<?= $index ?>">
                                        <?= $item['question'] ?>
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse" 
                                     aria-labelledby="heading<?= $index ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary">
                                        <?= $item['answer'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>