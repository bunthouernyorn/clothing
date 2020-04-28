@extends('backend.master.master')
@section('admin')
	class='active'
@endsection

@section('content')	

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Danh mục/Thuộc tính/Sửa giá trị của tính </li>
		</ol>
    </div>
    <!--/ .row-->

    <!--/ .row-->
    
    <div class="row col-md-offset-3">
        <div class="col-md-6">
        <div class="panel panel-blue">
            <div class="panel-heading drak-over-overlay">Sửa giá trị của tính</div>
            <div class="panel-body">
                <div class="from-gruop">x
                    <label for="">Tên giá trị của thuộc tính</label>

                </div>

            </div>

        </div>

        </div>
    </div>

</div>


@endsection