@extends('layouts.app')

@section('content')
<div class="container" style="font-family:  'Kanit', sans-serif;">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <!--      <div class="panel-heading">Login</div> -->
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block ">
                            <img style="width: 110%;"
                                src="https://image.freepik.com/free-vector/library-book-background_23-2147579491.jpg">


                        </div>

                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">ยินดีต้อนรับเข้าสู่ระบบ</h1>
                                </div>

                                <form class="user" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->


                                        <input id="email" type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp" placeholder=" อีเมล์..."
                                            name="email" value="{{ old('email') }}" required autofocus
                                            autocomplete="off" style="font-size: ; ">

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif

                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input id="password" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder=" รหัสผ่าน..." name="password"
                                            required style="font-size: ; >

                        @if ($errors->has('password'))
                        <span class=" help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="checkbox" style="font-size: ;">

                                                <input type="checkbox" name="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>จดจำ รหัสผ่าน

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- <div class="col-md-8 col-md-offset-4"> -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style="    color: #fff;
                        background-color: #9b592a;
                        border-color: #9b592a; ">
                                            เข้าสู่ระบบ
                                        </button>
                                        <div class="form-group"></div>
                                        <div class="text-center" style="color:#9b592a;" <a class="small"
                                            href="{{ route('password.request') }}">
                                            ลืมรหัสผ่าน ?
                                            </a>
                                        </div>
                                        <div class="form-group"></div>
                                        <div class="text-center">
                                            <a class="small" href="{{ url('/register') }}"
                                                style="color:#9b592a; font-size: 94%; ">
                                                สมัครสมาชิกใหม่ ?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
