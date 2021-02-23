<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Создать</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form
        @if (isset($result))
        action="{{ route('admin.about.update',['about'=>$result->id]) }}"
        @else
        action="{{ route('admin.about.store') }}"
        @endif
        enctype="multipart/form-data"
        method="post"
        autocomplete="off"

    >
        @csrf
        @method(isset($result)?'put' :'post')
        <div class="card-body">

            <div class="form-group">
                <label for="title">Название *</label>
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
                <label for="gallery">Галерея</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" multiple class="custom-file-input" id="gallery" name="gallery[]">
                        <label class="custom-file-label" for="gallery">Choose file Gallery</label>
                    </div>
                </div>
                <div class="row">
{{--                    @dd($result->gallery)--}}
                    @if(isset($result))
                        @forelse($result->gallery as $item)
                            <div class="col-1" id="parent-{{ $item->id }}">
                                <div>
                                    <img src="{{ asset('images/gallery/'.$item->image) }}"
                                         style="width: 100%" class="thumbnail" alt="{{ $result->title }}">
                                </div>
                                <div>
                                    <button class="btn btn-danger btn-sm remove-imageAbout"
                                            type="button"
                                            data-id="{{ $item->id }}">Remove
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-3">
                                No images
                            </div>
                        @endforelse
                    @endif
                </div>
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
