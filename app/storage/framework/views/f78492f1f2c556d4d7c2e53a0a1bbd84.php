<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="my-5 text-center header-green">タスク一覧</h2>

        <div class="text-end">
            <a href="<?php echo e(route('todo.index', ['done' => true])); ?>" class="pe-3 text-decoration-none text-black">
                <strong>
                    完了リスト
                </strong>
            </a>
            |
            <a href="<?php echo e(route('todo.index')); ?>" class="ps-3 pe-3 text-decoration-none text-black">
                <strong>
                    未完了リスト
                </strong>
            </a>
            <a href="<?php echo e(route('todo.create')); ?>" class="btn btn-primary my-3 btn-green">
                <i class="fa-solid fa-circle-plus pe-2"></i>
                <strong>
                    新規登録
                </strong>
            </a>
        </div>

        <div class="row">
            <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mx-auto">
                    <div class="card mb-3">
                        <div class="card-header text-end">
                            <small>
                                <?php echo e(\Carbon\Carbon::parse($todo->created_at)->timezone('Asia/Tokyo')->format('Y/m/d H:i:s')); ?>

                            </small>
                        </div>
                        <div class="card-body">
                            <?php echo e($todo->title); ?>

                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                
                                <a href="<?php echo e(route('todo.edit', $todo->id)); ?>" class="btn btn-orange">
                                    <i class="fa-solid fa-pen pe-2"></i>編集する
                                </a>

                                
                                <?php if($todo->is_done === false): ?>
                                    <?php echo e(Form::open(['url' => route('todo.done', $todo->id), 'method' => 'put'])); ?>

                                    <?php echo Form::button('<i class="fa-regular fa-circle-check pe-2"></i>完了！', ['class' => 'btn btn-blue', 'type' => 'submit']); ?>

                                    <?php echo e(Form::close()); ?>

                                <?php else: ?>
                                    <?php echo e(Form::open(['url' => route('todo.undone', $todo->id), 'method' => 'put'])); ?>

                                    <?php echo Form::button('<i class="fa-solid fa-circle-xmark pe-2"></i>未完了に戻す！', ['class' => 'btn btn-blue', 'type' => 'submit']); ?>

                                    <?php echo e(Form::close()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/todo/index.blade.php ENDPATH**/ ?>