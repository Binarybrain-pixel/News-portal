<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Post Create </h4>

                    <a href="{{ route('post.index') }}" class="btn btn-primary"> Go Back </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class=" col-6 mb-3">
                                <label for="title">Select Category <span class="text-danger">*</span></label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->eng_title}} </option>
                                    @endforeach

                                    @error('categories')
                                    <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                </select>
                                
                            </div>

                            <div class="mb-3 col-6">
                                <label for="title"> Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control">
                                    {{old('title')}}
                                </input>
                                @error('title')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-3 col-12">
                                <label for="discription">Description<span class="text-danger">*</span></label>
                                <textarea type="text" name="discription" class="form-control summernote">
                                    {{old('discription')}}
                                </textarea>
                                @error('discription')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>


                           
                            <div class=" col-6 mb-3">
                                <label for="image">Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control" value="">
                                @error('image')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label for="meta_words">Meta Words</label>
                                <textarea type="text" name="meta_words" class="form-control">
                                    {{old('meta_words')}}
                                </textarea>
                                @error('meta_words')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label for="meta_description">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control">
                                    {{old('meta_description')}}
                                </textarea>
                                @error('meta_description')
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
