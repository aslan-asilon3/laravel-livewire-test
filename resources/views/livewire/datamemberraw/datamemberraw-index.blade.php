@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                    <div class="card-header">Data Member</div>

                    <div class="card-body">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}

                        {{-- <h3>Halo <b>{{Auth::user()->name}}</b> !</h3> --}}

                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                        @endif                
                        @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        {{-- @if($updateMembers)
                        @include('livewire.datamember.datamember-update')
                        @else
                        @include('livewire.datamember.datamember-create')
                        @endif --}}
                


                        @livewire('datamemberraw.datamemberraw-table')


            <div>







    </div>
<div>
@endsection
