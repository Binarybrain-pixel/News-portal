<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Post Edit </h4>

                    <a href="{{ route('post.index') }}" class="btn btn-primary"> Go Back </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class=" col-6 mb-3">
                                <label for="title">Select Category <span class="text-danger">*</span></label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$post->categories->contains($category->id) ? 'selected' : ''}}>
                                        {{$category->eng_title}} </option>
                                    @endforeach

                                    @error('categories')
                                    <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                </select>
                                
                            </div>

                            <div class="mb-3 col-6">
                                <label for="title"> Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" value="{{old('title') ?? $post->title}}">
                                                                    
                                @error('title')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-3 col-12">
                                <label for="discription">Discription<span class="text-danger">*</span></label>
                                <textarea type="text"  name="discription"  class="form-control summernote">
                                   {{old('discription') ?? $post->discription}}
                                </textarea>
                                @error('discription')
                                    <p class="text-danger"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class=" col-6 mb-3">
                                <label for="status">Status<span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="approved" {{$post->status == 'approved' ? 'selected' : ''}}>Approved </option>
                                    <option value="rejected"{{{$post->status == 'rejected' ? 'selected' : ''}}}>Rejected </option>
                                    <option value="pending" {{$post->status == 'pending' ? 'selected' : ''}}>Pending </option>
                                    
                                </select>
                                    @error('categories')
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
                                <button type="submit" class="btn btn-success">Update Record</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
