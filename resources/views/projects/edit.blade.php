<x-main.layout title="PROJECT">
        <!-- Sidebar Start -->
            <x-main.aside />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <x-main.navigation />
            <!-- Navbar End -->

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded justify-content-center mx-0">
                    <div class="col-sm-12 col-xl-8">
                        <form action="{{ route('projects.update', compact(['project'])) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="bg-secondary rounded h-100 p-4">
                                <h3 class="mb-4">Edit Project</h3>
                                <div class="form-floating mb-3">
                                    <input type="text" name="title" class="form-control" id="floatingInput"
                                           value="{{ old($project->title) }}"
                                           placeholder="Project title">
                                    <label for="floatingInput">Title</label>
                                    @error('title')
                                    <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px;"
                                >{{ old($project->description) }}</textarea>
                                    <label for="floatingTextarea">Description</label>
                                    @error('description')
                                    <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" name="start_date" class="form-control" id="floatingInput"
                                           value="{{ $project->start_date }}"
                                           placeholder="Project title">
                                    <label for="floatingInput">Start Date</label>
                                    @error('start_date')
                                    <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" name="end_date" class="form-control" id="floatingInput"
                                           value="{{ $project->end_date }}"
                                           placeholder="Project title">
                                    <label for="floatingInput">End Date</label>
                                    @error('end_date')
                                    <p class="alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-primary m-2">SAVE</button>
                                <a href="{{ route('projects.show', compact(['project'])) }}" class="btn btn-outline-primary m-2">CANCEL</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

            <!-- Footer Start -->
            <x-main.footer />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</x-main.layout>
