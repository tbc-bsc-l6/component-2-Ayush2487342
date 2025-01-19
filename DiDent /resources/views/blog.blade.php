@extends('home')
@section('title')
    Blog
@endsection

@section('template')
</header>
<!-- HEADER end -->    
        

    <!-- Header block start -->
        <!--  Main start -->
        <main> 
        
            <!-- Best Block News Start -->
            <div class="row best_news">
                <div class="container"> 
                    <div class="row row-15">
                        <!-- Best News Item Start -->
                        <div class="col-3 best_news_item">
                            <div class="best_news_item_vn">
                                <div class="best_news_item_title">Choosing the Best Dentist Matters</div>
                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod inci adipiscing elitist…</p>
                                <a href="/blog_post.php" class="more">Learn more</a>
                            </div>
                        </div>
                        <!-- Best News Item End-->  
                        <!-- Best News Item Start -->
                        <div class="col-3 best_news_item">
                            <div class="best_news_item_vn">
                                <div class="best_news_item_title">Cosmetic Dentistry Can Change…</div>
                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod inci adipiscing elitist…</p>
                                <a href="/blog_post.php" class="more">Learn more</a>
                            </div>
                        </div>
                        <!-- Best News Item End-->  
                        <!-- Best News Item Start -->
                        <div class="col-3 best_news_item">
                            <div class="best_news_item_vn">
                                <div class="best_news_item_title">Porcelain Veneers for Every Need</div>
                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod inci adipiscing elitist…</p>
                                <a href="/blog_post.php" class="more">Learn more</a>
                            </div>
                        </div>
                        <!-- Best News Item End--> 
                    </div>
                </div>
            </div>
            <!-- Best Block News End -->  
            
            <!-- Blog Category Content Start-->
            <div class="row category_content">
                <div class="container"> 
                    <h2>Recent News</h2>
                    <div class="row">
                        {{-- @php
                            print_r($recentNewsTop->image)
                        @endphp --}}
                        <!-- Col Left Start -->
                        <div class="row col_left"> 
                             <div class="row row-15 blog_grid more3"> 
                             
                                <div class="row">
                                    @foreach ($recentNews as $r)
                                            <!-- Blog Item Start -->
                                    <div class="col-2 blogBox blog_item">
                                        <div class="blog_grid_p">
                                        <div class="row blog_item_vn">
                                            <div class="overflow_hidden blog_item_img">
                                                <div class="radius_niz">
                                                    <a href="/blog_post.php"><img src="{{asset($r->image)}}" alt="DiDent" /></a>
                                                </div>
                                            </div> 
                                            <div class="blog_item_cont">
                                                <a href="/blog_post.php" class="blog_item_title">{{$r->heading}}</a>
                                                <span class="date">{{$r->date}}</span>
                                                <p>{{$r->description}}</p>
                                                <a href="/blog_post.php" class="more">Learn more</a>
                                            </div> 
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                             
                             </div>
                                
                            </div>
                        <!-- Best Left End--> 
                    </div>
                </div>
            </div>
            <!-- Blog Category Content End --> 
        </main>
        <!--  Main end -->
	</div> 
    <!-- Wrapper End -->
@endsection