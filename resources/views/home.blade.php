@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
<style>
    .news-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        background: #ffffff;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }
    .news-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .news-card img {
        height: 180px;
        object-fit: cover;
        width: 100%;
    }
    .news-card .card-body {
        padding: 1.2rem;
    }
    .news-card .card-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .news-card .card-text {
        font-size: 0.85rem;
        color: #666;
    }
    .news-card .category {
        font-size: 0.75rem;
        color: #198754;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
    }

    .highlight {
        margin-bottom: 2rem;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
    }
    .highlight img {
        height: 420px;
        object-fit: cover;
        width: 100%;
    }
    .highlight .caption {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 1.5rem;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        color: #fff;
    }
    .highlight .caption h2 {
        font-size: 1.7rem;
        font-weight: bold;
    }
    .highlight .caption .category {
        color: #ffc107;
        font-size: 0.9rem;
    }

    .sidebar-box {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 1.2rem;
        margin-bottom: 2rem;
    }
    .sidebar-box h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #343a40;
    }
    .sidebar-box .list-group-item {
        border: none;
        padding: 0.6rem 1rem;
    }
    .sidebar-box .list-group-item:hover {
        background-color: #e9ecef;
    }
</style>

<div class="container py-4">
    <h1 class="text-center fw-bold mb-5">Tin tức mới nhất</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            @if(isset($tinNoiBat))
                <div class="highlight">
                    <img src="{{ Str::startsWith($tinNoiBat->image, ['http://', 'https://']) ? $tinNoiBat->image : asset('storage/' . $tinNoiBat->image) }}" alt="Ảnh tin nổi bật">
                    <div class="caption">
                        <div class="category">
                            {{ \App\Models\Category::find($tinNoiBat->category_id)->name ?? 'Không xác định' }}
                        </div>
                        <h2>
                            <a href="{{ route('tin', $tinNoiBat->id) }}" class="text-white text-decoration-none">
                                {{ $tinNoiBat->title }}
                            </a>
                        </h2>
                        <p class="mb-0">{{ \Carbon\Carbon::parse($tinNoiBat->created_at)->diffForHumans() }}</p>
                    </div>
                </div>
            @endif

            <div class="row">
                @foreach($tatCaTin as $tin)
                    <div class="col-sm-12 col-md-6">
                        <div class="news-card">
                            <img src="{{ Str::startsWith($tin->image, ['http://', 'https://']) ? $tin->image : asset('storage/' . $tin->image) }}" alt="Ảnh tin">
                            <div class="card-body">
                                <div class="category">
                                    {{ \App\Models\Category::find($tin->category_id)->name ?? 'Không xác định' }}
                                </div>
                                <h5 class="card-title">
                                    <a href="{{ route('tin', $tin->id) }}" class="text-dark text-decoration-none">
                                        {{ $tin->title }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ \Carbon\Carbon::parse($tin->created_at)->diffForHumans() }}</p>
                                <a href="{{ route('tin', $tin->id) }}" class="btn btn-sm btn-outline-success mt-2">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="sidebar-box">
                <h5>Danh mục nổi bật</h5>
                <div class="list-group">
                    <a href="{{ route('tintrongloai', 1) }}" class="list-group-item list-group-item-action">Thể thao</a>
                    <a href="{{ route('tintrongloai', 2) }}" class="list-group-item list-group-item-action">Công nghệ</a>
                    <a href="{{ route('tintrongloai', 3) }}" class="list-group-item list-group-item-action">Giải trí</a>
                </div>
            </div>

            <div class="sidebar-box">
                <h5>Tin được quan tâm</h5>
                <div class="list-group">
                    @foreach($tinXemNhieu as $tin)
                        <a href="{{ route('tin', $tin->id) }}" class="list-group-item list-group-item-action">
                            {{ $tin->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
