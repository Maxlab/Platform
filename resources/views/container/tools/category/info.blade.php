<div class="wrapper-md">

    <input type="hidden" name="taxonomy" value="category">
    <input type="hidden" name="term_id" @if($termTaxonomy->exists)value="{{$termTaxonomy->term->id}}"
           @else value="0" @endif>

    <div class="form-group">
        <label class="col-sm-2 control-label">Родительская категория</label>
        <div class="col-sm-10">

            <select data-placeholder="Select Category" name="parent_id" class="chosen-select form-control">

                <option value="0">Без секции</option>


                @foreach($category as  $value)


                    <option value="{{$value->id}}"
                            @if($termTaxonomy->exists && $termTaxonomy->parent_id == $value->id) selected @endif >
                        {{$value->term->getContent('name')}}</option>


                @endforeach
            </select>
        </div>
    </div>


    <div class="form-group m-t-md">
        <label class="col-sm-2 control-label">Ссылка</label>
        <div class="col-sm-10">
            <input type="text" name="slug" @if($termTaxonomy->exists) value="{{$termTaxonomy->term->slug}}"
                   @endif required class="form-control" placeholder="news">
        </div>
    </div>


</div>
