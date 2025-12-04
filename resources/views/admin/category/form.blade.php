<x-app-layout>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>catogery</h4>
                    <a href="{{ route('admin.catogery.index') }} " class="btn btn-primary">go back</a>
                  </div>
                  <div class="card-body">
                     <form action="{{ route('admin.catogery.store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control mt-2">
        </div>
        <div class="col-6" >
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control mt-2">
        </div>
        <div class="col-6">
            <label for="position">position</label>
            <input type="text" name="position" id="position" class="form-control mt-2">
        </div>
        <div class="col-12">
            <label for="meta_keywords">meta_keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control mt-2">
        </div>
         <div class="col-12">
            <label for="meta_description">meta_description</label>
            <input type="text" name="meta_description" id="meta_description" class="form-control mt-2">
        </div>
        <button type="submit" class="btn btn-success mt-2"> save record</button>
        </div>
    </form>
                </div>
            </div>
</x-app-layout>