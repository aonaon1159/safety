<style>
#promotion_modal .modal-body {
    padding: 0;
}

#promotion_modal .close {
    position: absolute;
    right: 0;
    z-index: 2;
}

#promotion_modal .modal-dialog {
    max-width: 45vh !important;
}

#promotion_modal .carousel-indicators li {
    background-color: #00a950;
    height: 0.3rem;
}
</style>
<div class="modal fade" id="promotion_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span><i class="fal fa-times"></i></span>
                </button>

                <div id="slide_promotion" class="carousel slide" data-ride="carousel">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <?php foreach ($promotion as $key => $value) { ?>
                        <div class="carousel-item <?php echo ($key == 0) ? "active" : ""; ?>">
                            <a target="_blank" rel="noreferrer" href="<?php echo $value['url']; ?>">
                                <img title="" class="img-fluid" src="<?php echo $base_url . $value['path']; ?>"
                                    alt="<?php echo $base_url . $value['alt']; ?>">
                            </a>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#slide_promotion" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slide_promotion" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>