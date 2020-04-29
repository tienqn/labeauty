@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Quản lý banner'))

@section('breadcrumb-links')
    @include('backend.slider.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('Quản lý banner') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover lb-table">
                        <thead>
							<tr class="lb-thead-tr">
								<th>@lang('STT')</th>
								<th>@lang('Tiêu đề')</th>
								<th>@lang('Mô tả')</th>
								<th>@lang('Hình ảnh')</th>
								<th>@lang('Vị trí chữ')</th>
								<th>@lang('Hiển thị')</th>
								<th>@lang('Sắp xếp')</th>
							</tr>
                        </thead>
                        <tbody>
						@php 
							$stt = $sliders->total();
						@endphp
                        @foreach($sliders as $slider)
                            <tr data-href="{{ route('admin.booking.show', $slider) }}">
                                <td>{{ $stt }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->description }}</td>
                                <td>{{ $slider->background }}</td>
                                <td>{{ $slider->text_position }}</td>
                                <td>{{ $slider->show }}</td>
                                <td>{{ $slider->order }}</td>
                            </tr>
							@php 
								$stt--;
							@endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $sliders->total() !!} {{ trans_choice('labels.backend.access.booking.table.total', $sliders->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $sliders->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
