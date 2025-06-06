<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12 Image Validation Rules Example Tutorial - ItStuffSolutions.io</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="border p-4 rounded bg-white shadow">
                <h4 class="mb-4 text-center"><img src="{{asset('itstuffsolutions.png')}}" width="50"/>   Laravel 12 Image Validation Rules Example Tutorial - ItStuffSolutions.io</h4>               
                @session('success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ $value }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <img src="{{asset('/uploads/'.session('img'))}}" class="img-fluid" width = "200"/>
                @endsession
                <form action="{{ route('post.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                accept="image/*" name="image"
                                onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('preview').style.display = 'block';">                           
                        </div>
                    </div>
                    <div class="mb-3">
                       @error('image')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <img id="preview" src="" alt="Image preview"
                            style="max-width: 300px; display: block; border: 1px solid #ccc; padding: 5px;display:none;">
                    </div>


                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" ></script>
</body>

</html>
