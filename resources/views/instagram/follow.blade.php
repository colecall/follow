@extends('layouts.vuexy')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Follow My Account Instagram') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>From</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($realInstagramAccount as $realUser)
                                    @php
                                        $counting = 0;
                                        $eligibleAccounts = [];
                                        $jatah_akun = $realUser->total_fake_account_dia - $realUser->account_used;
                                        $fakeInstagramShuffle = $fakeInstagram->shuffle();
                                        foreach ($fakeInstagramShuffle as $fakeUser) {
                                            if ($counting >= $realUser->total_fake_account_dia || $counting >= $jatah_akun) {
                                                continue;
                                            }
                                            $counting++;
                                            foreach ($fakeUser->fl as $flUser) {
                                                if ($flUser->real_account_id === $realUser->id) {
                                                    $counting--;
                                                    continue 2;
                                                }
                                            }
                                            array_push($eligibleAccounts, ['id' => $fakeUser->id, 'username' => $fakeUser->username]);
                                        }
                                        if (count($eligibleAccounts) === 0) {
                                            continue;
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $realUser->username }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('follow.follow') }}">
                                                @csrf
                                                <input type="hidden" name="real_account_id" value="{{ $realUser->id }}">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input type="text" value="{{ $realUser->category }}"
                                                            name="type" hidden>
                                                        <select id="fake_account_id"
                                                            class="form-control @error('fake_account_id') is-invalid @enderror"
                                                            name="fake_account_id" required>
                                                            <option value="">-- Select Fake User --</option>

                                                            @foreach ($eligibleAccounts as $eligibleAccount)
                                                                <option value="{{ $eligibleAccount['id'] }}">
                                                                    {{ $eligibleAccount['username'] }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                        @error('fake_account_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Follow
                                            </button>
                                        </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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

@php
    // $dijeson = json_encode($fakeInstagramShuffle);
    // echo "--_count: $counting === $realUser->total_fake_account_dia limit akun _dicoba hitung: ";
    // echo "_--<br />";
    // if ($fakeUser->fl === []) $counting++;
    // echo "mencocokan $flUser->real_account_id dengan $realUser->id <br />";
    // echo "$flUser->real_account_id sama dengan $realUser->id, skip realIG <br />";
    // echo "<option value='$fakeUser->id'>$fakeUser->username</option>";
    // echo "melakukan push $fakeUser->username<br />";
    // echo "<br />$counting eligibel total-".count($eligibleAccounts);
    // echo "<br /><br />";
@endphp
