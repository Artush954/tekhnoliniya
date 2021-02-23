@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function (){

            $('.summernote').summernote({height: 200});

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.remove-image', function (e) {
                e.preventDefault();
                let Id = $(this).data('id');
                let This = $(this)
                $.post('/admin/product/remove/image/',{id:Id},function (res){
                    if(res.status){
                        $('#parent-'+Id).remove()
                    }
                })
            })
        })

    </script>
    <script>
        $(document).ready(function (){

            $('.summernote').summernote({height: 200});

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.remove-imageAbout', function (e) {
                e.preventDefault();
                let Id = $(this).data('id');


                let This = $(this)
                $.post('/admin/about/remove/image/',{id:Id},function (res){
                    if(res.status){
                        $('#parent-'+Id).remove()
                    }
                })
            })
        })

    </script>
@stop
