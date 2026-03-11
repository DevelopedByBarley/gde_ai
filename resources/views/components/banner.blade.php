<div class="banner-wrapper gradient-bg-horizontal">
    <div class="container px-0">
        <div class="text-white">
            <div class="container pt-5 pb-4">
                <div class="row g-4">
                    <!-- Logók szekció -->
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center align-items-lg-start gap-3">
                        <img style="width: 100%; max-width: 250px;" 
                             src="<?= public_file('images/base/gde-logo-white.png') ?>" 
                             alt="GDE Logo">
                        <a href="https://gde.hu/erasmus-week-2026" 
                           target="_blank" 
                           class="bg-white rounded p-2">
                            <img style="width: 100%; max-width: 180px;" 
                                 src="<?= public_file('images/base/erasmus_plus.png') ?>"
                                 alt="Erasmus+">
                        </a>
                    </div>

                    <!-- Fő tartalom szekció -->
                    <div class="col-12 col-lg-8">
                        <div class="d-flex flex-column align-items-center align-items-lg-end gap-3">
                            
                            <!-- Nyelvi kapcsolók -->
                            <div class="d-inline-flex align-items-center gap-2 bg-white rounded-pill px-2 py-1">
                                <form action="/lang" method="POST" class="d-inline">
                                    <?= csrf() ?>
                                    <input type="hidden" name="lang" value="en">
                                    <button type="submit"
                                        class="btn rounded-pill px-3 py-1 fw-semibold d-inline-flex align-items-center gap-2 <?= ($_COOKIE['lang'] ?? '') === 'en' ? 'bg-main-blue text-white' : 'btn-light text-info' ?>">
                                        <img src="<?= public_file('images/base/eng_flag.png') ?>"
                                             class="rounded" 
                                             style="width: 25px;" 
                                             alt="English">
                                        <span class="small"><?= lang('banner__lang.en_label') ?></span>
                                    </button>
                                </form>
                                <form action="/lang" method="POST" class="d-inline">
                                    <?= csrf() ?>
                                    <input type="hidden" name="lang" value="hu">
                                    <button type="submit"
                                        class="btn rounded-pill px-3 py-1 fw-semibold d-inline-flex align-items-center gap-2 <?= ($_COOKIE['lang'] ?? '') === 'hu' ? 'bg-main-blue text-white' : 'btn-light text-info' ?>">
                                        <img src="<?= public_file('images/base/hun_flag.png') ?>" 
                                             class="rounded"
                                             style="width: 25px;" 
                                             alt="Hungarian">
                                        <span class="small"><?= lang('banner__lang.hu_label') ?></span>
                                    </button>
                                </form>
                            </div>

                            <!-- Cím -->
                            <div class="text-center text-lg-end">
                                <h1 class="display-5 fw-bold mb-0">
                                    <?= lang('banner__title') ?>
                                </h1>
                            </div>

                            <!-- Dátum és év -->
                            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-end gap-3 gap-sm-4 mt-2">
                                <div class="text-center text-sm-end">
                                    <h4 class="mb-1 fw-semibold">
                                        <?= lang('banner__date_range') ?>
                                    </h4>
                                    <h5 class="mb-0 fw-normal">
                                        <?= lang('banner__city') ?>
                                    </h5>
                                </div>
                                <div class="display-3 fw-bold" style="line-height: 1;">
                                    <?= lang('banner__year') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
