@extends('layouts.backlayout')
@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="form-element segments-page">
        <!-- Main content -->
        <div class="content">
            <!-- form start -->
            <form role="form" action="{{url('/admin/members/'.$MEM->id.'/update')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">會員姓名<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="會員姓名" value="{{$MEM->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="nickname">會員暱稱<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="nickname" name="nickname" placeholder="會員暱稱" value="{{$MEM->nickname}}" required>
                    </div>
                    <div class="form-group">
                        <label for="AvatarImage">會員照片<span style="color:red">*</span></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="AvatarImage" name="AvatarImage">
                                <label class="custom-file-label" for="AvatarImage">Choose file</label>
                            </div>
                        </div>
                        <img src="{{url('/storage/images/avatar/'.$MEM->image.'')}}" id="AvatarImage_tag" class="img elevation-2" style="max-width:65%; margin-top:10px;display: block;margin-left:auto;margin-right:auto" />
                    </div>
                    <?php 
                        $objs = json_decode($LEVEL,JSON_UNESCAPED_UNICODE);
                    ?>
                    @if (!empty($objs))
                    @foreach ($objs as $key => $value)
                        <div class="form-group">
                            <label for="{{$key}}">{{$key}}<span style="color:red">*</span></label>
                            <select class="form-control" id="{{$key}}" name="{{$key}}" required>
                                @if ($value == "F")
                                <option selected value="F">尊榮級顧問</option>
                                <option value="E">黃金級顧問</option>
                                <option value="D">白金級顧問</option>
                                <option value="C">一星級顧問</option>
                                <option value="B">二星區顧問</option>
                                <option value="A">三星總經銷</option>
                                @elseif($value == "E")
                                <option value="F">尊榮級顧問</option>
                                <option selected value="E">黃金級顧問</option>
                                <option value="D">白金級顧問</option>
                                <option value="C">一星級顧問</option>
                                <option value="B">二星區顧問</option>
                                <option value="A">三星總經銷</option>
                                @elseif($value == "D")
                                <option value="F">尊榮級顧問</option>
                                <option value="E">黃金級顧問</option>
                                <option selected value="D">白金級顧問</option>
                                <option value="C">一星級顧問</option>
                                <option value="B">二星區顧問</option>
                                <option value="A">三星總經銷</option>
                                @elseif($value == "C")
                                <option value="F">尊榮級顧問</option>
                                <option value="E">黃金級顧問</option>
                                <option value="D">白金級顧問</option>
                                <option selected value="C">一星級顧問</option>
                                <option value="B">二星區顧問</option>
                                <option value="A">三星總經銷</option>
                                @elseif($value == "B")
                                <option value="F">尊榮級顧問</option>
                                <option value="E">黃金級顧問</option>
                                <option value="D">白金級顧問</option>
                                <option value="C">一星級顧問</option>
                                <option selected value="B">二星區顧問</option>
                                <option value="A">三星總經銷</option>
                                @elseif($value == "A")
                                <option value="F">尊榮級顧問</option>
                                <option value="E">黃金級顧問</option>
                                <option value="D">白金級顧問</option>
                                <option value="C">一星級顧問</option>
                                <option value="B">二星區顧問</option>
                                <option selected value="A">三星總經銷</option>
                                @endif
                            </select>
                        </div>
                    @endforeach
                    @endif
                    <div class="form-group">
                        <label for="email">會員Email<span style="color:red">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$MEM->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">會員電話<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$MEM->phone}}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">會員地址<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$MEM->address}}" required>
                    </div>
                    <div class="form-group">
                        <label for="authorization_code">授權碼<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="authorization_code" name="authorization_code" value="{{$MEM->authorization_code}}" required>
                    </div>
                    <div class="form-group">
                        <label for="contract_url">合約書連結</label>
                        <input type="text" class="form-control" id="contract_url" name="contract_url" value="{{$MEM->contract_url}}">
                    </div>
                    <div class="form-group">
                        <label for="milage">里程數<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="milage" name="milage" value="{{$MEM->milage}}" required>
                    </div>
                    <div class="form-group">
                        <label for="role">會員身分<span style="color:red">*</span></label>
                        <select class="form-control" id="role" name="role" required>
                            @if ($MEM->role == "一般會員")
                            <option selected value="一般會員">一般會員</option>
                            <option value="管理員">管理員</option>
                            <option value="最高權限管理員">最高權限管理員</option>
                            @elseif($MEM->role == "管理員")
                            <option value="一般會員">一般會員</option>
                            <option selected value="管理員">管理員</option>
                            <option value="最高權限管理員">最高權限管理員</option>
                            @else
                            <option value="一般會員">一般會員</option>
                            <option value="管理員">管理員</option>
                            <option selected value="最高權限管理員">最高權限管理員</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="remarks">填寫盒數</label>
                        <input type="text" class="form-control" id="remarks" name="remarks" placeholder="會員暱稱" value="{{$MEM->remarks}}">
                    </div>
                    @if ($MEM->id == 1)
                    <div class="form-group">
                        <label for="leader_id">指派領導(不填則照舊)</label>
                        <select class="form-control" id="leader_id" name="leader_id">
                            <option selected value="0">GOD</option>
                        </select>
                    </div>
                    @else
                    <div class="form-group">
                        <label for="leader_id">指派領導(不填則照舊)</label>
                        <select class="form-control" id="leader_id" name="leader_id">
                            @foreach ($LEADERS as $LEADER)
                            <option <?php if($MEM->leader_id == $LEADER->id) echo "selected"?> value="{{$LEADER->id}}">{{$LEADER->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif                    
                    <div class="form-group">
                        <label for="password">會員新密碼(不填則照舊)</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn waves-effect button-full">送出</button>
                    
                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='{{ asset('dist/js/select2.min.js') }}'></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#AvatarImage_tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#AvatarImage").change(function(){
            readURL(this);
        });

        $("#leader_id").select2({
            selectOnClose: true
        });
    </script>

@endsection
