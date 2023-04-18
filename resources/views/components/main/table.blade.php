<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">All Projects</h6>
            @auth
                <button type="button" class="btn btn-outline-primary m-2 ms-5">
                    <a href="{{ route('projects.create') }}">
                        CREATE PROJECT
                    </a>
                </button>
            @endauth
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <x-table.header/>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td><a class="btn btn-sm btn-primary" href="{{ route('tasks.index', compact(['project'])) }}">Show
                                Tasks</a></td>
                        <td><a class="btn btn-sm btn-primary" href="{{ route('projects.add', compact(['project'])) }}">Create
                                Task</a></td>
                        <td>
                            <form method="post" action="{{ route('projects.destroy', compact(['project'])) }}">
                                @csrf
                                @method('delete')
                                <a class="btn btn-sm btn-primary"
                                   href="{{ route('projects.show', compact(['project'])) }}">Detail</a>
                                <a class="btn btn-sm btn-primary ms-2"
                                   href="{{ route('projects.edit', compact(['project'])) }}">Edit</a>
                                <button type="submit" class="btn btn-sm btn-light m-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
