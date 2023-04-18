<div class="col-sm-12 col-xl-8">
    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        <div class="bg-secondary rounded h-100 p-4">
            <h3 class="mb-4">Create Project</h3>
            <div class="form-floating mb-3">
                <input type="text" name="title" class="form-control" id="floatingInput"
                       placeholder="Project title" value="{{ old('title') }}">
                <label for="floatingInput">Title</label>
                @error('title')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px;"
                                >{{ old('description') }}</textarea>
                <label for="floatingTextarea">Description</label>
                @error('description')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="start_date" class="form-control" id="floatingInput"
                       placeholder="Project title" value="{{ old('start_date') }}">
                <label for="floatingInput">Start Date</label>
                @error('start_date')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="end_date" class="form-control" id="floatingInput"
                       placeholder="Project title" value="{{ old('end_date') }}">
                <label for="floatingInput">End Date</label>
                @error('end_date')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-primary m-2">CREATE</button>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-light m-2">CANCEL</a>
        </div>
    </form>
</div>
