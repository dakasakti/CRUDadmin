
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data Customer</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="cust.edit">
              <div class="modal-body">
                  @method('PUT')
                  {{ csrf_field() }}
                  <div class="mb-3">
                      <label class="col-form-label">Code</label>
                      <input type="text" name="code" class="form-control" required autofocus
                          placeholder="Entry Your Customer Code">
                  </div>
                  <div class="mb-3">
                      <label class="col-form-label">Date</label>
                      <input type="date" name="date" class="form-control" required placeholder="Entry Date Now">
                  </div>
                  <div class="mb-3">
                      <label class="col-form-label">Customer Name</label>
                      <input type="text" name="customer" class="form-control" required
                          placeholder="Entry Your Customer Name">
                  </div>
                  <div class="mb-3">
                      <label class="col-form-label">City</label>
                          <select class="form-select" name="city" required
                          aria-label="Default select example"
                          placeholder="Entry Your Customer City">
                          <option selected> Select City </option>
                          <option value=" Batam Center "> Batam Center </option>
                          <option value=" Batu Aji "> Batu Aji </option>
                          <option value=" Balerang "> Barerang </option>
                          <option value=" Bengkong Laut "> Bengkong Laut </option>
                          <option value=" Bengkong Lama "> Bengkon Lama </option>
                          <option value=" Nagoya "> Nagoya </option>
                      </select>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="liveToastBtn">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>
<td class="text-center">
<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modaledit">
  Edit
</button>
<form action="{{route('cust.destroy',$model->id)}}" method="post" class="d-inline">
  @method('delete')
  @csrf
  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</button>
</form>
</td>