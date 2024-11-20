@extends('layouts.plantilla2')
    @section('contenido')

<link rel="stylesheet" href="{{ asset('css/infoenf.css') }}">
    <div class="doble-columna">
        <div class="card-efermedad">
            <div class="card-body">
                <h1 class="titulo">TDAH</h1>
                <text class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rerum amet nihil possimus aliquid ipsam fugiat expedita quaerat quod? Quidem aspernatur commodi consectetur dolore cumque ipsam similique illo unde maxime.
                </text>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('img/xtdah.png') }}" alt="">
        </div>
    </div>

    <div class="consejos-container">
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora facilis voluptate velit itaque sit amet doloremque, fugiat porro? Illum numquam sunt sed exercitationem commodi ratione eveniet quasi et quaerat ut.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora facilis voluptate velit itaque sit amet doloremque, fugiat porro? Illum numquam sunt sed exercitationem commodi ratione eveniet quasi et quaerat ut.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora facilis voluptate velit itaque sit amet doloremque, fugiat porro? Illum numquam sunt sed exercitationem commodi ratione eveniet quasi et quaerat ut.
                </text>
            </div>
        </div>
    </div>

    
    <div class="logged-message">
        @auth
        
            <h1>¡Consulta con un especialista!</h1>
            <p>
            Contamos con especialistas que te ayudarán a darle un seguimiento más profesional a tu salud mental
            
            </p>
            <div class="button-container">
                <button class="btn-custom">Directorio de especialistas</button>
            </div>
            
        @endauth
    </div>

@endsection