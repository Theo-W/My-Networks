@extends('layouts.app')

@livewireScripts
@livewireStyles

@section('content')
    <livewire:networks-livewire/>
@endsection

<script>
    Livewire.on('close_modal_create', function () {
        document.getElementById('close_create_modal_btn').click()
    });
    Livewire.on('close_modal_edit', function () {
        document.getElementById('close_edit_modal_btn').click()
    });
    Livewire.on('close_modal_delete', function () {
        document.getElementById('close_delete_modal_btn').click()
    });
</script>
