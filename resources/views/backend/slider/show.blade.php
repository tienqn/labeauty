@extends('backend.layouts.app')

@section('title', __('Quản lý banner') . ' | ' . __('Chi tiết banner'))

@section('breadcrumb-links')
    @include('backend.slider.includes.breadcrumb-links')
@endsection

@section('content')
{{ html()->modelForm($slider, 'PATCH', route('admin.slider.update', $slider->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('Quản lý banner')
                        <small class="text-muted">@lang('Chi tiết banner')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">

					<div class="form-group row">
						{{ html()->label(__('Tiêu đề'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							{{ html()->text('title')
                                ->class('form-control')
                                ->placeholder(__('Tiêu đề'))
                                ->attribute('maxlength', 191)
                                ->required() }}
						</div><!--col-->
					</div><!--form-group-->

					<div class="form-group row">
						{{ html()->label(__('Mô tả'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							{{ html()->text('description')
								->class('form-control')
								->placeholder(__('Mô tả'))
								->attribute('maxlength', 191)
								->required() }}
						</div><!--col-->
					</div><!--form-group-->

					<div class="form-group row">
						{{ html()->label(__('Hình ảnh'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10" style="position:relative">
							<img 
								id="background_image" 
								style="width:100%" 
								src="{{ asset($slider->background) }}" 
							/>
							<span class="detail_{{ $slider->text_position }}"></span>

							<input 
								id="upload_banner"
								type="file" 
								name="background" 
								accept="image/*"
								data-url="{{ route('admin.slider.update_banner', $slider) }}"
							>

						</div><!--col-->
					</div><!--form-group-->

					<div class="form-group row">
						{{ html()->label(__('Vị trí chữ'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							{{ html()->select('text_position', [
									'left' => 'Trái',
									'right' => 'Phải'
								])
								->class('form-control text_position_select')
								->attribute('data-url', route('admin.slider.update', $slider)) }}
						</div><!--col-->
					</div><!--form-group-->

                </div><!--col-->
            </div><!--row-->
		</div><!--card-body-->
		
		<div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.slider.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection
