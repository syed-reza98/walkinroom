@extends('layouts.app')

@section('template_title')
    Hotel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hotel') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hotels.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>User Id</th>
										<th>Location Id</th>
										<th>Name</th>
										<th>Description</th>
										<th>Location</th>
										<th>Address</th>
										<th>Star</th>
										<th>Roomquantity</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotels as $hotel)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $hotel->user_id }}</td>
											<td>{{ $hotel->location_id }}</td>
											<td>{{ $hotel->name }}</td>
											<td>{{ $hotel->description }}</td>
											<td>{{ $hotel->location }}</td>
											<td>{{ $hotel->address }}</td>
											<td>{{ $hotel->star }}</td>
											<td>{{ $hotel->roomQuantity }}</td>

                                            <td>
                                                <form action="{{ route('hotels.destroy',$hotel->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hotels.show',$hotel->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hotels.edit',$hotel->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $hotels->links() !!}
            </div>
        </div>
    </div>
@endsection
