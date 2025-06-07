@extends('layouts.master')

@section('title')
    @lang('translation.Permissions_List')
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') @lang('translation.User_Management') @endslot
        @slot('title') @lang('translation.Permissions_List') @endslot
    @endcomponent

    <div class="container-fluid">
    </div>
@endsection
