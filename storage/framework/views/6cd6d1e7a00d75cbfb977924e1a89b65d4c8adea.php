<?php $__env->startSection('title'); ?>
    Product Detail Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card body">
                        <h1 class="text-center" style="color: #06357a"><?php echo e($product['title']); ?></h1>
                        <hr/>
                        <img src="<?php echo e(asset('/')); ?>img/<?php echo e($product['image']); ?>" alt="" class="w-10 h-10"/>
                        <h1 class="mt-4" style="color: #1a1e21"><?php echo e($product['price']); ?></h1>
                    </div>
                </div>
                <div class="col-6">

                        <p class="mt-4" style="color: #1a1e21"><?php echo e($product['description1']); ?></p>

                        <p class="mt-4" style="color: #1a1e21"><?php echo e($product['description2']); ?></p>


                </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web developement\adri\adri-laravel\my-products\resources\views/detail.blade.php ENDPATH**/ ?>