<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modaldelete{{ $equipment->id }}">
    Delete
</button>

<div class="modal fade" id="modaldelete{{ $equipment->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleNotify"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="modalTitleNotify">Delete</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <h2 class="h4 modal-title">Delete Equipment "{{ $equipment->name }}"</h2>

                    <p class="text-center">Do you really want to delete the user?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        id="close_delete_modal_btn">close
                </button>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" wire:click="delete({{ $equipment->id }})">delete</button>
            </div>
        </div>
    </div>
</div>
