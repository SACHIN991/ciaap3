
  <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Posts</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
             
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
             
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
               
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                      <tr>
                        <?php foreach ($posts as $post) {
                          ?>  
                        
                        <td><?php echo $post['title']?></td>
                      
                        <td><?php echo $post['created_at']?></td>
                        <td><a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['id'] ?>">Edit</a> 
                          <a class="btn btn-danger" href="<?php echo base_url(); ?>posts/delete/<?php echo $post['id'] ?>">Delete</a></td>
                      </tr>
                    <?php }
                    ?>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
