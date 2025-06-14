<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title> إضافة تسبيحة جديدة➕</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body dir="rtl" class="container mt-5">
    <h2 class="mb-4 text-center"> إضافة تسبيحة جديدة➕</h2>
    <form method="POST" action="{{ route('tasbeeh.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">اسم التسبيحة:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">إضافة</button>
        <a href="{{ route('tasbeeh.index') }}" class="btn btn-secondary">رجوع</a>
    </form>
</body>
</html>