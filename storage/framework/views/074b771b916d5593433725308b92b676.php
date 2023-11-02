<section class="relative h-full flex justify-center py-28 bg-cream">
    <div class="flex flex-col w-full py-28 bg-teal-700">
        <div class="flex flex-col">
            <div class="pb-14 text-3xl text-cream font-dela uppercase text-center">fluffy cafe staff</div>
            <div class="flex flex-col ml-32">
                <a href="<?php echo e(route('admin.store')); ?>" class="flex p-3 w-fit px-5 bg-teal-950 rounded-xl mr-25 mb-5">
                    <p class="text-seashell font-medium">Add Staff</p>
                </a>
            </div>
                    <div class="flex flex-row">
                <table class="w-full mx-32 bg-teal-800 rounded-2xl">
                        <tr class="bg-teal-900">
                            <th class="uppercase text-cream font-dela text-lg py-5">no</th>
                            <th class="uppercase text-cream font-dela text-lg">username</th>
                            <th class="uppercase text-cream font-dela text-lg">nama</th>
                            <th class="uppercase text-cream font-dela text-lg">jabatan</th>
                            <th class="uppercase text-cream font-dela text-lg">action</th>
                        </tr>
                        <tr>
                            <td>
                                <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th class="text-seashell">
                                        <?php echo e($st->id); ?>

                                    </th>
                                    <th class="text-seashell">
                                        <?php echo e($st->username); ?>

                                    </th>
                                    <th class="text-seashell">
                                        <?php echo e($st->nama); ?>

                                    </th>
                                    <th class="text-seashell">
                                        <?php echo e($st->jabatan); ?>

                                    </th>
                                    <th class="flex gap-2 justify-center text-cream">
                                        <a href="<?php echo e(route('admin.edit', $st->id)); ?>" class="py-2">
                                            <div class="p-2 rounded-lg bg-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </div>
                                        </a>
                                        <form action="<?php echo e(route('admin.delete', $st->id)); ?>" method="POST" class="py-2">
                                            <?php echo csrf_field(); ?>
                                                <button class="p-2 rounded-lg bg-red-500" onclick="return confirm('Yakin Hapus Data?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </button>
                                        </form>
                                    </th>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\GITHUB\framework-posttest-framework\resources\views/components/admin_staff.blade.php ENDPATH**/ ?>