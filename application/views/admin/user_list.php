
      <!-- partial -->
      <div class="main-panel">
       <div class="content-wrapper">
          <div class="page-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">User list</h4>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th>S no. #</th>
                          <th>Created On</th>
                          <th>Full Name</th>
                          <th>User name</th>
                          <th>Account Type</th>
                          <th>Mobile/Email</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($user_list as $value) { ?>
                      <tr>
                          <td><?= $i; ?></td>
                          <td><?= extract_date($value['created_at']); ?></td>
                          <td><?= $value['first_name'].' '.$value['last_name']; ?></td>
                          <td><?= $value['username']; ?></td>
                          <td><?= get_user_role_title($value['user_role_id']); ?></td>
                          <td><?= $value['mobile']; ?></td>
                          <td>
                            <label class="badge badge-info"><?= $value['is_active']; ?></label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
 