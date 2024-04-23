@extends('ho.ho_layout')
@section('headTitle', 'Dashboard')
@section('pageTitle', 'Dashboard')
@section('user', Auth::guard('Admins')->user()->name)

@section('aside')
<li class="nav-item">
        <a class="nav-link {{(request()->is('Admins/dashboard')) ? 'active' : ''}}" href="{{URL::to('Admins/dashboard')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-bars"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link  (request()->is('HO/profile*')) ? 'active' : ''" href="{{URL::to('HO/profile')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-user-tie"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  (request()->is('your_properties/*')) ? 'active' : ''" href="{{URL::to('your_properties/{National_id}')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-right-to-bracket"></i>
            </div>
            <span class="nav-link-text ms-1">Your Properties</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  (request()->is('sign-out*')) ? 'active' : ''" href="{{URL::to('login')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-right-to-bracket"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
@endsection

@section('dashboardcontent')



@endsection
