<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>catogery</h4>
                    <a href="{{ route('admin.catogery.index') }} " class="btn btn-primary">go back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.catogery.update', $edit_data->id) }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Title*</label>
                                <input type="text" name="title" id="title" class="form-control mt-2"
                                    value="{{ $edit_data->title }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="position">position*</label>
                                <input type="number" name="position" id="position" class="form-control mt-2"
                                    value="{{ $edit_data->position }}">
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="meta_keywords">meta_keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control mt-2"
                                    value="{{ $edit_data->meta_keywords }}">
                            </div>
                            <div class="col-12">
                                <label for="meta_description">meta_description</label>
                                <input type="text" name="meta_description" id="meta_description"
                                    class="form-control mt-2" value="{{ $edit_data->meta_description }}">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="visible">change Visibility</label>
                                <select name="visible" id="show" class=" form-control">
                                    <option value="1" {{ $edit_data->visible == 1 ? 'selected' : '' }}>visible</option>
                                    <option value="0" {{ $edit_data->visible == 0 ? 'selected' : '' }}>Hide</option>
                                </select>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-success mt-2"> update record</button>
                        </div>
                    </form>
                </div>
            </div>
</x-app-layout>
