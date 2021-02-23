<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Создать
        </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form
        @if (isset($result))
        action="{{ route('admin.size.update',['size'=>$result->id]) }}"
        @else
        action="{{ route('admin.size.store') }}"
        @endif
        enctype="multipart/form-data"
        method="post"
        autocomplete="off"

    >
        @csrf
        @method(isset($result)?'put' :'post')
        <div class="card-body">

            <div class="form-group">
                <label for="size">size</label>
                <input type="text"
                       class="form-control"
                       id="size"
                       placeholder="Enter Size"
                       required
                       name="size"
                       @if($old = old('size'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->size))
                       value="{{ $result->size }}"
                    @endif
                    @endif
                >
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            @if(isset($result))
                @include('admin.parts.edit-buttons')
            @else
                @include('admin.parts.create-buttons')
            @endif
        </div>
    </form>
</div>
@include('admin.plugins.summernote')
