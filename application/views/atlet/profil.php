  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <!-- <div class="cover-photo"></div> -->
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="<?=base_url();?>assets/images/avatar/3.jpg" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0"><?=$profil->nama?></h4>
											<p><?=$profil->nama_cabang_olahraga?></p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0"><?=$profil->nama_pelatih?></h4>
											<p>Pelatih</p>
										</div>
										<div class="dropdown ml-auto">
											<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
												<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
												<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
											</ul>
										</div>

                                        <br>
                                        <table class="table">
                                            <tr>
                                                <td>Alamat</td>
                                                <td><?=$profil->alamat?>s</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td><?=$profil->tanggal_lahir?></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat lahir</td>
                                                <td><?=$profil->tempat_lahir?></td>
                                            </tr>
                                            <tr>
                                                <td> <a href="<?=base_url('atlet/ubahProfil')?>" class="btn btn-info btn-xs"> Ubah Profil</a> </td>
                                                <td></td>
                                            </tr>
                                        </table>
									</div>
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
