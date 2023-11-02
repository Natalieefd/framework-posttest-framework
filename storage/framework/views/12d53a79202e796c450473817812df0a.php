<nav class="bg-teal-950">
    <div class="flex justify-around gap-52 items-center">
        <a href="/admin/dashboard">
            <p class="text-2xl pt-3 text-cream font-dela capitalize">fluffy</p>
            <p class="text-1xl px-14 pb-3 text-cream font-dela ">cafe</p>
        </a>
        <ul class="flex gap-32 text-cream font-medium text-sm uppercase">
            <li><a href="/admin/dashboard" class="text-lg font-poppins uppercase">admin dashboard</a></li>
        </ul>
        <div class="flex items-center gap-5">
            <div>
                <a href="#" class="flex border-0 rounded-full items-center">
                    <p class="py-2 px-4 text-sm text-cream font-poppins font-medium text-primary capitalize"><?php echo e(Auth::user()->username); ?></p>
                    <img src="<?php echo e(asset($gambar)); ?>" alt="" class="max-h-14 rounded-full">
                </a>
            </div>
            <div class="w-1 h-12 bg-customTeal"></div>
            <a href="<?php echo e(route('logout')); ?>" class="text-cream">
                <svg class="h-6 w-6 text-cream"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" y1="12" x2="9" y2="12" />
                </svg>
            </a>
        </div>
    </div>
</nav>
<?php /**PATH D:\GITHUB\framework-posttest-framework\resources\views/components/navigationAdmin.blade.php ENDPATH**/ ?>