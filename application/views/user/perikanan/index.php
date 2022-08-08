<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><i class="nav-icon fas fa-user">Profile</i></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">My Profile</li>
                        <li class="breadcrumb-item">Profile</li>
					</ol>
                </div>
            </div>
        <div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                        src="<?php echo base_url('./assets/foto/'.$this->session->userdata('image')); ?>" />
                </div>
                <h6 class="text-muted text-center">Admin
                <h5 class="text-muted text-center"><?php echo $this->session->userdata('username'); ?>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                <h6 class="text-muted text-center">Sektor</h6>
                <h5 class="text-muted text-center"><?php echo $this->session->userdata('sektor'); ?>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-9">
            <div class="card">
              <div class="card-header p-1 ">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Identitas</a></li>
                </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="tab-pane" id="settings">
                    <form method="post" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $this->session->userdata('username'); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="password" placeholder="Password" value="<?php echo $this->session->userdata('password'); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSektor" class="col-sm-2 col-form-label">Sektor</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="sektor" placeholder="Sektor" value="<?php echo $this->session->userdata('sektor'); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="level" placeholder="Level" value="<?php echo $this->session->userdata('level'); ?>">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
