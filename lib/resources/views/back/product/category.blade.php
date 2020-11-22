@extends('layouts.backlayout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="form-element segments-page">

        <!-- Main content -->
        <div class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">目前商品分類</h3>
                </div>
                <div class="table-responsive">
                    <table class="table m-0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>產品分類名稱</th>
                        <th>動作</th>
                    </tr>
                    </thead>
                    <tbody id="dynamic-row">
                    @foreach ($CATEGORY as $category)
                        <tr>
                        <th scope="row">#</th>
                        <td>{{$category->name}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" style="margin-bottom:5px; width:80px" href="{{url('/admin/product/category/edit/'.$category->id.'')}}">編輯</a>
                            <form role="form" action="{{url('/admin/product/category/delete/'.$category->id.'')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="submit" style="width:80px" class="btn btn-danger btn-sm">刪除</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-header -->
            </div>

            <form role="form" action="{{url('/admin/product/category/store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">新增商品分類</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="CategoryName">分類名稱</label>
                            <input type="text" class="form-control" id="CategoryName" name="CategoryName" placeholder="名稱" required>
                            @if ($errors->has('CategoryName'))
                            <span class="help-block">
                                <strong style="color:red">這個分類名稱已經被使用</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="a_level">A級達標數量</label>
                            <div class="input-group">
                                <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                <input style="width:70%" type="number" step="1" max="" value="1" name="a_level" class="quantity-field" required>
                                <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="b_level">B級達標數量</label>
                            <div class="input-group">
                                <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                <input style="width:70%" type="number" step="1" max="" value="1" name="b_level" class="quantity-field" required>
                                <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c_level">C級達標數量</label>
                            <div class="input-group">
                                <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                <input style="width:70%" type="number" step="1" max="" value="1" name="c_level" class="quantity-field" required>
                                <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="d_level">D級達標數量</label>
                            <div class="input-group">
                                <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                <input style="width:70%" type="number" step="1" max="" value="1" name="d_level" class="quantity-field" required>
                                <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="e_level">E級達標數量</label>
                            <div class="input-group">
                                <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                <input style="width:70%" type="number" step="1" max="" value="1" name="e_level" class="quantity-field" required>
                                <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="f_level">F級達標數量</label>
                            <div class="input-group">
                                <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                <input style="width:70%" type="number" step="1" max="" value="1" name="f_level" class="quantity-field" required>
                                <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="a_name">A級別名</label>
                            <input type="text" class="form-control" id="a_name" name="a_name" required>
                        </div>
                        <div class="form-group">
                            <label for="b_name">B級別名</label>
                            <input type="text" class="form-control" id="b_name" name="b_name" required>
                        </div>
                        <div class="form-group">
                            <label for="c_name">C級別名</label>
                            <input type="text" class="form-control" id="c_name" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label for="d_name">D級別名</label>
                            <input type="text" class="form-control" id="d_name" name="d_name" required>
                        </div>
                        <div class="form-group">
                            <label for="e_name">E級別名</label>
                            <input type="text" class="form-control" id="e_name" name="e_name" required>
                        </div>
                        <div class="form-group">
                            <label for="f_name">F級別名</label>
                            <input type="text" class="form-control" id="f_name" name="f_name" required>
                        </div>
                        <button type="submit" class="btn waves-effect button-full">送出</button>
                    </div>
                </div>
                
            </form>
            
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
