@extends('layouts.app')

@section('template_title')
    Room
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Room') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Hotel Id</th>
										<th>User Id</th>
										<th>Title</th>
                                        {{-- <th>Image</th> --}}
										<th>Description</th>
										<th>Type</th>
										<th>Capacity</th>
										<th>Availability</th>
										<th>Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $room->hotel_id }}</td>
											<td>{{ $room->user_id }}</td>
											<td>{{ $room->title }}</td>
                                            {{-- <td><img src="{{ Storage::url($room->image) }}" height="75" width="75" alt="" /></td> --}}
											<td>{{ $room->description }}</td>
											<td>{{ $room->type }}</td>
											<td>{{ $room->capacity }}</td>
											<td>{{ $room->availability }}</td>
											<td>{{ $room->price }}</td>

                                            <td>
                                                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rooms.show',$room->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rooms.edit',$room->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rooms->links() !!}
            </div>
        </div>
    </div>
@endsection
