@extends('parts.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                File Upload 
            </div>
            <div class="card-body">
                <form id="uploadForm">
                    <div class="form-group">
                        <label for="image">Choose Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <img src="" id="previewImage" class="img-fluid" style="display: none;" alt="Preview Image">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Image</button>
                </form>

                <div id="errorMessages" class="mt-3"></div>

                <div class="mt-4">
                    
                    <div id="uploadResult">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

    <script type="text/javascript" src="{{ URL::asset ('js/image.js') }}"></script>

@endpush
