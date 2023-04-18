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
                <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h3 class="mb-4">Project #{{ $project->id }} (created by {{ $project->user->name }})</h3>
                                <h6 class="mb-4">Title of Project:</h6>
                                <p>
                                    {{ $project->title }}
                                </p>
                                <h6 class="mb-4">Description of Project:</h6>
                                <p>
                                    {{ $project->description }}
                                </p>
                                <h6 class="mb-4">Start date of Project:</h6>
                                <p>
                                    {{ $project->start_date }}
                                </p>
                                <h6 class="mb-4">End date of Project:</h6>
                                <p>
                                    {{ $project->end_date }}
                                </p>
                                <form method="post" action="{{ route('projects.destroy', compact(['project'])) }}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('projects.add', compact(['project'])) }}" class="btn btn-outline-primary m-2">Create Project Task</a>
                                    <a href="{{ route('projects.edit', compact(['project'])) }}" class="btn btn-outline-primary m-2">EDIT</a>
                                    <button type="submit" class="btn btn-outline-dark m-2">DELETE</button>
                                    <a href="{{ route('projects.index') }}" class="btn btn-outline-light m-2">BACK</a>
                                </form>
                            </div>
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
