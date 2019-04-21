<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="<?php echo e(asset('assets_dashboard/images/user.png')); ?>" alt="<?php echo e(auth::user()->full_name); ?>" />
                    </div>
                    <div class="content-area">
                        <h3><?php echo e(auth::user()->full_name); ?></h3>
                        <p><?php echo e(auth::user()->username); ?></p>
                        <p><?php echo e(strtoupper(auth::user()->level_access)); ?></p>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>Jumlah Tulisan</span>
                            <span>1.234</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-lg waves-effect btn-block">Ganti Foto Profil</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#informasi_dasar" aria-controls="home" role="tab" data-toggle="tab">Informasi Dasar</a></li>
                            <li role="presentation"><a href="#ganti_password" aria-controls="settings" role="tab" data-toggle="tab">Ganti Password</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="informasi_dasar">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="full_name" class="col-sm-2 control-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nama Lengkap" value="<?php echo e(Auth::user()->full_name); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputExperience" class="col-sm-2 control-label">Experience</label>

                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <textarea class="form-control" id="InputExperience" name="InputExperience" rows="3" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputSkills" class="col-sm-2 control-label">Skills</label>

                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="ganti_password">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashlayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suryahadi/Coding Project/Data Project/Jangkrik.Online/JurnalisMuda.com/resources/views/dashboard/dashcontent/profil.blade.php ENDPATH**/ ?>