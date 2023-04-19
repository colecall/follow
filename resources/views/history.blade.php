@extends('layouts.vuexy')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">{{ __('History Your Action') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Fake User</th>
                                        <td>Action</td>
                                        <th>To</th>
                                        <th>Status</th>
                                        <th>Account</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($history as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->fakeAccount->username }}</td>
                                            <td>
                                                {{ $item->realAccount->category }}
                                            </td>
                                            <td>{{ $item->realAccount->username }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                {{-- {{ $item->fakeAccount->User->realAccounts->where('id', $item->back_id)->first()->username }} --}}
                                                @if ($item->back_id === null)
                                                    Menunggu...
                                                @else
                                                    {{ $item->fakeAccount->where('id', $item->back_id)->first()->username }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
