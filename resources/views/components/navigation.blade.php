<nav class="bg-teal-950">
    <div class="flex justify-around items-center">
        <a href="#">
            <p class="text-2xl pt-3 text-cream font-dela capitalize">fluffy</p>
            <p class="text-1xl px-14 pb-3 text-cream font-dela ">cafe</p>
        </a>
        <ul class="flex gap-32 text-gray-50 font-medium text-sm uppercase">
            <li><a href="#" class="text-sm font-poppins">Home</a></li>
            <li><a href="#" class="text-sm font-poppins">About</a></li>
            <li><a href="#" class="text-sm font-poppins">Contact</a></li>
        </ul>
        <div class="flex gap-4">
            <a href="#" class=" border-cream border-2 rounded-full">
                <p class="py-2 px-4 text-sm font-poppins font-medium text-cream capitalize">order now</p>
            </a>
            <a href="{{ route('login') }}" class=" bg-cream border-0 rounded-full">
                <p class="py-2 px-4 text-sm font-poppins font-medium text-primary capitalize">login</p>
            </a>
        </div>
    </div>
</nav>
