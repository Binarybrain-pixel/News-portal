<x-app-layout>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Company </h4>
                    @if (!$company)
                        <a href="{{ route('company.create') }}" class="btn btn-primary">Add</a>
                    @endif

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        S.N.
                                    </th>
                                    <th>Logo</th>
                                    <th>Company Name</th>
                                    <th>Phone </th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @if ($company)
                                    <tr>
                                        <td> 1</td>
                                        <td><img width="120" src="{{ asset($company->logo) }}"
                                                alt="{{ $company->name }}"></td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->phone }}</td>
                                        <td>{{ $company->tel }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>
                                            <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                                                @csrf
                                                
                                                @method('delete')
                                                <a href="{{ route('company.edit', $company->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <button class="btn btn-sm btn-danger">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
