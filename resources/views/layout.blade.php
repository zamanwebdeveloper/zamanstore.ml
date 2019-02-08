@include('inc/header')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <?php
                                    $all_published_category=DB::table('tbl_category')
                                    ->where('publication_status',1)
                                    ->get();
                                    foreach ($all_published_category as $v_category)
                                        {
                                ?>
                                <div class="panel-heading">

                                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>
                                <?php
                                        }
                                 ?>
                            </div>

                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <?php
                                $all_published_manufacture=DB::table('tbl_manufacture')
                                    ->where('publication_status',1)
                                    ->get();
                                foreach ($all_published_manufacture as $v_manufacture)
                                {
                                    ?>

                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right"></span>{{$v_manufacture->manufacture_name}}</a></li>
                                </ul>
                                    <?php
                                    }
                                    ?>
                            </div>
                        </div><!--/brands_products-->
                        
                        
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @yield('content')
                        
                        
                    </div><!--features_items-->
                    
                </div>
            </div>
        </div>
    </section>
@include('inc/footer')