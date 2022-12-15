@extends('layout')

@section('banner')
<div class="iq-breadcrumb-one  iq-bg-over " style="background-image: url(images/video/bg.jpg);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title">عرض الكل</h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                        <li class="breadcrumb-item active">أفلام</li>
                    </ol>
                </nav>
                <div class="text-center">
                    @foreach ($categories as $category)
                    <a href="{{ route('movies.index' , ['category' => $category['name']]) }}">
                        <h4>
                            {{ $category['description'] }}
                        </h4>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@livewire('movies-list' , ['category' => $selected_category])
@endsection
