<?php
require_once 'includes/header.php';

$wallosIsUpToDate = true;
if (!is_null($settings['latest_version'])) {
    $latestVersion = $settings['latest_version'];
    if (version_compare($version, $latestVersion) == -1) {
        $wallosIsUpToDate = false;
    }
}
?>

<section class="contain">

    <section class="account-section">
        <header>
            <h2><?= translate('about', $i18n) ?></h2>
        </header>
        <div class="credits-list">
            <h3><?= translate('about', $i18n) ?></h3>
            <p>Submate <?= $version ?> <?= $demoMode ? "Demo" : "" ?></p>
            <!-- <p><?= translate('license', $i18n) ?>:
                <span>
                    GPLv3
                    <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank"
                        title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <p>
                <?= translate('issues_and_requests', $i18n) ?>:
                <span>
                    GitHub
                    <a href="https://github.com/ellite/Wallos/issues" target="_blank"
                        title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <p>
                <?= translate('the_author', $i18n) ?>:
                <span>
                    https://henrique.pt
                    <a href="https://henrique.pt/" target="_blank" title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p> -->
            <p>
                <?= translate('issues_and_requests', $i18n) ?>:
                <span>
                    contact@submate.com.au
                    <a href= "mailto: contact@submate.com.au" target="_blank"
                        title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <p>
                <span>
                    KUBO LABS @ 2024
                    <a href="https://kubolabs.com.au/" target="_blank" title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <h3><?= translate('credits', $i18n) ?></h3>
            <p>
                <?= translate('icons', $i18n) ?>:
                <span>
                    https://www.streamlinehq.com/freebies/plump-flat-free
                    <a href="https://www.streamlinehq.com/freebies/plump-flat-free" target="_blank"
                        title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <p>
                <?= translate('payment_icons', $i18n) ?>:
                <span>
                    https://www.figma.com/file/5IMW8JfoXfB5GRlPNdTyeg/Credit-Cards-and-Payment-Methods-Icons-(Community)
                    <a href="https://www.figma.com/file/5IMW8JfoXfB5GRlPNdTyeg/Credit-Cards-and-Payment-Methods-Icons-(Community)"
                        target="_blank" title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <p>
                Chart.js:
                <span>
                    https://www.chartjs.org/
                    <a href="https://www.chartjs.org/" target="_blank" title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </div>
            <div>
                <h3>QRCode.js</h3>
                <span>
                    https://github.com/davidshimjs/qrcodejs
                    <a href="https://github.com/davidshimjs/qrcodejs" target="_blank" title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
            <p>
                Icons by icons8:
                <span>
                    https://icons8.com/
                    <a href="https://icons8.com/" target="_blank" title="<?= translate('external_url', $i18n) ?>">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>
            </p>
        </div>
    </section>

</section>

<?php
require_once 'includes/footer.php';
?>