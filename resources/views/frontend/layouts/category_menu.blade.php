<div class="left-sidebar">
<?php
$categories = \App\Category::all();
?>
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        @foreach($categories as $category)

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="{{url('category')}}/{{$category->id}}/{{('view')}}">{{$category->name}}</a>

                    </h4>
                </div>
            </div>
        @endforeach
                <!--/category-products-->
    </div>
</div>