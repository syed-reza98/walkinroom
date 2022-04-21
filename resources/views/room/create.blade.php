@extends('layouts.app')

@section('template_title')
    Create Room
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Room</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rooms.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('room.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">


        $(document).ready(function() {

          $(".btn-success").click(function(){
              var html = $(".clone").html();
              $(".increment").after(html);
          });

          $("body").on("click",".btn-danger",function(){
              $(this).parents(".control-group").remove();
          });

        });

    </script>
@endsection
