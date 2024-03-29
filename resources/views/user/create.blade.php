@extends('layouts.app')

@section('template_title')
Create User
@endsection

@section('content')
<section class="content container-fluid" >
    <div class="row">
        <div class="col-md-8" class="text-center" >


            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title" style="margin-left:850px ;">إنشاء متدرب</span>
                </div>
                <div class="card-body" >
                    <form  method="POST" action="{{ url('users/store') }}" role="form" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-group col-md-8" >
                            <label style="margin-left:550px ;">الإسم </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter username">
                        </div>
                        @error('name')
                        <span class="text-danger err-msg-name" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group col-md-8">
                            <label for="exampleInputEmail1" style="margin-left:490px ;">البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        @error('email')
                        <span class="text-danger err-msg-email" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1" style="margin-left:360px; ">الرقم السري</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        @error('password')
                        <span class="text-danger err-msg-password" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group" style="margin-top: 10px;">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="margin-left:550px ;" for="inputGroupSelect01">الوظيفة</label>
                            </div>
                            <select style="margin-left:360px;"  class="custom-select" name="status" id="inputGroupSelect01">
                                <option selected disabled>إختر...</option>
                                <option value="0">متدرب</option>
                                <option value="1">مدير</option>
                            </select>
                        </div>
                        @error('status')
                        <span class="text-danger err-msg-status" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="submit" class="btn btn-primary" style="margin-top:10px ;">حفظ</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
