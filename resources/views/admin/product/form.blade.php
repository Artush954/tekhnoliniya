<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Создать</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form
        @if (isset($result))
        action="{{ route('admin.product.update',['product'=>$result->id]) }}"
        @else
        action="{{ route('admin.product.store') }}"
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
                <label for="Sub_category">Подкатегория</label>
                <select class="form-control"
                        id="sub_category_id"
                        required
                        name="sub_category_id"
                >
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id}}" {{ isset($result->service_id)&&$result->service_id==$category->id?'selected':''  }} >{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number"
                       name="price"
                       id="price"
                       class="form-control"
                       required
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
                <label for="price">status</label>
                <input type="text"
                       name="status"

                       id="status"
                       class="form-control"
                       required
                       @if($old = old('status'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->status))
                       value="{{ $result->status }}"
                    @endif
                    @endif
                >
            </div>
            <div class="form-group">
                <label for="color Price">Color Price</label>
                <input type="number"
                       name="color_price"

                       id="color_price"
                       class="form-control"
                       required
                       @if($old = old('color_price'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->color_price))
                       value="{{ $result->color_price }}"
                    @endif
                    @endif
                >
            </div>


            <div class="form-group">
                <label for="size">Размери(200x200) </label>
                <select class="form-control"
                        id="size"
                        required
                        name="size_id"
                >
                    @foreach($size as $size)
                        <option
                            value="{{ $size->id}}" {{ isset($result->size_id)&&$result->size_id==$size->id?'selected':''  }} >{{ $size->size }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Количество * шт/м2 </label>
                <input type="number"
                       name="amount"

                       id="amount"
                       class="form-control"
                       required
                       @if($old = old('status'))
                       value="{{ $old }}"
                       @else
                       @if(isset($result->amount))
                       value="{{ $result->amount }}"
                    @endif
                    @endif
                >
            </div>
            <div class="form-group">
                <label for="marka">Марка </label>
                <input type="number"
                       name="marka"

                       id="marka"
                       class="form-control"
                       required
                       @if($old = old('marka'))
                       value="{{ $old }}"
                       @else
                        @if(isset($result->marka))
                        value="{{ $result->marka }}"
                        @else
                       value="500"
                        @endif
                        @endif
                >
            </div>

            <div class="form-group">
                <label for="image">Картинка</label>
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
            <div class="form-group">
                <label for="gallery">Галерея</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" multiple class="custom-file-input" id="gallery" name="gallery[]">
                        <label class="custom-file-label" for="gallery">Choose file Gallery</label>
                    </div>
                </div>
                <div class="row">
                    @if(isset($result))
                        @forelse($result->gallery as $item)
                            <div class="col-1" id="parent-{{ $item->id }}">
                                <div>
                                    <img src="{{ asset('images/gallery/'.$item->image) }}"
                                         style="width: 100%" class="thumbnail" alt="{{ $result->title }}">
                                </div>
                                <div>
                                    <button class="btn btn-danger btn-sm remove-image"
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
