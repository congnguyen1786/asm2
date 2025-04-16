@extends('layouts.app')

@section('title', 'Giới thiệu')

@section('content')
<style>
    .section-title {
        font-size: 2.2rem;
        font-weight: bold;
        color: #0d6efd;
    }
    .intro-section {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .info-card {
        background-color: #ffffff;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        margin-bottom: 1.5rem;
    }
    .info-card h3 {
        color: #0d6efd;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .team-list li {
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    .contact-list li {
        margin-bottom: 0.5rem;
    }
    .contact-list a {
        text-decoration: none;
        color: #0d6efd;
    }
</style>

<div class="container my-5">
    <h1 class="text-center section-title mb-5">Về Trang Tin Tức NewsToday</h1>

    <!-- Giới thiệu chung -->
    <div class="intro-section mb-5">
        <h2 class="mb-3">📢 Cập nhật tin tức mỗi ngày, mọi lúc, mọi nơi!</h2>
        <p>
            NewsToday là nơi bạn có thể tiếp cận thông tin một cách dễ dàng và đáng tin cậy. Chúng tôi mang đến cho bạn những bản tin nóng hổi nhất về xã hội, đời sống, giáo dục, y tế, và nhiều lĩnh vực khác.
            Với giao diện thân thiện và khả năng truy cập nhanh chóng, bạn sẽ không bỏ lỡ bất kỳ thông tin quan trọng nào.
        </p>
    </div>

    <!-- Sứ mệnh & Tầm nhìn -->
    <div class="row">
        <div class="col-md-6">
            <div class="info-card">
                <h3>💡 Sứ mệnh</h3>
                <p>
                    Truyền tải thông tin trung thực, hỗ trợ người dân nắm bắt và hiểu rõ về các vấn đề đang diễn ra trong xã hội hiện đại.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-card">
                <h3>🚀 Tầm nhìn</h3>
                <p>
                    Xây dựng một cộng đồng kết nối bằng thông tin, nơi mọi người đều có thể tiếp cận kiến thức một cách công bằng và minh bạch.
                </p>
            </div>
        </div>
    </div>

    <!-- Đội ngũ -->
    <div class="info-card">
        <h3>👥 Đội ngũ phát triển</h3>
        <p>
            Chúng tôi là một nhóm những người trẻ đam mê báo chí và công nghệ, cùng nhau xây dựng nên nền tảng tin tức đáng tin cậy này.
        </p>
        <ul class="team-list">
            <li><strong>Lê Minh Khôi</strong> - Trưởng nhóm phát triển</li>
            <li><strong>Ngô Thị Lan</strong> - Phóng viên nội dung</li>
            <li><strong>Đặng Hoàng Phúc</strong> - Kỹ thuật viên hệ thống</li>
        </ul>
    </div>

    <!-- Liên hệ -->
    <div class="info-card">
        <h3>📞 Kết nối với chúng tôi</h3>
        <p>Bạn có ý tưởng, góp ý hoặc muốn hợp tác? Hãy liên hệ với chúng tôi!</p>
        <ul class="contact-list">
            <li><strong>Email:</strong> <a href="mailto:cong08633@gmail.com">cong08633@gmail.com</a></li>
            <li><strong>Hotline:</strong> 0987 654 321</li>
            <li><strong>Trụ sở:</strong> 123 Đường ABC, Quận X, Thành phố Y</li>
        </ul>
    </div>
</div>
@endsection
