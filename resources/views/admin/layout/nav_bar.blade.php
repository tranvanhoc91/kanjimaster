<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->

      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="{{asset('admin/')}}"><i class="icon-home3"></i>
              <span data-i18n="nav.changelog.main" class="menu-title">Dashboard </span></a>
          </li>
          <li class=" nav-item"><a href="{{asset('admin/category/')}}"><i class="icon-folder2"></i>
              <span data-i18n="nav.changelog.main" class="menu-title">カテゴリー一覧 </span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-compass3"></i>
              <span data-i18n="nav.changelog.main" class="menu-title">部首  </span></a>
              <ul class="menu-content">
                <li>
                  <a href="{{asset('admin/radical/list/')}}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">
                      部首一覧
                  </a>
                </li>
                <li>
                  <a href="{{asset('admin/radical/add')}}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">
                      新しい部首を追加
                  </a>
                </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-spell-check"></i>
              <span data-i18n="nav.changelog.main" class="menu-title">漢字  </span></a>
              <ul class="menu-content">
                <li>
                  <a href="{{asset('admin/kanji/list/')}}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">
                      部首一覧
                  </a>
                </li>
                <li>
                  <a href="{{asset('admin/kanji/add/')}}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">
                      新しい漢字を追加
                  </a>
                </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-users2"></i>
              <span data-i18n="nav.changelog.main" class="menu-title">ユーザー  </span></a>
              <ul class="menu-content">
                <li>
                  <a href="{{asset('admin/user/list/')}}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">
                      部首一覧
                  </a>
                </li>
                <li>
                  <a href="{{asset('admin/user/add/')}}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">
                      新しいユーザーを追加
                  </a>
                </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="{{asset('admin/comment/')}}"><i class="icon-commenting"></i>
              <span data-i18n="nav.changelog.main" class="menu-title">コメント管理</span></a>
          </li>
        </ul>
      </div>
      
      <!-- /main menu content-->
      
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>