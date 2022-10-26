<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Обратный звонок</h2>
            </div>
            <div class="close-modal" data-bs-dismiss="modal" aria-bs-label="Close">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/close.png" alt="close-modal">
            </div>
            <div class="modal-body">
                <div class="row" id="feedbackForm">
                    <?php echo do_shortcode( '[contact-form-7 id="86" title="Форма обратной связи"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>