<!-- Modal -->
<div class="modal fade" id="notificationModal" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xs">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header btn-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hi! <?php echo e(\Auth::user()->name); ?></h4>
            </div>
            <div class="modal-body">
                <h4 class="text-left">Be informed that your dues amount TK (}). Please make payment as soon as possible. </h4>
                <a href="<?php echo e(URL::to('/payment')); ?>" class="btn btn-success btn-sm text-center"><i class="fa fa-money"></i> Make Payment </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/_partials/notification-modal.blade.php ENDPATH**/ ?>