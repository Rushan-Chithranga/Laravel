
  {{-- @dd($cat) --}}
<!-- Modal -->
<div class="modal fade" id="editcat{{$cat ['id']}}" tabindex="-1" aria-labelledby="editcatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editcatModalLabel">Edit Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/manager/category/edit/{{$cat->id}}" method ='POST'>
            @csrf
            <div class="form-group">
            <input type="text" class = 'form-control' value ='{{$cat->name}}' name = 'cat'>
            </div>
  
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" value="Edit" class="btn btn-warning">
      </div>
    </form>
  </div>
    </div>
  </div>
</div>










  