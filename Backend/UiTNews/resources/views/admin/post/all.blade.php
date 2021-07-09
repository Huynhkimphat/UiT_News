@extends('admin.layout.index')
@section('menu2')   active  @endsection

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
                        <a>List post </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title" style="font-size: 14px!important; font-weight: 600!important;">List post</h4>
                                <a href=" {{ route('post.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                   Add New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal add -->
                          
                       
                            <div class="table-responsive">
                                  <table id="add-row" class="display table table-striped table-hover" >
                                    <thead class="thead-dark">
                                        <tr>     
                                            <th>STT</th>                                   
                                            <th style="width: 320px;">POST TITLE</th> 
                                            <th>TYPES</th>
                                            <th>AUTHOR</th>
                                            <th>POST ORIGIN</th>
                                            <th >View</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @php   $stt=1   @endphp
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $stt++ }}</td>
                                                <td>{{ $post->POST_TITLE}}</td>
                                                <td>{{ $post->types->TYPE_NAME }}</td>
                                           
                                                <td>
                                                    {{ $post->POST_AUTHOR_NAME }}
                                                </td>
                                                <td>{{ $post->POST_ORIGIN }}</td>
                                                <td>{{ $post->POST_VIEW }}</td>

                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{ route('postdetail.show', $post->id) }}" class="btn btn-link btn-primary btn-lg" data-original-title="Xem thông tin">
                                                            <button type="submit" class="btn btn-primary">Show </button>
                                                        </a>
                                                        <a href="{{ route('post.edit',$post->id) }}" class="btn btn-link btn-primary btn-lg" data-original-title="Xem thông tin">
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </a>

                                                        <form action="{{ route('post.destroy',$post->id) }}" method="post">
                                                            @method('DELETE')   @csrf
                                                            <button  type="submit"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger" style="margin-top :12px">Delete </button>
                                                               
                                                            </button>             
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

