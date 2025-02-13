<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Advertise Create </h4>

                    <a href="{{ route('advertise.index') }}" class="btn btn-primary"> Go Back </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('advertise.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                           
                            <div class="mb-3 col-6">
                                <label for="company_name"> Company Name <span class="text-danger">*</span></label>
                                <input type="text" name="company_name" class="form-control" value="{{old('company_name')}}">
                                @error('company_name')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label for="contact"> Contact <span class="text-danger">*</span></label>
                                <input type="tel" name="contact" class="form-control" value="{{old('contact')}}">
                                
                                @error('contact')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>
                    
                                                    
                            <div class=" col-6 mb-3">
                                <label for="banner">Banner <span class="text-danger">*</span></label>
                                <input type="file" name="banner" class="form-control" value="">
                                @error('banner')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>


                            {{-- yeha text derai vaxa date le xopeko xa  --}}
                            <div class="mb-3 col-6">
                                <label for="expire_date"> Expire Date <span class="text-danger">*</span></label>
                                <input type="date" name="expire_date" class="form-control" value="{{old('expire_date') }}>
                        
                                @error('expire_date')
                                     <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="mb-3 col-6">
                                <label for="redirect_url"> Redirect URL <span class="text-danger">*</span></label>
                                <input type="text" name="redirect_url" class="form-control" value="{{old('redirect_url') }}">
                                @error('redirect_url')
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
    
</x-app-layout>
