@extends('layouts')
@section('content')
    <div id="form-wrapper">
        <form action="" method="POST" enctype="multipart/form-data"> 
            <div>
                <input type="text" id="title" name="title" placeholder="blog title">
            </div>
            <div>
                <input type="text" id="description" name="description" placeholder="blog description">
            </div>
            <div>
                <textarea name="content" id="content" placeholder="write blog content" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="file" id="file">
            </div>
            <div class="button" id="button-form">
                Submit
            </div>
        </form>
    </div>
@endsection