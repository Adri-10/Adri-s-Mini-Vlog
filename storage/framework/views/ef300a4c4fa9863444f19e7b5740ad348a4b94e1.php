<?php $__env->startSection('title'); ?>
    Category Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('/')); ?>img/<?php echo e($product['image']); ?>" alt="" height="250" width="250" class="card-img-top"/>
                            <div class="card-body">
                                <h3><?php echo e($product['title']); ?></h3>
                                <p><?php echo e($product['price']); ?></p>
                                <hr/>
                                <a href="<?php echo e(route('detail', ['id'=> $product['id']])); ?>" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web developement\adri\adri-laravel\my-products\resources\views/category.blade.php ENDPATH**/ ?>