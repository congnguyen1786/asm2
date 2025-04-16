

<?php $__env->startSection('title', 'Liên hệ'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .contact-title {
        font-size: 2.2rem;
        font-weight: bold;
        color: #0d6efd;
    }
    .contact-section {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .contact-section h3 {
        color: #343a40;
        font-weight: 600;
    }
    .contact-section .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
    .contact-info li {
        margin-bottom: 0.8rem;
        font-size: 1rem;
    }
    .contact-info i {
        color: #0d6efd;
        margin-right: 0.5rem;
    }
    .map-iframe {
        width: 100%;
        height: 300px;
        border: 0;
        border-radius: 10px;
        margin-top: 1rem;
    }
</style>

<div class="container my-5">
    <h1 class="text-center contact-title mb-4">Liên Hệ Với Chúng Tôi</h1>
    <p class="text-center text-muted mb-5">Bạn có thắc mắc hay cần hỗ trợ? Vui lòng điền vào biểu mẫu dưới đây hoặc liên hệ trực tiếp qua thông tin bên cạnh.</p>

    <div class="row g-4">
        <!-- Form liên hệ -->
        <div class="col-md-6">
            <div class="contact-section">
                <h3 class="mb-4">📬 Gửi tin nhắn</h3>
                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nội dung</label>
                        <textarea name="message" id="message" rows="4" class="form-control" placeholder="Nhập nội dung liên hệ" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Gửi tin nhắn</button>
                </form>
            </div>
        </div>

        <!-- Thông tin liên hệ + bản đồ -->
        <div class="col-md-6">
            <div class="contact-section">
                <h3 class="mb-4">📞 Thông tin liên hệ</h3>
                <ul class="list-unstyled contact-info">
                    <li><i class="bi bi-geo-alt-fill"></i><strong>Địa chỉ:</strong> 123 Đường ABC, Quận X, Thành phố Y</li>
                    <li><i class="bi bi-envelope-fill"></i><strong>Email:</strong> <a href="mailto:cong08633@gmail.com">cong08633@gmail.com</a></li>
                    <li><i class="bi bi-telephone-fill"></i><strong>Điện thoại:</strong> 0987 654 321</li>
                </ul>

                <!-- Bản đồ -->
                <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.5529645790584!2d105.77987237473745!3d19.774138829686017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f98a5d8d886b%3A0x752428b3be1349a8!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1743230834253!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php31\ASM2\resources\views/contact.blade.php ENDPATH**/ ?>