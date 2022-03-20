<div class="modal fade" id="company-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CompanyModal"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="javascript:void(0)" id="CompanyForm">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label class="col-form-label">Code</label>
                        <input type="text" id="code" name="code" class="form-control" required autofocus
                            placeholder="Entry Your Customer Code">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Date</label>
                        <input type="date" id="date" name="date" class="form-control" required placeholder="Entry Date Now">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Customer Name</label>
                        <input type="text" id="customer" name="customer" class="form-control" required
                            placeholder="Entry Your Customer Name">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">City</label>
                        <select class="form-select" id="city" name="city" required>
                            <option disabled selected> Select City </option>
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
                    <button type="submit" class="btn btn-primary" id="btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>