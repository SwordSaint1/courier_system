<div class="modal fade" id="update_announcement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Update Announcement</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
              <input type="hidden" name="" id="id_announcement_update">
                <div class="col-4">
                  <label>Title:</label>
                  <input type="text" name="title_update" id="title_update" class="form-control">
                </div>
                <div class="col-4">
                  <label>Author</label>
                  <input type="text" name="author_update" id="author_update" class="form-control">
                </div>
                 <div class="col-4">
                  <label>Post Date:</label>
                  <input type="date" name="date_posted_update" id="date_posted_update" class="form-control">
                </div>
                <div class="col-12">
                  <label>Content</label>
                  <textarea id="content_update" class="form-control" style="height: 300px;"> </textarea>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" onclick="delete_announcement()">Delete Announcement</a>
        <a href="#" class="btn btn-primary" onclick="update_announcement()">Update Announcement</a>
      </div>
     
    </div>
  </div>
</div>
