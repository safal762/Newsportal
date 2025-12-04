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
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>hello</td>
                            <td class="align-middle">
                              hello
                            </td>
                            <td>
                              true
                            </td>
                            
                            
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</x-app-layout>
