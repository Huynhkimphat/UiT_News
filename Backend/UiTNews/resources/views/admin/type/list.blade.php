@extends('admin.layout.index')
@section('menu1')   active  @endsection

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <ul class="breadcrumbs" style="margin-left: 0px !important;">
                    <li class="nav-home">
                        <a >
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a >List Types </a>
                    </li>
                </ul>
            </div>
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title" style="font-size: 14px!important; font-weight: 600!important;">List types</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    ADD NEW
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal add -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold" style="color: #007bff;font-weight: 700!important;">Type</span> 
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span style="color: #F25961 !important;" aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('types.store') }}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                            <div class="modal-body">													
                                                <div class="row">
                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <label for="">TYPE NAME</label>
                                                        <input type="text" name="TYPE_NAME" class="form-control"  placeholder="Type name...." required>
                                                    </div>                                     
                                                </div>
                                            </div>
                                            <div class="modal-footer no-bd">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                                <button type="submit" id="" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="table-responsive">
                                  <table id="add-row" class="display table table-striped table-hover" >
                                    <thead class="thead-dark" >
                                        <tr> 
                                            <th>STT</th>                                       
                                            <th>TYPE NAME</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @php   $stt=1   @endphp
                                        @foreach ($type as $type)
                                            <tr>
                                                <td>{{ $stt++ }}</td>
                                                <td>{{ $type->TYPE_NAME}}</td>

                                                <td>
                                                    <div class="form-button-action">
                                                        <a type="button" class="btn btn-link btn-primary btn-lg"  data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                                            data-attr="{{ route('types.edit',$type->id)  }}">
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </a>

                                                        <form action="{{ route('types.destroy',$type->id) }}" method="post">
                                                            @method('DELETE')   @csrf
                                                            <button  type="submit"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"  class="btn btn-danger" style="margin-top :12px">Delete </button>  
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>

                             {{-- MODAL --}}
                                      <!-- medium modal -->
                                      <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                                      aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title">
                                                      <span class="fw-mediumbold">
                                                      Edit Type
                                                      </span> 
                                      
                                                  </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body" id="mediumBody">
                                                  <div>
                                                      <!-- the result to be displayed apply here -->
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                 
                             {{-- END  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('kethuaJS')
<script>
	// display a modal (medium modal)
	$(document).on('click', '#mediumButton', function(event) {
		event.preventDefault();
		let href = $(this).attr('data-attr');
		$.ajax({
			url: href,
			beforeSend: function() {
				$('#loader').show();
			},
			// return the result
			success: function(result) {
				$('#mediumModal').modal("show");
				$('#mediumBody').html(result).show();
			},
			complete: function() {
				$('#loader').hide();
			},
			error: function(jqXHR, testStatus, error) {
				console.log(error);
				alert("Page " + href + " cannot open. Error:" + error);
				$('#loader').hide();
			},
			timeout: 8000
		})
	});

</script>
    
@endsection