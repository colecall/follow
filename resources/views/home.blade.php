@extends('layouts.vuexy')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Waiting Your Action') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Fake User</th>
                                        <td>Action</td>
                                        <th>Your Real Account</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($waitingList as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->fakeAccount->username }}</td>
                                            @if ($item->realAccount->category === 'Follow Instagram Account')
                                                <td>Follow Your Instagram Account</td>
                                                <td>{{ $item->realAccount->username }}</td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Follback
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Like Instagram Post')
                                                <td>Like Your Instagram Post</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Like Back
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Comment Instagram Post')
                                                <td>Comment Your Instagram Post</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Comment Back
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Likes Tiktok Video')
                                                <td>Like Your Tiktok Video</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Like Back
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Comment Tiktok Video')
                                                <td>Comment Your Tiktok Video</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Comment Back
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Follow Tiktok Account')
                                                <td>Follow Your Tiktok Account</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Follback
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Subscribe Youtube Chanel')
                                                <td>Subscribe Your Youtube Chanel</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Subscribe Back
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Like Youtube Video')
                                                <td>Like Your Youtube Video</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Like Back
                                                    </button></td>
                                            @elseif($item->realAccount->category === 'Comment Youtube Video')
                                                <td>Comment Your Youtube Video</td>
                                                <td><a
                                                        href="{{ $item->realAccount->username }}"></a>{{ $item->realAccount->username }}
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $item->id }}">
                                                        Comment Back
                                                    </button></td>
                                            @endif
                                            <td>{{ $item->status }}</td>
                                        </tr>

                                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Action Back</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('follow.update', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="card text-bg-info">
                                                                <div class="m-3">
                                                                    <b>{{ $item->fakeAccount->User->realAccounts->where('category', $item->realAccount->category)->where('status', 'active')->first()->username }}</b>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $item->fakeAccount->User->realAccounts->where('category', $item->realAccount->category)->where('status', 'active')->first()->id }}"
                                                                    name="real_account_id" aria-label="Username"
                                                                    aria-describedby="basic-addon1" hidden>
                                                            </div>
                                                            <input type="text" value="{{ $item->type }}"
                                                                name="type" hidden>
                                                            <select id="fake_account_id" name="back_id"
                                                                class="form-control @error('fake_account_id') is-invalid @enderror"
                                                                required>
                                                                <option value="">-- Select Fake User --
                                                                    {{ $item->fakeAccount->User->realAccounts->where('category', $item->realAccount->category)->where('status', 'active')->first()->id }}
                                                                </option>
                                                                @foreach ($fakeUsers as $fakeUser)
                                                                    use
                                                                    ($item->fakeAccount->User->realAccounts->where('category',
                                                                    $item->realAccount->category)->where('status',
                                                                    'active')->first()->id)
                                                                    @foreach ($fakeUser->fl as $UserFL)
                                                                        use
                                                                        ($item->fakeAccount->User->realAccounts->where('category',
                                                                        $item->realAccount->category)->where('status',
                                                                        'active')->first()->id)
                                                                        @php
                                                                            if (
                                                                                $item->fakeAccount->User->realAccounts
                                                                                    ->where('category', $item->realAccount->category)
                                                                                    ->where('status', 'active')
                                                                                    ->first()->id === $UserFL->real_account_id &&
                                                                                $UserFL->back_id !== null
                                                                            ) {
                                                                                continue 2;
                                                                            }
                                                                        @endphp
                                                                    @endforeach
                                                                    <option value="{{ $fakeUser->id }}">
                                                                        {{ $fakeUser->username }}</option>
                                                                @endforeach
                                                            </select>
                                                            <button type="submit"
                                                                class="btn btn-primary mt-3">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#fake_account_id').select2();
        });
    </script>
@endsection
