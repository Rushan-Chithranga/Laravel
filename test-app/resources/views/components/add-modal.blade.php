
  {{-- @dd($cat) --}}
<!-- Modal -->
<div class="modal fade" id="addcat" tabindex="-1" aria-labelledby="addcatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addcatModalLabel">Add Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/manager/category" method="POST">
            @csrf
            <div class="form-group">
            <label for="">New Category</label>
            <input type="text" class="form-control" name = "cat">
            </div>
            
            
            
  
      <div class="modal-footer">
        <div class="d-flex justify-content-center gap-4">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Submit</button>
           

            
        
        </div>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>










  