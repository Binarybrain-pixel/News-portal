<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Categroy Create </h4>

                    <a href="{{ route('category.index') }}" class="btn btn-primary"> Go Back </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class=" col-6 mb-3">
                                <label for="nep_title">Nepali Title <span class="text-danger">*</span></label>
                                <input type="text" name="nep_title" class="form-control" value="">
                                @error('nep_title')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mb-3 col-6">
                                <label for="eng_title">English Title<span class="text-danger">*</span></label>
                                <input type="text" name="eng_title" class="form-control">
                                @error('eng_title')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Save Record</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
