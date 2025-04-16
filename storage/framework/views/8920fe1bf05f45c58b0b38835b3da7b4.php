<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ - Tất cả tin tức</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Tiêu đề -->
        <h1 class="display-4 text-center mb-4">Tất cả tin tức</h1>

        <!-- Navigation Links -->
        <div class="mb-4">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('xemnhieu')); ?>">Tin xem nhiều</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('tinmoi')); ?>">Tin mới</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Tin trong loại
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo e(route('tintrongloai', 1)); ?>">Thể thao</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('tintrongloai', 2)); ?>">Công nghệ</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('tintrongloai', 3)); ?>">Giải trí</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Danh sách tin tức -->
        <ul class="list-group">
            <?php $__currentLoopData = $tatCaTin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <a href="<?php echo e(route('tin', $tin->id)); ?>" class="text-decoration-none"><?php echo e($tin->title); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp2\htdocs\PHP3\LAB\LAB2\resources\views/home.blade.php ENDPATH**/ ?>