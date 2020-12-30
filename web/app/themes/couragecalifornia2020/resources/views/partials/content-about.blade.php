<section id="top" style="background-image: url({{ $data['top_illustration']['url'] }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>{!! App::title() !!}</h1>
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>

<section id="staff">
    <div class="container">
        <h2>Staff</h2>
        <div class="row">
            @if($staff)
            @foreach ($staff as $person)
            <div class="col-md-4 person">
                <div class="name @if($person->post_content)with-bio @endif">
                    <h4>{{ get_the_title($person->ID) }}</h4>
                    @if($person->post_content)
                        <div class="plus">+</div>
                    @endif
                </div>
                <h5>{{ $person->title }}</h5>

                @if($person->post_content)
                    <div class="bio">
                        {!! apply_filters( 'the_content', $person->post_content ); !!}
                    </div>
                @endif
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>

{{-- Boards of Directors --}}
@php $boards = $data['boards_of_director'] @endphp
<section id="directors">
    <div class="container">
        <h2>Boards of Directors</h2>
        @foreach ($boards as $board)
        <div class="board">
            <h3>{{ $board['title'] }}</h3>
            <div class="directors">{!! $board['directors'] !!}</div>
        </div>
        @endforeach
    </div>
</section>

@if(isset($data['accordeon']))
@foreach ($data['accordeon'] as $row)
<section class="accordeon">
    <div class="container">
        <div class="header">
            <h2>{{ $row['title'] }}</h2>
            <div class="arrow">
                <i class="fal fa-chevron-right"></i>
                <i class="fal fa-chevron-up"></i>
            </div>
        </div>
        
        <div class="row">
                <div class="col-md-6 text">
                    {!! $row['text'] !!}
                </div>
                <div class="col-md-6 image">
                    @if($row['illustration'])
                        <img src="{{ $row['illustration']['url'] }}" 
                            alt="{{ $row['illustration']['alt'] }}" />
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endif