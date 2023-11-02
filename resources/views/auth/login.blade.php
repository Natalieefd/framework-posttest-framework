@extends('layouts.global')
@section('content')
<div class="flex justify-center items-center h-screen ">
    <div class="flex flex-col justify-center items-center h-fit py-24 w-5/12 bg-slate-100 rounded-3xl drop-shadow-lg">
        <div>
            <p class="uppercase text-slate-900 font-dela font-medium text-4xl">login</p>
        </div>
        <div class="flex flex-col items-start">
            <form action="{{ route('login.action') }}" method="post" class="w-full flex flex-col items-start">
                <label class="pt-10 pb-3 font-poppins font-medium text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full px-2.5 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-teal-700">
                    
                <label class="pt-5 pb-3 font-poppins font-medium text-gray-700">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-2.5 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-teal-700">
                
                @csrf
                @if (session('error'))
                    <p class="pt-2 text-red-400 text-xs">
                        {{ session('error') }}
                    </p>
                @endif
                
                    <div class="w-full flex justify-between mt-4">
                    <p class="text-sm">
                        Don't have an account?
                        <a href="/register" class="text-blue-600 underline">Regist</a>
                    </p>
    
                </div>
                <button type="submit"
                class="w-full py-2.5 mt-7 text-white font-poppins
                bg-gray-800 rounded-md shadow-md hover:bg-gray-950 ">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
@endSection