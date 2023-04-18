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
                    <form action="{{ route('tasks.update', compact(['task'])) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4">Edit Task</h3>
                            <div class="form-floating mb-3">
                                <input type="text" name="title" class="form-control" id="floatingInput"
                                       placeholder="Project title"
                                value="{{ $task->title }}">
                                <label for="floatingInput">Title</label>
                                @error('Task')
                                <p class="alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <x-status-select :current="$task->status" />
                            @error('status')
                            <p class="alert-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3">
                                <textarea type="text" name="description" cols="75" rows="5"
                                          class="form-control" id="floatingInput"
                                          placeholder="Project title"
                                > {{ $task->description }}</textarea>
                                <label for="floatingInput">Description</label>
                                @error('description')
                                <p class="alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add task file</label>
                                <input class="form-control bg-dark" type="file" name="project_file" id="formFile" onchange="hideFile('oldFile')">
                                <p class="mt-2" id="oldFile">{{ $task->project_file }}</p>
                            </div>
                            <button type="submit" class="btn btn-outline-primary m-2">SAVE TASK</button>
                            <a href="{{ route('tasks.show', compact(['task'])) }}" class="btn btn-outline-light m-2">CANCEL</a>
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
