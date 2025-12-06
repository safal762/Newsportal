<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Article</h4>
                    <a href="{{ route('admin.artical.create') }}" class="btn btn-primary"> create article</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Title</th>
                                    <th>slug</th>
                                    <th>views</th>
                                    <th>visible</th>
                                    <th>trending</th>
                                    <th>writer_name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($articaldata as $i => $data)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->slug }}</td>
                                        <td>{{ $data->views }}</td>
                                        <td> 
                                        @if ($data->visible ==1 )
                                          <span class="text-success">visible</span>
                                        @else
                                          <span class="text-danger">hidden</span>
                                        @endif

                                        </td>
                                        <td class="text-danger">
                                          @if ($data->trending ==1)
                                            <span class="text-success">yes</span>
                                          @else
                                             <span class="text-danger">no</span>
                                          @endif
                                        </td>
                                        <td>{{ $data->writer_name }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('admin.artical.edit', $data->id) }}"
                                                    class="btn btn-primary">edit</a>
                                                <form action="{{ route('admin.artical.destroy', $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">delete artical</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
