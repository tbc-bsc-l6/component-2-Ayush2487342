@extends('home')
@section('title')
    Blog
@endsection

@section('template')
</header>
<!-- HEADER end -->    
        

    <!-- Header block start -->
            <div class="overflow_hidden title_blog">
                <div class="radius_niz_mini"> 
                    <div class="row title_blog_fon lozad" data-background-image="{{asset('image/h.jpg')}}">
        			     <div class="container"> 
        					<div class="title_blog_container row">
                                <span>8/17/2018</span>
                                <h1>Tips from Our Main Dentist</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci ut labore et dol magna aliqua sit amet ipsu…</p>
                                <a href="#" class="btn">Learn More</a>
                            </div>
        				</div>
        			</div>
                </div>
            </div>
			<!-- Header block end -->
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
                                
                                <!-- Blog Item Full Width Start -->
                                <div class="row blogBox blog_item full_width">
                                    <div class="blog_grid_p">
                                        <div class="row blog_item_vn">
                                            <div class="overflow_hidden blog_item_img">
                                                <div class="radius_niz">
                                                    <a href="/blog_post.php">
                                                        <img style="height: 300px;width:100%" src="{{asset($recentNewsTop->image)}}" />
                                                    </a>
                                                </div>
                                            </div> 
                                            <div class="blog_item_cont">
                                                <a href="/blog_post.php" class="blog_item_title">{{ $recentNewsTop->heading }}</a>
                                                <span class="date">{{ $recentNewsTop->date }}</span>
                                                <p>{{ $recentNewsTop->description }}</p>
                                                <a href="/blog_post.php" class="more">Learn more</a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>            
                                
                                <!-- Blog Item Full Width End -->  
                             
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
                                
                                <!-- Blog Item Full Width Start -->
                                <div class="row blogBox blog_item full_width">
                                    <div class="blog_grid_p">
                                    <div class="row blog_item_vn">
                                        <div class="overflow_hidden blog_item_img">
                                            <div class="radius_niz">
                                                <a href="/blog_post.php"><img  style="width: 100%;height:300px" class="lozad" src="{{asset($recentNewsButton->image)}}" /></a>
                                            </div>
                                        </div> 
                                        <div class="blog_item_cont">
                                            <a href="/blog_post.php" class="blog_item_title">{{$recentNewsButton->heading}}</a>
                                            <span class="date">{{$recentNewsButton->date}}</span>
                                            <p>{{$recentNewsButton->description}}</p>
                                            <a href="/blog_post.php" class="more">Learn more</a>
                                        </div> 
                                    </div>
                                    </div>
                                </div>
                                <!-- Blog Item Full Width End -->
                             
                             </div>
                               
                             <div class="center row"><a href="#" id="loadMore" class="btn">Load More</a></div>                             
                        </div>
                        <!-- Best Left End--> 
                        
                        <!-- Col Right Sidebar Start -->
                        <div class="row col_right sidebar">
                           <!-- Subscription Start -->
                           <div class="row subscription">
                                <div class="subscription_top">
                                    <div class="wighet-title">Subscription</div>
                                    <i class="dental_icon dentalic_letter"></i>
                                </div>
                                <div class="subscription_input input_white">
                                    <label>Email</label>
                                    <input class="white" placeholder="Your Email" />
                                    <input type="submit" value="Subscribe" />
                                </div>
                           </div>
                           <!-- Subscription End -->
                           
                           <!-- Our Authors Start -->
                           <div class="row our_authors block_sidebar">
                                <div class="wighet-title">Our Authors</div>
                                <div class="row block_sidebar_content">
                                    <!-- Our Authors Item Start -->
                                    <div class="row block_sidebar_item">
                                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/avatar@2x.png 2x" alt="DiDent" />
                                        <div class="block_sidebar_item_r">
                                            <a href="/ourdentists.php#specialists">Adrainne Prestomelt</a>
                                            <span>Orthodontist</span>
                                        </div>
                                    </div>
                                    <!-- Our Authors Item End -->
                                    
                                    <!-- Our Authors Item Start -->
                                    <div class="row block_sidebar_item">
                                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/avatar-copy@2x.png 2x" alt="DiDent" />
                                        <div class="block_sidebar_item_r">
                                            <a href="/ourdentists.php#specialists">Jasmine Gillmore</a>
                                            <span>Periodontist</span>
                                        </div>
                                    </div>
                                    <!-- Our Authors Item End -->
                                    
                                    <!-- Our Authors Item Start -->
                                    <div class="row block_sidebar_item">
                                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor4.jpg" data-srcset="image/doctor4.jpg, img/avatar-copy-2@2x.png 2x" alt="DiDent" />
                                        <div class="block_sidebar_item_r">
                                            <a href="/ourdentists.php#specialists">Megan Sparkle</a>
                                            <span>General Dentist</span>
                                        </div>
                                    </div>
                                    <!-- Our Authors Item End -->
                                    
                                    <!-- Our Authors Item Start -->
                                    <div class="row block_sidebar_item">
                                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor.jpg" data-srcset="image/doctor.jpg, img/avatar-copy-3@2x.png 2x" alt="DiDent" />
                                        <div class="block_sidebar_item_r">
                                            <a href="/ourdentists.php#specialists">Stephanie Kleate</a>
                                            <span>Customer Manager</span>
                                        </div>
                                    </div>
                                    <!-- Our Authors Item End -->
                                    
                                    <!-- Our Authors Item Start -->
                                    <div class="row block_sidebar_item">
                                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/avatar-copy-4@2x.png 2x" alt="DiDent" />
                                        <div class="block_sidebar_item_r">
                                            <a href="/ourdentists.php#specialists">Josef Brosten</a>
                                            <span>Executive Manager</span>
                                        </div>
                                    </div>
                                    <!-- Our Authors Item End -->
                                </div>
                           </div>
                           <!-- Our Authors End -->
                           
                           <!-- Follow Us On Start -->
                           <div class="row follow_us_on block_sidebar">
                                <div class="wighet-title">Follow Us on</div>
                                <div class="row block_sidebar_content">
                                    <div class="sidebar_social_button">
                                    	<a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    	<a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    	<a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                        <a href="#"><i class="fa-brands fa-rss"></i></a> 
                                    </div>
                                </div>
                           </div>
                           <!-- Follow Us On End -->
                           
                           <!-- Categories Start -->
                           <div class="row block_categories block_sidebar">
                                <div class="wighet-title">Categories</div>
                                <div class="row block_sidebar_content">
                                    <div class="sidebar_categories"> 
                                        <!-- Categories Url Start -->
                                        <ul>
                                            <li class="row">
                                                <a href="#">Cosmetic Dentistry</a>
                                                <span>38</span>
                                            </li>
                                            <li>
                                                <a href="#">Whitening</a>
                                                <span>5</span>
                                            </li>                                            
                                            <li>
                                                <a href="#">Pediatric Dentistry</a>
                                                <span>89</span>
                                            </li>   
                                            <li>
                                                <a href="#">Orthodontics</a>
                                                <span>122</span>
                                            </li>   
                                            <li>
                                                <a href="#">General Dentistry</a>
                                                <span>2365</span>
                                            </li>   
                                        </ul>  
                                        <!-- Categories Url End --> 
                                        
                                        <!-- Categories See all Start --> 
                                        <div class="seeallrow row">
                                            <a class="seeall more" href="#" onclick="return false">See all</a>
                                            <div class="seeall_vn"> 
                                                <a class="seeall_close" title="Close"><i class="fa fa-times" aria-hidden="true"></i></a> 
                                                <ul>
                                                    <li>
                                                        <a href="#">Pediatric Dentistry</a>
                                                        <span>89</span>
                                                    </li> 
                                                    <li>
                                                        <a href="#">General Dentistry</a>
                                                        <span>2365</span>
                                                    </li>  
                                                    <li class="row">
                                                        <a href="#">Cosmetic Dentistry</a>
                                                        <span>38</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">Whitening</a>
                                                        <span>5</span>
                                                    </li>   
                                                    <li>
                                                        <a href="#">Orthodontics</a>
                                                        <span>122</span>
                                                    </li> 
                                                </ul> 
                                            </div>
                                        </div>
                                       <!-- Categories See all End --> 
                                    </div>
                                </div>
                           </div>
                           <!-- Categories End --> 
                           
                           <!-- Sidebar Tags Start -->
                           <div class="row sidebar_tags block_sidebar">
                                <div class="wighet-title">Tags</div>
                                <div class="row block_sidebar_content">
                                    <div class="sidebar_tags_cont">
                                        <a href="#" class="skrolurl">Veneers <span>8</span></a>
                                        <a href="#" class="skrolurl">Whitening <span>38</span></a> 
                                        <a href="#" class="skrolurl">Inlays <span>12</span></a> 
                                        <a href="#" class="skrolurl">Crowns <span>9784</span></a>
                                        <a href="#" class="skrolurl">Bridges <span>65</span></a>
                                        <a href="#" class="skrolurl">Onlays <span>96</span></a>
                                        <a href="#" class="skrolurl">Bonding <span>5</span></a>
                                        <a href="#" class="skrolurl">Fillings <span>42</span></a>
                                        <a href="#" class="skrolurl">Implants <span>111</span></a> 
                                    </div>
                                </div>
                           </div>
                           <!-- Sidebar Tags End -->
                        </div>
                        <!-- Col Right Sidebar End-->
                    </div>
                </div>
            </div>
            <!-- Blog Category Content End --> 
        </main>
        <!--  Main end -->
	</div> 
    <!-- Wrapper End -->
@endsection