<x-main.layout title="PROJECT">
    <!-- Sidebar Start -->
    <x-main.aside/>
    <!-- Sidebar End -->
    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <x-main.navigation/>
        <!-- Navbar End -->
        <!-- Blank Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h3 class="mb-4">Task #{{ $task->id }} Information (Project #{{ $task->project->id }})</h3>
                        <h6 class="mb-4">Title of Task:</h6>
                        <p>
                            {{ $task->title }}
                        </p>
                        <h6 class="mb-4">Description of Task:</h6>
                        <p>
                            {{ $task->description }}
                        </p>
                        <h6 class="mb-4">Current status:</h6>
                        <p>
                            {{ $task->status }}
                        </p>
                        <h6 class="mb-4">Task documentation:</h6>
                        <a href="#">
                            @if($task->project_file)
                                <a href="{{ route('download', $task->project_file) }}" target="_blank">
                                    {{ $task->project_file }}
                                </a>
                            @else
                                <p>
                                    < -- File is not added -- >
                                </p>
                            @endif
                            <form method="post" action="{{ route('tasks.destroy', compact(['task'])) }}">
                                @csrf
                                @method('delete')
                                <a href="{{ route('tasks.edit', compact(['task'])) }}"
                                   class="btn btn-outline-primary m-2">EDIT</a>
                                <button type="submit" class="btn btn btn-outline-dark m-2">DELETE</button>
                                <a href="{{ route('projects.index')}}" class="btn btn-outline-light m-2">BACK</a>
                            </form>

                    </div>
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
