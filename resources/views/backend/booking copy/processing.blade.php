@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.booking.management'))

@section('breadcrumb-links')
    @include('backend.booking.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.booking.management') }}
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
								<th>@lang('labels.backend.access.booking.table.id')</th>
								<th>@lang('labels.backend.access.booking.table.name')</th>
								<th>@lang('labels.backend.access.booking.table.phone_number')</th>
								<th>@lang('labels.backend.access.booking.table.booking_time')</th>
								<th>@lang('labels.backend.access.booking.table.booking_date')</th>
								<th>@lang('labels.backend.access.booking.table.status')</th>
								<th>@lang('labels.backend.access.booking.table.service')</th>
								<th>@lang('labels.backend.access.booking.table.email')</th>
								<th>@lang('labels.backend.access.booking.table.request')</th>
							</tr>
                        </thead>
                        <tbody>
						@php 
							$stt = $bookings->total();
						@endphp
                        @foreach($bookings as $booking)
                            <tr class="@if(!$booking->is_read) lb-not-seen @endif" data-href="{{ route('admin.booking.show', $booking) }}">
                                <td>{{ $stt }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone_number }}</td>
                                <td>{{ $booking->booking_time }}</td>
                                <td>{{ $booking->booking_date_format }}</td>
                                <td>{!! $booking->status_label !!}</td>
                                <td>@if(!$booking->hasNotService()) {{ $booking->service->name }} @endif</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->request }}</td>
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
                    {!! $bookings->total() !!} {{ trans_choice('labels.backend.access.booking.table.total', $bookings->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $bookings->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
