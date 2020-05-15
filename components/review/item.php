<blockquote>
    <p class="review-text"><?= $review->review_text; ?></p>
    <div class="rating-row row">
        <div class="col col-md-4">
            <span class="text-muted"><b><?= lang('igniter.local::default.review.label_quality'); ?>:</b></span>
            <div
                data-control="star-rating"
                data-score="<?= $review->quality ?>"
                data-hints="<?= e(json_encode($reviewRatingHints)); ?>"
                data-score-name="Quality"
                data-read-only="true"
            >
                <div class="rating rating-star text-warning"></div>
            </div>
        </div>
        <div class="col col-md-4">
            <span class="text-muted"><b><?= lang('igniter.local::default.review.label_delivery'); ?>:</b></span>
            <div
                data-control="star-rating"
                data-score="<?= $review->delivery ?>"
                data-hints="<?= e(json_encode($reviewRatingHints)); ?>"
                data-score-name="Delivery"
                data-read-only="true"
            >
                <div class="rating rating-star text-warning"></div>
            </div>
        </div>
        <div class="col col-md-4">
            <span class="text-muted"><b><?= lang('igniter.local::default.review.label_service'); ?>:</b></span>
            <div
                data-control="star-rating"
                data-score="<?= $review->service ?>"
                data-hints="<?= e(json_encode($reviewRatingHints)); ?>"
                data-score-name="Service"
                data-read-only="true"
            >
                <div class="rating rating-star text-warning"></div>
            </div>
        </div>
    </div>
    <small>
        <?= $review->customer->full_name; ?><?= lang('igniter.local::default.text_from'); ?>
        <cite title="<?= lang('igniter.local::default.text_source'); ?>">
            <?= $review->customer->address ? $review->customer->address->city : ''; ?>
        </cite>
        <?= lang('igniter.local::default.text_on'); ?>
        <?= $review->date_added->isoFormat($reviewDateFormat); ?>
    </small>
</blockquote>
