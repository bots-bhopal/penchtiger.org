<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/u376743586/domains/penchtiger.org/public_html/@core/resources/views/components/flash-msg.blade.php ENDPATH**/ ?>