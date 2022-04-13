@extends('layouts.backend')

@section('title', 'Love-Seed')

@section('content')
<div class="page-wrapper">
   <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         <div class="breadcrumb-title pe-3">Love-Seed</div>
         <div class="ps-3">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                  <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page"> Table</li>
               </ol>
            </nav>
         </div>
         <div class="ms-auto">
            <div class="btn-group">
               <div class="ms-auto"><a href="{{ route('love.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Love Seed</a></div>
            </div>
         </div>
      </div>
      <!--end breadcrumb-->
      <h6 class="mb-0 text-uppercase">Love seed Table</h6>
      <hr/>
      <div class="card">
         <div class="card-body">
            <div class="table-responsive">
               <table id="example2" class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <td>Id</td>
                        
                        <th>Amount</th>
                       
            <th>Created_at</th>
                    <th>Updated_at</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
				  @foreach($loves as $key=>$member)
                     <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>₦{{ $member->amount }}</td>
                       
                        
                        <td>{{ $member->created_at->toFormattedDateString() }}</td>
                        <td>{{ $member['updated_at']->diffForHumans() }}</td>
						<th>
                                        <div class="d-flex order-actions">	

										<!-- <a href="{{ route('love.show',$member->id) }}" class="text-warning bg-light-warning border-0"><i class='bx bxs-show'></i></a> -->
										<a href="{{ route('love.edit',$member->id) }}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>

                              <form id="delete-form-{{ $member->id }}" action="{{ route('love.destroy',$member->id) }}" method="POST"  >
												@csrf
												@method('DELETE')
										<a href="javascript:;" onclick="deleteMember({{ $member->id }})" class="text-danger bg-light-danger border-0">
									
									<button type="submit" class='bx bxs-trash'></button></a>
									
											</form>
												</div>
                                        </th>

  
                     </tr>
					 @endforeach
                  </tbody>
                  <tfoot>
                     <tr>
                        <td>Id</td>
                        
                        <th>Amount</th>
                       
            <th>Created_at</th>
                    <th>updated_at</th>
                        <th>Action</th>
                     </tr>
					
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script src="{{ URL::asset('assets/js/sweet.js') }}"></script>
<!-- <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script> -->
    <script type="text/javascript">
        function deleteMember(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush