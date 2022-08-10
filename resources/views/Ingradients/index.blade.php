@extends('Layouts.layout')

@section('title')
    <title>Ingradients</title>
@endsection

@section('body')
<div class="flex flex-wrap justify-center">
    @foreach($ingrads as $ingradient)
        <div class="bg-white border-2 border-gray-400 rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    {{ $ingradient->name }}
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection