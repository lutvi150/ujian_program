     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Jadwal</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Jadwal Event</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Database Event</h4>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                </div>
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jadwal</th>
                                                <th>Nama Event</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;foreach ($event as $key => $value): ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->jadwal_event?></td>
                                                <td><?=$value->nama_event?></td>
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
