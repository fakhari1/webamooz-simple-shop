<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title mb-3">ایجاد دسته بندی</h6>

            <form class="forms-sample" method="post" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="text" class="form-control" name="title_fa"
                               placeholder="نام دسته بندی">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="text" class="form-control" name="title_en"
                               placeholder="نام انگلیسی دسته بندی">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="parent_id"
                           class="col-sm-3 col-form-label">دسته پدر</label>
                    <div class="col-sm-9">
                        <select name="parent_id" id="parent_id" class="form-select">
                            <option selected>دسته والد</option>
                            @foreach($categories->where('parent_id', null) as $key => $category)
                                @php $dash=''; @endphp

                                <option value="{{ $category->id }}">
                                    {{ $category->title_fa }}
                                </option>

                                @if(count($category->children))
                                    @include('admin.category.__children',['children' => $category->children])
                                @endif

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3 justify-content-end">
                    <button type="submit" class="btn btn-success" style="max-width: 100px !important; margin-left: 10px;">ایجاد</button>
                </div>
            </form>

        </div>
    </div>
</div>
