@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" enctype="multipart/form-data" id="fileUploadForm" action="javascript:void(0)" >
                    <div class="col-md-12">
                        <input type="file" name="image" class='file-upload-input'>
                        <img src="" alt="" class="file-upload-preview">
                    </div>
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection