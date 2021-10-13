<!-- <li @isset($item['id']) id="{{ $item['id'] }}" @endisset class="nav-item">

    <a class="nav-link {{ $item['class'] }} @isset($item['shift']) {{ $item['shift'] }} @endisset"
       href="{{ $item['href'] }}" @isset($item['target']) target="{{ $item['target'] }}" @endisset
       {!! $item['data-compiled'] ?? '' !!}>

        <i class="{{ $item['icon'] ?? 'far fa-fw fa-circle' }} {{
            isset($item['icon_color']) ? 'text-'.$item['icon_color'] : ''
        }}"></i>

        <p>
            {{ $item['text'] }}

            @isset($item['label'])
                <span class="badge badge-{{ $item['label_color'] ?? 'primary' }} right">
                    {{ $item['label'] }}
                </span>
            @endisset
        </p>

    </a>
--->
<li @if (isset($item['id'])) id="{{ $item['id'] }}" @endif class="nav-item @if (isset($item['submenu'])){{ $item['submenu_class'] }}@endif">
@empty($item['vue'])
                <a class="nav-link {{ $item['class'] }} @if(isset($item['shift'])) {{ $item['shift'] }} @endif" href="{{ $item['href'] }}"
                   @if (isset($item['target'])) target="{{ $item['target'] }}" @endif
                   {!! $item['data-compiled'] ?? '' !!}
                >

                <i class="{{ $item['icon'] ?? 'far fa-fw fa-circle' }} {{ isset($item['icon_color']) ? 'text-' . $item['icon_color'] : '' }}"></i>
                <p>
                    {{ $item['text'] }}

                    @if (isset($item['submenu']))
                        <i class="fas fa-angle-left right"></i>
                    @endif
                    @if (isset($item['label']))
                        <span class="badge badge-{{ $item['label_color'] ?? 'primary' }} right">{{ $item['label'] }}</span>
                    @endif
                </p>
            </a>
            @endempty
            @isset($item['vue'])
                <router-link class="nav-link" to="{{ $item['vue'] }}"><i class="{{ $item['icon'] ?? 'far fa-fw fa-circle' }} {{ isset($item['icon_color']) ? 'text-' . $item['icon_color'] : '' }}"></i>
                    <p>
                        {{ $item['text'] }}

                        @if (isset($item['submenu']))
                            <i class="fas fa-angle-left right"></i>
                        @endif
                        @if (isset($item['label']))
                            <span class="badge badge-{{ $item['label_color'] ?? 'primary' }} right">{{ $item['label'] }}</span>
                        @endif
                    </p>
                </router-link>
            @endisset
</li>
