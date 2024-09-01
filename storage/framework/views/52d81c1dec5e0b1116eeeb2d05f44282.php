<?php $__env->startSection('title', 'Fibonacci'); ?>

<?php $__env->startSection('content'); ?>
<h1>Masukkan Angka</h1>
<form action="#" method="GET">
    <label for="n">Enter a number (n):</label>
    <input type="text" name="n" id="n" min="1" required>
    <button type="submit">Submit</button>
</form>

<?php if(count($numberDetails) > 0): ?>
    <h2>Hasil</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nomor Urut</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $numberDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($detail['number']); ?></td>
                    <td><?php echo e($detail['result']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNI\SEM 5\PBKK\tugas_1\resources\views/pertemuan1/fibonacci.blade.php ENDPATH**/ ?>