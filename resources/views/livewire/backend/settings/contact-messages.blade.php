<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Contact Manage  </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Contact Manage </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title"> Contact Manage </h4>
                        </div>

                        
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                         
                          
                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
          
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card">
                 
                        <div class="card-body">
                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getMessages as $entry)
                                    <tr>
                                        <td>{{ $entry->name }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>{{ $entry->phone }}</td>
                                        <td>{{ $entry->subject }}</td>
                                     
                                        <td>{{ $entry->created_at }}</td>
                                        <td>
                                            <button  type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$entry->id}}">View</button>
                                            {{-- <button wire:click="edit({{ $entry->id }})" class="btn btn-sm btn-primary">View</button> --}}
                                            <button wire:click="delete({{ $entry->id }})" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{$entry->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Detail</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2> <strong> Name : </strong> {{ $entry->name }}</h2>
                                                <h3> <strong> Email : </strong>{{ $entry->email }}</h3>
                                                <h3> <strong> Phone : </strong>{{ $entry->phone }}</h3>
                                                <h3> <strong> Created at : </strong> {{ $entry->created_at }}</h3>
                                                <p> <strong> Message : </strong> {!! $entry->subject !!}</p>
                                             
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          
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
            <!-- end row -->


            
        </div>
        <!-- container-fluid -->
    </div>
   
</div>
