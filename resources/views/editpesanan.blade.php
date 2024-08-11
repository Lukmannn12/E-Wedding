@extends('layout.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid" style="margin-top: 20px; margin-bottom:20px">
        <div class="container-fluid" style="text-align:center;">
            <h1 class="text-bold" style="font-weight:bold;">Edit Pesanan</h1>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid" style="padding-right: 50px; padding-left:50px;">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updatepesanan', $pemesan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>
                        <div class="col-md-6">
                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                <option value="request" {{ $pemesan->status == 'request' ? 'selected' : '' }}>Request</option>
                                <option value="approved" {{ $pemesan->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="rejected" {{ $pemesan->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
