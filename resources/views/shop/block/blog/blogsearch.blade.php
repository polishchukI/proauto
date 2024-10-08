<div class="card widget widget-search">
	<form method="GET" action="{{ route('blog') }}" accept-charset="UTF-8" class="widget-search__form" role="search">
		<input class="widget-search__input" name="search" type="text" placeholder="{{ __('blog.blogsearch') }}" value="{{ request('search') }}">
		<button class="widget-search__button" type="submit">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
				<path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"></path>
			</svg>
		</button>
		<div class="widget-search__field"></div>
	</form>
</div>