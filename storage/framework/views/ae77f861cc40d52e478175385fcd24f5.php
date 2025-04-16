

<?php $__env->startSection('title', $tin->title); ?> <!-- Sửa tiêu đề trang cho phù hợp -->

<?php $__env->startSection('content'); ?>
<style>
    /* CSS tùy chỉnh để làm giao diện chi tiết tin chuyên nghiệp */
    .news-detail {
        background: #fff;
        border-radius: 8px;
        padding: 2rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .news-detail img {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
    .news-detail .category {
        font-size: 0.9rem;
        color: #007bff;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    .news-detail .meta-info {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 1rem;
    }
    .news-detail .content {
        line-height: 1.8;
        color: #333;
    }
    .news-detail .btn {
        transition: background 0.2s;
    }
</style>

<div class="container mt-4 mb-5">
    <div class="news-detail">
        <!-- Danh mục -->
        <div class="category">
            <?php echo e(\App\Models\Category::find($tin->category_id)->name ?? 'Không xác định'); ?>

        </div>

        <!-- Tiêu đề -->
        <h1 class="display-5 mb-3" style="font-weight: 600; color: #333;"><?php echo e($tin->title); ?></h1>

        <!-- Thông tin bổ sung: thời gian và lượt xem -->
        <div class="meta-info">
            <span>Đăng vào: <?php echo e(\Carbon\Carbon::parse($tin->created_at)->diffForHumans()); ?></span> | 
            <span>Lượt xem: <?php echo e($tin->views); ?></span>
        </div>

        <!-- Ảnh bài viết -->
        <?php if($tin->image): ?>
            <img src="<?php echo e(Str::startsWith($tin->image, ['http://', 'https://']) ? $tin->image : asset('storage/' . $tin->image)); ?>" alt="Ảnh bài viết">
        <?php else: ?>
            <img src="https://via.placeholder.com/800x400?text=Không+có+ảnh" alt="Ảnh bài viết">
        <?php endif; ?>

        <!-- Nội dung bài viết -->
        <div class="content">
            <p><?php echo e($tin->content); ?></p>
        </div>

        <!-- Nút điều hướng -->
        <div class="mt-4">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary me-2">Quay lại trang chủ</a>
            <a href="<?php echo e(route('tintrongloai', $tin->category_id)); ?>" class="btn btn-secondary">Danh sách tin cùng loại</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp2\htdocs\PHP3\ASM1\resources\views/chitiettin.blade.php ENDPATH**/ ?>