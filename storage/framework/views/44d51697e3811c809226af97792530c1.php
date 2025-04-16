

<?php $__env->startSection('title', 'Quản lý tin tức'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .admin-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 250px;
        background-color: #2c3e50;
        color: #ecf0f1;
        padding-top: 20px;
        position: fixed;
        height: 100%;
        overflow-y: auto;
    }

    .sidebar .sidebar-brand {
        font-size: 1.5rem;
        font-weight: 700;
        padding: 1rem;
        text-align: center;
        color: #fff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar .nav-link {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: #ecf0f1;
        transition: background-color 0.3s;
    }

    .sidebar .nav-link:hover {
        background-color: #34495e;
        color: #fff;
    }

    .sidebar .nav-link.active {
        background-color: #3498db;
        color: #fff;
    }

    .sidebar .nav-link i {
        margin-right: 0.5rem;
    }

    .main-content {
        margin-left: 250px;
        flex: 1;
        padding: 2rem;
        background-color: #f5f6fa;
    }

    .content-header h1 {
        font-weight: 700;
        color: #333;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="admin-wrapper">

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h1>Quản lý tin tức</h1>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <a href="<?php echo e(route('admin.news.create')); ?>" class="btn btn-primary mb-3">Thêm tin tức</a>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Danh mục</th>
                    <th>Ngày đăng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->category->name ?? 'N/A'); ?></td>
                    <td><?php echo e($item->created_at->format('d/m/Y H:i')); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.news.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Sửa</a>
                        <form action="<?php echo e(route('admin.news.delete', $item->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa tin tức này?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center">Không có tin tức nào.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp2\htdocs\PHP3\ASM1\resources\views/admin/news.blade.php ENDPATH**/ ?>