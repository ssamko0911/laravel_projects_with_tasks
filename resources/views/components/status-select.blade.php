<div class="form-floating mb-3">
    <select name="status" id="task_select"
            class="form-select mb-3" aria-label="Default select example">
        <option selected="">Open this select menu</option>
        @foreach(\App\Enums\Status::cases() as $status)
            <option @selected($status->value == old('status', $current)) value="{{ $status->value }}">{{ $status->value }}</option>
        @endforeach
    </select>
    <label for="task_select">Task Status</label>
</div>
