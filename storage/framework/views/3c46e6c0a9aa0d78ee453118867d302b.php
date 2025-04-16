<!DOCTYPE html>
<html>
<head>
    <title>Tin trong loại</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="display-4">Tin trong loại: <?php echo e($tenLoai); ?></h1>
        <ul class="list-group">
            <?php $__currentLoopData = $tinTrongLoai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <a href="<?php echo e(route('tin', $tin->id)); ?>"><?php echo e($tin->title); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <div class="mt-3">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary me-2">Quay lại trang chủ</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp2\htdocs\PHP3\LAB\LAB2\resources\views/tintrongloai.blade.php ENDPATH**/ ?>