<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Post Records
          
    </h6>
  </div>
  <div class="card-body">
  <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
    <th>Post ID</th>
    <th>Post Title</th>
    <th>Post Author</th>
    <th>Post Category</th>
    <th>Post Status</th>
    <th>Post Image</th>
    <th>Post Content</th>
    <th>Post Date</th>
    <th>Post Tags</th>
    <th>Post Comments</th>
    <th>Post Views</th>
    <th>Approve Post</th>
    <th>Unapprove Post</th>
    <th>Edit</th>
    <th>Delete</th>
  </thead>
  <tbody>
  <?php show_posts(); ?>
  </tbody>
            

          </table>
        </div>



