
<?php $__env->startSection('title' , 'Manajement User'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('register-users')): ?>
                      <a href="<?php echo e(route('register')); ?>"><button type="button" class="btn btn-primary float-left">Register new user</button></a>
                  <?php endif; ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Updated at</th>
      <th scope="col">Roles</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($user->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->updated_at); ?></td>
      <td><?php echo e(implode(',', $user->roles()->get()->pluck('name')->toArray())); ?></td>
      <td><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-users')): ?>
        <a href="<?php echo e(route('admin.users.edit',$user->id)); ?>"><button type="button" class="btn btn-primary float-left">Edit</button></a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-users')): ?>
        <form action="<?php echo e(route('admin.users.destroy',$user)); ?>"method="POST" class="float-left">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
        <?php endif; ?>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views/admin/users/index.blade.php ENDPATH**/ ?>