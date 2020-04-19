<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">{{trans('admin.create_new_password')}}</p>
            @include('back.message')

                 <form action="" method="post">
                    {!! csrf_field()  !!}
                <p>{{$data->created_at}}</p>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" value="{{$data->email}}" name="email"    autocomplete="yes">
{{--                    @php--}}
{{--                     return dd($data)--}}
{{--                    @endphp--}}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text"  name="password_confirmation" class="form-control" placeholder=" {{trans('admin.retype_password')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>



            <div class="social-auth-links text-center mb-3">


                <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-th mr-2"></i> {{trans('admin.reset')}}</button>
            </div>
            <!-- /.social-auth-links -->
                 </form>

            <p class="mb-1">
                <a href="{{aurl('login')}}">Login</a>
            </p>



        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
