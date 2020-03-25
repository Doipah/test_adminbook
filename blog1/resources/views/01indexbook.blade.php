@if (Route::has('login'))

@if (Auth::check())

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@extends('layouts.app')



@section('content')
<style type="text/css">
    .mt-50 {
        margin-top: 50px;
    }

    body {
        font-family: sans-serif;
        background-color: #eeeeee;
    }

    .file-upload {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload1 {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #d1d3e2;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #d1d3e2;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn1 {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #d1d3e2;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #d1d3e2;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #d1d3e2;
        color: #858796;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn1:hover {
        background: #d1d3e2;
        color: #858796;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-btn1:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-content1 {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-input1 {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #d1d3e2;
        position: relative;
    }

    .image-upload-wrap1 {
        margin-top: 20px;
        border: 4px dashed #d1d3e2;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #858796;
        border: 4px dashed #ffffff;
    }

    .image-dropping,
    .image-upload-wrap1:hover {
        background-color: #858796;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .image-title-wrap1 {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text1 {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #d1d3e2;
        padding: 60px 0;
    }

    .drag-text1 h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #d1d3e2;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .file-upload-image1 {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #cd4535;
        transition: all .2s ease;
        outline: none;
        text-transform: inherit;
        font-weight: 700;
    }

    .remove-image1 {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #cd4535;
        transition: all .2s ease;
        outline: none;
        text-transform: inherit;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image1:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }

    .remove-image1:active {
        border: 0;
        transition: all .2s ease;
    }
</style>


<!-- Begin Page Content -->

