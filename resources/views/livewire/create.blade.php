<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modacreate">
    Add
</button>

<!-- Modal Content -->
<div wire:ignore.self class="modal fade" id="modacreate" tabindex="-1" role="dialog"
     aria-labelledby="modalTitleNotify"
     aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="modalTitleNotify">Create Equipment</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model.defer="name">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ip" class="form-label">Ip</label>
                    <input type="text" class="form-control @error('ip') is-invalid @enderror" id="ip" wire:model.defer="ip">

                    @error('ip')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mac" class="form-label">Mac address</label>
                    <input type="text" class="form-control @error('mac') is-invalid @enderror" id="mac" wire:model.defer="mac">

                    @error('mac')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type">Type</label>
                    <select class="form-select @error('type') is-invalid @enderror" aria-label="Default select example"
                            wire:model.defer="type">
                        <option value="VM">VM</option>
                        <option value="Computer">Computer</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Phone">Phone</option>
                        <option value="Switch">Switch</option>
                        <option value="Printer">Printer</option>
                    </select>

                    @error('type')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close_create_modal_btn" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" wire:click="create()">Save</button>
            </div>
        </div>
    </div>
</div>
