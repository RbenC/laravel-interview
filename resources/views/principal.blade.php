@extends('layouts.app')

@section('titulo')
    Aprende a tocar el piano
@endsection

@section('contenido')
    <div class="md:flex md:justifyy-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img class="p-10 w-80" src="img/escuelamusica.png" alt="logo escuela de musica">
        </div>
        
        <div class="md:w-4/12">
            <p class="p-10 text-2xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse unde voluptates, labore hic voluptate error id quo ducimus commodi, non aliquam quod odit distinctio neque provident placeat alias quia reiciendis?  
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia animi assumenda enim quos quibusdam iusto incidunt, totam blanditiis praesentium facere nam id illum molestias quaerat laudantium iste eaque cum. Unde?
            </p>
            

            <a href="{{ route('chatspiano') }}" class="text-3xl bg-gray-600 hover:bg-gray-700 transition-colors cursor-pointer uppercase font-bold min-w-fit p-5 mx-10 my-10 text-white rounded-lg">Chat</a>            
        </div>

    </div>
@endsection
