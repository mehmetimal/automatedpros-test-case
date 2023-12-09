
@extends('parts.layout')
@section('content')
<div class="container mt-5">
    @include('question1.registerForm')
    @include('question1.userTable')
</div>

@endsection
@push('js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ URL::asset ('js/register.js') }}"></script>
@endpush






