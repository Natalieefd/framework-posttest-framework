<nav class="bg-teal-950">
    <div class="flex justify-around gap-52 items-center">
        <a href="#">
            <p class="text-2xl pt-3 text-cream font-dela capitalize">fluffy</p>
            <p class="text-1xl px-14 pb-3 text-cream font-dela ">cafe</p>
        </a>
        <ul class="flex gap-32 text-cream font-medium text-sm uppercase">
            <li><a href="#" class="text-lg font-poppins uppercase">admin dashboard</a></li>
        </ul>
        <div class="flex items-center gap-10">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f9fafb" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
            </a>
            <a href="#" class=" bg-cream border-0 rounded-full h-9">
                <p class="py-2 px-4 text-sm font-poppins font-medium text-primary capitalize">logout</p>
            </a>
            <div>
                <a href="#" class="flex border-0 rounded-full items-center">
                    <p class="py-2 px-4 text-sm text-cream font-poppins font-medium text-primary capitalize"><?php echo e($nama); ?></p>
                    <img src="<?php echo e(asset($gambar)); ?>" alt="" class="max-h-14 rounded-full">
                </a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\posttest-framework\resources\views/components/navigationAdmin.blade.php ENDPATH**/ ?>