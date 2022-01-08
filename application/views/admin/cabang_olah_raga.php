     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Cabang</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Cabang Olahraga</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Database Cabang Olahraga</h4>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                </div>
                                <div class="table-responsive">
                                    <a href="<?=base_url('admin/cetak_cabang')?>" class="btn btn-success btn-xs" target="_blank"> Cetak</a>
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Cabang Olah Raga</th>
                                                <th>Jumlah Atlet</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;foreach ($cabang as $key => $value): ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_cabang_olahraga?></td>
                                                <td><?=$value->jumlah_atlet?></td>
                                                <td></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
