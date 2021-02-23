<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Создать
        </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form
        @if (isset($result))
        action="{{ route('admin.slider.update',['slider'=>$result->id]) }}"
        @else
        action="{{ route('admin.slider.store') }}"
        @endif
        enctype="multipart/form-data"
        method="post"
        autocomplete="off"

    >
        @csrf
        @method(isset($result)?'put' :'post')
        <div class="card-body">
            <div class="form-group">
                <label for="position">Position</label>
                <input type="number"
                       class="form-control"
                       id="poition"
                       name="position"
                       placeholder="Enter position"
                       required
                       @if($old = old('position'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->position))
                       value="{{ $result->position }}"
                    @endif
                    @endif

                >
            </div>
            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text"
                       class="form-control"
                       id="title"
                       placeholder="Enter title"
                       required
                       name="title"
                       @if($old = old('title'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->title))
                       value="{{ $result->title }}"
                    @endif
                    @endif
                >
            </div>
            <div class="form-group">
                <label for="short_text">Short text</label>
                <input type="text"
                       name="short_text"
                       id="short_text"
                       class="form-control"
                       value="{{ old('short_text') }}"
                >
            </div>





            <div class="form-group">
                <label for="image">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
                @if(isset($result->image))
                    <div>
                        <img src="{{ asset('images/'.$result->image) }}" width="150px" alt="{{ $result->title }}">
                    </div>
                @endif
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
