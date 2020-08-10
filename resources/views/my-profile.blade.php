@extends('layouts.master')

{{-- @section('title', 'My profile') --}}


@section('content')

@component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>My profile</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif
    
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

<div class="products-section container mb-8 md:mb-16">
    <div class="sidebar">
        <ul class="-mt-16">
            <li class="active"><a href="{{ route('users.edit') }}">My profile</a> </li>
            <li class="active"><a href="{{route('orders.index')}}">My orders</a></li>
            
        </ul>
    </div> <!-- end sidebar -->
    <div>
     
            <h1 class="-mt-16 mb-4 font-semibold text-gray-600">My profile</h1>
        

        <div >
            

            <form action="{{ route('users.update') }}" method="POST" >
                {{ csrf_field() }}
                @method('PATCH')
                <div class="form-control ">
                    <input  class="px-2 text-gray-700 " id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Name" required>
                </div>
                <div class="form-control">
                    <input class="px-2 text-gray-700 " id="email" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                </div>
                <div class="form-control">
                    <input class="px-2 text-gray-700 " id="password" type="password" name="password" placeholder="Password">
                    <div class="px-2 -mb-4 mt-1 italic font-sm text-sm text-red-600 ">Leave password blank to keep current password</div>
                </div>
                <div class="form-control mt-1">
                    <input class="px-2 text-gray-700 " id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                </div>
                <div>
                    <button type="submit" class="my-profile-button py-2">Update Profile</button>
                </div>
            </form>
        </div>

        </div> <!-- end products -->
        <div class="md:spacer">

          
        </div>
    </div>
</div>


@endsection

