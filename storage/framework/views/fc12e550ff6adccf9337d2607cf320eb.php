<!--[if BLOCK]><![endif]--><?php if($paginator->hasPages()): ?>
    <nav class="w-full my-12 flex flex-col sm:flex-row justify-center items-center">
        
        <div class="flex flex-wrap justify-center mb-2 sm:mb-0">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <!--[if BLOCK]><![endif]--><?php if(is_string($element)): ?>
                    <span class="mx-1 sm:mx-2 text-sm font-medium"><?php echo e($element); ?></span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                
                <!--[if BLOCK]><![endif]--><?php if(is_array($element)): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!--[if BLOCK]><![endif]--><?php if($page == $paginator->currentPage()): ?>
                            <span class="mx-1 sm:mx-2 text-lg sm:text-xl inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-red-500 bg-gray-100"><?php echo e($page); ?></span>
                        <?php else: ?>
                            <a href="<?php echo e($url); ?>" class="mx-1 sm:mx-2 text-lg sm:text-xl inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"><?php echo e($page); ?></a>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </nav>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/final codes/ReverseBrainDrain.com/resources/views/layouts/pagination.blade.php ENDPATH**/ ?>