<?php $__env->startSection('title'); ?>
    Home Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <h1 class="text-center" style="color: #bb2d3b">Welcome to Adri's Page</h1>
                <h2 class="text-center" style="color: #06357a">Featured Products</h2>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 py-4">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('/')); ?>img/<?php echo e($product['image']); ?>" alt="" class="card-img-top"/>
                            <div class="card-body">
                                <h4><?php echo e(substr($product['title'],0,50).'....'); ?></h4>
                                <a href="<?php echo e(route('detail', ['id'=> $product['id']])); ?>" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web developement\adri\adri-laravel\my-products\resources\views/home.blade.php ENDPATH**/ ?>