<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết tin</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="display-4"><?php echo e($tin->title); ?></h1>
        <p class="lead"><?php echo e($tin->content); ?></p>
        
        <div class="mt-3">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary me-2">Quay lại trang chủ</a>
            <a href="<?php echo e(route('tintrongloai', $tin->category_id)); ?>" class="btn btn-secondary">Danh sách tin cùng loại</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp2\htdocs\PHP3\LAB\LAB2\resources\views/chitiettin.blade.php ENDPATH**/ ?>