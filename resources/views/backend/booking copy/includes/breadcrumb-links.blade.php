<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
			<a 
				class="btn dropdown-toggle" 
				href="#" 
				role="button" 
				id="breadcrumb-dropdown-1" 
				data-toggle="dropdown" 
				aria-haspopup="true" 
				aria-expanded="false">
				@lang('menus.backend.access.booking.main')
			</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
				<a 
					class="dropdown-item" 
					href="{{ route('admin.booking.index') }}">
					@lang('strings.backend.access.booking.status.all')
				</a>
				<a 
					class="dropdown-item" 
					href="{{ route('admin.booking.waiting') }}">
					@lang('strings.backend.access.booking.status.waiting')
				</a>
				<a 
					class="dropdown-item" 
					href="{{ route('admin.booking.called') }}">
					@lang('strings.backend.access.booking.status.called')
				</a>
				<a 
					class="dropdown-item" 
					href="{{ route('admin.booking.processing') }}">
					@lang('strings.backend.access.booking.status.processing')
				</a>
				<a 
					class="dropdown-item" 
					href="{{ route('admin.booking.completed') }}">
					@lang('strings.backend.access.booking.status.completed')
				</a>
				<a 
					class="dropdown-item" 
					href="{{ route('admin.booking.reject') }}">
					@lang('strings.backend.access.booking.status.reject')
				</a>
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>
