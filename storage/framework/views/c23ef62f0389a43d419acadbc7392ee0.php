

<?php $__env->startSection('title', 'Trang quản trị'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .admin-dashboard {
        background: #fff;
        border-radius: 12px;
        padding: 2.5rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        margin-top: 2rem;
        animation: fadeIn 0.5s ease-in-out;
    }

    .admin-dashboard h1 {
        font-weight: 800;
        font-size: 2.2rem;
        color: #0d6efd;
        margin-bottom: 2rem;
        text-align: center;
    }

    .admin-card {
        background: #f1f3f5;
        border-radius: 10px;
        padding: 1.8rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        text-align: center;
    }

    .admin-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        background-color: #e9ecef;
    }

    .admin-icon {
        font-size: 2.2rem;
        margin-bottom: 0.75rem;
        color: #0d6efd;
    }

    .admin-card h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #212529;
    }

    .admin-card p {
        color: #555;
        margin-bottom: 1rem;
    }

    .btn-primary {
        padding: 0.5rem 1.2rem;
        font-weight: 600;
    }

    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(20px);}
        to {opacity: 1; transform: translateY(0);}
    }
</style>

<div class="container">
    <div class="admin-dashboard">
        <h1>👨‍💼 Bảng điều khiển quản trị</h1>
        <div class="row">
            <!-- Quản lý tin tức -->
            <div class="col-md-4">
                <div class="admin-card">
                    <div class="admin-icon">📰</div>
                    <h4>Quản lý tin tức</h4>
                    <p>Xem, thêm, sửa, xóa các bài viết tin tức.</p>
                    <a href="<?php echo e(route('admin.news')); ?>" class="btn btn-primary">Vào quản lý</a>
                </div>
            </div>

            <!-- Quản lý danh mục -->
            <div class="col-md-4">
                <div class="admin-card">
                    <div class="admin-icon">📂</div>
                    <h4>Quản lý danh mục</h4>
                    <p>Thêm hoặc chỉnh sửa danh mục tin tức.</p>
                    <a href="<?php echo e(route('admin.categories')); ?>" class="btn btn-primary">Vào quản lý</a>
                </div>
            </div>

            <!-- Quản lý người dùng -->
            <div class="col-md-4">
                <div class="admin-card">
                    <div class="admin-icon">👥</div>
                    <h4>Quản lý người dùng</h4>
                    <p>Xem và cập nhật thông tin tài khoản người dùng.</p>
                    <a href="<?php echo e(route('admin.users')); ?>" class="btn btn-primary">Vào quản lý</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php31\ASM2\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>