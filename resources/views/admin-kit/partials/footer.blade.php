 @php
     $footer = RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate::adminKit()->getFooter();
     $footerMenu = $footer->getFooterMenu();
 @endphp
 @if ($footer)
     <footer id="{{ $footer->getId() }}" class="footer">
         <div class="container-fluid">
             <div class="row text-muted">
                 <div class="col-6 text-start">
                     <p class="mb-0 text-muted">
                         {{ $footer->getText() }}
                     </p>
                 </div>
                 @if ($footerMenu)
                     <div id="{{ $footerMenu->getId() }}" class="col-6 text-end">
                         <ul class="list-inline">
                             @foreach ($footerMenu->getFooterMenuItems() as $item)
                                 @if ($item->isVisible())
                                     <li id="{{ $item->getId() }}" class="list-inline-item">
                                         <a class="text-muted" href="{{ $item->getHref() }}"
                                             target="{{ $item->getTarget() }}">{{ $item->getText() }}</a>
                                     </li>
                                 @endif
                             @endforeach
                         </ul>
                     </div>
                 @endif
             </div>
         </div>
     </footer>
 @endif
