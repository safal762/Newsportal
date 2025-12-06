

<x-app-layout>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>article</h4>
                    <a href="{{ route('admin.artical.index') }} " class="btn btn-primary">go back</a>
                  </div>
                  <div class="card-body">
                     <form action="{{ route('admin.artical.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <label for="title">Title*</label>
            <input type="text" name="title" id="title" class="form-control mt-2" value="{{ old('title') }}">
            {{-- @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>
        
        <div class="col-6">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control mt-2" >
            {{-- @error('position')
                <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>
        <div class="col-12">
            <label for="description">description</label>
      <textarea name="description" id="description" class=" form-control mt-2 summernote"></textarea>
        </div>

          <div class="col-12">
            <label for="meta_keywords">meta_keywords</label>
      <textarea name="meta_keywords" id="meta_keywords" class=" form-control mt-2"></textarea>
        </div>
      
         <div class="col-6">
            <label for="title_description">title_description</label>
      <input type="text" name="title_description" id="title_description" class="form-control mt-2">
        </div>
        <div class="col-6">
            <label for="writer_name">writer_name</label>
      <input type="text" name="writer_name" id="writer_name" class="form-control mt-2">
        </div>
        <div class="col-12">
            <label for="catogary">select catogries</label>
            <select name="catogery[]" id="catogery" multiple  class="form-control select2">
              @foreach ($catogery as $data)
                <option value="{{ $data->id }}">{{ $data->title }}</option>   
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-2">create article</button>
        </div>
    </form>
                </div>
            </div>
</x-app-layout>