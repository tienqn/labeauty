@extends('backend.layouts.app')

@section('title', __('labels.backend.access.booking.management') . ' | ' . __('labels.backend.access.booking.view'))

@section('breadcrumb-links')
    @include('backend.booking.includes.breadcrumb-links')
@endsection

@section('content')
{{ html()->modelForm($booking, 'PATCH', route('admin.booking.update', $booking->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.access.booking.management')
                        <small class="text-muted">@lang('labels.backend.access.booking.view')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">

					<div class="form-group row">
						{{ html()->label(__('labels.backend.access.booking.table.name'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							<p>{{ $booking->name }}</p>
						</div><!--col-->
					</div><!--form-group-->

					<div class="form-group row">
						{{ html()->label(__('labels.backend.access.booking.table.phone_number'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							<p>{{ $booking->phone_number }}</p>
						</div><!--col-->
					</div><!--form-group-->

					<div class="form-group row">
                        {{ html()->label(__('labels.backend.access.booking.table.booking_date'))->class('col-md-2 form-control-label') }}

                        <div class="col-md-10">
                            <p>{{ $booking->booking_date_format }}</p>
                        </div><!--col-->
					</div><!--form-group-->
					
					<div class="form-group row">
						{{ html()->label(__('labels.backend.access.booking.table.booking_time'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							<p>{{ $booking->booking_time }}</p>
						</div><!--col-->
					</div><!--form-group-->

					<div class="form-group row">
                        {{ html()->label(__('labels.backend.access.booking.table.status'))->class('col-md-2 form-control-label') }}

                        <div class="col-md-10">
							{{ html()->select('status', [
									'waiting' => __('strings.backend.access.booking.status.waiting'),
									'called' => __('strings.backend.access.booking.status.called'),
									'processing' => __('strings.backend.access.booking.status.processing'),
									'completed' => __('strings.backend.access.booking.status.completed'),
									'reject' => __('strings.backend.access.booking.status.reject')
								])->class('form-control lb-form-control') }}
                        </div><!--col-->
                    </div><!--form-group-->

					<div class="form-group row">
						{{ html()->label(__('labels.backend.access.booking.table.email'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							<p>{{ $booking->email }}</p>
						</div><!--col-->
					</div><!--form-group-->

                    <div class="form-group row">
                    {{ html()->label(__('labels.backend.access.booking.table.service'))->class('col-md-2 form-control-label') }}

                        <div class="col-md-10">
                            <p>@if(!$booking->hasNotService()) {{ $booking->service->name }} @endif</p>
                        </div><!--col-->
					</div><!--form-group-->
					
					<div class="form-group row">
						{{ html()->label(__('labels.backend.access.booking.table.request'))->class('col-md-2 form-control-label') }}

						<div class="col-md-10">
							<p>{{ $booking->request }}</p>
						</div><!--col-->
					</div><!--form-group-->

                </div><!--col-->
            </div><!--row-->
		</div><!--card-body-->
		
		<div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.booking.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection
