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
				@lang('Banner')
			</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
				<a 
					class="dropdown-item" 
					href="{{ route('admin.slider.index') }}">
					@lang('Tất cả')
				</a>
				<a 
					class="dropdown-item" 
					href="{{ route('admin.slider.show_home') }}">
					@lang('Hiển thị trang chủ')
				</a>
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>
