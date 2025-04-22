@extends('app')

@section('content')
  <div class="section-wrapper">
    <x-sections.first :products="$products" />
    <x-sections.second :benefits="$benefits" />
    <x-sections.third :products="$products" />
    <x-sections.fourth />
    <x-sections.fifth :testimonials="$testimonials" />
    <x-sections.sixth :articles="$articles" />
  </div>
@endsection
