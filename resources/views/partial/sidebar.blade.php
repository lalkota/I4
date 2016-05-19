<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                @foreach (Session::get('menu') as $menu)
                  @if (count($menu)>1)
                      <li><a><i class="{{$menu[0][2]}}"></i> {{ $menu[0][0] }} <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                    @foreach( $menu as $key => $item)
                            @if ($key==0)
                                @continue
                            @endif
                            <li><a href={{ $menu[$key][1] }}>{{ $item[0] }}</a>
                          </li>
                    @endforeach
                        </ul>
                      </li>
                  @else
                      <li><a href={{ $menu[0][1] }}><i class="{{$menu[0][2]}}"></i> {{ $menu[0][0] }} <span class="fa fa-chevron-down"></span></a></li>
                  @endif
                @endforeach
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            