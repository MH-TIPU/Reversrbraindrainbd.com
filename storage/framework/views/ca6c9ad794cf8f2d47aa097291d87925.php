<div class="min-h-screen">

    <div class="sm:w-auto mt-4 sm:mt-0 order-last sm:order-none flex items-center justify-center">
        <input wire:model.live.debounce.10ms="search"
            class="w-1/4 relative z-10 bg-transparent h-8 pl-8 pr-8 outline-none cursor-text border-b-2 border-red-500"
            type="text" name="" id="" placeholder="খুঁজুন..." />
        <ion-icon class="text-2xl absolute right-2 top-1 cursor-pointer" name="search-outline"></ion-icon>

    </div>

    <!--[if BLOCK]><![endif]--><?php if($searchResults->count() != 0): ?>
        <div class="container mx-auto my-10 p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $human): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card card-normal bg-base-100 shadow-xl text-sm p-2">
                        <figure class=" flex items-center justify-center">
                            <a href="<?php echo e(route('details', $human->id)); ?>">
                                <img class=" w-32 h-32" src="<?php echo e(asset('img/profile.png')); ?>" alt="Avatar" />
                            </a>
                        </figure>
                        <div class="card-body">
                            <a href="<?php echo e(route('details', $human->id)); ?>">
                                <h2 class="card-title text-md"><?php echo e($human->name); ?> (<?php echo e($human->job); ?>)</h2>



                                <!--[if BLOCK]><![endif]--><?php if($human->education): ?>
                                    <h1 class="flex items-center my-2">
                                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M3 22V2h18v20H3zm2-2h2v-2H5v2zm0-4h2v-2H5v2zm0-4h2V6H5v6zm4 8h2v-2H9v2zm0-4h2v-2H9v2zm0-4h2V6H9v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6z" />
                                        </svg>
                                        <?php echo e(strip_tags(html_entity_decode($human->education))); ?>

                                    </h1>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--><?php if($human->organization2): ?>
                                    <h1 class="flex items-center my-2">
                                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M3 22V2h18v20H3zm2-2h2v-2H5v2zm0-4h2v-2H5v2zm0-4h2V6H5v6zm4 8h2v-2H9v2zm0-4h2v-2H9v2zm0-4h2V6H9v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6z" />
                                        </svg>
                                        <?php echo e(strip_tags(html_entity_decode($human->organization2))); ?>

                                    </h1>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <h1 class="flex items-center my-2">
                                    <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                    </svg>
                                    <?php echo e($human->country); ?>

                                </h1>


                                <div class="flex">
                                    <!--[if BLOCK]><![endif]--><?php if(!empty($human->fb_url)): ?>
                                        <a href="<?php echo e($human->fb_url); ?>" aria-label="Facebook">
                                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h11.495v-9.294H9.691V11.41h3.129V8.799c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.462.099 2.794.144v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.762v2.309h3.59l-.467 3.297h-3.123V24h6.116c.732 0 1.325-.593 1.325-1.324V1.325C24 .593 23.407 0 22.675 0z" />
                                            </svg>
                                        </a>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--><?php if(!empty($human->linkdin_url)): ?>
                                        <a href="<?php echo e($human->linkdin_url); ?>" aria-label="LinkedIn" class="mx-2">
                                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M22.23 0H1.77C.791 0 0 .771 0 1.725v20.547C0 23.229.791 24 1.77 24h20.46C23.209 24 24 23.229 24 22.273V1.725C24 .771 23.209 0 22.23 0zM7.06 20.452H3.561V9.184H7.06v11.268zM5.311 7.726c-1.107 0-2.006-.917-2.006-2.047 0-1.13.899-2.047 2.006-2.047s2.006.917 2.006 2.047c0 1.13-.899 2.047-2.006 2.047zM20.452 20.452h-3.499V14.9c0-1.329-.027-3.045-1.855-3.045-1.855 0-2.14 1.448-2.14 2.946v5.652h-3.498V9.184h3.359v1.533h.048c.469-.887 1.615-1.822 3.326-1.822 3.557 0 4.212 2.344 4.212 5.394v6.163z" />
                                            </svg>
                                        </a>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </a>
                        </div>


                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>

        <?php echo e($searchResults->links('layouts.pagination')); ?>

    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/final codes/ReverseBrainDrain.com/resources/views/livewire/search-people.blade.php ENDPATH**/ ?>