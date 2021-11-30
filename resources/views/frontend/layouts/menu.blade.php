<style>
    .restbeef_header_content {
        border-bottom: none;
    }
</style>
<div class="restbeef_menu_part">
    @php
        $weddings = \App\Models\Wedding::selectRaw('id,name_tr,name_en,slug_tr,slug_en')->where('is_active','=',1)->get();
        $campaign = \App\Models\Campaign::where('id',1)->where('is_active',1)->get();

        $routes = [

        [
        "routeName" => "about",
        "label" => __("static_text.about")
        ],

        [
        "routeName" => "restaurant",
        "label" => __("static_text.restaurant")
        ],
        [
        "routeName" => "wedding",
        "label" => __("static_text.invitation")
        ],
        [
        "routeName" => "events",
        "label" => __("static_text.events")
        ],
        [
        "routeName" => "gallery1",
        "label" => __("static_text.gallery")
        ],
        [
        "routeName" => "contact",
        "label" => __("static_text.contact")
        ],
        [
        "routeName" => "engagement",
        "label" => __("static_text.engagement")
        ],
        [
        "routeName" => "hennanight",
        "label" => __("static_text.hennanight")
        ],
        [
        "routeName" => "circumcision",
        "label" => __("static_text.circumcision")
        ],
        [
        "routeName" => "weddingceremony",
        "label" => __("static_text.weddingceremony")
        ],
        [
        "routeName" => "wedding",
        "label" => __("static_text.wedding")
        ],
        [
        "routeName" => "campaigns",
        "label" => __("static_text.campaigns")
        ],

        ];
    @endphp
    <nav class="restbeef_nav">
        <ul id="menu-main-menu" class="restbeef_menu">
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[0]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[0]['routeName'])}}">{{$routes[0]['label']}}</a>
            </li>
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[1]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[1]['routeName'])}}">{{$routes[1]['label']}}</a>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">{{$routes[2]['label']}}</a>
                <ul class="sub-menu">
                    @if(app()->getLocale() == "tr")
                        @foreach($weddings as $wedding)
                            <li><a href="/dugun-davet/{{$wedding->id.'/'.$wedding->slug_tr}}">{{$wedding->name_tr}}</a></li>
                        @endforeach
                    @else
                        @foreach($weddings as $wedding)
                            <li><a href="/dugun-davet/{{$wedding->id.'/'.$wedding->slug_en}}">{{$wedding->name_en}}</a></li>
                        @endforeach
                    @endif

                        @if(count($campaign)==1)
                            <li><a href="{{route($routes[11]['routeName'])}}">{{$routes[11]['label']}}</a></li>

                        @endif



                      </ul><!-- .sub-menu -->
            </li>
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[3]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[3]['routeName'])}}">{{$routes[3]['label']}}</a>
            </li>
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[4]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[4]['routeName'])}}">{{$routes[4]['label']}}</a>
            </li>

        </ul><!-- .restbeef_menu -->
        <a href="{{route($routes[5]['routeName'])}}" class="btn_restbeef btn_book_table">{{$routes[5]['label']}}</a>



    </nav><!-- .restbeef_nav -->
</div><!-- .restbeef_menu_part -->
