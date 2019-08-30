<div class="">

    <h2 class="text-xl">
        <a
            href="<?php echo e($post->getUrl()); ?>"
            title="Read more - <?php echo e($post->title); ?>"
            class="font-normal text-gray-500"
        ><?php echo e($post->title); ?></a>
    </h2>

    <p class="mt-1 text-gray-200"><?php echo $post->getExcerpt(150); ?></p>

    
    <aside class="w-full text-right text-xs">
        <p class="mb-1">
            <?php echo e($post->getDate()->format('F j, Y')); ?>

        </p>

        <?php echo e($post->author); ?>

    </aside>
</div>
<?php /**PATH /Users/zdziarska/Sites/spotlight/source/_components/post-preview-inline.blade.php ENDPATH**/ ?>