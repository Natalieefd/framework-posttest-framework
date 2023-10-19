<section class="relative h-full flex justify-center py-28 bg-cream">
    <div class="flex flex-col w-full py-28 bg-teal-800">
        <div class="flex flex-col">
            <div class="pb-20 text-3xl font-bold text-cyan-50 font-dela uppercase text-center">fluffy cafe menu</div>
            <div class="flex flex-row">
                <table class="w-full mx-32">
                    <tr>
                        <th class="uppercase text-cyan-50 font-dela text-lg">no</th>
                        <th class="uppercase text-cyan-50 font-dela text-lg">nama</th>
                        <th class="uppercase text-cyan-50 font-dela text-lg">jenis</th>
                        <th class="uppercase text-cyan-50 font-dela text-lg">stok</th>
                        <th class="uppercase text-cyan-50 font-dela text-lg">harga</th>
                    </tr>
                    <tr>
                        <td>
                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th class="text-cyan-50">
                                        <?php echo e($mn->id); ?>

                                    </th>
                                    <th class="text-teal-950">
                                        <?php echo e($mn->nama); ?>

                                    </th>
                                    <th class="text-teal-950">
                                        <?php echo e($mn->kategori->jenis); ?>

                                    </th>
                                    <th class="text-teal-950">
                                        <?php echo e($mn->stok); ?>

                                    </th>
                                    <th class="text-teal-950">
                                        <?php echo e($mn->harga); ?>

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
<?php /**PATH C:\xampp\htdocs\posttest-framework\resources\views/admin/admin_page.blade.php ENDPATH**/ ?>