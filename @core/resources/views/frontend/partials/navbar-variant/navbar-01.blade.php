<style>
    .header-style-01.navbar-variant-01 .navbar-area.nav-style-01 {
        background-color: transparent;
    }

    .navbar-area.nav-style-01 .nav-container .logo-wrapper img {
        max-height: 60px;
    }
</style>


<div class="header-style-01 navbar-variant-01">
    <nav class="navbar navbar-area nav-absolute navbar-expand-lg nav-style-01">
        <div class="container-fluid nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{ url('/') }}" class="logo">
                        @if (!empty(filter_static_option_value('site_white_logo', $global_static_field_data)))
                            {!! render_image_markup_by_attachment_id(filter_static_option_value('site_white_logo', $global_static_field_data)) !!}
                        @else
                            <h2 class="site-title">
                                {{ filter_static_option_value('site_' . $user_select_lang_slug . '_title', $global_static_field_data) }}
                            </h2>
                        @endif
                    </a>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    {!! render_frontend_menu($primary_menu) !!}
                    @if (!empty(filter_static_option_value('language_select_option', $global_static_field_data)))
                        <li>
                            <select id="langchange">
                                @foreach ($all_language as $lang)
                                    <option @if ($user_select_lang_slug == $lang->slug) selected @endif
                                        value="{{ $lang->slug }}" class="lang-option">
                                        {{ explode('(', $lang->name)[0] ?? $lang->name }}</option>
                                @endforeach
                            </select>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
