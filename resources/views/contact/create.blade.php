@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')

<div class="w-full px-100 py-20 text-left bg-gray-300 text-gray-700 leading-normal">
    <div class="container max-w-8xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
        <!-- <div> -->
        <div class="sm:grid grid-cols-2 gap-20 w-5/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <div class="w-50 md:w-1-2 pt-0 md:px-5 md:pt-0 h-auto">
                    <img src="https://image.flaticon.com/icons/png/512/54/54996.png"
                        class="container max-w-2xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
                </div>
            </div>
            <div class=" m-auto sm:m-auto text-center w-4/5 block">
                <div class="max-w-md mx-auto my-70 bg-white p-3 rounded-md shadow-sm h-1000">
                    <div class="text-center">
                        <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Contact Us</h1>
                        <p class="text-gray-400 dark:text-gray-400">Fill up the form below to send us a message.</p>
                    </div>
                    <div class="m-7">
                        @if( ! session()->has('message'))
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full
                                    Name</label>
                                <input type="text" name="name" id="name" placeholder="John Doe"
                                    value="{{ old('name') }}" required=""
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                                <div>{{ $errors->first('name') }}</div>
                            </div>

                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email
                                    Address</label>
                                <input type="email" name="email" id="email" placeholder="you@company.com"
                                    value="{{ old('email') }}" required=""
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                                <div>{{ $errors->first('email') }}</div>
                            </div>

                            <div class="mb-6">
                                <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Phone
                                    Number</label>
                                <input type="text" name="phone" id="phone" placeholder="+1 (555) 1234-567"
                                    value="{{ old('phone') }}" required=""
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                                <div>{{ $errors->first('phone') }}</div>
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your
                                    Message</label>
                                <textarea rows="5" name="message" id="message" placeholder="Your Message"
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                    required="">{{ old('message') }}</textarea>
                                <div>{{ $errors->first('message') }}</div>
                            </div>

                            <div class="mb-6">
                                <button type="submit"
                                    class="w-full px-3 py-4 text-white bg-gray-900 rounded-md focus:bg-gray-600 focus:outline-none">Send
                                    Message</button>
                            </div>
                            <p class="text-base text-center text-gray-400" id="result">
                            </p>
                        </form>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection