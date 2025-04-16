

<?php $__env->startSection('title', 'Trang chủ'); ?>

<?php $__env->startSection('content'); ?>
<style>
    /* CSS tùy chỉnh để làm giao diện chuyên nghiệp hơn */
    .news-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border: none;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        margin-bottom: 1.5rem;
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .news-card img {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }
    .news-card .card-body {
        padding: 1rem;
    }
    .news-card .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .news-card .card-text {
        color: #666;
        font-size: 0.9rem;
    }
    .news-card .category {
        font-size: 0.8rem;
        color: #007bff;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    .highlight-news {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 2rem;
    }
    .highlight-news img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
    .highlight-news .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        padding: 1rem;
        color: white;
    }
    .highlight-news .overlay h2 {
        font-size: 1.75rem;
        margin-bottom: 0.5rem;
    }
    .highlight-news .overlay .category {
        font-size: 0.9rem;
        color: #ffd700;
    }
    .sidebar-section {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
    .sidebar-section h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #333;
    }
    .sidebar-section a {
        transition: background 0.2s;
        border-radius: 5px;
    }
    .sidebar-section a:hover {
        background: #e9ecef;
    }
</style>

<div class="container mt-4">
    <!-- Tiêu đề -->
    <h1 class="display-4 text-center mb-5" style="font-weight: 700; color: #333;">Tin tức mới nhất</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Bố cục tin tức -->
    <div class="row">
        <!-- Cột chính -->
        <div class="col-lg-8">
            <!-- Tin nổi bật (lấy tin có lượt xem cao nhất) -->
            <?php if(isset($tinNoiBat)): ?>
                <div class="highlight-news">
                    <?php if($tinNoiBat->image): ?>
                        <img src="<?php echo e(Str::startsWith($tinNoiBat->image, ['http://', 'https://']) ? $tinNoiBat->image : asset('storage/' . $tinNoiBat->image)); ?>" alt="Ảnh tin nổi bật">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/800x400?text=Không+có+ảnh" alt="Ảnh tin nổi bật">
                    <?php endif; ?>
                    <div class="overlay">
                        <div class="category">
                            <?php echo e(\App\Models\Category::find($tinNoiBat->category_id)->name ?? 'Không xác định'); ?>

                        </div>
                        <h2>
                            <a href="<?php echo e(route('tin', $tinNoiBat->id)); ?>" class="text-white text-decoration-none">
                                <?php echo e($tinNoiBat->title); ?>

                            </a>
                        </h2>
                        <p class="card-text"><?php echo e(\Carbon\Carbon::parse($tinNoiBat->created_at)->diffForHumans()); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Danh sách tin mới -->
            <div class="row">
                <?php $__currentLoopData = $tatCaTin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                        <div class="news-card">
                            <?php if($tin->image): ?>
                                <img src="<?php echo e(Str::startsWith($tin->image, ['http://', 'https://']) ? $tin->image : asset('storage/' . $tin->image)); ?>" alt="Ảnh tin tức">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/400x200?text=Không+có+ảnh" alt="Ảnh tin tức">
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="category">
                                    <?php echo e(\App\Models\Category::find($tin->category_id)->name ?? 'Không xác định'); ?>

                                </div>
                                <h5 class="card-title">
                                    <a href="<?php echo e(route('tin', $tin->id)); ?>" class="text-decoration-none text-dark">
                                        <?php echo e($tin->title); ?>

                                    </a>
                                </h5>
                                <p class="card-text"><?php echo e(\Carbon\Carbon::parse($tin->created_at)->diffForHumans()); ?></p>
                                <a href="<?php echo e(route('tin', $tin->id)); ?>" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Danh mục tin -->
            <div class="sidebar-section">
                <h4>Danh mục</h4>
                <div class="list-group">
                    <a href="<?php echo e(route('tintrongloai', 1)); ?>" class="list-group-item list-group-item-action">Thể thao</a>
                    <a href="<?php echo e(route('tintrongloai', 2)); ?>" class="list-group-item list-group-item-action">Công nghệ</a>
                    <a href="<?php echo e(route('tintrongloai', 3)); ?>" class="list-group-item list-group-item-action">Giải trí</a>
                </div>
            </div>

            <!-- Tin xem nhiều -->
            <div class="sidebar-section">
                <h4>Tin xem nhiều</h4>
                <div class="list-group">
                    <?php $__currentLoopData = $tinXemNhieu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('tin', $tin->id)); ?>" class="list-group-item list-group-item-action">
                            <?php echo e($tin->title); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp2\htdocs\PHP3\ASM1\resources\views/home.blade.php ENDPATH**/ ?>