<form action="{{ route('tasbeeh.destroy', $tasbeeh->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"
        onclick="return confirm('هل أنت متأكد أنك تريد حذف التسبيحة؟')">
        حذف
    </button>
</form>
