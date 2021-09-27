@extends('voyager::master')

@section('content')
<center>
<h3> الإعدادات</h3>
</center>
<form action="{{ route('pack') }}" method="POST">
    @csrf
<div class="form-group">
    <label for="exampleFormControlSelect1"> باقة مجتمع سند  : </label>

    @if ($pak)
    <label for="exampleFormControlSelect1" style="color: green !important"> فعالة </label>

    @else
    <label for="exampleFormControlSelect1" style="color: rgb(240, 10, 10) !important"> انتهى التسجيل  </label>

    @endif

    <div class="row">

        <div class="col-6">
            <select class="form-control" id="exampleFormControlSelect1" name="pak"required>
                <option value="">--تغيير الحالة --</option>
                <option value="1">فعالة</option>
                <option  value="0">غير فعالة</option>
              </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mb-2">حفظ</button>




<hr>

</form>

<form action="{{ route('mzaya') }}" method="POST">
    @csrf
<div class="form-group">
    <label for="exampleFormControlSelect1"> مزايا منشآت : </label>

    @if ($mzaya)
    <label for="exampleFormControlSelect1" style="color: green !important"> ظاهرة </label>

    @else
    <label for="exampleFormControlSelect1" style="color: rgb(240, 10, 10) !important"> مخفية  </label>

    @endif

    <div class="row">

        <div class="col-6">
            <select class="form-control" id="exampleFormControlSelect1" name="mzaya"required>
                <option value="">--تغيير الحالة --</option>
                <option value="1">ظاهرة</option>
                <option  value="0"> مخفية</option>
              </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mb-2">حفظ</button>
<hr>

@endsection
