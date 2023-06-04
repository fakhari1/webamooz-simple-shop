@php $dash .= '-- '; @endphp

@foreach($children as $child)
    <option value="{{$child->id}}"
            @if(!empty($editCategory) && $editCategory->parent_id == $child->id) selected @endif
    >{{$dash . $child->title_fa}}</option>
    @if(count($child->children))
        @include('admin.category.__children',['children' => $child->children, 'editCategory' => $editCategory ?? null])
    @endif
@endforeach
