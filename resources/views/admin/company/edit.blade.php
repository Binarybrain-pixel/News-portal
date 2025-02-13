<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Company Edit </h4>

                    <a href="{{ route('company.index') }}" class="btn btn-primary"> Go Back </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('company.update', $company->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="row">
                            <div class=" col-6 mb-3">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{ $company->name }}">
                                @error('name')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3 col-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control"value="{{ $company->email }}">
                                @error('email')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label for="phone">Phone <span class="text-danger">*</span> </label>
                                <input type="tel" name="phone" class="form-control" value="{{ $company->phone }}">
                                @error('phone')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label for="tel">Telephone <span class="text-danger">*</span></label>
                                <input type="tel" name="tel" class="form-control" value="{{ $company->tel }}">
                                @error('tel')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label for="facebook">Facebook </label>
                                <input type="text" name="facebook"
                                    class="form-control"value="{{ $company->facebook }}">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="instagram">Instagram</label>
                                <input type="text" name="instagram"
                                    class="form-control"value="{{ $company->instagram }}">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="logo">Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Update Record</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
