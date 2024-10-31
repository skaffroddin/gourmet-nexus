@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <section class="flex gap-10">
        <div>
            <p class="text-6xl font-semibold">Recipe and Meal Plan App with AI</p>
            <p class="mt-20 text-xl">Save time in planning meals according to available ingredients and help users to have a healthy or customized diet.</p>
            <div class="mt-6">
                <button type="button" class="text-white bg-[#171543] font-medium rounded-3xl text-sm px-5 py-2.5 me-2 mb-2">Try for Free</button>
                <button type="button" class="text-white bg-[#B6EC1D] focus:outline-none font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
        <div>
            <img src="https://www.metropolisindia.com/upgrade/blog/upload/2023/04/ezgif.com-gif-maker-32.jpg" alt="Delicious food" class="rounded-xl">
        </div>
    </section>
@endsection
