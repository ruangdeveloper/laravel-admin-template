 @php
     $footer = RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\SBAdminTwo::getFooter();
 @endphp
 @if ($footer)
     <footer id="{{ $footer->getId() }}" class="sticky-footer bg-white border-top">
         <div class="container my-auto">
             <div class="copyright text-center my-auto">
                 <span>{!! $footer->getCopyright() !!}</span>
             </div>
         </div>
     </footer>
 @endif
