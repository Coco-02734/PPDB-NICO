 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item">Data Siswa</li>
             <li class="breadcrumb-item active" aria-current="page">Data Alumni</li>
         </ol>
     </div>

     <div class="row">
         <div class="col-lg-12 mb-4">
             <!-- Simple Tables -->
             <div class="card">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                 </div>
                 <div class="table-responsive">
                     <table class="table align-items-center table-flush">
                         <thead class="thead-light">
                             <tr>
                                 <th>NIS</th>
                                 <th>Nama</th>
                                 <th>Tahun Lulus</th>
                                 <th>Status</th>
                                 <th>Universitas</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $koneksi = mysqli_connect("localhost", "root", "", "smainsti_instindo");
                                $no = 1;
                                $data = mysqli_query($koneksi, "select * from data_alumni limit 5");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                 <tr>
                                     <th><?php echo $d['nis']; ?></th>
                                     <th><?php echo $d['nama']; ?></th>
                                     <th><?php echo $d['lulus']; ?></th>
                                     <th><?php echo $d['status']; ?></th>
                                     <th><?php echo $d['univ']; ?></th>
                                     <td>
                                         <a href="<?= base_url('user_admin/hapus_alumni/' .  $d['id']) ?>" class="badge badge-warning"> Hapus </a>

                                     </td>
                                 </tr>
                             <?php
                                }
                                ?>
                         </tbody>
                     </table>
                 </div>
                 <div class="card-footer"></div>
             </div>
         </div>
     </div>
     <!--Row-->
 </div>
 <!---Container Fluid-->
 </div>