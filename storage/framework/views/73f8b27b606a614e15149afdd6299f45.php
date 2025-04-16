<header class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <a class="navbar-brand glow-text" href="<?php echo e(route('home')); ?>">tintuc23h</a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link fancy-hover" href="<?php echo e(route('home')); ?>">📰 Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link fancy-hover" href="<?php echo e(route('about')); ?>">💡 Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link fancy-hover" href="<?php echo e(route('contact')); ?>">✉️ Liên hệ</a></li>
            
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->role == 1): ?>
                        <li class="nav-item">
                            <a class="nav-link fancy-hover" href="<?php echo e(route('admin.dashboard')); ?>">🧰 Quản trị</a>
                        </li>
                    <?php endif; ?>
            
                    <li class="nav-item">
                        <a class="nav-link fancy-hover">🙋 <?php echo e(Auth::user()->name); ?></a>
                    </li>
            
                    <li class="nav-item">
                        <form action="<?php echo e(route('logout')); ?>" method="POST" class="logout-form">
                            <?php echo csrf_field(); ?>
                            <button type="button" class="nav-link btn btn-link fancy-hover btn-logout" data-bs-toggle="modal" data-bs-target="#logoutModal">🔒 Đăng xuất</button>
                        </form>
                    </li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link fancy-hover" href="<?php echo e(route('login')); ?>">🚪 Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link fancy-hover btn-glow" href="<?php echo e(route('register')); ?>">🆕 Đăng ký</a></li>
                <?php endif; ?>
            </ul>
            
            
        </div>
    </div>
</header>

<!-- Modal xác nhận đăng xuất -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Xác nhận đăng xuất</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn đăng xuất không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmLogout">Đăng xuất</button>
            </div>
        </div>
    </div>
</div>

<style>
/* 🌈 Navbar với gradient siêu chất */
.custom-navbar {
    background: linear-gradient(45deg,rgb(30, 30, 59), #16213e, #0f3460);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}
.navbar-nav .nav-link {
        color: #ffffff; 
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        color: #ffd700; 
    }

    .btn-glow {
        background-color: #ff5722;
        color: #fff !important;
        border-radius: 8px;
        padding: 5px 12px;
        transition: box-shadow 0.3s ease;
    }

    .btn-glow:hover {
        box-shadow: 0 0 10px #ff5722;
        color: #fff !important;
    }

    .btn-logout {
        color: #ff4d4f !important;
    }

    .btn-logout:hover {
        color: #d9363e !important;
    }

    .navbar {
        background-color: #1f1f1f; /* Màu nền navbar */
    }

/* 🎨 Hiệu ứng logo phát sáng */
.glow-text {
    font-size: 1.8rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
}

/* ✨ Hover đổi màu siêu mượt */
.fancy-hover {
    font-size: 1.2rem;
    padding: 12px 20px;
    color: #fff;
    transition: 0.3s;
    position: relative;
}

.fancy-hover::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: 0;
    left: 0;
    background: linear-gradient(90deg, #ff6a00, #ee0979);
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
}

.fancy-hover:hover {
    color: #ff6a00;
}

.fancy-hover:hover::after {
    transform: scaleX(1);
}

/* 🎭 Nút Đăng ký phát sáng */
.btn-glow {
    background: linear-gradient(45deg, #ff6a00, #ee0979);
    border-radius: 8px;
    font-weight: bold;
    padding: 10px 15px !important;
    transition: all 0.3s ease-in-out;
}

.btn-glow:hover {
    transform: scale(1.1);
    box-shadow: 0px 0px 10px rgba(255, 105, 180, 0.8);
}

/* 🔥 Nút Đăng xuất hiệu ứng ripple */
.btn-logout {
    background: none;
    border: none;
    color: #ff6a00;
    font-weight: bold;
    padding: 10px 15px;
    transition: all 0.3s ease;
}

.btn-logout:hover {
    transform: scale(1.1);
    color: #ff4500;
}

/* 💨 Hiệu ứng fade-in khi scroll */
.custom-navbar {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInDown 0.8s ease-in-out forwards;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<!-- Thêm JavaScript để xử lý modal -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.querySelector('.btn-logout');
    const confirmLogoutButton = document.querySelector('#confirmLogout');
    const logoutForm = document.querySelector('.logout-form');

    if (logoutButton && confirmLogoutButton && logoutForm) {
        confirmLogoutButton.addEventListener('click', function () {
            logoutForm.submit();
        });
    } else {
        console.error('Không tìm thấy một trong các phần tử: logoutButton, confirmLogoutButton, hoặc logoutForm');
    }
});
</script><?php /**PATH C:\xampp\htdocs\php31\ASM2\resources\views/header.blade.php ENDPATH**/ ?>