@extends('layouts.global')
@section('content')
<div class="flex justify-center items-center h-screen ">
    <div class="flex flex-col justify-center items-center h-fit py-24 w-5/12 bg-slate-100 rounded-3xl drop-shadow-lg">
        <div>
            <p class="uppercase text-slate-900 font-dela font-medium text-4xl">Regist</p>
        </div>
        <div class="flex flex-col items-start">
            <form action="{{ route('register.action') }}" method="post" class="w-full flex flex-col items-start">
                @csrf
                @if (session('error'))
                    <div class="w-full relative">
                        <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                            <p class="text-red-500">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                @endif
                <label class="pt-10 pb-3 font-poppins font-medium text-gray-700">Name</label>
                <input type="text" name="name" placeholder="Name"
                    class="w-full px-2 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                    
                <label class="pt-10 pb-3 font-poppins font-medium text-gray-700">Username</label>
                <input type="text" name="username" placeholder="Username"
                    class="w-full px-2 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                    
                <label class="pt-5 pb-3 font-poppins font-medium text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full px-2 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                    
                <label class="pt-5 pb-3 font-poppins font-medium text-gray-700">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-2 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                
                <label class="pt-5 pb-3 font-poppins font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="confPassword" placeholder="Confirm Password"
                    class="w-full px-2 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                
                <div class="w-full flex justify-between mt-4">
                <p class="text-sm">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-600 underline">Login</a>
                </p>
    
                </div>
                <button type="submit"
                class="w-full py-2 mt-7 text-white font-poppins
                bg-gray-800 rounded-md shadow-md hover:bg-gray-950 ">
                    Regist
                </button>
            </form>
        </div>
    </div>
</div>
@endSection