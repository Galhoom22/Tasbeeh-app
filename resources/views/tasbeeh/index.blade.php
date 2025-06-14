<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>🕋 قائمة التسبيحات</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body dir="rtl" class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <h2 class="mb-4 text-center">🕋 قائمة التسبيحات</h2>
    <table class="table table-striped table-bordered table-hover text-center table-responsive">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>التسبيح</th>
                <th>العدد الحالي</th>
                <th>إجمالي العدد</th>
                <th>عمليات</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasbeehs as $index => $tasbeeh)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tasbeeh->name }}</td>
                    <td>{{ $tasbeeh->count }}</td>
                    <td>{{ $tasbeeh->total_count }}</td>
                    <td>
                        <form method="POST" action="{{ route('tasbeeh.increment', $tasbeeh->id) }}" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">+</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">لا يوجد تسبيحات بعد</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>