 <!-- UPLOAD HASIL UN-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Upload Hasil UN</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Hasil UN</li>
             <li class="breadcrumb-item active" aria-current="page">Upload Hasil UN</li>
         </ol>
     </div>

     <div class="row">
         <div class="col-lg-6">
             <!-- Form Basic -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Silahkan Upload Dengan Format Excel</h6>
                 </div>
                 <div class="card-body">

                     <div class="form-group">
                         <span class="filename"></span>


                         <form method="post" enctype="multipart/form-data" action="<?= base_url('user_admin/upload') ?>">
                             Pilih File:
                             <input name="userfile" type="file" required="required">
                     </div>
                 </div>

                 <input name="upload" type="submit" value="Import" class="btn btn-primary">
                 </form>

             </div>
         </div>
     </div>


 </div>
 <!---Container Fluid-->
 </div>