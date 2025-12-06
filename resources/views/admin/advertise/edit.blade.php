

<x-app-layout>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>advertise</h4>
                    <a href="{{ route('admin.advertise.index') }} " class="btn btn-primary">go back</a>
                  </div>
                  <div class="card-body">
                     <form action="{{ route('admin.advertise.update',$advertise->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
       
        
        <div class="col-6">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control mt-2" value="{{ $advertise->image }}" >
            
        </div>
        <div class="col-6">
            <label for="redirect_link">redirect_link</label>
      <input type="text" name="redirect_link" id="redirect_link" class=" form-control mt-2 " value="{{ $advertise->redirect_link ?? old('redirect_link') }}">
        </div>
<div class="col-6">
            <label for="expire_date">expire_date</label>
      <input type="date" name="expire_date" id="expire_date" class=" form-control mt-2 "  value="{{ $advertise->expire_date ?? old('expire_date') }}">
        </div>
      
       <div class="col-6">
            <label for="compony_name">compony_name</label>
      <input type="text"  name="compony_name" id="compony_name" class=" form-control mt-2 "  value="{{ $advertise->company_name ?? old('compony_name') }}">
        </div>
        <div class="col-6">
            <label for="contact">contact</label>
      <input type="text" name="contact" id="contact" class="form-control mt-2"  value="{{ $advertise->contact ?? old('contact') }}">
        </div>
        {{-- <div class="col-12">
            <label for="adposition">ad position</label>
            <select name="adposition" id="adposition"   class="form-control select2">  
             <option value="1"{{ $data->adposition == 1 ? 'selected':'' }}>home</option>
             <option value="0"{{ $data->adposition == 0 ? 'selected':'' }}>popup</option>
            </select>
        </div> --}}
        <button type="submit" class="btn btn-success mt-2">update advertise</button>
        </div>
    </form>
                </div>
            </div>
</x-app-layout>