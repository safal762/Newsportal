<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>catogery</h4>
                    <a href="{{ route('admin.catogery.create') }} " class="btn btn-primary">create catogery</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        position
                                    </th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>visible</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catogery as $catogaries)
                                    <tr>
                                        <td>
                                            {{ $catogaries->position }}
                                        </td>
                                        <td>{{ $catogaries->title }}</td>
                                        <td class="align-middle">
                                            {{ $catogaries->slug }}
                                        </td>
                                        <td>
                                            @if ($catogaries->visible == 1)
                                                <span class="text-success">Visible</span>
                                            @else
                                                <span class="text-danger">Hidden</span>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin.catogery.edit', $catogaries->id) }}"
                                                    class="btn btn-primary">edit</a>
                                                    <form action="{{ route('admin.catogery.destroy',$catogaries->id) }}" method="post">
                                                      @method('delete')
                                                      @csrf
                                                      <button class="btn btn-danger">delete</button>
                                                    </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
