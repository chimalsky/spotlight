<?php $__env->startSection('body'); ?>
    <?php $__currentLoopData = $posts->where('featured', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <header class="">
            <h1 class="text-sm font-normal">
                Current Feature: 
                <span class="font-semibold">
                    Rosie Odsey
                </span>
            </h1>

        </header>

        <div class="w-full mb-24">
            <?php if($featuredPost->cover_image): ?>
                <img src="<?php echo e($featuredPost->cover_image); ?>" alt="<?php echo e($featuredPost->title); ?> cover image" class="mb-6">
            <?php endif; ?>

            <p class="mt-0 mb-4"><?php echo $featuredPost; ?></p>

            <p class="text-gray-300 text-xs my-2 text-right">
                <?php echo e($featuredPost->getDate()->format('F j, Y')); ?>

            </p>

            <p class="mt-32 italic bg-gray-800 pt-4 pb-4 px-2">
                You can discuss this post here:
                <a href="<?php echo e($featuredPost->postLink()); ?>" title="Read <?php echo e($featuredPost->title); ?>" 
                class="text-gray-200">
                    <?php echo e($featuredPost->title); ?>

                </a>
            </p>

            <?php if($featuredPost->authorBio): ?>
                <p class="text-sm text-gray-400">
                    <?php echo e($featuredPost->authorBio); ?>

                </p>
            <?php endif; ?>
        </div>

        <?php if($loop->last): ?>
            <hr class="border-b border-teal-700 my-6">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <footer class="text-center mt-24">
        Nextup is
        <a href="https://200wordsaday.com/writers/dandelion">
            @Dandelion
        </a>

        in your inbox September 6
    </footer>

    <section class="mt-24">

        <header class="mb-8 text-sm">
            Past Features
        </header>

        <div class="w-full flex flex-wrap mt-4">
            <?php $__currentLoopData = $posts->where('featured', false); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full md:w-1/2 px-4">
                    <?php echo $__env->make('_components.post-preview-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zdziarska/Sites/spotlight/source/index.blade.php ENDPATH**/ ?>