<div class="container-fluid" style="font-family: 'Kanit', sans-serif;">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('catebook.create') }}" class="d-none d-sm-inline-block btn  btn-primary "><i
                class="fa fa-plus fa-sm text-white-50"></i> เพิ่มข้อมูล</a>

    </div>
    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="font-family: 'Kanit', sans-serif;">ตาราง ข้อมูลหนังสือ
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped " id="dataTable" width="100%" cellspacing="0"
                    style="text-align: center; font-family: 'Sarabun', sans-serif;">
                    {{-- font-family: 'Bai Jamjuree', sans-serif; --}}
                    <thead class="thead-light">
                        <tr>
                            <th>รหัสหนังสือ</th>
                            <th>ปกหนังสือ</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคาหนังสือ</th>
                            <th>หมวดหมู่</th>
                            <th>ประเภทไฟล์</th>
                            <th>ปีที่ตีพิมพ์</th>
                            <th>ผู้แต่ง</th>
                            <th>สถานะ</th>
                            <th>ปี/เดือน/วัน-วันเวลา</th>
                            <th>ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tfoot class="thead-light">
                        <tr>
                            <th>รหัสหนังสือ</th>
                            <th>ปกหนังสือ</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคาหนังสือ</th>
                            <th>หมวดหมู่</th>
                            <th>ประเภทไฟล์</th>
                            <th>ปีที่ตีพิมพ์</th>
                            <th>ผู้แต่ง</th>
                            <th>สถานะ</th>
                            <th>ปี/เดือน/วัน-วันเวลา</th>
                            <th>ตัวเลือก</th>
                        </tr>
                    </tfoot>


                    <tbody>
                        @foreach($data as $table1)
                        <tr>
                            <td>000{{ $table1->id}} </td>
                            {{-- <img src="{{ url('upload/',$student->image)}}" alt="" class="rounded-circle"
                            id="indeximg"> --}}
                            <td><img src="{{ url('images/'.$table1->image)}}" style="width: 80px; " class="css-class"
                                    alt="alt text"></td>
                            <td>{{ $table1->book_name}}</td>
                            <td>{{ $table1->price_book}}</td>
                            <td>{{ $table1->name_catebook}}</td>
                            <td>{{ $table1->category_file}}</td>
                            <td>{{ $table1->year_print}}</td>
                            <td>{{ $table1->user_write}}</td>
                            <td>{{ $table1->status}}</td>
                            <td>{{ $table1->created_at}}</td>
                            <td>
                                <a href="" data-id="" data-toggle="modal" data-target="#info"
                                    class="btn btn-info btn-circle btn-sm">
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" > info </button> -->
                                    {{-- <i class="fas fa-info-circle"></i> --}}
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="#" data-id="{{$table1->id}}" class="btn btn-warning btn-circle btn-sm"
                                    data-toggle="modal" data-target="#edit">
                                    {{-- <i class="fas fa-exclamation-triangle"></i> --}}
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-id="" data-toggle="modal"
                                    data-target="#delete">
                                    <i class="fas fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <div id="edit" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">แก้ไขข้อมูลสินค้า</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="edit">
                    <form action="" method="POST" enctype="multipart/form-data">
                        {{-- {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!} --}}
                        @csrf
                        <input type="hidden" name="id" id="id">

                        <div class="row">
                            <div class="col">

                                <label for=" " style="font-family: 'Kanit', sans-serif; ">ชื่อหนังสือ </label>
                                <input require type="text" class="form-control" id="book_name" name="book_name"
                                    style="font-family: 'Kanit', sans-serif; " aria-describedby="emailHelp"
                                    placeholder=" ">
                            </div>
                            <div class="col">
                                <label for=" " style="font-family: 'Kanit', sans-serif; ">ราคาหนังสือ</label>
                                <input require type="number" class="form-control" id="price_book" name="price_book"
                                    aria-describedby="emailHelp" placeholder=" ">
                            </div>

                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">หมวดหมู่หนังสือ</label>

                                <select class="form-control" name="category_book"
                                    style="font-family: 'Kanit', sans-serif;">
                                    @foreach($data as $table)
                                    <option style="font-family: 'Kanit', sans-serif;" id="id_category"
                                        value="{{ $table->code_book}}">
                                        {{ $table->name_catebook}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">

                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">ปีตีพิมพ์</label>
                                <input require type="text" class="form-control" id="year_print" name="year_print"
                                    aria-describedby="emailHelp" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">

                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">ผู้แต่งหนังสือ</label>
                                <input require type="text" class="form-control" id="user_write" name="user_write"
                                    aria-describedby="emailHelp" placeholder=" ">

                            </div>

                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">

                                <label style="font-family: 'Kanit', sans-serif; ">รูปภาพปกหนังสือ </label>
                                <span id="store_image"></span>
                                <script class="jsbin"
                                    src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                <div class="file-upload">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>

                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' id="image" name="image"
                                            onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <h3>ลากและวางไฟล์หรือเลือก</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ
                                                <span class="image-title">Uploaded Image</span></button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col">

                                <label style="font-family: 'Kanit', sans-serif; " id="">รูปภาพปกหนังสือ </label>
                                <img class='img-thumbnail' style="width: 90px;"
                                    src="{{ url('https://pngimage.net/wp-content/uploads/2018/06/icona-file-png.png')}} "
                                    alt="your image" />
                                <script class="jsbin"
                                    src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                <div class="file-upload1">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input1').trigger( 'click' )">เพิ่มไฟล์</button>

                                    <div class="image-upload-wrap1">
                                        <input class="file-upload-input1" type='file' id="category_file"
                                            name="category_file" onchange="readURLfile(this);" accept="files/*" />
                                        <div class="drag-text">
                                            <h3>ลากและวางไฟล์หรือเลือกไฟล์เท่านั้น</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content1">
                                        <img style="  max-height: 200px;
                                        max-width: 200px;
                                        margin: auto;
                                        padding: 20px;"
                                            src="{{ url('https://pngimage.net/wp-content/uploads/2018/06/icona-file-png.png')}} "
                                            alt="your image" />
                                        <div class="image-title-wrap1">
                                            <button type="button" onclick="removeUpload1()"
                                                class="remove-image1">ลบรูปภาพ <span class="image-title1">Uploaded
                                                    Image</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"
                                        style="font-family: 'Kanit', sans-serif; ">รายละเอียดหนังสือ</label>

                                    <textarea placeholder="เขียนรายละเอียด...." class="form-control" name="description"
                                        id="description" rows="6"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <!-- <button style="font-family: 'Kanit', sans-serif; " name id="sub" type="submit" class="btn btn-primary">บันทึก</button> -->
                                <button style="font-family: 'Kanit', sans-serif; " name="sub" id="sub" type="submit"
                                    class="btn btn-primary">บันทึก</button>
                                <button style="font-family: 'Kanit', sans-serif; " type="reset"
                                    class="btn btn-danger ">ยกเลิก</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


</div>


{{-- @section('script') --}}


{{-- <script type="text/javascript">
$('#edit').on('show.bs.modal',function(ev){

    var id = $(ev.relatedTarget)
    console.log("555",id);
})
$(document).ready(function(){
    $('#popoverData').popover();
    $('#popoverOption').popover({ trigger: "hover" });
});



</script> --}}
{{-- <script>
    console.log('hello');
</script> --}}




@endsection
<script type="text/javascript">
    console.log('hello');
    $(document).ready(function() {

      $('#edit').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');


        $.ajax({
            url:"{{url('book')}}/"+id+"/edit",
            type:"GET",
            dataType:"JSON",
            success:function(data){
                    console.log(data)
                    $('#id').val(data.id);
                    $('#book_name').val(data.book_name);
                    $('#price_book').val(data.price_book);
                    $('#category_book').val(data.category_book);
                    $('#year_print').val(data.year_print);
                    $('#user_write').val(data.user_write);
                    $('#store_image').html("<img src={{ URL::to('/') }}/images/" +data.image + " width='70' class='img-thumbnail' />");
                    $('#store_image').append("<input type='hidden' name='image' value='"+data.image+"' />");
                    $('#targetDiv').append("<input  type='hidden'  name='category_file' value='"+data.category_file+"'/>");
                    $('#description').val(data.description);
                    $('#edit').modal('show');

            },
            error:function(){
                alert("not working")
            }
        })
      });
    });

    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      console.log('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

function readURLfile(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap1').hide();

      $('.file-upload-image1').attr('src', e.target.result);
      console.log('src', e.target.result);
      $('.file-upload-content1').show();

      $('.image-title1').html(input.files[0].name);
      console.log(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload1();
  }
}

function removeUpload1() {
  $('.file-upload-input1').replaceWith($('.file-upload-input1').clone());
  $('.file-upload-content1').hide();
  $('.image-upload-wrap1').show();
}
$('.image-upload-wrap1').bind('dragover', function () {
		$('.image-upload-wrap1').addClass('image-dropping1');
	});
	$('.image-upload-wrap1').bind('dragleave', function () {
		$('.image-upload-wrap1').removeClass('image-dropping1');
});





</script>





@else

<h1>กรุณาสมัครสมาชิก <h2>
        <a href="{{ url('/register') }}">Register</a>
        @endif

        @endif
