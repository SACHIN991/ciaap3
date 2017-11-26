<!-- <h1><?php echo $title ?></h1>

<?php echo validation_errors(); ?>

<div class="container">
	<div class="col-md-5">
		<div class="form-area">  
			<form role="form" action="<?php echo base_url(); ?>posts/save" method="post">
				<br style="clear:both">
				<h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
				<div class="form-group">
					<input type="text" class="form-control" id="title" name="title" placeholder="title" required>
				</div>
				

				<div class="form-group">
					<textarea name="body" class="form-control" type="textarea" id="body" placeholder="body" maxlength="140" rows="7"></textarea>
					<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
				</div>
				<input type="submit" class="btn btn-primary pull-right" name="submit" value="submit">
							</form>

		</div>
	</div>
</div>
 -->
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
                <h3 class="panel-title">Edit Page</h3>
              </div>
              <div class="panel-body">
                <form action="<?php echo base_url(); ?>posts/update/<?php echo $post['id'] ?>" method="post">
                  <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Page Title" value="  <?php echo $post['title'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Page Body</label>
                    <textarea name="body" class="form-control" placeholder="Page Body">
                     <?php echo $post['body'] ?>
                    </textarea>
                  </div>
                
                  <input type="submit" class="btn btn-default" value="Update">
                </form>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
