@extends('layouts.app')


@section('titulo')

    <div class="md:flex md:justify-center md:gap-20 md:items-center mb-60">
        <div class="md:w-6/12">
            Aprende a tocar el piano
        </div>

        <div class="md:w-4/12">
            Hola: MARIA_1234
        </div>
    </div>
    

@endsection


@section('contenido')
    
        
        <div class="mt-20">
            <form  action="{{ route('chatspiano') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    
                    <input 
                        id="chat_line"
                        name="chat_line"
                        type="text"
                        class="border w-full rounded-lg text-md p-5 text-left"
                        value="{{ old('chat_line') }}"
                    >
                    <input 
                        id="username"
                        name="username"
                        type="hidden"                        
                        value="MARIA_1234"                        
                    >
                    
                </div>
                <input  type="submit" 
                        value="Enviar"
                        class="bg-gray-600 hover:bg-gray-700 transition-colors cursor-pointer uppercase font-bold p-3 text-white rounded-lg"
                >
            </form>
        </div>


@endsection