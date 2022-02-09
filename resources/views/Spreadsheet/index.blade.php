@extends('layouts.app')

@section('content')
    <div class="row container d-flex justify-content-center mt-5">
        <div class="col-7 card p-3 mr-2">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($data) }} --}}
                    @foreach ($data as $d)
                        @if ( $loop->iteration != 1 )
                            <tr>
                                <th scope="row">{{ $loop->iteration - 1 }}</th>
                                <td>{{ $d[0] }}</td>
                                <td>{{ $d[1] }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-4 card p-3 ml-2">
            <form action="/write">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection