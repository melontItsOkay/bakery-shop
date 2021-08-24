@foreach ($allproduct as $item)
           <li class="portfolio-item2" data-id="id-0" data-type="{{ $item['category_id'] }}">
             <div class="span3">
               <div class="thumbnail">
                 <div class="image-wrapp">
                     <a href="{{ url('product/'.$item['slug']) }}">
                   <img src="{{ asset('assets/product_img/'.$item['img']) }}" alt="{{ $item['name_product'] }}" title="" style="width: 320px; height: 190px;" />
                </a>
                   <article class="da-animate da-slideFromRight" style="display: block;">
                     <h4>{{ $item['name_product'] }}</h4>
                     <a href="{{ url('product/'.$item['slug']) }}"><i class="icon-rounded icon-48 icon-link"></i></a>
                     <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('assets/product_img/'.$item['img']) }}">
                         <i class="icon-rounded icon-48 icon-zoom-in"></i>
                         </a></span>
                   </article>
               
                 </div>
               </div>
             </div>
           </li>
           @endforeach 