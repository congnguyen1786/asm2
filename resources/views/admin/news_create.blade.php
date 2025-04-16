@extends('layouts.app')

@section('title', 'Thêm tin tức')

@section('styles')
<style>
    .admin-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .main-content {
        flex: 1;
        padding: 2rem;
        background-color: #f8f9fa;
        margin: 0 auto;
        max-width: 800px;
    }

    .content-header h1 {
        font-weight: 700;
        color: #0d6efd;
        margin-bottom: 2rem;
        text-align: center;
    }

    .form-label {
        font-weight: 600;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        padding: 0.6rem 1rem;
        box-shadow: none;
        transition: border-color 0.3s;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
    }

    .btn {
        padding: 0.6rem 1.2rem;
        border-radius: 8px;
        font-weight: 600;
    }

    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn + .btn {
        margin-left: 0.5rem;
    }

    textarea {
        resize: vertical;
    }
</style>
@endsection

@section('content')
<div class="admin-wrapper">
    <div class="main-content">
        <div class="content-header">
            <h1>📝 Thêm tin tức mới</h1>
        </div>

        <form action="{{ route('admin.news.store') }}" method="POST">
            @csrf

            <!-- Tiêu đề -->
            <div class="mb-4">
                <label for="title" class="form-label">📰 Tiêu đề bài viết</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Nhập tiêu đề bài viết">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Danh mục -->
            <div class="mb-4">
                <label for="category_id" class="form-label">📂 Danh mục</label>
                <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                    <option value="">-- Chọn danh mục --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nội dung -->
            <div class="mb-4">
                <label for="content" class="form-label">📃 Nội dung bài viết</label>
                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="6" placeholder="Nhập nội dung chi tiết">{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nút -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.news') }}" class="btn btn-secondary">Hủy</a>
                <button type="submit" class="btn btn-primary">Thêm tin tức</button>
            </div>
        </form>
    </div>
</div>
@endsection
