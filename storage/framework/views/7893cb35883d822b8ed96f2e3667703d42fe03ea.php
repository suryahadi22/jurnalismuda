<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div>
        <!-- Bordered Table -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR ARTIKEL
                                <small>Berikut adalah tulisan hebatmu.<br />
                                Tulis terus, dan tunjukkan pada Dunia bahwa kamu JurnalisMuda yang berkualitas.</small>
                            </h2>
                            <div class="header-dropdown m-r-5">
                            <a href="<?php echo e(route('buat_artikel')); ?>" class="btn btn-default waves-effect"><i class="material-icons">add_box</i> <span>Tambah Artikel</span></a>
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><strong>#id</strong></th>
                                        <th><strong>Judul</strong></th>
                                        <th><strong>Penulis</strong></th>
                                        <th><strong>Kategori</strong></th>
                                        <th><strong>Tag</strong></th>
                                        <th><strong>Komentar</strong></th>
                                        <th><strong>Disetujui Oleh</strong>
                                        <th class="text-center" colspan="3"><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $artikel_show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($data->id); ?></th>
                                        <td><?php echo e($data->judul); ?></td>
                                        <td><?php echo e($data->user->full_name); ?></td>
                                        <td><?php echo e($data->kategori_id); ?></td>
                                        <td><em><?php echo e($data->tag_id); ?></em></td>
                                        <td>0</td>
                                        <td>empty</td>
                                        <td><a href="#" class="btn btn-primary"><i class="material-icons">details</i></a></td>
                                        <td><a href="#" class="btn btn-primary"><i class="material-icons">mode_edit</i></a></td>
                                        <td><a href="#" class="btn btn-primary"><i class="material-icons">delete_forever</i></a></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($artikel_show->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashlayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suryahadi/Coding Project/Data Project/Jangkrik.Online/JurnalisMuda.com/resources/views/dashboard/dashcontent/artikel.blade.php ENDPATH**/ ?>