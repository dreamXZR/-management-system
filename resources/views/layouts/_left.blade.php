<div class="page-sidebar" id="sidebar">
                
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li class="active">
                        <a href="{{route('index')}}">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('informations.index')}}">
                            <i class="menu-icon glyphicon glyphicon-list-alt"></i>
                            <span class="menu-text"> 信息卡 </span>
                        </a>
                    </li>
                    
                   <li>
                        <a href="{{route('residents.index')}}">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text"> 人员列表 </span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{route('register_tables.index')}}">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text"> 来访登记<span class="register_unfinish_num badge badge-darkpink" style="margin-left: 90px;">0</span> </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('above_tables.index')}}">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text"> 上门登记<span class="above_unfinish_num badge badge-darkpink" style="margin-left: 90px;">0</span> </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('problem_tables.index')}}">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text"> 问题汇总<span class="problem_unfinish_num badge badge-darkpink" style="margin-left: 90px;">0</span> </span>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="{{route('letter_proofs.index')}}">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text"> 证明信 </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('worker_proofs.index')}}">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text"> 就业证明 </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('drath_proofs.index')}}">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text"> 死亡证明 </span>
                        </a>
                    </li>
                    @can('del_info')
                    <li>
                        <a href="{{route('users.index')}}">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text"> 人员管理 </span>
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a href="{{route('tags.index')}}">
                            <i class="menu-icon glyphicon glyphicon-tags"></i>
                            <span class="menu-text"> 标签管理 </span>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{route('unfinish')}}">--}}
                            {{--<i class="menu-icon glyphicon glyphicon-remove-sign"></i>--}}
                            {{--<span class="menu-text"> 未完成  </span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                   
            </div>
