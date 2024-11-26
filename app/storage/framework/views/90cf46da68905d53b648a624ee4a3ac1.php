<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="my-5 text-center header-green">タスク登録</h2>

        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                
                <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo e(Form::open(['url' => route('todo.store')])); ?>


                <div class="my-3">
                    <?php echo e(Form::text('title', '', ['class' => 'form-control form-control-lg', 'placeholder' => '例）再配達を頼む'])); ?>

                </div>

                <div class="text-center">
                    <?php echo e(Form::submit('登録する', ['class' => 'btn btn-green px-4'])); ?>

                </div>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/todo/create.blade.php ENDPATH**/ ?>