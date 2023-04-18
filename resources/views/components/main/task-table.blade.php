<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Tasks of Project</h6>
{{--            <a class="btn btn-sm btn-primary" href="{{ route('projects.add', compact(['project'])) }}">Create--}}
{{--                Task</a>--}}
            <a href="{{ route('projects.index')}}" class="btn btn-outline-light m-2">BACK</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <tr class="text-white">
                    <th scope="col">Task Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions with Task</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>
                            {{--                                    <a href="{{ route('tasks.index' , ['tasks' => $tasks->where('status', '=', $task->status)]) }}">--}}
                            {{ $task->status }}
                            {{--                                    </a>--}}
                        </td>
                        <td><a class="btn btn-sm btn-primary" href="{{ route('tasks.show', compact(['task'])) }}">Detail</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('tasks.edit', compact(['task'])) }}">Edit</a>
                            <a class="btn btn-sm btn-light" href="#" onclick="submitForm('deleteTask{{ $task->id }}')">Delete</a>
                            <a href="{{ route('projects.index')}}" class="btn btn-sm btn-light">BACK</a>
                        </td>
                    </tr>
                    <form action="{{ route('tasks.destroy', compact(['task'])) }}" method="post" id="deleteTask{{ $task->id }}">
                    @csrf
                    @method('delete')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
