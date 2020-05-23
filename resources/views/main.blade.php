@extends('layout')
@section('content')
    <div class="flex min-h-screen bg-gray-100">
        <div class="flex flex-col justify-center items-center w-1/3 pr-2 bg-white zigzag">
            <div class="flex flex-col justify-center h-40 w-40 mb-6 text-center rounded-full shadow-inner bg-gray-200">
                <h1 style="font-family: special" class="text-6xl ">RJ♥L</h1>
            </div>
            <ul>
                <li class="flex my-2 px-3 py-1 rounded-full cursor-pointer" @click="tab = 'welcome'" :class="{ 'bg-blue-200 text-blue-500 shadow-inner': tab === 'welcome' }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                    Welkom
                </li>
                <li class="flex my-2 px-3 py-1 rounded-full cursor-pointer" @click="tab = 'livestream_1'" :class="{ 'bg-blue-200 text-blue-500 shadow-inner': tab === 'livestream_1' }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line>
                    </svg>
                    Huwelijksvoltrekking
                </li>
                <li class="flex my-2 px-3 py-1 rounded-full cursor-pointer" @click="tab = 'livestream_2'" :class="{ 'bg-blue-200 text-blue-500 shadow-inner': tab === 'livestream_2' }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Kerkelijke bevestiging
                </li>
                <li class="flex my-2 px-3 py-1 rounded-full cursor-pointer" @click="tab = 'message'" :class="{ 'bg-blue-200 text-blue-500 shadow-inner': tab === 'message' }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                    Stuur een berichtje
                </li>
            </ul>
        </div>
        <div class="flex w-2/3">
            <div class="flex flex-col justify-center content-center h-full w-full" x-show="tab === 'welcome'">
                @include('tabs.welcome')
            </div>
            <div class="flex flex-col justify-center content-center h-full w-full" x-show="tab === 'livestream_1'">
                @include('tabs.livestream_1')
            </div>
            <div class="flex flex-col justify-center content-center h-full w-full" x-show="tab === 'livestream_2'">
                @include('tabs.livestream_2')
            </div>
            <div class="flex flex-col justify-center content-center h-full w-full" x-show="tab === 'message'">
                @include('tabs.message')
            </div>
        </div>
    </div>
@endsection