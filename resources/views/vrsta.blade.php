@extends('master')

@section('title',$vrsta->naziv)


<style>
    * {
  box-sizing: border-box;
}

img {
  max-width: 100%;
}

ul {
  list-style: none;
  padding: 0;
  font: 0.9em Arial;
  display: flex;
  flex-wrap: wrap;
}
ul li {
  float: left;
  width: 23.5%;
  margin-right: 2%;
  margin-bottom: 20px;
  background: #eee;
  padding: 15px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
ul li:nth-child(4n) {
  margin-right: 0;
}
ul li a {
  background: #333;
  text-align: center;
  color: #fff;
  padding: 5px 30px;
  text-decoration: none;
}
ul li .price {
  margin: 0 0 10px;
}
</style>

@section('content')

    <h2 style="margin-left: 40vw; margin-top: 40px;">{{$vrsta->naziv}}</h2>
    <hr style="margin: 0px 20vw;">

    <ul style="padding-left: 200px; margin-top: 80px;">
    @foreach($vrsta->proizvodi as $proizvod)
        <li>
          <img src="{{$proizvod->slika}}">
          <h3>{{$proizvod->naziv}}</h3>
          <p class="price">{{$proizvod->cena}} RSD</p>
          <a href="{{$vrsta->id}}/{{$proizvod->id}}">More Details</a>
        </li>
        @endforeach
      </ul>

@endsection
