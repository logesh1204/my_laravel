<div>
    @if(auth()->check())
    <h6>{{ auth()->user()->name }}</h6>
    <pre>
    <?php  print_r(auth()->user()->all()); ?>
    </pre>
    @endif
    <pre>
    <?php  print_r(session()->all()); ?>
    </pre>
    
    {{-- @dd(session()) 
    @dd(auth()->user()) --}}
</div>
