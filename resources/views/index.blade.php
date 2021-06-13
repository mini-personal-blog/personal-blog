@extends('layouts.app')
@section('content')

<!-- static image -->
<div class="w-full py-60 px-6 bg-cover bg-no-repeat bg-center relative z-10 "
    style=" background-image: url('https://www.bourncreative.com/wp-content/uploads/2010/12/grey.jpg') ;">

    <div class="container max-w-4xl mx-auto text-center">

        <h1
            class=" bg-white-600 bg-opacity-100 text-20xl leading-tight md:text-3xl text-center  mb-20 font-extrabold text-gray-50 text-20xl ...">
            This Is My Own Blog</h1>

        <!-- <p
            class=" bg-gray-900 bg-opacity-100 text-md md:text-lg text-center text-white mb-20 font-extrabold text-white-900 text-m pb-2">
            I only write when I’m inspired, so I see to it that I’m inspired every morning at nine o’clock.</p> -->

        <a href="/blog"
            class="w-full px-3 py-4 text-white bg-gray-900 rounded-full focus:bg-gray-600 focus:outline-none">Read My
            Words
        </a>
    </div>

</div>
<div>
    <!-- search form -->
    <!-- <div>
        <div class="p-20">
            <div class="bg-white flex items-center rounded-full shadow-xl">
                <input class="rounded-l-full w-full py-4 px-4 text-gray-700 leading-tight focus:outline-none"
                    id="search" type="text" placeholder="title,category,content....">

                <div class="p-4">
                    <button
                        class="bg-gray-600 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-14 h-14 flex items-center justify-center">
                        search
                    </button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- shining blog -->
    <div>
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://cdn.pixabay.com/photo/2021/03/25/17/42/teapot-6123746_960_720.jpg" width="700" alt="">
            </div>
            <div class="m-auto sm:m-auto text-center w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    WHY I LOVE TEA
                </h2>
                <p class="py-8 text-gray-500 text-s">
                    WHY I LOVE TEA
                </p>
                <p class="font-bold text-gray-600 text-s pb-9 text-left">
                    Most of us remember the first time we rode a bicycle. That moment you looked back and realized
                    nobody was holding it and you were riding it, when you knew it was all you. That rush when you
                    realize a warm feeling is spreading from your chest to the tips of your toes – a feeling you can
                    only describe as being free.
                    <br><br>
                    There exist a million moments like these, ones we want to relive again and again. Keepsakes and
                    rituals are the closest we get to experience a moment like that all over.
                    <br><br>
                    For my parents, one such ritual was sharing a cup of coffee at 7 a.m., every day. Watching them
                    throw their everything into enjoying that moment made me want to experience it too.


                </p>
                <!-- <a href="/blog" class=" bg-gray-600 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Read More
                </a> -->
            </div>
        </div>
    </div>

    <!-- home content -->

    <!-- <div class="w-full px-6 py-12 bg-white">

        <div class="container max-w-4xl mx-auto text-center pb-10">
            <h1 class="text-5xl font-extrabold text-gray-600">
                Last Posts
            </h1>
        </div>

        <div class="container max-w-14xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="https://images.unsplash.com/photo-1523217582562-09d0def993a6?w=800"
                    class="w-full h-64 object-cover mb-6">

                <h2 class="text-xl leading-tight mb-2"> title</h2>
                <p class="mt-3 mx-auto text-sm leading-normal"> description</p>
            </div>
        </div>

    </div> -->

    <!-- content form -->
    <div class="w-full px-100 py-10 text-left bg-gray-300 text-gray-700 leading-normal">
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
                                    <label for="message"
                                        class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your
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
                <!-- <div class="w-full md:w-1-3">
            <h3 class="text-3xl mb-8 text-black leading-tight">
                Lorem ipsum dolor sit amet, consectetur adipisicing.
            </h3>

            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut.</p>
            <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> -->

            </div>
        </div>

    </div>
    @endsection