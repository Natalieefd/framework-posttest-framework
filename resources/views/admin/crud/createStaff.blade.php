@extends('layouts.global')
@section('content')
<div class="flex justify-center items-center h-screen bg-cream">
    <div class="flex flex-col justify-center items-center h-fit py-16 w-5/12 bg-teal-800 rounded-3xl drop-shadow-lg">
        <div>
            <p class="uppercase text-seashell font-dela font-medium text-4xl">Add Staff</p>
        </div>
        <div class="flex flex-col items-start">
            <form action="{{route('admin.store')}}" method="post" class="w-full flex flex-col items-start">
                @csrf
                <label class="pt-10 pb-3 font-poppins font-medium text-seashell">Nama</label>
                <input type="text" name="nama" placeholder="Nama"
                    class="w-full px-2.5 py-2 bg-slate-50 rounded-md ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                    
                <label class="pt-5 pb-3 font-poppins font-medium text-seashell">Username</label>
                <input type="text" name="username" placeholder="Username"
                    class="w-full px-2.5 py-2 bg-slate-50 rounded-md ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                    
                <label class="pt-5 pb-3 font-poppins font-medium text-seashell">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-fit pl-2.5 pr-28 py-2 bg-slate-50 rounded-md ring-1 ring-slate-300 focus:outline-none focus:ring-gray-500">
                
                <label class="pt-5 pb-3 font-poppins font-medium text-seashell">Pilih Jabatan</label>
                <select class="block w-full px-2.5 py-2.5 font-poppins bg-slate-50 border-slate-50 text-gray-400 text-sm rounded-md focus:ring-gray-500 focus:border-gray-500">
                    <option selected>Pilih Jabatan</option>
                    <option value="Barista">Barista</option>
                    <option value="Kasir">Kasir</option>
                    <option value="Waiters">Waiters</option>
                </select>
                
                </div>
                <button type="submit"
                class="w-fit px-36 py-2 mt-10 text-white font-poppins
                bg-gray-800 rounded-md shadow-md hover:bg-gray-950 ">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
@endSection