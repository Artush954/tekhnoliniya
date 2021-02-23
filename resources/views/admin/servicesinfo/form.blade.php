<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Создать
        </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form
        @if (isset($result))
        action="{{ route('admin.servicesInfo.update',['servicesInfo'=>$result->id]) }}"
        @else
        action="{{ route('admin.servicesInfo.store') }}"
        @endif
        enctype="multipart/form-data"
        method="post"
        autocomplete="off"

    >
        @csrf
        @method(isset($result)?'put' :'post')
        <div class="card-body">

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
                <label for="services_id">Services_id</label>
                <select class="form-control"
                        id="services_id"
                        required
                        name="services_id"
                >
                    @foreach($services as $services)
                        <option
                            value="{{ $services->id}}" {{ isset($result->services_id)&&$result->services_id==$services->id?'selected':''  }} >{{ $services->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text"
                       class="form-control"
                       id="price"
                       placeholder="Enter price"
                       required
                       name="price"
                       @if($old = old('price'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->price))
                       value="{{ $result->price }}"
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
