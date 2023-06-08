<div class="column1 col-lg-3 col-md-6">
    <div class="categories_menu">
        <div class="categories_title">
            <h2 class="categori_toggle">دسته بندی ها</h2>
        </div>
        <div class="categories_menu_toggle">
            <ul>
                @foreach($parentCategories as $key => $parentCategory)
                    <li class="menu_item_children">
                        <a href="#">
                            {{ $parentCategory->title_fa }}
                            @if(count($parentCategory->children))
                                <i class="fa fa-angle-left"></i>
                            @endif
                        </a>
                        @if(count($parentCategory->children))
                            <ul class="categories_mega_menu">
                                @foreach($parentCategory->children as $firstChild)
                                    <li class="menu_item_children"><a href="#"
                                                                      class="font-weight-bold">{{ $firstChild->title_fa }}</a>
                                        @if(count($firstChild->children))
                                            <ul class="categorie_sub_menu">
                                                @foreach($firstChild->children as $secondChild)
                                                    <li><a href="#">{{ $secondChild->title_fa }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


