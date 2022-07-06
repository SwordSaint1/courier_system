<div class="modal fade" id="add_announcement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Announcement</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-4">
                  <label>Title:</label>
                  <input type="text" name="title" id="title" class="form-control" autocomplete="off">
                </div>
                <div class="col-4">
                  <label>Author</label>
                  <input type="text" name="author" id="author" class="form-control" autocomplete="off">
                </div>
                 <div class="col-4">
                  <label>Post Date:</label>
                  <input type="date" name="date_posted" id="date_posted" class="form-control" value="<?=$server_date_only;?>">
                </div>
                <div class="col-12">
                  <label>Content</label>
                  <textarea id="content" class="form-control" style="height: 300px;" autocomplete="off"> </textarea>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <a href="#" class="btn btn-primary" onclick="submit()">Proceed</a>
      </div>
     
    </div>
  </div>
</div>
