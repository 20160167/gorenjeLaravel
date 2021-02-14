@extends('master')

@section('title','proizvod')

<style>
    /* fonts  */
@import url("https://fonts.googleapis.com/css?family=Abel|Aguafina+Script|Artifika|Athiti|Condiment|Dosis|Droid+Serif|Farsan|Gurajada|Josefin+Sans|Lato|Lora|Merriweather|Noto+Serif|Open+Sans+Condensed:300|Playfair+Display|Rasa|Sahitya|Share+Tech|Text+Me+One|Titillium+Web");

body {
	background: #dfc2f2;
	background-image: linear-gradient(135deg, #ce9ffc 10%, #7367f0 100%);
	background-attachment: fixed;
	background-size: cover;
}

#container {
	box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
	background: rgba(255, 255, 255, 0.9);
	text-align: center;
	border-radius: 5px;
	overflow: hidden;
	margin: 5em auto;
	height: 350px;
	width: 700px;
}

/* 	Product details  */
.product-details {
	position: relative;
	text-align: left;
	overflow: hidden;
	padding: 30px;
	height: 100%;
	float: left;
	width: 40%;
}

/* 	Product Name */
#container .product-details h1 {
	font-family: "Old Standard TT", serif;
	display: inline-block;
	position: relative;
	font-size: 34px;
	color: #344055;
	margin: 0;
}

#container .product-details h1:before {
	position: absolute;
	content: "";
	right: 0%;
	top: 0%;
	transform: translate(25px, -15px);
	font-family: "Farsan", cursive;
	display: inline-block;

	border-radius: 5px;
	font-size: 14px;
	padding: 5px;
	color: #fff;
	margin: 0;

}


/*Product Rating  */
.hint-star {
	display: inline-block;
	margin-left: 0.5em;
	color: gold;
	width: 50%;
}

/* The most important information about the product */


/* control */

.control {
	position: absolute;
	bottom: 20%;
	left: 22.8%;
}
/* the Button */
.btn {
	transform: translateY(0px);
	transition: 0.3s linear;
	background: #49c608;
	border-radius: 5px;
	position: relative;
	overflow: hidden;
	cursor: pointer;
	outline: none;
	border: none;
	color: #eee;
	padding: 0;
	margin: 0;
}

.btn:hover {
	transform: translateY(-4px);
}

.btn span {
	font-family: "Farsan", cursive;
	transition: transform 0.3s;
	display: inline-block;
	padding: 10px 20px;
	font-size: 1.2em;
	margin: 0;
}
/* shopping cart icon */
.btn .price,
.shopping-cart {
	background: #333;
	border: 0;
	margin: 0;
}

.btn .price {
	transform: translateX(-10%);
	padding-right: 15px;
}

/* the Icon */
.btn .shopping-cart {
	transform: translateX(-100%);
	position: absolute;
	background: #333;
	z-index: 1;
	left: 0;
	top: 0;
}

/* buy */
.btn .buy {
	z-index: 3;
	font-weight: bolder;
}

.btn:hover .price {
	transform: translateX(-110%);
}

.btn:hover .shopping-cart {
	transform: translateX(0%);
}

/* product image  */
.product-image {
	transition: all 0.3s ease-out;
	display: inline-block;
	position: relative;
	overflow: hidden;
	height: 100%;
	width: 50%;
	display: inline-block;
}

#container img {
	width: 100%;
	height: 100%;
}

.info {
	background: rgba(27, 26, 26, 0.9);
	font-family: "Farsan", cursive;
	transition: all 0.3s ease-out;
	transform: translateX(-100%);
	position: absolute;
	line-height: 1.9;
	text-align: left;
	font-size: 120%;
	cursor: no-drop;
	color: #fff;
	height: 100%;
	width: 100%;
	left: 0;
	top: 0;
}

.info h2 {
	text-align: center;
}
.product-image:hover .info {
	transform: translateX(0);
}

.info ul li {
	transition: 0.3s ease;
}
.info ul li:hover {
	transform: translateX(50px) scale(1.3);
}

.product-image:hover img {
	transition: all 0.3s ease-out;
}
.product-image:hover img {
	transform: scale(1.2, 1.2);
}

body {
    background: beige;
}

</style>

@section('content')




        <div id="container">


<div class="product-details">


<h1>{{$proizvod->naziv}}</h1>
    <p>boja: {{$proizvod->boja}}</p>
    <p>{{$proizvod->opis}}</p>

<div class="control">




 <p>{{$proizvod->cena}} RSD</p>

 <form action="/dodaj" method="post">
                {{ csrf_field() }}
                <input style="display:none;" type="text" name="id" value="{{$proizvod->id}}">
                <button type="submit">Dodaj u korpu</button>
            </form>




</div>

</div>



<div class="product-image">

<img style="width: 200px;" src="{{$proizvod->slika}}" alt="Omar Dsoky">

<div class="info">
<h2>The Description</h2>
<ul>
    <li><strong>Materijal: </strong>{{$proizvod->materijal}}</li>
    <li><strong>Dimenzije: </strong>{{$proizvod->dimenzije}}</li>

</ul>
</div>
</div>


</div>




@endsection
