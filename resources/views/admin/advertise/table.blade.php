<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Article</h4>
                    <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary"> create advertise</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>image</th>
                                    <th>redirect_linlk</th>
                                    <th>expire date</th>
                                    <th>compony name</th>
                                    <th>contact</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            @foreach ($advertise as $i => $data)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $data->image }}</td>
                                        <td>{{ $data->redirect_link }}</td>
                                        <td>{{ $data->expire_date}}</td>
                                        <td>{{ $data->company_name}}</td>
                                        <td>{{ $data->contact }}</td>
                                        {{-- <td class="text-danger">
                                          @if ($data->ad_postion ==1)
                                            <span class="text-success">Home</span>
                                          @else
                                             <span class="text-danger">poup</span>
                                          @endif
                                        </td> --}}
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('admin.advertise.edit', $data->id) }}"
                                                    class="btn btn-primary">edit</a>
                                                <form action="{{ route('admin.advertise.destroy', $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">delete advertise</button>
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
