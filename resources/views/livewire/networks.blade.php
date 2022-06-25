<div>
   <div class="d-flex justify-content-between align-items-center">
       <h1>Networks</h1>
        @include('modal._create')
   </div>

    <div class="mt-4 d-flex justify-content-end">
        <div></div>
        <div class="input-group w-25">
            <div class="input-group flex-nowrap">
                <input class="form-control py-2 border-right-0 border"
                       placeholder="search"
                       type="search"
                       value="search"
                       id="example-search-input"
                       wire:model.debounce.100ms="search">
            </div>
        </div>
    </div>

    <table class="table mt-2">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">ip</th>
            <th scope="col">mac</th>
            <th scope="col">type</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
           @foreach($equipments as $equipment)
            <tr>
                <th>{{ $equipment->name }}</th>
                <td>{{ $equipment->ip }}</td>
                <td>{{ $equipment->mac }}</td>
                <td>{{ $equipment->type }}</td>
                <td>
                    @include('modal._edit')
                    @include('modal._delete')
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>

    <div class="pagination pagination-sm mb-0">
        {{ $equipments->links() }}
    </div>
</div>
