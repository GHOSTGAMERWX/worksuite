<li class="top-notifications">
    <div class="message-center">
        <a href="javascript:;" class="show-all-notifications">
            <div class="user-img">
                <span class="btn btn-circle btn-success"><i class="ti-layout-list-thumb"></i></span>
            </div>
            <div class="mail-contnet">
                <span class="mail-desc m-0"><?php echo e(ucfirst($notification->data['heading'])); ?> - <?php echo app('translator')->getFromJson('email.taskUpdate.subject'); ?>!</span> <span class="time"><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->data['updated_at'])->diffForHumans()); ?></span>
            </div>
        </a>
    </div>
</li>