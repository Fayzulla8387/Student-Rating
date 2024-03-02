@extends('admin.master')
@section('title', 'Sertifikatlar')
@section('content')
    <div class="row">

        <!-- /.col-md-6 -->
        <div class="col">
            <div class="card">
                @include("admin.certificate.create")
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomi</th>
                            <th>Rasm</th>
                            <th>Sana</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($certificates as $firm)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$firm->name}}</td>
                                <td>
                                    <img src="{{$firm->image}}" alt="" style="height: 200px;">
                                </td>
                                <td>{{$firm->date}}</td>
                                <td class="d-flex">

{{--                                    <button type="button" onclick="edit({{$firm->id}})" class="btn btn-warning"--}}
{{--                                            data-toggle="modal" data-target="#modal-edit">--}}
{{--                                        <i class="fa fa-pen"></i>--}}
{{--                                    </button>--}}


                                    <form action="{{route('certificate.destroy', $firm->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger show_confirm"><i
                                                class="fa fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--                @include("admin.certificate.edit")--}}
            </div>

        </div>
        <!-- /.col-md-6 -->
    </div>
@endsection
@section('custom-scripts')
    <script>

        @if ($message = Session::get('success'))
        toastr.success("{{$message}}");
        @endif

        {{--let firmes =@json($certificates);--}}

        {{--function edit(id) {--}}
        {{--    for (let i = 0; i < firmes.length; i++) {--}}
        {{--        if (id == firmes[i]["id"]) {--}}
        {{--            var firms = firmes[i];--}}
        {{--            console.log(firms);--}}
        {{--            document.getElementById('edit_name').value = firms['name'];--}}
        {{--            document.getElementById('edit_date').value = firms['date'];--}}
        {{--            document.getElementById('edit_id').value = firms['id'];--}}
        {{--            break;--}}
        {{--        }--}}
        {{--    }--}}
        {{--}--}}
    </script>
@endsection
