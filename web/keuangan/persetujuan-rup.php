<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    <?php include "../partial/navbar.php"?>
    <?php include "../partial/mahasiswa-menu-sidebar.php"?>
    <?php include "../partial/mahasiswa-menu-sidebar-monitor.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Persetujuan Pengajuan RUP</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <!-- <a href="#kegiatan-tambah" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-r-15" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah Induk Mata Anggaran</a> -->
              <a href="#unit" class="btn btn-its-1 tx-poppins tx-medium d-flex justify-content-center mg-r-10" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="business-outline" class="mg-y-1 tx-18 mg-r-8"></ion-icon>Unit<ion-icon name="chevron-down" class="mg-y-1 tx-18 mg-l-5"></ion-icon></a>
              <a href="#status-pengajuan" class="btn btn-its-1 tx-poppins tx-medium d-flex justify-content-center mg-r-10" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="document-outline" class="mg-y-1 tx-18 mg-r-8"></ion-icon>Status pengajuan RUP<ion-icon name="chevron-down" class="mg-y-1 tx-18 mg-l-5"></ion-icon></a>
              <a href="#status-persetujuan" class="btn btn-its-1 tx-poppins tx-medium d-flex justify-content-center mg-r-10" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="checkmark-circle-outline" class="mg-y-1 tx-18 mg-r-8"></ion-icon>Status persetujuan RUP<ion-icon name="chevron-down" class="mg-y-1 tx-18 mg-l-5"></ion-icon></a>
              <a href="#status-rba" class="btn btn-its-1 tx-poppins tx-medium d-flex justify-content-center mg-r-10" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="stats-chart-outline" class="mg-y-1 tx-18 mg-r-8"></ion-icon>Status RBA<ion-icon name="chevron-down" class="mg-y-1 tx-18 mg-l-5"></ion-icon></a> 
              <a href="#status-rba" class="btn btn-its-1 tx-poppins tx-medium d-flex justify-content-center mg-r-10" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="filter-outline" class="mg-y-1 tx-18 mg-r-8"></ion-icon>Versi<ion-icon name="chevron-down" class="mg-y-1 tx-18 mg-l-5"></ion-icon></a>              
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover table-borderless" style="width:100%">
                      <thead>
                        <tr>
                          <th class="table-its wd-10p">No</th>
                          <th class="table-its wd-20p">Nama Unit Kerja</th>
                          <th class="table-its wd-20p">Nama Paket Pengadaan</th>
                          <th class="table-its wd-20p" style="text-align: center;">Status Pengajuan RUP</th>
                          <th class="table-its wd-20p">Status Persetujuan RUP</th>
                          <th class="table-its wd-15p">Status RBA</th>
                          <!-- ini ngga ada filter buat ngurutin di pagunya -->
                          <th class="table-its wd-10p">Pagu</th> 
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">1</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">S1 DESAIN PRODUK</p>
                          </td>
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">Pekerjaan Renovasi Ruang Kadep sekdep</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-orange-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Revisi</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-orange-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Revisi SPSPL</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Belum diajukan</span></p>
                          </td>
                          <td class="table-its">                            
                            <p class="mg-b-0">Rp500.000.000,00</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">2</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">S1 TEKNIK INDUSTRI SAL N-2</p>
                          </td>
                          <td class="table-its">
                            <a href="detail-rup.php"><p class="tx-semibold mg-b-0" style="color: #1878F2;">Pengadaan Peralatan Hybrid Class Dept. Teknik Industri</p></a>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Draft</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Belum disetujui admin</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-success-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Telah diajukan</span></p>
                          </td>
                          <td class="table-its">                            
                            <p class="mg-b-0">Rp270.033.500,00</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">3</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">PENGEMBANGAN DIREKTORAT PENGEMBANGAN TEKNOLOGI DAN SISTEM INFORMASI</p>
                          </td>
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">Perpanjangan lisensi profeeder</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Draft</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Belum disetujui admin</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Belum diajukan</span></p>
                          </td>
                          <td class="table-its">                            
                            <p class="mg-b-0">Rp250.000.000,00</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">4</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">S1 TEKNIK ELEKTRO</p>
                          </td>
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">FTEIC-2022-03-DTE-Jasa Konstruksi-Renovasi Kamar Mandi (toilet) Gedung B - Departemen Teknik Elektro FT-EIC ITS</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-danger-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Ditolak</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-danger-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Ditolak pimpinan unit</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-light rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Belum diajukan</span></p>
                          </td>
                          <td class="table-its">                            
                            <p class="mg-b-0">Rp500.000.000,00</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">4</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">S1 MATEMATIKA</p>
                          </td>
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">Renovasi Gallery Ruang Baca Matematika</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-success-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Diterima</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-success-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Disetujui Admin</span></p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0"><span class="badge badge-success-transparent rounded-its-50 tx-poppins tx-semibold tx-12 mg-l-5">Telah diajukan</span></p>
                          </td>
                          <td class="table-its">                            
                            <p class="mg-b-0">Rp193.450.000,00</p>
                          </td>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <div class="modal fade effect-scale" id="kegiatan-edit" tabindex="-1" role="dialog" aria-labelledby="kegiatan-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Kegiatan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
          <div class="modal-body">
              <p class="tx-poppins tx-medium">Informasi Kegiatan</p>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-kegiatan" name="nama" placeholder="Nama Kegiatan" value="Masa Perkuliahan dan Evaluasi" required>
                <label for="nama-kegiatan">Nama Kegiatan</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="jenis-kalender" name="jenis_kalender" aria-label="Floating label select example" required>
                  <option value="">Pilih</option>
                  <option value="1" selected>Kalender Akademik</option>
                </select>
                <label for="jenis-kalender">Jenis Kalender</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="jenis-kegiatan" name="jenis_kegiatan" aria-label="Floating label select example" required>
                  <option value="">Pilih</option>
                  <option value="1" selected>Perkuliahan</option>
                </select>
                <label for="jenis-kegiatan">Jenis Kegiatan</label>
              </div>
              <p class="tx-poppins tx-medium">Tanggal</p>
              <div class="form-row">
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-tgl-awal" name="tgl_awal" aria-label="Floating label select example" required>
                      <option value="">Pilih</option>
                      <option value="0">Tidak ditentukan</option>
                      <option value="7" selected>7</option>
                    </select>
                    <label for="edit-tgl-awal">Tanggal</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-bln-awal" name="bln_awal" aria-label="Floating label select example" required>
                      <option value="">Pilih</option>
                      <option value="2" selected>Februari</option>
                    </select>
                    <label for="edit-bln-awal">Bulan</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-thn-awal" name="thn_awal" aria-label="Floating label select example" required>
                      <option value="">Pilih</option>
                      <option value="2022" selected>2022</option>
                    </select>
                    <label for="edit-thn-awal">Tahun</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12">
                  <p class="tx-poppins tx-medium mg-b-0">Berakhir pada (Opsional)</p>
                  <p class="tx-color-03 tx-13">Hanya untuk kegiatan yang berlangsung lebih dari 1 hari.</p>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-tgl-akhir" name="tgl_akhir" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="0">Tidak ditentukan</option>
                      <option value="17" selected>17</option>
                    </select>
                    <label for="edit-tgl-akhir">Tanggal</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-bln-akhir" name="bln_akhir" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="6" selected>Juni</option>
                    </select>
                    <label for="edit-bln-akhir">Bulan</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-thn-akhir" name="thn_akhir" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="2022" selected>2022</option>
                    </select>
                    <label for="edit-thn-akhir">Tahun</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="kegiatan-hapus" tabindex="-1" role="dialog" aria-labelledby="kegiatan-hapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Kegiatan</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus kegiatan ini?</p>
          </div>
          <form>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>
    <script src="../../lib/select2/js/select2.min.js"></script>
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            lengthMenu: '_MENU_ data/halaman',
            searchPlaceholder: 'Cari',
            sSearch: '',
            zeroRecords: 'Tidak ada data.',
            infoEmpty: 'Tidak ada data.',
            info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
            infoFiltered: '(filtered from _MAX_ total records)',
            paginate: { 'first': '<i class="fas fa-angle-double-left"></i>',
                        'last': '<i class="fas fa-angle-double-right"></i>',
                        'next': '<i class="fas fa-angle-right"></i>',
                        'previous': '<i class="fas fa-angle-left"></i>'
                      },
          },
          responsive: true,
          columnDefs: [
            { orderable: false, targets: -1 }
          ]
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
</html>
