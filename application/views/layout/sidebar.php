   <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?=base_url('admin')?>">Dashboard</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Data Statistik</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?=base_url('admin/cabangOlahRaga')?>">Cabang Olah Raga</a></li>
                            <li><a href="<?=base_url()?>admin/latihan">Jadwal Latihan</a></li>
                            <li><a href="<?=base_url()?>admin/event"> Jadwal Event</a></li>
                        </ul>
                    </li>
                    <?php elseif ($this->session->userdata('role') == 'atlet'): ?>
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?=base_url('atlet')?>">Dashboard</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Data Statistik</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?=base_url()?>atlet/latihan">Latihan</a></li>
                            <li><a href="<?=base_url()?>atlet/event"> Event</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url('atlet/prestasi')?>" class="has-arrow ai-icon" ><i class="flaticon-381-book"></i>Prestasi</a></li>
                        <?php endif;?>
                </ul>

			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
