<p>{{ $type }} - {{$base}} - ${{$price}}</p>

<!-- if statements -->
@if($price > 15) -->
<p>this is expensive</p>
@elseif($price < 5) <p>this pizza is cheap</p>
    @else
    <p>this pizza is normal price</p>
    <@endif <!--same as if statements-->
        @unless($base === 'cheesy rust')
        <p>this has cheesy crust</p>
        @endunless

        <!-- regular php -->
        @php
        $name = 'Gimna';
        echo $name;
        @endphp


        <!-- for loops-->
        @for($i =0;$i < 5;$i++) <p>the value : {{$i}}</p>
            @endfor

            @for($i =0; $i < count($pizzas);$i++) <p>{{ $pizzas[$i]['type'] }}
                </p>
                @endfor


                <!-- foreach loop -->
                @foreach($pizzas as $pizza)
                <div>{{$loop->index}} : {{$pizza['type']}} - {{$pizza['base']}}
                    @if($loop->first)
                    <span> - first in the loop</span>
                    @endif

                    @if($loop->last)
                    <span> - last in the loop</span>
                    @endif
                </div>
                @endforeach