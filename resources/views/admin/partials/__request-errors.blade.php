@if($errors->any())
    <div class="text-center alert-list">
        <div class="card w-75 mx-auto border-danger">
            @foreach($errors->all() as $error)
                <span class="font-size-15 d-block w-100 my-3">{{ $error }}</span>
            @endforeach
        </div>
    </div>
@endif

<style>
    .alert-list span {
        color: #d20000 !important;
        font-weight: bold;
    }
</style>

