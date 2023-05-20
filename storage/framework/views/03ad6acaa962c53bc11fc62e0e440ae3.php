<h1>User List</h1>
<h2>hello <?php echo e($users); ?></h2>

<ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($users->nama); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\Chintya\KULIAH\SMT 6\PEMWEB\Project\petshelter\resources\views/user/index.blade.php ENDPATH**/ ?>