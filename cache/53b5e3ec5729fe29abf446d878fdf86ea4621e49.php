<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php echo e($page->meta_description ?? $page->siteDescription); ?>">

        <meta property="og:title" content="<?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
        <meta property="og:description" content="<?php echo e($page->siteDescription); ?>" />

        <title><?php echo e($page->siteName); ?><?php echo e($page->title ? ' | ' . $page->title : ''); ?></title>

        <link rel="home" href="<?php echo e($page->baseUrl); ?>">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="<?php echo e($page->siteName); ?> Atom Feed">

        <?php echo $__env->yieldPushContent('meta'); ?>

        <?php if($page->production): ?>
            <!-- Insert analytics code here -->
        <?php endif; ?>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(mix('css/main.css', 'assets/build')); ?>">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-900 text-gray-200 leading-normal font-sans">
        <header class="container mt-2">
            <a href="/" class="pl-4 lg:pl-1 font-thin">
                200 wad 

                <span class="font-semibold">
                    Writers'
                </span>

                spotlight
            </a>
        </header>

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            <?php echo $__env->yieldContent('body'); ?>
        </main>

        <footer class="text-center text-sm mt-2 py-4" role="contentinfo">
            <div class="w-full mb-2">
                Powered by the writers at 
                <a href="https://200wordsaday.com">
                    200wad
                </a>
            </div>

            <div class="w-full mb-4">
                Contact me at 
                <a href="mailto:ich.bin.abe@gmail.com">
                    ich.bin.abe@gmail.com 
                </a>
            </div>

            <div class="w-full">
                Built with 
                    <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">
                        Jigsaw
                    </a>
                and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">
                    Tailwind CSS
                    </a>
            </div>
        </footer>

        <script src="<?php echo e(mix('js/main.js', 'assets/build')); ?>"></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /Users/zdziarska/Sites/spotlight/source/_layouts/master.blade.php ENDPATH**/ ?>