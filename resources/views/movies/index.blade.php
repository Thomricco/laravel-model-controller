@foreach ($data as $movie)

<div class="container">
    <div class="img-box">
        <img src="" class="card-img" alt="">

    </div>
    <div class="card-text">
        <h5 class="card-title">{{$movie->title}}</h5>
    </div>

</div>
@endforeach