<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div>
        <!-- Bordered Table -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Judul Artikel" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="header">
                            <h2>
                                Isi Artikel
                                <small>Tulis sesuatu yang keren disini</small>
                            </h2>
                        </div>
                        <!-- Include stylesheet -->
                        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

                        <style rel="text/css">
                            #editor-container {
                                height: 375px;
                            }
                        </style>

                        <!-- Create the editor container -->
                        <div id="editor-container">
                            
                        </div>

                        <!-- Include the Quill library -->
                        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

                        <!-- Initialize Quill editor -->
                        <script>
                        var quill = new Quill('#editor-container', {
                            modules: {
                                toolbar: [
                                [{ header: [1, 2, false] }],
                                ['bold', 'italic', 'underline'],
                                ['image', 'code-block']
                                ]
                            },
                            placeholder: 'Compose an epic...',
                            theme: 'snow'  // or 'bubble'
                            });
                        </script>
                        
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashlayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suryahadi/Coding Project/Data Project/Jangkrik.Online/JurnalisMuda.com/resources/views/dashboard/dashcontent/artikel/create.blade.php ENDPATH**/ ?>