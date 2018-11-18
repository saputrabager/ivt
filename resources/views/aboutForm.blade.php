@extends('layouts.adm')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <form action="post">
            {{csrf_field()}}
            <div class="form-group">
                <div class="row">
                    <label for="about">About</label>
                    <textarea name="about" id="about" cols="30" rows="10"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection