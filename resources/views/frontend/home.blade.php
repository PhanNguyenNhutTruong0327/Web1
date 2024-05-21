@extends('layouts.site')
@section('title', 'Home')
@section('content')
<x-slider/>
<x-product-new/>
<x-product-category-home/>
<x-flash-sale/>
<x-last-post/>

@endsection
