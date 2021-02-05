<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Создать
        </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form
        @if (isset($result))
        action="{{ route('admin.page.update',['page'=>$result->id]) }}"
        @else
        action="{{ route('admin.page.store') }}"
        @endif
        enctype="multipart/form-data"
        method="post"
        autocomplete="off"

    >
        @csrf
        @method(isset($result)?'put' :'post')
        <div class="card-body">
            <div class="form-group">
                <label for="key">Key *</label>
                <select class="form-control"
                        id="key"
                        required
                        name="key"
                >
                    @foreach(['delivery'=>'Доставка','home'=>'Главнвя'] as $key => $val)
                        <option value="{{ $key }}" {{ isset($result)&& $result->key == $key?'selected':'' }}>{{ $val }}</option>
                    @endforeach
                </select>
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
                <label for="description">Description *</label>
                <textarea name="description" class="summernote" id="description">@if($old = old('description'))
                        {{ $old }}
                    @else
                        @if(isset($result->description))
                            {!! $result->description !!}
                        @endif
                    @endif</textarea>
            </div>
            <div class="form-group">
                <label for="meta_keys">Meta keys</label>
                <input type="text"
                       class="form-control"
                       id="meta_keys"
                       placeholder="Meta keys"
                       required
                       name="meta_keys"
                       @if($old = old('meta_keys'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->meta_keys))
                       value="{{ $result->meta_keys }}"
                    @endif
                    @endif
                >
            </div>
            <div class="form-group">
                <label for="meta_desc">Meta desc</label>
                <input type="text"
                       class="form-control"
                       id="meta_desc"
                       placeholder="Meta desc"
                       required
                       name="meta_desc"
                       @if($old = old('meta_desc'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->meta_desc))
                       value="{{ $result->meta_desc }}"
                    @endif
                    @endif
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
