

<x-app-layout>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>advertise</h4>
                    <a href="{{ route('admin.advertise.index') }} " class="btn btn-primary">go back</a>
                  </div>
                  <div class="card-body">
                     <form action="{{ route('admin.advertise.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
       
        
        <div class="col-6">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control mt-2" >
            
        </div>
        <div class="col-6">
            <label for="redirect_link">redirect_link</label>
      <input type="text" name="redirect_link" id="redirect_link" class=" form-control mt-2 ">
        </div>
<div class="col-6">
            <label for="expire_date">expire_date</label>
      <input type="date" name="expire_date" id="expire_date" class=" form-control mt-2 ">
        </div>
      
       <div class="col-6">
            <label for="compony_name">compony_name</label>
      <input type="text"  name="compony_name" id="compony_name" class=" form-control mt-2 ">
        </div>
        <div class="col-6">
            <label for="contact">contact</label>
      <input type="text" name="contact" id="contact" class="form-control mt-2">
        </div>
        {{-- <div class="col-12">
            <label for="adposition">ad position</label>
            <select name="adposition" id="adposition"   class="form-control select2">  
             <option value="1"{{ $data->adposition == 1 ? 'selected':'' }}>home</option>
             <option value="0"{{ $data->adposition == 0 ? 'selected':'' }}>popup</option>
            </select>
        </div> --}}
        <button type="submit" class="btn btn-success mt-2">create advertise</button>
        </div>
    </form>
                </div>
            </div>
</x-app-layout>