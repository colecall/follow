@extends('layouts.vuexy')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="menu-icon fa-brands fa-tiktok fa-fade"></i>{{ _('My Fake Account Tiktok') }}</h3>
                        <hr>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#fakeAccountModal">
                            Register Fake Account
                        </button>
                    </div>
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Username') }}</th>
                                <th>{{ __('Status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fakeAccounts as $fakeAccount)
                                <tr>
                                    <td>{{ $fakeAccount->id }}</td>
                                    <td>{{ $fakeAccount->username }}</td>
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

            <div class="modal fade" id="fakeAccountModal" tabindex="-1" aria-labelledby="fakeAccountModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="fakeAccountModalLabel">Register Fake Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('fake.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="social_media" aria-label="Default select example">
                                        <option selected hidden>Social Media...</option>
                                        <option value="Tiktok">Tiktok</option>
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
