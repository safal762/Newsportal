

<x-app-layout>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>article</h4>
                    <a href="{{ route('admin.artical.index') }} " class="btn btn-primary">go back</a>
                  </div>
                  <div class="card-body">
                     <form action="{{ route('admin.artical.update',$article->id) }}" method="post" enctype="multipart/form-data">
                        @method('patch')
        @csrf
        <div class="row">
        <div class="col-6">
            <label for="title">Title*</label>
            <input type="text" name="title" id="title" class="form-control mt-2" value="{{ $article->title ?? old('title')}}">
             @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror 
        </div>
        
        <div class="col-6">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control mt-2" >
          
        </div>
        <div class="col-12">
            <label for="description">description</label>
      <textarea name="description" id="description" class=" form-control mt-2 summernote">{{ $article->description ?? old('description')}} </textarea>
        </div>

          <div class="col-12">
            <label for="meta_keywords">meta_keywords</label>
      <textarea name="meta_keywords" id="meta_keywords" class=" form-control mt-2">{{  $article->title ?? old('title')}}</textarea>
        </div>
      
         <div class="col-6">
            <label for="title_description">title_description</label>
      <input type="text" name="title_description" id="title_description" class="form-control mt-2" value="{{ $article->title_description ?? old('title_description')}}">
        </div>

        <div class="col-6">
            <label for="writer_name">writer_name</label>
      <input type="text" name="writer_name" id="writer_name" class="form-control mt-2" value="{{ $article->writer_name ?? old('writer_name')}}">
        </div>
        <div class="col-12">
            <label for="catogary">select catogries</label>
            <select name="catogery[]" id="catogery" multiple  class="form-control select2">
              @foreach ($catogery as $data)
                <option value="{{ $data->id }}" {{ $data->id == $article->category_id ? 'selected' : '' }}>{{ $data->title }}</option>   
              @endforeach
            </select>

        </div>
         <div class="col-12 mt-2">
                                <label for="visible">change Visibility</label>
                                <select name="visible" id="show" class=" form-control">
                                    <option value="1" {{ $data->visible == 1 ? 'selected' : '' }}>visible</option>
                                    <option value="0" {{ $data->visible == 0 ? 'selected' : '' }}>Hide</option>
                                </select>
                            </div>
                                <div class="col-12 mt-2">
                                <label for="trending">trending?</label>
                                <select name="trending" id="show" class=" form-control">
                                    <option value="1" {{ $data->trending == 1 ? 'selected' : '' }}>yes</option>
                                    <option value="0" {{ $data->trending == 0 ? 'selected' : '' }}>no</option>
                                </select>
                            </div>
        <button type="submit" class="btn btn-success mt-2">update article</button>
        </div>
    </form>
                </div>
            </div>
</x-app-layout>