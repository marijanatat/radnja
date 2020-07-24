
@extends('layouts.novilay')

@section('nav')

<nav class="flex items-center justify-between flex-wrap bg-black p-6   w-full  pin-t fixed z-10 top-0 mt-0">
    <div class="block lg:hidden">
      <button id="nav-toggle"
        class="flex items-center px-3 py-2  rounded text-gray-600 font-bold border border-red-900  hover:text-red-700 hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0" id="nav-content">
      <ul class="list-reset lg:flex justify-start flex-1 items-center">
        <li class="mr-3">
          <a class="inline-block px-2  lg:px-4 py-2 text-white text-lg  lg:text-2xl hover:no-underline no-underline"
            href="#">Home</a>
        </li>
        <li class="mr-3">
          <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline  py-2 "
            href="#">About me</a>
        </li>
        <li class="mr-3">
          <a class="inline-block px-2  lg:px-4  text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline py-2 "
            href="#">Resume</a>
        </li>
        <li class="mr-3">
          <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline   py-2 "
            href="#">Projects</a>
        </li>
        <li class="mr-3">
          <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline   py-2 "
            href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  @endsection