<section class="relative h-full flex justify-center py-28 bg-cream">
    <div class="flex flex-col w-full py-28 bg-teal-800">
        <div class="flex flex-col">
            <div class="pb-14 text-3xl text-teal-950 font-dela uppercase text-center">fluffy cafe staff</div>
            <div class="flex flex-row">
                <table class="w-full mx-32 bg-teal-900 rounded-2xl">
                        <tr>
                            <th class="uppercase text-teal-950 font-dela text-lg py-5">no</th>
                            <th class="uppercase text-teal-950 font-dela text-lg">username</th>
                            <th class="uppercase text-teal-950 font-dela text-lg">nama</th>
                            <th class="uppercase text-teal-950 font-dela text-lg">jabatan</th>
                            <th class="uppercase text-teal-950 font-dela text-lg">action</th>
                        </tr>
                    <tr>
                        <td>
                            @foreach ($staff as $st)
                                <tr>
                                    <th class="text-teal-950">
                                        {{ $st->id }}
                                    </th>
                                    <th class="text-teal-950">
                                        {{ $st->username }}
                                    </th>
                                    <th class="text-teal-950">
                                        {{ $st->nama }}
                                    </th>
                                    <th class="text-teal-950">
                                        {{ $st->jabatan }}
                                    </th>
                                    <th class="flex gap-2 justify-center text-cream">
                                        <a href="#" class="py-2">
                                            <div class="p-2 rounded-lg bg-teal-950">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="#" class="py-2">
                                            <div class="p-2 rounded-lg bg-teal-950">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </div>
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>