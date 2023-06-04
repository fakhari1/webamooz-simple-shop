@php $dash .= '-- '; @endphp

@foreach($children as $firstChild)

    <option value="{{$firstChild->id}}"
            @if(!empty($editCategory) && $editCategory->parent_id == $firstChild->id) selected @endif
    >{{$dash . $firstChild->title_fa}}</option>

    @if(count($firstChild->children))
        @include('admin.category.__children',['children' => $firstChild->children, 'editCategory' => $editCategory ?? null])
    @endif

@endforeach
