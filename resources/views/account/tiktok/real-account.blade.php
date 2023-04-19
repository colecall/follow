@extends('layouts.vuexy')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="menu-icon fa-brands fa-tiktok fa-fade"></i>{{ _('Follow My Tiktok Account') }}</h3>
                        <hr>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#realAccountModal">
                            Register Account
                        </button>
                    </div>
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Username') }}</th>
                                <th>{{ __('Counter') }}</th>
                                <th>{{ __('Status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($realAccounts as $realAccount)
                                <tr>
                                    <td>{{ $realAccount->id }}</td>
                                    <td>{{ $realAccount->username }}</td>
                                    <td>{{ $realAccount->counter }}</td>
                                    <td>
                                        <label class="switch switch-success">
                                            <input type="checkbox" class="switch-input" checked="">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                    <i class="ti ti-check"></i>
                                                </span>
                                                <span class="switch-off">
                                                    <i class="ti ti-x"></i>
                                                </span>
                                            </span>
                                            <span class="switch-label">{{ $fakeAccount->status }}</span>
                                        </label>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="realAccountModal" tabindex="-1" aria-labelledby="realAccountModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="realAccountModalLabel">Register Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('real.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected>Choose One...</option>
                                        <option value="Follow Tiktok Account">Follow Tiktok Account</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
