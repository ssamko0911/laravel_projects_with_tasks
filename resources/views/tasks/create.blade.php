<x-main.layout title="PROJECT">
    <!-- Sidebar Start -->
    <x-main.aside />
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <x-main.navigation/>
        <!-- Navbar End -->

        <!-- Blank Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row vh-100 bg-secondary rounded justify-content-center mx-0">
                <div class="col-sm-12 col-xl-8">
                    <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control bg-dark" type="text" name="project_id"
                               value="{{ $project->id }}" hidden>
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4">Create Task For Project #{{ $project->id }}</h3>
                            <div class="form-floating mb-3">
                                <input type="text" name="title" class="form-control" id="floatingInput"
                                       placeholder="Project title" value="{{ old('title') }}">
                                <label for="floatingInput">Title</label>
                                @error('title')
                                <p class="alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea type="text" cols="58" rows="5" name="description" class="form-control" id="floatingInput"
                                          placeholder="Project title" style="height: 150px;"
                                >{{ old('description') }}</textarea>
                                <label for="floatingInput">Description</label>
                                @error('description')
                                <p class="alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="text" name="status" value="{{ \App\Enums\Status::NEW->value }}" hidden>
                            @error('status')
                            <p class="alert-danger">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add task file</label>
                                <input class="form-control bg-dark" type="file" name="project_file" id="formFile">
                            </div>
                            @error('project_file')
                            <p class="alert-danger">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-outline-primary m-2">CREATE TASK</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-outline-light m-2">CANCEL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Blank End -->

        <!-- Footer Start -->
        <x-main.footer/>
        <!-- Footer End -->
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</x-main.layout>
