@extends('layouts.vuexy')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="menu-icon fa-brands fa-youtube fa-fade"
                                style="color: #ff0000;"></i>{{ _('Comment My Youtube Video') }}</h3>
                        <hr>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#realAccountModal">
                            + Link Post
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Link Video') }}</th>
                                    <th>{{ __('Counter') }}</th>
                                    <th>{{ __('Status') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commentPosts as $realAccount)
                                    <tr>
                                        <td>{{ $realAccount->id }}</td>
                                        <td><a href="{{ $realAccount->username }}">{{ $realAccount->username }}</a></td>
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
            </div>

            <div class="modal fade" id="realAccountModal" tabindex="-1" aria-labelledby="realAccountModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="realAccountModalLabel">Link Post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('real.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Link</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected>Choose One...</option>
                                        <option value="Comment Youtube Video">Comment Youtube Video</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12"
                                        style="
                                    text-align: center;
                                ">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
